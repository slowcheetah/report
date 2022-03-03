<?php

declare(strict_types=1);

namespace App\Infrastructure\Resolver;

use App\Domain\Exception\DomainException;
use App\Domain\Repository\FindByCriteriaRepositoryInterface;
use App\Domain\ValueObject\ReportType;
use App\Infrastructure\Repository\OrderRepository;
use App\Infrastructure\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;

class RepositoryResolver implements RepositoryResolverInterface
{
    private ManagerRegistry $registry;

    public function __construct(ManagerRegistry $registry)
    {
        $this->registry = $registry;
    }

    public function resolve(ReportType $reportType): FindByCriteriaRepositoryInterface
    {
        switch ($reportType->getValue()) {
            case 'user':
                return new UserRepository($this->registry);
            case 'order':
                return new OrderRepository($this->registry);
        }

        throw new DomainException('Incorrect report type');
    }
}
