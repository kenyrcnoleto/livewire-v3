<?php

namespace App\Livewire;

use Livewire\Component;

class TodoAdd extends Component
{
    public string $newTodo = '';

     public function addTodo()
    {
        // dd($this->newTodo);
        $this->validate([
            'newTodo' => 'required|string|max:255',
        ]);

        \App\Models\Todo::create([
            'title' => $this->newTodo,
        ]);

        $this->newTodo = '';
        $this->dispatch('todos-refresh');
    }
    public function render()
    {
        return view('livewire.todo-add');
    }
}
