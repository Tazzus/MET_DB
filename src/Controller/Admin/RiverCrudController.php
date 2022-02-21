<?php

namespace App\Controller\Admin;

use App\Entity\River;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class RiverCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return River::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Rivière')
            ->setEntityLabelInPlural('Rivières')
            ->setPageTitle('index', 'Les rivières')
            ->setPageTitle('new', 'Créer une rivière')
            ->setPageTitle('edit', fn (River $river) => sprintf('Modifier <b>%s</b>', $river->getRivername()))
            ->setPageTitle('detail', fn (River $river) => (string) $river)
        ;
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('riverid')
            ->add('rivername')
        ;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('riverid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('rivername', 'Nom de la rivière'),
            AssociationField::new('countryid', 'Pays')->autocomplete(),
        ];
    }
}
