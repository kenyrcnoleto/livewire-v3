<div>
    Hello from Livewire v3
    <br>

    <x-text-input wire:model.live="name" />
    <x-primary-button wire:click="refresh">
        Refresh
    </x-primary-button>
    <br><br>
    
    <div x-data="">
        <span x-text="$wire.name"></span>

        <x-secondary-button @click="$wire.name='Joazinho'">teste</x-secondary-button>
    </div>
    <br><br>
    Name:: {{ $name }} {{ $lastName }}
    <br>
    Name:: {{ $this->fullName }}
    <br><br>
    <div> {{ $counter }} </div>

    <x-primary-button wire:click="count">
        +
    </x-primary-button>
</div>
