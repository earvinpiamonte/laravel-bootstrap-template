<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonClose extends Component
{
    /**
     * The type of component to dismiss.
     *
     * @var string
     */
    public $type;

    /**
     * The close button content.
     *
     * @var string
     */
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = null, $content = null)
    {
        $this->type    = $type;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button-close');
    }
}
