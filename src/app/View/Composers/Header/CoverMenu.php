<?php

namespace Wp\Nav\Walker;

use Walker_Nav_Menu;

class CoverMenu extends Walker_Nav_Menu
{

  /**
   * Starts the list before the elements are added.
   *
   * Adds classes to the unordered list sub-menus.
   *
   * @param string $output Passed by reference. Used to append additional content.
   * @param int    $depth  Depth of menu item. Used for padding.
   * @param array  $args   An array of arguments. @see wp_nav_menu()
   */
  public $id = '';

  public function start_lvl(&$output, $depth = 0, $args = array())
  {
      // Depth-dependent classes.
      $indent = ($depth > 0  ? str_repeat("\t", $depth) : ''); // code indent
      $display_depth = ($depth + 1); // because it counts the first submenu as 0
      $classes = array(
          'sub-menu',
          ($display_depth % 2  ? 'menu-odd' : 'menu-even'),
          ($display_depth >=2 ? 'sub-sub-menu' : ''),
          'menu-depth-' . $display_depth
      );
      
      // 자식을 가지고있는 alpinejs가 적용되야하는 element에 클래스 적용
      $advance_class_names = $depth === 0 ? ' header__gnc-subnav ' : '';
      $class_names = implode($advance_class_names, $classes);

      // depth data
      $dapth_alpinejs = $depth === 0 ? <<<EOD
            x-show="selected === $this->id"
            x-cloak
        EOD : '';

      // Build HTML for output.
      $output .= "\n" . $indent . '<ul class="' . $class_names . '"'. $dapth_alpinejs .'>' . "\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      global $wp_query;
      $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

      // Depth-dependent classes.
      $depth_classes = array(
          ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
          ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
          ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
          'menu-item-depth-' . $depth
      );
      $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

      // Passed classes.
      $classes = empty( $item->classes ) ? array() : (array) $item->classes;

      // 최상위 부모 메뉴 아이템 클래스 추가
      $advance_class_names = $depth === 0 ? ' header__gnc-nav-item-parent ' : ' ';
      $class_names = esc_attr( implode( $advance_class_names, apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

      // Build HTML.
      $output .= <<<EOD
        $indent<li class="$depth_class_names $class_names">
EOD;

      // Link attributes.
      $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
      $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
      $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
      $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
      $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link header__gnc-nav-item-'.$depth : 'main-menu-link header__gnc-nav-item' ) . '"';
      
      $this->id = $item->ID;

      $arrow = $depth === 0 ? <<<EOD
        <button 
          class="btn-arrow" 
          @click.prevent="selected === $item->ID ? selected = 0 : selected = $item->ID"
          :class="{'active': selected === $item->ID}"
        >arrow</button>
EOD: '';

      // Build HTML output and pass through the proper filter.
      $item_output = sprintf( '<div class="header__gnc-nav-link">%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s%7$s</div>',
          $args->before,
          $attributes,
          $args->link_before,
          apply_filters( 'the_title', $item->title, $item->ID ),
          $args->link_after,
          $args->after,
          $arrow,
      );
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}