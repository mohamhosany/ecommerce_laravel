<?php

namespace App\Http\Livewire\Admin\Orders;

use Livewire\Component;

class AddOrders extends Component
{
    public function render()
    {
        return view('livewire.admin.orders.add-orders')->layout('admin.layouts.app');;
    }
}
