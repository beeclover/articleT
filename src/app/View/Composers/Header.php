<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Wp\Nav\Walker\Header\Top;
use Wp\Nav\Walker\Header\Main;
use Wp\Nav\Walker\Header\MobileMain;
use Wp\Nav\Walker\Header\Cover;

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
          'gnc' => $this->gnc(),
        ];
    }

    public function tnb() {
      return wp_nav_menu([ 
        'menu' => 'top', 'container' => false, 'echo' => false, 'depth' => 1,
        'menu_class' => 'header__top-nav listDivider__cols1',
        'walker' => new Top(),
      ]);
    }

    public function gnb() {
      return wp_nav_menu([ 
        'menu' => 'main', 'container' => false, 'echo' => false, 'depth' => 2,
        'menu_class' => 'header__main-nav',
        'walker' => new Main(),
      ]);
    }

    public function m_gnb() {
      return wp_nav_menu([ 
        'menu' => 'main', 'container' => false, 'echo' => false, 'depth' => 2,
        'menu_class' => 'header__m_main-nav',
        'walker' => new MobileMain(),
      ]);
    }

    public function gnc() {
      return wp_nav_menu([ 
        'menu' => 'main', 'container' => false, 'echo' => false, 'depth' => 2,
        'menu_class' => 'header__cover',
        'walker' => new Cover(),
      ]);
    }
}


