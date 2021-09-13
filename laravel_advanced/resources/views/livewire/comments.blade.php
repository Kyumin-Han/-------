<div>
    <div>
        @if(session()->has('message'))
            <div class="p-3 text-green-800 bg-green-300 rounded shadow-sm">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <section>
        @if ($image)
            <img src="{{ $image->temporaryUrl() }}" width="200">
        @endif
        <input type="file" wire:model="image" id="image" wire:loading.attr="disabled">
        <div wire:loading wire:target="image">
            File Uploading
        </div>
        @error('image')
            <div class="text-red-700">
                <span>{{ $message }}</span>
            </div>    
        @enderror
    </section>

    <form class="flex my-4" wire:submit.prevent="addComment">
        <input type="text" wire:model.lazy="newComment" class="w-full p-2 my-2 mr-2 border rounded shadow" placeholder="new comment here...">
        @error("newComment")
        <div>
            <span class="text-red">{{ $message }}</span>
        </div>
        @enderror
        <div class="py-2">
            <button class="w-20 p-2 text-white bg-blue-500 rounded shadow">Add</button>
        </div>        
    </form>
    @foreach($comments as $comment)
    <div class="p-2 my-2 border rounded shadow">
        <div class="flex justify-between my-2">
            <div class="flex">
                <p class="text-lg font-bold">
                    {{ $comment->writer->name }}
                </p>
                <p class="py-1 mx-2 text-xs font-semibold text-gray-500">
                    {{ $comment->created_at->diffForHumans() }}
                </p>
                <i wire:click="$emit('deleteClicked', {{ $comment->id }})" class="fas fa-times text-red-400 cursor-pointer hover:text-red-600"></i>
            </div>
            <p class="text-gray-800">
                {{ $comment->content }}
            </p>
            @if($comment->image)
                <img src="{{ $comment->image_path }}"/>
            @endif
        </div>
    </div>
@endforeach

{{ $comments->links() }}
</div>

<script>
    window.livewire.on('deleteClicked', (id)=>{
        if(confirm("Are you sure to DELETE?")){
            window.livewire.emit('delete', id);
        }
    })
</script>