<div class=" ml-14 m-5  rounded-lg  text-sm">
   <h1 class="text-2xl">Usuarios</h1>

<div class="flex flex-wrap">
   @foreach ($list as $item)
  
   <div class="bg-white w-72  border-gray-100  mr-2 mt-4 shadow-lg hover:shadow-none rounded-sm">
         <div class="bg-indigo-700 text-indigo-100 p-2 ">
            {{$item->name}} 
            
           
            <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                    <button class="  float-right hover:bg-indigo-900 rounded-full p-1">
                    <i class="fa fa-ellipsis-v fa-fw  float-right"></i>    
                            </button>

                       
                    </x-slot>

                    <x-slot name="content">
                       
                        <x-dropdown-link :href="route('profile.edit')">
                        <i class="fa fa-pen fa-fw"></i>    Editar
                        </x-dropdown-link>
                       
                        <x-dropdown-link :href="route('profile.edit')">
                        <i class="fa fa-trash fa-fw "></i>    Borrar
                        </x-dropdown-link>

                       
                    </x-slot>
                </x-dropdown>

          </div>



         <div class="p-2">  {{$item->email}}</div>
   </div>

   @endforeach

</div>
</div>
