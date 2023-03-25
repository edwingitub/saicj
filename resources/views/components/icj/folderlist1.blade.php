 
 @props(['header','detail','options'])

 <div class="lg:w-1/4 w-full ">
    <div class="border-gray-200        border-gray-300 shadow-lg hover:scale-105 hover:shadow-2xl border-b border-l border-orange-400  ">

        <div class="h-5 w-32 bg-orange-300 rounded-tr-lg"></div>

        <!-- tema -->
        <div class="bg-orange-300 text-orange-900 p-2  text-lg bg-orange-300 border-b-2  border-orange-400">
          {{$header}}
        </div>
         <!-- detalle -->
        <div class=" bg-orange-100 p-2 pb-10 ">
            {{$detail}}
        </div>

         <!-- opciónes -->
         <div class="flex flex-wrap justify-end bg-orange-100">
            {{$options}}
          </div>

        

    </div>
</div> 