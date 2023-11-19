<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserDetail extends Component
{

    //fazendo a atribuição dessa forma da propriedade já fará o locked automaticamente do ID.
    public User $user;

    public function rules()
    {
        return [
            'user.id'   => ['required'],
            'user.name' => ['required'],
        ];
    }

    public function mount()
    {
        $this->user = auth()->user();
    }
    public function render()
    {
        return view('livewire.user-detail');
    }

    //caso não queira passar a classe por inteiro no front pode mudar la no AppServiceProvider
    //forma de proteger o dado que está trafegando no entre o back e front
    
    public function refresh()
    {

    }
}
