<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\User\User;

interface UserRepositoryInterface
{
    public function save(User ...$users): void;
}
