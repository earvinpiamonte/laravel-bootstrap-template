<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * The button contextual class.
     *
     * @var string
     */
    public $variant;

    /**
     * The button label/ content.
     *
     * @var string
     */
    public $content;

    /**
     * Condition if the button should be displayed as a link or button
     *
     * @var boolean
     */
    public $link;

    /**
     * Condition if the button should be displayed with an outline
     *
     * @var boolean
     */
    public $outlined;

    /**
     * Condition if the button should be displayed as block element
     *
     * @var boolean
     */
    public $block;

    /**
     * The button size
     *
     * @var string
     */
    public $size;

    /**
     * The button state
     *
     * @var string
     */
    public $state;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $variant  = 'primary',
        $content  = null,
        $link     = false,
        $outlined = false,
        $size     = null,
        $block    = false,
        $state    = null
    )
    {
        switch ($size) {
            case 'small':
                $size = 'btn-sm';
                break;
            case 'large':
                $size = 'btn-lg';
                break;
            default:
                $size = null;
                break;
        }

        switch ($state) {
            case 'active':
                $state = 'active';
                break;
            case 'disabled':
                $state = 'disabled';
                break;
            default:
                $state = null;
                break;
        }

        $this->variant  = $variant;
        $this->content  = $content;
        $this->link     = $link == 'true' ? true : false;
        $this->outlined = $outlined == 'true' ? 'btn-outline-' . $variant : null;
        $this->size     = $size;
        $this->block    = $block == 'true' ? 'btn-block' : null;
        $this->state    = $state;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button');
    }
}
