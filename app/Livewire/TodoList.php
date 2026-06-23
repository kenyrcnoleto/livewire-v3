<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{

    public string $newTodo = '';

    //nesting - aninhamento de componentes

    #[\Livewire\Attributes\On('todos-refresh')]
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
    // public function addTodo()
    // {
    //     // dd($this->newTodo);
    //     $this->validate([
    //         'newTodo' => 'required|string|max:255',
    //     ]);

    //     \App\Models\Todo::create([
    //         'title' => $this->newTodo,
    //     ]);

    //     $this->newTodo = '';
    // }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
