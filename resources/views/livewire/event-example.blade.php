<div>
    <button wire:click="handleEvent" >Click me</button>
    {{-- Be like water. --}}


    <ul class="my list-decimal gap-2" x-data>
        @foreach ($this->users as $user)
            {{--*disparando evento atraves do metodo criado <li class="hover:under cursor-pointer" wire:click="dispatchEventForUser( {{ $user->id }} )" >
                 {{    $user->name }}
             </li> --}}

             <li class="hover:under cursor-pointer" @click="$wire.dispatch('show-user.{{ $user->id }}')" >
                 {{    $user->name }}
             </li>
        @endforeach
    </ul>

    <br>

    @foreach ($this->users as $user)
            <livewire:show-user :user="$user" :key="$user->id" />
        @endforeach
</div>
