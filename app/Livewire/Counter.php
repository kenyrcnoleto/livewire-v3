<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    // Se é uma propriedade pública tem possibilidade de manipular dos dois lados - pode ser acessar na viw :counter="10"

    //Na view sempre importante colocar : para identificar como um código php, caso não coloque o : irá interpretar como uma string

    //mount inicializa os valores das propriedades 
    //1-propriedade declarada, 2-o que está na view, 3-o que está no mount

    public int $counter = 0;

    public string $name = '';

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

    public function refresh()
    {
        
    }
}
