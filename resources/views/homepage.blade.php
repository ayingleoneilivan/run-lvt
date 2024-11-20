<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css'); }}">
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/bold/style.css"/>
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
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
                        <a href="/shoes" class="font-semibold ">Women</a>
                    </li>
                    <li class="hover:underline hover:underline-offset-8 decoration-2">
                        <a href="/shoes" class="font-semibold ">Kids</a>
                    </li>
                </ul>
            </div>

            <div class="absolute sm:static collapse sm:visible">
                <div class="space-x-4">
                <a href="/signin"><i class="ph-bold ph-user"></i></a>
                <a href="/signin"><i class="ph-bold ph-heart-straight"></i></a>
                <a href="/checkout"><i class="ph-bold ph-bag"></i></a>
                
                
                </div>
            </div>
        </nav>
    </div>
    
    <div class="mb-5 sm:mb-10 lg:mb-20 relative">
        <div class="bg-cover">
            <img class="" src="{{ URL('images/general/streetcropped.jpg') }}"alt=""/>
        </div>
        <div class="flex absolute inset-0 justify-center items-center space-x-3">
            <img class="w-[100px]" src="{{ asset('logos/uptrendnobg.png') }}" alt="Logo">
        </div>
    </div>

        <!-- <div class="px-4 md:px-8">

            <div class="grid grid-cols-3">
                <div class="group relative flex h-48 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="{{ URL('images/general/backflip.jpg') }}"alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110 grayscale" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                </div>

                <div class="group relative flex h-48 items-end overflow-hidden bg-gray-100 shadow-lg col-span-2 md:h-80">
                    <img src="{{ URL('images/general/shoesonsand.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110 grayscale" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                </div>

                <div class="group relative flex h-48 items-end overflow-hidden bg-gray-100 shadow-lg col-span-2 md:h-80">
                    <img src="{{ URL('images/general/adisky.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110 grayscale" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                </div>

                <div class="group relative flex h-48 items-end overflow-hidden bg-gray-100 shadow-lg md:h-80">
                    <img src="{{ URL('images/general/nikeotw.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110 grayscale" />

                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                </div>
            </div>
        </div> -->
    
    <div class="mt-10 sm:mt-20">
            <div class="flex justify-center items-center flex-col">
                <p class="font-bold text-2xl sm:font-extrabold sm:text-6xl mb-2">KEEP UP WITH THE TREND</p>
                <p class="mb-6">Elevate your look with UP Trend.</p>
                <button class="bg-black text-white font-medium px-3 py-1 rounded-3xl">Shop Now</button>
            </div>
    </div>

    <div class="p-20 sm:p-20">
    <div>
        <p class="font-semibold text-2xl sm:font-medium sm:text-2xl sm:mb-6">See What's New</p>
    </div>
        <div class="flex justify-center">

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="flex flex-col">
                    <div class="h-[600px] items-center justify-center">
                    <a href="#" class="h-full w-full">
                        <img src="{{ URL('images/shoes/aj1midwhite.jpg') }}" alt="" class="object-cover h-full w-full">
                    </a>
                    </div>
                    <div class="py-4">
                        <p class="font-semibold">Air Jordan 1</p>
                        <p>Men's Shoes</p>
                        <p>3 Colours</p>
                        <p class="py-2 font-semibold">₱4,719</p>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="h-[600px] items-center justify-center">
                    <a href="#" class="h-full w-full">
                        <img src="{{ URL('images/shoes/sambaog.jpg') }}" alt="" class="object-cover h-full w-full">
                    </a>
                    </div>
                    <div class="py-4">
                        <p class="font-semibold">Samba OG</p>
                        <p>Men's Shoes</p>
                        <p>3 Colours</p>
                        <p class="py-2 font-semibold">₱6,800</p>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="h-[600px] items-center justify-center">
                    <a href="#" class="h-full w-full">
                        <img src="{{ URL('images/shoes/sswhitegreen.jpg') }}" alt="" class="object-cover h-full w-full">
                    </a>
                    </div>
                    <div class="py-4">
                        <p class="font-semibold">Stan Smith</p>
                        <p>Men's Shoes</p>
                        <p>3 Colours</p>
                        <p class="py-2 font-semibold">₱4,900</p>
                    </div>
                </div>
        </div>
    </div>
    </body>
</html>
