<div class=" ml-14 m-5  rounded-lg  text-sm">
    <h1 class="text-2xl">Usuarios</h1>

    <div class="flex flex-wrap">
        @foreach ($list as $item)

            <div class="lg:w-1/3 w-full">
                <div class="border-gray-200   lg:mr-10 mr-1  mt-6    border-gray-300  ">

                    <div class="bg-indigo-100 text-gray-700 p-2  text-lg">
                        <i class="fa fa-key fa-fw"></i> <b> {{ $item->name }} </b>
                    </div>

                    <div class=" bg-white p-1 pb-10">
                        <i class="fa fa-envelope fa-fw"></i> {{ $item->email }}
                    </div>

                    <div class="flex flex-wrap justify-end bg-white">
                     <a href="#"  class=" p-2   text-blue-700 hover:bg-blue-200 m-1">
                        <i class="fa fa-pen fa-fw"></i>
                       
                     </a>
                     <a href=# wire:click="delete({{$item->id}})"  class=" p-2   text-red-700 hover:bg-red-200 m-1" onclick="confirm('¿Esta seguro de eliminar?') || event.stopImmediatePropagation()">
                        <i class="fa fa-trash fa-fw"></i>
                       
                     </a>
                  </div>

                </div>
            </div>

        @endforeach




    </div>
