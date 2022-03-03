<?php

declare(strict_types=1);

namespace App\UI\Service;

use App\Application\Exception\ValidationException;
use App\Domain\Exception\DomainException;
use App\UI\Factory\ResponseFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Throwable;

class HttpApiExceptionListener
{
    /**
     * @throws Throwable
     */
    public function onKernelException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();
        if ($event->getRequest() instanceof Request) {
            if ($exception instanceof ValidationException) {
                $response = ResponseFactory::createErrorResponse();
            } elseif ($exception instanceof DomainException) {
                $response = ResponseFactory::createErrorResponse();
            } else {
                $response = ResponseFactory::createErrorResponse();
            }
        } else {
            throw $exception;
        }

        $event->setResponse($response);
    }
}
