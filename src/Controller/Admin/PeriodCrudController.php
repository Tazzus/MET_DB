<?php

namespace App\Controller\Admin;

use App\Entity\Period;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

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
}
