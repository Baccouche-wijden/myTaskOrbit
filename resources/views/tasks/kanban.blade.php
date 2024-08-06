<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskOrbit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .kanban-task {
            background: #fff;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    @extends('layouts.master')

    @section('content')

    <div class="container mx-auto p-4">
        <div class="kanban-board grid grid-cols-1 md:grid-cols-3 gap-4">

            <!-- To Do -->
            <div class="kanban-column">
                <h2 class="text-yellow-400 underline mb-4">To Do</h2>
                @foreach($toDo as $task)
                <div class="kanban-task w-72 bg-white rounded-b-lg border-t-8 border-yellow-400 px-4 py-5 flex flex-col justify-around shadow-md">
                    <p class="text-lg font-bold font-sans">Premium</p>
                    <div class="py-3">
                        <p class="text-gray-400 text-sm">
                            {{ $task->description }}
                        </p>
                    </div>
                    <div class="flex justify-between">
                        <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                        <div class="text-sm flex gap-2">
                            <button class="bg-slate-200 px-2 rounded-xl hover:bg-slate-400 transition-colors ease-in-out">glee</button>
                            <button class="bg-slate-200 px-2 rounded-xl hover:bg-slate-400 transition-colors ease-in-out"> download </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- In Progress -->
            <div class="kanban-column">
                <h2 class="text-blue-700 underline mb-4">In progress</h2>
                @foreach($doing as $task)
                <div class="kanban-task w-72 bg-white rounded-b-lg border-t-8 border-blue-700 px-4 py-5 flex flex-col justify-around shadow-md">
                    <p class="text-lg font-bold font-sans">Premium</p>
                    <div class="py-3">
                        <p class="text-gray-400 text-sm">
                            {{ $task->description }}
                        </p>
                    </div>
                    <div class="flex justify-between">
                        <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                        <div class="text-sm flex gap-2">
                            <button class="bg-slate-200 px-2 rounded-xl hover:bg-slate-400 transition-colors ease-in-out">glee</button>
                            <button class="bg-slate-200 px-2 rounded-xl hover:bg-slate-400 transition-colors ease-in-out"> download </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Done -->
            <div class="kanban-column">
                <h2 class="text-green-400 underline mb-4">Done</h2>
                @foreach($done as $task)
                <div class="kanban-task w-72 bg-white rounded-b-lg border-t-8 border-green-400 px-4 py-5 flex flex-col justify-around shadow-md">
                    <p class="text-lg font-bold font-sans">Premium</p>
                    <div class="py-3">
                        <p class="text-gray-400 text-sm">
                            {{ $task->description }}
                        </p>
                    </div>
                    <div class="flex justify-between">
                        <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                        <div class="text-sm flex gap-2">
                            <button class="bg-slate-200 px-2 rounded-xl hover:bg-slate-400 transition-colors ease-in-out">glee</button>
                            <button class="bg-slate-200 px-2 rounded-xl hover:bg-slate-400 transition-colors ease-in-out"> download </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

    @endsection

</body>
</html>
