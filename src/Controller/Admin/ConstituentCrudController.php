<?php

namespace App\Controller\Admin;

use App\Entity\Constituent;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ConstituentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Constituent::class;
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
