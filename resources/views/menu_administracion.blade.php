<x-app-layout>
    <x-slot:links_rute >
        <a href="{{url("dashboard")}}" class="text-indigo-400">    Inicio / </a>
        Administración
     </x-slot>

     <x-slot:title >
        <a href="{{url('dashboard')}}" title="Regresar"
        class="bg-black text-sm text-white w-8 h-8 inline-flex justify-center items-center float-left   hover:opacity-80 rounded-full m-1  ">
         <i class="fa fa-arrow-left fa-fw"></i>
        </a>
         Administración
      </x-slot>


    <div class="ml-2 flex flex-wrap  gap-10">

        <a href="{{ url('jobType') }}" >
            <div class=" overflow-hidden w-60 flex flex-col justify-center text-center hover:scale-110">
                <i class="fas fas fa-th-list fa-fw text-6xl m-auto text-orange-500 "></i>
                <span class="text-1xl">Puestos Nominales</span>
            </div>
        </a>

        <a href="{{ url('job') }}" >
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








