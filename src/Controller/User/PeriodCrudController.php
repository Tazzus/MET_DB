<?php

namespace App\Controller\User;

use App\Entity\Period;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class PeriodCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Period::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('période')
            ->setEntityLabelInPlural('périodes')
            ->setPageTitle('index', 'Les périodes')
            ->setPageTitle('new', 'Créer une période')
            ->setPageTitle('edit', fn (Period $period) => sprintf('Modifier <b>%s</b>', $period->getPeriodname()))
            ->setPageTitle('detail', fn (Period $period) => (string) $period)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('periodid')
            ->add('periodname')
            ->add('reignid')
            ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('roleartistid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('periodname', 'Période'),
            AssociationField::new('reignid', 'Règne')->autocomplete()->hideOnIndex(),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::DELETE, Action::EDIT);
    }
}
