<x-layout>

  <div class="bg-gray-900 w-full h-screen ">
    <div class="pt-32 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <form class="space-y-6" action="#" method="POST">

          <div>
            <x-form.label title="Email Adress" />
            <x-form.input name="email" type="email" />
          </div>
  
          <div>
            <x-form.label title="password" />
            <x-form.input name="password" type="password" />
          </div>
  
          <div>
           <x-form.button>Sign in</x-form.button>
          </div>
        </form>

        </div>
      </div>
    </div>
  </div>
    
  </div>
</x-layout>

