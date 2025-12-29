<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Lifecycle extends Component
{

    public $prop = null;
    public $name = 'Joe Doe';
    public string $email = 'joe@doe.com';

    public function mount(mixed $id = null) : void
    {
        // This method is called when the component is first mounted.
        // Initialization logic can go here.
        $this->prop = $id;
        Log::info(__METHOD__ . ' called', ['id' => $id, 'prop' => $this->prop]);
    }

    public function hydrate() : void
    {
        // This method is called before the component is re-rendered on subsequent requests.
        //Job to conter anytimes the component is hydrated from the request.
        Log::info(__METHOD__ . ' called');
    }

    public function dehydrate() : void
    {
        // This method is called after the component has been rendered on subsequent requests.
        Log::info(__METHOD__ . ' called');

    }

    public function boot() : void
    {
        // This method is called once when the component is instantiated.
        //Setup logic can go here.
        Log::info(__METHOD__ . ' called');
    }

    public function updating($name, $value) : void
    {
        // This method is called before a property is updated.
        Log::info('before');
        Log::info(__METHOD__ . ' called', [
            'property' => $name,
             'new_value' => $value,
             'prop' => $this->name,
            ]);
    }

    public function updated($name, $value) :void
    {
        // This method is called after a property has been updated.
         Log::info('after');
        Log::info(__METHOD__ . ' called', [
            'property' => $name,
            'new_value' => $value,
            'prop' => $this->name,
    ]);
    }

    public function updatingName(string $value) : void
    {
        Log::info('before specific prop name');
        Log::info(__METHOD__ . ' called', [
            'new_value' => $value,
            'prop' => $this->name,
        ]);
    }

    public function updatedName(string $value) : void
    {
        Log::info('after specific prop name');
        Log::info(__METHOD__ . ' called', [
            'new_value' => $value,
            'prop' => $this->name,
        ]);
    }

    public function render()
    {
        Log::info(__METHOD__ . ' called');
        return view('livewire.lifecycle');
    }


    public function rendering() : void
    {
        // This method is called before the component is rendered.
        Log::info(__METHOD__ . ' called');
    }

    public function rendered() : void
    {
        // This method is called after the component has been rendered.
        Log::info(__METHOD__ . ' called');
    }
}
