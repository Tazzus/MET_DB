<?php

namespace App\Controller\User;

use App\Entity\Rightsandreproduction;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class RightsandreproductionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Rightsandreproduction::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Droit d\'auteur')
            ->setEntityLabelInPlural('Droits d\'auteurs')
            ->setPageTitle('index', 'Les droits d\'auteurs')
            ->setPageTitle('new', 'Créer un droit d\'auteur')
            ->setPageTitle('edit', fn (Rightsandreproduction $rightsandreproduction) => sprintf('Modifier <b>%s</b>', $rightsandreproduction->getRightsandreproduction()))
            ->setPageTitle('detail', fn (Rightsandreproduction $rightsandreproduction) => (string) $rightsandreproduction);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('rightsandreproductionid')
            ->add('rightsandreproduction');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('rightsandreproductionid', 'ID')->hideOnForm()->hideOnIndex(),
            TextareaField::new('rightsandreproduction', 'Droits d\'auteurs'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::DELETE, Action::EDIT);
    }
}
