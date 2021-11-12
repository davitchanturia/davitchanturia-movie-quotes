@props(['name'])

<button type="submit" 
        class="block bg-indigo-400 tex-white font-semibold rounded py-2 px-4 hover:bg-indigo-700 mt-6 hover:text-white transition-all capitalize">
        {{ $slot }}
</button>