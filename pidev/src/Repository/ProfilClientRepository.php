<?php

namespace App\Repository;

use App\Entity\ProfilClient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProfilClient|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProfilClient|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProfilClient[]    findAll()
 * @method ProfilClient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfilClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProfilClient::class);
    }

    // /**
    //  * @return ProfilClient[] Returns an array of ProfilClient objects
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
    public function findOneBySomeField($value): ?ProfilClient
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
