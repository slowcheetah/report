<?php

declare(strict_types=1);

namespace App\UI\Factory;

use Symfony\Component\HttpFoundation\Response;

class ResponseFactory
{
    public static function createOkResponse(): Response
    {
        // implementation
        return new Response();
    }

    public static function createErrorResponse(): Response
    {
        // implementation
        return new Response();
    }

    public static function createFileResponse(string $content): Response
    {
        // implementation
        return new Response();
    }
}
