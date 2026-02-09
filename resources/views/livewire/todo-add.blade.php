<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
     <div>
        <input
            type="text"
            placeholder="Add a new todo..."
            class="border border-gray-300 rounded px-4 py-2 w-full mb-4"
            wire:model="newTodo"
            wire:keydown.enter="addTodo"
        />
        <button
            class="bg-blue-500 text-black px-4 py-2 rounded text-sm font-medium hover:bg-blue-600"
            wire:click="addTodo"
        >
            Add Todo
        </button>
    </div>
</div>
