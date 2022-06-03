<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class AddUsers extends Component
{
    public function render()
    {
        return view('livewire.admin.users.add-users')->layout('admin.layouts.app');
    }
}
