<?php

namespace App\Controller\Admin;

use App\Entity\Objectname;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class ObjectnameCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Objectname::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('objet')
            ->setEntityLabelInPlural('objets')
            ->setPageTitle('index', 'Type d\'objet')
            ->setPageTitle('new', 'Créer un objet')
            ->setPageTitle('edit', fn (Objectname $objectname) => sprintf('Modifier <b>%s</b>', $objectname->getObjectname()))
            ->setPageTitle('detail', fn (Objectname $objectname) => (string) $objectname)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('objectid')
            ->add('objectname')
            ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('objectid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('objectname', 'Type d\'objet'),
        ];
    }
}
