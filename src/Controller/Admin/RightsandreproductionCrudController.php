<?php

namespace App\Controller\Admin;

use App\Entity\Rightsandreproduction;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RightsandreproductionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Rightsandreproduction::class;
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
