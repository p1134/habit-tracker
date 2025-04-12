<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Habit;
use App\Entity\Category;
use App\Entity\OwnHabit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HabitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('habits', EntityType::class, [
                'class' => Habit::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true
            ])
            ->add('ownHabits', EntityType::class, [
                'class' => OwnHabit::class,
                'multiple' => true,
                'expanded' => true,
                'choice_label' => 'name',
                'query_builder' => function($repo) use ($options){
                return $repo->createQueryBuilder('oh')
                    ->where('oh.user = :user')
                    ->andWhere('oh.isDeleted = false')
                    ->setParameter('user', $options['user']);
                }
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // 'data_class' => Habit::class,
            'data_class' => null,
            'user' => null,
        ]);
    }
}
