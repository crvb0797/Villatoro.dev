<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('./img/logo_64.svg') }}" type="image/x-icon">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!-- Toaster.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- AOS --}}
    <link rel="stylesheet" href="{{ asset('./vendor/aos-master/dist/aos.css') }}">
    <script src="{{ asset('./vendor/aos-master/dist/aos.js') }}"></script>


    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="font-poppins antialiased">

    <div class="min-h-screen bg-metalic-900" style="background-image: url({{ asset('./img/bg_primary.png') }})">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <main>
            {{ $slot }}

            <button
                class="hidden fixed bottom-5 right-7 z-20 border-0 outline-none bg-yellow-500 text-white cursor-pointer py-4 px-6 rounded-full text-lg hover:bg-yellow-600"
                onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
        </main>

        {{-- FOOTER --}}
    </div>
    <footer class="snow relative p-6 bg-metalic-200" style="box-shadow: 0px -10px 33px rgba(0, 0, 0, 0.5)">
        <img class="line_1 absolute" src="{{ asset('./img/lines_footer.svg') }}">
        <img class="line_2 absolute rotate-180" src="{{ asset('./img/lines_footer.svg') }}">

        <div class="space-y-4">
            <div class="flex justify-center items-center">
                <img class="w-64" src="{{ asset('./img/logo_footer.svg') }}"
                    alt="Logo de carlos villatoro footer">
            </div>

            <div class="flex justify-center md:justify-end items-center">
                <p class="text-white">&copy; 2021 by <span class="font-bold text-yellow-500">Carlos
                        villatoro</span>
                </p>
            </div>
        </div>
    </footer>
    {{-- /FOOTER --}}

    @stack('modals')

    @livewireScripts

    @stack('js')
    <script src="{{ asset('./js/button_top.js') }}"></script>
    <script>
        AOS.init({
            duration: 1500,
            delay: 80,
            /* disable: phone, */
        });
    </script>

    {{-- TOASTR --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('info'))
            toastr.options =
            {
            "closeButton": true,
            "progressBar": true,
            "showMethod": "slideDown",
            "hideMethod": "slideUp",
            "positionClass": "toast-top-right",
            }
            toastr.success("{{ session('info') }}");
        
        @endif
    </script>
    <script>
        Livewire.on('alert', (message) => {
            toastr["success"](message)
        });
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "showMethod": "slideDown",
            "hideMethod": "slideUp",
            "positionClass": "toast-top-right",
        }
    </script>


</body>

</html>
