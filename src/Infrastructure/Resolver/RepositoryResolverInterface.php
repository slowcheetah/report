<?php

declare(strict_types=1);

namespace App\Infrastructure\Resolver;

use App\Domain\Repository\FindByCriteriaRepositoryInterface;
use App\Domain\ValueObject\ReportType;

interface RepositoryResolverInterface
{
    public function resolve(ReportType $reportType): FindByCriteriaRepositoryInterface;
}
