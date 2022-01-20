<div id="language" 
     class="fixed left-10 top-1/2 transform -translate-y-1/2"
>
    
    @if (count(config('app.available_locales')) > 1 )
    
        @foreach (Config::get('app.available_locales') as $lang )

            <x-circle 
            link="{{ route('homepage', ['change_language='.$lang]) }}"> 
                {{$lang}} 
            </x-circle> 

        @endforeach

    @endif

</div>

