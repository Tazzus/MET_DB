<?php

namespace App\Controller\Admin;

use App\Entity\Subcounty;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class SubcountyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Subcounty::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('subcounty')
            ->setEntityLabelInPlural('subcounts')
            ->setPageTitle('index', 'Sous-comté')
            ->setPageTitle('new', 'Ajouter un sous-comté')
            ->setPageTitle('edit', fn (Subcounty $subcounty) => sprintf('Modifier <b>%s</b>', $subcounty->getSubcountyname()))
            ->setPageTitle('detail', fn (Subcounty $subcounty) => (string) $subcounty);
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('subcountyid')
            ->add('subcountyname')
            ->add('regionid');
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('subcountyid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('subcountyname', 'Nom du sous-comté'),
            AssociationField::new('regionid', 'Region')->autocomplete(),
            AssociationField::new('oeuvreid', 'Oeuvre')->autocomplete()->hideOnIndex()
        ];
    }
}
