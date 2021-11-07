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
      $setPost = $this->post;
      $setPost->permalink = get_the_permalink($setPost->ID);
      $setPost->thumbnail = get_the_post_thumbnail_url($setPost->ID);
      $setPost->excerpt = get_the_excerpt($setPost->ID);
      $setPost->date = get_the_date('Y/m/d', $setPost->ID);
      // 카테고리 추가
      
      $cats = get_the_terms($setPost->ID, str_replace('-', '_', $this->postType )."_category");
      if (!is_wp_error($cats) && !empty($cats)) {
          $setPost->category = array_map(function ($cat) {
              $cat->link = "/{$this->postType}/category/".$cat->slug;
              return $cat;
          }, $cats);
      } else {
          $setPost->category = [];
      }

      return $setPost;
  }
}