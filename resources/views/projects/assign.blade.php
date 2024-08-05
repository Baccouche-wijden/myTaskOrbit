<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <title>TaskOrbit</title>
</head>
<body class="bg-gray-100">

    @extends('layouts.master')

    @section('content')

        <x-guest-layout>


            <form method="POST" action="{{ route('projects.assign') }}">
                @csrf

                <div>
                    <x-input-label for="user_id" :value="__('User')" />
                    <x-select name="user_id" id="user_id">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </x-select>

                </div>

                <div class="mt-4">
                    <x-input-label for="project_id" :value="__('Project')" />
                    <x-select name="project_id" id="project_id">
                        @foreach ($projects as $project)
                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                        @endforeach
                    </x-select>

                </div>

                <div class="flex items-center justify-end mt-4">


                    <button class="ms-4 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="background-color: #ff5f00">
                        {{ __('Assign Project') }}
                    </button>
                </div>
            </form>
        </x-guest-layout>

    @endsection


</body>
</html>
