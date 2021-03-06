<?php

namespace App\Controller\Admin;

use App\Entity\Constituent;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class ConstituentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Constituent::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Contituant')
            ->setEntityLabelInPlural('Contituants')
            ->setPageTitle('index', 'Les contituants')
            ->setPageTitle('new', 'Créer un contituant')
            ->setPageTitle('edit', fn (Constituent $constituent) => sprintf('Modifier <b>%s</b>', $constituent->getConstituentnumber()))
            ->setPageTitle('detail', fn (Constituent $constituent) => (string) $constituent)
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('constituentid')
            ->add('constituentnumber')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('constituentid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('constituentnumber', 'Numéro contituant'),
        ];
    }
}
