<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SinglePost extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single',
        'partials.content-single-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'thumbnail' => $this->thumbnail(),
            'attached' => $this->attached(),
            'taxonomy' => $this->category(),
            'collection' => $this->collection(),
        ];
    }

    public function thumbnail()
    {
      return get_the_post_thumbnail();
    }

    public function attached()
    {
      $attached = get_field('attachedGroup');
      return $attached;
    }

    public function category()
    {
      $post = get_post();
      if (!empty($taxonomies = get_the_terms($post->ID, str_replace('-','_',get_post_type()).'_category'))) {
        foreach($taxonomies as $term) {
          $term->link = get_term_link($term);
        }
        return array_slice($taxonomies, 0, 1)[0];
      }
    }

    public function collection()
    {
      $post = get_post();
      if (!empty($taxonomies = get_the_terms($post->ID, 'collection'))) {
        foreach($taxonomies as $term) {
          $term->link = get_term_link($term);
        }
        return array_slice($taxonomies, 0, 1)[0];
      }
    }
}
