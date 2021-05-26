<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryProduct extends Component
{
    public $category;
    public $products = [];
    public function render()
    {
        return view('livewire.category-product');
    }

    public function loadPosts()
    {
        $this->products = $this->category->products()->where('status',2)->take(10)->get();

        $this->emit('glider', $this->category->id);
    }
}
