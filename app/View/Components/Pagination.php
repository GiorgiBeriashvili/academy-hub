<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class Pagination extends Component
{
    /**
     * @var LengthAwarePaginator
     */
    public LengthAwarePaginator $academies;

    /**
     * Create a new component instance.
     * @param LengthAwarePaginator $academies
     * @returns void
     */
    public function __construct(LengthAwarePaginator $academies)
    {
        $this->academies = $academies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render(): View|string
    {
        return view('components.pagination');
    }
}
