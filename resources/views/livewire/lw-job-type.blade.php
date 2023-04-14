<div>

    <div class="bg-gray-700 shadow-lg font-bold text-gray-300 text-sm  fixed w-full">
        <span><a href="{{url("dashboard")}}">Inicio</a> / <a href="{{url('menu_administracion')}}">Administración</a> / Puestos Nominales</span>
        <span class="float-right pr-14">SAICJ V.1</span><br>

        <i class="fa fa-search fa-fw absolute pt-3 "></i>
        <input id="search" name="search" wire:model="search" placeholder="Buscar" class="pl-6 bg-transparent border-0 focus:outline-none  p-2" >

        <i class="fa fa-search fa-fw  pt-3 "></i>
        <input id="search" name="search_count" wire:model="search_account" placeholder="Cuenta" class="pl-6 bg-transparent border-0 focus:outline-none  p-2" >

        <br>



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
    <div class="text-4xl mb-10   ml-11 mt-24"> <a href="{{url('menu_administracion')}}">
        <i class="fa fa-arrow-circle-left fa-fw"></i></a>
         Puestos Nominales
    </div>

    <a href="#" wire:click="create" class="bg-indigo-500 text-white  p-2 ml-12 mb-3 {{$vtable}} w-24 hover:opacity-80">
        <i class="fa fa-plus fa-fw "></i> Nuevo
    </a>




    <!-- tabla -->
    <div class="p-12  {{$vtable}}" >

        
     <div class="flex float-left mr-4 mb-4    bg-green-700 text-green-200">
        <div class="text-center bg-green-900 p-3 text-4xl">
        <i class="fa fa-users fa-fw"></i>
        </div>
      <div class="p-2 pl-6 pr-6">
       <span class="w-full text-center text-4xl block text-white">{{$this->totalusedJobs()}} / {{$this->totalJobTypes()}}</span>
       <span class="w-full text-center text-sm block text-green-300">{{round($this->totalusedJobs() / $this->totalJobTypes() *100,2)}}% creadas</span>
      </div>
     </div>

     <div class="flex float-left mr-4 mb-4  bg-gray-700 text-gray-200">
        <div class="text-center bg-gray-900 p-3 text-4xl">
        <i class="fa fa-user fa-fw"></i>
        </div>
      <div class="p-2 pl-6 pr-6">
       <span class="w-full text-center text-4xl block text-white">{{$this->totalJobTypes() - $this->totalusedJobs() }}</span>
       <span class="w-full text-center text-sm block text-gray-300">{{100-round($this->totalusedJobs() / $this->totalJobTypes() *100,2)}}% faltantes</span>
      </div>
     </div>

    <table class="table-auto w-full text-sm text-center shadow-lg ">
        <thead class="border-b-4  text-gray-700 bg-indigo-300">
            <tr>

                <th>Cuenta</th>
                <th>Nominal</th>
                <th>Salario</th>
                <th>cantidad</th>
                <th>Opciónes</th>
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

<div class="{{$vform}} bg-white mr-10 mt-5 ml-10 flex flex-col shadow-lg lg:w-1/4">

    <div class="bg-indigo-300 font-bold p-2 text-center">
        @if($vmode=="insert")
        Nuevo
        @else
        Modificar
        @endif
    </div>



    <x-icj.input-txt label="Id" value="my_id" type="hidden" />
    <span class="ml-3">{{$my_id}}</span>
    <x-icj.input-txt label="Sub Cuenta" value="account" />
    <x-icj.input-txt label="Nombre" value="name" />
    <x-icj.input-txt label="Salario" value="salary" />
     <x-icj.input-txt label="Cantidad" value="amount" />


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

