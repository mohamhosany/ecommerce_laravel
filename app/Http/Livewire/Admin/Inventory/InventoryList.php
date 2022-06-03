<?php

namespace App\Http\Livewire\Admin\Inventory;

use Livewire\Component;

class InventoryList extends Component
{
    public function render()
    {
        return view('livewire.admin.inventory.inventory-list')->layout('admin.layouts.app');
    }
}
