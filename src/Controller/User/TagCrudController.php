<?php

namespace App\Controller\User;

use App\Entity\Tag;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class TagCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tag::class;
    }


    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Etiquette')
            ->setEntityLabelInPlural('Etiquettes')
            ->setPageTitle('index', 'Les étiquettes')
            ->setPageTitle('new', 'Créer une étiquette')
            ->setPageTitle('edit', fn (Tag $tag) => sprintf('Modifier <b>%s</b>', $tag->getTags()))
            ->setPageTitle('detail', fn (Tag $tag) => (string) $tag);
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('tagid')
            ->add('tags')
            ->add('tagaturl')
            ->add('tagwikidataurl');
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('tagid', 'ID')->hideOnForm()->hideOnIndex(),
            TextField::new('tags', 'Etiquettes'),
            UrlField::new('tagaturl', 'getty.edu'),
            UrlField::new('tagwikidataurl', 'Wiki'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW, Action::DELETE, Action::EDIT);
    }
}
