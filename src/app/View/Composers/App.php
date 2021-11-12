<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'siteLogo' => $this->siteLogo(),
            'id' => get_the_id(),
            'newsletterLink' => $this->getNewsletter(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function siteLogo()
    {
      return get_theme_file_uri('resources/images/logo-01.svg');
    }

    public function getNewsletter()
    {
      $post = get_post(719);
      return get_the_permalink($post);
    }
}
