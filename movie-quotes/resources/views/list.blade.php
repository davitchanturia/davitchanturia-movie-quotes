<x-layout>

    <section>
        
        @php
            $local = App::getLocale()
        @endphp

        <div class="mt-10 ml-10">
            <a href="{{ route('homepage') }}" class="text-white capitalize ">go back</a>
        </div>

        <div class="max-w-md  m-auto">

            <h1 class="mt-10 capitalize text-white"> {{ $RandomMovie->getTranslation('name', $local )}} </h1>
            @foreach ($RandomMovie->quote as $item)
                <x-card :title="$item->name" 
                        :foto="asset('storage/'. $item->thumbnail)" />
            @endforeach
            
          
        </div>


        <x-language />

    </section>

</x-layout>