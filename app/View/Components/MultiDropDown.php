<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MultiDropDown extends Component
{
    public $options;
    public $selected;
    public $name;
    public $id;
    public $placeholder;
    public $label;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $options,
        $selected = null,
        $name = '',
        $id = null,
        $placeholder = 'Select an option',
        $label = null
    ) {
        $this->options = $options;
        $this->selected = $selected;
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->placeholder = $placeholder;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.multi-drop-down');
    }
}
