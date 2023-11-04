<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Locked;

class Counter extends Component
{

    //Em todo nova aplicação do livewire 3 remover o import import Alpine from 'alpinejs';

    // window.Alpine = Alpine;

    // Alpine.start();
    // dentro do arquivo app.js

    // Se é uma propriedade pública tem possibilidade de manipular dos dois lados - pode ser acessar na viw :counter="10"

    //Na view sempre importante colocar : para identificar como um código php, caso não coloque o : irá interpretar como uma string

    //mount inicializa os valores das propriedades 
    //1-propriedade declarada, 2-o que está na view, 3-o que está no mount

    //A propriedade pode ser maninipulada via livewire ou via alpine => @click="$wire.set('name', 'Joazinho') este seta no backend tb

    //FInalidade de travar e garantir a integridade dos dados do id em específico.
    #[Locked]

    public int $counter = 5;

    public string $name = 'Fera';

    public string $lastName = '';

    public function mount()
    {
        $this->counter = 100;

        
        $this->fill([
            'name' => 'Rafael',
            'lastName' => 'Castro'
        ]);
        
        //Isso tb pode ser feito para db mesma finalidade - preencher as propriedades que existem naquele objeto

        /*$user = new User();

        $user->fill([
            'name' => 'Rafael',
            'lastName' => 'Castro'
        ]); */

    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function count()
    {
        $this->counter ++;
    }

    // wire:model.live atualiza em tempo real
    //wire:model.blur atualiza quando clica fora
    //
    public function refresh()
    {
        $this->reset('name', 'lastName');
    }
}
