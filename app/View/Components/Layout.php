<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{

    public $title;

    public function __construct($title = "Kapiswork - Work on your fingertips")
    {
        $this->title = $title;
    }
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.layout');
    }
}
