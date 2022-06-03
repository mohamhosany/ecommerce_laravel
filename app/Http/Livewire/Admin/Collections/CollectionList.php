<?php

namespace App\Http\Livewire\Admin\Collections;

use Livewire\Component;

class CollectionList extends Component
{
    public function render()
    {
        return view('livewire.admin.collections.collection-list')->layout('admin.layouts.app');
    }
}
