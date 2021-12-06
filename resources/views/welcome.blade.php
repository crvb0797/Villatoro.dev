<x-app-layout class="overflow-hidden">
    {{-- HEADER --}}
    <section id="hero" class="header md:h-screen grid grid-cols-1 md:grid-cols-3 mb-10 md:mb-0">
        {{-- presentación --}}
        <div class="md:col-span-2">
            <div data-aos="fade-right"
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
            <img data-aos="fade-left" class="foto absolute" src="{{ asset('./img/foto_secondary.jpg') }}"
                alt="Foto de Carlos Villatoro">
            {{-- /foto --}}
        </div>
    </section>
    {{-- /HEADER --}}

    {{-- SOBRE MÍ --}}
    <section id="about" id="about"
        class="grid grid-cols-1 md:grid-cols-2 bg-metalic-200 py-12 shadow-md overflow-hidden">
        {{-- foto --}}
        <div class="relative flex justify-center items-center mb-4 md:mb-0" data-aos="fade-right">
            <img class="absolute z-0 hidden md:block" src="{{ asset('./img/lines.svg') }}" alt="lineas de decoración">
            <img class="z-50" src="{{ asset('./img/sobre_mi_foto.png') }}"
                alt="Foto sobre mí de Carlos Villatoro">
        </div>
        {{-- foto --}}

        {{-- sobre mí --}}
        <div class="flex flex-col justify-center px-6 md:px-10" data-aos="fade-left">
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
    <section id="services" id="services" class="container mx-auto py-12">
        <h1 class="text-metalic-100 font-extrabold mb-12 px-4">Servicios</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-9 px-4">
            {{-- DISEÑO WEB --}}
            <div class="card-service" style="background-image: url({{ asset('./img/diseño.png') }})"
                data-aos="flip-up">
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
            <div class="card-service" style="background-image: url({{ asset('./img/code.png') }})"
                data-aos="flip-up">
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
            <div class="card-service" style="background-image: url({{ asset('./img/soporte.png') }})"
                data-aos="flip-up">
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
    <section id="project" id="project" class="bg-metalic-200 py-12 shadow-md text-metalic-100">
        <div class="container mx-auto space-y-2 flex flex-col items-center">
            <h1 class="font-bold px-4 text-center">Últimos proyectos</h1>
            <div class="container_title">
                <p class="px-4 text-center">Aquí podras ver los ultimos proyectos en los que he trabajado para
                    diferentes
                    clientes y proyectos de
                    código abierto.</p>
            </div>
            {{-- proyectos y descripciones --}}
            <div class="container_projects w-full container_2">
                {{-- Camas a domicilio --}}
                <div data-aos="zoom-in-up"
                    class="container_project w-full flex flex-col md:flex-row md:justify-between items-center justify-center border-b-2 border-metalic-100">

                    {{-- imagen proyecto --}}
                    <div class="pt-10 -ml-10">
                        <img class="" src="{{ asset('./img/camasadomicilio_sombra.svg') }}"
                            alt="Foto de camas a domicilio">
                    </div>

                    {{-- descripción del proyecto --}}
                    <div class="container_description px-4 flex flex-col items-start">
                        {{-- Titulo --}}
                        <div class="flex flex-col text-center md:flex-row items-center mb-4"> {{-- title_project flex flex-col md:flex-row items-center md:space-y-0 mb-4 --}}
                            <h1 class="font-bold mb-4 mr-0 md:mb-0 md:mr-4">Camas a domicilio</h1>
                            <span class="px-4 py-1 bg-skyblue text-white rounded-lg">2021</span>
                        </div>
                        {{-- descripción y botón --}}
                        <div class="left_container">
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Autem
                                illo soluta eos natus
                                quibusdam a doloribus molestiae atque minus, ipsa ad, dolor nulla dolorem ipsum.
                                Voluptatem aspernatur porro veritatis sed.</p>
                            <a href="https://camasadomicilio.villatoro.dev"
                                class="py-2 px-4 bg-yellow-500 text-white hover:bg-yellow-600 mt-4 rounded-lg text-center block mb-12 md:mb-0 md:inline-block">Visitar
                                sitio web</a>
                        </div>
                    </div>

                </div>

                {{-- Universal pc --}}
                <div data-aos="zoom-in-up"
                    class="container_project w-full flex flex-col md:flex-row justify-between items-center border-b-2 border-metalic-100">
                    {{-- descripción del proyecto --}}
                    <div class="container_description px-4 order-1 flex flex-col items-end">
                        {{-- Titulo --}}
                        <div class="flex flex-col text-center md:flex-row items-center md:justify-end mb-4 w-full">
                            <h1 class="font-bold mb-4 ml-0 md:mb-0 md:ml-4 md:order-1">Universal PC</h1>
                            <span class="px-4 py-1 bg-skyblue text-white rounded-lg">2021</span>
                        </div>
                        {{-- descripción y botón --}}
                        <div class="right_container"">
                            <p class="                      mb-4 md:text-right">Lorem ipsum dolor sit amet consectetur,
                            adipisicing
                            elit.
                            Autemillo soluta eos natus quibusdam a doloribus molestiae atque minus, ipsa ad, dolor nulla
                            dolorem ipsum.
                            Voluptatem aspernatur porro veritatis sed.</p>
                            <div class="flex justify-end items-center w-full">
                                <a href="https://universalpc.villatoro.dev"
                                    class="py-2 px-4 bg-yellow-500 text-white hover:bg-yellow-600 mt-4 rounded-lg text-center block mb-12 md:mb-0 md:inline-block w-full md:w-auto"
                                    target="_blank">Visitar
                                    sitio web</a>
                            </div>
                        </div>
                    </div>
                    {{-- imagen proyecto --}}
                    <div class="pt-10 md:order-1 mb-10 md:mb-0">
                        <img src="{{ asset('./img/universalpc.svg') }}" alt="Foto de camas a domicilio">
                    </div>

                </div>


                {{-- CDC --}}
                <div data-aos="zoom-in-up"
                    class="container_project w-full flex flex-col md:flex-row justify-between items-center">
                    {{-- imagen proyecto --}}
                    <div class="pt-10 -ml-6">
                        <img src="{{ asset('./img/CDC_sombra.svg') }}" alt="Foto de CDC">
                    </div>

                    {{-- descripción del proyecto --}}
                    <div class="container_description px-4 flex flex-col items-start">
                        {{-- Titulo --}}
                        <div class="flex flex-col text-center md:flex-row items-center mb-4 w-full">
                            <h1 class="font-bold mb-4 mr-0 md:mb-0 md:mr-4">CDC</h1>
                            <span class="px-4 py-1 bg-skyblue text-white rounded-lg">2021</span>
                        </div>
                        {{-- descripción y botón --}}
                        <div class="left_container">
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem
                                illo soluta eos natus
                                quibusdam a doloribus molestiae atque minus, ipsa ad, dolor nulla dolorem ipsum.
                                Voluptatem aspernatur porro veritatis sed.</p>
                            <a href="https://cdctech.com.gt" target="_blank"
                                class="py-2 px-4 bg-yellow-500 text-white hover:bg-yellow-600 mt-4 rounded-lg text-center block mb-12 md:mb-0 md:inline-block">Visitar
                                sitio web</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- /proyectos y descripciones --}}
        </div>
    </section>
    {{-- /PROYECTOS --}}

    {{-- CONTÁCTAME --}}
    <h1 id="contact" class="font-bold text-me text-center my-6 text-metalic-100">Contáctame</h1>
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
</x-app-layout>
