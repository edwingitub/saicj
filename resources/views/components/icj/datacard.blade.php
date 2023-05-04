<div>

  <div class="flex container flex-col">
       <div class="bg-blue-500 m-auto mt-32 h-32 w-60 p-0 text-center">
        <img src='{{ asset("img/logogoes.png")}}'
        class="w-20 h-auto object-cover m-auto relative">

        <img src='{{ asset($data->employee->photo)}}' onerror="this.src='{{asset('img/user.png')}}';"
        class="w-20 h-20  border-2 border-white rounded-full  object-cover m-auto relative  shadow-2xl">
       </div>
       <div class="bg-blue-100 m-auto  h-36 w-60 p-5 pt-16 text-center text-2xl ">
         {{$data->employee->first_name}} {{$data->employee->first_last_name}}<br>
         <span class="text-sm">{{$data->name}}</span><br>
         <span class="text-sm">{{$data->employee->phone}}</span>

    </div>

    <div class="bg-blue-500 text-blue-100 m-auto  h-32 w-60 p-5 pt-16 text-center shadow-2xl">
       Instituto Crecer Juntos

       </div>
  </div>


</div>
