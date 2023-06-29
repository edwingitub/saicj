<div>

    <x-slot:links_rute >
        <a href="{{url("dashboard")}}" class="text-indigo-400">    Inicio / </a>
        <a href="{{url('menu_administracion')}}"  class="text-indigo-400"> Administración / </a>
       Empleado
     </x-slot>

     <x-slot:title >
         Empleado
      </x-slot>

      <!-- Mensaje -->
      <div>
        @if (session()->has('message'))

            <div class="bg-green-600 text-green-200 p-2 ">
                <i class="fa fa-info-circle"></i>
                {{ session('message') }}
                <a href="#" wire:click="clear_message"><i class="fa fa-times fa-fw float-right mr-3"></i></a>
            </div>
        @endif
     </div>


    <div class="bg-indigo-300 pl-3 pr-10 text-sm fixed bottom-0 w-full"> {{ $list->links() }}</div>


<!-- Barra -->
    <div class="flex bg-indigo-300 p-1 rounded-lg mr-4 {{$vtable}}">
        <!-- regresar -->
        <a href="{{url('menu_administracion')}}" title="Regresar"
        class="bg-black text-white w-8 h-8 inline-flex justify-center items-center float-left  {{$vtable}}  hover:opacity-80 rounded-full m-1  ">
            <i class="fa fa-arrow-left fa-fw "></i>
        </a>


    <!-- nuevo -->
        <a href="#" title="Nuevo" wire:click="create"
        class="bg-indigo-600 text-white w-8 h-8 inline-flex justify-center items-center float-left   {{$vtable}}  hover:opacity-80   rounded-full m-1">
            <i class="fa fa-plus fa-fw "></i>
        </a>

        <input id="search" name="search" wire:model="search" placeholder="Buscar" class="bg-indigo-100 rounded-full pl-5 pr-5 w-1/2 m-1 " >

    </div>








 <!--LISTA -->
 <div class="pt-2 pr-4 {{$vtable}}">


    <!-- tabla pantalla completa -->
   <table class="w-full text-center mr-10 rounded-lg overflow-hidden shadow-md max-sm:hidden">
       <tr class="bg-gray-300 border-gray-400 font-bold text-xs ">
           <th class="p-3"></th>
           <th class="p-3">DUI</th>
           <th class="p-3">NOMBRE</th>
           <th class="p-3">NACIMIENTO</th>
           <th class="p-3">INICIO</th>
           <th class="p-3">FIN</th>
           <th class="p-3">ACTIVO</th>
           <th class="p-3">COMENTARIO</th>
           <th class="p-3">OPCIONES</th>

       </tr>


   @foreach ($list as $item)
       <tr class="hover:bg-indigo-200 border-b bg-white">
           <td>
               <img src='{{ asset($item->photo)}}'
               onerror="this.src='https://api.dicebear.com/6.x/personas/svg?seed={{$item->first_name}}+{{$item->first_last_name}}&backgroundColor=65c9ff,ffdfbf,ffd5dc,d1d4f9,c0aede,b6e3f4';"
               class="w-12 h-12  border-2 border-white rounded-full  object-cover m-2 "
                >
           </td>
           <td> {{$item->dui}}</td>
           <td>
                {{ $item->first_name}}
                {{ $item->second_name}}
                {{ $item->thrid_name}}
                {{ $item->first_last_name}}
                {{ $item->second_last_name}}
                {{ $item->thrid_last_name}}
           </td>
           <td>  {{ $item->birthday}}   </td>
           <td>  {{ $item->start}}   </td>
           <td>  {{ $item->end}}   </td>


           <td>  {{ $item->active}}   </td>
           <td>  {{ $item->comments}}  </td>
           <td>
               <x-icj.button-icon-update :my_id="$item->id" />
               <x-icj.button-icon-delete :my_id="$item->id" />
            </td>

       </tr>


   @endforeach

   </table>

