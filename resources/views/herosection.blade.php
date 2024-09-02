<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<!--<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>TaskOrbit</title>

    <style>
        .task{
            color:#ff5f00;
            font-size: 6em;
            font-family: "Myriad Pro", Arial, sans-serif;
        }
        .orbit{
            color:#050ebf;
        }
        .p-4{
            padding-left: 7em;
            padding-top: 5em;
        }
        .description{
            font-family: "Myriad Pro", Arial, sans-serif;
            color:#000;
            font-size: 1.1em;
        }
    </style>

    </head>

    <body>

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="grid grid-cols-2 gap-4">

                <div class="p-4">
                    <h1 class="task">Task<span class="orbit">Orbit</span> </h1><br><br>
                    <p class="description">TaskOrbit is a powerful task management system<br> designed to streamline project organization and boost productivity.</p>

                    </div>


                <div class="p-4">

                    <img src="{{ asset('images\TaskOrbit.png') }}" alt="Logo" >
                </div>
            </div>


        </div>

    </body>

</html>-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
        #button {
        background-color: #1A237E;
        }

        #button:hover {
            background-color: #ff5f00;
        }
        html {
        scroll-behavior: smooth;
        }
        #nav{
            position: fixed;
            top: 0; /* Aligns it to the top of the viewport */
            left: 0; /* Aligns it to the left of the viewport */
            width: 100%; /* Makes sure the navbar spans the full width */
            z-index: 1000; /* Makes sure the navbar is on top of other elements */
        }
        #navbar{
            color: white;
        }
        #navbar:hover{
            color: #ff5f00;
        }

    </style>
    <body>
        <!--home + nav -->
        <div class="bg-white">

            <header style="background-color: #1A237E; "id="nav" >
                <div class="px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16 lg:h-20">
                        <div class="flex-shrink-0">
                            <a href="#home" title="" class="flex">
                                <img class="w-auto h-8" src="{{ asset('images/logofinal.svg') }}" alt="" />
                                <img class="w-auto h-6" src="{{ asset('images/taskOrbitw.svg') }}" alt="" />
                            </a>
                        </div>

                        <button type="button" class="inline-flex p-2 text-black transition-all duration-200 rounded-md lg:hidden focus:bg-gray-100 hover:bg-gray-100">
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path>
                            </svg>

                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                        <div class="hidden lg:flex lg:items-center lg:justify-center lg:space-x-10" >
                            <a href="#home" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80" id="navbar"> Home </a>

                            <a href="#services" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80" id="navbar"> Our services </a>

                            <a href="#contact" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80" id="navbar"> Contact Us</a>
                        </div>

                        @if (Route::has('login')) @auth
                        <a href="{{ url('/dashboard') }}" title="" class="hidden lg:inline-flex items-center justify-center px-5 py-2.5 text-base transition-all duration-200 hover:text-black focus:text-blackfont-semibold text-white  rounded-full" role="button" id="button"> Join Now </a>
                        @else
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" title="" class="hidden lg:inline-flex items-center justify-center px-5 py-2.5 text-base transition-all duration-200 hover:text-black focus:text-black  font-semibold text-white rounded-full" role="button" id="button"> Join Now </a>
                        @endif
                        @endauth
                        @endif
                    </div>
                </div>
            </header>
            <!--home-->
            <section class="bg-[#FCF8F1] bg-opacity-30 py-10 sm:py-16 lg:py-24" id="home">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                        <div>
                            <p class="text-base font-semibold tracking-wider text-blue-600 uppercase">Orbiting around your TASKS </p>
                            <h1 class="mt-4 text-4xl font-bold  lg:mt-8 sm:text-6xl xl:text-8xl" style="color: #101663">TaskOrbit</h1>
                            <p class="mt-4 text-base text-black lg:mt-8 sm:text-xl">TaskOrbit is a powerful task management system<br>
                                designed to streamline project organization and boost productivity </p>

                            <a href="{{ route('register') }}" title="" class="inline-flex items-center px-6 py-4 mt-8 font-semibold text-black transition-all duration-200 rounded-full lg:mt-16 hover:opacity-80" role="button" style="background-color:#ff5f00; ">
                                Join for free
                                <svg class="w-6 h-6 ml-8 -mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>

                            <p class="mt-5 text-gray-600">Already joined us? <a href="{{ route('login') }}" title="" class="text-black transition-all duration-200 hover:underline">Log in</a></p>
                        </div>

                        <div>
                            <img class="w-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/1/hero-img.png" alt="" />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!--Our services-->
        <div  style="background-color: #1A237E;">

            <section class="py-10  sm:py-16 lg:py-24" id="services">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="max-w-2xl mx-auto text-center">
                        <h2 class="text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl">Trusted by <span style="color: #ff5f00">30k+</span> world class companies & design teams</h2>
                    </div>

                    <div class="grid max-w-xl grid-cols-1 mx-auto mt-8 text-center lg:max-w-full sm:mt-12 lg:mt-20 lg:grid-cols-3 gap-x-6 xl:gap-x-12 gap-y-6">
                        <div class="overflow-hidden bg-white rounded-md shadow">
                            <div class="px-8 py-12">
                                <div class="relative w-24 h-24 mx-auto">
                                    <img class="relative object-cover w-24 h-24 mx-auto " src="{{ asset('images/taskhero2.png') }}" alt="" />
                                    <div class="absolute top-0 right-0 flex items-center justify-center  rounded-full w-7 h-7">
                                    </div>
                                </div>
                                <p class="text-base font-bold tex-tblack mt-12">Task Management</p>
                                <blockquote class="mt-7">
                                    <p class="text-lg text-black">Simplify your workflow with our intuitive task management system. Create, update, and track tasks effortlessly, ensuring that you stay on top of your responsibilities.</p>
                                </blockquote>

                            </div>
                        </div>

                        <div class="overflow-hidden bg-white rounded-md shadow">
                            <div class="px-8 py-12">
                                <div class="relative w-24 h-24 mx-auto">
                                    <img class="relative object-cover w-24 h-24 mx-auto " src="{{ asset('images/projecthero.png') }}" alt="" />
                                    <div class="absolute top-0 right-0 flex items-center justify-center rounded-full w-7 h-7">

                                    </div>
                                </div>
                                <p class="text-base font-bold tex-tblack mt-12">Project Progress Tracking</p>
                                <blockquote class="mt-7">
                                    <p class="text-lg text-black">Monitor the progress of your projects with real-time updates. Easily visualize the status of tasks and ensure timely completion of your objectives.</p>
                                </blockquote>

                            </div>
                        </div>

                        <div class="overflow-hidden bg-white rounded-md shadow">
                            <div class="px-8 py-12">
                                <div class="relative w-24 h-24 mx-auto">
                                    <img class="relative object-cover w-24 h-24 mx-auto " src="{{ asset('images/adminhero.png') }}" alt="" />
                                    <div class="absolute top-0 right-0 flex items-center justify-center  rounded-full w-7 h-7">

                                    </div>
                                </div>
                                <p class="text-base font-bold tex-tblack mt-12">Admin Dashboard</p>
                                <blockquote class="mt-7">
                                    <p class="text-lg text-black"> Empower administrators with powerful tools to assign projects, oversee team performance, and conduct detailed analytics, all from a centralized dashboard.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--contact-->
        <div style="background-color: rgb(228, 228, 228)">
            <section class="py-10  sm:py-16 lg:py-24" id="contact">
                <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:items-stretch md:grid-cols-2 gap-x-12 lg:gap-x-20 gap-y-10">
                        <div class="flex flex-col justify-between lg:py-5">
                            <div>
                                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:leading-tight lg:text-5xl">Launch your productivity into orbit with TaskOrbit!</h2>
                                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-black">Effortlessly manage tasks, track progress, and collaborate in one streamlined platform with TaskOrbit.</p>

                                <img class="relative z-10 max-w-xs mx-auto -mb-16 md:hidden" src="https://cdn.rareblocks.xyz/collection/celebration/images/contact/4/curve-line-mobile.svg" alt="" />

                                <img class="hidden w-full translate-x-24 translate-y-8 md:block" src="https://cdn.rareblocks.xyz/collection/celebration/images/contact/4/curve-line.svg" alt="" />
                            </div>

                            <div class="hidden md:mt-auto md:block">
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                </div>

                                <blockquote class="mt-6">
                                    <p class="text-lg leading-relaxed text-black">
                                        "TaskOrbit has revolutionized the way we manage our projects. Tracking tasks, monitoring progress, and collaborating with the team has never been easier. Everything is just a click away, making our workflow more efficient and organized."</p>
                                </blockquote>

                                <div class="flex items-center mt-8">
                                    <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/contact/4/avatar.jpg" alt="" />
                                    <div class="ml-4">
                                        <p class="text-base font-semibold text-black">Jenny Wilson</p>
                                        <p class="mt-px text-sm text-gray-400">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:pl-12">
                            <div class="overflow-hidden bg-white rounded-md">
                                <div class="p-6 sm:p-10">
                                    <h3 class="text-3xl font-semibold text-black">Connect with Us</h3>
                                    <p class="mt-4 text-base text-gray-600">Discover how TaskOrbit can streamline your task management. Contact us for more details!</p>

                                    <form action="#" method="POST" class="mt-4">
                                        <div class="space-y-6">
                                            <div>
                                                <label for="" class="text-base font-medium text-gray-900"> Your name </label>
                                                <div class="mt-2.5 relative">
                                                    <input
                                                        type="text"
                                                        name=""
                                                        id=""
                                                        placeholder="Enter your full name"
                                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 caret-orange-500"
                                                    />
                                                </div>
                                            </div>

                                            <div>
                                                <label for="" class="text-base font-medium text-gray-900"> Email address </label>
                                                <div class="mt-2.5 relative">
                                                    <input
                                                        type="text"
                                                        name=""
                                                        id=""
                                                        placeholder="Enter your full name"
                                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 caret-orange-500"
                                                    />
                                                </div>
                                            </div>

                                            <div>
                                                <label for="" class="text-base font-medium text-gray-900"> Project brief </label>
                                                <div class="mt-2.5 relative">
                                                    <textarea
                                                        name=""
                                                        id=""
                                                        placeholder="Enter your project brief"
                                                        class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md resize-y focus:outline-none focus:ring-orange-500 focus:border-orange-500 caret-orange-500"
                                                        rows="4"
                                                    ></textarea>
                                                </div>
                                            </div>

                                            <div>
                                                <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200" style="background-color:#101663">
                                                    Contact Us Now
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="md:hidden">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                            </div>

                            <blockquote class="mt-6">
                                <p class="text-lg leading-relaxed text-white">You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change and click save.</p>
                            </blockquote>

                            <div class="flex items-center mt-8">
                                <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/contact/4/avatar.jpg" alt="" />
                                <div class="ml-4">
                                    <p class="text-base font-semibold text-white">Jenny Wilson</p>
                                    <p class="mt-px text-sm text-gray-400">Product Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
  </body>
</html>











