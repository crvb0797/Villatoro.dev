<div>
    <button class="btn btn-yellow" wire:click="$set('open', true)">
        <i class="fas fa-plus-square mr-2"></i> Nueva categoría
    </button>

    <!-- Modal -->
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear nueva categoría
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-input wire:model.defer="name" class="w-full {{ $errors->has('name') ? 'border-red-600' : '' }}"
                    type="text" placeholder="Título del post" />
                @error('name')
                    <span class="text-red-500 text-sm font-bold">{{ $message }}</span>
                @enderror
            </div>

            <div wire:loading.flex wire:target="save" class="flex flex-col mt-4 justify-center items-center">
                <img class="" src="{{ asset('img/loading.gif') }}"
                    alt="Cargando el contenido a la base de datos">
                <strong class="mt-4">Cargando...</strong>
            </div>
        </x-slot>


        <x-slot name="footer">
            <button wire:loading.attr="disabled" wire:target="save" wire:click="save"
                class="btn btn-yellow disabled:opacity-25">
                <i class="fas fa-plus-circle mr-2"></i> Crear categoría
            </button>

            <button class="btn btn-red" wire:click="$set('open', false)">
                <i class="fas fa-window-close mr-2"></i> Cancelar
            </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
