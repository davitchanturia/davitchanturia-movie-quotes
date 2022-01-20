<x-layout>

    <x-settings>

      <div class="mt-10">
        
        <x-adminpanel.heading> Edit Movie </x-adminpanel.heading>
        
          <form action="{{ route('movie.update', [$movie->id]) }}" method="POST" enctype="multipart/form-data"
                class="border border-gray-200 p-6 rounded-xl mt-7 max-w-md m-auto">
              @csrf
              @method('PATCH')

              @foreach (config('app.available_locales') as $item)
                <x-form.label title="name[{{$item }}]" />
                <x-form.input name="name[{{ $item }}]" :value="$movie->getTranslation('name', $item)"/>
              @endforeach
              
              <x-form.button> update </x-form.button>
          </form>
      </div>

    </x-settings>
 
</x-layout>



