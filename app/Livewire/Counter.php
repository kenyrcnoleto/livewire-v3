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

   

    public function mount()
    {
        $this->counter = 100;


    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function count()
    {
        $this->counter ++;
    }
}
