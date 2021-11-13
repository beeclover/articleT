<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Wp\Post\Hook;
use Wp\Post\Tool;

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
          'recentTagsPosts' => $this->recentTagsPosts(),
          'collectionPosts' => $this->collectionPosts(),
        ];
    }

    public function postsAsPostDataSet($posts)
    {
      return array_map(function($post) {
        $WpTool = new Tool();
        $post->excerpt = $WpTool::get_excerpt(100, $post->excerpt);
        $post->thumbnail = $WpTool::objectThumbnail($post);
        unset($post->post_content);
        return $post;
      }, $posts);
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
      return $this->postsAsPostDataSet($posts);
    }

    public function recentTagsPosts()
    {
      $taxonomies = [
        'category' => ['insight_category', 'future_lab_category', 'tb_story_category'],
        'collection',
      ];

      /**
       * tags의 키값을들 쿼리할 태그들로 가져오기
       */
      $tags = [
        'tech' => [],
        'business' => [],
        'economy' => [],
      ];
      foreach($tags as $key => $tag) {
        $posts = [];
        foreach(['insight','future-lab','tb-story'] as $postType) {
          $posts = array_merge($posts, get_posts(array(
            'post_type' => $postType,
            'numberposts' => 10,
            'order' => 'DESC',
            'orderby' => 'date'
          )));
        }
        $posts = (new Hook($posts, $taxonomies))::$posts;
        $posts = $this->postsAsPostDataSet($posts);
  
        usort($posts, function($post_a, $post_b) {
            return $post_b->post_date <=> $post_a->post_date;
        });
        $tags[$key] = $posts;
      }

      // return ['tech' => $this->popularityPosts(), 'business' => $this->popularityPosts(), 'economy' => $this->popularityPosts()];
      return $tags;
    }

    public function collectionPosts()
    {

      $posts = [];
      foreach(['insight','future-lab','tb-story'] as $postType) {
        $posts = array_merge($posts, get_posts(array(
          'post_type' => $postType,
          'numberposts' => 5,
          'tax_query' => array(
            array(
                'taxonomy' => 'collection',
                'operator' => 'EXISTS'
            )
         )
        )));
      }
      $posts = (new Hook($posts, ['collection']))::$posts;
      $posts = $this->postsAsPostDataSet($posts);
      usort($posts, function($post_a, $post_b) {
          return $post_b->post_date <=> $post_a->post_date;
      });
      return array_slice($posts, 0, 5);
    }
}
