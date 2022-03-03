<?php

declare(strict_types=1);

namespace App\Application\Service\Report\Assembler;

use App\Application\Service\Report\ValueObject\ReportFileType;

interface ReportFileTypeAssemblerInterface
{
    public function assemble(array $data): ReportFileType;
}
