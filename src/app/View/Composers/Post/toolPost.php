<?php

namespace Wp\Post;


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
}