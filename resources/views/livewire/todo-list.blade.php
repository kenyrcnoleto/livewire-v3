<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <h1 class="text-2xl font-bold mb-4">Todo List</h1>
    <ul>
        {{-- @php
            dd($this->todos);
        @endphp --}}
        @foreach ($this->todos as $todo)
            <li class=" flex items-center mb-2"> >
                {{ $todo->title }}</li>
        @endforeach
    </ul>
</div>
