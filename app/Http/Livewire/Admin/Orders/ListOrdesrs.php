<?php

namespace App\Http\Livewire\Admin\Orders;

use Livewire\Component;

class ListOrdesrs extends Component
{
    public function addNew()
    {
        $this->dispatchBrowserEvent('show-form');
    }
    public function render()
    {
        return view('livewire.admin.orders.list-ordesrs')->layout('admin.layouts.app');
    }
}
