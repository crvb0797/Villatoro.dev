<x-app-layout>
    {{-- HEADER --}}
    <section class="header md:h-screen grid grid-cols-1 md:grid-cols-3 mb-10 md:mb-0">
        {{-- presentación --}}
        <div class="md:col-span-2">
            <div
                class="w-auto container mx-auto h-full flex flex-col mt-10 md:mt-0 md:justify-center items-center md:px-40 md:items-start space-y-3">
                <h3 class="text-white">👋 Hola,</h3>
                <h1 class="text-yellow-500 font-extrabold">Soy Carlos Villatoro</h1>
                <h3 class="text-white leading-relaxed">Desarrollador Web Freelancer <br /> y
                    profesor de
                    programación
                </h3>
                {{-- Social --}}
                <div class="w-60 pt-12 flex items-center justify-between">
                    <a href="https://github.com/crvb0797" target="_blank"><img src="{{ asset('./img/github.svg') }}"
                            alt="Perfil de Github de Carlos Villatoro"></a>

                    <a href="https://www.instagram.com/villatorodev/" target="_blank"><img
                            src="{{ asset('./img/instagram.svg') }}" alt="Perfil de Github de Carlos Villatoro"></a>

                    <a href="https://twitter.com/CRVB_0797" target="_blank"><img
                            src="{{ asset('./img/twitter.svg') }}" alt="Perfil de Github de Carlos Villatoro"></a>
                </div>
                {{-- /Social --}}
            </div>
        </div>
        {{-- /presentación --}}

        <div class="bg-yellow-500 hidden md:block md:col-span-1 relative">
            {{-- foto --}}
            <img class="foto absolute" src="{{ asset('./img/foto_secondary.jpg') }}" alt="Foto de Carlos Villatoro">
            {{-- /foto --}}
        </div>
    </section>
    {{-- /HEADER --}}

    {{-- SOBRE MÍ --}}
    <section class="grid grid-cols-1 md:grid-cols-2 bg-metalic-200 p-12 shadow-md">
        {{-- foto --}}
        <div class="relative flex justify-center items-center mb-4 md:mb-0">
            <img class="absolute z-0 hidden md:block" src="{{ asset('./img/lines.svg') }}" alt="lineas de decoración">
            <img class="z-50" src="{{ asset('./img/sobre_mi_foto.png') }}"
                alt="Foto sobre mí de Carlos Villatoro">
        </div>
        {{-- foto --}}

        {{-- sobre mí --}}
        <div class="flex flex-col justify-center md:px-10">
            <h1 class="text-metalic-100 font-extrabold">Sobre mí</h1>
            <p class="block mt-4 text-metalic-100 leading-loose">
                👽 La codificación ha cambiado mi mundo. Aprender a codificar me dio habilidades
                para resolver problemas y una forma de comunicarme con otros en un nivel técnico. Me apasiona
                desarrollar sitios web y usar mis habilidades de codificación para apoyar a las PYME’s a lograr sus
                objetivos. Todo lo he aprendido con mucho esfuerzo y dedicación.
            </p>
            <div class="flex justify-between mt-4" style="width: 18rem">
                <a href="" class="btn btn-fill hover:bg-yellow-600 ransition duration-100">Contáctame</a>
                <a href=""
                    class="btn btn-border hover:bg-yellow-500 hover:border-yellow-600 transition duration-100">Descargar
                    CV</a>
            </div>
        </div>
        {{-- /sobre mí --}}
    </section>
    {{-- /SOBRE MÍ --}}
</x-app-layout>
