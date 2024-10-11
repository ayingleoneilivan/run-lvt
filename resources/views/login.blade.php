<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css'); }}">
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
                <button href="#"><i class="ph-bold ph-user"></i></button>
                <button href="#"><i class="ph-bold ph-heart-straight"></i></button>
                <button href="#"><i class="ph-bold ph-bag"></i></button>
                
                
                </div>
            </div>
        </nav>
    </div>
    
    <div class="flex flex-col w-full md:w-1/2 xl:w-2/5 2xl:w-2/5 3xl:w-1/3 mx-auto p-8 md:p-10 2xl:p-12 3xl:p-14 mt-20 rounded-2xl shadow-xl">
        <div class="flex flex-row gap-3 pb-4">
            <div class="flex justify-center w-full">
                <img class="invert" src="{{ asset('logos/uptrendnobg.png') }}" width="50" alt="Logo">
            </div>

        </div>
        <div class=""></div>
        <form class="flex flex-col">
            <div class="pb-2">
                <label for="email" class="block mb-2 text-sm font-medium text-[#000000]">Email</label>
                <div class="relative text-gray-400"><span class="absolute inset-y-0 left-0 flex items-center p-1 pl-3"><i class="ph-bold ph-envelope-simple"></i></span>
                    <input type="email" name="email" id="email" class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring ring-transparent focus:ring-1 focus:outline-none focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4" placeholder="Email Address" autocomplete="off">
                </div>
            </div>
            <div class="pb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-[#000000]">Password</label>
                <div class="relative text-gray-400"><span class="absolute inset-y-0 left-0 flex items-center p-1 pl-3"><i class="ph-bold ph-key"></i></span>
                    <input type="password" name="password" id="password" placeholder="••••••••••" class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring ring-transparent focus:ring-1 focus:outline-none focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4" autocomplete="new-password">
                </div>
            </div>
            <button type="submit" class="w-full text-white bg-[#000000] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-6">Login</button>
            <div class="text-sm font-light text-[#000000] ">Don't have an accout yet? <a href="#" class="font-medium text-[#000000] hover:underline">Sign Up</a>

            </div>
        </form>
        <div class="relative flex py-8 items-center">
            <div class="flex-grow border-t border-[1px] border-gray-200"></div> <span class="flex-shrink mx-4 font-medium text-gray-500">OR</span>
            <div class="flex-grow border-t border-[1px] border-gray-200"></div>
        </div>
        <form>
            <div class="flex flex-row gap-2 justify-center">
                <button class="flex flex-row w-32 gap-2 bg-black p-2 rounded-md text-gray-200">
                <i class="ph-bold ph-google-logo mx-auto"></i>
                <span class="font-medium mx-auto">Google</span>

                </button>
                <button class="flex flex-row w-32 gap-2 bg-black p-2 rounded-md text-gray-200">
                <i class="ph-bold ph-github-logo mx-auto"></i>
                <span class="font-medium mx-auto">Twitter</span>

                </button>
            </div>
        </form>
    </div>

</body>
</html>
