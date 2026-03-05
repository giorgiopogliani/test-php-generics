<?php

declare(strict_types=1);


namespace App;

use App\Contracts\ColumnInterface;
use App\Contracts\LinkableInterface;
use Override;

/**
 * @template T of LinkableInterface
 * @implements ColumnInterface<T>
 */
class LinkColumn implements ColumnInterface
{
    public function __construct(
        public string $key,
    ) {}

    #[Override]
    /** @param T $model */
    public function value(mixed $model): string
    {
        return $model->url();
    }
}
