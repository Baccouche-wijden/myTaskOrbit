<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskOrbit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <style>
        .rating {
            padding-left: 13em;
            display: inline-block;
        }

        .rating input {
            display: none;
        }

        .rating label {
            float: right;
            cursor: pointer;
            color: #ccc;
            transition: color 0.3s;
        }

        .rating label:before {
            content: '\2605';
            font-size: 30px;
        }

        .rating input:checked ~ label,
        .rating label:hover,
        .rating label:hover ~ label {
            color: #ff5f00;
            transition: color 0.3s;
        }

        /*range slider */
        .slider {
        -webkit-appearance: none;
        width: 100%;
        height: 15px;
        border-radius: 5px;
        background: linear-gradient(to right, #ff5f00 0%, #ff5f00 0%, #d3d3d3 0%, #d3d3d3 100%);
        outline: none;
        opacity: 0.9;
        transition: background 0.3s ease-in-out;
        }

            .slider:hover {
                opacity: 1;
            }

            .slider::-webkit-slider-thumb {
                -webkit-appearance: none;
                appearance: none;
                width: 25px;
                height: 25px;
                border-radius: 50%;
                background: #ff5f00;
                cursor: pointer;
            }

            .slider::-moz-range-thumb {
                width: 25px;
                height: 25px;
                border-radius: 50%;
                background: #04AA6D;
                cursor: pointer;
            }


            .edit-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgb(25, 146, 29);
            border: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
            cursor: pointer;
            transition-duration: 0.3s;
            overflow: hidden;
            position: relative;
            text-decoration: none !important;
            }

            .edit-svgIcon {
            width: 17px;
            transition-duration: 0.3s;
            }

            .edit-svgIcon path {
            fill: white;
            }

            .edit-button:hover {
            width: 120px;
            border-radius: 50px;
            transition-duration: 0.3s;
            background-color: rgb(25, 146, 29);
            align-items: center;
            }

            .edit-button:hover .edit-svgIcon {
            width: 20px;
            transition-duration: 0.3s;
            transform: translateY(60%);
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
            }

            .edit-button::before {
            display: none;
            content: "Edit";
            color: white;
            transition-duration: 0.3s;
            font-size: 2px;
            }

            .edit-button:hover::before {
            display: block;
            padding-right: 10px;
            font-size: 13px;
            opacity: 1;
            transform: translateY(0px);
            transition-duration: 0.3s;
            }


            .button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgb(245, 56, 56);
            border: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
            cursor: pointer;
            transition-duration: .3s;
            overflow: hidden;
            position: relative;
            }

            .svgIcon {
            width: 12px;
            transition-duration: .3s;
            }

            .svgIcon path {
            fill: white;
            }

            .button:hover {
            width: 140px;
            border-radius: 50px;
            transition-duration: .3s;
            background-color: rgb(255, 69, 69);
            align-items: center;
            }

            .button:hover .svgIcon {
            width: 50px;
            transition-duration: .3s;
            transform: translateY(60%);
            }

            .button::before {
            position: absolute;
            top: -20px;
            content: "Delete";
            color: white;
            transition-duration: .3s;
            font-size: 2px;
            }

            .button:hover::before {
            font-size: 13px;
            opacity: 1;
            transform: translateY(30px);
            transition-duration: .3s;
            }
            .button-container {
            display: flex;
            justify-content: center; /* Optional: Center the buttons horizontally */
            }

    </style>
</head>
<body>

@extends('layouts.master')

