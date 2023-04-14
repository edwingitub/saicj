<div>

    <div class="bg-gray-700 shadow-lg font-bold text-gray-300 text-sm  fixed w-full">
        <span><a href="{{url("dashboard")}}">Inicio</a> / <a href="{{url('menu_administracion')}}">Administración</a> / Puestos Funcionales</span>
        <span class="float-right pr-14">SAICJ V.1</span><br>

        <i class="fa fa-search fa-fw absolute pt-3 "></i>
        <input id="search" name="search" wire:model="search" placeholder="Empleado" class="pl-6 bg-transparent border-0 focus:outline-none  p-2" >
        
        <i class="fa fa-search fa-fw  pt-3 "></i>
        <input id="search" name="search_count" wire:model="search_account" placeholder="Cuenta" class="pl-6 bg-transparent border-0 focus:outline-none  p-2" >

        <i class="fa fa-search fa-fw  pt-3 "></i>
        <input id="search" name="search_count" wire:model="search_subaccount" placeholder=" Sub Cuenta" class="pl-6 bg-transparent border-0 focus:outline-none  p-2" >

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
    <div class="text-4xl mb-10   ml-11 mt-24"> <a href="{{url('menu_administracion')}}"><i class="fa fa-arrow-circle-left fa-fw"></i></a> Puestos Funcionales </div>

    <a href="#" wire:click="create" class="bg-indigo-500 text-white  p-2 ml-12 mb-5 {{$vtable}} w-24 hover:opacity-80">
        <i class="fa fa-plus fa-fw "></i> Nuevo
    </a> 





    <!-- tabla -->
    <div class="p-12  {{$vtable}}" >
    <table class="table-auto w-full text-sm text-center shadow-lg ">
        <thead class="border-b-4  text-gray-700 bg-indigo-300">
            <tr>
                <th>Foto</th>
                <th>Cuenta</th>
                <th>Sub Cuenta</th>
                <th>Funcional</th>
                <th>Nominal</th>
                <th>Empleado</th>
                <th>Jefe</th>
                <th>Salario</th>
                <th>Unidad Organizativa</th>
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
            <td>{{$item->jobType->account}}</td>
            <td>{{$item->subaccount}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->jobType->name}}</td>
            <td>{{$item->employee->first_name}} {{$item->employee->first_last_name}}</td>
            <td>{{($item->boss==1)?"Si":"No"}}</td>
            <td>${{number_format($item->jobType->salary,2,'.',',')}}</td>
            <td>{{$item->office->name}}</td>
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
    <x-icj.input-txt label="Sub Cuenta" value="subaccount" />
    <x-icj.input-txt label="Nombre" value="name" />
    <x-icj.input-select label="Nominal"   value="job_type_id"   :cat="$cat_job_types" option_value="id" option_label="name"/>
    <x-icj.input-select label="Empleado" value="employee_id" :cat="$cat_employees" option_value="id" option_label="name"/>
    <x-icj.input-select label="Unidad"   value="office_id"   :cat="$cat_offices" option_value="id" option_label="name"/>
    <x-icj.input-txt label="Es Jefe" value="boss" type="checkbox" />
   
    
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
