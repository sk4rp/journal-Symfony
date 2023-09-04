<?php

namespace App\Repository;

use App\Entity\Instructor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Instructor>
 *
 * @method Instructor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Instructor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Instructor[]    findAll()
 * @method Instructor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InstructorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Instructor::class);
    }

    public function add(Instructor $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Instructor $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
