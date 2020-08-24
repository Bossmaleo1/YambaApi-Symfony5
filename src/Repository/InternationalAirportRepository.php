<?php

namespace App\Repository;

use App\Entity\InternationalAirport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InternationalAirport|null find($id, $lockMode = null, $lockVersion = null)
 * @method InternationalAirport|null findOneBy(array $criteria, array $orderBy = null)
 * @method InternationalAirport[]    findAll()
 * @method InternationalAirport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InternationalAirportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InternationalAirport::class);
    }

    // /**
    //  * @return InternationalAirport[] Returns an array of InternationalAirport objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InternationalAirport
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
