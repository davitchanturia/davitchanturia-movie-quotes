<x-layout>

    <section>

        <div class="max-w-md  m-auto">
            <h1 class="mt-10 capitalize text-white"> {{ $RandomMovie->name }} </h1>

            <x-card :title="$RandomMovie->quote->first()" />
            <x-card :title="$RandomMovie->quote->first()" />
            <x-card :title="$RandomMovie->quote->first()" />
        </div>


        <x-language />

    </section>

</x-layout>