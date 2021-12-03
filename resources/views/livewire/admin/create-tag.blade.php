<div>
    <button class="btn btn-yellow" wire:click="$set('open', true)">
        <i class="fas fa-plus-square mr-2"></i> Nueva etiqueta
    </button>

    <!-- Modal -->
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear nueva etiqueta
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-input wire:model.defer="name" class="w-full {{ $errors->has('name') ? 'border-red-600' : '' }}"
                    type="text" placeholder="Nombre de la etiqueta" />
                @error('name')
                    <span class="text-red-500 text-sm font-bold">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                {{-- <x-jet-input wire:model.defer="name" class="w-full {{ $errors->has('name') ? 'border-red-600' : '' }}"
                    type="text" placeholder="Título del post" /> --}}
                <select name="color" id="color" wire:model.defer="color"
                    class="select-control w-full text-gray-400 {{ $errors->has('name') ? 'border-red-600' : '' }}">
                    <option class="text-gray-400" value="">Elija un color</option>
                    <option class="text-gray-400" value="red">Rojo</option>
                    <option class="text-gray-400" value="purple">Morado</option>
                    <option class="text-gray-400" value="skyblue">Celeste</option>
                    <option class="text-gray-400" value="yellow">Amarillo</option>
                    <option class="text-gray-400" value="cake">Pastel</option>
                    <option class="text-gray-400" value="beige">Beige</option>
                    <option class="text-gray-400" value="blue">Azul</option>
                </select>
                @error('color')
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
                <i class="fas fa-plus-circle mr-2"></i> Crear etiqueta
            </button>

            <button class="btn btn-red" wire:click="$set('open', false)">
                <i class="fas fa-window-close mr-2"></i> Cancelar
            </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
