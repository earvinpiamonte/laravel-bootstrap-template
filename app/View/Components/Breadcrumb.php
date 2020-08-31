<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    /**
     * The breadcrumb links - label pair.
     *
     * @var array
     */
    public $pages;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pages = [])
    {
        $this->pages = $pages;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
