<?php

namespace App\Repository;

use App\Entity\SelectedHabits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SelectedHabits>
 */
class SelectedHabitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SelectedHabits::class);
    }
    

    //    /**
    //     * @return SelectedHabits[] Returns an array of SelectedHabits objects
    //     */
    public function showHabits($user):array
    {
            $query = $this->createQueryBuilder('sh')
            ->andWhere('sh.user = :user')
            ->setParameter('user', $user)
            ->leftJoin('sh.habit', 'h') // Łączenie Habit
            ->addSelect('h')
            ->leftJoin('sh.ownHabit', 'oh') // Łączenie OwnHabit
            ->addSelect('oh')
            ->leftJoin('sh.tracking', 't') // Dodajemy join do trackingów
            ->addSelect('t')
            ->andWhere('h IS NOT NULL OR oh IS NOT NULL') // Zapewnienie, że jest zwrócone przynajmniej jedno powiązanie
            ->andWhere('sh.isDeleted = false')

            // ->andWhere('sh.isDeleted = false')
            ->getQuery()
            ->getResult();
            // dd($query);
            return $query;
    }
    public function habitsToTrack($user):array
    {
            $query = $this->createQueryBuilder('sh')
            ->andWhere('sh.user = :user')
            ->setParameter('user', $user)
            ->leftJoin('sh.habit', 'h') // Łączenie Habit
            ->addSelect('h')
            ->leftJoin('sh.ownHabit', 'oh') // Łączenie OwnHabit
            ->addSelect('oh')
            ->leftJoin('sh.tracking', 't') // Dodajemy join do trackingów
            ->addSelect('t')
            ->andWhere('h IS NOT NULL OR oh IS NOT NULL') // Zapewnienie, że jest zwrócone przynajmniej jedno powiązanie
            // ->andWhere('sh.isDeleted = false')
            ->getQuery()
            ->getResult();
            // dd($query);
            return $query;
    }
    //     */
    public function habitsToTrackFalse($user):array
    {
            $query = $this->createQueryBuilder('sh')
            ->andWhere('sh.user = :user')
            ->setParameter('user', $user)
            ->leftJoin('sh.habit', 'h') // Łączenie Habit
            ->addSelect('h')
            ->leftJoin('sh.ownHabit', 'oh') // Łączenie OwnHabit
            ->addSelect('oh')
            ->leftJoin('sh.tracking', 't') // Dodajemy join do trackingów
            ->addSelect('t')
            ->andWhere('h IS NOT NULL OR oh IS NOT NULL') // Zapewnienie, że jest zwrócone przynajmniej jedno powiązanie
            ->andWhere('sh.isDeleted = false')
            ->getQuery()
            ->getResult();
            // dd($query);
            return $query;
    }

    public function dailyTracking($user){
        return $this->createQueryBuilder('sh')
            ->andwhere('sh.user = :user')
            -> setParameter('user', $user)
            ->join('sh.habit', 'h')
            ->addSelect('h')
            ->join('sh.tracking', 'th')
            ->addSelect('th')
            ->andWhere('sh.isDeleted = false')
            ->getQuery()
            ->getResult()
            ;
    }

    public function selectById($user, $selected){
        return $this->createQueryBuilder('sh')
        ->andWhere('sh.user = :user')
        ->setParameter('user', $user)
        ->andWhere('sh.id = :selected')
        ->setParameter('selected', $selected)
        ->leftJoin('sh.habit', 'h')
        ->addSelect('h')
        ->leftJoin('sh.ownHabit', 'oh')
        ->addSelect('oh')
        ->andWhere('sh.isDeleted = false')
        ->getQuery()
        ->getOneOrNullResult()
        ;
    }
    

    //    public function findOneBySomeField($value): ?SelectedHabits
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
