<?php

namespace App\View\Components;

use App\Models\category;
use Illuminate\View\Component;

class DropDown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.drop-down' , [
            'categories' => category::latest()->get(),
            'currentCate' => category::firstWhere('slug' , request('category'))
        ]);
    }
}
