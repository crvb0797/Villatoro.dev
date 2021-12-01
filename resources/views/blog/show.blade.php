<x-app-layout>
    <div class="container py-8">
        <h1 class="px-2 lg:px-0 font-bold text-gray-300">{{ $post->name }}</h1>

        <p class="px-2 lg:px-0 text-base md:text-lg text-gray-200 py-2">
            {{ Str::limit($post->body, 200, '...') }}
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- CONTENIDO PRINCIPAL --}}
            <div class="lg:col-span-2">
                <figure class="relative">
                    <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}"
                        alt="{{ $post->name }}">

                    <div class="mb-2 absolute top-0 px-6 py-4 space-x-1">
                        @foreach ($post->tags as $tag)
                            <a class="inline-block px-3 h-6 bg-{{ $tag->color }}-custom text-white rounded-full"
                                href="#">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </figure>

                <div class="px-2 lg:px-0 text-gray-200 text-base py-6 leading-8">
                    {{ $post->body }}
                </div>
            </div>

            {{-- CONTENIDO RELACIONADO --}}
            @if ($similares)
                <aside class="py-6 px-8 bg-white lg:rounded-xl shadow-xl">
                    <h3 class="font-bold text-gray-600 mb-6">Post Relacionados con "<span
                            class="text-yellow-500">{{ $post->category->name }}</span>"</h3>
                    <ul class="space-y-6">
                        @foreach ($similares as $similar)
                            <li>
                                <a class="flex items-center" href="{{ route('blog.show', $similar) }}">
                                    <img class="w-36 h-20 object-cover object-center"
                                        src="{{ Storage::url($similar->image->url) }}" alt="{{ $similar->name }}">

                                    <span
                                        class="ml-2 text-gray-600">{{ Str::limit($similar->name, 30, '...') }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </aside>
            @endif
        </div>

    </div>
</x-app-layout>
