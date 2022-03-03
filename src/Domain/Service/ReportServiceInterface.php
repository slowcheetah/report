<?php

declare(strict_types=1);

namespace App\Domain\Service;

use App\Domain\Entity\Report\Report;
use App\Domain\Entity\ReportCriteria\ReportCriteria;

interface ReportServiceInterface
{
    public function getReport(ReportCriteria $criteria): Report;
}
