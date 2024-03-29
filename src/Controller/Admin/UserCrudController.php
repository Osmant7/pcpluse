<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Symfony\Component\Form\FormEvents;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Symfony\Component\Form\FormBuilderInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserCrudController extends AbstractCrudController
{

    public function __construct(
        public UserPasswordHasherInterface $userPasswordHasher
    ){}

    public static function getEntityFqcn(): string
    {
        return User::class;
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
            ChoiceField::new('civility')->setChoices([
                'Monsieur' => 'Mr',
                'Madame' => 'Mme'
            ]),
            TextField::new('full_name'),
            EmailField::new('email'),
            TextField::new('password')
            ->setFormType(RepeatedType::class)
            ->setFormTypeOptions([
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => 'Password',
                    'hash_property_path' => 'password',
                    'row_attr'=>[
                        'class'=>"col-md-6 col-xxl-5"
                    ]
                ],
                'second_options' => [
                    'label' => 'Confirm Password',
                    'row_attr'=>[
                        'class'=>"col-md-6 col-xxl-5"
                    ]
                ],
                'mapped' => false,
            ])
            ->setRequired($pageName === Crud::PAGE_NEW)   // pr voir si on est sur la page de creation
            ->onlyOnForms(),
        ];
    }

    // lorsqu'on détecte une création
    public function createNewFormBuilder(
        EntityDto $entityDto, 
        KeyValueStore $formOptions, 
        AdminContext $context): FormBuilderInterface
    {
        $formBuilder = parent::createNewFormBuilder($entityDto, $formOptions, $context);
        // on fait appel a addpasswordeventlistener qui va soccuper dajouter un evenement
        return $this->addPasswordEventListener($formBuilder);
    }

    // lorsque modification
    public function createEditFormBuilder(
        EntityDto $entityDto, 
        KeyValueStore $formOptions, 
        AdminContext $context): FormBuilderInterface
    {
        $formBuilder = parent::createEditFormBuilder($entityDto, $formOptions, $context);
        // on fait appel a addpasswordeventlistener qui va soccuper dajouter un evenement
        return $this->addPasswordEventListener($formBuilder);
    }

    public function addPasswordEventListener(FormBuilderInterface $formBuilder): FormBuilderInterface{
        // lorsque on va soumettre les données il va systematiquement realiser un hashpassword
        return $formBuilder->addEventListener(FormEvents::POST_SUBMIT, $this->hashPassword());
    }

    private function hashPassword() {
        return function($event) {
            $form = $event->getForm();
            if (!$form->isValid()) {
                return;
            }
            $password = $form->get('password')->getData();
            if ($password === null) {
                return;
            }

            // $hash = $this->userPasswordHasher->hashPassword($this->getUser(), $password);
            // $form->getData()->setPassword($hash);
        };
    }
    
}
