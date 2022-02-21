<?php

namespace App\Controller\Admin;

use App\Entity\Locale;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class LocaleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Locale::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Locale')
            ->setEntityLabelInPlural('Locales')
            ->setPageTitle('index', 'Les locales')
            ->setPageTitle('new', 'Ajouter un locale')
            ->setPageTitle('edit', fn (Locale $locale) => sprintf('Modifier <b>%s</b>', $locale->getLocalename()))
            ->setPageTitle('detail', fn (Locale $locale) => (string) $locale)
        ;
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('localeid')
            ->add('localename')
        ;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('localeid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('localename', 'Locales'),
            AssociationField::new('excavationid', 'Excavation')->autocomplete()->hideOnIndex(),
            AssociationField::new('locusid', 'Locus')->autocomplete()->hideOnIndex(),
        ];
    }
}
