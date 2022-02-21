<?php

namespace App\Controller\Admin;

use App\Entity\Gallery;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class GalleryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Gallery::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Gallerie')
            ->setEntityLabelInPlural('Galleries')
            ->setPageTitle('index', 'Les galleries')
            ->setPageTitle('new', 'Créer une gallerie')
            ->setPageTitle('edit', fn (Gallery $gallery) => sprintf('Modifier <b>%s</b>', $gallery->getGallerynumber()))
            ->setPageTitle('detail', fn (Gallery $gallery) => (string) $gallery)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('galleryid')
            ->add('gallerynumber')
            ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('galleryid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('gallerynumber', 'Numéro gallerie'),
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