<!-- tabla pantalla pequeña -->
<div class="sm:hidden pr-0">
    @foreach ($list as $item)

      <table class="mb-4 shadow-lg w-full bg-white rounded-lg overflow-hidden ">
        <tr class=" bg-indigo-100 border-b ">
            <td colspan="2" class="borde-2 p-2">
                 <img src='{{ asset($item->photo)}}'
                onerror="this.src='{{asset('img/user.png')}}';"
                class="w-20 h-20  border-2 border-white rounded-full  object-cover m-auto"
                 >
            </td>
        </tr>
        <tr class=" border-gray-400">
            <td class=" border-t-2 font-bold bg-gray-300 p-2">Dui</td>
            <td class="border-t-2 p-2">
                {{$item->dui}}
            </td>
        </tr>
        <tr class=" border-gray-400">
            <td class=" border-t-2 font-bold bg-gray-300 p-2">Nombre</td>
            <td class="border-t-2 p-2">
                {{ $item->first_name}}
                {{ $item->second_name}}
                {{ $item->thrid_name}}
                {{ $item->first_last_name}}
                {{ $item->second_last_name}}
                {{ $item->thrid_last_name}}
            </td>
        </tr>
        <tr class=" border-gray-400">
            <td class=" border-t-2 font-bold bg-gray-300 p-2">Nacimiento</td>
            <td class="border-t-2 p-2">
                {{$item->birthday}}
            </td>
        </tr>
        <tr class=" border-gray-400">
            <td class=" border-t-2 font-bold bg-gray-300 p-2">Inicio</td>
            <td class="border-t-2 p-2">
                {{$item->start}}
            </td>
        </tr>
        <tr class=" border-gray-400">
            <td class=" border-t-2 font-bold bg-gray-300 p-2">Final</td>
            <td class="border-t-2 p-2">
                {{$item->end}}
            </td>
        </tr>
        <tr class=" border-gray-400">
            <td class=" border-t-2 font-bold bg-gray-300 p-2">Activo</td>
            <td class="border-t-2 p-2">
                {{$item->active}}
            </td>
        </tr>
        <tr class=" border-gray-400">
            <td class=" border-t-2 font-bold bg-gray-300 p-2">Opciones</td>
            <td class="border-t-2 p-2">
                <x-icj.button-icon-update :my_id="$item->id" />
                <x-icj.button-icon-delete :my_id="$item->id" />
            </td>
        </tr>

      </table>

      @endforeach
    </div>






    </div> <!-- fin lista -->



     <!-- formulario -->

    <div class="{{$vform}} bg-white mr-10 mt-5 ml-10 flex flex-col shadow-lg lg:w-1/4">

        <div class="bg-indigo-300 font-bold p-2 text-center">
            @if($vmode=="insert")
            Nuevo Empleado
            @else
            Modificar Empleado
            @endif
        </div>



        <x-icj.input-txt label="Id" value="my_id" type="hidden" />
        <span class="ml-3">{{$my_id}}</span>

        <x-icj.input-txt label="Foto" value="photo" type="file" />

        <x-icj.input-txt label="Primer Nombre" value="first_name" />
        <x-icj.input-txt label="Segundo Nombre" value="second_name" />
        <x-icj.input-txt label="Tercer Nombre" value="thrid_name" />

        <x-icj.input-txt label="Primer Apellido" value="first_last_name" />
        <x-icj.input-txt label="Segundo Apellido" value="second_last_name" />
        <x-icj.input-txt label="Tercer Apellido" value="thrid_last_name" />

        <x-icj.input-txt label="Nacimiento" value="birthday" type="date" />
        <x-icj.input-txt label="Inicio" value="start" type="date" />
        <x-icj.input-txt label="Fin" value="end" type="date" />
        <x-icj.input-txt label="Fin" value="end" type="date" />

        <x-icj.input-txt label="Correo" value="email" type="email" />
        <x-icj.input-txt label="Teléfono" value="phone" />

        <x-icj.input-txt label="DUI" value="dui" />
        <x-icj.input-txt label="carnet" value="nr" />


        <x-icj.input-txt label="Activo" value="active" type="checkbox" />
        <x-icj.input-txt label="Comentarios" value="comments" />



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
