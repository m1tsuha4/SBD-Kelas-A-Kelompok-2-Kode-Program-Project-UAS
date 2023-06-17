<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DateInput extends Component
{
    /**
     * The name of the input.
     *
     * @var string
     */
    public $name;

    /**
     * The value of the input.
     *
     * @var string|null
     */
    public $value;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string|null  $value
     * @return void
     */
    public function __construct($name, $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.date-input');
    }
}
