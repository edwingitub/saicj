@props(['label','value'])
<div class="m-3 flex flex-col">
  <span class="font-bold">{{$label}}</span>
  <select id="{{$value}}" name="{{$value}}"   wire:model="{{$value}}" placeholder="{{$label}}" class="bg-indigo 100    p-2 bg-indigo-100">
    <option value=1>Si</option>
    <option value=0>No</option>
  </select>
      <br>
   @error($value) <span class="error  text-red-600">{{ $message }}</span> @enderror
</div>
