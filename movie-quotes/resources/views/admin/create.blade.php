<x-layout>

    <x-settings>

      <div class="mt-10">
        
        <x-adminpanel.heading> Create Movie </x-adminpanel.heading>
        
          <form action="/admin/movie" method="POST" enctype="multipart/form-data"
                class="border border-gray-200 p-6 rounded-xl mt-7 max-w-md m-auto">
              @csrf

              @foreach (config('app.available_locales') as $item)
                <x-form.label title="name[{{$item }}]" />
                <x-form.input name="name[{{ $item }}]" />
              @endforeach

              <x-form.label title="slug" />
              <x-form.input name="slug" />

              <x-form.label title="Image" />
              <x-form.input name="thumbnail" type="file" /> 
              

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

              

              
              <x-form.button> public </x-form.button>
          </form>
      </div>

    </x-settings>
 
</x-layout>


