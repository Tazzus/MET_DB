<?php

namespace App\Controller\Admin;

use App\Entity\Departement;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class DepartementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Departement::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('departement')
            ->setEntityLabelInPlural('departements')
            ->setPageTitle('index', 'Departement')
            ->setPageTitle('new', 'Ajouter un departement')
            ->setPageTitle('edit', fn (Departement $departement) => sprintf('Modifier <b>%s</b>', $departement->getDepartementname()))
            ->setPageTitle('detail', fn (Departement $departement) => (string) $departement);
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('departementid')
            ->add('departementname');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('departementid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('departementname', 'Nom du departement')
        ];
    }
}
