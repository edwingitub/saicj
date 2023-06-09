@props(['my_id'])
<button wire:click="delete({{$my_id}})"  class="p-2  text-green-700 hover:bg-green-200 m-1" onclick="confirm('¿Esta seguro de eliminar?') || event.stopImmediatePropagation()" >
  <i class="fa fa-paper-plane fa-fw"></i>
</button>
