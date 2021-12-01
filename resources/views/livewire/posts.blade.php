<div>

    {{-- FILTRADO POR CATEGORÍAS --}}


    <div class="container py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if ($loop->first) col-span-1 md:col-span-2 @endif"
                    style="background-image: url({{ Storage::url($post->image->url) }})">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        {{-- <ul class="hidden">
                            <li class="bg-red-custom"></li>
                            <li class="bg-blue-custom"></li>
                            <li class="bg-yellow-custom"></li>
                            <li class="bg-cake-custom"></li>
                            <li class="bg-skyblue-custom"></li>
                            <li class="bg-purple-custom"></li>
                            <li class="bg-beige-custom"></li>
                        </ul> --}}
                        {{-- etiquetas --}}
                        <div class="mb-2">
                            @foreach ($post->tags as $tag)
                                <a class="inline-block px-3 h-6 bg-{{ $tag->color }}-custom text-white rounded-full"
                                    href="#">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        {{-- etiquetas --}}


                        <h2 class="text-white leading-8 font-bold">
                            <a href="{{ route('blog.show', $post) }}">{{ $post->name }}</a>
                        </h2>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="py-4 px-4 md:px-0">
            {{ $posts->links() }}
        </div>
    </div>
</div>
