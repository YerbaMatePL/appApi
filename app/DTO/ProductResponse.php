<?php

namespace App\DTO;

class ProductResponse
{
    public function __construct(private readonly string $name) {}

    public function getName(): string
    {
        return $this->name;
    }
}
