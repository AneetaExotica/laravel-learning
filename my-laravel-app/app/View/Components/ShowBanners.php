<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Admin\Banners;
class ShowBanners extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $banners;
    public function __construct()
    {
        $this->banners = Banners::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.show-banners');
    }
}
