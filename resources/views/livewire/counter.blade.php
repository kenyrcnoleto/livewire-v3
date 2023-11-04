<div>
    Hello from Livewire v3
    <br>
    Name:: {{ $name }} {{ $lastName }}
    <br>
    <div> {{ $counter }} </div>

    <x-primary-button wire:click="count">
        +
    </x-primary-button>
</div>
