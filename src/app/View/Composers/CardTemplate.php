<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use WP\Post\Hook;
use Wp\Post\Tool;

use function Roots\view;

class CardTemplate extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-card',
        'partials.content-collection',
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
            'date' => get_the_date(),
            'permalink' => get_the_permalink(),
            'thumbnail' => (new Tool())->objectThumbnail(get_post()),
            'excerpt' => (new Tool())->get_excerpt(180, get_the_excerpt()),
            'collection' => $this->get_terms('collection'),
            'category' => $this->get_terms(str_replace('-', '_', get_post_type()) . '_category'),
            'term' => ($this->get_terms('collection'))[0]->children[0],
        ];
    }

    public function get_the_thumbnail()
    {
      if ($thumbnail_url = get_the_post_thumbnail_url()) {
        return <<<EOD
          <img src="$thumbnail_url" class="object-cover">
EOD;
      } else {
        return view('partials.img', ['ex' => 'jpg', 'name' => 'no-image', 'class' => 'object-contain']);
      }
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
