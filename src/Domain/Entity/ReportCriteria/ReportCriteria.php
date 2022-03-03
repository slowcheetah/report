<?php

declare(strict_types=1);

namespace App\Domain\Entity\ReportCriteria;

use App\Domain\ValueObject\ReportType;

class ReportCriteria
{
    private string $reportType;
    private array $criteria;

    public function __construct(ReportType $reportType, array $criteria)
    {
        $this->reportType = $reportType->getValue();
        $this->criteria = $criteria;
    }

    public function getReportType(): ReportType
    {
        return new ReportType($this->reportType);
    }

    public function setReportType(string $reportType): self
    {
        $this->reportType = $reportType;

        return $this;
    }

    public function getCriteria(): array
    {
        return $this->criteria;
    }

    public function setCriteria(array $criteria): self
    {
        $this->criteria = $criteria;

        return $this;
    }
}
