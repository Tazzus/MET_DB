<?php

namespace App\Controller\User;

use App\Entity\Locus;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class LocusCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Locus::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Locus')
            ->setEntityLabelInPlural('Locus')
            ->setPageTitle('index', 'Les locus')
            ->setPageTitle('new', 'Créer un locus')
            ->setPageTitle('edit', fn (Locus $locus) => sprintf('Modifier <b>%s</b>', $locus->getLocusname()))
            ->setPageTitle('detail', fn (Locus $locus) => (string) $locus);
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('locusid')
            ->add('locusname');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('locusid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('locusname', 'Nom du locus'),
            AssociationField::new('localeid', 'Locale')->autocomplete()->hideOnIndex(),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::DELETE, Action::EDIT);
    }
}
