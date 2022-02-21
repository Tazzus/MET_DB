<?php

namespace App\Controller\Admin;

use App\Entity\City;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class CityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return City::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('ville')
            ->setEntityLabelInPlural('villes')
            ->setPageTitle('index', 'Villes')
            ->setPageTitle('new', 'Ajouter une ville')
            ->setPageTitle('edit', fn (City $city) => sprintf('Modifier <b>%s</b>', $city->getCityname()))
            ->setPageTitle('detail', fn (City $city) => (string) $city);
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('cityid')
            ->add('cityname')
            ->add('countryid');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('cityid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('cityname', 'Nom du la ville'),
            AssociationField::new('countryid', 'Pays')->autocomplete(),
            AssociationField::new('oeuvreid', 'Oeuvre')->autocomplete()->hideOnIndex()->hideOnForm()
        ];
    }
}
