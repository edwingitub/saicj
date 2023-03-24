<x-app-layout>
    <div class="bg-gray-700 shadow-lg font-bold text-gray-300 text-sm p-2 fixed w-full">
        <span><a href="{{url('dashboard')}}">Inicio</a> / Sistema </span>
        <span class="float-right pr-14">SAICJ</span><br>

        

    </div>


    <div class="flex"></div>
    <div class="text-4xl mb-10 ml-11 mt-24">Sistema</div>


    <div class="ml-12 flex flex-wrap gap-10">



        <a href="{{ url('user') }}" class=" overflow-hidden w-60 flex flex-col border-b">
            <div class="w-32 bg-yellow-500 rounded-tr-lg"><br></div>
            <div class="w-96 bg-yellow-500 text-2xl p-6 text-yellow-800">
                <i class="fas fa-users fa-fw mr-3"></i>
                Usuario
            </div>

            <div class="bg-yellow-600 text-gray-900 text-sm p-1 block">Control de usuarios del sistema.</div>
        </a>

        <a href="{{ url('user') }}" class=" overflow-hidden w-60 flex flex-col">
            <div class="w-32 bg-yellow-600 rounded-tr-lg"><br></div>
            <div class="w-96 bg-yellow-600 text-2xl p-6">
                <i class="fas fa-users fa-fw mr-3"></i>
                Roles
            </div>

            <div class="bg-yellow-700 text-gray-900 text-sm p-1 block">Control de usuarios del sistema.</div>
        </a>

        <a href="{{ url('user') }}" class=" overflow-hidden w-60 flex flex-col">
            <div class="w-32 bg-yellow-600 rounded-tr-lg"><br></div>
            <div class="w-96 bg-yellow-600 text-2xl p-6">
                <i class="fas fa-users fa-fw mr-3"></i>
                Menú
            </div>

            <div class="bg-yellow-700 text-gray-900 text-sm p-1 block">Control de usuarios del sistema.</div>
        </a>



    </div>

</x-app-layout>
