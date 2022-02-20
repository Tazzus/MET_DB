<?php

namespace App\Controller\Admin;

use App\Entity\Roleartist;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class RoleartistCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Roleartist::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('rôle')
            ->setEntityLabelInPlural('rôles')
            ->setPageTitle('index', 'Les rôles des artistes')
            ->setPageTitle('new', 'Créer un rôle')
            ->setPageTitle('edit', fn (Roleartist $roleartist) => sprintf('Modifier <b>%s</b>', $roleartist->getArtistrole()))
            ->setPageTitle('detail', fn (Roleartist $roleartist) => (string) $roleartist)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('roleartistid')
            ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('roleartistid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('artistrole', 'Rôle artiste'),
        ];
    }
    
}
