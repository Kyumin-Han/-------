<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic;

class Comments extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $newComment;
    public $image;

    protected $listeners = [
        'delete' => 'remove'
    ];

    public function remove($commentId) {
        $comment = Comment::find($commentId);

        if($this->image) {
            Storage::disk('public')->delete('images/'.$comment->image);
        }
        $comment->delete();

        session()->flash("message", "Comment is deleted successfully");
    }

    protected $rules = [
        'newComment' => 'required',
        'image' => 'nullable|image|max:10240'
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function addComment() {
    //     $comment = new Comment;
    //     $comment->user_id = Auth::user()->id;

    //     $comment->save()
    // 
        $this->validate();

        // 이미지가 있으면 원하는 폴더에 저장하고 저잗된 파일의 이름을 기억한다.
        // $imageFileName에 이름을 유지한다
        $imageFileName = null;
        if($this->image) {
            $imageFileName = $this->storeImage();
        }

        Comment::create(
            [
                'user_id' => auth()->user()->id,
                'content' => $this->newComment,
                'image' => $imageFileName,
            ]
            );
            
        $this->newComment = '';
        $this->image = '';
        session()->flash("message", "Comment is created successfully");
    }

    public function storeImage() {
        $img = ImageManagerStatic::make($this->image)->resize(300,300)->encode('jpg');
        $name = Str::random().'.jpg';
        // $this->image->storeAs('public/images', $name);
        Storage::disk('public')->put('images/'.$name, $img);

        return $name;
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
