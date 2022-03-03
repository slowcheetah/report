<?php

declare(strict_types=1);

namespace App\Application\Service\Report\Assembler;

use App\Application\Service\Report\Resolver\ReportCriteriaResolverInterface;
use App\Domain\Entity\ReportCriteria\ReportCriteria;
use App\Domain\ValueObject\ReportType;

class ReportCriteriaAssembler implements ReportCriteriaAssemblerInterface
{
    private ReportCriteriaResolverInterface $reportCriteriaResolver;

    public function __construct(ReportCriteriaResolverInterface $reportCriteriaResolver)
    {
        $this->reportCriteriaResolver = $reportCriteriaResolver;
    }

    public function assemble(array $data): ReportCriteria
    {
        $reportType = new ReportType($data['reportType'] ?? '');
        $criteria = $this->reportCriteriaResolver->resolve($reportType)->assemble($data);

        return new ReportCriteria(
            $reportType,
            $criteria
        );
    }
}
