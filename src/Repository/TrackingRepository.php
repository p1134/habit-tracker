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
                WHERE t.user_id = :user AND t.selected = true AND t.is_deleted = false
                ),
                ranked_dates AS (
                SELECT
                    date,
                    (date - LAG(date) OVER (ORDER BY date)) AS day_diff
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
            $stmt->bindValue('user', $user->getId());
            $result = $stmt->executeQuery();

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
            $stmt->bindValue('user', $user->getId());
            $stmt->bindValue('startOfWeek', $startOfWeek->format('Y-m-d'));
            $stmt->bindValue('endOfWeek', $endOfWeek->format('Y-m-d'));
            $result = $stmt->executeQuery();
            return $result->fetchAllAssociative();
       }

       public function getWeekSelectedHabits($user){
        $conn = $this->getEntityManager()->getConnection();
    $sql = "SELECT 
            CASE EXTRACT(DOW FROM t.date)
                WHEN 0 THEN 'Niedziela'
                WHEN 1 THEN 'Poniedziałek'
                WHEN 2 THEN 'Wtorek'
                WHEN 3 THEN 'Środa'
                WHEN 4 THEN 'Czwartek'
                WHEN 5 THEN 'Piątek'
                WHEN 6 THEN 'Sobota'
            END AS dzien,
            t.date AS data,
            COUNT(*) AS liczba
            FROM tracking t
            WHERE t.date::date BETWEEN (CURRENT_DATE - INTERVAL '7 days') AND CURRENT_DATE
            AND t.user_id = :user
            GROUP BY dzien, t.date
            ORDER BY t.date;
            ";


        $stmt = $conn->prepare($sql);
        $stmt->bindValue("user", $user->getId());
        $result = $stmt->executeQuery();
        return $result->fetchAllAssociative();
       }

       public function getAllTracks($user){
            $query = $this->createQueryBuilder('t')
            ->select('t.date', 'ch.name AS habitCategory', 'ohc.name AS ownHabitCategory')
            ->leftJoin('t.selectedHabits', 'sh')
            ->leftJoin('sh.habit', 'h')
            ->leftJoin('sh.ownHabit', 'oh')
            ->leftJoin('h.category', 'ch')
            ->leftJoin('oh.category', 'ohc')
            ->andWhere('t.user = :user')
            ->setParameter('user', $user)
            ->andWhere('t.selected = true')
            ->orderBy('t.date','ASC')
            ->getQuery();
        return $query->getResult();
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
