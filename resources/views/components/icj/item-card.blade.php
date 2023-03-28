@props(['color'=>'indigo'])
<div class="lg:w-1/6 w-full  ">
    <div class=" shadow-lg hover:scale-105 hover:shadow-4xl border-b  border-{{$color}}-200  ">

       

        <!-- tema -->
        <div class=" font-bold  text-{{$color}}-900    bg-{{$color}}-400  text-center  p-2">
          {{$header}}
        </div>
         <!-- detalle -->
        <div class=" bg-white p-6 pb-10 ">
            {{$detail}}
        </div>

         <!-- opciónes -->
         <div class="flex flex-wrap justify-end bg-white">
            {{$options}}
          </div>

        

    </div>
</div> 