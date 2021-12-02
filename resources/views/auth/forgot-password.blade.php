{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-app-layout>
    <div class="min-h-screen flex justify-center items-center bg-cover bg-center relative"
        style="background-image: url({{ asset('./img/wallpaper.jpg') }})">
        <div class="absolute w-full h-full inset-0 bg-black opacity-60"></div>
        <div class="py-12 px-4 md:px-12 bg-white rounded-2xl shadow-xl z-20">
            <div>
                <div class="flex justify-center items-center mb-6">
                    <x-jet-authentication-card-logo />
                </div>
                <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer text-yellow-500">Villatoro.dev</h1>
                <p class="text-left text-sm mb-2 font-semibold text-gray-500 tracking-wide cursor-pointer">
                    ¿Olvidaste tu contrseña?</p>
            </div>

            <x-jet-validation-errors class="mb-4" />

            <div class="mb-4 text-sm text-gray-600" style="max-width: 30rem">
                {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace para restablecer la contraseña que le permitirá elegir una nueva.') }}
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="block">
                    <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button>
                        {{ __('Resetear contraseña') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
    <div class="w-40 h-40 absolute bg-purple-300 rounded-full top-0 right-12 hidden md:block"></div>
    <div class="w-20 h-40 absolute bg-purple-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
    </div>
    </div>
</x-app-layout>
