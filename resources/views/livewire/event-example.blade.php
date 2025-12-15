<div>
    <button wire:click="handleEvent" >Click me</button>
    {{-- Be like water. --}}


    <ul class="my list-decimal gap-2" >
        @foreach ($this->users as $user)
            <li class="hover:under cursor-pointer" wire:click="dispatchEventForUser( {{ $user->id }} )" >
                 {{    $user->name }}
             </li>
        @endforeach
    </ul>

    <br>

    @foreach ($this->users as $user)
            <livewire:show-user :user="$user" :key="$user->id" />
        @endforeach
</div>
