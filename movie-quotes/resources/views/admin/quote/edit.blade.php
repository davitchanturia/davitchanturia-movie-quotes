<x-layout>

    <x-settings>

      <div class="mt-10">
        
        <x-adminpanel.heading> Edit Quote </x-adminpanel.heading>
        
          <form action="{{ route('quote.update', [$quote->id]) }}" method="POST" enctype="multipart/form-data"
                class="border border-gray-200 p-6 rounded-xl mt-7 max-w-md m-auto">
              @csrf
              @method('PATCH')
              
              @foreach (config('app.available_locales') as $item)
                <x-form.label title="name[{{$item }}]" />
                <x-form.input name="name[{{ $item }}]" :value="$quote->getTranslation('name', $item)"/>
              @endforeach

              <x-form.label title="Image" />
              <x-form.input name="thumbnail" type="file" /> 
              <div class="p-4">
                <img src="{{ asset('storage/'. $quote->thumbnail) }}" width="100" class="rounded-xl">
              </div> 
              
              <x-form.button> update </x-form.button>
          </form>
      </div>

    </x-settings>
 
</x-layout>



