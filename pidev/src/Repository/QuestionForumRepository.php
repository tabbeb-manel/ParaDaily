<?php

namespace App\Repository;

use App\Entity\QuestionForum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QuestionForum|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestionForum|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestionForum[]    findAll()
 * @method QuestionForum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionForumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuestionForum::class);
    }

    // /**
    //  * @return QuestionForum[] Returns an array of QuestionForum objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuestionForum
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
