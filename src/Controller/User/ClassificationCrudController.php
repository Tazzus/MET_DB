<?php

namespace App\Controller\User;

use App\Entity\Classification;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class ClassificationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Classification::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Classification')
            ->setEntityLabelInPlural('Classifications')
            ->setPageTitle('index', 'Les classifications')
            ->setPageTitle('new', 'Créer une classification')
            ->setPageTitle('edit', fn (Classification $classification) => sprintf('Modifier <b>%s</b>', $classification->getClassification()))
            ->setPageTitle('detail', fn (Classification $classification) => (string) $classification)
        ;
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('classificationid')
            ->add('classification')
        ;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('classificationid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('classification', 'Classification'),
            AssociationField::new('oeuvreid', 'Oeuvre')->autocomplete()->hideOnIndex(),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::DELETE, Action::EDIT);
    }
}
