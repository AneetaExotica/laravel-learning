<?php

namespace App\View\Components;
use App\Models\Admin\blogs;
use Illuminate\View\Component;

class GetPosts extends Component
{
    public $listposts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public function __construct()
    {
       $this->listposts =blogs::paginate(3);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.get-posts');
    }
}
