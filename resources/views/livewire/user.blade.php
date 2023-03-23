<div>

<div class="ml-14  rounded-lg  text-sm overflow-auto">
    <div class="text-2xl mb-10 mt-6">Usuarios</div>
    <a href="#" wire:click="create" class="bg-indigo-500 text-white  p-2 {{$vtable}} w-28">
        <i class="fa fa-plus fa-fw "></i>Nuevo
    </a> 

    
    <!--LISTA -->


    <div class="flex flex-wrap {{$vtable}}">

        @foreach ($list as $item)


        <!--tarjeta -->
            <div class="lg:w-1/3 w-full" wire:key={{$item->id}}>
                <div class="border-gray-200   lg:mr-10 mr-1  mt-6    border-gray-300 shadow-lg ">

                    <!-- tema -->
                    <div class="bg-indigo-200 text-gray-700 p-2  text-lg">
                        <i class="fa fa-key fa-fw"></i> <b> {{ $item->name }} </b>
                    </div>
                     <!-- detalle -->
                    <div class=" bg-white p-1 pb-10">
                        <i class="fa fa-envelope fa-fw"></i> {{ $item->email }}
                    </div>

                     <!-- opciónes -->
                    <div class="flex flex-wrap justify-end bg-white">

                       <!-- update -->
                       <button wire:click="edit({{$item->id}})"  class=" p-2   text-blue-700 hover:bg-blue-200 m-1">
                        <i class="fa fa-pen fa-fw"></i>   
                       </button>

                       <!-- delete -->
                       <a href=# wire:click="delete({{$item->id}})"  class=" p-2   text-red-700 hover:bg-red-200 m-1" onclick="confirm('¿Esta seguro de eliminar?') || event.stopImmediatePropagation()">
                         <i class="fa fa-trash fa-fw"></i>  
                       </a>

                     </div>

                </div>
            </div>
             <!--fin tarjeta -->
        @endforeach
    </div> <!-- fin lista -->
    
     <!-- formulario -->
    <div class="{{$vform}} bg-white mr-10 mt-5 p-5 flex flex-col shadow-lg">
        <input wire:model="my_id" placeholder="Id" class="bg-indigo 100 border 2 mt-2 p-2 bg-indigo-100"><br>
        <span class="font-bold">Nombre</span>
        <input  wire:model="name" placeholder="Nombre" class="bg-indigo 100 border 2 mt-2 p-2 bg-indigo-100"><br>
        <span class="font-bold">Email</span>
        <input  wire:model="email" placeholder="Correo" class="bg-indigo 100 border 2 mt-2 p-2 bg-indigo-100"><br>
        <span class="font-bold">Password</span>
        <input  wire:model="password" placeholder="Contraseña" class="bg-indigo 100 border 2 mt-2 p-2 bg-indigo-100"><br>

        <div class="flex flex-wrap gap-2">

         @if($vmode=="insert")   
           <button wire:click="store" class="bg-indigo-500 text-white m-2 p-2 w-32 text-center font-bold"><i class="fa fa-check fa-fw"></i> Crear</button>
        @else
           <button wire:click="update" class="bg-indigo-500 text-white m-2 p-2 w-32 ">Modificar</button>
        @endif

        <a href="#" wire:click="cancel" class="bg-green-500 text-white m-2 p-2 w-32 text-center font-bold"><i class="fa fa-reply fa-fw>"></i> Cancelar</a>
          </div>
    </div>

</div>
</div>