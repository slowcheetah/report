<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

use App\Domain\Exception\DomainException;
use App\Traits\ValueObjectTrait;

class ReportType
{
    use ValueObjectTrait;

    public const USER = 'user';
    public const ORDER = 'order';

    protected function checkValue(string $value): void
    {
        if (!in_array($value, [self::USER, self::ORDER], true)) {
            throw new DomainException('Unsupported report type');
        }
    }
}
