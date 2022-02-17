<?php

namespace App\Controller\Admin;

use App\Entity\Artistprefix;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ArtistprefixCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artistprefix::class;
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