@section('content')

    <div class="container mt-4 flex flex-wrap justify-center">
        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
            <thead class="align-bottom">
                <tr>
                    <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 " style="color: #050ebf">Task's Description</th>
                    <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 " style="color: #050ebf">Author</th>
                    <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 " style="color: #050ebf">Project Name</th>
                    <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 " style="color: #050ebf">Completion</th>
                    <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 " style="color: #050ebf">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="flex px-2 py-1">
                                <div>
                                    <img src="{{asset('images/task2.png') }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="taskicon">
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 leading-normal text-sm" id="description-{{ $task->id }}">{{ $task->description }}</h6>
                                </div>
                            </div>
                        </td>

                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            @if($task->user)
                                <span class="font-semibold leading-tight text-xs">{{ $task->user->name }}</span>
                            @else
                                <span class="font-semibold leading-tight text-xs">No User Assigned</span>
                            @endif
                        </td>

                        <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                            @if($task->project_id && $task->project)
                                <span class="font-semibold leading-tight text-xs">{{ $task->project->name }}</span><br>
                            @else
                                <span class="font-semibold leading-tight text-xs">No Project Assigned</span>
                            @endif
                        </td>


                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <div class="slidecontainer">
                                <input type="range" min="1" max="100" value="{{ $task->rating }}" class="slider" id="myRange-{{ $task->id }}" onchange="submitRating({{ $task->id }}, this.value)">
                                <!--<p>Value: <span id="demo-{{ $task->id }}">{{ $task->rating }}</span></p>-->
                            </div>
                        </td>

                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap text-center">
                            <div class="button-container">
                                @can('update', $task)
                                    <button class="edit-button" onclick="showEditForm({{ $task->id }})">
                                        <svg class="edit-svgIcon" viewBox="0 0 512 512">
                                            <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                        </svg>
                                    </button>
                                    @endcan
                                   <!-- @if (Auth::user()->role == 1)
                                        @endif-->
                                        @can('delete', $task)
                                        <form id="delete-form-{{ $task->id }}" action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="button" onclick="openModal('modelConfirm', '{{ $task->id }}')">
                                                <svg viewBox="0 0 448 512" class="svgIcon"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
                                            </button>
                                        </form>
                                        <div id="modelConfirm" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
                                            <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
                                                <div class="flex justify-end p-2">
                                                    <button onclick="closeModal('modelConfirm')" type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div class="p-6 pt-0 text-center">
                                                    <svg class="w-20 h-20 text-red-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <h3 class="text-xl font-normal text-gray-500 mt-5 mb-6">Are you sure you want to delete this task?</h3>
                                                    <a href="#" onclick="confirmDelete('{{ $task->id }}')"
                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                                                        Yes, I'm sure
                                                    </a>
                                                    <a href="#" onclick="closeModal('modelConfirm')"
                                                        class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center">
                                                        No, cancel
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endcan

                            </div>
                        </td>

                    </tr>

                    <!--edit form-->
                    <tr id="edit-form-{{ $task->id }}" style="display: none;">
                        <td colspan="5">
                            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="flex justify-between">
                                    <input type="text" name="description" value="{{ $task->description }}" class="form-input w-full mr-2">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="background-color: rgb(25, 146, 29)">
                                        Save Edit
                                    </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function showEditForm(taskId) {
            var editForm = document.getElementById('edit-form-' + taskId);
            if (editForm.style.display === 'none') {
                editForm.style.display = 'table-row';
            } else {
                editForm.style.display = 'none';
            }
        }

            function submitRating(taskId, rating) {
            fetch(`/tasks/${taskId}/rate`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ rating: rating })
            })
            .then(response => response.json())
            .then(data => {
                // Optional: Handle the response
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        function updateSliderBackground(slider) {
            var value = (slider.value - slider.min) / (slider.max - slider.min) * 100;
            slider.style.background = `linear-gradient(to right, #ff5f00 ${value}%, #d3d3d3 ${value}%)`;
        }

        document.querySelectorAll('.slider').forEach(function(slider) {
            slider.addEventListener('input', function() {
                var taskId = this.id.split('-')[1];
                document.getElementById('demo-' + taskId).innerText = this.value;
                updateSliderBackground(this);
            });

            // Initialize background on page load
            updateSliderBackground(slider);
        });





        function openModal(modalId, taskId) {
        document.getElementById(modalId).classList.remove('hidden');
        // Store the task ID for confirmation
        window.currentTaskId = taskId;
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        function confirmDelete(taskId) {
            // Find the form associated with the task ID and submit it
            document.getElementById('delete-form-' + taskId).submit();
        }

    </script>
@endsection
</body>
</html>
