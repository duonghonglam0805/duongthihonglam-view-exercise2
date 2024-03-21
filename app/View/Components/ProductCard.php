<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class productCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $image;
    public $caption;
    public $price;
    public $price_f;
    public function __construct($image, $caption, $price = "", $price_f = "")
    {
        $this->image = $image;
        $this->caption = $caption;
        $this->price = $price;
        $this->price_f = $price_f;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}