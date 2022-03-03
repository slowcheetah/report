<?php

declare(strict_types=1);

namespace App\Application\Service\Report\Assembler;

use App\Domain\Entity\Report\Report;

interface ReportAssemblerInterface
{
    public function assemble(Report $report): array;
}
