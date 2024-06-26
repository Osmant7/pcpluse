<?php

namespace App\Controller\Admin;

use App\Entity\Order;
use phpDocumentor\Reflection\Types\Boolean;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OrderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Order::class;
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
            TextField::new('client_name'),
            TextField::new('billing_address')->hideOnIndex(),
            TextField::new('shipping_address')->hideOnIndex(),
            TextField::new('stripeClientSecret')->hideOnIndex(),
            IntegerField::new('quantity'),
            BooleanField::new('isPayed'),
            ChoiceField::new('status')->setChoices([
                'En cours' => 'En cours',
                'Commande validée' => 'Commande validée',
                'Commande en cours d\'expédition' => 'Commande en cours d\'expédition',
                'Commande livrée' => 'Commande livrée'
            ]),
            MoneyField::new('order_cost')->setCurrency("EUR"),
            MoneyField::new('taxe')->setCurrency("EUR"),
            MoneyField::new('order_cost_ttc')->setCurrency("EUR"),
        ];
    }
    
}
