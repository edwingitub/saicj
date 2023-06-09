@props(['color'=>'indigo'])
<div class="lg:w-1/4 w-full   ">
    <div class=" hover:scale-105 hover:shadow-2xl   border-{{$color}}-400 bg-white rounded-2xl overflow-hidden ">

        <!-- tema -->
        <div class=" font-bold  text-lg text-{{$color}}-900 p-4   bg-{{$color}}-400 border-b-2  border-{{$color}}-400">
          {{$header}}
        </div>
         <!-- detalle -->
        <div class="  p-4 pb-10  bg-{{$color}}-200"">
            {{$detail}}
        </div>

         <!-- opciónes -->
         <div class="flex flex-wrap justify-end  bg-{{$color}}-200"">
            {{$options}}
          </div>

    </div>
</div>
