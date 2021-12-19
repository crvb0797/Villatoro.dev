<x-admin>
    @section('content')
        <h1 class="font-bold text-yellow-500">Bienvenido administrador</h1>

        {{-- Infrome por usuario --}}
        <div class="mt-4 container_2">
            <h2 class="font-bold text-white mt-12 mb-4">Post del usuario</h2>
            <section class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full max-w-6xl">
                {{-- TOTAL DE POSTS DEL USUARIO --}}
                <div data-aos="flip-down"
                    class="relative p-5 bg-gradient-to-r from-blue-400 to-green-500 rounded-md overflow-hidden">
                    <div class="relative z-10 mb-4 text-white text-4xl leading-none font-semibold">{{ $totalPosts }}</div>
                    <div class="relative z-10 text-green-200 leading-none font-semibold">TOTAL DE POSTS</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="absolute -right-6 -bottom-4 h-32 w-32 -mr-8 -mb-8 text-green-600 opacity-50"
                        viewBox="0 0 24 24">
                        <path
                            d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                    </svg>
                </div>
                {{-- /TOTAL DE POSTS DEL USUARIO --}}

                {{-- POSTS PUBLICADOS DEL USUARIO --}}
                <div data-aos="flip-down"
                    class="relative p-5 bg-gradient-to-r from-blue-400 to-blue-600 rounded-md overflow-hidden">
                    <div class="relative z-10 mb-4 text-white text-4xl leading-none font-semibold">{{ $publishedPosts }}
                    </div>
                    <div class="relative z-10 text-blue-200 leading-none font-semibold">POSTS PUBLICADOS</div>
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="absolute -right-4 -bottom-4 h-32 w-32 -mr-8 -mb-8 text-blue-700 opacity-50">
                        <path
                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                        <path
                            d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                    </svg>
                </div>
                {{-- /POSTS PUBLICADOS --}}

                {{-- POSTS EN BORRADOR DEL USUARIO --}}
                <div data-aos="flip-down"
                    class="relative p-5 bg-gradient-to-r from-red-400 to-red-600 rounded-md overflow-hidden">
                    <div class="relative z-10 mb-4 text-white text-4xl leading-none font-semibold">{{ $noPublishedPosts }}
                    </div>
                    <div class="relative z-10 text-red-200 leading-none font-semibold">POSTS EN BORRADOR</div>
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="absolute -right-6 -bottom-4 h-32 w-32 -mr-8 -mb-8 text-red-700 opacity-50">
                        <path fill-rule="evenodd"
                            d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z" />
                        <path
                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                        <path
                            d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                    </svg>
                </div>
                {{-- /POSTS EN BORRADOR --}}
            </section>
            <canvas id="grafica_posts_user" class="rounded mt-12 shadow bg-gray-800 text-white w-10 h-10"></canvas>
        </div>


        {{-- Informe en general --}}
        @can('admin.users.index')
            <div class="mt-4 mb-12 container_2">
                <h2 class="font-bold text-white mt-12 mb-4">Información general</h2>
                <section class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full max-w-6xl">
                    {{-- TOTAL DE POSTS DEL USUARIO --}}
                    <div data-aos="flip-down"
                        class="relative p-5 bg-gradient-to-r from-blue-400 to-green-500 rounded-md overflow-hidden">
                        <div class="relative z-10 mb-4 text-white text-4xl leading-none font-semibold">
                            {{ $totalPostsGeneral }}</div>
                        <div class="relative z-10 text-green-200 leading-none font-semibold">TOTAL DE POSTS</div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                            class="absolute -right-6 -bottom-4 h-32 w-32 -mr-8 -mb-8 text-green-600 opacity-50"
                            viewBox="0 0 24 24">
                            <path
                                d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                        </svg>
                    </div>
                    {{-- /TOTAL DE POSTS DEL USUARIO --}}

                    {{-- POSTS PUBLICADOS DEL USUARIO --}}
                    <div data-aos="flip-down"
                        class="relative p-5 bg-gradient-to-r from-blue-400 to-blue-600 rounded-md overflow-hidden">
                        <div class="relative z-10 mb-4 text-white text-4xl leading-none font-semibold">
                            {{ $publishedPostsGeneral }}
                        </div>
                        <div class="relative z-10 text-blue-200 leading-none font-semibold">POSTS PUBLICADOS</div>
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="absolute -right-4 -bottom-4 h-32 w-32 -mr-8 -mb-8 text-blue-700 opacity-50">
                            <path
                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                            <path
                                d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </div>
                    {{-- /POSTS PUBLICADOS --}}

                    {{-- CATEGORÍAS --}}
                    <div data-aos="flip-down"
                        class="relative p-5 bg-gradient-to-r from-indigo-400 to-indigo-600 rounded-md overflow-hidden">
                        <div class="relative z-10 mb-4 text-white text-4xl leading-none font-semibold">{{ $categories }}
                        </div>
                        <div class="relative z-10 text-red-200 leading-none font-semibold">CATEGORÍAS</div>
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="absolute -right-6 -bottom-4 h-32 w-32 -mr-8 -mb-8 text-red-700 opacity-50">
                            <path
                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                        </svg>
                    </div>
                    {{-- /CATEGORÍAS --}}

                    {{-- EIQUETAS --}}
                    <div data-aos="flip-down"
                        class="relative p-5 bg-gradient-to-r from-tahiti-400 to-tahiti-600 rounded-md overflow-hidden">
                        <div class="relative z-10 mb-4 text-white text-4xl leading-none font-semibold">
                            {{ $tags }}
                        </div>
                        <div class="relative z-10 text-blue-200 leading-none font-semibold">ETIQUETAS</div>
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="absolute -right-6 -bottom-6 h-32 w-32 -mr-8 -mb-8 text-blue-700 opacity-50">
                            <path
                                d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z" />
                            <path
                                d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
                        </svg>
                    </div>
                    {{-- /ETIQUETAS --}}

                    {{-- USUARIOS TOTALES DEL USUARIO --}}
                    <div data-aos="flip-down"
                        class="relative p-5 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-md overflow-hidden">
                        <div class=" mb-4 text-white text-4xl leading-none font-semibold">{{ $users }}</div>
                        <div class="text-yellow-200 leading-none font-semibold">USUARIOS</div>
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="absolute right-0 bottom-0 h-32 w-32 -mr-8 -mb-8 text-yellow-700 opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </svg>
                        </svg>
                        </svg>
                    </div>
                </section>
            </div>
            {{-- GRAFICA --}}
            <div class="container_2">
                <canvas id="grafica_posts" class="rounded mb-12 shadow bg-gray-800 text-white w-10 h-10"></canvas>
                <canvas id="grafica_users" class="rounded mb-12 shadow bg-gray-800 text-white w-10 h-10"></canvas>
            </div>
        @endcan


        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
        <script>
            var datas_posts_user = <?php echo json_encode($datas_posts_user); ?>;
            var datas_posts = <?php echo json_encode($datas_posts); ?>;
            var datas_users = <?php echo json_encode($datas_users); ?>;


            const data = {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                datasets: [{
                    label: 'Control de posts del año',
                    data: datas_posts_user,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            const config = {
                type: 'bar',
                data,
                options: {
                    indexAxis: 'y',
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            const chart1 = new Chart(
                document.getElementById('grafica_posts_user'),
                config
            );

            /* INFORME GENERAL */
            const dataGeneral = {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                datasets: [{
                    label: 'Control de posts del año',
                    data: datas_posts,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            const configGeneral = {
                type: 'bar',
                data: dataGeneral,
                options: {
                    indexAxis: 'y',
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            const chart2 = new Chart(
                document.getElementById('grafica_posts'),
                configGeneral
            );

            /* Usuarios */

            const dataUsers = {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                datasets: [{
                    label: 'Control de usuarios del año',
                    data: datas_users,
                    backgroundColor: [
                        'rgba(34, 224, 255, 0.5)'
                    ],
                    borderColor: [
                        'rgba(34, 224, 255, 0.5)'
                    ],
                    borderWidth: 1
                }]
            };

            const configUsers = {
                type: 'line',
                data: dataUsers,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            const chart3 = new Chart(
                document.getElementById('grafica_users'),
                configUsers
            );
        </script>
    @endsection
</x-admin>
