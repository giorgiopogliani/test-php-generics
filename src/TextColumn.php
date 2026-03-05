<?php

declare(strict_types=1);


namespace App;

use App\Contracts\ColumnInterface;
use App\Contracts\TextableInterface;
use Override;

/**
 * @template T of TextableInterface
 * @implements ColumnInterface<T>
 */
final class TextColumn implements ColumnInterface
{
    public function __construct(
        public string $key,
    ) {}

    #[Override]
    /** @param T $model */
    public function value(mixed $model): string
    {
        return $model->text();
    }
}
