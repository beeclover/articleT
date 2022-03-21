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
            'articleRecruitmentBtn' => $this->articleRecruitmentBtn(),
        ];
    }

    public function tnb()
    {
        return get_field('top_banner_content', 'option');
    }

    public function gnb()
    {
        return wp_nav_menu([
            'menu' => 10, 'container' => false, 'echo' => false, 'depth' => 2,
            'menu_class' => 'header__main-nav',
            'walker' => new Main(),
        ]);
    }

    public function m_gnb()
    {
        return wp_nav_menu([
            'menu' => 10, 'container' => false, 'echo' => false, 'depth' => 2,
            'menu_class' => 'header__m_main-nav',
            'walker' => new MobileMain(),
        ]);
    }

    public function gnc()
    {
        return wp_nav_menu([
            'menu' => 10, 'container' => false, 'echo' => false, 'depth' => 2,
            'menu_class' => 'header__cover',
            'walker' => new Cover(),
        ]);
    }

    public function articleRecruitmentBtn()
    {
        return get_field('article-recruitment', 'option');
    }
}
