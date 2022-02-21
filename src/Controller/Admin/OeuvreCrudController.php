<?php

namespace App\Controller\Admin;

use App\Entity\Oeuvre;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class OeuvreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Oeuvre::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('oeuvre')
            ->setEntityLabelInPlural('oeuvres')
            ->setPageTitle('index', 'Les oeuvres')
            ->setPageTitle('new', 'Créer une oeuvre')
            ->setPageTitle('edit', fn (Oeuvre $oeuvre) => sprintf('Modifier <b>%s</b>', $oeuvre->getTitleid()->getTitlename()))
            ->setPageTitle('detail', fn (Oeuvre $oeuvre) => (string) $oeuvre)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('oeuvreid')
            ->add('objectnumber')
            ->add('ishighlight')
            ->add('istimelinework')
            ->add('ispublicdomain')
            ->add('accessionyear')
            ->add('objectbegindate')
            ->add('objectenddate')
            ->add('dimensions')
            ->add('medium')
            ->add('linkresourceurl')
            ->add('objectwikidataurl')
            ->add('titleid')
            ->add('objectid')
            ->add('cultureid')
            ->add('galleryid')
            ->add('departementid')
            ->add('periodid')
            ->add('locusid')
            ->add('tagid')
            ->add('rightsandreproductionid')
            ->add('repositoryid')
            ->add('creditid')
            ->add('constituentid')
            ->add('excavationid')
            ->add('portfolioid')
            ->add('riverid')
            ->add('countryid')
            ->add('regionid')
            ->add('subcountyid')
            ->add('cityid')
            ->add('classificationid')
            ->add('artistid')
            ->add('geographytypeid')
            ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('oeuvreid', 'ID')->hideOnForm()->hideOnIndex(),
            Field::new('objectnumber', 'Numero')->hideOnIndex(),
            BooleanField::new('ishighlight', 'Surnom')->hideOnIndex(),
            BooleanField::new('istimelinework', 'Travail chronologique')->hideOnIndex(),
            BooleanField::new('ispublicdomain', 'Domaine public')->hideOnIndex(),
            AssociationField::new('titleid', 'Titre')->autocomplete(),
            AssociationField::new('artistid', 'Par l\'/les artiste(s)')->autocomplete(),
            IntegerField::new('accessionyear', 'Année accession'),
            IntegerField::new('objectbegindate', 'Date début')->hideOnIndex(),
            IntegerField::new('objectenddate', 'Date fin')->hideOnIndex(),
            TextareaField::new('dimensions', 'Dimensions')->hideOnIndex(),
            TextareaField::new('medium', 'Matériaux'),
            UrlField::new('linkresourceurl', 'metmuseum.org'),
            UrlField::new('objectwikidataurl', 'Wiki')->hideOnIndex(),
            AssociationField::new('objectid', 'Nom objet')->autocomplete()->hideOnIndex(),
            AssociationField::new('cultureid', 'Culture')->autocomplete(),
            AssociationField::new('galleryid', 'Gallerie')->autocomplete()->hideOnIndex(),
            AssociationField::new('departementid', 'Departement')->autocomplete()->hideOnIndex(),
            AssociationField::new('periodid', 'period')->autocomplete()->hideOnIndex(),
            AssociationField::new('locusid', 'Locus')->autocomplete()->hideOnIndex(),
            AssociationField::new('tagid', 'Étiquette')->autocomplete(),
            AssociationField::new('rightsandreproductionid', 'Droits d\'auteurs')->autocomplete()->hideOnIndex(),
            AssociationField::new('repositoryid', 'Référentiel')->autocomplete()->hideOnIndex(),
            AssociationField::new('creditid', 'Crédits')->autocomplete()->hideOnIndex(),
            AssociationField::new('constituentid', 'Constituant')->autocomplete()->hideOnIndex(),
            AssociationField::new('excavationid', 'Excavation')->autocomplete()->hideOnIndex(),
            AssociationField::new('portfolioid', 'Portfolio')->autocomplete()->hideOnIndex(),
            AssociationField::new('riverid', 'Rivière')->autocomplete()->hideOnIndex(),
            AssociationField::new('countryid', 'Pays')->autocomplete()->hideOnIndex(),
            AssociationField::new('regionid', 'Region')->autocomplete()->hideOnIndex(),
            AssociationField::new('subcountyid', 'Sous-compté')->autocomplete()->hideOnIndex(),
            AssociationField::new('cityid', 'Ville')->autocomplete()->hideOnIndex(),
            AssociationField::new('classificationid', 'Classification')->autocomplete()->hideOnIndex(),
            AssociationField::new('geographytypeid', 'Type geographique')->autocomplete()->hideOnIndex(),
        ];
    }
}
