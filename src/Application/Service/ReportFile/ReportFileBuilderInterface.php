<?php

declare(strict_types=1);

namespace App\Application\Service\ReportFile;

use App\Application\Service\Report\ValueObject\ReportFileType;

interface ReportFileBuilderInterface
{
    public function buildReportFile(ReportFileType $type, array $data): string;
}
