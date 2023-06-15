<div>

    <x-slot:links_rute >
        <a href="{{url("dashboard")}}" class="text-indigo-400">    Inicio / </a>
        <a href="{{url('menu_sistema')}}"  class="text-indigo-400"> Sistema / </a>
        Usuario
     </x-slot>

     <x-slot:title >
        <a href="{{url('menu_sistema')}}" title="Regresar"
        class="bg-black text-white text-sm w-8 h-8 inline-flex justify-center items-center float-left  {{$vtable}}  hover:opacity-80 rounded-full m-1  ">
            <i class="fa fa-arrow-left fa-fw "></i>
        </a>
         Usuarios
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











     <!-- links -->
    <div class="bg-indigo-300 pl-3 pr-10 text-sm fixed bottom-0 w-full"> {{ $list->links() }}</div>


<div class="flex bg-indigo-300 p-1 rounded-lg {{$vtable}}">


<!-- nuevo -->
    <a href="#" title="Nuevo" wire:click="create"
    class="bg-indigo-600 text-white w-8 h-8 inline-flex justify-center items-center float-left   {{$vtable}}  hover:opacity-80   rounded-full m-1">
        <i class="fa fa-plus fa-fw "></i>
    </a>

    <input id="search" name="search" wire:model="search" placeholder="Buscar" class="bg-indigo-100 rounded-full pl-5 pr-5 w-1/2 m-1 " >

</div>


    <!--LISTA -->
    <div class="pt-2 {{$vtable}}">


         <!-- tabla pantalla completa -->
        <table class="w-full text-center mr-10 rounded-lg overflow-hidden shadow-md max-sm:hidden">
            <tr class="bg-gray-300 border-gray-400 font-bold text-xs ">
                <th class="p-3"></th>
                <th class="p-3">LOGIN</th>
                <th class="p-3">NOMBRE</th>
                <th class="p-3">ROL</th>
                <th class="p-3">PUESTO</th>
                <th class="p-3">UNIDAD ORGANIZATIVA</th>
                <th class="p-3">OPCIONES</th>

            </tr>


        @foreach ($list as $item)
            <tr class="hover:bg-indigo-200 border-b bg-white">
                <td>
                    <img src='{{ asset($item->employee->photo)}}'
                    onerror="this.src='{{asset('img/user.png')}}';"
                    class="w-12 h-12  border-2 border-white rounded-full  object-cover m-2 "
                     >
                </td>
                <td>  {{ $item->email}}   </td>
                <td>  {{ $item->employee->first_name}}  {{ $item->employee->first_last_name}} </td>
                <td>  {{ $item->role->name}}   </td>
                <td>  {{ $item->employee->jobs[0]->name}}  </td>
                <td>  {{ $item->employee->jobs[0]->office->name}}  </td>
                <td>
                    <x-icj.button-icon-update :my_id="$item->id" />
                    <x-icj.button-icon-delete :my_id="$item->id" />
                 </td>

            </tr>


        @endforeach

        </table>


 <!-- tabla pantalla pequeña -->
       <div class="sm:hidden pr-4">
        @foreach ($list as $item)

          <table class="mb-4 shadow-lg w-full bg-white rounded-lg overflow-hidden ">
            <tr class=" bg-indigo-100 border-b ">
                <td colspan="2" class="borde-2 p-2">
                     <img src='{{ asset($item->employee->photo)}}'
                    onerror="this.src='{{asset('img/user.png')}}';"
                    class="w-20 h-20  border-2 border-white rounded-full  object-cover m-auto"
                     >
                </td>
            </tr>
            <tr class=" border-gray-400">
                <td class=" border-t-2 font-bold bg-gray-300 p-2">Login</td>
                <td class="border-t-2 p-2">
                    {{$item->email}}
                </td>
            </tr>
            <tr class=" border-gray-400">
                <td class=" border-t-2 font-bold bg-gray-300 p-2">Nombre</td>
                <td class="border-t-2 p-2">
                    {{$item->employee->first_name}} {{$item->employee->first_last_name}}
                </td>
            </tr>
            <tr class=" border-gray-400">
                <td class=" border-t-2 font-bold bg-gray-300 p-2">Puesto</td>
                <td class="border-t-2 p-2">
                    {{$item->employee->jobs[0]->name}}
                </td>
            </tr>
            <tr class=" border-gray-400">
                <td class=" border-t-2 font-bold bg-gray-300 p-2">Oficina</td>
                <td class="border-t-2 p-2">
                    {{$item->employee->jobs[0]->office->name}}
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
            Nuevo Usuario
            @else
            Modificar Usuario
            @endif
        </div>



        <x-icj.input-txt label="Id" value="my_id" type="hidden" />
        <span class="ml-3">{{$my_id}}</span>

        <x-icj.input-select label="Empleado" value="employee_id" :cat="$cat_employees" option_value="id" option_label="first_name"/>
        <x-icj.input-txt label="Correo" value="email" type="email" />

        <x-icj.input-select label="Rol" value="role_id" :cat="$cat_roles" option_value="id" option_label="name"/>

        <x-icj.input-txt label="Contraseña" value="password" type="password" />
        <x-icj.input-txt label="Repita Contraseña" value="password_confirm" type="password" />



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
