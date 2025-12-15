<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ListenerExample extends Component
{

    //Existe essas 3 opções para registrar listeners em um componente Livewire **

    // protected $listeners = [
    //     'event-example' => 'handleEvent'
    // ];

    // public function getListeners() :array
    // {
    //     return [
    //         'event-example' => 'handleEvent'
    //     ];
    // }

    #[On('event-example')]

    public function handleEvent($params) : void
    {
        dd($params);
        dd('Event received in ListenerExample component');
        // Handle the event (e.g., log, update state, etc.)
    }

    public function render()
    {
        return view('livewire.listener-example');
    }
}
