<?php

namespace App\Repository;

use App\Entity\ParcelTracker;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ParcelTracker|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParcelTracker|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParcelTracker[]    findAll()
 * @method ParcelTracker[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParcelTrackerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParcelTracker::class);
    }

    // /**
    //  * @return ParcelTracker[] Returns an array of ParcelTracker objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ParcelTracker
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
