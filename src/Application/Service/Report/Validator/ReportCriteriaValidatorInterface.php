<?php

declare(strict_types=1);

namespace App\Application\Service\Report\Validator;

use App\Domain\Entity\ReportCriteria\ReportCriteria;

interface ReportCriteriaValidatorInterface
{
    public function validate(ReportCriteria $data): void;
}
