<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * The alert contextual class.
     *
     * @var string
     */
    public $variant;

    /**
     * The alert if dismissable.
     *
     * @var string
     */
    public $dismissable;

    /**
     * The alert content/ message.
     *
     * @var string
     */
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($variant = 'secondary', $content = null, $dismissable = false)
    {

        $this->variant     = $variant;
        $this->content     = $content;
        $this->dismissable = $dismissable == 'true' ? 'alert-dismissible fade show' : null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
