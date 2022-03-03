<?php

declare(strict_types=1);

namespace App\Application\Service\Report\ValueObject;

use App\Application\Exception\ValidationException;
use App\Traits\ValueObjectTrait;

class ReportFileType
{
    use ValueObjectTrait;

    public const CSV = 'csv';
    public const XLSX = 'xlsx';

    protected function checkValue(string $value): void
    {
        if (!in_array($value, [self::CSV, self::XLSX], true)) {
            throw new ValidationException('Unsupported report file type');
        }
    }
}
