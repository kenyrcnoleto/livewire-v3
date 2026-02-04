<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{

    //nesting - aninhamento de componentes

    #[\Livewire\Attributes\Computed]
    public function todos()
    {
        return \App\Models\Todo::all();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
