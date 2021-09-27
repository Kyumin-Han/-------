<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserList extends Component
{
    public $userId;

    public function render()
    {
        return view('livewire.user-list', ['users' => User::latest()->paginate(5)]);
    }

    public function mount() {
        $this->userId = Auth::user()->id;
    }

    protected $listeners = [
        'userSelected',
    ];

    public function userSelected($userId) {
        $this->userId = $userId;
    }

}
