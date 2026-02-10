<?php

use App\Livewire\TodoAdd;
use Livewire\Livewire;

it('renders successfully', function () {
    $lw = Livewire::test(TodoAdd::class)
        ->set('newTodo', 'Test Todo')
        ->call('addTodo')
        ->assertHasNoErrors();

        $this->assertDatabaseHas('todos', [
            'title' => 'Test Todo',
        ]);

        $lw->assertSet('newTodo', '');
        $lw->assertDispatched('todos-refresh');
})->only();
