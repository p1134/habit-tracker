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
               ->andWhere('t.isDeleted = false')
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
                WHERE t.user_id = :user AND t.selected = 1 AND t.is_deleted = 0
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

       public function getWeekDoneHabits($user, $startOfWeek, $endOfWeek)
       {

            $conn = $this->getEntityManager()->getConnection();
            $sql = "SELECT 
                t.date AS date, h.name AS h_name, h.id AS h_id, oh.name AS oh_name, oh.id AS oh_id, t.is_deleted AS is_deleted
                FROM tracking t
                LEFT JOIN selected_habits sh ON t.selected_habits_id = sh.id
                LEFT JOIN habit h ON  sh.habit_id = h.id
                LEFT JOIN own_habit oh ON sh.own_habit_id = oh.id
                WHERE DATE(t.date) BETWEEN :startOfWeek AND :endOfWeek
                AND t.user_id = :user
                ORDER BY t.date";

            $stmt = $conn->prepare($sql);
            $result = $stmt->executeQuery(['user' => $user->getId(), 'startOfWeek' => $startOfWeek->format('Y-m-d'), 'endOfWeek' => $endOfWeek->format('Y-m-d')]);
            return $result->fetchAllAssociative();
       }

       public function getWeekSelectedHabits($user){
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT 
                ELT(DAYOFWEEK(t.date), 'Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota') AS dzien, t.date AS data,
                COUNT(*) AS liczba
            FROM tracking t
            WHERE DATE(t.date) BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE()
            AND t.user_id = :user
            GROUP BY DAYOFWEEK(t.date), t.date
            ORDER BY t.date";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(["user"=> $user->getId()]);
        return $result->fetchAllAssociative();
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
