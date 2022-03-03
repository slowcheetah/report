<?php

declare(strict_types=1);

namespace App\Domain\Entity\User\ValueObject;

use App\Domain\Exception\DomainException;
use App\Traits\ValueObjectTrait;

class UserStatus
{
    use ValueObjectTrait;

    public const ACTIVE = 'active';
    public const NOT_ACTIVE = 'not-active';

    protected function checkValue(string $value): void
    {
        if (!in_array($value, [self::ACTIVE, self::NOT_ACTIVE], true)) {
            throw new DomainException('Unsupported report type');
        }
    }
}
