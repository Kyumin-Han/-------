<div>
    <div>
        @foreach($users as $user)
        <div class="p-2 my-2 border rounded shadow {{ $userId == $user->id?' bg-green-400':''}}">
            <div class="flex justify-between my-2">
                <div class="flex">
                    <p class="text-lg font-bold">
                        {{ $user->name }}
                    </p>
                    <p class="py-1 mx-2 text-xs font-semibold text-gray-500">
                        {{ $user->created_at->diffForHumans() }}
                    </p>
                    <i wire:click="$emit('userSelected', {{$user->id}})" class="mx-5 fas fa-info-circle text-blue-400 cursor-pointer hover:text-blue-600 {{ $userId == $user->id? 'text-blue-800':''}}"></i>
                </div>
            </div>
        </div>
    @endforeach
    
    {{ $users->links() }}
    </div>
</div>
