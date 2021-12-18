<div wire:init="loadTag">
    <h1 class="text-white mb-6 font-bold">Listado de etiquetas</h1>
    <div class="mb-8">
        <x-table>
            <div class="px-6 py-4 flex items-center">

                {{-- BUSCADOR --}}
                <x-jet-input class="flex-1 mx-4" placeholder="Ingrese la etiqueta a buscar..." type="text"
                    wire:model="search" />

                @can('admin.categories.create')
                    {{-- CREAR POST --}}
                    @livewire('admin.create-tag')
                @endcan
            </div>
            @if (count($tags))
                <table class="w-full divide-y divide-gray-200 overflow-hidden rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="w-24 cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="order('id')">
                                ID
                                @if ($sort == 'id')
                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-up mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-down mt-1"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort mt-1"></i>
                                @endif
                            </th>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="order('name')">
                                Nombre de la etiqueta
                                @if ($sort == 'name')
                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-up mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-down mt-1"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort mt-1"></i>
                                @endif
                            </th>

                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="order('name')">
                                Color
                                @if ($sort == 'color')
                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-up mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-down mt-1"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort mt-1"></i>
                                @endif
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($tags as $tag)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $tag->id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 text-sm inline-flex leading-5 font-semibold">
                                        {{ $tag->name }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 text-sm inline-flex leading-5 font-semibold">
                                        {{ $tag->color }}
                                    </span>
                                </td>
                                <td class="flex justify-end items-center space-x-4 px-6 py-4 mt-1 text-sm font-medium">
                                    @can('admin.tags.edit')
                                        <button class="btn btn-blue" wire:click="edit({{ $tag }})">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    @endcan

                                    @can('admin.tags.delete')
                                        <button wire:click="$emit('deleteTag', {{ $tag->id }})" class="btn btn-red">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="flex flex-col justify-center items-center w-full bg-white rounded-lg">
                    <img class="w-72" src="{{ asset('img/ghost.gif') }}" alt="No se encontraron registros">
                    <strong class="block -mt-16 mb-16">No se encontro ningun registro...</strong>
                </div>
            @endif

        </x-table>
    </div>


    {{-- MODAL --}}
    <x-jet-dialog-modal wire:model="open_edit">
        <x-slot name='title'>
            <h1>Editar la etiqueta {{ $tag->name }}</h1>
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-input class="w-full {{ $errors->has('name') ? 'border-red-600' : '' }}" type=text
                    wire:model.defer="tag.name" placeholder="Nombre de la etiqueta" />
                @error('color')
                    <span class="text-red-500 text-sm font-bold">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                {{-- <x-jet-input class="w-full {{ $errors->has('name') ? 'border-red-600' : '' }}" type=text
                    wire:model.defer="category.name" placeholder="Nombre de la categoría" /> --}}
                <select class="select-control w-full" wire:model.defer="tag.color" name="color" id="color">

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

            <div wire:loading.flex wire:target="update" class="flex flex-col mt-4 justify-center items-center">
                <img class="" src="{{ asset('img/loading.gif') }}"
                    alt="Cargando el contenido a la base de datos">
                <strong class="mt-4">Cargando...</strong>
            </div>
        </x-slot>

        <x-slot name='footer'>
            <button wire:loading.attr="disabled" wire:target="update" wire:click="update"
                class="btn btn-yellow disabled:opacity-25">
                <i class="fas fa-pen mr-2"></i> Editar etiqueta
            </button>

            <button class="btn btn-red" wire:click="$set('open_edit', false)">
                <i class="fas fa-window-close mr-2"></i> Cancelar
            </button>
        </x-slot>
    </x-jet-dialog-modal>

    @push('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Livewire.on('deleteTag', TagId => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emit('delete', TagId);
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endpush
</div>
