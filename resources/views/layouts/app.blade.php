<!--This template is based on: https://dribbble.com/shots/6531694-Marketing-Dashboard by Gregoire Vella -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Administrativo ICJ</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">

    <style>
        .nunito {
            font-family: 'nunito', font-sans;
        }

        .border-b-1 {
            border-bottom-width: 1px;
        }

        .border-l-1 {
            border-left-width: 1px;
        }

        hover\:border-none:hover {
            border-style: none;
        }

        #sidebar {
            transition: ease-in-out all .3s;
            z-index: 9999;
        }

        #sidebar span {
            opacity: 0;
            position: absolute;
            transition: ease-in-out all 0.5s;
        }

        #sidebar:hover {
            width: 200px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            opacity: 100;
            /*shadow-2xl*/
        }

        #sidebar:hover span {
            opacity: 1;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body class="h-screen bg-gray-500 font-sans p-0 "
    style="background-image:url('img/bggray.png'); background-size:cover; background-attachment: fixed;">
    <!-- background-image:url('img/bggray.png'); background-size:cover;  -->
    <!--menu-->
    <div id="sidebar"
        class=" h-screen w-10 menu bg-black text-white px-1 py-0 flex items-top nunito s fixed shadow overflow-hidden">




        <ul class="list-reset font-bold">
            <li class="my-2 md:my-0">
                <a href="#"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-200 no-underline hover:text-indigo-100">
                    <img class="w-6 h-6 rounded-full inline-block mr-2 object-cover" src="{{asset(Auth::user()->employee->photo)}}"
                    onerror="this.src='{{asset('img/user.png')}}';"
                        alt="Avatar of User">

                    <span class="w-full inline-block pb-1 md:pb-0 text-xs text-white">
                        {{ Auth::user()->employee->first_name }}  {{ Auth::user()->employee->first_last_name }}<br>
                       <b> {{ Auth::user()->role->name }}</b>
                     </span>




                </a>
            </li>

            <li class="my-2 md:my-0">
                <a href="{{ url('dashboard') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-indigo-100 ">
                    <i class="fas fa-home fa-fw mr-3"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Inicio</span>
                </a>
            </li>


            @if(in_array(Auth::user()->role->id, array(1)))
            <li class="my-2 md:my-0 ">
                <a href="{{ url('menu_sistema') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-indigo-100">
                    <i class="fas fa-cog fa-fw mr-3"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Sistema</span>
                </a>
            </li>
            @endif

            <li class="my-2 md:my-0">
                <a href="{{ url('menu_administracion') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-indigo-100 ">
                    <i class="fa fa-list fa-fw mr-3"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Administración</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="{{ url('menu_rrhh') }}"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-indigo-100 ">
                    <i class="fas fa-users fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">R.
                        Humanos</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-indigo-100 ">
                    <i class="fa fa-cubes fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Activo
                        Fijo</span>
                </a>
            </li>

            <li class="my-2 md:my-0">
                <a href="#"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-indigo-100 ">
                    <i class="fa fa-car fa-fw mr-3"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Vehículos</span>
                </a>
            </li>

            <li class="my-2 md:my-0">
                <a href="#"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-indigo-100 ">
                    <i class="fa fa-laptop fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Equipo
                        TI</span>
                </a>
            </li>

            <li class="my-2 md:my-0">
                <a href="#"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-indigo-100 ">
                    <i class="fa fa-wrench fa-fw mr-3"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Servicios</span>
                </a>
            </li>

            <li class="my-2 md:my-0">
                <a href="#"
                    class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-indigo-100 ">
                    <i class="fa fa-clock  fa-fw mr-3"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Planificación</span>
                </a>
            </li>

            <li class="my-2 text-sm">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="route('logout')"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-100 "
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="fa fa-arrow-left fa-fw mr-3"></i><span
                            class="w-full inline-block pb-1 md:pb-0 text-sm">Salir</span>
                    </a>
                </form>
            </li>
        </ul>

    </div>

    <!--fin menu-->


    <!-- include('layouts.navigation') -->


    <div class="pl-10 pr-5">

        <!-- Ruta -->
          <div class="p-1 pl-4 pt-3 font-bold text-xs bg-black text-gray-300  m-0 w-full ">
            {{ $links_rute }}
            <span class="float-right pr-2">SAICJ Ver.1.0</span>
          </div>




         <!-- Principal -->
        <main class="pl-4">

                <!-- titulo -->
          <div class="text-4xl  mt-4 mb-4">
            {{ $title }}
          </div>

            {{ $slot }}

        </main>
    </div>







    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>


    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                    // click on the link
                    if (userMenuDiv.classList.contains("invisible")) {
                        userMenuDiv.classList.remove("invisible");
                    } else {
                        userMenuDiv.classList.add("invisible");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    userMenuDiv.classList.add("invisible");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>

    @livewireScripts

</body>

</html>
