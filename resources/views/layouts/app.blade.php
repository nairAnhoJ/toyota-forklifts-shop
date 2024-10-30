<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Toyota Forklifts Philippines</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <style>
            /* width */
            ::-webkit-scrollbar {
                width: 10px;
                height: 10px;
            }
        
            /* Track */
            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 2px grey; 
                border-radius: 10px;
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #4B5563; 
                border-radius: 10px;
            }
        
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: rgb(95, 95, 110); 
            }
        </style>
    </head>
    <body class="min-w-full min-h-full p-0 m-0">
        <div class="">
            {{-- Navigation --}}
            @include('layouts.navigation')

            {{-- Main --}}
            <main class="mt-[90px]">
                @yield('content')
            </main>

            {{-- Footer --}}
            <footer class="w-full p-3 text-left text-sm text-black/70 border-t">
                © Toyota Forklifts Philippines
            </footer>
        </div>
    </body>
</html>
