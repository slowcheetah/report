<?php

declare(strict_types=1);

namespace App\Domain\Exception;

use DomainException as DomainBaseException;
use Throwable;

class DomainException extends DomainBaseException implements DomainExceptionInterface
{
    public function __construct(string $message = '', int $code = 400, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
