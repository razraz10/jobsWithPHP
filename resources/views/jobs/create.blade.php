<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">some details</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field >
                        <x-form-label for="title">Title</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="title" id="title"  placeholder="king"></x-form-input>
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field >
                        <x-form-label for="salary">salary</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="salary" id="salary"  placeholder="1,000,000,000 USD for month"></x-form-input>
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                  

                    {{-- <div class="mt-10">

                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-700 italic">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                    </div> --}}



                </div>
            </div>




        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-btn>Save</x-form-btn>
        </div>
    </form>



</x-layout>
