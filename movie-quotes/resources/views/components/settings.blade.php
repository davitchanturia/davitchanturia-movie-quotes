<section>

    <div class="flex">

        <aside class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <div class="flex-1 flex flex-col min-h-0 bg-indigo-700">
              <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
               
                <nav class="mt-5 flex-1 px-2 space-y-1">           

                  <a href="{{ route('homepage') }}"
                    class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    Home Page
                  </a>

                  <a href="{{ route('admin.movies') }}"
                    class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    Movie Dashboard
                  </a>

                  <a href="{{ route('movie.create') }}"
                    class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    Create Movie
                  </a>

                  <a href="{{ route('quote.create') }}"
                    class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    Create Quote
                  </a>
                 
                
                </nav>
      
              </div>
            </div>
        </aside>

        <main class="flex-1">
             {{$slot}}
        </main>    
    </div>


</section>