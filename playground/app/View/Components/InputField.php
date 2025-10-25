<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    private $name;
    private $label;
    private $type;
    private $value;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $label, $type = 'text', $value = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-field', [
            'name' => $this->name,
            'type' => $this->type,
            'label' => $this->label,
            'value' => $this->value,
        ]);
    }
}
