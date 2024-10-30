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
    </head>
    <body class="min-w-full min-h-full p-0 m-0">
        <div class="">
            {{-- Navigation --}}
            <header class="w-full px-10 py-5 border flex justify-between items-center">
                <div class="">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="logo" class="h-12">    
                </div>
                <div class="md:flex gap-x-5 text-black/60 hidden font-bold">
                    <a href="" class="text-lg hover:text-black/80">Home</a>
                    <a href="" class="text-lg hover:text-black/80">Products</a>
                    <a href="" class="text-lg hover:text-black/80">Service</a>
                    <a href="" class="text-lg hover:text-black/80">About Us</a>
                </div>
                <div class="text-black/60 relative w-8 h-8 md:hidden">
                    <button class="btnMenu relative w-full h-full z-[51]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="svgBurger w-full h-full absolute top-[2px] transition-all duration-500" fill="currentColor">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="svgClose w-full h-full absolute top-[2px] transition-all duration-500 opacity-0 text-white" fill="currentColor">
                            <path xmlns="http://www.w3.org/2000/svg" d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                        </svg>
                    </button>
                    <div class="fixed top-0 -right-full w-full h-screen bg-red-500 z-50 transition-all duration-500 divMenu">
                        <div class="h-full w-full flex flex-col gap-y-5 text-center justify-center items-center font-bold">
                            <a href="" class="text-xl text-white/80 hover:text-white">Home</a>
                            <a href="" class="text-xl text-white/80 hover:text-white">Products</a>
                            <a href="" class="text-xl text-white/80 hover:text-white">Service</a>
                            <a href="" class="text-xl text-white/80 hover:text-white">About Us</a>
                        </div>
                    </div>
                </div>
            </header>

            {{-- Main --}}
            <main class="">
                
            </main>

            {{-- Footer --}}
            <footer class="w-full p-5 text-left text-sm text-black/70">
                © Toyota Forklifts Philippines
            </footer>
        </div>
    </body>
</html>
