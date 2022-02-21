<?php

namespace App\Controller\Admin;

use App\Entity\Excavation;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class ExcavationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Excavation::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Excavation')
            ->setEntityLabelInPlural('Excavations')
            ->setPageTitle('index', 'Les excavations')
            ->setPageTitle('new', 'Créer une excavation')
            ->setPageTitle('edit', fn (Excavation $excavation) => sprintf('Modifier <b>%s</b>', $excavation->getExcavationname()))
            ->setPageTitle('detail', fn (Excavation $excavation) => (string) $excavation)
        ;
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('excavationid')
            ->add('excavationname')
        ;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('excavationid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('excavationname', 'Nom de l\'excavation'),
            AssociationField::new('localeid', 'ID locale')->autocomplete()->hideOnIndex(),
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
