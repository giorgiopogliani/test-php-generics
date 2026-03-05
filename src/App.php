<?php

declare(strict_types=1);

namespace App;

use App\LinkColumn;
use App\Model;
use App\TextColumn;
use App\ViewTable;
use Illuminate\Support\Collection;

final class App
{
    public function run(): void
    {
        $table = new ViewTable(
            models: [new Model(), new Model()],
            // columns: new Collection([ new LinkColumn('Name'), new TextColumn('Name') ])
        );

        $table->add(new LinkColumn('Name'));

        $table->add(new TextColumn('Name'));

        dump($table->build());
    }
}
