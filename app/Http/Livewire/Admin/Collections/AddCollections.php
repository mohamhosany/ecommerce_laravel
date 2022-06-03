<?php

namespace App\Http\Livewire\Admin\Collections;

use Livewire\Component;

class AddCollections extends Component
{
    public function render()
    {
        return view('livewire.admin.collections.add-collections')->layout('admin.layouts.app');
    }
}
