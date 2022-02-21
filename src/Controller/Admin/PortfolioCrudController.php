<?php

namespace App\Controller\Admin;

use App\Entity\Portfolio;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class PortfolioCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Portfolio::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Portfolio')
            ->setEntityLabelInPlural('Portfolios')
            ->setPageTitle('index', 'Les portfolios')
            ->setPageTitle('new', 'Créer un portfolio')
            ->setPageTitle('edit', fn (Portfolio $portfolio) => sprintf('Modifier <b>%s</b>', $portfolio->getPortfolioname()))
            ->setPageTitle('detail', fn (Portfolio $portfolio) => (string) $portfolio)
        ;
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('portfolioid')
            ->add('portfolioname')
        ;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('portfolioid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('portfolioname', 'Nom du portfolio'),
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
