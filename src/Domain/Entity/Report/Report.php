<?php

declare(strict_types=1);

namespace App\Domain\Entity\Report;

use App\Domain\ValueObject\ReportType;

class Report
{
    private string $reportType;
    private array $data;

    public function __construct(ReportType $reportType, array $data)
    {
        $this->reportType = $reportType->getValue();
        $this->data = $data;
    }

    public function getReportType(): ReportType
    {
        return new ReportType($this->reportType);
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setReportType(ReportType $reportType): self
    {
        $this->reportType = $reportType->getValue();

        return $this;
    }

    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
