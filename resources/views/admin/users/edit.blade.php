<x-admin>
    @section('content')
        <h1 class="mb-8 font-bold text-white">Etitar rol a {{ $user->name }}</h1>
        <div class="card w-full">
            <div class="mb-4">
                <p class="text-xl">Nombre</p>
                <p class="form-control p-2 border-2 border-gray-200">{{ $user->name }}</p>
            </div>

            <div class="mb-4">
                <p class="text-xl">Corrreo eléctronico</p>
                <p class="form-control p-2 border-2 border-gray-200">{{ $user->email }}</p>
            </div>

            <div class="mb-4">
                <p class="text-xl mb-2">Listado de roles</p>
                {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $role)
                    <div class="mb-4">
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach

                {!! Form::submit('Asignar Roles', ['class' => 'btn btn-blue mt-4']) !!}
                {!! Form::close() !!}
            </div>



        </div>
    @endsection
</x-admin>
