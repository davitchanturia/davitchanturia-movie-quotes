@props(['link'])

<a href="{{$link}}"
   class="text-white hover:bg-gray-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
   {{$slot}}
</a>