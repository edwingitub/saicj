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


    <!-- TEMA  -->
    <div class="text-4xl mb-10   ml-11 mt-24"> <a href="{{url('menu_administracion')}}"><i class="fa fa-arrow-circle-left fa-fw"></i></a> Unidades Organizativas </div>


    <a href="#" wire:click="create" class="bg-indigo-500 text-white  p-2 ml-12 mb-5 {{$vtable}} w-24 hover:opacity-80">
        <i class="fa fa-plus fa-fw "></i> Nuevo
    </a> 

    
    <!--LISTA -->
    <div class=" ml-10 p-2 {{$vtable}}">

        @foreach ($list as $item)

        <x-icj.item-list>
            <x-slot:header>
                <span class=""> {{ $item->code }}</span><br>
                
           </x-slot:header>
            <x-slot:detail>
                {{ $item->name }}

             </x-slot:detail>
             <x-slot:options>

                  <x-icj.button-icon-update :my_id="$item->id" />
                  <x-icj.button-icon-delete :my_id="$item->id" />   

             </x-slot:options>   

         </x-icj.item-list>

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

        <x-icj.input-txt label="Código" value="code"  />
        <x-icj.input-txt label="Nombre" value="name" />
        
        <div class="flex flex-wrap gap-2 justify-center">

         @if($vmode=="insert")   
            <x-icj.button-store />
        @else
            <x-icj.button-update/>
        @endif
            <x-icj.button-cancel/>

          </div>
       </div>
   



</div>