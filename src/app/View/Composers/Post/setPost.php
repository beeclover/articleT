<?php

namespace Wp\Post;


class Hook {
  public $post;
  public $postType;
  public function __construct($post)
  {
    $this->post = $post;
    $this->postType = get_post_type($post);
  }

  function setPostData()
  {
      $post = $this->post;
      $post->permalink = get_the_permalink($post->ID);
      $post->thumbnail = get_the_post_thumbnail_url($post->ID);
      $post->excerpt = get_the_excerpt($post->ID);
      $post->date = get_the_date('Y/m/d', $post->ID);
      // 카테고리 추가
      
      $cats = get_the_terms($post->ID, str_replace('-', '_', $this->postType )."_category");
      if (!is_wp_error($cats) && !empty($cats)) {
          $post->category = array_map(function ($cat) {
              $cat->link = "/{$this->postType}/category/".$cat->slug;
              return $cat;
          }, $cats);
      } else {
          $post->category = [];
      }

      return $post;
  }
}