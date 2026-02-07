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

    // public function toggleComplete($id)
    // {
    //     $todo = \App\Models\Todo::findOrFail($id);

    //     $todo->is_completed = !$todo->is_completed;
    //     $todo->save();
    // }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
