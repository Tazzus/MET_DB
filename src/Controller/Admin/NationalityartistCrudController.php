<?php

namespace App\Controller\Admin;

use App\Entity\Nationalityartist;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NationalityartistCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Nationalityartist::class;
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
