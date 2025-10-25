<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    private $label, $type, $color, $style;



    public function __construct($label, $type, $color = null, $style = null)
    {
        $this->label = $label;
        $this->type = $type;
        $this->color = $color;
        $this->style = $style;
    }

    public function render(): View|Closure|string
    {
        return view('components.input-field', [
            'label' => $this->label,
            'type' => $this->type,
            'color' => $this->color,
            'style' => $this->style,
        ]);
    }
}
