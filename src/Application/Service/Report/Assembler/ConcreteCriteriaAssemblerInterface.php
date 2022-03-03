<?php

declare(strict_types=1);

namespace App\Application\Service\Report\Assembler;

interface ConcreteCriteriaAssemblerInterface
{
    public function assemble(array $data): array;
}
