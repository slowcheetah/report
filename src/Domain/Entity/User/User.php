<?php

declare(strict_types=1);

namespace App\Domain\Entity\User;

use App\Domain\Entity\User\ValueObject\UserStatus;
use DateTimeInterface;

class User
{
    private int $id;
    private string $status;
    private array $groups;
    private DateTimeInterface $createdAt;
    private DateTimeInterface $updatedAt;

    public function __construct(int $id, UserStatus $status, array $groups, DateTimeInterface $createdAt)
    {
        $this->id = $id;
        $this->status = $status->getValue();
        $this->groups = $groups;
        $this->createdAt = $createdAt;
        $this->updatedAt = clone $createdAt;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getStatus(): UserStatus
    {
        return new UserStatus($this->status);
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getGroups(): array
    {
        return $this->groups;
    }

    public function setGroups(array $groups): self
    {
        $this->groups = $groups;

        return $this;
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
