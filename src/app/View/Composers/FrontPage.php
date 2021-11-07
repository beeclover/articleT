<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Wp\Post\Hook;

class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
          'heroPost' => $this->heroPost(),
        ];
    }

    public function heroPost()
    {
      $post = get_field('main-hero_post', 'option');
      $post = new Hook($post[0]);
      $post = $post->setPostData();
      unset($post->post_content);
      $post_type_obj = get_post_type_object( get_post_type($post->ID) );
      $post->postTypeLabel = $post_type_obj->labels->singular_name;
      return $post;
    }
}
