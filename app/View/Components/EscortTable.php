<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EscortTable extends Component
{

    public $escort;
    /**
     * Create a new component instance.
     */
    public function __construct($escort)
    {
        $this->escort = $escort;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.escort-table');
    }
}
