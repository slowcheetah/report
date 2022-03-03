<?php

declare(strict_types=1);

namespace App\Application\Service\Report\Assembler;

class OrderCriteriaAssembler implements ConcreteCriteriaAssemblerInterface
{
    public function assemble(array $data): array
    {
        return [
            'status' => $data['status'] ?? null,
            'createFrom' => $data['createFrom'] ?? null,
            'createTo' => $data['createTo'] ?? null
        ];
    }
}
