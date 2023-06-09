@props(['label','value','type'=>'text'])
<div class="m-3 flex flex-col">
  <span class="font-bold">{{$label}}</span>
  <input  id="{{$value}}" name="{{$value}}" type="{{$type}}" wire:model.lazy="{{$value}}" placeholder="{{$label}}" class="bg-indigo 100 p-2 bg-indigo-100 rounded-lg border-none"><br>
   @error($value) <span class="error text-red-600">{{ $message }}</span> @enderror
</div>
