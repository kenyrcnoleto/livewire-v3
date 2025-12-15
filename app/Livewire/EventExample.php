<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class EventExample extends Component
{
    public function handleEvent() :void
    {
        $this->dispatch('event-example', params: ['id' => 123]);
        // Handle the event (e.g., log, update state, etc.)
    }

    public function dispatchEventForUser(int $userId) : void
    {
        $this->dispatch("show-user.{$userId}");
    }

    #[Computed]
    public function users() : Collection
    {
        return User::all();
    }
    public function render()
    {
        return view('livewire.event-example');
    }
}
