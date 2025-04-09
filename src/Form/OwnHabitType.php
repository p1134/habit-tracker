<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\OwnHabit;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OwnHabitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $options['user'];
        $builder
            ->add('name')
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
                    $repo->createQueryBuilder('oh')
                    ->where('oh.user = :user')
                    ->setParameter('user', $options['user']);
                }
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'user' => null
        ]);
    }
}
