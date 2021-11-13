<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use WP_Query;
use Wp\Archive\UI\Pagination;

class Collection extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-collection',
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
          'title' => get_the_title(),
          'description' => get_the_excerpt(),
        ];
    }

    public function __construct()
    {
      wp_reset_postdata();
      $GLOBALS['wp_query'] = new WP_Query( array ( 
        'post_type' => ['insight','future-lab','tb-story'],
        'post_status' => 'publish',
        'posts_per_page' => 15,
        'tax_query' => array(
            array(
              'taxonomy' => 'collection',
              'operator' => 'EXISTS'
            )
        ),
        'paged' => ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1,
      ));
    }
}
