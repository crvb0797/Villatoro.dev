<x-app-layout>

    <div x-data="{open: false}" class="relative">
        {{-- Componente de side bar --}}
        <!-- component -->
        <aside
            class="absolute z-10 bg-metalic-200 text-white pt-2 inset-0 transform duration-300 -translate-x-full w-16 h-96"
            style="box-shadow: 0px 0px 10px rgba(145, 130, 130, 0.25)"
            :class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0':open === false}">
            {{-- Logo --}}
            <div>
                <a class="mx-auto" href="{{ route('home') }}">
                    <img class="w-10 mx-auto" src="{{ asset('./img/logo_64.svg') }}" alt="svelte logo" />
                </a>
            </div>

            <ul class="mt-4">
                <li class="hover:bg-yellow-500 hover:text-white">
                    <x-jet-nav-link href="{{ route('admin.home') }}"
                        class="h-16 w-16 px-6 flex justify-center items-center focus:text-orange-500"
                        :active="request()->routeIs('admin.home')">

                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                    </x-jet-nav-link>
                </li>

                <li class="hover:bg-yellow-500 hover:text-white">
                    <x-jet-nav-link href="{{ route('admin.categories.index') }}"
                        class="h-16 w-16 px-6 flex justify-center items-center focus:text-orange-500"
                        :active="request()->routeIs('admin.categories.index')">

                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                            <path
                                d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z" />
                            <path
                                d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z" />
                        </svg>
                    </x-jet-nav-link>
                </li>

                <li class="hover:bg-yellow-500 hover:text-white">
                    <x-jet-nav-link href="{{ route('admin.tags.index') }}"
                        class="h-16 w-16 px-6 flex justify-center items-center focus:text-orange-500"
                        :active="request()->routeIs('admin.tags.index')">

                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                            <path
                                d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z" />
                            <path
                                d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
                        </svg>
                    </x-jet-nav-link>
                </li>

                <li class="hover:bg-yellow-500 hover:text-white">
                    <x-jet-nav-link href="{{ route('admin.categories.index') }}"
                        class="h-16 w-16 px-6 flex justify-center items-center focus:text-orange-500"
                        {{-- :active="request()->routeIs('admin.categories.index')" --}}>

                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                            <path
                                d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                        </svg>
                    </x-jet-nav-link>
                </li>

                <li class="hover:bg-yellow-500 hover:text-white">
                    <x-jet-nav-link href="{{ route('admin.categories.index') }}"
                        class="h-16 w-16 px-6 flex justify-center items-center focus:text-orange-500"
                        {{-- :active="request()->routeIs('admin.categories.index')" --}}>

                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                            <path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>
                    </x-jet-nav-link>
                </li>

                <li class="bg-red-500 hover:text-white">
                    <button class="h-16 w-16 px-6 flex justify-center items-center" @click="open = false">
                        <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                        </svg>
                    </button>
                </li>
            </ul>
        </aside>
        {{-- Componente de side bar --}}

        <div class="container mx-auto pt-16 relative z-0">
            @yield('content')
        </div>

        {{-- Open menu admin --}}

        <button class="absolute top-36 left-0 p-3 rounded-r-lg bg-yellow-500 text-white" x-on:click="open = true"><i
                class="fas fa-chevron-right"></i></button>
    </div>

</x-app-layout>
