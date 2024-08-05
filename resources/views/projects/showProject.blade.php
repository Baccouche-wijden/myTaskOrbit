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
        .section_our_solution .row {
            align-items: center;
        }

        .our_solution_category {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .our_solution_category .solution_cards_box {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .solution_cards_box .solution_card {
            flex: 0 48%; /* Adjust the width to make cards larger */
            background: #fff;
            box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2), 0 5px 15px 0 rgba(37, 44, 97, 0.15);
            border-radius: 15px;
            margin: 20px; /* Increase margin for spacing */
            padding: 40px; /* Increase padding for better spacing inside the card */
            position: relative;
            z-index: 1;
            overflow: hidden;
            min-height: 500px; /* Increase minimum height */
            transition: 0.7s;
        }

        .solution_cards_box .solution_card:hover {
            background: #050ebf;
            color: #fff;
            transform: scale(1.05); /* Reduce scaling to maintain size */
            z-index: 9;
        }

        .solution_cards_box .solution_card:hover::before {
            background: rgb(85 108 214 / 10%);
        }

        .solution_cards_box .solution_card:hover .solu_title div,
        .solution_cards_box .solution_card:hover .solu_description p {
            color: #fff;
        }

        .solution_cards_box .solution_card:before {
            content: "";
            position: absolute;
            background: rgb(85 108 214 / 5%);
            width: 170px;
            height: 900px;
            z-index: -1;
            transform: rotate(42deg);
            right: -56px;
            top: -23px;
            border-radius: 35px;
        }

        .solution_cards_box .solution_card:hover .solu_description button {
            background: #fff !important;
            color: #050ebf;
        }

        .solution_card .so_top_icon {
        }

        .solution_card .solu_title div {
            color: #212121;
            font-size: 2rem; /* Increase font size */
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .solution_card .solu_description p {
            font-size: 18px; /* Increase font size */
            margin-bottom: 20px;
        }

        .solution_card .solu_description button {
            border: 0;
            border-radius: 15px;
            background: #ff5f00 !important; /* Set button background color to orange */
            color: #fff; /* Set button text color to white */
            font-weight: 500;
            font-size: 1.2rem; /* Increase font size */
            padding: 10px 20px; /* Increase padding for better button size */
            transition: 0.7s; /* Smooth transition for hover effect */
        }

        .solution_card .solu_description button:hover {
            background: #fff !important; /* Set button background color to white on hover */
            color: #050ebf !important; /* Set button text color to blue on hover */
        }

        .our_solution_content div {
            text-transform: capitalize;
            margin-bottom: 1rem;
            font-size: 2.5rem;
        }

        .our_solution_content p {
        }

        .hover_color_bubble {
            position: absolute;
            background: rgb(54 81 207 / 15%);
            width: 100rem;
            height: 100rem;
            left: 0;
            right: 0;
            z-index: -1;
            top: 16rem;
            border-radius: 50%;
            transform: rotate(-36deg);
            left: -18rem;
            transition: 0.7s;
        }

        .solution_cards_box .solution_card:hover .hover_color_bubble {
            top: 0rem;
        }

        .solution_cards_box .solution_card .so_top_icon {
            width: 80px; /* Increase icon size */
            height: 80px; /* Increase icon size */
            border-radius: 50%;
            background: #fff;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .solution_cards_box .solution_card .so_top_icon img {
            width: 60px; /* Increase icon image size */
            height: 60px; /* Increase icon image size */
            object-fit: contain;
        }

        /*start media query*/
        @media screen and (min-width: 320px) {
            .sol_card_top_3 {
                position: relative;
                top: 0;
            }

            .our_solution_category {
                width: 100%;
                margin: 0 auto;
            }

            .our_solution_category .solution_cards_box {
                flex: auto;
            }
        }

        @media only screen and (min-width: 768px) {
            .our_solution_category .solution_cards_box {
                flex: 1;
            }
        }

        @media only screen and (min-width: 1024px) {
            .sol_card_top_3 {
                position: relative;
                top: -3rem;
            }

            .our_solution_category {
                width: 80%;
                margin: 0 auto;
            }
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
    @foreach ($projects as $project)
        <div class="section_our_solution">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="our_solution_category">
                        <div class="solution_cards_box">
                            <div class="solution_card">
                                <div class="hover_color_bubble"></div>
                                <div class="so_top_icon">
                                    <!-- Your SVG icon here -->
                                </div>
                                <div class="solu_title">
                                    <div>{{ $project->name }}</div>
                                </div>
                                <div class="solu_description">
                                    <p>{{ $project->description }}</p>
                                    <button class="read_more_btn" type="button">Read More</button>

                                    @if(auth()->user()->role == 'admin')
                                        <button class="btn btn-primary" type="button" onclick="toggleEditForm('edit-form-{{ $project->id }}')">Edit</button>
                                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="button" onclick="openModal('modalConfirm', '{{ $project->id }}')">
                                                <svg viewBox="0 0 448 512" class="svgIcon"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
                                            </button>
                                            <!-- Modal -->
                                            <div id="modalConfirm" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                                                <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
                                                    <div class="flex justify-end p-2">
                                                        <button onclick="closeModal('modalConfirm')" type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <!--pop up-->

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
                                                            <a href="#"  onclick="confirmDelete('{{ $project->id }}')"class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                                                                Yes, I'm sure
                                                            </a>
                                                            <a href="#" onclick="closeModal('modalConfirm')" class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center">
                                                                No, cancel
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    @endif
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

<script>
    function toggleEditForm(formId) {
        const form = document.getElementById(formId);
        if (form.style.display === 'none' || form.style.display === '') {
            form.style.display = 'block';
        } else {
            form.style.display = 'none';
        }
    }

    function openModal(modalId, projectId) {
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
