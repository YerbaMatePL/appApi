<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function __construct(private string $name)
    {
        $this->setName(name: $name);
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {

        if ($name === '') {
            throw new \InvalidArgumentException(message: 'Name cannot be empty');
        }

        $this->name = $name;
    }
}
