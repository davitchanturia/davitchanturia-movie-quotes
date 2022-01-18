@props(['name'])

<button type="submit" 
        class="block bg-gray-900 text-white font-semibold rounded py-2 px-4 hover:bg-gray-400 mt-6 hover:text-black transition-all capitalize">
        {{ $slot }}
</button>