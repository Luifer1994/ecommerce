<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryProduct extends Component
{
    public $category;
    public function render()
    {
        return view('livewire.category-product');
    }
}
