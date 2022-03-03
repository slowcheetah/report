<?php

declare(strict_types=1);

namespace App\Domain\Entity\Order;

use DateTimeInterface;

class Order
{
    private int $id;
    private DateTimeInterface $createdAt;
    private DateTimeInterface $updatedAt;

    public function __construct(int $id, DateTimeInterface $createdAt)
    {
        $this->id = $id;
        $this->createdAt = $createdAt;
        $this->updatedAt = clone $createdAt;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): DateTimeInterface
    {
        return $this->updatedAt;
    }
}
