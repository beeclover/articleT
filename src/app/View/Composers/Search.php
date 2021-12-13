<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Wp\Archive\UI\Pagination;

class Search extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'search',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'pagination' => (new Pagination())->render(),
            'count' => $this->allSearchCount(),
        ];
    }

    public function allSearchCount()
    {
        global $wp_query;
        return $wp_query->found_posts;
    }
}
