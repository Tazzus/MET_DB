<?php

namespace App\Controller\User;

use App\Entity\Nationalityartist;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class NationalityartistCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Nationalityartist::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('nationalité')
            ->setEntityLabelInPlural('nationalités')
            ->setPageTitle('index', 'Les nationalités des artistes')
            ->setPageTitle('new', 'Créer une nationakuté')
            ->setPageTitle('edit', fn (Nationalityartist $nationalityartist) => sprintf('Modifier <b>%s</b>', $nationalityartist->getNationality()))
            ->setPageTitle('detail', fn (Nationalityartist $nationalityartist) => (string) $nationalityartist)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nationalityid')
            ->add('nationality')
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('nationalityid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('nationality', 'Nationalité'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::DELETE, Action::EDIT);
    }
}
