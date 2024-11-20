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

    
    <div class="p-10 sm:p-20">

    <div class="mb-4">
        <div id="myBtnContainer" class="text-black justify-center space-x-4 font-semibold">
            <button class="btn active: underline underline-offset-8" onclick="filterSelection('all')"> Show all</button>
            <button class="btn text-gray-400" onclick="filterSelection('NewArrivals')"> New Arrivals</button>
            <button class="btn text-gray-400" onclick="filterSelection('Originals')"> Originals</button>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">

            <div class="group">
                <a href=""><img src="{{ URL('images/shoes/aj1midwhite.jpg') }}" alt="" class="object-cover main-image"></a>
                    <div class="pt-1 hidden group-hover:inline-flex gap-[2px]">
                        <img src="{{ URL('images/shoes/aj1midwhite.jpg') }}" alt="" class="object-cover size-14 hover-image pb-[2px] hover:bg-black">
                        <img src="{{ URL('images/shoes/aj1midblackwhite.jpg') }}" alt="" class="object-cover size-14 hover-image pb-[2px] hover:bg-black">
                        <img src="{{ URL('images/shoes/aj1midblackred.jpg') }}" alt="" class="object-cover size-14 hover-image pb-[2px] hover:bg-black">
                    </div>
                    <div class="py-4 flex justify-between">
                        <div class=""><a href="">
                            <p class="font-semibold">Air Jordan 1</p>
                            <p>Men's Shoes</p>
                            <p>3 Colours</p>
                            <p class="mt-2 font-semibold">₱4,719</p></a>
                        </div>
                        <div class="flex flex-col items-end justify-end space-y-2">
                            <div class="">
                                <button class="increase-quantity px-2 py-1 border rounded-l-lg border-gray-300 border-r-0 hover:bg-black hover:text-white">+</button><input type="number" value="1" min="1" class="w-12 py-1 text-center border border-gray-300"><button class="decrease-quantity px-2 py-1 border rounded-r-lg border-gray-300 border-l-0 hover:bg-black hover:text-white">-</button>
                            </div>
                            <div class="flex space-x-2">
                                <button class="border border-gray-300 rounded-lg px-2 py-1 hover:bg-black hover:text-white"><i class="ph-bold ph-heart-straight align-middle"></i>
                                <button class="border border-gray-300 rounded-lg px-2 py-1 hover:bg-black hover:text-white text-sm"><i class="ph-bold ph-bag mr-2 align-middle"></i>Add to Bag</button>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="group">
                <a href=""><img src="{{ URL('images/shoes/sambaog.jpg') }}" alt="" class="object-cover main-image"></a>
                    <div class="pt-1 hidden group-hover:inline-flex gap-[2px]">
                        <img src="{{ URL('images/shoes/sambaog.jpg') }}" alt="" class="object-cover size-14 hover-image pb-[2px] hover:bg-black">
                        <img src="{{ URL('images/shoes/sambaogwhitegreen.jpg') }}" alt="" class="object-cover size-14 hover-image pb-[2px] hover:bg-black">
                        <img src="{{ URL('images/shoes/sambaogwhitered.jpg') }}" alt="" class="object-cover size-14 hover-image pb-[2px] hover:bg-black">
                    </div>
                    <div class="py-4 flex justify-between">
                        <div class=""><a href="">
                            <p class="font-semibold">Samba OG</p>
                            <p>Men's Shoes</p>
                            <p>3 Colours</p>
                            <p class="mt-2 font-semibold">₱6,800</p></a>
                        </div>
                        <div class="flex flex-col items-end justify-end space-y-2">
                            <div class="">
                                <button class="increase-quantity px-2 py-1 border rounded-l-lg border-gray-300 border-r-0 hover:bg-black hover:text-white">+</button><input type="number" value="1" min="1" class="w-12 py-1 text-center border border-gray-300"><button class="decrease-quantity px-2 py-1 border rounded-r-lg border-gray-300 border-l-0 hover:bg-black hover:text-white">-</button>
                            </div>
                            <div class="flex space-x-2">
                                <button class="border border-gray-300 rounded-lg px-2 py-1 hover:bg-black hover:text-white"><i class="ph-bold ph-heart-straight align-middle"></i></button>
                                <button class="border border-gray-300 rounded-lg px-2 py-1 hover:bg-black hover:text-white text-sm"><i class="ph-bold ph-bag mr-2 align-middle"></i>Add to Bag</button>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="group">
                <a href=""><img src="{{ URL('images/shoes/sswhitegreen.jpg') }}" alt="" class="object-cover main-image"></a>
                    <div class="pt-1 hidden group-hover:inline-flex gap-[2px]">
                        <img src="{{ URL('images/shoes/sswhitegreen.jpg') }}" alt="" class="object-cover size-14 hover-image pb-[2px] hover:bg-black">
                        <img src="{{ URL('images/shoes/sswhitenavyblue.jpg') }}" alt="" class="object-cover size-14 hover-image pb-[2px] hover:bg-black">
                        <img src="{{ URL('images/shoes/ssblack.jpg') }}" alt="" class="object-cover size-14 hover-image pb-[2px] hover:bg-black">
                    </div>
                    <div class="py-4 flex justify-between">
                        <div class=""><a href="">
                            <p class="font-semibold">Stan Smith</p>
                            <p>Men's Shoes</p>
                            <p>3 Colours</p>
                            <p class="mt-2 font-semibold">₱4,900</p></a>
                        </div>
                        <div class="flex flex-col items-end justify-end space-y-2">
                            <div class="">
                                <button class="increase-quantity px-2 py-1 border rounded-l-lg border-gray-300 border-r-0 hover:bg-black hover:text-white">+</button><input type="number" value="1" min="1" class="w-12 py-1 text-center border border-gray-300"><button class="decrease-quantity px-2 py-1 border rounded-r-lg border-gray-300 border-l-0 hover:bg-black hover:text-white">-</button>
                            </div>
                            <div class="flex space-x-2">
                                <button class="border border-gray-300 rounded-lg px-2 py-1 hover:bg-black hover:text-white"><i class="ph-bold ph-heart-straight align-middle"></i></button>
                                <button class="border border-gray-300 rounded-lg px-2 py-1 hover:bg-black hover:text-white text-sm"><i class="ph-bold ph-bag mr-2 align-middle"></i>Add to Bag</button>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="group">
                <a href=""><img src="{{ URL('images/shoes/SuperSAllWhite.jpg') }}" alt="" class="object-cover main-image"></a>
                    <div class="pt-1 hidden group-hover:inline-flex gap-[2px]">
                        <img src="{{ URL('images/shoes/SuperSAllWhite.jpg') }}" alt="" class="object-cover size-14 hover-image pb-[2px] hover:bg-black">
                        <img src="{{ URL('images/shoes/SuperSWhite.jpg') }}" alt="" class="object-cover size-14 hover-image pb-[2px] hover:bg-black">
                        <img src="{{ URL('images/shoes/SuperSBlack.jpg') }}" alt="" class="object-cover size-14 hover-image pb-[2px] hover:bg-black">
                    </div>
                    <div class="py-4 flex justify-between">
                        <div class=""><a href="">
                            <p class="font-semibold">Superstar</p>
                            <p>Men's Shoes</p>
                            <p>3 Colours</p>
                            <p class="mt-2 font-semibold">₱5,300</p></a>
                        </div>
                        <div class="flex flex-col items-end justify-end space-y-2">
                            <div class="">
                                <button class="increase-quantity px-2 py-1 border rounded-l-lg border-gray-300 border-r-0 hover:bg-black hover:text-white">+</button><input type="number" value="1" min="1" class="w-12 py-1 text-center border border-gray-300"><button class="decrease-quantity px-2 py-1 border rounded-r-lg border-gray-300 border-l-0 hover:bg-black hover:text-white">-</button>
                            </div>
                            <div class="flex space-x-2">
                                <button class="border border-gray-300 rounded-lg px-2 py-1 hover:bg-black hover:text-white"><i class="ph-bold ph-heart-straight align-middle"></i></button>
                                <button class="border border-gray-300 rounded-lg px-2 py-1 hover:bg-black hover:text-white text-sm"><i class="ph-bold ph-bag mr-2 align-middle"></i>Add to Bag</button>
                            </div>
                        </div>
                    </div>
            </div>
            
            

        </div>
        
    </div>
    </div>

    </body>
</html>