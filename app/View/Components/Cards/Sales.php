<?php

namespace App\View\Components\Cards;

use Illuminate\View\Component;

class Sales extends Component
{
    public $title;
    public $icon;
    public function __construct($title, $icon)
    {
        $this->title = $title;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.sales');
    }
}
