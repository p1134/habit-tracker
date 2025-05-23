<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\OwnHabit;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OwnHabitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $options['user'];
        $builder
            ->add('name', TextareaType::class)
            // ->add('user', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'id',
            // ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'placeholder' => 'Wybierz kategorię',
                'choice_label' => function (Category $category)
                {
                    return $category->getName();
                },
            ])
            ->add('ownHabits', EntityType::class, [
                'class' => OwnHabit::class ,
                'multiple' => true,
                'expanded' => true,
                'choice_label' => 'name',
                'query_builder' => function($repo) use ($options){
                    return $repo->createQueryBuilder('oh')
                    ->where('oh.user = :user')
                    ->andwhere('oh.isDeleted = false')
                    ->setParameter('user', $options['user']);
                }
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'user' => null,
            'ownHabits' => null,
        ]);
    }
}
