<div>
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post...']) !!}

    @error('name')
        <span class="text-red-500 text-sm font-bold">{{ $message }}</span>
    @enderror
</div>

<div class="mt-4">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control bg-gray-200', 'placeholder' => 'Se generara automaticamente...', 'readonly']) !!}

    @error('slug')
        <span class="text-red-500 text-sm font-bold">{{ $message }}</span>
    @enderror
</div>

<div class="mt-4">
    {!! Form::label('category_id', 'Categorías') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <span class="text-red-500 text-sm font-bold">{{ $message }}</span>
    @enderror
</div>

<div class="mt-4">
    <p class="font-bold text-gray-700 text-sm mb-2">Etiquetas</p>
    @foreach ($tags as $tag)
        <label>
            {!! Form::checkbox('tags[]', $tag->id, null, ['class' => 'outline-none my-2']) !!}
            <span class="font-normal">{{ $tag->name }}</span>
        </label>
    @endforeach

    @error('tags')
        <span class="text-red-500 text-sm font-bold">{{ $message }}</span>
    @enderror
</div>

<div class="mt-4">
    {!! Form::label('body', 'Cuerpo del post', ['class' => 'mb-2']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'editor']) !!}

    @error('body')
        <span class="text-red-500 text-sm font-bold">{{ $message }}</span>
    @enderror
</div>

<div class="grid grid-cols-2 mt-4 gap-6 ">
    <div class="image-wrapper relative">
        @isset($post->image)
            <img id="picture" class="absolute object-cover w-full h-full" src="{{ Storage::url($post->image->url) }}"
                alt="Imagen default">
        @else
            <img id="picture" class="absolute object-cover w-full h-full" src="{{ asset('./img/default.jpg') }}"
                alt="Imagen default">
        @endisset
    </div>

    {{-- <div class="mt-4">
                    {!! Form::label('file', 'Imagen de post') !!}
                    {!! Form::file('file', ['class' => 'form-control']) !!}
                </div> --}}

    <div
        class="flex flex-col px-4 w-full h-full items-center justify-center bg-grey-lighter border-dashed border-4 border-yellow-500">
        <label name="file" id="file"
            class="file w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-yellow-500 hover:text-white">
            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
            </svg>
            <span class="mt-2 text-base leading-normal">Elegir imagen</span>
            {!! Form::file('file', ['class' => 'hidden', 'accept' => 'image/*']) !!}
        </label>
        <p class="text-gray-700 mt-4 px-12 text-center">La imagen debe tener las dimesiones de <span
                class="font-bold">640px de ancho y 480 de alto</span>, además de que no deben pesar mas de
            <b>1MB</b> para evitar la carga lenta en la web.
        </p>
        @error('file')
            <span class="text-red-500 text-sm font-bold mt-8">{{ $message }}</span>
        @enderror
    </div>


</div>


<div class="mt-4">
    <p class="font-bold text-gray-700 text-sm mb-2">Estado del post</p>
    <div class="flex space-x-4">
        <label>
            {!! Form::radio('status', 1, true) !!}
            Borrador
        </label>

        <label>
            {!! Form::radio('status', 2, false) !!}
            Publicado
        </label>

    </div>
    @error('status')
        <span class="text-red-500 text-sm font-bold">{{ $message }}</span>
    @enderror
</div>
