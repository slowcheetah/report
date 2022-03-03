<?php

declare(strict_types=1);

namespace App\Application\Service\Report;

interface GetReportServiceInterface
{
    public function getReport(array $data): string;
}
