<div>

    <div class="bg-gray-700 shadow-lg font-bold text-gray-300 text-sm  fixed w-full">
        <span><a href="{{url("dashboard")}}">Inicio</a> / <a href="{{url('menu_sistema')}}">Sistema</a> / Usuario</span>
        <span class="float-right pr-14">SAICJ V.1</span><br>

        <i class="fa fa-search fa-fw absolute pt-3 "></i><input id="search" name="search" wire:model="search" placeholder="Buscar" class="pl-6 bg-transparent border-0 focus:outline-none w-full p-2" ><br>
        
 

        <div>

            @if (session()->has('message'))
            
                <div class="bg-green-600 text-green-200 p-2 ">
                    <i class="fa fa-info-circle"></i>
            
                    {{ session('message') }}
            
                    <a href="#" wire:click="clear_message"><i class="fa fa-times fa-fw float-right mr-10"></i></a>
            
                </div>
            
            @endif
            
            </div>
    </div>
    <div class="bg-indigo-300 pl-3 pr-10 text-sm fixed bottom-0 w-full"> {{ $list->links() }}</div>



    <div class="border-b flex">
   
    </div>



    <div class="text-4xl mb-10   ml-11 mt-24"> <a href="{{url('menu_sistema')}}"><i class="fa fa-arrow-circle-left fa-fw"></i></a> Usuarios</div>


    <a href="#" wire:click="create" class="bg-indigo-500 text-white  p-2 ml-12 mb-5 {{$vtable}} w-24 hover:opacity-80">
        <i class="fa fa-plus fa-fw "></i> Nuevo
    </a> 

    
    <!--LISTA -->
    <div class="flex flex-wrap gap-14 ml-10 p-2 {{$vtable}}">

        @foreach ($list as $item)

        <x-icj.item-folder>
            <x-slot:header>
                <i class="fa fa-key fa-fw"></i>  {{ $item->name }}
                <span class="float-right">{{$item->id}}</span>
           </x-slot:header>
            <x-slot:detail>
                <span class="text-black "> <i class="fa fa-envelope fa-fw"></i> {{ $item->email }}</span><br>
                <span class="text-black"> <i class="fa fa-lock fa-fw"></i> {{ $item->role->name }}</span>
             </x-slot:detail>
             <x-slot:options>

                  <x-icj.button-icon-update :my_id="$item->id" />
                  <x-icj.button-icon-delete :my_id="$item->id" />   

             </x-slot:options>   

         </x-icj.item-folder>

          @endforeach
    </div> <!-- fin lista -->

   
    
     <!-- formulario -->
     
    <div class="{{$vform}} bg-white mr-10 mt-5 ml-10 flex flex-col shadow-lg lg:w-1/4">
     
        <div class="bg-indigo-300 font-bold p-2 text-center"> 
            @if($vmode=="insert")
            Nuevo Usuario
            @else
            Modificar Usuario
            @endif
        </div>
             
      

        <x-icj.input-txt label="Id" value="my_id" type="hidden" />
        <span class="ml-3">{{$my_id}}</span>

        <x-icj.input-txt label="Nombre" value="name" />
        <x-icj.input-txt label="Correo" value="email" type="email" />

        <x-icj.input-select label="Rol" value="role_id" :cat="$cat_roles" option_value="id" option_label="name"/>

        <x-icj.input-txt label="Contraseña" value="password" type="password" />
        <x-icj.input-txt label="Repita Contraseña" value="password_confirm" type="password" />

        
        
        <div class="flex flex-wrap gap-2 justify-center">

         @if($vmode=="insert")   
           <button wire:click="store" class="bg-indigo-500 text-white m-2 p-2 w-32 text-center font-bold">
           <i class="fa fa-check fa-fw"></i> Crear </button>
        @else
           <button  wire:click="update" class="bg-indigo-500 text-white m-2 p-2 w-32 ">
            <i class="fa fa-save fa-fw>"></i> 
             Modificar
          </button>
        @endif

        <button  wire:click="cancel" class="bg-green-500 text-white m-2 p-2 w-32 text-center font-bold">
            <i class="fa fa-reply fa-fw>"></i> 
             Cancelar
        </button>

          </div>
       </div>
   



</div>