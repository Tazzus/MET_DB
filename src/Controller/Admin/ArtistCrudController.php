<?php

namespace App\Controller\Admin;

use App\Entity\Artist;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class ArtistCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artist::class;
    }


    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('artiste')
            ->setEntityLabelInPlural('artistes')
            ->setPageTitle('index', 'Les artistes')
            ->setPageTitle('new', 'Créer un artiste')
            ->setPageTitle('edit', fn (Artist $artist) => sprintf('Modifier <b>%s</b>', $artist->getArtistdisplayname()))
            ->setPageTitle('detail', fn (Artist $artist) => (string) $artist);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('artistid')
            ->add('artistdisplayname')
            ->add('artistalphasort')
            ->add('artistprefixid')
            ->add('artistsufixid')
            ->add('artistbegindate')
            ->add('artistenddate')
            ->add('artistgender')
            ->add('artistulanurl')
            ->add('artistwikidataurl')
            ->add('roleartistid')
            ->add('nationalityid')
            //->add('oeuvreid')
            ;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('artistid', 'ID')->hideOnForm()->hideOnIndex(),
            Field::new('artistdisplayname', 'Nom'),
            Field::new('artistalphasort', 'Surnom'),
            AssociationField::new('artistprefixid', 'Prefix')->autocomplete(),
            AssociationField::new('artistprefixid', 'Suffix')->autocomplete(),
            Field::new('artistbegindate', 'Date de naissance'),
            Field::new('artistenddate', 'Date de décès'),
            Field::new('artistgender', 'Genre'),
            UrlField::new('artistulanurl', 'getty.edu'),
            UrlField::new('artistwikidataurl', 'Wiki'),
            AssociationField::new('roleartistid', 'Role')->autocomplete(),
            AssociationField::new('nationalityid', 'Nationnalité')->autocomplete(),
            AssociationField::new('oeuvreid', 'Nb Oeuvres')->autocomplete(),
        ];
    }
}
