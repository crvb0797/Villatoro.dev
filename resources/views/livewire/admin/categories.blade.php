<div class="card">
    <div class="card-header d-flex justify-content-between align-items-cente">
        <input wire:model="search" type="search" class="form-control mr-4" placeholder="Buscar categoría..." />
        <a class="btn btn-warning text-white text-center" href="{{ route('admin.categories.create') }}"><i
                class="fas fa-plus-square"></i></a>
    </div>

    <div class="card-body">
        @if ($categories->count())
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="cursor: pointer;" wire:click="order('id')">id
                            @if ($sort == 'id')
                                @if ($direction == 'asc')
                                    <span><i class="fas fa-sort-up mt-1"></i></span>
                                @else
                                    <span><i class="fas fa-sort-down mt-1"></i></span>
                                @endif
                            @else
                                <span><i class="fas fa-sort mt-1"></i></span>
                            @endif
                        </th>
                        <th style="cursor: pointer;" wire:click="order('name')">Nombre
                            @if ($sort == 'name')
                                @if ($direction == 'asc')
                                    <span><i class="fas fa-sort-up mt-1"></i></span>
                                @else
                                    <span><i class="fas fa-sort-down mt-1"></i></span>
                                @endif
                            @else
                                <span><i class="fas fa-sort mt-1"></i></span>
                            @endif
                        </th>
                        <th scope="col-span-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="150px">
                                <a href="{{ route('admin.categories.edit', $category) }}"
                                    class="btn btn-info btn-small"><i class="fas fa-pen mr-2"></i> Editar</a>
                            </td>
                            <td width="150px">
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" href="#" class="btn btn-danger btn-small"><i
                                            class="fas fa-trash mr-2"></i>
                                        Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img class="image-responsive" style="width: 20rem; margin-top: -5rem;"
                    src="{{ asset('img/ghost.gif') }}" alt="No se encontraron registros">
                <strong class="block text-danger" style="margin-top: -5rem;">No se encontro ningun registro...</strong>
            </div>
        @endif
    </div>
</div>
