<?php

declare(strict_types=1);

namespace App\Application\Service\Report\Assembler;

use App\Domain\Entity\ReportCriteria\ReportCriteria;

interface ReportCriteriaAssemblerInterface
{
    public function assemble(array $data): ReportCriteria;
}
