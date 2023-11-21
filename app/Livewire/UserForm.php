<?php

namespace App\Livewire;

use Livewire\Component;
//use Livewire\Attributes\Rule;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserForm extends Component
{
    //Esta amarrado para a propriedade logo abaixo

    // #[Rule(['required', 'string', 'max:255', 'min:2'])]
    public string $name;

    // #[Rule(['required', 'email', 'max:255', 'min:2'])]
    public string $email;

    // #[Rule(['required', 'string', 'max:255', 'min:2', 'confirmed'])]
    public string $password;
    
    public string $password_confirmation;
    
    //Rule::unique('')->ignore(1) não consegue usar dentro do atributo

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', 'min:2'],
            'email' => ['required', 'email', 'max:255', 'min:2'],
            'password' => ['required', 'string', 'max:255', 'min:2', 'confirmed', Rule::unique('')->ignore(1)],
        ];
    }


    public function render()
    {
        return view('livewire.user-form');
    }

    public function submit()
    {

        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }
}
