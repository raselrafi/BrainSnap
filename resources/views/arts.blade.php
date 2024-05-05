@extends('layouts.main')

@section('content')

<div class="min-h-screen">
    <section class="bg-[#FCFCFC]">
        <div class="grid md:grid-cols-2 items-center md:gap-64 gap-16 sm:py-8 lg:py-6 font-[sans-serif] text-[#333] max-w-7xl max-md:max-w-md mx-auto">
            <div class="max-md:order-1 max-md:text-end ml-10">
            <h2 class="md:text-4xl text-xl md:leading-10 font-semibold text-black text-start">ART & LITERATURE</h2>
            {{-- <p class="mt-2 md:text-3xl text-xl text-black leading-relaxed text-end">ONE QUESTION AT A TIME!</p> --}}
            {{-- <div class="mt-16 space-y-6 px-10">
                <a href="#_" class="inline-flex items-center justify-center w-full px-8 py-2 mb-2 text-md text-white bg-amber-500 rounded-md hover:bg-amber-400 sm:w-auto sm:mb-0"
                    data-primary="green-400" data-rounded="rounded-2xl" data-primary-reset="">Join for Free
                </a>
            </div> --}}
            </div>
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="/img/assets/arts.jpeg" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
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

    <section class="bg-white text-gray-900">
        <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-4 lg:max-w-7xl">         
            <div class="flex justify-end">
                <div class="inline-flex border border-amber-500 hover:border-amber-600 rounded w-1/4 px-2 lg:px-2 h-10 bg-transparent">
                    <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
                        <div class="flex">
                            <span class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                                <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                        <input type="text" class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs lg:text-base text-gray-500 font-thin" placeholder="Search">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">      
                    <div class="col-span-2">
                        <div class="w-full px-4 md:order-first text-center md:text-left lg:pr-12">
                            <h1 class="text-3xl font-semibold leadi text-center lg:text-left mb-2">OLYMPIC</h1>
                            <button class="w-full border-b-2 border-gray-300 pb-3 text-left group focus:outline-none">
                                <div class="text-md font-semibold text-red-500">Q: What is the airspeed velocity of an unladen swallow?</div>
                                <div class="mt-3 hidden text-gray-700 group-focus:flex">
                                    <p>Ans: Although a definitive answer would of course require further measurements, published species-wide averages of wing length and body mass, initial Strouhal estimates based on those averages and cross-species comparisons, the Lund wind tunnel study of birds flying at a range of speeds, and revised Strouhal numbers based on that study all lead me to estimate that the average cruising airspeed velocity of an unladen European Swallow is roughly 11 meters per second, or 24 miles an hour.</p>
                                </div>
                            </button>
                            <button class="w-full border-b-2 border-gray-300 pb-3 text-left group mt-6 focus:outline-none">
                                <div class="text-md font-semibold text-red-500">Q: What is the tragedy of Darth Plagueis the Wise?</div>
                                <div class="mt-3 hidden text-gray-700 group-focus:flex">
                                    <p>Ans: Darth Plagueis was a Dark Lord of the Sith, so powerful and so wise he could use the Force to influence the midichlorians to create life… He had such a knowledge of the dark side, he could even keep the ones he cared about from dying. He became so powerful… the only thing he was afraid of was losing his power, which eventually, of course, he did.</p>
                                </div>
                            </button>
                            <button class="w-full border-b-2 border-gray-300 pb-3 text-left group mt-6 focus:outline-none">
                                <div class="text-md font-semibold text-red-500">Q: What is the tragedy of Darth Plagueis the Wise?</div>
                                <div class="mt-3 hidden text-gray-700 group-focus:flex">
                                    <p>Ans: Darth Plagueis was a Dark Lord of the Sith, so powerful and so wise he could use the Force to influence the midichlorians to create life… He had such a knowledge of the dark side, he could even keep the ones he cared about from dying. He became so powerful… the only thing he was afraid of was losing his power, which eventually, of course, he did.</p>
                                </div>
                            </button>
                            <button class="w-full border-b-2 border-gray-300 pb-3 text-left group mt-6 focus:outline-none">
                                <div class="text-md font-semibold text-red-500">Q: What is the tragedy of Darth Plagueis the Wise?</div>
                                <div class="mt-3 hidden text-gray-700 group-focus:flex">
                                    <p>Ans: Darth Plagueis was a Dark Lord of the Sith, so powerful and so wise he could use the Force to influence the midichlorians to create life… He had such a knowledge of the dark side, he could even keep the ones he cared about from dying. He became so powerful… the only thing he was afraid of was losing his power, which eventually, of course, he did.</p>
                                </div>
                            </button>
                            <button class="w-full border-b-2 border-gray-300 pb-3 text-left group mt-6 focus:outline-none">
                                <div class="text-md font-semibold text-red-500">Q: Why did the Fellowship of the Ring not fly to Mordor with the Eagles?</div>
                                <div class="mt-3 hidden text-gray-700 group-focus:flex">
                                    <p>Ans: Basically if they had attempted to fly in earlier, they would've been seen by the eye and then utterly demolished by the still strong forces within Mordor as Sauron was still very powerful and his armies were definitely a force to be reckoned with. That being said it is conceivable that a mission that bold could've been completed if the elves had also gotten involved, but they didn't care too much for the whole ordeal.</p>
                                </div>
                            </button>
                            <button class="w-full border-b-2 border-gray-300 pb-3 text-left group mt-6 focus:outline-none">
                                <div class="text-md font-semibold text-red-500">Q: What is the tragedy of Darth Plagueis the Wise?</div>
                                <div class="mt-3 hidden text-gray-700 group-focus:flex">
                                    <p>Ans: Darth Plagueis was a Dark Lord of the Sith, so powerful and so wise he could use the Force to influence the midichlorians to create life… He had such a knowledge of the dark side, he could even keep the ones he cared about from dying. He became so powerful… the only thing he was afraid of was losing his power, which eventually, of course, he did.</p>
                                </div>
                            </button>
                            <button class="w-full border-b-2 border-gray-300 pb-3 text-left group mt-6 focus:outline-none">
                                <div class="text-md font-semibold text-red-500">Q: Why did the Fellowship of the Ring not fly to Mordor with the Eagles?</div>
                                <div class="mt-3 hidden text-gray-700 group-focus:flex">
                                    <p>Ans: Basically if they had attempted to fly in earlier, they would've been seen by the eye and then utterly demolished by the still strong forces within Mordor as Sauron was still very powerful and his armies were definitely a force to be reckoned with. That being said it is conceivable that a mission that bold could've been completed if the elves had also gotten involved, but they didn't care too much for the whole ordeal.</p>
                                </div>
                            </button>
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
        <div class="container mx-auto px-4 py-10">
            <nav class="flex flex-row flex-nowrap justify-between md:justify-center items-center" aria-label="Pagination">
                <ul class="flex space-x-3 justify-center mt-8">
                    <li class="flex items-center justify-center shrink-0 cursor-pointer bg-gray-300 w-9 h-8 rounded">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-500" viewBox="0 0 55.753 55.753">
                        <path
                          d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
                          data-original="#000000" />
                      </svg>
                    </li>
                    <li class="flex items-center justify-center shrink-0 cursor-pointer text-sm font-bold text-amber-500 w-9 h-8 rounded">
                      1
                    </li>
                    <li
                      class="flex items-center justify-center shrink-0 cursor-pointer text-sm font-bold text-amber-500 w-9 h-8 rounded">
                      2
                    </li>
                    <li class="flex items-center justify-center shrink-0 cursor-pointer text-sm font-bold bg-amber-500 text-white w-9 h-8 rounded">
                      3
                    </li>
                    <li class="flex items-center justify-center shrink-0 cursor-pointer text-sm font-bold text-amber-500 w-9 h-8 rounded">
                      4
                    </li>
                    <li class="flex items-center justify-center shrink-0 cursor-pointer text-sm font-bold text-amber-500 w-9 h-8 rounded">
                        5
                    </li>
                    <li class="flex items-center justify-center shrink-0 cursor-pointer bg-gray-300 w-9 h-8 rounded">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-500 rotate-180" viewBox="0 0 55.753 55.753">
                        <path
                          d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
                          data-original="#000000" />
                      </svg>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</div>

@stop

