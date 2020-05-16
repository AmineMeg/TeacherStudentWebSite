<?php

namespace App\Repository;

use App\Entity\EtatExo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EtatExo|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtatExo|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtatExo[]    findAll()
 * @method EtatExo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtatExoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EtatExo::class);
    }

    // /**
    //  * @return EtatExo[] Returns an array of EtatExo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EtatExo
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
