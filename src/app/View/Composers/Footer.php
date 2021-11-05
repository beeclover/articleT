<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
class Footer extends Composer
{
    protected static $views = [
        'partials.footer',
    ];
    public function with()
    {
        return [
        ];
    }
}


