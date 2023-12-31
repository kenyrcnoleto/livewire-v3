<div>
    <form wire:submit="calculate">
    
    <x-text-input
        placeholder="primeiro numero" 
        wire:model="num1"
        wire:keydown.y="naoQueroY"
    />

    <select wire:model="operator" class="text-slate-700">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <x-text-input placeholder="segundo numero" wire:model="num2" />

    <x-primary-button type="submit" > 
        <span wire:loading.class="hidden" wire:target="calculate">Calcular</span>    

        <span wire:loading wire:target="calculate">Calculando...</span>

    </x-primary-button>
    
    <x-primary-button type="button" wire:click="add10('num1')">
        add 10 num 1
    </x-primary-button>

    <x-primary-button type="button" wire:click="add10('num2')">
        add 10 num 2
    </x-primary-button>

    <x-primary-button type="button" @click="$wire.calculate()">
        Calculando pelo APline
    </x-primary-button>

    <x-primary-button type="button" wire:click="toLogando()">
        Só toLogando
        <span wire:loading wire:target="toLogando">...</span>
    </x-primary-button>

    <br>
    <span wire:loading  wire:target="calculate" class="text-blue-500 font-bold italic">Calculando...aguenta aí!</span>
    <br>

   

    Num1:: {{ $num1 }} 
    <br><br>
    Resultado:: {{ $result }}
    </form>
</div>
