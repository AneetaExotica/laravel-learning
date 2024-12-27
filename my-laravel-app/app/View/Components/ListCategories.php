<?php

namespace App\View\Components;
use App\Models\Admin\categories;
use Illuminate\View\Component;

class ListCategories extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $listcategories;
    public function __construct()
    {

        $this->listcategories = categories::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    
    public function render()
    {
       
        return view('components.list-categories');
    }
}
