<?php

declare(strict_types=1);

namespace App\Application\Service\Report\Assembler;

class UserCriteriaAssembler implements ConcreteCriteriaAssemblerInterface
{
    public function assemble(array $data): array
    {
        return [
            'status' => $data['status'] ?? null,
            'categories' => $data['categories'] ?? [],
        ];
    }
}
