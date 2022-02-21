<?php

namespace App\Controller\User;

use App\Entity\Artistprefix;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class ArtistprefixCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artistprefix::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('préfix')
            ->setEntityLabelInPlural('préfix')
            ->setPageTitle('index', 'Les préfix des artistes')
            ->setPageTitle('new', 'Créer un préfix')
            ->setPageTitle('edit', fn (Artistprefix $artistprefix) => sprintf('Modifier <b>%s</b>', $artistprefix->getArtistprefix()))
            ->setPageTitle('detail', fn (Artistprefix $artistprefix) => (string) $artistprefix)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('artistprefixid')
            ->add('artistprefix')
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('artistprefixid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('artistprefix', 'Préfix'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::DELETE, Action::EDIT);
    }
}
