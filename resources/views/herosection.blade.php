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
        html {
        font-family: Rubik;
        color: #fff;
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
        .task{
            color:#ff5f00;
            font-size: 6em;
            font-family: "Myriad Pro", Arial, sans-serif;
        }
        .orbit, h3{
            color:#050ebf;
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
        }

        .btn:link,
        .btn:visited{
        font-size: 20px;
        font-weight: 600;
        background-color: #ff5f00;
        color: #FFF;
        text-decoration: none;
        display: inline-block;
        padding: 16px 32px;
        border-radius: 9px;
        transition: all 0.8s;
        }

        .btn:hover,
        .btn:active{
        font-size: 20px;
        font-weight: 600;
        background-color:#c86d1c;
        text-decoration: none;
        display: inline-block;
        padding: 16px 32px;
        border-radius: 20px;
        margin: 0 100px;
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
      <nav class="container">
        <div class="logreg">
        <div>@if (Route::has('login'))
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
        @endif</div></div>
      </nav>
      <div class="header-container">
        <div class="container">
          <div id="container">
            <h1 class="task">Task<span class="orbit">Orbit</span> </h1>
            <h3>Orbiting around  your tasks</h3><br>
            <p>
                TaskOrbit is a powerful task management system<br>
                designed to streamline project organization and boost productivity.
            </p>

            <a href="#" class="btn">get more info</a>
          </div>
        </div>
      </div>
    </header>

    <section>
      <div class="container">
        <h2>Some random infos</h2>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi itaque
          quisquam excepturi minima nulla eligendi non ea porro magni temporibus
          culpa fugiat laudantium, dolorem, accusantium odit doloremque expedita
          officia deserunt. Nisi iusto blanditiis cupiditate vitae nesciunt
          ratione quaerat labore porro. Ea eos nulla amet, nostrum veritatis
          dignissimos iste ex non pariatur enim accusamus eius perferendis natus
          illo ipsum quasi omnis!
        </p>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

