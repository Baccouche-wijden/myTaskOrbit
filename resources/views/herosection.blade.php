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

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
        #bg{
            background-color: #071952;
        }

        .container{
        margin: 0 auto;
        width: 1200px;

        }
        .lognav{
            display: flex;
        align-items:end;
        justify-content: end;
        }

        h3{
            margin-top: -1.2em;
        }
        header {

        height: 100vh;
        position: relative;
        background-image:
        background-size: cover;
        color: #000;
        }

        .header-container {
        width: 1200px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        }

        #container {
        width: 50%;
        }
        nav {
        font-size: 20px;
        font-weight: 700;
        display: flex;
        justify-content: space-between;
        padding-top: 32px;
        }
        h1 {
        font-size: 52px;
        margin-bottom: 32px;
        line-height: 1.05;
        }

        p{
        font-size: 20px;
        line-height: 1.6;
        margin-bottom: 48px;
        color:#3C3D37;
        }

        h2{
        font-size: 42px;
        margin-bottom: 48px;
        }

        section{
        padding: 96px 0;
        background-color: #fff;

        }


    </style>
  </head>
  <body>
    <header>

      <div class="relative">
        <header class="absolute inset-x-0 top-0 z-10 w-full">
            <div class="px-4 mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 lg:h-20">
                    <div class="flex-shrink-0">
                        <a href="#" title="" class="flex">
                            <img class="w-auto h-16" src="{{ asset('images/icon8.png') }}" alt="" />
                        </a>
                        <p>TaskOrbit</p>
                    </div>

                    <button type="button" class="inline-flex p-2 text-black transition-all duration-200 rounded-md lg:hidden focus:bg-gray-100 hover:bg-gray-100">
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>

                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <div class="hidden ml-auto lg:flex lg:items-center lg:justify-center lg:space-x-10">@if (Route::has('login')) @auth
                        <a href="{{ url('/dashboard') }}" title="" class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80"> Dashboard </a>
                        @else<a href="{{ route('login') }}" title="" class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80"> Login </a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" title="" class="text-base font-semibold text-black transition-all duration-200 hover:text-opacity-80">Register</a>
                        @endif
                        @endauth
                        <a href="#" title="" class="inline-flex items-center justify-center px-5 py-2.5 text-base font-semibold transition-all duration-200 rounded-full bg-orange-500 text-white hover:bg-orange-600 focus:bg-orange-600" role="button"> Try for free </a>
                        @endif</div>
                </div>
            </div>
        </header>

        <section class="overflow-hidden" id="bg">
            <div class="flex flex-col lg:flex-row lg:items-stretch lg:min-h-[800px]">
                <div class="relative flex items-center justify-center w-full lg:order-2 lg:w-7/12">
                    <div class="absolute bottom-0 right-0 hidden lg:block">
                        <img class="object-contain w-auto h-48" src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/3/curved-lines.png" alt="" />
                    </div>

                    <div class="relative px-4 pt-24 pb-16 text-center sm:px-6 md:px-24 2xl:px-32 lg:py-24 lg:text-left">
                        <h1 class="text-4xl font-bold text-black sm:text-6xl xl:text-8xl">
                            TaskOrbit.<br />
                            <h2>Orbiting around your tasks</h2>
                        </h1>
                        <p class="mt-8 text-xl text-black">TaskOrbit is a powerful task management system<br>
                            designed to streamline project organization and boost productivity . </p>

                        <form action="#" method="POST" class="max-w-xl mx-auto mt-8 bg-white lg:mx-0 sm:bg-transparent lg:mt-12 rounded-xl">
                            <div class="p-4 sm:p-2 sm:bg-white sm:border-2 sm:border-transparent sm:rounded-full sm:focus-within:border-orange-500 sm:focus-within:ring-1 sm:focus-within:ring-orange-500">
                                <div class="flex flex-col items-start sm:flex-row">
                                    <div class="flex-1 w-full min-w-0">
                                        <div class="relative text-gray-400 focus-within:text-gray-600">
                                            <label for="email" class="sr-only"></label>
                                            <input
                                                type="email"
                                                name="email"
                                                id="email"
                                                placeholder="Enter email to get started"
                                                class="block w-full px-4 py-4 text-base text-center text-black placeholder-gray-500 transition-all duration-200 border-transparent rounded-full sm:text-left focus:border-transparent focus:ring-0 caret-orange-500"
                                                required=""
                                            />
                                        </div>
                                    </div>

                                    <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-4 mt-4 font-semibold text-white transition-all duration-200 bg-orange-500 border border-transparent rounded-full sm:w-auto sm:ml-4 sm:mt-0 hover:bg-orange-600 focus:bg-orange-600">
                                        Try 14 days free
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="mt-5 text-base text-black">Instant access . No credit card required</p>
                    </div>

                </div>

                <div class="relative w-full overflow-hidden lg:order-1 h-96 lg:h-auto lg:w-5/12">
                    <div class="absolute inset-0">
                        <div>
                            <img class="w-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/1/hero-img.png" alt="" />
                        </div>

                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>

                    <div class="absolute bottom-0 left-0">
                        <div class="p-4 sm:p-6 lg:p-8">
                            <div class="flex items-center">
                    </div>
                </div>
            </div>
        </section>
    </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

