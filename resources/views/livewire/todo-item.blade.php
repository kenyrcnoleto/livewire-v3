<div>
    {{-- Stop trying to control. --}}
    <li class=" flex items-center mb-2 space-y-1"> >
        <input type="checkbox" class="ml-4" {{ $todo->is_completed ? 'checked' : '' }}
            wire:change="toggleComplete()" />
            {{-- Não precisa passar o $todo->id no toggleComplete() pois está dentro do escopo, contexto do todo --}}
        <span class="ml-2  {{ $todo->is_completed ? 'line-through text-gray-500' : '' }}">
            {{ $todo->title }}
        </span>
    </li>
</div>
