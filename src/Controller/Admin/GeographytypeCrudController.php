<?php

namespace App\Controller\Admin;

use App\Entity\Geographytype;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class GeographytypeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Geographytype::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('geographytype')
            ->setEntityLabelInPlural('geographytypes')
            ->setPageTitle('index', 'Type geographique')
            ->setPageTitle('new', 'Ajouter un type de geographie')
            ->setPageTitle('edit', fn (Geographytype $geoType) => sprintf('Modifier <b>%s</b>', $geoType->getGeographytype()))
            ->setPageTitle('detail', fn (Geographytype $geoType) => (string) $geoType);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('geographytypeid')
            ->add('geographytype');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('geographytypeid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('geographytype', 'Type géographique'),
            AssociationField::new('oeuvreid', 'Oeuvre')->autocomplete()->hideOnIndex(),
        ];
    }
}
