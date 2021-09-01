<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public function render()
    {
        return view('livewire.comments', [
            'comments' => Comment::all(),
        ]);
    }
}
