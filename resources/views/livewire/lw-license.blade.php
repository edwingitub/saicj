<div class="bg-gray-700 shadow-lg font-bold text-gray-300 text-sm  fixed w-full">
    <span><a href="{{url("dashboard")}}">Inicio</a> / <a href="{{url('menu_rrhh')}}">Talento Humano</a> / Permisos y Licencias</span>
    <span class="float-right pr-14">SAICJ V.1</span><br>

    <i class="fa fa-search fa-fw absolute pt-3 "></i>
    <input id="search" name="search" wire:model="search" placeholder="Buscar" class="pl-6 bg-transparent border-0 focus:outline-none  p-2" >


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

<div class="pt-3">

    <!-- TEMA  -->
    <div class="text-4xl mb-10   ml-11 mt-24">  Permisos y Licencias </div>



       <div class="ml-10 bg-green-700 text-green-100 p-2 w-96 text-sm rounded-lg grid grid-cols-4 float-left" >
            <div>
                <i class="fas fa-clock fa-fw text-6xl m-auto text-green-100 "></i>
            </div>
            <div class="col-span-3">
               Permisos Personales<br>
               <span class="text-2xl text-green-300">2 días 5 horas 4 minutos</span><br>
               <span class="text-sm text-green-200">Máximo: 5 días</span>
            </div>
        </div>

        <div class="ml-10 bg-red-700 text-red-100 p-2 w-96 text-sm rounded-lg grid grid-cols-4 float-left" >
            <div>
                <i class="fas fa-clock fa-fw text-6xl m-auto text-red-100 "></i>
            </div>
            <div class="col-span-3">
               Permisos por enfermedad<br>
               <span class="text-2xl text-red-300">10 días 7 horas 8 minutos</span><br>
               <span class="text-sm text-red-200">Máximo: 15 días</span>
            </div>
        </div>

        <div class="ml-10 bg-orange-700 text-red-100 p-2 w-96 text-sm rounded-lg grid grid-cols-4 float-left" >
            <div>
                <i class="fas fa-clock fa-fw text-6xl m-auto text-red-100 "></i>
            </div>
            <div class="col-span-3">
              Tiempo compensatorio<br>
               <span class="text-2xl text-red-300">3 horas</span><br>
               <span class="text-sm text-red-200">Máximo: 2 días acumulados</span>
            </div>
        </div>
 </div>

<div class="clear-both"></div>

<!-- PESTAÑAS-->
<div class="pt-10">
    <div class="bg-orange-200 text-xs font-bold block float-left p-2 mr-2 ml-10 mt-10  rounded-tl-lg rounded-tr-lg ">
        Mis permisos

    </div>

    <div class="bg-orange-400  text-xs text-orange-800 block float-left p-2 mr-2  mt-10 font-bold text-gray-900 rounded-tl-lg rounded-tr-lg">
        Mis autorizaciónes

    </div>

    <div class="bg-orange-400 text-xs text-orange-800 block float-left p-2 mr-2  mt-10 font-bold  rounded-tl-lg rounded-tr-lg ">
        Talento Humano

    </div>

    <div class="bg-orange-200 clear-both ml-10 p-2 mr-10">


     <!-- tabla -->
     <div class="p-4  {{$vtable}}" >
    <table class="table-auto w-full text-sm text-center shadow-lg rounded-lg overflow-hidden">
        <thead class="border-b-4  text-gray-700 bg-indigo-300">
            <tr>
                <th>Foto</th>
                <th>Solicitante</th>
                <th>Unidad Organizativa</th>
                <th>Jefe</th>
                <th>Tipo</th>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Estado</th>
                <th>Opciónes</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($list as $item )
            <tr class="border-b bg-white hover:bg-gray-100">
            <td>
                <img src='{{asset($item->employee->photo)}}'
                onerror="this.src='{{asset('img/user.png')}}';"
                class="w-14 h-14  border-2 border-white rounded-full  object-cover m-auto mt-2 mb-2">
            </td>
            <td>{{$item->first_name}} {{$item->second_name}} {{$item->first_last_name}} {{$item->second_last_name}}</td>
            <td>{{$item->office}}</td>
            <td>{{$item->boss_first_name}} {{$item->boss_second_name}} {{$item->boss_first_last_name}} {{$item->boss_second_last_name}}</td>
            <td>{{$item->license_type->name}}</td>
            <td>{{$item->start}}</td>
            <td>{{$item->end}}</td>
            <td><span class="bg-gray-100 p-2 rounded-lg">{{$item->license_state->name}}</span></td>
            <td>
            <x-icj.button-icon-update :my_id="$item->id" />
            <x-icj.button-icon-delete :my_id="$item->id" />
            </tr>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>
<!-- fin tabla-->

</div>

</div>
