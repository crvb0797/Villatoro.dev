<x-admin>
    @section('content')
        <h1 class="mb-8 font-bold text-white">Editar Post {{ $post->name }}</h1>
        <div class="card w-full">
            {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'autocomplete' => 'off', 'files' => 'true', 'method' => 'put']) !!}

            @include('admin.posts.partials.form')

            {!! Form::submit('Actualizar Post', ['class' => 'btn btn-yellow mt-4']) !!}
            {!! Form::close() !!}
        </div>

        {{-- SCRIPTS --}}

        {{-- image --}}
        <script>
            //Cambiar imagen
            document.getElementById('file').addEventListener('change', changeImage);

            function changeImage(event) {
                var file = event.target.files[0];

                var reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById("picture").setAttribute('src', event.target.result);
                };
                reader.readAsDataURL(file);
            }
        </script>


        {{-- Slug --}}
        <script src="{{ asset('./vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#name').stringToSlug({
                    setEvents: 'keyup keydown blur',
                    getPut: '#slug',
                    space: '-'
                });
            });
        </script>

        {{-- CKEditor --}}
        <script src="{{ asset('./vendor/ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace('editor', {
                filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: 'form'
            });
        </script>
    @endsection
</x-admin>
