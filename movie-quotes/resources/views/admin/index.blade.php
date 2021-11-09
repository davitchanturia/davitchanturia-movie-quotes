<x-layout>


    <!-- This example requires Tailwind CSS v2.0+ -->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div>
    {{-- <div class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">
  
      <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>
  
      
      <div class="relative flex-1 flex flex-col max-w-xs w-full bg-indigo-700">
        
        <div class="absolute top-0 right-0 -mr-12 pt-2">
          <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
            <span class="sr-only">Close sidebar</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
  
        <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
          <div class="flex-shrink-0 flex items-center px-4">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg" alt="Workflow">
          </div>
          <nav class="mt-5 px-2 space-y-1">
            <!-- Current: "bg-indigo-800 text-white", Default: "text-white hover:bg-indigo-600 hover:bg-opacity-75" -->
            <a href="#" class="bg-indigo-800 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/home -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Dashboard
            </a>
  
            <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/users -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
              Team
            </a>
  
            <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/folder -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
              </svg>
              Projects
            </a>
  
            <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/calendar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              Calendar
            </a>
  
            <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/inbox -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
              </svg>
              Documents
            </a>
  
            <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
              Reports
            </a>
          </nav>
        </div>
        <div class="flex-shrink-0 flex border-t border-indigo-800 p-4">
          <a href="#" class="flex-shrink-0 group block">
            <div class="flex items-center">
              <div>
                <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </div>
              <div class="ml-3">
                <p class="text-base font-medium text-white">
                  Tom Cook
                </p>
                <p class="text-sm font-medium text-indigo-200 group-hover:text-white">
                  View profile
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
  
      <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Force sidebar to shrink to fit close icon -->
      </div>
    </div> --}}
  
    <!-- Static sidebar for desktop -->
    <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
      <div class="flex-1 flex flex-col min-h-0 bg-indigo-700">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
         
          <nav class="mt-5 flex-1 px-2 space-y-1">           
            <x-adminpanel.sidebar-element> Dashboard </x-adminpanel.sidebar-element>
            <x-adminpanel.sidebar-element> Movies </x-adminpanel.sidebar-element>
            <x-adminpanel.sidebar-element> create </x-adminpanel.sidebar-element>
          </nav>

        </div>
      </div>
    </div>

    <div class="md:pl-64 flex flex-col flex-1">
      
      <main class="flex-1">

        <div class="py-6">
          <div class="max-w-7xl mx-auto mt-5 px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Manage Movies</h1>
          </div>

          <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

            <!-- This example requires Tailwind CSS v2.0+ -->
             <div class="flex flex-col">
                <div class="mt-5 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                          <tr>

                            <x-adminpanel.head class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </x-adminpanel.head>

                            <x-adminpanel.head class="relative">
                                <span class="sr-only">Delete</span>
                            </x-adminpanel.head>

                            <x-adminpanel.head class="relative">
                                <span class="sr-only">Delete</span>
                            </x-adminpanel.head>

                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($movie as $item)
                                <tr class="bg-white">

                                    <x-adminpanel.data>
                                        {{$item->name}}
                                    </x-adminpanel.data>
                                
                                    <x-adminpanel.data class="font-medium text-right">
                                        <a href="#" class="text-green-600 hover:text-green-900">Edit</a>
                                    </x-adminpanel.data>

                                    <x-adminpanel.data class="font-medium text-right">
                                        <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
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

  </div>
  


</x-layout>