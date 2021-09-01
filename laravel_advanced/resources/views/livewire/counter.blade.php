<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    {{-- <h1>First livewire component</h1> --}}
    <div style="text-align:center">
        <button wire:click="increment">+</button>
        <h1>{{ $count }}</h1>
        <button wire:click="decrement">-</button>
        <div>
            {{-- <input type="text" wire:model.debounce.500ms="name"><br/> 대기했다가 보내는 방법 1. --}}
            <input type="text" wire:model.lazy="name"><br/> 
            {{-- model.lazy는 해당 컴포넌트에서 포커스가 벗어나면 반영한다 --}}
            <span>{{ $name }}</span>
        </div>
    </div>
</div>
