{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
                
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
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
                <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-500 tracking-wide cursor-pointer">
                    Inicia
                    tu sesión y a seguir creando contenido de programación 🍕</p>
            </div>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="space-y-4">
                    <input type="text" name="email" placeholder="Correo electrónico"
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" :value="old('email')"
                        required />
                    <input type="password" name="password" placeholder="Contraseña"
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                </div>
                <div class="text-center mt-6">

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('password.request') }}">
                                {{ __('¿Olvidast tu contraseña?') }}
                            </a>
                        @endif

                        <x-jet-button class="ml-4 bg-yellow-500">
                            {{ __('Iniciar sesión') }}
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
