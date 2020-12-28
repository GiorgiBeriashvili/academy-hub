<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavigationItem extends Component
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $route;

    /**
     * @var string
     */
    public string $name;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param string $route
     * @param string $name
     * @returns void
     */
    public function __construct(string $type, string $route, string $name)
    {
        $this->type = $type;
        $this->route = $route;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render(): View|string
    {
        return view('components.navigation-item');
    }
}
