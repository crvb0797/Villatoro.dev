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
    <section id="about" class="grid grid-cols-1 md:grid-cols-2 bg-metalic-200 py-12 shadow-md">
        {{-- foto --}}
        <div class="relative flex justify-center items-center mb-4 md:mb-0">
            <img class="absolute z-0 hidden md:block" src="{{ asset('./img/lines.svg') }}" alt="lineas de decoración">
            <img class="z-50" src="{{ asset('./img/sobre_mi_foto.png') }}"
                alt="Foto sobre mí de Carlos Villatoro">
        </div>
        {{-- foto --}}

        {{-- sobre mí --}}
        <div class="flex flex-col justify-center px-6 md:px-10">
            <h1 class="text-metalic-100 font-extrabold">Sobre mí</h1>
            <p class="block mt-4 text-metalic-100 leading-loose">
                👽 La codificación ha cambiado mi mundo. Aprender a codificar me dio habilidades
                para resolver problemas y una forma de comunicarme con otros en un nivel técnico. Me apasiona
                desarrollar sitios web y usar mis habilidades de codificación para apoyar a las PYME’s a lograr sus
                objetivos. Todo lo he aprendido con mucho esfuerzo y dedicación.
            </p>
            <div class="flex justify-between mt-4" style="width: 18rem">
                <a href="#contact" class="btn btn-fill hover:bg-yellow-600 ransition duration-100">Contáctame</a>
                {{-- <a href=""
                    class="btn btn-border hover:bg-yellow-500 hover:border-yellow-600 transition duration-100">Descargar
                    CV</a> --}}
            </div>
        </div>
        {{-- /sobre mí --}}
    </section>
    {{-- /SOBRE MÍ --}}

    {{-- SERVICIOS --}}
    <section id="service" class="container mx-auto py-12">
        <h1 class="text-metalic-100 font-extrabold mb-12 px-4">Servicios</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-9 px-4">
            {{-- DISEÑO WEB --}}
            <div class="card-service" style="background-image: url({{ asset('./img/diseño.png') }})">
                <div class="absolute inset-0 w-full h-full opacity-70 bg-skyblue rounded-lg z-0"></div>
                <div class="z-50 space-y-6">
                    <i class="fas fa-swatchbook text-6xl md:text-8xl"></i>
                    <h2 class="font-bold">Diseño web</h2>
                    <p>Realizamos un diseño profesional, de alto impacto, atractivo y adaptado a las necesidades del
                        cliente, tomamos en cuenta la navegabilidad, interactividad,
                        usabilidad, arquitectura de la información y la interacción de medios como texto,
                        imagen, enlaces y video.</p>
                </div>
            </div>
            {{-- /DISEÑO WEB --}}

            {{-- DESARROLLO WEB --}}
            <div class="card-service" style="background-image: url({{ asset('./img/code.png') }})">
                <div class="absolute inset-0 w-full h-full opacity-70 bg-purple rounded-lg z-0"></div>
                <div class="z-50 space-y-6">
                    <i class="fas fa-laptop-code text-6xl md:text-8xl"></i>
                    <h2 class="font-bold text-white">Desarrollo web</h2>
                    <p class="text-white">Enfocado en hacer crecer tu marca, tu negocio y la venta de tus productos
                        o servicios. Todo lo anterior lo logramos haciendo páginas web que sean funcionales, rápidos y
                        accesibles desde cualquier tecnología y navegador.
                    </p>
                </div>
            </div>
            {{-- /DESARROLLO WEB --}}

            {{-- SOPORTE TECNICO --}}
            <div class="card-service" style="background-image: url({{ asset('./img/soporte.png') }})">
                <div class="absolute inset-0 w-full h-full opacity-70 bg-pink rounded-lg z-0"></div>
                <div class="z-50 space-y-6">
                    <i class="fas fa-cogs text-6xl md:text-8xl"></i>
                    <h2 class="font-bold text-white">Soporte técnico</h2>
                    <p class="text-white">Brindamos soporte para equipos informáticos de emergencia o en
                        planes mensuales, en los cuales prevenimos que su equipo se dañe antes de tiempo por
                        factores como polvo, humedad, etc…

                    </p>
                </div>
            </div>
            {{-- /SOPORTE TECNICO --}}

        </div>
    </section>
    {{-- /SERVICIOS --}}

    {{-- PROYECTOS --}}
    <section id="prject" class="bg-metalic-200 py-12 shadow-md text-metalic-100">
        <div class="container mx-auto space-y-4">
            <h1 class="font-bold px-4">Últimos proyectos</h1>
            <p class="px-4">Aquí podras ver los ultimos proyectos en los que he trabajado para diferentes
                clientes y proyectos de
                código abierto.</p>
            <div class="grid grid-cols-1 grid-rows-1 md:grid-cols-2 md:grid-rows-2 gap-x-10 gap-y-4 px-4">
                {{-- camas a domicilio --}}
                <div class="row-span-2 rounded-xl overflow-hidden">
                    <a href="https://www.camasadomicilio.villatoro.dev" target="_blank">
                        <img class="w-full h-full bg-center" src="{{ asset('/img/camasadomicilio.png') }}"
                            alt="Foto de proyecto Camas a domicilio">
                    </a>
                </div>
                {{-- camas a domicilio --}}

                {{-- cdc --}}
                <div class="rounded-xl overflow-hidden">
                    <a href="https://www.cdctech.villatoro.dev" target="_blank">
                        <img class="w-full bg-center" src="{{ asset('/img/cdc.png') }}" alt="Foto de proyecto cdc">
                    </a>
                </div>
                {{-- cdc --}}

                {{-- universal pc --}}
                <div class="rounded-xl overflow-hidden">
                    <a href="https://www.universalpc.villatoro.dev" target="_blank">
                        <img class="w-full bg-center" src="{{ asset('/img/universalpc.png') }}"
                            alt="Foto de proyecto universal pc">
                    </a>
                </div>
                {{-- universal pc --}}
            </div>
        </div>
    </section>
    {{-- /PROYECTOS --}}

    {{-- CONTÁCTAME --}}
    <h1 class="font-bold text-me text-center my-6 text-metalic-100">Contáctame</h1>
    <section id="contact" class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 py-12 text-metalic-100">
        {{-- Información de contacto --}}
        <div>
            <div>
                <h2 class="font-bold">Información de contacto</h2>
                <ul class="my-6 space-y-6 text-xl">
                    <li><i class="fas fa-map-marker-alt mr-2"></i>Guatemala, Guatemala</li>
                    <li><i class="far fa-envelope mr-2"></i>carlos@villatoro.dev</li>
                    <li><i class="fab fa-whatsapp mr-2"></i>+502 4641 4243</li>
                </ul>
            </div>

            <div class="my-12">
                <h2 class="font-bold">Sigueme en</h2>
                <div class="w-60 pt-6 flex items-center justify-between">
                    <a href="https://github.com/crvb0797" target="_blank"><img src="{{ asset('./img/github.svg') }}"
                            alt="Perfil de Github de Carlos Villatoro"></a>

                    <a href="https://www.instagram.com/villatorodev/" target="_blank"><img
                            src="{{ asset('./img/instagram.svg') }}" alt="Perfil de Github de Carlos Villatoro"></a>

                    <a href="https://twitter.com/CRVB_0797" target="_blank"><img
                            src="{{ asset('./img/twitter.svg') }}" alt="Perfil de Github de Carlos Villatoro"></a>
                </div>
            </div>
        </div>
        {{-- /Información de contacto --}}

        {{-- Formulario de contacto --}}
        <div>
            <form action="" class="text-metalic-100 space-y-6">
                <div class="w-full space-y-2">
                    <label class="text-xl font-bold">Nombre</label>
                    <input class="w-full rounded-xl" type="text">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="w-full space-y-2">
                        <label class="text-xl font-bold">Número de teléfono</label>
                        <input class="w-full rounded-xl" type="text">
                    </div>
                    <div class="w-full space-y-2">
                        <label class="text-xl font-bold">Correo eléctronico</label>
                        <input class="w-full rounded-xl" type="text">
                    </div>
                </div>

                <div class="w-full space-y-2">
                    <label class="text-xl font-bold">Mensaje</label>
                    <textarea class="w-full rounded-xl" name="" id="" cols="30" rows="10"></textarea>
                </div>

                <a href="" class="btn btn-fill hover:bg-yellow-600 ransition duration-100 mt-6 block"><i
                        class="fas fa-paper-plane mr-2"></i> Enviar</a>
            </form>
        </div>
        {{-- /Formulario de contacto --}}
    </section>
    {{-- /CONTÁCTAME --}}

    {{-- FOOTER --}}
    <footer class="relative p-6 bg-metalic-200" style="box-shadow: 0px -10px 33px rgba(0, 0, 0, 0.5)">
        <img class="line_1 absolute" src="{{ asset('./img/lines_footer.svg') }}">
        <img class="line_2 absolute rotate-180" src="{{ asset('./img/lines_footer.svg') }}">

        <div class="space-y-4">
            <div class="flex justify-center items-center">
                <img class="w-64" src="{{ asset('./img/logo_footer.svg') }}"
                    alt="Logo de carlos villatoro footer">
            </div>

            <div class="flex justify-center md:justify-end items-center">
                <p class="text-white">&copy; 2021 by <span class="font-bold text-yellow-500">Carlos villatoro</span>
                </p>
            </div>
        </div>
    </footer>
    {{-- /FOOTER --}}
</x-app-layout>
