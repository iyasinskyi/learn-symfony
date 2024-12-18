<?php

namespace App\Form;

use App\Entity\Actor;
use App\Entity\Movie;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'class' => 'bg-transparent block border-b-2 w-full text-6xl',
                    'placeholder' => 'Title',
                ],
                'label' => false
                ])
            ->add('releaseYear', IntegerType::class, [
                'attr' => [
                    'class' => 'bg-transparent block border-b-2 w-full text-6xl',
                    'placeholder' => 'Release Year',
                ],
                'label' => false
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'class' => 'bg-transparent block border-b-2 h-60 w-full text-6xl',
                    'placeholder' => 'Description',
                ],
                'label' => false
            ])
            ->add('imagePath', FileType::class, [
                'required' => false,
                'mapped' => false,

            ])
//            ->add('imagePath', FileType::class, [
//                'attr' => [
//                    'class' => 'py-10',
//                ],
//                'label' => false
//            ])
           // ->add('actors')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
