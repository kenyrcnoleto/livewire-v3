<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Calculadora extends Component
{
    public float $num1 = 0;

    public float $num2 = 0;

    public string $operator = '+';

    public ?float $result = null;

    public function render()
    {
        return view('livewire.calculadora');
    }

    //Os eventos podem ser diversos e pode amarrar meu método com qualquer um dos eventos

    public function calculate()
    {
        $tmp = "{$this->num1}{$this->operator}{$this->num2};";

       /* dump(
            $tmp,
            eval('return '. $tmp)
        ); */

        //função eval para calcualar 

        $this->result = eval('return '. $tmp);

        Log::info('calculou:' . $this->result);
    }

    //Pode somente tipar o botão como submit ao invês de usar o wire:click
    //<x-primary-button wire:click="calculate" > Calcular </x-primary-button>
}
