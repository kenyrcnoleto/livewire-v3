<div>
    Hello from Livewire v3
    <br>

    <x-text-input wire:model.blur="counter" />
    <x-primary-button wire:click="refresh">
        Refresh
    </x-primary-button>
    <br><br>
    Name:: {{ $name }} {{ $lastName }}
    <br>
    <div> {{ $counter }} </div>

    <x-primary-button wire:click="count">
        +
    </x-primary-button>
</div>
