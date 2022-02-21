<?php

namespace App\Controller\User;

use App\Entity\Title;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class TitleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Title::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('titre')
            ->setEntityLabelInPlural('titres')
            ->setPageTitle('index', 'Les titres')
            ->setPageTitle('new', 'Créer un titre')
            ->setPageTitle('edit', fn (Title $title) => sprintf('Modifier <b>%s</b>', $title->getTitlename()))
            ->setPageTitle('detail', fn (Title $title) => (string) $title)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('titleid')
            ->add('titlename')
            ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('titleid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('titlename', 'Titre'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::DELETE, Action::EDIT);
    }
}
