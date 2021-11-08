<x-layout>

    <section>

        <div class="max-w-md  m-auto">
            <h1 class="mt-10 capitalize text-white"> {{ $RandomMovie->name }} </h1>
            @foreach ($RandomMovie->quote as $item)
                <x-card :title="$item->name" />
            @endforeach
            
          
        </div>


        <x-language />

    </section>

</x-layout>