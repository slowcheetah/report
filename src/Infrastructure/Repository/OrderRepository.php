<?php

declare(strict_types=1);

namespace App\Infrastructure\Repository;

use App\Domain\Entity\Order\Order;
use App\Domain\Entity\User\User;
use App\Domain\Repository\FindByCriteriaRepositoryInterface;
use App\Domain\Repository\UserRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class OrderRepository extends ServiceEntityRepository implements UserRepositoryInterface, FindByCriteriaRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Order::class);
    }

    public function save(User ...$users): void
    {
        // TODO: Implement save() method.
    }

    public function findByCriteria($criteria): array
    {
        // TODO: Implement findByCriteria() method.
        return [];
    }


}
