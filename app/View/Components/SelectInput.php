<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectInput extends Component
{
    /**
     * The name of the select input.
     *
     * @var string
     */
    public $name;

    /**
     * The options for the select input.
     *
     * @var array
     */
    public $options;

    /**
     * The value of the select input.
     *
     * @var mixed
     */
    public $value;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  array  $options
     * @param  mixed  $value
     * @return void
     */
    public function __construct($name, $options = [], $value = null)
    {
        $this->name = $name;
        $this->options = $options;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.select-input');
    }
}
