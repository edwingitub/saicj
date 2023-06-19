<x-app-layout>
    <x-slot:links_rute >

    </x-slot>

    <x-slot:title >
       Sistema Administrativo ICJ (SAICJ)
     </x-slot>

    <div class="flex"></div>
    <div class="ml-2 flex flex-wrap  gap-10 w-2/3">

       @if(in_array(Auth::user()->role->id, array(1)))
        <a href="{{ url('menu_sistema') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl">Sistema</span>
            </div>
        </a>
        @endif

        <a href="{{ url('menu_administracion') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl">  Administración</span>
            </div>
        </a>

        <a href="{{ url('menu_rrhh') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl"> Talento Humano</span>
            </div>
        </a>

        <a href="{{ url('menu_sistema') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-red-500 "></i>
                <span class="text-1xl"> Activo Fijo</span>
            </div>
        </a>

        <a href="{{ url('menu_sistema') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-red-500 "></i>
                <span class="text-1xl">  Vehículos</span>
            </div>
        </a>

        <a href="{{ url('menu_sistema') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-red-500 "></i>
                <span class="text-1xl">   Equipo Informática</span>
            </div>
        </a>

        <a href="{{ url('menu_sistema') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-red-500 "></i>
                <span class="text-1xl">   Servicios</span>
            </div>
        </a>


        <a href="{{ url('menu_sistema') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-red-500 "></i>
                <span class="text-1xl">    Planificación</span>
            </div>
        </a>


    </div>
</x-app-layout>
