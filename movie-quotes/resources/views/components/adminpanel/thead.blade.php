<thead class="bg-gray-50">
    <tr>

      <x-adminpanel.head class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Title
      </x-adminpanel.head>

      <x-adminpanel.head class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        {{ $slot }}
      </x-adminpanel.head>


      <x-adminpanel.head class="relative">
          <span class="sr-only">Delete</span>
      </x-adminpanel.head>

      <x-adminpanel.head class="relative">
          <span class="sr-only">Delete</span>
      </x-adminpanel.head>

    </tr>
  </thead>