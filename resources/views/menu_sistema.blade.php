<x-app-layout>
    <h1 class="ml-12 text-4xl mt-10 mb-10"> Sistema</h1>

    <div class="ml-12 flex flex-wrap gap-6">



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
