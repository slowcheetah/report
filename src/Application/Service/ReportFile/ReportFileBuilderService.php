<?php

declare(strict_types=1);

namespace App\Application\Service\ReportFile;

use App\Application\Service\Report\ValueObject\ReportFileType;

class ReportFileBuilderService implements ReportFileBuilderInterface
{
    public function buildReportFile(ReportFileType $type, array $data): string
    {
        // TODO: Implement buildReportFile() method.
        return '';
    }
}
