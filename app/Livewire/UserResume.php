<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;

class UserResume extends Component
{

    #[Rule(['required', 'max:255', 'min:5'])]
    public ?string $resume;

    public function mount()
    {
        $this->resume = auth()->user()->resume;
    }

    public function render()
    {
        return view('livewire.user-resume');
    }

    public function updated($attr, $value)
    {
        ds()->queriesOn();
        
        auth()->user()->update([
            $attr => $value,
        ]);
    }
}
