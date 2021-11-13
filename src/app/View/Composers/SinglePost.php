<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SinglePost extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single',
        'partials.content-single-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'thumbnail' => $this->thumbnail(),
            'attached' => $this->attached(),
        ];
    }

    public function thumbnail()
    {
      return get_the_post_thumbnail();
    }

    public function attached()
    {
      $attached = get_field('attachedGroup');
      return $attached;
    }
}
