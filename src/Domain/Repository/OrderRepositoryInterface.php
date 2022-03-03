<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\Order\Order;

interface OrderRepositoryInterface
{
    public function save(Order ...$orders): void;
}
