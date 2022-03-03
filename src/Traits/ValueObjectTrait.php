<?php

declare(strict_types=1);

namespace App\Traits;

trait ValueObjectTrait
{
    protected string $value;

    public function __construct(string $value)
    {
        $this->checkValue($value);
        $this->value = $value;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function isEqual(self $valueObject): bool
    {
        return $this->getValue() === $valueObject->getValue();
    }

    protected function checkValue(string $value): void
    {
    }
}
