<x-app-layout>
    <div class="bg-gray-700 shadow-lg font-bold text-gray-300 text-sm p-2 fixed w-full">
        <span>Inicio</span>
        <span class="float-right pr-14">SAICJ V.1</span><br>

        

    </div>


    <div class="flex"></div>
    <div class="text-4xl mb-10 ml-11 mt-24">Inicio</div>


    <div class="ml-12 flex flex-wrap  gap-10 w-1/2">


        <a href="{{ url('menu_sistema') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl">Sistema</span>
            </div>  
        </a>

        <a href="{{ url('menu_administracion') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl">  Administración</span>
            </div>   
        </a>

        <a href="{{ url('menu_rrhh') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl"> Recursos Humanos</span>
            </div>   
        </a>
        
        <a href="{{ url('menu_sistema') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl"> Activo Fijo</span>
            </div>   
        </a>

        <a href="{{ url('menu_sistema') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl">  Vehículos</span>
            </div>   
        </a>

        <a href="{{ url('menu_sistema') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl">   Equipo Informática</span>
            </div>   
        </a>

        <a href="{{ url('menu_sistema') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl">   Servicios</span>
            </div>   
        </a>

        
        <a href="{{ url('menu_sistema') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center  hover:opacity-80 hover:scale-105">
                <i class="fas fa-cube fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl">    Planificación</span>
            </div>   
        </a>

        

       

       

       



    </div>
</x-app-layout>
