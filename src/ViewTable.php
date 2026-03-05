<?php

declare(strict_types=1);


namespace App;

use App\Contracts\ColumnInterface;
use Illuminate\Support\Collection;

/**
 * @template T
 */
final class ViewTable
{
    /**
     * @param T[] $models
     * @param Collection<int, ColumnInterface<T>> $columns
     */
    public function __construct(
        private readonly array $models,
        private readonly Collection $columns,
    ) {}

    /** @return list<array{ key: string, value: string }> */
    public function build(): array
    {
        $result = [];

        foreach ($this->models as $model) {
            foreach ($this->columns as $column) {
                $result[] = [ 'key' => $column->key, 'value' => $column->value($model) ];
            }
        }

        return $result;
    }
}
