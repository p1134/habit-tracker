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
       public function habitsToTrack($user): array
       {
           return $this->createQueryBuilder('sh')
               ->andWhere('sh.user = :user')
               ->setParameter('user', $user)
               ->leftJoin('sh.habit', 'h')
               ->addSelect('h')
               ->leftJoin('sh.user', 'oh')
               ->addSelect('oh')
               ->getQuery()
               ->getResult()
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
