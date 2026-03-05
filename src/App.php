<?php

declare(strict_types=1);

namespace App;

use App\Contracts\ColumnInterface;
use App\LinkColumn;
use App\Model;
use App\TextColumn;
use App\ViewTable;
use Illuminate\Support\Collection;

final class App
{
    public function run(): void
    {
        $table = new ViewTable(models: [new Model(), new Model()], columns: new Collection([
            new TextColumn('Name'),
            new LinkColumn('Name'),
        ]));

        dump($table->build());
    }
}
