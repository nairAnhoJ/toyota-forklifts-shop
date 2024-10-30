@extends('layouts.app')
@section('content')
<div class="w-full">
    {{-- HERO BANNER --}}
    <div class="relative lg:h-[575px] xl:h-[525px] 2xl:h-[800px] overflow-hidden ">
        <div class="flex items-center">
            <img src="{{ asset('storage/images/hero-banner.png') }}" alt="hero-banner" class="w-full">
        </div>
        <div class="absolute top-0 h-full flex flex-col justify-center text-left text-white w-2/3 pl-3 lg:pl-10 2xl:pl-20 bg-gradient-to-r from-black/90 to-transparent">
            <div class="font-bold text-base lg:text-3xl 2xl:text-5xl w-full">
                <h1>TOYOTA IS HERE TO</h1>
                <h1>MAKE YOUR LIFE EASIER</h1>
            </div>
            <div class="text-[10px] lg:text-base 2xl:text-2xl w-full mt-3 lg:w-2/3">
                <p>
                    Buying or renting a Toyota forklift in the Philippines couldn't be easier. ​If you need help on what Toyota forklift to choose, let's chat!
                </p>
            </div>
            <div class="text-[10px] lg:text-base 2xl:text-2xl w-full mt-3">
                <p>
                    More Than Just a Forklift Supplier
                </p>
                <p class="whitespace-nowrap text-[7px] lg:text-xs 2xl:text-base">
                    Philippines One Stop Online Forklift Shop - Toyota Forklift for Sale, Forklift Rental, Forklift Price & More!
                </p>
            </div>
            <a href="" class="bg-white w-28 lg:w-40 py-1 text-center text-xs lg:text-base 2xl:text-lg text-black/80 font-semibold rounded-full mt-5 hover:bg-red-500 hover:text-white transition-all duration-300 relative overflow-hidden btnShopNow">
                <div class="relative z-50">SHOP NOW</div>
                <div class="bg-red-500 w-[150%] h-[150%] absolute top-full -left-1/4 duration-300 transition-all z-40 btnShopNowCover"></div>
            </a>
        </div>
    </div>

    {{-- CATEGORIES --}}
    <div class="w-full py-5">
        <div class="w-full grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 justify-items-center gap-5">
            <a href="#" class="w-80 h-52 border overflow-hidden relative">
                <div class="z-50 text-white font-semibold relative w-1/2 h-full text-left p-7">
                    <p>Forklifts and</p>
                    <p>Trucks</p>
                    <div class="flex mt-2 text-sm items-center justify-start gap-x-1">
                        <p>View</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 -960 960 960" fill="currentColor">
                            <path d="m700-300-57-56 84-84H120v-80h607l-83-84 57-56 179 180-180 180Z"/>
                        </svg>
                    </div>
                </div>
                <div class="w-[200%] h-[200%] bg-red-700/90 absolute -rotate-45 -top-full -left-full z-40"></div>
                <div class="w-full h-full absolute top-0 left-0 flex items-center justify-center">
                    <img src="{{ asset('storage/images/forklifts-and-trucks.jpg') }}" alt="" class="relative z-30">
                </div>
            </a>
            <div class="w-80 h-52 border overflow-hidden relative">
                <div class="z-50 text-white font-semibold relative w-1/2 h-full text-left p-7">
                    <p>Services</p>
                    <div class="flex mt-2 text-sm items-center justify-start gap-x-1">
                        <p>View</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 -960 960 960" fill="currentColor">
                            <path d="m700-300-57-56 84-84H120v-80h607l-83-84 57-56 179 180-180 180Z"/>
                        </svg>
                    </div>
                </div>
                <div class="w-[190%] h-[190%] bg-red-700/90 absolute -rotate-45 -top-full -left-full z-40"></div>
                <div class="w-full h-full absolute top-0 left-0 flex items-center justify-center">
                    <img src="{{ asset('storage/images/services.jpg') }}" alt="" class="h-full relative z-30">
                </div>
            </div>
            <div class="w-80 h-52 border overflow-hidden relative lg:col-span-2 xl:col-span-1">
                <div class="z-50 text-white font-semibold relative w-1/2 h-full text-left p-7">
                    <p>Genuine</p>
                    <p>Parts</p>
                    <div class="flex mt-2 text-sm items-center justify-start gap-x-1">
                        <p>View</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 -960 960 960" fill="currentColor">
                            <path d="m700-300-57-56 84-84H120v-80h607l-83-84 57-56 179 180-180 180Z"/>
                        </svg>
                    </div>
                </div>
                <div class="w-[190%] h-[190%] bg-red-700/90 absolute -rotate-45 -top-full -left-full z-40"></div>
                <div class="w-full h-full absolute top-0 left-0 flex items-center justify-center">
                    <img src="{{ asset('storage/images/genuine-parts.jpg') }}" alt="" class="w-full relative z-30">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.btnShopNow').hover(
            function() {
                $('.btnShopNowCover').toggleClass("top-full -top-1/4");
            },
            function() {
                $('.btnShopNowCover').toggleClass("top-full -top-1/4");
            }
        );
    });
</script>
@endsection