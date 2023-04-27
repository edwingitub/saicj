<div>
    <div class="bg-orange-200 text-xs font-bold block float-left p-2 mr-2 ml-10 mt-10  rounded-tl-lg rounded-tr-lg ">
        Solicitadas

    </div>

    <div class="bg-orange-400  text-xs text-orange-800 block float-left p-2 mr-2  mt-10 font-bold text-gray-900 rounded-tl-lg rounded-tr-lg">
        Autorizadas

    </div>

    <div class="bg-orange-400 text-xs text-orange-800 block float-left p-2 mr-2  mt-10 font-bold  rounded-tl-lg rounded-tr-lg ">
        Tramitadas

    </div>

    <div class="bg-orange-200 clear-both ml-10 p-2 mr-10">




     <!-- tabla -->
     <div class="p-4  {{$vtable}}" >
    <table class="table-auto w-full text-sm text-center shadow-lg rounded-lg overflow-hidden">
        <thead class="border-b-4  text-gray-700 bg-indigo-300">
            <tr>
                <th>Foto</th>
                <th>Solicitante</th>
                <th>Jefe</th>
                <th>Tipo</th>
                <th>Inicio</th>
                <th>Fin</th>
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
            <td>{{$item->boss_first_name}} {{$item->boss_second_name}} {{$item->boss_first_last_name}} {{$item->boss_second_last_name}}</td>
            <td>{{$item->license_type->name}}</td>
            <td>{{$item->start}}</td>
            <td>{{$item->end}}</td>
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
