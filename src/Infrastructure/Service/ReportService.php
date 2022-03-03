<?php

declare(strict_types=1);

namespace App\Infrastructure\Service;

use App\Domain\Entity\Report\Report;
use App\Domain\Entity\ReportCriteria\ReportCriteria;
use App\Domain\Service\ReportServiceInterface;
use App\Infrastructure\Resolver\RepositoryResolverInterface;

class ReportService implements ReportServiceInterface
{
    private RepositoryResolverInterface $repositoryResolver;

    public function __construct(RepositoryResolverInterface $repositoryResolver)
    {
        $this->repositoryResolver = $repositoryResolver;
    }

    public function getReport(ReportCriteria $criteria): Report
    {
        $reportType = $criteria->getReportType();
        $result = $this->repositoryResolver->resolve($reportType)->findByCriteria($criteria);

        return new Report($reportType, $result);
    }
}
