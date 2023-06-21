<div>
    <x-slot:links_rute >
        <a href="{{url('menu_sistema')}}"  class="text-indigo-400"> / Sistema </a>
        / Bitácora
     </x-slot>

     <x-slot:title >
        <a href="{{url('menu_sistema')}}" title="Regresar"
        class="bg-black text-white text-sm w-8 h-8 inline-flex justify-center items-center float-left  hover:opacity-80 rounded-full m-1  ">
            <i class="fa fa-arrow-left fa-fw "></i>
        </a>
        Bitácora
      </x-slot>

      <!-- Mensaje -->
      <div>
        @if (session()->has('message'))

            <div class="bg-green-600 text-green-200 p-2 mb-2 rounded-lg">
                <i class="fa fa-info-circle"></i>
                {{ session('message') }}
                <a href="#" wire:click="clear_message"><i class="fa fa-times fa-fw float-right mr-3"></i></a>
            </div>
        @endif
     </div>



    <div class="flex bg-indigo-300 p-1 rounded-lg ">
      <!-- Busqueda -->
       <input id="search_user" name="search_user"     wire:model="search_user" placeholder="Buscar por usuario" class="bg-indigo-100 rounded-lg pl-5 pr-5  m-1 " >
       <input id="search_form" name="search_form"     wire:model="search_form" placeholder="Buscar por formulario" class="bg-indigo-100 rounded-lg pl-5 pr-5  m-1 " >
       <input id="search_action" name="search_action" wire:model="search_action" placeholder="Buscar por acción" class="bg-indigo-100 rounded-lg pl-5 pr-5  m-1 " >
       <input id="search_record_id" name="search_record_id" wire:model="search_record_id" placeholder="Buscar por id" class="bg-indigo-100 rounded-lg pl-5 pr-5  m-1 " >
       <input id="search_created_at" name="search_created_at" wire:model="search_created_at" placeholder="Buscar por fecha" class="bg-indigo-100 rounded-lg pl-5 pr-5  m-1 " >
    </div>
<br>
     <!-- links -->
     <div class="bg-gray-300 pl-3 pr-3 text-center text-sm  w-full rounded-t-lg  "> {{ $list->links() }}</div>

 <!--LISTA -->
 <div class="pt-0">


    <!-- tabla pantalla completa -->
   <table class="w-full text-center mr-10  overflow-hidden shadow-md max-sm:hidden  rounded-b-lg">
       <tr class="bg-gray-300 border-gray-400 font-bold text-xs ">
           <th class="p-3">ID</th>
           <th class="p-3">USUARIO</th>
           <th class="p-3">FORMULARIO</th>
           <th class="p-3">ACCIÓN</th>
           <th class="p-3">FILA</th>
           <th class="p-3">DATOS</th>
           <th class="p-3">CREADO</th>

       </tr>
   @foreach ($list as $item)
       <tr class="hover:bg-indigo-200 border-b bg-white">
           <td>{{$item->id}}</td>
           <td>{{$item->user}}</td>
           <td>{{$item->form}}</td>
           <td>{{$item->action}}</td>
           <td>{{$item->record_id}}</td>
           <td class="">{!! str_replace(array("\"","{","}",","),array("","","","<br>"),$item->record_complete) !!}</td>
           <td>{{$item->created_at}}</td>

       </tr>
   @endforeach

   </table>

</div> <!-- fin lista -->


</div>
