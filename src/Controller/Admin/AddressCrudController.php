<?php

namespace App\Controller\Admin;

use App\Entity\Address;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AddressCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Address::class;
    }

    // ici lorsque on est sur la page Index ( de /admin ) on proposera les détails, etc pour les autres pages edit..
    public function configureActions(Actions $actions): Actions {
        return $actions->add(Crud::PAGE_EDIT, Action::INDEX)
                       ->add(Crud::PAGE_INDEX, Action::DETAIL)
                       ->add(Crud::PAGE_EDIT, Action::DETAIL);
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name', "Address name"),
            TextField::new('client_name'),
            ChoiceField::new('address_type')->setChoices([
                'Facturation' => 'Facturation',
                'Livraison' => 'Livraison'
            ]),
            TextField::new('street'),
            TextField::new('city'),
            CountryField::new('state'),
            TextField::new('code_postal'),
            AssociationField::new('user'),
            TextEditorField::new('more_details'),
        ];
    }
    
}
