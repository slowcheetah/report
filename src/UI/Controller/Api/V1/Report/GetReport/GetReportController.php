<?php

declare(strict_types=1);

namespace App\UI\Controller\Api\V1\Report\GetReport;

use App\Application\Service\Report\GetReportServiceInterface;
use App\UI\Factory\ResponseFactory;
use App\UI\Service\RequestVerificationServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GetReportController extends AbstractController
{
    private RequestVerificationServiceInterface $requestVerificationService;
    private GetReportServiceInterface $getReportService;

    public function __construct(
        RequestVerificationServiceInterface $requestVerificationService,
        GetReportServiceInterface $getReportService
    ) {
        $this->requestVerificationService = $requestVerificationService;
        $this->getReportService = $getReportService;
    }

    /**
     * @Route("/api/v1/report/get-report", methods={"POST"})
     *
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        $this->requestVerificationService->validateRequest($request);
        $result = $this->getReportService->getReport($request->request->all());

        return ResponseFactory::createFileResponse($result);
    }
}
