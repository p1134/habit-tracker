<?php

namespace App\Repository;

use App\Entity\Tracking;
use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tracking>
 */
class TrackingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tracking::class);
    }


    //    /**
    //     * @return Tracking[] Returns an array of Tracking objects
    //     */
       public function dailyTracking($user): array
       {
        $today = new DateTime('now')->format('Y/m/d');

           return $this->createQueryBuilder('t')
               ->andWhere('t.user = :user')
               ->setParameter('user', $user)
               ->andWhere('t.date = :today')
               ->setParameter('today', $today)
               ->orderBy('t.id', 'ASC')
               ->getQuery()
               ->getResult()
           ;
       }

    //    public function findOneBySomeField($value): ?Tracking
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
