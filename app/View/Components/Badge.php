<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    /**
     * The badge contextual class.
     *
     * @var string
     */
    public $variant;

    /**
     * The badge content/ text.
     *
     * @var string
     */
    public $content;

    /**
     * The badge type.
     *
     * @var string
     */
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($variant = 'secondary', $content = null, $type = null)
    {
        switch ($type) {
            case 'link':
                $type = 'a';
                break;
            default:
                $type = null;
                break;
        }

        $this->type    = $type;
        $this->variant = $variant;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.badge');
    }
}
