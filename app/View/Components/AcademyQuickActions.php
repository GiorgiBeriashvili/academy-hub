<?php

namespace App\View\Components;

use App\Models\Academy;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AcademyQuickActions extends Component
{
    /**
     * @var Academy
     */
    public Academy $academy;

    /**
     * Create a new component instance.
     *
     * @param Academy $academy
     * @returns void
     */
    public function __construct(Academy $academy)
    {
        $this->academy = $academy;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render(): View|string
    {
        return view('components.academy-quick-actions');
    }
}
