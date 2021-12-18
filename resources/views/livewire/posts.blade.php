<div>

    {{-- FILTRADO POR CATEGORÍAS --}}

    <div class="bg-metalic-200 py-4" style="box-shadow: 0px -10px 33px rgba(0, 0, 0, 0.5)">
        <div class="container_2 flex space-x-4">
            <button wire:click="resetFilters"
                class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 text-sm focus:outline-none"><i
                    class="fas fa-layer-group mr-2"></i>
                Todos los post</button>

            {{-- DROPDOW CATEGORÍA --}}
            <div class="relative" x-data="{ open:false }">
                <button x-on:click="open = !open"
                    class="block overflow-hidden focus:outline-none bg-white shadow h-12 px-4 rounded-lg text-gray-700 text-sm">
                    <i class="fas fa-glasses mr-2"></i> Categoría <i class="fas fa-angle-down ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div x-on:click.away="open = false"
                    class="absolute z-50 right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open">
                    @foreach ($categories as $category)
                        <a wire:click="$set('category_id', {{ $category->id }})" x-on:click="open = false"
                            class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-yellow-500 hover:text-white">{{ $category->name }}</a>
                    @endforeach

                </div>

                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

        </div>
    </div>

    {{-- POST --}}
    <div class="container py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center z-0 @if ($loop->first) col-span-1 md:col-span-2 @endif"
                    style="background-image: url(@if ($post->image) {{ Storage::url($post->image->url) }} @else {{ asset('./img/default.jpg') }} @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center relative">
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
                                <span
                                    class="inline-block px-3 h-6 bg-{{ $tag->color }}-custom text-white rounded-full">{{ $tag->name }}</span>
                            @endforeach
                        </div>
                        {{-- etiquetas --}}


                        <h2 class="text-white leading-8 font-bold">
                            <a href="{{ route('blog.show', $post) }}">{{ $post->name }}</a>
                        </h2>

                        <div class="absolute bottom-2 left-4 px-2 py-2 bg-metalic-900 rounded-xl">
                            <div class="flex items-center">
                                <img class="rounded-full h-8 w-8 object-cover shadow-xl border-2 border-yellow-500"
                                    src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->name }}">
                                <p class="font-semibold text-white text-sm ml-2">{{ $post->user->name }}</p>
                            </div>
                        </div>

                        <div class="absolute top-2 right-4 ">
                            <span class="text-metalic-100">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="py-4 px-4 md:px-0">
            {{ $posts->links() }}
        </div>
    </div>
</div>
