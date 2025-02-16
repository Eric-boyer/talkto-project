<?php

namespace App\Form\Back;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Filtre du menu client.
 */
class LessorFilterType extends AbstractType
{
    /**
     * <@inheritDoc>.
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->setMethod('GET')
            ->add(
                'term',
                TextType::class,
                [
                    'label' => false,
                    'required' => false,
                    'attr' => [
                        'placeholder' => 'Nom / prénom, e-mail, adresse, ville, code postal, téléphone ou stripe id',
                        'style' => 'width: 53%;',
                        'class' => 'float-right',
                    ],
                ]
            )
            ->add(
                'status',
                ChoiceType::class,
                [
                    'label' => false,
                    'choices' => [
                        'Non actif' => 0,
                        'Actif' => 1,
                    ],
                    'attr' => [
                        'style' => 'width: 38%;',
                        'class' => 'float-right',
                    ],
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefault('csrf_protection', false)
        ;
    }
}
