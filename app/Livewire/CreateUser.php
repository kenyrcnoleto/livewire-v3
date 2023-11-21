<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
//use Illuminate\Validation\Rule;
use App\Models\User;
use App\Livewire\Forms\UserForm;

class CreateUser extends Component
{
    //Esta amarrado para a propriedade logo abaixo
    //Só o fato de estar setado wire.model.live ou .blur o  \Attributes\Rule já faz a validação em tempo real
    

   
    
    //Rule::unique('')->ignore(1) não consegue usar dentro do atributo

   /* public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', 'min:2'],
            'email' => ['required', 'email', 'max:255', 'min:2'],
            'password' => ['required', 'string', 'max:255', 'min:2', 'confirmed', Rule::unique('')->ignore(1)],
        ];
    }

    public function updated($attr, $value)
    {
        //dd($attr, $value);

        $this->validateOnly($attr);
    }
     */

     public UserForm $form;

    public function render()
    {
        return view('livewire.create-user');
    }

    public function submit()
    {

        // $this->validate();

        $this->form->save();
    }
}
