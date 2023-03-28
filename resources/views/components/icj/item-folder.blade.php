@props(['color'=>'orange'])
<div class="lg:w-1/4 w-full ">
    <div class=" shadow-lg hover:scale-105 hover:shadow-2xl border-b-2  border-{{$color}}-400  ">

        <div class="h-5 w-32 bg-{{$color}}-300 rounded-tr-lg"></div>

        <!-- tema -->
        <div class=" font-bold  text-{{$color}}-900 p-2   bg-{{$color}}-300 border-b-2  border-{{$color}}-400">
          {{$header}}
        </div>
         <!-- detalle -->
        <div class=" bg-{{$color}}-100 p-2 pb-10 ">
            {{$detail}}
        </div>

         <!-- opciónes -->
         <div class="flex flex-wrap justify-end bg-{{$color}}-100">
            {{$options}}
          </div>

        

    </div>
</div> 