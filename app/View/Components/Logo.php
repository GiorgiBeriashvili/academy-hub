<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Logo extends Component
{
    /**
     * The logo's width and height specifier.
     *
     * @var int
     */
    public int $size;

    /**
     * Create a new component instance.
     *
     * @param int|null $size
     */
    public function __construct(int $size = null)
    {
        $this->size = $size ?? 24;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render(): View|string
    {
        return view('components.logo');
    }
}
