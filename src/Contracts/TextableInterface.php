<?php

declare(strict_types=1);


namespace App\Contracts;

interface TextableInterface
{
    public function text(): string;
}
