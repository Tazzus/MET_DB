<?php

namespace App\Controller\User;

use App\Entity\Country;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class CountryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Country::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('country')
            ->setEntityLabelInPlural('country')
            ->setPageTitle('index', 'Pays')
            ->setPageTitle('new', 'Ajouter un payes')
            ->setPageTitle('edit', fn (Country $country) => sprintf('Modifier <b>%s</b>', $country->getCountryname()))
            ->setPageTitle('detail', fn (Country $country) => (string) $country);
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('countryid')
            ->add('countryname');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('countryid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('countryname', 'Nom du pays'),
            AssociationField::new('oeuvreid', 'Oeuvre')->autocomplete()->hideOnIndex()->hideOnForm()
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::DELETE, Action::EDIT);
    }
}
