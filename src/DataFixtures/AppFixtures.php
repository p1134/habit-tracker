<?php

namespace App\DataFixtures;

use App\Entity\Habit;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category2 = new Category();
        $category3 = new Category();
        $category->setName('Zdrowie');
        $category2->setName('Relaks');
        $category3->setName('Aktywność społeczna');
        $manager->persist($category);
        $manager->persist($category2);
        $manager->persist($category3);

        
        
        
        $habit = new Habit();
        $habit2 = new Habit();
        $habit3 = new Habit();
        $habit4 = new Habit();
        $habit5 = new Habit();
        $habit6 = new Habit();
        $habit7 = new Habit();
        $habit8 = new Habit();
        $habit9 = new Habit();
        $habit10 = new Habit();
        $habit11 = new Habit();
        $habit12 = new Habit();
        $habit13 = new Habit();
        $habit14 = new Habit();
        $habit15 = new Habit();
        $habit->setName('Kontrola ciśnienia');
        $habit->setCategory($category);
        $habit2->setName('Spacer');
        $habit2->setCategory($category);
        $habit3->setName('Branie leków');
        $habit3->setCategory($category);
        $habit4->setName('Kontrola poziomu cukru');
        $habit4->setCategory($category);
        $habit5->setName('Sen o stałych porach');
        $habit5->setCategory($category);
        $habit6->setName('Krótkie ćwiczenia poranne');
        $habit6->setCategory($category);
        $habit7->setName('Medytacja');
        $habit7->setCategory($category2);
        $habit8->setName('Czytanie');
        $habit8->setCategory($category2);
        $habit9->setName('Rozwiązywanie krzyżówek');
        $habit9->setCategory($category2);
        $habit10->setName('Pielęgnacja roślin');
        $habit10->setCategory($category2);
        $habit11->setName('Zajęcia dla seniorów');
        $habit11->setCategory($category3);
        $habit12->setName('Udział w spotkaniach religijnych');
        $habit12->setCategory($category3);
        $habit13->setName('Wolontariat');
        $habit13->setCategory($category3);
        $habit14->setName('Kontakt z min. jedną osobą dziennie');
        $habit14->setCategory($category3);
        $habit15->setName('Ograniczenie wiadomości do 15 minut dziennie');
        $habit15->setCategory($category3);
        $manager->persist($habit);
        $manager->persist($habit2);
        $manager->persist($habit3);
        $manager->persist($habit4);
        $manager->persist($habit5);
        $manager->persist($habit6);
        $manager->persist($habit7);
        $manager->persist($habit8);
        $manager->persist($habit9);
        $manager->persist($habit10);
        $manager->persist($habit11);
        $manager->persist($habit12);
        $manager->persist($habit13);
        $manager->persist($habit14);
        $manager->persist($habit15);


        
        $manager->flush();
    }


}