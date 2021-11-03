<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Wp\Nav\Walker\TNB;
use Wp\Nav\Walker\GNB;
use Wp\Nav\Walker\M_GNB;

class Header extends Composer
{
    protected static $views = [
        'partials.header',
    ];
    public function with()
    {
        return [
          'tnb' => $this->tnb(),
          'gnb' => $this->gnb(),
          'm_gnb' => $this->m_gnb(),
        ];
    }

    public function tnb() {
      return wp_nav_menu([ 
        'menu' => 'top', 'container' => false, 'echo' => false, 'depth' => 1,
        'menu_class' => 'header__top-nav coldiv__s1',
        'walker' => new TNB(),
      ]);
    }

    public function gnb() {
      return wp_nav_menu([ 
        'menu' => 'main', 'container' => false, 'echo' => false, 'depth' => 2,
        'menu_class' => 'header__global-nav',
        'walker' => new GNB(),
      ]);
    }

    public function m_gnb() {
      return wp_nav_menu([ 
        'menu' => 'main', 'container' => false, 'echo' => false, 'depth' => 2,
        'menu_class' => 'header__m_global-nav',
        'walker' => new M_GNB(),
      ]);
    }
}


