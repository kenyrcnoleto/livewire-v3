<div>
    {{-- Be like water. --}}
    <button wire:click="$refresh">Refresh</button>

    <input type="text" wire:model.live="name" placeholder="Type a name"/>
    <input type="text" wire:model.live="email" placeholder="Type an email"/>
</div>
