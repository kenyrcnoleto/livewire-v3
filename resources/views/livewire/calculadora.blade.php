<div>
    <form wire:submit.throttle.1000ms="calculate">
    
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

    <x-primary-button type="submit" > Calcular </x-primary-button>

    <br>

    Num1:: {{ $num1 }} 
    <br><br>
    Resultado:: {{ $result }}
    </form>
</div>
