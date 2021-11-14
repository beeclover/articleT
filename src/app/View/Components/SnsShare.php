<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class SnsShare extends Component
{
    /**
     * Create the component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.sns-share');
    }
}
