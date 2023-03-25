@props(['my_id'])
<button wire:click="delete({{$my_id}})"  class="p-2  text-red-700 hover:bg-red-200 m-1" onclick="confirm('¿Esta seguro de eliminar?') || event.stopImmediatePropagation()" > 
  <i class="fa fa-trash fa-fw"></i>  
</button>