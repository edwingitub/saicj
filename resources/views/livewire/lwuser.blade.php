<div>

    <div class="bg-white  font-bold text-gray-700 text-sm  fixed w-full pl-11 shadow-lg pt-2 pb-2">
        <span><a href="{{url("dashboard")}}">Inicio</a> / <a href="{{url('menu_sistema')}}">Sistema</a> / Usuario</span>
        <span class="float-right pr-14">SAICJ V.1</span><br>

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


    <!-- título -->
    <div class="text-4xl mb-5   ml-11 mt-16 ">  Usuarios</div>

    <div class="flex h-12 p-2 mb-2 ">
    <!-- Nuevo -->
    <a href="#" title="Nuevo" wire:click="create"
    class="bg-indigo-500 text-white  p-1 w-24  {{$vtable}}  hover:opacity-80 rounded-lg mr-5 ml-10 pl-2 pr-2">
        <i class="fa fa-plus fa-fw "></i> Nuevo
    </a>

    <input id="search" name="search" wire:model="search" placeholder="Buscar"
    class="p-0 pl-6  border-0 focus:outline-none w-full bg-blue-200 rounded-lg block flex-grow {{$vtable}}"
     >
    </div>

    <!--LISTA -->
    <div class="flex flex-wrap gap-14 ml-10 p-2 {{$vtable}}">


        @foreach ($list as $item)

        <x-icj.item-folder>
            <x-slot:header>
                <img src='{{ asset($item->employee->photo)}}'
            onerror="this.src='{{asset('img/user.png')}}';"
            class="w-8 h-8  border-2 border-white rounded-full  object-cover mr-2 float-left"
             >
              {{ $item->employee->first_name}}  {{ $item->employee->first_last_name}}
                <span class="float-right">{{$item->id}}</span>
           </x-slot:header>
            <x-slot:detail>
                <span>{{$item->employee->jobs[0]->name}}</span><br>
                <span>{{$item->employee->jobs[0]->office->name}}</span><br>
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
