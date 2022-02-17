<?php

namespace App\Controller\Admin;

use App\Entity\River;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RiverCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return River::class;
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
