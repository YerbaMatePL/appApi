<?php

namespace App\DTO;

class ProductDTO
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
