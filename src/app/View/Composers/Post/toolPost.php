<?php

namespace Wp\Post;

use function Roots\view;

class Tool {
  public static function get_excerpt($limit, $source = null, $link = null){
    // $excerpt = $source == "content" ? get_the_content() : get_the_excerpt();
    $excerpt = preg_replace(" (\[.*?\])",'',$source);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $limit);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt .= '... ';
    if ($link) {
      $excerpt .= '<a href="'.$link.'">more</a>';
    }
    return $excerpt;
  }
  
  /**
   * objectThumbnail
   * object fit 스타일을 같는 섬네일을 전달하는데 이미지가 없을때 기본 값인 no image를 리턴한다.
   *
   * @param WP_Post $post
   * 
   * @return image
   */
  public static function objectThumbnail($post)
  {
    if ($thumbnail_url = get_the_post_thumbnail_url($post)) {
      return <<<EOD
        <img src="$thumbnail_url">
EOD;
    } else {
      $img = get_theme_file_uri('resources/images/no-image-icon-23487.png');
      return <<<EOD
      <img src="$img">
EOD;
    }
  }
}