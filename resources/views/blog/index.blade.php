<x-app-layout>
    {{-- HERO --}}
    <section class="snowflakeContainer snow bg-cover bg-center relative" {{-- style="background-image:url({{ asset('./img/banner_blog.jpg') }})" --}}>
        {{-- <div class="bg-black absolute inset-0 w-full h-full opacity-75"></div> --}}
        <div class="container_2 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold">
                    Los mejores posts de programación ¡GRATIS! y en español.
                </h1>
                <p class="text-white text-lg mt-2">
                    Si estás buscando potenciar tus conocimientos de programación, has llegado al lugar adecuado.
                    Encuentra
                    blog y proyectos que te ayudarán en ese proceso.
                </p>

                {{-- SEARCH --}}
                @livewire('search')
            </div>
        </div>
    </section>
    {{-- /HERO --}}

    @livewire('posts')
</x-app-layout>
