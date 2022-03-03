<?php

declare(strict_types=1);

namespace App\UI\Service;

use App\Application\Exception\ValidationException;
use Symfony\Component\HttpFoundation\Request;

interface RequestVerificationServiceInterface
{
    /**
     * @param Request $request
     * @return void
     * @throws ValidationException
     */
    public function validateRequest(Request $request): void;
}
