<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;

class AddProducts extends Component
{
    public function render()
    {
        return view('livewire.admin.products.add-products')->layout('admin.layouts.app');
    }
}
