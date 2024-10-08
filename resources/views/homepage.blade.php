<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/bold/style.css"/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>UP TREND</title>
    </head>

    <body>
    <div class="sticky top-0 z-10">
    <nav class="w-full sm:flex justify-between p-2 sm:p-4 lg:px-32 md:px-20 sm:px-14 items-center bg-white shadow-md">
            <div class="flex justify-center">
                <a href="/"><img class="w-[20px] md:w-[40px]" src="{{ asset('logos/uptrend.png') }}" alt="Logo"></a>
            </div>
            
            <div class=" absolute sm:static collapse sm:visible">
                <ul class="flex flex-row sm:space-x-4">
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
                <button href="#"><i class="fa-regular fa-user"></i></button>
                <button href="#"><i class="fa-regular fa-heart"></i></button>
                <button href="#"><i class="ph-bold ph-bag"></i></button>
                
                
                </div>
            </div>
        </nav>
    </div>
    
    <div class="mb-5 sm:mb-10 lg:mb-20 relative">
        <div class="bg-cover">
            <img class="" src="{{ URL('images/general/adiskycropped.jpg') }}"alt=""/>
        </div>
        <div class="flex absolute inset-0 justify-center items-center space-x-3">
            <img class="w-[100px]" src="{{ asset('logos/uptrendnobg.png') }}" alt="Logo">
        </div>
    </div>



        <div class="px-4 md:px-8">

            <div class="grid grid-cols-3">
                <a href="#" class="group relative flex h-48 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="{{ URL('images/general/backflip.jpg') }}"alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110 grayscale" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                </a>

                <a href="#" class="group relative flex h-48 items-end overflow-hidden bg-gray-100 shadow-lg col-span-2 md:h-80">
                    <img src="{{ URL('images/general/shoesonsand.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110 grayscale" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                </a>

                <a href="#" class="group relative flex h-48 items-end overflow-hidden bg-gray-100 shadow-lg col-span-2 md:h-80">
                    <img src="{{ URL('images/general/adisky.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110 grayscale" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                </a>

                <a href="#" class="group relative flex h-48 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="{{ URL('images/general/nikeotw.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110 grayscale" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                </a>
            </div>
        </div>
    
    <div class="p-10 sm:p-20">
        <div class="mb-10 sm:mb-20">
            <div class="flex justify-center items-center flex-col">
                <h3 class="font-bold text-2xl sm:font-extrabold sm:text-6xl mb-2">KEEP UP WITH THE TREND</h3>
                <h3 class="mb-6">Elevate your look with UP Trend.</h1>
                <button class="bg-black text-white font-medium px-3 py-1 rounded-3xl">Shop Now</button>
            </div>
        </div>

        <div class="flex sm:flex-row flex-col items-center">
            <img class="object-cover sm:w-1/2 h-auto" src="{{ URL('images/general/jordan.jpg') }}" alt="">
            <img class="object-cover sm:w-1/2 h-auto" src="{{ URL('images/general/airjordanposter.jpg') }}" alt="">
        </div>
    </div>

    </body>
</html>
