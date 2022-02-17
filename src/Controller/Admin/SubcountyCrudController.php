<?php

namespace App\Controller\Admin;

use App\Entity\Subcounty;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SubcountyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Subcounty::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
