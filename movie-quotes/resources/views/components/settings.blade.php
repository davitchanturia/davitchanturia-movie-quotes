<section>

    <div class="flex">

        <aside class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <div class="flex-1 flex flex-col min-h-0 bg-gray-900">
              <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
               
                <nav class="mt-5 flex-1 px-2 space-y-1">    
                  
                  <x-adminpanel.nav-item :link="route('homepage')">
                    Main Page
                  </x-adminpanel.nav-item>

                  <x-adminpanel.nav-item :link="route('admin.movies')">
                    Movie Dashboard
                  </x-adminpanel.nav-item>

                  <x-adminpanel.nav-item :link="route('admin.quotes')">
                    Quote Dashboard
                  </x-adminpanel.nav-item>

                  <x-adminpanel.nav-item :link="route('movie.create')">
                    New Movie
                  </x-adminpanel.nav-item>

                  <x-adminpanel.nav-item :link="route('quote.create')">
                    New Quote
                  </x-adminpanel.nav-item>
                 
                </nav>
      
              </div>
            </div>
        </aside>

        <main class="flex-1">
             {{$slot}}
        </main>    
    </div>


</section>