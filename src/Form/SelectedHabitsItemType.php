<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\User;
use App\Entity\Habit;
use App\Entity\OwnHabit;
use App\Entity\SelectedHabits;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
class SelectedHabitsItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('date', DateType::class, [
            'widget' => 'single_text',
        ])
        ->add('habit', EntityType::class, [
            'class' => Habit::class,
            'choice_label' => 'name',
        ])
        ->add('ownHabit', EntityType::class, [
            'class' => OwnHabit::class,
            'choice_label' => 'name',
            'required' => false,
        ])
        ;
    }
}
