<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\UserForm;
use App\Models\User;

class EditUser extends Component
{
    public User $user;

    //public ?string $name = null;

    public UserForm $form;

    public function mount()
    {
        //$this->name = $this->user->name;

        $this->form->setUser($this->user);
        
    }
    public function render()
    {
        return view('livewire.edit-user');
    }

    public function submit()
    {
        $this->form->save();
    }
}
