<form wire:submit="submit" class="flex flex-col gap-4">

<div>

    <x-text-input placeholder="User Name" wire:model.live="form.name" />

    @error('form.name')

    <div class="text-sm italic font-semibold text-red-400"> {{ $message }} </div>

    @enderror
</div>

<div>
    <x-text-input placeholder="Email" wire:model.blur="form.email" />

    @error('form.email')

    <div class="text-sm italic font-semibold text-red-400"> {{ $message }} </div>

    @enderror

</div>

<div>
    <x-text-input placeholder="Password" wire:model.blur="form.password" type="password" />

    @error('form.password')

    <div class="text-sm italic font-semibold text-red-400"> {{ $message }} </div>

    @enderror

</div>

<div>
    <x-text-input placeholder="Password Confirmation" wire:model.blur="form.password_confirmation" type="password" />

  

</div>
<div>

    <x-primary-button>
        Save User
    </x-primary-button>
</div>

</form>
