<?php

namespace App\Repository;

use App\Entity\MemberPublication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MemberPublication|null find($id, $lockMode = null, $lockVersion = null)
 * @method MemberPublication|null findOneBy(array $criteria, array $orderBy = null)
 * @method MemberPublication[]    findAll()
 * @method MemberPublication[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MemberPublicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MemberPublication::class);
    }

    /**
     * @return MemberPublication[]
     */
    public function findAllByPublicationThenAuthorSequence()
    {
        return $this
            ->createQueryBuilder('e')
            ->addOrderBy('e.publication', 'ASC')
            ->addOrderBy('e.authorSequence', 'ASC')
            ->getQuery()
            ->execute()
            ;
    }

    // /**
    //  * @return MemberPublication[] Returns an array of MemberPublication objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MemberPublication
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
