<?php

declare(strict_types=1);


namespace App\Contracts;

/**
 * @template TModel
 */
interface ColumnInterface
{
    public string $key { get; }

    /**
     * @param TModel $model
     */
    public function value(mixed $model): string;
}
