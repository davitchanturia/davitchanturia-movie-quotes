<x-layout>

    <x-settings>
      <div class="md:pl-64 flex flex-col flex-1">
      
        <main class="flex-1">
  
          <div class="py-6">
            
            <x-adminpanel.heading> Manage Quotes </x-adminpanel.heading>
  
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
  
               <div class="flex flex-col">
                 
                  <div class="mt-5 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">

                          {{-- <x-adminpanel.thead /> fdsfds</x-adminpanel.thead> --}}
  
                          <x-adminpanel.thead> Belongs to </x-adminpanel.thead>
                            <tbody>
                                @foreach ($quote as $item)
                                    <tr class="bg-white">
  
                                      <x-adminpanel.data>
                                          {{$item->name}}
                                      </x-adminpanel.data>

                                      <x-adminpanel.data>
                                        {{$item->movie->getTranslation('name', 'en')}}
                                    </x-adminpanel.data>

                                      <x-adminpanel.data class="font-medium text-right">
                                          <a href="#" class="text-green-600 hover:text-green-900">Edit</a>
                                      </x-adminpanel.data>
  
                                      <x-adminpanel.data class="font-medium text-right">
                                        <form action="{{ route('quote.delete', [$item->id]) }} " method="post">
                                          @csrf
                                          @method('DELETE')

                                          <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                      </x-adminpanel.data>
  
                                    </tr>
                                @endforeach
                
                            </tbody>

                        </table>
                      </div>
                    </div>
                  </div>

                </div>
            </div>
            
          </div>

        </main>
      </div>
    </x-settings>
 
</x-layout>