<?php

declare(strict_types=1);

namespace App\Application\Service\Report\Resolver;

use App\Application\Service\Report\Assembler\ConcreteCriteriaAssemblerInterface;
use App\Domain\ValueObject\ReportType;

interface ReportCriteriaResolverInterface
{
    public function resolve(ReportType $reportType): ConcreteCriteriaAssemblerInterface;
}
