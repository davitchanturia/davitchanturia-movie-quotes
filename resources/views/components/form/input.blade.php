@props(['name', 'type' => 'text'])

<div>

     <input type="{{$type}}" 
            name="{{$name}}" 
            class="border border-gray-200 rounded p-2 w-full" 
            {{ $attributes( ['value' => old($name)] ) }}
            >

     <x-form.error :name="$name"/>
     
</div>