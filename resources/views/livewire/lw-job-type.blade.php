<div>

    <x-slot:links_rute >
        <a href="{{url('menu_administracion')}}"  class="text-indigo-400"> / Administración</a>
        / Puesto Nominales
     </x-slot>

     <x-slot:title >
        <a href="{{url('menu_administracion')}}" title="Regresar"
        class="bg-black text-white text-sm w-8 h-8 inline-flex justify-center items-center float-left  {{$vtable}}  hover:opacity-80 rounded-full m-1  ">
            <i class="fa fa-arrow-left fa-fw "></i>
        </a>
         Puestos Nominales
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

    <!-- tabla -->
    <div class="  {{$vtable}}" >

    <!-- Indicadores -->
    <div class="flex">
     <div class="flex  mr-4 mb-4    bg-green-700 text-green-200 rounded-lg overflow-hidden">
        <div class="text-center bg-green-900 p-3 text-4xl">
        <i class="fa fa-users fa-fw"></i>
        </div>
      <div class="p-2 pl-6 pr-6">
       <span class="w-full text-center text-4xl block text-white">{{$this->totalusedJobs()}} / {{$this->totalJobTypes()}}</span>
       <span class="w-full text-center text-sm block text-green-300">{{round($this->totalusedJobs() / $this->totalJobTypes() *100,2)}}% creadas</span>
      </div>
     </div>

     <div class="flex  mr-4 mb-4  bg-gray-700 text-gray-200 rounded-lg overflow-hidden">
        <div class="text-center bg-gray-900 p-3 text-4xl">
        <i class="fa fa-user fa-fw"></i>
        </div>
      <div class="p-2 pl-6 pr-6">
       <span class="w-full text-center text-4xl block text-white">{{$this->totalJobTypes() - $this->totalusedJobs() }}</span>
       <span class="w-full text-center text-sm block text-gray-300">{{100-round($this->totalusedJobs() / $this->totalJobTypes() *100,2)}}% faltantes</span>
      </div>
     </div>
    </div>



   <div class="flex bg-indigo-300 p-1 rounded-lg {{$vtable}}">

   <!-- nuevo -->
       <a href="#" title="Nuevo" wire:click="create"
       class="bg-indigo-600 text-white w-8 h-8 inline-flex justify-center items-center float-left   {{$vtable}}  hover:opacity-80   rounded-full m-1">
           <i class="fa fa-plus fa-fw "></i>
       </a>

       <input id="search" name="search_account" wire:model="search_account" placeholder="Buscar por cuenta" class="bg-indigo-100 rounded-md pl-5 pr-5 m-1 " >
       <input id="search" name="search_name" wire:model="search_name" placeholder="Buscar por Nominal" class="bg-indigo-100  rounded-md pl-5 pr-5  m-1 " >
       <input id="search" name="search_salary" wire:model="search_salary" placeholder="Buscar por salario" class="bg-indigo-100 rounded-md pl-5 pr-5  m-1 " >

   </div><br>

 <!-- links -->
   <div class="bg-indigo-300 pl-3 pr-10 text-sm fixed bottom-0 w-full"> {{ $list->links() }}</div>



    <table class="w-full text-center mr-10 rounded-lg overflow-hidden shadow-md max-sm:hidden">
        <thead >
            <tr class="bg-gray-300 border-gray-400 font-bold text-xs ">

                <th class="p-3">CUENTA</th>
                <th class="p-3">NOMINAL</th>
                <th class="p-3">SALARIO</th>
                <th class="p-3">CANTIDAD</th>
                <th class="p-3">OPCIÓNES</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($list as $item )
            @php
            $color=( $this->usedJobs($item->id) != $item->amount )? "red-600":"black";
            @endphp

            <tr class="border-b bg-white hover:bg-gray-100 text-{{$color}}">

            <td>{{$item->account}}</td>
            <td>{{$item->name}}</td>
            <td>${{number_format($item->salary,2,'.',',')}}</td>
            <td>{{$this->usedJobs($item->id)}} / {{$item->amount}}</td>
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

<div class="{{$vform}} bg-white mr-10 mt-5  flex flex-col shadow-lg lg:w-1/3 rounded-lg overflow-hidden">

    <div class="bg-indigo-300 font-bold p-2 text-center">
        @if($vmode=="insert")
        Nuevo
        @else
        Modificar
        @endif
    </div>



    <x-icj.input-txt label="Id" value="my_id" type="hidden" />
    <span class="ml-3">{{$my_id}}</span>
    <x-icj.input-txt label="Cuenta" value="account" />
    <x-icj.input-txt label="Nombre del Puesto Nominal" value="name" />
    <x-icj.input-txt label="Salario" value="salary" type="number"/>
     <x-icj.input-txt label="Cantidad" value="amount" type="number"/>


    <div class="flex flex-wrap gap-2 justify-center">

     @if($vmode=="insert")
        <x-icj.button-store />
    @else
        <x-icj.button-update/>
    @endif
        <x-icj.button-cancel/>

      </div>
    <br><br>
    </div>


</div>

