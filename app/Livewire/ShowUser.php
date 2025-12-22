<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowUser extends Component
{

    public User $user;
    public bool $show = false;

    #[On('show-user.{user.id}')]
    public function showUser() :void
    {
        $this->show = !$this->show;
    }
    public function render()
    {
        return view('livewire.show-user');
    }
}
