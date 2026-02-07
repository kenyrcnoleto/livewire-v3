<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <h1 class="text-2xl font-bold mb-4">Todo List</h1>
    <ul>

        @foreach ($this->todos as $todo)
        {{-- formas de passar a variável :todo="$todo" ou :$todo --}}
        <livewire:todo-item
            :$todo
            :key="$todo->id"
        />
        @endforeach
    </ul>
</div>
