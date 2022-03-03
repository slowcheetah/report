<?php

declare(strict_types=1);

namespace App\Application\Service\Report\Resolver;

use App\Application\Service\Report\Assembler\ConcreteCriteriaAssemblerInterface;
use App\Application\Service\Report\Assembler\OrderCriteriaAssembler;
use App\Application\Service\Report\Assembler\UserCriteriaAssembler;
use App\Domain\Exception\DomainException;
use App\Domain\ValueObject\ReportType;

class ReportCriteriaResolver implements ReportCriteriaResolverInterface
{
    public function resolve(ReportType $reportType): ConcreteCriteriaAssemblerInterface
    {
        switch ($reportType->getValue()) {
            case 'order':
                return new OrderCriteriaAssembler();
            case 'user':
                return new UserCriteriaAssembler();
        }

        throw new DomainException('Unsupported report type');
    }
}
