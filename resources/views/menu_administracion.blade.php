<x-app-layout>
    <div class="bg-gray-700 shadow-lg font-bold text-gray-300 text-sm p-2 fixed w-full">
        <span><a href="{{url('dashboard')}}">Inicio</a> / Sistema </span>
        <span class="float-right pr-14">SAICJ</span><br>

        

    </div>


    <div class="flex"></div>
    <div class="text-4xl mb-10 ml-10 mt-24"><i class="fa fa-cube fa-fw"></i> Administración</div>


    <div class="ml-2 flex flex-wrap  gap-10">

        <a href="{{ url('user') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center hover:scale-110">
                <i class="fas fas fa-th-list fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl">Puestos Funcionales</span>
            </div>  
        </a>

        <a href="{{ url('office') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center hover:scale-110">
                <i class="fas fa-th-list fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl">Unidades organizativas</span>
            </div>  
        </a>

        <a href="{{ url('employee') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center hover:scale-110">
                <i class="fas fa-folder fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl">Empleados</span>
            </div>  
        </a>



           



    </div>

</x-app-layout>



           




