<?php

declare(strict_types=1);


namespace App;

use App\Contracts\LinkableInterface;
// use App\Contracts\TextableInterface;
use Override;

final class Model implements LinkableInterface//, TextableInterface
{
    #[Override]
    public function url(): string
    {
        return 'link';
    }


    // #[Override]
    // public function text(): string
    // {
    //     return 'text';
    // }
}
