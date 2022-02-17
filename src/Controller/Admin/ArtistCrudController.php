<?php

namespace App\Controller\Admin;

use App\Entity\Artist;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class ArtistCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artist::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('artistid')
            ->add('artistdisplayname')
            ->add('artistbegindate')
        ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //Field::new('artistid'),
            Field::new('artistdisplayname'),
            Field::new('artistbegindate'),
            Field::new('artistenddate'),
            Field::new('artistgender'),
            UrlField::new('artistulanurl'),
            UrlField::new('artistwikidataurl'),
            Field::new('artistalphasort'),
            /*
            AssociationField::new('roleartistid')->setCrudController(RoleartistCrudController::class),
            AssociationField::new('nationalityid')->setCrudController(NationalityartistCrudController::class),
            AssociationField::new('artistprefixid')->setCrudController(ArtistprefixCrudController::class),
            AssociationField::new('artistsufixid')->setCrudController(ArtistsuffixCrudController::class),
            AssociationField::new('oeuvreid')->setCrudController(OeuvreCrudController::class),
            */
        ];
    }
    
}
