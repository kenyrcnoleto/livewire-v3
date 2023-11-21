<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Stringable;

class Calculadora extends Component
{
    //Simbolo ? para aceitar vazio
    public ?string $num1 = null;

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
        sleep(2);

        Log::info('calculou:' . $this->result);
    }

    //Pode somente tipar o botão como submit ao invês de usar o wire:click
    //<x-primary-button wire:click="calculate" > Calcular </x-primary-button>

    public function naoQueroY()
    {
        $this->num1 = str($this->num1)->replace('y', 'JERERE', true);
        /*dump([
            $this->num1,
            str($this->num1)->replace('y', 'JERERE', true)
        ]); */
        sleep(2);
    }

    //prevent previne que a ação aconteça - no v3 submit ja tem prevent por padrão

    public function add10($prop)
    {
        $this->$prop += 10;
    }

    
}
