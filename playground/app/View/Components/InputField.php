<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    private $label, $type, $name; // use public if you pass to Blade

    public function __construct($label, $type, $name='')
    {
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
    }

    public function render(): View|Closure|string
    {
        return view('components.input-field', [
            'label' => $this->label,
            'type' => $this->type,
            'name' => $this->name,
        ]);
    }
}