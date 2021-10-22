<?php

namespace App\Repository;

use App\Entity\Collector;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;

class CollectorRepository extends EntityRepository
{

    /**
     * @param $key
     * @return bool
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getOneByKey($key){

        $collector = $this->getEntityManager()->createQueryBuilder()
            ->select('c')
            ->from(Collector::class, 'c')
            ->where('c.key = :key')
            ->setParameter('key', $key)
            ->setMaxResults(1)
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true, 7200)
            ->getOneOrNullResult();
        if($collector) {
            if ($collector->getValueInt()) {
                return $collector->getValueInt();
            }
            return $collector->getValue();
        }
        return false;
    }


}