<div>
    <!-- tabla -->
    <div class="p-2">
    <table class="table-auto w-full text-sm text-center border-collapse border">
        <thead class="bg-black text-gray-300">
            <tr>
                <th>Foto</th>
                <th>Puesto</th>
                <th>Empleado</th>
                <th>Unidad Organizativa</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($list as $item )
            <tr class="border-b">
            <td> <img src='{{asset($item->employee->photo)}}' class="w-14 h-14  border-2 border-white rounded-full  object-cover m-auto mt-2 mb-2"></td>
            <td>{{$item->name}}</td>
            <td>{{$item->employee->first_name}} {{$item->employee->first_last_name}}</td>
            <td>{{$item->office->name}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
<!-- fin tabla-->


</div>
