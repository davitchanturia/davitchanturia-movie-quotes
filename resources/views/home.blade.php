<x-layout>

    <section>

        @auth
            <div class="w-56 absolute right-9 py-4 ">
                <h1 class="inline text-white px-4 ">Logged in admin:  {{ auth()->user()->name}} </h1>
            </div>
        @endauth

        @if ($films->count())
   
        <div class="w-2/4 h-screen m-auto justify-center align-middle">
                <div id="card" class="w-3/5 m-auto pt-32">
                    
                    <img class="w-full h-64 rounded-md object-cover" alt=""
                        src="{{ asset('storage/'. $relQuote->thumbnail) }}"
                    >

                    <div class="pt-9">
                        <h1 class="text-center text-white text-xl"> {{$relQuote->getTranslation('name', $local )}}  </h1>
                
                        <a class="block text-center text-white mt-10 underline" href="{{ route('list', [$RandomMovie->slug]) }}"> {{ $RandomMovie->getTranslation('name', $local )}} </a>
                    </div>

                </div>
            </div>
    
            <x-language />

        @else   
     
            <p class="text-center"> {{_('no Movies yet, please check later') }}</p>
     
        @endif


       
    </section>

</x-layout>
 
