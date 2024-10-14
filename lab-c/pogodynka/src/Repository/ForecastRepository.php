<?php

namespace App\Repository;

use App\Entity\Forecast;
use App\Entity\Location;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Forecast>
 */
class ForecastRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Forecast::class);
    }

    public function findByLocation(Location $location)
    {
        $qb = $this->createQueryBuilder('m');
        $qb->where('m.location = :location')
            ->setParameter('location', $location)
            ->andWhere('m.timeOfOccurrence > :now')
            ->setParameter('now', date('d-m-Y'));

        $query = $qb->getQuery();
        $result = $query->getResult();

        return $result;
    }

    public function findByLocationAndCountry(Location $location, $country){
        $qb = $this->createQueryBuilder('m');
        $qb->where('m.location = :location')
            ->setParameter('location', $location)
            ->andWhere('m.timeOfOccurrence > :now')
            ->setParameter('now', date('d-m-Y'))
            ->leftJoin('m.location', 'l')
            ->andWhere('l.country = :country')
            ->setParameter('country', $country);
        $query = $qb->getQuery();
        $result = $query->getResult();

        return $result;
    }
}
