<div>
    { show-user.{{ $user->id }} event }
    @if($show)
        <div class="border p-4 mb-4 rounded shadow-sm" >
    <h1 class="text-xl font-bold mb-2" >{{ $user->name }}</h1>
    <p class="italic text-sm text-gray-500 " >User ID: {{ $user->id }} </p>
    <p class="mt-2" >Hello, I am {{ $user->name }}!</p>

    {{-- Be like water. --}}
</div>

    @endif

</div>
