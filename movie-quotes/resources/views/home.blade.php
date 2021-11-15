<x-layout>

    <section>


         {{-- if პირობით ვამოწმებთ თუ არის ბაზაში ერთი ფილმი მაინც --}}
        @if ($films->count())
   
        <div class="w-2/4 h-screen m-auto justify-center align-middle">
                <div id="card" class="w-3/5 m-auto pt-32">
                    
                    <img class="w-full h-64 rounded-md object-cover" 
                        src="{{ asset('storage/'. $RandomMovie->quote->first()->thumbnail) }}"
                    >

                    <div class="pt-9">
                        <h1 class="text-center text-white text-xl"> {{$RandomMovie->quote->first()->getTranslation('name', 'en')}}  </h1>
                
                        <a class="block text-center text-white mt-10 underline" href="{{ route('list', [$RandomMovie->slug]) }}"> {{ $RandomMovie->getTranslation('name', 'en')}} </a>
                    </div>

                </div>
            </div>
    
            <x-language />

        @else   
     
            <p class="text-center"> {{_('no Movies yet, please check later') }}</p>
     
        @endif


       
    </section>

</x-layout>
 
