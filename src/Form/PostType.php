<?php

namespace App\Form;

use App\Entity\Author;
use App\Entity\Category;
use App\Entity\Post;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name', TextType::class, ['label' => 'Title'])
            ->add('Intro', TextType::class, ['label' => 'Introduction'])
            ->add('Article', TextareaType::class, ['label' => 'Content'])
            ->add('Category', EntityType::class, [
                'label' => 'Category',
                // looks for choices from this entity
                'class' => Category::class,
                'mapped' => false,
            ])
            ->add('Author', EntityType::class, [
                'label' => 'Author',
                // looks for choices from this entity
                'class' => Author::class,
                'mapped' => false,
            ])
/*            ->add('Category')*/
/*            ->add('Author', TextType::class, ['label' => 'Auth'])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
