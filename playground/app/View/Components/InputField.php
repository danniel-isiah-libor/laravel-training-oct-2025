<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    private $label, $type, $name;

    /**
     * Create a new component instance.
     */
    public function __construct($label, $type, $name)
    {
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-field', [
            'label' => $this->label,
            'type' => $this->type,
            'name' => $this->name,
        ]);
    }
}
