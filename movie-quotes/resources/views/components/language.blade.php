<div id="language" >
    
    @if (count(config('app.languages')) >1 )
    
        @foreach (config('app.languages') as $langLocale => $langName)
        
            <x-circle link="{{ url()->current() }}?change_language={{ $langLocale }}"> 
               {{$langLocale}} 
            </x-circle>

        @endforeach

    @endif

    {{-- <x-circle>EN</x-circle>
    <x-circle class="mt-3">GE</x-circle> --}}
</div>