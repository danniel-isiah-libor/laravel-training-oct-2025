<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    private $label;

    /**
     * Create a new component instance.
     */
    public function __construct($label)
    {
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $label = $this->label;

        return <<<'blade'
<div>
    I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison
</div>
blade;
    }
}
