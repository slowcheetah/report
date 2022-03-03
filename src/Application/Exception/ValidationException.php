<?php

declare(strict_types=1);

namespace App\Application\Exception;

use InvalidArgumentException;
use Throwable;

class ValidationException extends InvalidArgumentException implements ApplicationExceptionInterface
{
    public function __construct(string $message = '', int $code = 400, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
