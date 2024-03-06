<?php

namespace App\Form;

use App\Entity\LenghtConvert;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class LenghtConvertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Centimetre', NumberType::class)
            ->add('pouce_inch', NumberType::class)
            ->add('metre', NumberType::class)
            ->add('pieds', NumberType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LenghtConvert::class,
        ]);
    }
}
