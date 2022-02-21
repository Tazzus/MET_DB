<?php

namespace App\Controller\User;

use App\Entity\Repository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class RepositoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Repository::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Musée')
            ->setEntityLabelInPlural('Musées')
            ->setPageTitle('index', 'Les musées')
            ->setPageTitle('new', 'Créer un musée')
            ->setPageTitle('edit', fn (Repository $repository) => sprintf('Modifier <b>%s</b>', $repository->getRepository()))
            ->setPageTitle('detail', fn (Repository $repository) => (string) $repository);
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('repositoryid')
            ->add('repository');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('repositoryid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('repository', 'Musées'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::DELETE, Action::EDIT);
    }
}
