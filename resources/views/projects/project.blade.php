:: <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskOrbit</title>
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

    <body class="bg-gray-100">

        @extends('layouts.master')

        @section('content')
        <x-guest-layout>

            <form method="POST" action="{{ route('project.add') }}">
                @csrf

                <div>
                    <x-input-label for="projectsname" :value="__('Project name')" />

                    <x-text-input id="projectsname" class="block mt-1 w-full" type="text" name="projectsname" :value="old('projectsname')" required autofocus autocomplete="projectsname" />

                    <x-input-error :messages="$errors->get('projectsname')" class="mt-2" />
                </div>


                <div class="mt-4">
                    <x-input-label for="description" :value="__('Description')" />
                    <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autocomplete="description" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>



                <div class="flex items-center justify-end mt-4">


                    <button class="ms-4 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="background-color: #ff5f00">
                        {{ __('Add Project') }}
                    </button>
                </div>
            </form>
        </x-guest-layout>


        @endsection

    </body>
    </html>

</body>
</html>







