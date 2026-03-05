<?php

declare(strict_types=1);


namespace App\Contracts;

interface LinkableInterface
{
    public function url(): string;
}
