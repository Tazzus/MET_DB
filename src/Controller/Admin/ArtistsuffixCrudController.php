<?php

namespace App\Controller\Admin;

use App\Entity\Artistsuffix;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class ArtistsuffixCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artistsuffix::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('suffix')
            ->setEntityLabelInPlural('suffix')
            ->setPageTitle('index', 'Les suffix des artistes')
            ->setPageTitle('new', 'Créer un suffix')
            ->setPageTitle('edit', fn (Artistsuffix $artistsuffix) => sprintf('Modifier <b>%s</b>', $artistsuffix->getArtistsuffix()))
            ->setPageTitle('detail', fn (Artistsuffix $artistsuffix) => (string) $artistsuffix)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('artistsufixid')
            ->add('artistsuffix')
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('artistsufixid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('artistsuffix', 'Suffix'),
        ];
    }
}
