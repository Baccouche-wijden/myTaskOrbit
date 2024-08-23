<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>TaskOrbit</title>
    <style>
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

            /*edit btn*/
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

    </style>
</head>
<body>
@extends('layouts.master')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($projects as $project)
    <div class="mx-3 mt-6 flex flex-col self-start rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white max-w-xs">
        <a href="#!"><img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" /></a>
        <div class="p-4">
            <h5 class="mb-2 text-lg font-medium leading-tight">{{ $project->name }}</h5>
            <p class="mb-4 text-sm">{{ $project->description }}</p>
        </div>
        <!-- Edit and delete buttons for admin -->
        @if(auth()->user()->role == 'admin')
        <div class="flex justify-between items-center p-4">
            <button class="btn btn-primary text-xs px-2 py-1" type="button" onclick="toggleEditForm('edit-form-{{ $project->id }}')">Edit</button>
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="button" class="button text-xs px-2 py-1" onclick="openModal('modalConfirm-{{ $project->id }}')">
                    <svg viewBox="0 0 448 512" class="svgIcon w-4 h-4">
                        <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                    </svg>
                </button>
            </form>
        </div>

        <!-- Edit Form -->
        <div id="edit-form-{{ $project->id }}" class="edit-form" style="display:none; margin-top: 15px;">
            <form action="{{ route('projects.update', $project->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Project Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $project->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" required>{{ $project->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Save Changes</button>
                <button type="button" class="btn btn-secondary" onclick="toggleEditForm('edit-form-{{ $project->id }}')">Cancel</button>
            </form>
        </div>

        <!-- Delete Confirmation Modal -->
        <div id="modalConfirm-{{ $project->id }}" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50 hidden">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="p-6 pt-0 text-center">
                    <svg class="w-20 h-20 text-red-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="text-xl font-normal text-gray-500 mt-5 mb-6">Are you sure you want to delete this project?</h3>
                    <form id="delete-form-{{ $project->id }}" action="{{ route('projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                        <button type="button" onclick="closeModal('modalConfirm-{{ $project->id }}')" class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center">
                            No, cancel
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
    @endforeach
</div>


@endsection

<script>
    function toggleEditForm(formId) {
        const form = document.getElementById(formId);
        form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
    }

    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.remove('hidden');
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.add('hidden');
    }
</script>

</body>
</html>
