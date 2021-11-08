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
          'popularityPosts' => $this->popularityPosts(),
        ];
    }

    public function heroPost()
    {
      $taxonomies = ['category' => ['insight_category', 'future_lab_category', 'tb_story_category']];
      $posts = get_field('main-hero_post', 'option');

      $post = ((new Hook($posts, $taxonomies))::$posts)[0];
      unset($post->post_content);
      $post_type_obj = get_post_type_object( get_post_type($post->ID) );
      $post->postTypeLabel = $post_type_obj->labels->singular_name;
      return $post;
    }

    public function popularityPosts()
    {
      $taxonomies = [
        'category' => ['insight_category', 'future_lab_category', 'tb_story_category'],
        'collection',
      ];

      $posts = get_field('main-popularity_post', 'option');
      $posts = (new Hook($posts, $taxonomies))::$posts;
      return array_map(function($post) {
        unset($post->post_content);
        return $post;
      }, $posts);
    }
}
