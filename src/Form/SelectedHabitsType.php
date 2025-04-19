<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Habit;
use App\Entity\OwnHabit;
use App\Entity\SelectedHabits;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class SelectedHabitsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('date', DateType::class, [
            //     'widget' => 'single_text',
            // ])
            // ->add('id', CheckboxType::class)
            // ->add('habit', EntityType::class, [
            //     'class' => Habit::class,
            //     'choice_label' => 'id',
            // ])
            // ->add('ownHabit', EntityType::class, [
            //     'class' => OwnHabit::class,
            //     'choice_label' => 'id',
            // ])
            // ->add('user', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'id',
            // ])   
            ->add('habits', CollectionType::class, [
                'entry_type' => SelectedHabitsItemType::class,   // Typ formularza dla elementów w kolekcji
                'allow_add' => true,               // Umożliwia dodawanie nowych elementów
                'by_reference' => false,           // Zapobiega problemom z referencjami (w przypadku encji)
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SelectedHabitsType::class,   
        ]);
    }
}
