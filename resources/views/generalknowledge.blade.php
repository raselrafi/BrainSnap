@extends('layouts.main')

@section('content')

    <section class="bg-[#F7F9F9]">
        <div class="grid md:grid-cols-2 items-center md:gap-64 gap-16 sm:py-12 lg:py-8 font-[sans-serif] text-[#333] max-w-7xl max-md:max-w-md mx-auto">
            <div class="max-md:order-1 max-md:text-end mr-12">
            <h2 class="md:text-4xl text-xl md:leading-10 font-semibold text-black text-end">GENERAL KNOWLEDGE</h2>
            {{-- <p class="mt-2 md:text-3xl text-xl text-black leading-relaxed text-end">ONE QUESTION AT A TIME!</p> --}}
            {{-- <div class="mt-16 space-y-6 px-10">
                <a href="#_" class="inline-flex items-center justify-center w-full px-8 py-2 mb-2 text-md text-white bg-amber-500 rounded-md hover:bg-amber-400 sm:w-auto sm:mb-0"
                    data-primary="green-400" data-rounded="rounded-2xl" data-primary-reset="">Join for Free
                </a>
            </div> --}}
            </div>
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="/img/assets/1.png" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
            </div>
        </div>
        <div class="px-40">
            <div class="flex flex-wrap gap-1 justify-end items-end border-b border-opacity-100 border-amber-500">
                <div class="border rounded-sm px-2 py-1 bg-amber-400">
                    <div id="hours" class="font-semibold font-mono text-sm text-gray-800">1</div>
                </div>
                <div class="border rounded-sm px-2 py-1 bg-amber-400">
                    <div id="hours" class="font-semibold font-mono text-sm text-gray-800">2</div>
                </div>
                <div class="py-2">
                    <div id="hours" class="font-bold font-mono text-sm text-gray-800">:</div>
                </div>
                <div class="border rounded-sm px-2 py-1 bg-amber-400">
                    <div id="minutes" class="font-semibold font-mono text-sm text-gray-800">3</div>
                </div>
                <div class="border rounded-sm px-2 py-1 bg-amber-400">
                    <div id="seconds" class="font-semibold font-mono text-sm text-gray-800">4</div>
                </div>
                <div class="border rounded-sm px-2 py-1 bg-amber-400">
                    <div id="seconds" class="font-semibold font-mono text-sm text-gray-800">AM</div>
                </div>
                <div class="border rounded-sm px-2 py-1 bg-amber-500">
                    <div id="seconds" class="font-semibold font-mono text-sm text-white">December 16, 2023, Friday</div>
                </div>
                <div class="border boreder-yellow-200 rounded-sm px-2 py-1 bg-amber-500">
                    <div id="seconds" class="font-semibold font-mono text-sm text-white">৬ই ফাল্গুন, ১৪৩০</div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-cover md:bg-contain bg-white bg-cover p-6 shadow-lg bg-neutral-700"
        style="background-image: url('/img/assets/world.jpg');">
        <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">      
                    <div class="col-span-2">
                        <div id="features" class="mx-auto">
                            <div class="grid grid-cols-2 md:grid-cols-4 xl:grid-cols-4">
                                <div class="text-center mb-5 xl:mb-0">
                                    <div class="flex items-center justify-center">
                                        <div class="w-32 h-32 flex justify-center bg-amber-500 text-purple-500 rounded-md mb-5 md:mb-5">
                                            <img src="/img/assets/icon/1x/Asset 50.png" alt="bar-chart-2">
                                        </div>
                                    </div>
                                    <h2 class="font-semibold text-gray-700 text-xl md:text-2xl mb-2">
                                        Bangladesh
                                    </h2>
                                </div>
                                <div class="text-center mb-5 md:mb-0">
                                    <div class="flex items-center justify-center">
                                        <div class="w-32 h-32 py-7 flex justify-center bg-amber-500 text-red-500 rounded-md mb-5 md:mb-5">
                                            <img src="/img/assets/icon/1x/Asset 51.png" alt="dollar-sign">
                                        </div>
                                    </div>
                                    <h2 class="font-semibold text-gray-700 text-xl md:text-2xl mb-2">
                                        Internatonal
                                    </h2>
                                </div>
                                <div class="text-center mb-2 md:mb-0">
                                    <div class="flex items-center justify-center">
                                        <div class="w-32 h-32 py-7 flex justify-center bg-amber-500 text-red-500 rounded-md mb-5 md:mb-5">
                                            <img src="/img/assets/icon/1x/Asset 52.png" alt="dollar-sign">
                                        </div>
                                    </div>
                                    <h2 class="font-semibold text-gray-700 text-xl md:text-2xl mb-2">
                                        Current Afairs
                                    </h2>
                                </div>
                        
                                <div class="text-center">
                                    <div class="flex items-center justify-center">
                                        <div class="w-32 h-32 py-7 flex justify-center bg-amber-500 text-blue-500 rounded-md mb-5 md:mb-5">
                                            <img src="/img/assets/icon/1x/Asset 53.png" alt="search icon">
                                        </div>
                                    </div>
                                    <h2 class="font-semibold text-gray-700 text-xl md:text-2xl mb-2">
                                        Awards
                                    </h2>
                                </div>
                            </div>
                            {{-- <div class="group cursor-pointer relative mt-16">
                                <div class="aspect-video">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/FF3fuYLnApQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                      allowfullscreen>
                                    </iframe>
                                  </div>
                            </div> --}}
                        </div>                               
                    </div>
                    <div class="">
                        <div class="container p-2 mx-auto sm:p-12 dark:text-gray-100 -mt-12 ml-16">
                            <h2 class="mb-2 px-2 text-2xl font-semibold leadi">Topics</h2>
                            <div class="flex flex-col overflow-x-auto text-xs">
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-2 py-2 sm:p-2">
                                        <p class="text-base font-semibold">General Knowledge</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-4 py-2 sm:p-2">
                                        <p class="text-base font-semibold">Sports</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-4 py-2 sm:p-2">
                                        <p class="text-base font-semibold">Art & Literature</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-4 py-2 sm:p-2">
                                        <p class="text-base font-semibold">Culture and Lifestyle</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-4 py-2 sm:p-2">
                                        <p class="text-base font-semibold">Life Science</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-4 py-2 sm:p-2">
                                        <p class="text-base font-semibold">Science</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-4 py-2 sm:p-2">
                                        <p class="text-base font-semibold">Mathematcs</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-4 py-2 sm:p-2">
                                        <p class="text-base font-semibold">Geography</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-4 py-2 sm:p-2">
                                        <p class="text-base font-semibold">History</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-4 py-4 sm:p-2">
                                        <p class="text-base font-semibold">Mixed</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-4 py-4 sm:p-2">
                                        <p class="text-base font-semibold">BCS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container p-2 mx-auto sm:p-12 dark:text-gray-100 -mt-16 ml-16">
                            <h2 class="mb-2 px-2 text-2xl font-semibold leadi">Important</h2>
                            <div class="flex flex-col overflow-x-auto text-xs">
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-2 py-2 sm:p-2">
                                        <p class="text-base font-semibold">Bangladesh Bank Suggeston</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-4 py-2 sm:p-2">
                                        <p class="text-base font-semibold">Bank Exam 2023 soluton</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-opacity-30 border-yellow-400">
                                    <div class="w-full px-4 py-2 sm:p-2">
                                        <p class="text-base font-semibold">Bank Exam Circular</p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="w-full px-4 py-2 sm:p-2">
                                        <a href="#_" class="inline-flex items-center justify-center w-full px-8 py-2 mb-2 text-md text-white bg-amber-500 rounded-md hover:bg-amber-400 sm:w-auto sm:mb-0"
                                            data-primary="green-400" data-rounded="rounded-2xl" data-primary-reset="">Load more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
            <div class="">                        
                <h1 class="text-4xl font-medium">YOUR QUIZ WILL START IN</h1>
            </div>
            <div class="border-dashed border-2 border-yellow-500 rounded-md px-16 py-8 w-full mx-auto max-w-7xl">  
                <div class="mx-auto">
                    <div class="flex flex-col w-full p-6 md:p-8 lg:p-8">
                        <h2 class="text-xl font-semibold leadi">You have selected challenge border. Do not cross the border while your quiz in ongoing. Crossing this 
                            border will result in immediate disqualifcation.
                        </h2>
                    </div>
                    <div class="w-full ml-96">
                        <div id="app"></div>
                    </div>
                </div>
                <div class="px-5 py-5 flex flex-col justify-between gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6">
                    <div>                        
                        <h3 class="text-lg font-medium">Did you know?</h3>
                        <p class="text-gray-600 text-sm">The overwhelming majority of 
                            Bangladeshis are ethnic Bengalis.
                        </p>
                    </div>
                    <div>
                        <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-amber-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop