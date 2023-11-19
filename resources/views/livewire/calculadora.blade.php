<div>
    <form wire:submit="calculate">
    
    <x-text-input placeholder="primeiro numero" wire:model="num1" />

    <select wire:model="operator" class="text-slate-700">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <x-text-input placeholder="segundo numero" wire:model="num2" />

    <x-primary-button type="submit" > Calcular </x-primary-button>

    <br>

    Resultado:: {{ $result }}
    </form>
</div>
