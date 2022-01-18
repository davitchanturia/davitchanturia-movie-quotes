@props(['title'])

<label for="{{$title}}" 
        class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-6">
        {{ ucwords($title) }}
</label>