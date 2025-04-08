<?php

namespace App\Repository;

use App\Entity\OwnHabit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OwnHabit>
 */
class OwnHabitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OwnHabit::class);
    }
    public function habitsToTrack($user): array
    {
        return $this->createQueryBuilder('oh')
            ->andWhere('oh.user = :user')
            ->setParameter('user', $user)
            ->leftJoin('oh.habit', 'h')
            ->addSelect('h')
            ->getQuery()
            ->getResult()
        ;
    }

    //    /**
    //     * @return OwnHabit[] Returns an array of OwnHabit objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('o.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?OwnHabit
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
