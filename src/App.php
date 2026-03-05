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
            /* Passing the collection direcly will not generate any errors */
            // columns: new Collection([ new LinkColumn('Name'), new TextColumn('Name') ])
        );

        // Doing this mago will complain in any case but only
        // if you don't pass the columns in the constructor
        $table->add(new LinkColumn('Name'));
        $table->add(new TextColumn('Name'));

        // this other kind of column works as expected by forcing
        // the infer type to be OtherTextColumn<Model>.
        // if the TextableInterface is removed from the Model
        // errors are correctly thrown my mago
        // $table->add(new OtherTextColumn(Model::class, 'Name'));

        dump($table->build());
    }
}
