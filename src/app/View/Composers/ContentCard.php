<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use WP\Post\Hook;
use Wp\Post\Tool;

class ContentCard extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-card2',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => get_the_title(),
            'date' => get_the_date('Y/m/d'),
            'permalink' => get_the_permalink(),
            'thumbnail' => get_the_post_thumbnail_url(),
            'excerpt' => (new Tool())->get_excerpt(180, get_the_excerpt()),
            'collection' => $this->get_terms('collection'),
            'category' => $this->get_terms(str_replace('-', '_', get_post_type()) . '_category'),
        ];
    }

    public function get_terms($slug)
    {
        $post = get_post();
        $terms = get_the_terms($post, $slug);
        if ($terms) {
          return (new Hook())->setTaxonomyData($terms);
        }
        return $terms;
    }
}
