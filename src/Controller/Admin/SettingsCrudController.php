<?php

namespace App\Controller\Admin;

use App\Entity\Settings;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SettingsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Settings::class;
    }

    public function configureActions(Actions $actions): Actions {
        return $actions->add(Crud::PAGE_EDIT, Action::INDEX)
                       ->add(Crud::PAGE_INDEX, Action::DETAIL)
                       ->add(Crud::PAGE_EDIT, Action::DETAIL);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('website_name'),
            TextField::new('description'),
            EmailField::new('email'),
            TelephoneField::new('phone'),
            IntegerField::new('taxe'),
            ImageField::new('logo')
                ->setBasePath("assets/images/settings")
                ->setUploadDir("/public/assets/images/settings")
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired($pageName === Crud::PAGE_NEW)
            ,
            // ChoiceField::new('currency')->setChoices([
            //     'EUR' => 'EURO',
            //     'USD' => 'USD'
            // ]),
            // TelephoneField::new('Phone'),
            TextField::new('facebook')->hideOnIndex(),
            TextField::new('youtube')->hideOnIndex(),
            TextField::new('instagram')->hideOnIndex(),
            TextField::new('street'),
            TextField::new('city'),
            TextField::new('copyright')->hideOnIndex(),
        ];
    }
    
}
