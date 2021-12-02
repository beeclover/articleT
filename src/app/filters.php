<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip;', get_permalink(), __('', 'sage'));
});


/**
 * TIP: 아카이브 '라벨' 제거
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
      $title = single_cat_title('', false);
  } elseif (is_tag()) {
      $title = single_tag_title('', false);
  } elseif (is_author()) {
      $title = '<span class="vcard">' . get_the_author() . '</span>';
  } elseif (is_post_type_archive()) {
      $title = post_type_archive_title('', false);
  } elseif (is_tax()) {
      $title = single_term_title('', false);
  }
  return $title;
});
