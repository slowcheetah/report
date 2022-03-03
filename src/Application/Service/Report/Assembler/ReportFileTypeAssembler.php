<?php

declare(strict_types=1);

namespace App\Application\Service\Report\Assembler;

use App\Application\Service\Report\ValueObject\ReportFileType;

class ReportFileTypeAssembler implements ReportFileTypeAssemblerInterface
{
    public function assemble(array $data): ReportFileType
    {
        return new ReportFileType($data['reportFileType'] ?? '');
    }
}
