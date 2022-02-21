<?php

namespace App\Controller\Admin;

use App\Entity\Mettable;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;

class MettableCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Mettable::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('id')
            ->add('objectnumber')
            ->add('ishighlight')
            ->add('istimelinework')
            ->add('ispublicdomain')
            ->add('objectid')
            ->add('gallerynumber')
            ->add('department')
            ->add('accessionyear')
            ->add('objectname')
            ->add('title')
            ->add('culture')
            ->add('period')
            ->add('dynasty')
            ->add('reign')
            ->add('portfolio')
            ->add('constituentid')
            ->add('artistrole')
            ->add('artistprefix')
            ->add('artistdisplayname')
            ->add('artistsuffix')
            ->add('artistalphasort')
            ->add('artistnationality')
            ->add('artistbegindate')
            ->add('artistenddate')
            ->add('artistgender')
            ->add('artistulanurl')
            ->add('artistwikidataurl')
            ->add('objectbegindate')
            ->add('objectenddate')
            ->add('medium')
            ->add('dimensions')
            ->add('creditline')
            ->add('geographytype')
            ->add('city')
            ->add('county')
            ->add('country')
            ->add('region')
            ->add('subregion')
            ->add('locale')
            ->add('locus')
            ->add('excavation')
            ->add('river')
            ->add('classification')
            ->add('rightsandreproduction')
            ->add('linkresource')
            ->add('objectwikidataurl')
            ->add('repository')
            ->add('tags')
            ->add('tagaaturl')
            ->add('tagswikidataurl')
        ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addTab('Informations'),
            IdField::new('id')->hideOnForm()->hideOnIndex(),
            TextField::new('objectnumber')->hideOnIndex(),
            BooleanField::new('ishighlight')->hideOnIndex(),
            BooleanField::new('istimelinework')->hideOnIndex(),
            BooleanField::new('ispublicdomain')->hideOnIndex(),
            IdField::new('objectid'),
            TextField::new('gallerynumber')->hideOnIndex(),
            TextField::new('department'),
            IntegerField::new('accessionyear'),
            TextField::new('objectname'),
            TextField::new('title'),
            TextField::new('culture'),
            TextField::new('period')->hideOnIndex(),
            TextField::new('dynasty')->hideOnIndex(),
            TextField::new('reign')->hideOnIndex(),
            TextField::new('portfolio')->hideOnIndex(),
            TextField::new('constituentid')->hideOnIndex(),

            FormField::addTab('Details Artist'),
            FormField::addPanel('Details Artist'),
            TextField::new('artistrole'),
            TextField::new('artistprefix')->hideOnIndex(),
            TextField::new('artistdisplayname'),
            TextField::new('artistsuffix')->hideOnIndex(),
            TextField::new('artistalphasort')->hideOnIndex(),
            TextField::new('artistnationality')->hideOnIndex(),
            TextField::new('artistbegindate')->hideOnIndex(),
            TextField::new('artistenddate')->hideOnIndex(),
            TextField::new('artistgender')->hideOnIndex(),
            UrlField::new('artistulanurl')->hideOnIndex(),
            UrlField::new('artistwikidataurl')->hideOnIndex(),

            FormField::addTab('Details object'),
            FormField::addPanel('Details object'),
            IntegerField::new('objectbegindate'),
            IntegerField::new('objectenddate'),
            TextField::new('medium'),
            TextField::new('dimensions'),
            TextField::new('creditline')->hideOnIndex(),

            FormField::addTab('Details Geographic'),
            FormField::addPanel('Details Geographic'),
            TextField::new('geographytype')->hideOnIndex(),
            TextField::new('city'),
            TextField::new('county')->hideOnIndex(),
            TextField::new('country'),
            TextField::new('region')->hideOnIndex(),
            TextField::new('subregion')->hideOnIndex(),
            TextField::new('locale')->hideOnIndex(),
            TextField::new('locus')->hideOnIndex(),
            TextField::new('excavation')->hideOnIndex(),
            TextField::new('river')->hideOnIndex(),

            FormField::addTab('Other Informations'),
            FormField::addPanel('Other Information'),
            TextField::new('classification')->hideOnIndex(),
            TextField::new('rightsandreproduction')->hideOnIndex(),
            TextField::new('linkresource')->hideOnIndex(),
            TextField::new('objectwikidataurl')->hideOnIndex(),
            TextField::new('repository')->hideOnIndex(),
            TextField::new('tags'),
            UrlField::new('tagaaturl')->hideOnIndex(),
            UrlField::new('tagswikidataurl')->hideOnIndex(),
        ];
    }
    
}
