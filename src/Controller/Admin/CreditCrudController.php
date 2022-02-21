<?php

namespace App\Controller\Admin;

use App\Entity\Credit;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class CreditCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Credit::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('crédit')
            ->setEntityLabelInPlural('crédits')
            ->setPageTitle('index', 'Les crédits')
            ->setPageTitle('new', 'Créer un crédit')
            ->setPageTitle('edit', fn (Credit $credit) => sprintf('Modifier <b>%s</b>', $credit->getCreditline()))
            ->setPageTitle('detail', fn (Credit $credit) => (string) $credit)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('creditid')
            ->add('creditline')
            ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('creditid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('creditline', 'Crédits'),
        ];
    }
}
