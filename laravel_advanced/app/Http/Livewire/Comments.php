<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class Comments extends Component
{
    public $newComment;
    use WithPagination;

    protected $listeners = [
        'delete' => 'remove'
    ];

    public function remove($commentId) {
        $comment = Comment::find($commentId);
        $comment->delete();

        session()->flash("message", "Comment is deleted successfully");
    }

    protected $rules = [
        'newComment' => 'required',
    ];

    public function addComment() {
    //     $comment = new Comment;
    //     $comment->user_id = Auth::user()->id;

    //     $comment->save()
    // 
        $this->validate();
        Comment::create(
            [
                'user_id' => auth()->user()->id,
                'content' => $this->newComment,
                'image' => '',
            ]
            );
            session()->flash("message", "Comment is created successfully");
    }

    public function mount() {
        $this->newComment="Hello world";
    }

    public function render()
    {
        return view('livewire.comments', [
            'comments' => Comment::latest()->paginate(5),
        ]);
    }
}
