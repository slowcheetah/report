<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\Report\Report;

interface FindByCriteriaRepositoryInterface
{
    public function findByCriteria($criteria): array;
}
