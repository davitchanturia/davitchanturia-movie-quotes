<x-layout>

    <x-settings>

      <div class="mt-10">
        
        <x-adminpanel.heading> Create Movie </x-adminpanel.heading>
        
          <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data"
                class="border border-gray-200 p-6 rounded-xl mt-7 max-w-md m-auto">
              @csrf

              @foreach (config('app.available_locales') as $item)
                <x-form.label title="name[{{$item }}]" />
                <x-form.input name="name[{{ $item }}]" />
              @endforeach

              <x-form.label title="slug" />
              <x-form.input name="slug" />
              
              <x-form.button> add </x-form.button>
          </form>
      </div>

    </x-settings>
 
</x-layout>



