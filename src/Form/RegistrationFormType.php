<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('full_name', TextType::class, [
                'label'=>false,
                'attr'=>[
                    'placeholder' => 'Votre nom complet',
                    'class' => 'form-control'
                ],
                'row_attr'=> [
                    'class'=>'form-group mb-3'
                ]
            ])
            ->add('email', EmailType::class, [
                'label'=>false,
                'attr'=>[
                    'placeholder' => 'Votre email',
                    'class' => 'form-control'
                ],
                'row_attr'=> [
                    'class'=>'form-group mb-3'
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'attr'=>[
                    'class'=>'from-check-input'
                ],
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter les conditions.',
                    ]),
                ],
                'row_attr'=>[
                    'class'=> 'custome-chekbox'
                ]
            ])
            ->add('plainPassword', RepeatedType::class, [
                                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'type'=> PasswordType::class,
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrez un mot de passe.',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 25,
                    ])
                ],
                    'first_options'=>[
                        'label'=>false,
                        'attr'=>[
                            'placeholder' => 'Votre mot de passe',
                            'class' => 'form-control'
                        ],
                        'row_attr'=> [
                            'class'=>'form-group mb-3'
                        ]
                    ],
                    'second_options'=>[
                        'label'=>false,
                        'attr'=>[
                            'placeholder' => 'Confirmez votre mot de passe',
                            'class' => 'form-control'
                        ],
                        'row_attr'=> [
                            'class'=>'form-group mb-3'
                        ]
                    ]
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
