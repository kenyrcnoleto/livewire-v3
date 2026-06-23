<?php

use App\Livewire\TodoAdd;
use App\Livewire\TodoCount;
use App\Livewire\TodoList;
use App\Models\Todo;
use Livewire\Livewire;

it('renders successfully', function () {
    $lw = Livewire::test(TodoAdd::class)
        ->set('newTodo', 'Test Todo')
        ->call('addTodo')
        ->assertPropertyWired('newTodo')
        ->assertHasNoErrors();

        $this->assertDatabaseHas('todos', [
            'title' => 'Test Todo',
        ]);

        $lw->assertSet('newTodo', '');
        $lw->assertDispatched('todos-refresh');
});

test('validation fails when newTodo is empty', function () {
    Livewire::test(TodoAdd::class)
        ->set('newTodo', '')
        ->call('addTodo')
        ->assertHasErrors(['newTodo' => 'required'])
        ->assertSee(__('validation.required', ['attribute' => 'new todo']))

        ->set('newTodo', str_repeat('a', 256))
        ->call('addTodo')
        ->assertHasErrors(['newTodo' => 'max'])
        ->assertSee(__('validation.max.string', ['attribute' => 'new todo', 'max' => 255]));
});

test('list todos', function () {
    Todo::factory()->count(5)->create();

    //assert SET pode ser utilizado para verificar propriedade primitiva ou para verificar uma coleção usando uma função de callback (propriedade computado).

    //Utilizando o christophrumpel/missing-livewire-assertions para utilizar assertContainsLivewireComponent, que verifica se um componente filho específico está presente dentro do componente pai.

    Livewire::test(TodoList::class)
    //   ->assertContainsLivewireComponent(TodoAdd::class)
    ->assertSet('todos', fn($todo) => $todo->count() === 5);
});

test('todo count test', function () {
    $todos = Todo::factory()->count(3)->create();

    Livewire::test(TodoCount::class, ['todos' => $todos])
    ->set('todos')
    ->assertSee('Todos: 3');
});
