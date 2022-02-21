<?php

namespace App\Controller\Admin;

use App\Entity\Region;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class RegionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Region::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('region')
            ->setEntityLabelInPlural('regions')
            ->setPageTitle('index', 'Region')
            ->setPageTitle('new', 'Ajouter une region')
            ->setPageTitle('edit', fn (Region $region) => sprintf('Modifier <b>%s</b>', $region->getRegionname()))
            ->setPageTitle('detail', fn (Region $region) => (string) $region);
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('regionid')
            ->add('regionname')
            ->add('countryid');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('regionid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('regionname', 'Nom région'),
            AssociationField::new('countryid', 'Pays')->autocomplete(),
            AssociationField::new('oeuvreid', 'Oeuvre')->autocomplete()->hideOnIndex()
        ];
    }
}
