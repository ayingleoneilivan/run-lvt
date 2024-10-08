<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/bold/style.css"/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>UP TREND</title>

    <body>
    <div class="sticky top-0 z-10">
    <nav class="w-full sm:flex justify-between p-2 sm:p-4 lg:px-32 md:px-20 sm:px-14 items-center bg-white shadow-md">
            <div class="flex justify-center">
                <a href="/"><img class="w-[40px]" src="{{ asset('logos/uptrend.png') }}" alt="Logo"></a>
            </div>
            
            <div class="absolute sm:static collapse sm:visible">
                <ul class="sm:flex sm:flex-row flex-col sm:space-x-4">
                    <li class="hover:underline hover:underline-offset-8 decoration-2">
                        <a href="/shoes" class="font-semibold">Men</a>
                    </li>
                    <li class="hover:underline hover:underline-offset-8 decoration-2">
                        <a href="" class="font-semibold ">Women</a>
                    </li>
                    <li class="hover:underline hover:underline-offset-8 decoration-2">
                        <a href="" class="font-semibold ">Kids</a>
                    </li>
                </ul>
            </div>

            <div class="absolute sm:static collapse sm:visible">
                <div class="space-x-4">
                <a href="#"><i class="fa-regular fa-user"></i></a>
                <a href="#"><i class="fa-regular fa-heart"></i></a>
                <a href="#"><i class="ph-bold ph-bag"></i></a>
                
                
                </div>
            </div>
        </nav>
    </div>

    <div class="">
        <div class="">
            <video autoplay muted loop><source src="{{ URL('videos/newbalance.mp4') }}"></video>
        </div>
    </div>

    <div class="p-10 sm:p-20">
        <div class="mb-10 sm:mb-20">
            <div class="flex justify-center items-center flex-col space-y-2">
                <h3 class="font-bold text-2xl sm:font-extrabold sm:text-6xl"> KEEP UP WITH THE TREND</h3>
                <p class="font-semibold text-xl sm:font-normal sm:text-2xl"><span class="font-bold text-4xl tracking-tighter"></span></p>
            </div>
        </div>

        <div class="flex sm:flex-row flex-col items-center">
            <img class="object-cover sm:w-1/2 h-auto" src="{{ URL('images/jordan.jpg') }}" alt="">
            <img class="object-cover sm:w-1/2 h-auto" src="{{ URL('images/airjordanposter.jpg') }}" alt="">
        </div>
    </div>

    </body>
</html>
