<?php

declare(strict_types=1);

namespace App\Application\Service\Report;

use App\Application\Service\Report\Assembler\ReportAssemblerInterface;
use App\Application\Service\Report\Assembler\ReportCriteriaAssemblerInterface;
use App\Application\Service\Report\Assembler\ReportFileTypeAssemblerInterface;
use App\Application\Service\Report\Validator\ReportCriteriaValidatorInterface;
use App\Application\Service\ReportFile\ReportFileBuilderInterface;
use App\Domain\Service\ReportServiceInterface;

class GetReportService implements GetReportServiceInterface
{
    private ReportCriteriaValidatorInterface $criteriaValidator;
    private ReportServiceInterface $reportService;
    private ReportCriteriaAssemblerInterface $criteriaAssembler;
    private ReportAssemblerInterface $reportAssembler;
    private ReportFileBuilderInterface $reportFileBuilder;
    private ReportFileTypeAssemblerInterface $reportFileTypeAssembler;

    public function __construct(
        ReportCriteriaAssemblerInterface $criteriaAssembler,
        ReportCriteriaValidatorInterface $criteriaValidator,
        ReportServiceInterface $reportService,
        ReportAssemblerInterface $reportAssembler,
        ReportFileBuilderInterface $reportFileBuilder,
        ReportFileTypeAssemblerInterface $reportFileTypeAssembler
    ) {
        $this->criteriaValidator = $criteriaValidator;
        $this->reportService = $reportService;
        $this->criteriaAssembler = $criteriaAssembler;
        $this->reportAssembler = $reportAssembler;
        $this->reportFileBuilder = $reportFileBuilder;
        $this->reportFileTypeAssembler = $reportFileTypeAssembler;
    }

    public function getReport(array $data): string
    {
        $reportFileType = $this->reportFileTypeAssembler->assemble($data);
        $criteria = $this->criteriaAssembler->assemble($data);
        $this->criteriaValidator->validate($criteria);
        $report = $this->reportService->getReport($criteria);
        $resultData = $this->reportAssembler->assemble($report);

        return $this->reportFileBuilder->buildReportFile($reportFileType, $resultData);
    }
}
