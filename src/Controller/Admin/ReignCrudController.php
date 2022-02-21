<?php

namespace App\Controller\Admin;

use App\Entity\Reign;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use PhpParser\Node\Expr\BinaryOp\Equal;

class ReignCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reign::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Règne')
            ->setEntityLabelInPlural('Règnes')
            ->setPageTitle('index', 'Les règnes')
            ->setPageTitle('new', 'Créer un règne')
            ->setPageTitle('edit', fn (Reign $reign) => sprintf('Modifier <b>%s</b>', $reign->getLeadername()))
            ->setPageTitle('detail', fn (Reign $reign) => (string) $reign);
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('reignid')
            ->add('leadername');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('reignid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('leadername', 'Nom du leader'),
            AssociationField::new('periodid', 'ID période')->autocomplete()->hideOnIndex(),
        ];
    }
}
