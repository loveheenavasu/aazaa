<?php

namespace App\Repository;

use App\Entity\Workshop;
use Doctrine\ORM\EntityRepository;

class WorkshopRepository extends EntityRepository
{

    /**
     * @param array $types
     * @return mixed
     * @throws \Exception
     */
    public function getActiveByType(array $types){

        $datenow = new \DateTime();
        return $this->getEntityManager()->createQueryBuilder()
            ->select('w')
            ->from(Workshop::class, 'w')
            ->where('w.startDatetime >= :datenow')
            ->andWhere('w.active = :active')
            ->andWhere('w.type IN (:types)')
            ->setParameter('types', $types)
            ->setParameter('datenow', $datenow)
            ->setParameter('active', true)
            ->orderBy('w.startDatetime', 'ASC')
            ->getQuery()
            ->getResult();

    }

    /**
     * @param $type
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @return array
     */
    public function getBetween($type, \DateTime $startDate, \DateTime $endDate){
        $output = [];


        for ($date = clone $startDate; $date <= $endDate; $date->modify('+1 day')) {
            $output[$date->format('Y-m-d')] = [];
        }


        $results = $this->getEntityManager()->createQueryBuilder()
            ->select('w.id')
            ->addSelect('w.title')
            ->addSelect('w')
            ->addSelect('w.slug')
            ->addSelect('date(w.startDatetime) AS date')
            ->addSelect('time(w.startDatetime) as startTime')
            ->addSelect('time(w.endDatetime) as endTime')
            ->addSelect('w.descriptionShort as description')
            ->addSelect('l.color as color')
            ->addSelect('l.name as locationName')
            ->from(Workshop::class, 'w')
            ->join('w.location', 'l')
            ->where('w.startDatetime >= :startDate')
            ->andWhere('w.startDatetime <= :endDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->andWhere('w.active = :active')
            ->setParameter('active', true)
            ->andWhere('w.type = :type')
            ->setParameter('type', $type)
            ->andWhere('w.startDatetime >= :now' )
            ->setParameter('now', date('Y-m-d H'))
            ->getQuery()
            ->getResult();


        foreach($results as $result ){
            $output[$result['date']][] = [
                'id' => $result['id'],
                'title' => $result['title'],
                'startTime' => $result['startTime'],
                'date' => $result['date'],
                'endTime' => $result['endTime'],
                'slug' => $result['slug'],
                'description' => $result['description'],
                'color' => $result['color'],
                'locationName' => $result['locationName'],
                'seatsAvailable' => $result[0]->getSeatsAvailable()
            ];
        }
        return $output;

    }

}