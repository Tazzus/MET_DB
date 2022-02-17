<?php

namespace App\Controller\Admin;

use App\Entity\Roleartist;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class RoleartistCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Roleartist::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('roleartistid')->hideOnForm(),
            TextField::new('artistrole'),
        ];
    }
    
}
