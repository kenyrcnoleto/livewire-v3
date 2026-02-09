<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoItem extends Component
{
    public Todo $todo;


    public function toggleComplete()
    {
        $this->todo->is_completed = !$this->todo->is_completed;
        $this->todo->save();
    }

    public function delete()
    {
        $this->todo->delete();
        $this->dispatch('todos-refresh');
    }

    public function render()
    {
        return view('livewire.todo-item');
    }
}
