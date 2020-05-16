<?php

namespace App\Repository;

use App\Entity\LigneEleve;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LigneEleve|null find($id, $lockMode = null, $lockVersion = null)
 * @method LigneEleve|null findOneBy(array $criteria, array $orderBy = null)
 * @method LigneEleve[]    findAll()
 * @method LigneEleve[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LigneEleveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LigneEleve::class);
    }

    // /**
    //  * @return LigneEleve[] Returns an array of LigneEleve objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LigneEleve
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
