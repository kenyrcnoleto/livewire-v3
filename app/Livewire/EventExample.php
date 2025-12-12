<?php

namespace App\Livewire;

use Livewire\Component;

class EventExample extends Component
{
    public function handleEvent() :void
    {
        $this->dispatch('event-example');
        // Handle the event (e.g., log, update state, etc.)
    }
    public function render()
    {
        return view('livewire.event-example');
    }
}
