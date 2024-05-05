@extends('layouts.main')

@section('content')

    <div class="grid md:grid-cols-2 items-center md:gap-64 gap-16 sm:py-12 lg:py-8 font-[sans-serif] text-[#333] max-w-7xl max-md:max-w-md mx-auto">
        <div class="max-md:order-1 max-md:text-end mr-12">
        <h2 class="md:text-4xl text-xl md:leading-10 font-semibold text-black mb-2 text-end">SPARKING BRILLIANCE,</h2>
        <p class="mt-2 md:text-3xl text-xl text-black leading-relaxed text-end">ONE QUESTION AT A TIME!</p>
        <div class="mt-16 space-y-6 px-10">
            <a href="#_" class="inline-flex items-center justify-center w-full px-8 py-2 mb-2 text-md text-white bg-amber-500 rounded-md hover:bg-amber-400 sm:w-auto sm:mb-0"
                data-primary="green-400" data-rounded="rounded-2xl" data-primary-reset="">Join for Free
            </a>
        </div>
        </div>
        <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
            <img src="/img/Home_Cover.png" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
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

    <section class="bg-[#F5F5F5] text-gray-900">
        <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">      
                    <div class="col-span-2">
                        <div id="features" class="mx-auto">
                            <ul class="mt-2 grid grid-cols-1 gap-16 text-center text-slate-700 md:grid-cols-4">                               
                                <li class="rounded-xl bg-amber-500 px-3 py-3 shadow-sm hover:border-opacity-0 hover:no-underline hover:shadow-lg bg-cover" style="">
                                    <img src="/img/assets/icon/1x/Asset 46.png" alt="" class="mx-auto h-16 w-16">
                                    <h3 class="mt-3 text-xl font-small text-white">Practce</h3>
                                </li>

                                <li class="rounded-xl bg-amber-500 px-3 py-3 shadow-sm hover:border-opacity-0 hover:no-underline hover:shadow-lg bg-cover"  style="">
                                    <img src="/img/assets/icon/1x/Asset 47.png" alt="" class="mx-auto h-16 w-16">
                                    <h3 class="mt-3 text-xl font-small text-gray-100">Team</h3>
                                </li>

                                <li class="rounded-xl bg-amber-500 px-3 py-3 shadow-sm hover:border-opacity-0 hover:no-underline hover:shadow-lg bg-cover" style="">
                                    <img src="/img/assets/icon/1x/Asset 48.png" alt="" class="mx-auto h-16 w-16">
                                    <h3 class="mt-3 text-xl font-small text-gray-100">Challenge</h3>
                                </li>

                                <li class="rounded-xl bg-amber-500 px-3 py-3 shadow-sm hover:border-opacity-0 hover:no-underline hover:shadow-lg bg-cover" style="">
                                <a href="/pricing" class="group">
                                    <img src="/img/assets/icon/1x/Asset 49.png" alt="" class="mx-auto h-16 w-16">
                                    <h3 class="mt-3 text-xl font-small text-gray-100 group-hover:text-primary-500">Quiz Master</h3>
                                </a>
                                </li>
                            </ul>
                            <div class="group cursor-pointer relative mt-16">
                                <div class="aspect-video">
                                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/FF3fuYLnApQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                      allowfullscreen>
                                    </iframe>
                                  </div>
                            </div>
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

    <section class="bg-[#F5F5F5]">              
        <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
            <div class="border-b border-opacity-100 border-amber-500">
                <h1 class="text-2xl antialiased font-semibold leadi text-end text-amber-500">Did you know?</h1>
                <p class="text-3xl antialiased text-end text-gray-900">The overwhelming majority of </p>
                <p class="text-3xl antialiased text-end text-gray-900">Bangladeshis are ethnic Bengalis.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                    <div class="bg-[#FCFCFC]">
                        <div aria-hidden="true" class="lg:-mt-48">
                            <img src="img/assets/Mobile App.png">
                        </div>
                    </div>
                    <div class="col-span-2 bg-[#FCFCFC]">
                        <div class="p-16">
                            <h2 class="text-4xl text-black font-semibold my-3 text-start">DOWNLOAD OUR MOBILE APP</h2>
                            <h3 class="text-xl text-black font-semibold my-3 text-start">Elevate your knowledge efortlessly, anytme, anywhere, with engaging quizzes tailored for instant cognitve brilliance.</h3>
                            
                            <div class="flex w-full style-flex-col md:flex-row gap-y-4 gap-x-8 sm:items-start md:justify-start py-4">
                                <a href="" target="_blank" class="flex items-center justify-center w-full px-16 py-2 text-center text-white bg-black rounded-2xl sm:rounded-2xl md:w-auto" rel="noreferrer">
                                    <svg class="w-7" viewBox="-9 0 274 274" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g> 
                                            <path
                                                d="M188.81319,178.874645 C221.272218,161.051727 245.880297,147.470853 248.001319,146.415618 C254.78648,142.806714 261.79324,133.256838 248.001319,125.838536 C243.548228,123.506467 219.573289,110.347687 188.81319,93.3795092 L146.171146,136.443648 L188.81319,178.874645 Z"
                                                fill="#FFD900"></path>
                                            <path
                                                d="M146.171146,136.443648 L10.3940643,273.286517 C13.5808739,273.708611 17.1792251,272.864423 21.4212696,270.532353 C30.3274526,265.657168 124.739324,214.098388 188.81319,178.885198 L146.171146,136.443648 Z"
                                                fill="#F43249"></path>
                                            <path
                                                d="M146.171146,136.443648 L188.81319,93.5905562 C188.81319,93.5905562 30.9711459,7.45172685 21.4212696,2.36549437 C17.8229184,0.233919759 13.7919209,-0.399221214 10.1830173,0.233919759 L146.171146,136.443648 Z"
                                                fill="#00EE76"></path>
                                            <path
                                                d="M146.171146,136.443648 L10.1830173,0.233919759 C4.6641385,1.51075405 0,6.38593954 0,16.3579099 C0,32.270853 0,244.003747 0,257.162527 C0,266.290309 3.60890354,272.864423 10.3940643,273.497564 L146.171146,136.443648 Z"
                                                fill="#00D3FF"></path>
                                        </g>
                                    </svg>
                                    
                                    <div class="flex flex-col ml-2 leading-4 text-left md:ml-3">
                                        <span class="text-sm text-white">
                                            Get it on
                                        </span>
                                        <span class="text-xl font-semibold text-white">
                                            Play Store
                                        </span>
                                    </div>
                                </a>
                                <a href="" target="_blank" class="flex items-center justify-center w-full px-12 py-2 text-center text-white bg-black rounded-2xl sm:rounded-2xl md:w-auto" rel="noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="fill-current w-8 h-8 text-gray-50">
                                        <path d="M 44.527344 34.75 C 43.449219 37.144531 42.929688 38.214844 41.542969 40.328125 C 39.601563 43.28125 36.863281 46.96875 33.480469 46.992188 C 30.46875 47.019531 29.691406 45.027344 25.601563 45.0625 C 21.515625 45.082031 20.664063 47.03125 17.648438 47 C 14.261719 46.96875 11.671875 43.648438 9.730469 40.699219 C 4.300781 32.429688 3.726563 22.734375 7.082031 17.578125 C 9.457031 13.921875 13.210938 11.773438 16.738281 11.773438 C 20.332031 11.773438 22.589844 13.746094 25.558594 13.746094 C 28.441406 13.746094 30.195313 11.769531 34.351563 11.769531 C 37.492188 11.769531 40.8125 13.480469 43.1875 16.433594 C 35.421875 20.691406 36.683594 31.78125 44.527344 34.75 Z M 31.195313 8.46875 C 32.707031 6.527344 33.855469 3.789063 33.4375 1 C 30.972656 1.167969 28.089844 2.742188 26.40625 4.78125 C 24.878906 6.640625 23.613281 9.398438 24.105469 12.066406 C 26.796875 12.152344 29.582031 10.546875 31.195313 8.46875 Z"></path>
                                    </svg>
                                    <div class="flex flex-col ml-2 leading-4 text-left md:ml-3">
                                        <span class="text-sm text-white">Download on the</span>
                                        <span class="text-xl font-semibold text-white">
                                            App Store
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div class="flex w-full style-flex-col md:flex-row gap-y-4 gap-x-8 sm:items-start md:justify-start py-2">
                                <a href="#_" class="inline-flex items-center justify-center w-full px-8 py-2 mb-2 text-md text-white bg-amber-500 rounded-md hover:bg-amber-400 sm:w-auto sm:mb-0"
                                    data-primary="green-400" data-rounded="rounded-2xl" data-primary-reset="">Join for Free
                                </a>
                            </div>

                        </div>
                    </div>                  
            </div>
        </div>
    </section>

    <section class="bg-[#F5F5F5]">               
        <div class="container max-w-xl p-6 py-24 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">                
                    <div class="">
                        <div id="default-carousel" class="relative" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                                    <img src="img/assets/OIG (24).jpeg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="img/assets/OIG (24).jpeg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="img/assets/OIG (24).jpeg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                </div>
                            </div>
                            <!-- Slider indicators -->
                            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                                    data-carousel-slide-to="0"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                                    data-carousel-slide-to="1"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                                    data-carousel-slide-to="2"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                    <span class="hidden">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    <span class="hidden">Next</span>
                                </span>
                            </button>
                        </div>                 
                    </div>
                    <div class="col-span-2 text-black">
                        <div class="font-[sans-serif] space-y-4 ml-16">
                            <h1 class="text-2xl font-bold flex-1">TODAY IN HISTORY</h1>                            
                            <div class="shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] border-2 border-yellow-400 rounded-lg transition-all" role="accordion">
                              <button type="button" class="w-full text-base font-semibold text-left py-5 px-6 text-[#333] flex items-center">
                                <span class="mr-4">Are there any special discounts or promotions available during the event.</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-current ml-auto shrink-0 rotate-180" viewBox="0 0 24 24">
                                  <path fill-rule="evenodd"
                                    d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                    clip-rule="evenodd" data-original="#000000"></path>
                                </svg>
                              </button>
                              <div class="pb-5 px-6">
                                <p class="text-sm text-gray-500 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor auctor arcu,
                                  at fermentum dui. Maecenas vestibulum a turpis in lacinia. Nulla aliquam
                                  auctor purus, vitae dictum dolor sollicitudin vitae. Sed bibendum purus in efficitur consequat. Fusce et
                                  tincidunt arcu.
                                </p>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="text-yellow-400 font-semibold hover:underline text-base">Read more...</a>
                                </div>
                            </div>
                            </div>
                            <div class="shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] border-2 border-transparent hover:border-yellow-400 rounded-lg transition-all" role="accordion">
                              <button type="button" class="w-full text-base font-semibold text-left py-5 px-6 text-[#333] flex items-center">
                                <span class="mr-4">What are the dates and locations for the product launch events?</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-current ml-auto shrink-0 -rotate-90" viewBox="0 0 24 24">
                                  <path fill-rule="evenodd"
                                    d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                    clip-rule="evenodd" data-original="#000000"></path>
                                </svg>
                              </button>
                              <div class="hidden pb-5 px-6">
                                <p class="text-sm text-gray-500">Content</p>
                              </div>
                            </div>
                            <div class="shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] border-2 border-transparent hover:border-yellow-400 rounded-lg transition-all" role="accordion">
                              <button type="button" class="w-full text-base font-semibold text-left py-5 px-6 text-[#333] flex items-center">
                                <span class="mr-4">Can I bring a guest with me to the product launch event?</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-current ml-auto shrink-0 -rotate-90" viewBox="0 0 24 24">
                                  <path fill-rule="evenodd"
                                    d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                    clip-rule="evenodd" data-original="#000000"></path>
                                </svg>
                              </button>
                              <div class="hidden pb-5 px-6">
                                <p class="text-sm text-gray-500">Content</p>
                              </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="bg-[#F5F5F5]">               
        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-8 relative">
            <div class="border-b border-opacity-100 border-amber-500">
                <h1 class="text-4xl antialiased font-semibold leadi text-start dark:text-gray-100">LATEST NEWS</h1>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-10 py-16">     
                <div class="sm:col-span-12 lg:col-span-4">
                    <a href="#">
                        <div class="h-56 bg-cover text-center overflow-hidden"
                            style="background-image: url('/img/services-5.jpg')"
                            title="Woman holding a mug">
                        </div>
                    </a>
                    <div
                        class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                        <div class="lg:pl-0">
                            {{-- <a href="#"
                                class="text-xs text-indigo-600 uppercase font-medium mb-3 flex items-center hover:text-gray-900 transition duration-500 ease-in-out">
                                Fashion
                            </a> --}}
                            <a href="#"
                                class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 transition duration-500 ease-in-out">The
                                perfect summer sweater that you can wear! </a>
                            <p class="text-gray-700 text-xs mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus quia! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-12 lg:col-span-4">
                    <a href="#">
                        <div class="h-56 bg-cover text-center overflow-hidden"
                            style="background-image: url(/img/services-2.jpg)"
                            title="Woman holding a mug">
                        </div>
                    </a>
                    <div
                        class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                        <div class="lg:pl-0">
                            {{-- <a href="#" class="text-xs text-indigo-600 uppercase font-medium mb-3 flex items-center hover:text-gray-900 transition duration-500 ease-in-out">Fashion</a> --}}
                            <a href="#" class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 transition duration-500 ease-in-out">The
                                perfect summer sweater that you can wear! 
                            </a>
                            <p class="text-gray-700 text-xs mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus quia! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-6 lg:col-span-4">
                    <div class="flex items-start mb-5 pb-3">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-24 h-24 bg-cover bg-center"
                                style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&amp;m=1227967060&amp;s=612x612&amp;w=0&amp;h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                            </div>
                        </a>
                        <div class="text-sm text-justify">
                            <a href="#" class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 transition duration-500 ease-in-out">Revenge of the Never Trumpers</a>
                            <p class="text-gray-700 text-xs mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start mb-5 pb-3">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-24 h-24 bg-cover bg-center"
                                style="background-image:url(https://media.gettyimages.com/photos/lionel-messi-and-marcandre-ter-stegen-of-fc-barcelona-waits-in-the-picture-id1266763488?k=6&amp;m=1266763488&amp;s=612x612&amp;w=0&amp;h=8vxz9HfQVfrff5N7d1lBVxtLamRQGK3J3lyHkUuuIiw=);">
                            </div>
                        </a>
                        <div class="text-sm text-justify">
                            <a href="#" class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 transition duration-500 ease-in-out">Revenge of the Never Trumpers</a>
                            <p class="text-gray-700 text-xs mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start mb-3 pb-3">
                    <button type="button" class="px-6 py-2 rounded text-black text-sm tracking-wider font-medium outline-none border-2 border-[#333] hover:bg-[#222] hover:text-white transition-all duration-300">
                        Load more
                    </button>
                    </div>
                    {{-- <div class="flex items-start">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                style="background-image:url(https://media.gettyimages.com/photos/lionel-messi-of-fc-barcelona-looks-dejected-following-his-teams-in-picture-id1266341828?k=6&amp;m=1266341828&amp;s=612x612&amp;w=0&amp;h=FZi-bSrIlOEE01780h79GsbBYPqZo2l3aaCxoktWADY=);">
                            </div>
                        </a>
                        <div class="text-sm w-2/3">
                            <p class="text-gray-600 text-xs">July 23</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-indigo-600 leading-none">Barcelona v Bayern
                                Munich - UEFA Champions League </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    
    
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
@stop