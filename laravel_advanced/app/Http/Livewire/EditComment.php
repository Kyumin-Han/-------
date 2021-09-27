<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class EditComment extends ModalComponent
{
    use WithFileUploads;

    public $commentId;
    public $orgComment;
    public $newComment;
    public $image;


    protected $listeners = [
        'update' => 'updateComment',
    ];

    

    public function render()
    {
        return view('livewire.edit-comment');
    }

    public function mount($commentId) {
        $this->commentId = $commentId;
        $this->orgComment = Comment::find($commentId);
        $this->newComment = $this->orgComment->content;
    }

    public function updateComment() {
        $this->validate([
            'newComment' => 'required',
            'image' => 'nullable|image|max:10240'
        ]);

        $imageFileName = null;
        if($this->image) {
            if($this->orgComment->image) {
                Storage::disk('public')->delete('images/'.$this->orgComment->image);
            }
            $imageFileName = $this->storeImage();
            $this->orgComment->image = $imageFileName;
        }
        $this->orgComment->content = $this->newComment;
        $this->orgComment->save();
            
        $this->newComment = '';
        $this->image = '';
        session()->flash("message", "Comment is updated successfully");
        $this->closeModal();
        $this->emit('commentUpdated');
    }

    public function storeImage() {
        $img = ImageManagerStatic::make($this->image)->resize(300,300)->encode('jpg');
        $name = Str::random().'.jpg';
        // $this->image->storeAs('public/images', $name);
        Storage::disk('public')->put('images/'.$name, $img);

        return $name;
    }
}
