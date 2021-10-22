<?php

namespace App\Repository;

use App\Entity\BackgroundImage;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BackgroundImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method BackgroundImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method BackgroundImage[]    findAll()
 * @method BackgroundImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BackgroundImageRepository extends EntityRepository
{
    // /**
    //  * @return BackgroundImage[] Returns an array of BackgroundImage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BackgroundImage
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
