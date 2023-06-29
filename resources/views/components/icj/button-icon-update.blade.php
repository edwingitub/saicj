@props(['my_id'])
<button  wire:click="edit({{$my_id}})"  class=" p-2 text-blue-700 hover:bg-blue-200 m-1 rounded-full inline-flex justify-center items-center w-8 h-8">
    <i class="fa fa-pen fa-fw"></i>
  </button>
