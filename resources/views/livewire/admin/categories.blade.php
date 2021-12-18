<div wire:init="loadCategory">
    <h1 class="text-white mb-6 font-bold">Listado de categorías</h1>
    <div class="mb-8">
        <x-table>
            <div class="px-6 py-4 flex items-center">

                {{-- BUSCADOR --}}
                <x-jet-input class="flex-1 mx-4" placeholder="Ingrese el nombre a buscar..." type="text"
                    wire:model="search" />

                {{-- CREAR POST --}}
                @livewire('admin.create-category')
            </div>
            @if (count($categories))
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
                                Nombre de la categoría
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
                            <th scope="col" class="relative px-6 py-3">
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($categories as $category)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $category->id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 text-sm inline-flex leading-5 font-semibold">
                                        {{ $category->name }}
                                    </span>
                                </td>

                                <td class="flex justify-end items-center space-x-4 px-6 py-4 mt-1 text-sm font-medium">
                                    @can('admin.categories.edit')
                                        <button class="btn btn-blue" wire:click="edit({{ $category }})">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    @endcan

                                    @can('admin.categories.delete')
                                        <button wire:click="$emit('deleteCategory', {{ $category->id }})"
                                            class="btn btn-red">
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
            <h1>Editar la categoría {{ $category->name }}</h1>
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-input class="w-full {{ $errors->has('name') ? 'border-red-600' : '' }}" type=text
                    wire:model.defer="category.name" placeholder="Nombre de la categoría" />
                @error('name')
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
                <i class="fas fa-pen mr-2"></i> Editar categoría
            </button>

            <button class="btn btn-red" wire:click="$set('open_edit', false)">
                <i class="fas fa-window-close mr-2"></i> Cancelar
            </button>
        </x-slot>
    </x-jet-dialog-modal>

    @push('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Livewire.on('deleteCategory', categoryId => {
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
                        Livewire.emit('delete', categoryId);
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
