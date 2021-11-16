<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;
use Wp\Post\Hook;
use Wp\Post\Tool;

class PostsCollection extends Component
{
    public $posts = [];

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
    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct()
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
      $this->posts = array_slice($posts, 0, 5);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.posts-collection');
    }
}
