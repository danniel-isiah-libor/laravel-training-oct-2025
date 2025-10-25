<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    /**
     * Create a new component instance.
     */

    private $label;
    private $name;
    private $type;
    private $required;


    public function __construct($label,$name,$type,$required)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-field',[
            'label' => $this->label,
            'name' => $this->name,
            'type' => $this->type,
            'required' => $this->required
        ]);
    }
}
