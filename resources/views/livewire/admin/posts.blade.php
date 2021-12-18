<div>
    <div wire:init="loadPost">
        <h1 class="text-white mb-6 font-bold">Listado de posts</h1>
        <div class="mb-8">
            <x-table>
                <div class="px-6 py-4 flex items-center">
                    {{-- BUSCADOR --}}
                    <x-jet-input class="flex-1 mx-4" placeholder="Ingrese el post a buscar..." type="text"
                        wire:model="search" />
                    {{-- CREAR POST --}}
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-yellow">
                        <i class="fas fa-plus-square mr-2"></i> Nuevo Post
                    </a>

                </div>
                @if (count($posts))
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
                                    Nombre del post
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
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Estado del post
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Categoría del post
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $post->id }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 text-sm inline-flex leading-5 font-semibold">
                                            {{ $post->name }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 text-sm mx-auto leading-5 font-semibold w-full inline-flex">
                                            @if ($post->status == 2)
                                                <span class="text-green-500"><i class="fas fa-check-circle mr-2"></i>
                                                    Publicado</span>
                                            @else
                                                <span class="text-red-600"><i class="fas fa-times-circle mr-2"></i>
                                                    Borrador</span>
                                            @endif
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <p class="text-gray-700 text-sm">{{ $post->category->name }}</p>
                                    </td>
                                    <td
                                        class="flex justify-end items-center space-x-4 px-6 py-4 mt-1 text-sm font-medium">
                                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-blue">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <a type="submit" class="btn btn-red"
                                            wire:click="$emit('deletePost', {{ $post->id }})">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4 py-4 px-4 bg-white rounded-lg">
                        {{ $posts->links() }}
                    </div>
                @else
                    <div class="flex flex-col justify-center items-center w-full bg-white rounded-lg">
                        <img class="w-72" src="{{ asset('img/ghost.gif') }}"
                            alt="No se encontraron registros">
                        <strong class="block -mt-16 mb-16">No se encontro ningun registro...</strong>
                    </div>
                @endif
            </x-table>
        </div>
    </div>

    @push('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Livewire.on('deletePost', postId => {
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
                        Livewire.emit('delete', postId);
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            });
        </script>
    @endpush

</div>
