@props(['label','value','cat','option_value','option_label'])
<div class="m-3 flex flex-col">
  <span class="font-bold">{{$label}}</span>
  <select id="{{$value}}" name="{{$value}}"   wire:model="{{$value}}" placeholder="Correo" class="bg-indigo 100    p-2 bg-indigo-100">
    @foreach($cat as $item)
    <option value="{{$item->$option_value}}">{{$item->$option_label}}</option>
    @endforeach  
  </select>   
      <br>
   @error($value) <span class="error  text-red-600">{{ $message }}</span> @enderror
</div>