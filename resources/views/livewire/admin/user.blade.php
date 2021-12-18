<div>
    <div wire:init="loadUser">
        <h1 class="text-white mb-6 font-bold">Listado de usuarios</h1>
        <div class="mb-8">
            <x-table>
                <div class="px-6 py-4 flex items-center">
                    {{-- BUSCADOR --}}
                    <x-jet-input class="flex-1 mx-4" placeholder="Ingrese usuario a buscar..." type="text"
                        wire:model="search" />
                </div>
                @if (count($users))
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
                                    Nombre del usuario
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
                                    wire:click="order('email')">
                                    Correo Eléctronico del usuairo
                                    @if ($sort == 'email')
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
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $user->id }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 text-sm inline-flex leading-5 font-semibold">
                                            {{ $user->name }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 text-sm inline-flex leading-5 font-semibold">
                                            {{ $user->email }}
                                        </span>
                                    </td>

                                    <td
                                        class="flex justify-end items-center space-x-4 px-6 py-4 mt-1 text-sm font-medium">
                                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-blue">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="flex flex-col justify-center items-center w-full bg-white rounded-lg">
                        <img class="w-72" src="{{ asset('img/ghost.gif') }}"
                            alt="No se encontraron registros">
                        <strong class="block -mt-16 mb-16">No se encontro ningun usuario...</strong>
                    </div>
                @endif
            </x-table>
        </div>
    </div>
</div>
