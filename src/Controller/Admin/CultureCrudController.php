<?php

namespace App\Controller\Admin;

use App\Entity\Culture;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class CultureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Culture::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('culture')
            ->setEntityLabelInPlural('cultures')
            ->setPageTitle('index', 'Les cultures')
            ->setPageTitle('new', 'Créer une culture')
            ->setPageTitle('edit', fn (Culture $culture) => sprintf('Modifier <b>%s</b>', $culture->getCulturename()))
            ->setPageTitle('detail', fn (Culture $culture) => (string) $culture)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('cultureid')
            ->add('culturename')
            ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('cultureid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('culturename', 'Culture'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {

        return $actions
            ->setPermission(Action::NEW, 'ROLE_ADMIN')
            ->setPermission(Action::EDIT, 'ROLE_ADMIN')
            ->setPermission(Action::DELETE, 'ROLE_ADMIN');
    }
}
