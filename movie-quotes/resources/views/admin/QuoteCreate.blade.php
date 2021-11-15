<x-layout>

    <x-settings>

      <div class="mt-10">
        
        <x-adminpanel.heading> Create Quote </x-adminpanel.heading>
        
            <form action="{{ route('quote.store') }}" method="POST" enctype="multipart/form-data"
                class="border border-gray-200 p-6 rounded-xl mt-7 max-w-md m-auto">
                @csrf

                @foreach (config('app.available_locales') as $item)
                  <x-form.label title="name[{{$item }}]" />
                  <x-form.input name="name[{{ $item }}]" />
                @endforeach

                <x-form.label title="Image" />
                <x-form.input name="thumbnail" type="file" /> 
              

             
                <x-form.label title="movie" />

                <select name="movie_id" id="movie" class="max-w-sm">
                    
                    @php
                       $films = \App\Models\Movie::all()
                    @endphp
                                       
                    @foreach ($films as $film)
                        <option value="{{ $film->id }}" 
                                class="overflow-hidden">
                                {{ old('movie_id') == $film->id ? 'selected' : '' }}

                            {{ $film->name }}

                        </option>
                    @endforeach  

                    <x-form.error name="movie" />
                </select>

             

              {{-- // <x-form.label title="Title/ka" />
              // <x-form.input name="name.ka"  />

              // <x-form.label title="slug" />
              // <x-form.input name="slug" />

              // <x-form.label title="Image" />
              // <x-form.input name="thumbnail" type="file" /> --}}

             

              {{-- <x-form.label title="en" />
              <x-form.input name="first/en" /> 
              
              <x-form.label title="ka" />
              <x-form.input name="first/ka" />  <br>

              <x-form.label title="en" />
              <x-form.input name="second/en" /> 

              <x-form.label title="ka" />
              <x-form.input name="second/ka" /> 
               --}}

              

              
              <x-form.button> add </x-form.button>
          </form>
      </div>

    </x-settings>
 
</x-layout>
