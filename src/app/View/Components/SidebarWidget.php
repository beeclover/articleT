<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class SidebarWidget extends Component
{
    public function render()
    {
        return $this->view('components.sidebar-widget');
    }
}
