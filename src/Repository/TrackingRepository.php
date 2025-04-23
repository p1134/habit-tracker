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
        $todayDate = new DateTime('now');
        $today = $todayDate->format('Y/m/d');

           return $this->createQueryBuilder('t')
               ->andWhere('t.user = :user')
               ->setParameter('user', $user)
               ->andWhere('t.date = :today')
               ->setParameter('today', $today)
            //    ->andWhere('t.isDeleted = false')
               ->orderBy('t.id', 'ASC')
               ->getQuery()
               ->getResult()
           ;
       }

       public function getStreaks($user){
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'WITH habit_check AS (
                SELECT DISTINCT t.date
                FROM tracking t
                WHERE t.user_id = :user AND t.selected = 1
                ),
                ranked_dates AS (
                SELECT
                    date,
                    DATEDIFF(date, LAG(date) OVER (ORDER BY date)) AS day_diff
                FROM habit_check
                ),
                grouped_dates AS (
                SELECT
                    date,
                    SUM(CASE WHEN day_diff = 1 THEN 0 ELSE 1 END) OVER (ORDER BY date) AS group_id
                FROM ranked_dates
                )
                SELECT
                group_id,
                MIN(date) AS start_date,
                MAX(date) AS end_date,
                COUNT(*) AS streak_length
            FROM grouped_dates
            GROUP BY group_id
            ORDER BY start_date;
            ';

            $stmt = $conn->prepare($sql);
            $result = $stmt->executeQuery(['user' => $user->getId()]);

            return $result->fetchAllAssociative();
       }

       public function getProgress($user){
        $query = $this->createQueryBuilder('t')
        ->where('t.user = :user')
        ->setParameter('user', $user)
        ->innerJoin('t.selected_habit_id', 'sh')
        ->addSelect('sh')
        ->getQuery()
        ->getResult();
        return $query;
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
