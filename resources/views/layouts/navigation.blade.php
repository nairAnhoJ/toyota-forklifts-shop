<header class="w-full px-10 py-5 border flex justify-between items-center fixed top-0 z-[99] bg-white">
    <a href="" class="">
        <img src="{{ asset('storage/images/logo.png') }}" alt="logo" class="h-12">    
    </a>
    <div class="md:flex gap-x-5 text-black/60 hidden font-bold">
        <a href="{{ route('home') }}" class="text-lg hover:text-black/80">Home</a>
        <a href="" class="text-lg hover:text-black/80">Products</a>
        <a href="" class="text-lg hover:text-black/80">Services</a>
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
                <a href="{{ route('home') }}" class="text-xl text-white/80 hover:text-white">Home</a>
                <a href="" class="text-xl text-white/80 hover:text-white">Products</a>
                <a href="" class="text-xl text-white/80 hover:text-white">Services</a>
                <a href="" class="text-xl text-white/80 hover:text-white">About Us</a>
            </div>
        </div>
    </div>
</header>

<script>
    $(document).ready(function(){
        $('.btnMenu').click(function(){
            $('.svgBurger').toggleClass('rotate-180 opacity-0');
            $('.svgClose').toggleClass('rotate-180 opacity-0');
            $('.divMenu').toggleClass('-right-full right-0');
        });
    });
</script>