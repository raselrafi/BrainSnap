@extends('layouts.main')

@section('content')

    <section class="bg-white">
        <div class="grid md:grid-cols-2 items-center md:gap-64 gap-16 sm:py-12 lg:py-8 font-[sans-serif] text-[#333] max-w-7xl max-md:max-w-md mx-auto">
            <div class="max-md:order-1 max-md:text-end p-10">
            <h2 class="md:text-4xl text-xl md:leading-10 font-semibold text-black mb-2">CONTACT US</h2>
            {{-- <p class="mt-2 md:text-md text-sm text-black leading-relaxed">Welcome to BrainSnap, where knowledge meets excitement!</p>
            <div class="mt-16 space-y-6">
                <a href="#_" class="inline-flex items-center justify-center w-full px-8 py-2 mb-2 text-md text-white bg-amber-500 rounded-md hover:bg-amber-400 sm:w-auto sm:mb-0"
                    data-primary="green-400" data-rounded="rounded-2xl" data-primary-reset="">Join for Free
                </a>
            </div> --}}
            </div>
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="/img/ds/contacts.png" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
            </div>
        </div>
        <div class="px-40">
            <div class="flex flex-wrap gap-1 justify-end items-end border-b border-opacity-100 border-yellow-400">
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

    <div class="font-[sans-serif] max-w-7xl mx-auto px-4">
        <div class="bg-white shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] my-12 p-8">
            <h2 class="text-3xl text-[#333] font-semibold text-start mb-12">WRITE US A MESSAGE</h2>
        <div class="grid lg:grid-cols-2 items-start gap-16">
                <form>
                    <div class="space-y-4">
                        <div class="flex flex-wrap -mx-3 mb-3">

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    First Name
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                            </div>

                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                    Last Name
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                            </div>

                        </div>
                        <div class="flex flex-wrap -mx-3 mb-3">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Email Address
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-email" type="email" placeholder="********@*****.**">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-3">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Your Message
                                </label>
                                <textarea rows="6" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                            </div>
                            <div class="flex justify-end w-full px-3">
                                <button type='button' class="text-white bg-amber-500 hover:bg-blue-700 font-semibold rounded text-sm px-6 py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='currentColor' class="mr-2 inline" viewBox="0 0 548.244 548.244">
                                        <path fill-rule="evenodd" d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z" clip-rule="evenodd" data-original="#000000" />
                                    </svg>
                                    Send Message
                                </button>
                            </div>
            
                        </div>
                    </div>
                </form>
                <div class="grid sm:grid-cols-1 gap-8 px-16">
                    <div class="flex items-start bg-white">
                        <h6 class="mb-2 flex items-center justify-center font-semibold uppercase md:justify-start">
                            <img src="img/logo.png" class="w-16 h-16" alt="">
                            <div class="flex flex-col justify-center align-middle ml-4">
                                <p class="text-lg text-semibold uppercase text-amber-500 font-qualy">Darco
                                    <a class="text-black">Technologies Limited</a>
                                </p>
                                <p class="text-sm text-black font-calibri capitalize">We Integrate technology...</p>
                            </div>
                        </h6>
                    </div>
                    <div class="flex items-start bg-white">
                        <div class="shadow-[0_0px_2px_0px_rgba(6,81,237,0.3)] rounded p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 512 512">
                                <path d="M341.476 338.285c54.483-85.493 47.634-74.827 49.204-77.056C410.516 233.251 421 200.322 421 166 421 74.98 347.139 0 256 0 165.158 0 91 74.832 91 166c0 34.3 10.704 68.091 31.19 96.446l48.332 75.84C118.847 346.227 31 369.892 31 422c0 18.995 12.398 46.065 71.462 67.159C143.704 503.888 198.231 512 256 512c108.025 0 225-30.472 225-90 0-52.117-87.744-75.757-139.524-83.715zm-194.227-92.34a15.57 15.57 0 0 0-.517-.758C129.685 221.735 121 193.941 121 166c0-75.018 60.406-136 135-136 74.439 0 135 61.009 135 136 0 27.986-8.521 54.837-24.646 77.671-1.445 1.906 6.094-9.806-110.354 172.918L147.249 245.945zM256 482c-117.994 0-195-34.683-195-60 0-17.016 39.568-44.995 127.248-55.901l55.102 86.463a14.998 14.998 0 0 0 25.298 0l55.101-86.463C411.431 377.005 451 404.984 451 422c0 25.102-76.313 60-195 60z" data-original="#000000"></path>
                                <path d="M256 91c-41.355 0-75 33.645-75 75s33.645 75 75 75 75-33.645 75-75-33.645-75-75-75zm0 120c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45z" data-original="#000000"></path>
                            </svg>
                        </div>
                        <div class="ml-6">
                            <h4 class="text-[#333] text-base font-semibold">House: 1150 Road: 9/A Avenue: 11,</h4>
                            <p class="text-base font-semibold text-[#333]">Mirpur DOHS, Dhaka-1216, Bangladesh.</p>
                        </div>
                    </div>
                    <div class="flex items-start bg-white">
                        <div class="shadow-[0_0px_2px_0px_rgba(6,81,237,0.3)] rounded p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 473.806 473.806">
                                <path d="M374.456 293.506c-9.7-10.1-21.4-15.5-33.8-15.5-12.3 0-24.1 5.3-34.2 15.4l-31.6 31.5c-2.6-1.4-5.2-2.7-7.7-4-3.6-1.8-7-3.5-9.9-5.3-29.6-18.8-56.5-43.3-82.3-75-12.5-15.8-20.9-29.1-27-42.6 8.2-7.5 15.8-15.3 23.2-22.8 2.8-2.8 5.6-5.7 8.4-8.5 21-21 21-48.2 0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5-6-6.2-12.3-12.6-18.8-18.6-9.7-9.6-21.3-14.7-33.5-14.7s-24 5.1-34 14.7l-.2.2-34 34.3c-12.8 12.8-20.1 28.4-21.7 46.5-2.4 29.2 6.2 56.4 12.8 74.2 16.2 43.7 40.4 84.2 76.5 127.6 43.8 52.3 96.5 93.6 156.7 122.7 23 10.9 53.7 23.8 88 26 2.1.1 4.3.2 6.3.2 23.1 0 42.5-8.3 57.7-24.8.1-.2.3-.3.4-.5 5.2-6.3 11.2-12 17.5-18.1 4.3-4.1 8.7-8.4 13-12.9 9.9-10.3 15.1-22.3 15.1-34.6 0-12.4-5.3-24.3-15.4-34.3l-54.9-55.1zm35.8 105.3c-.1 0-.1.1 0 0-3.9 4.2-7.9 8-12.2 12.2-6.5 6.2-13.1 12.7-19.3 20-10.1 10.8-22 15.9-37.6 15.9-1.5 0-3.1 0-4.6-.1-29.7-1.9-57.3-13.5-78-23.4-56.6-27.4-106.3-66.3-147.6-115.6-34.1-41.1-56.9-79.1-72-119.9-9.3-24.9-12.7-44.3-11.2-62.6 1-11.7 5.5-21.4 13.8-29.7l34.1-34.1c4.9-4.6 10.1-7.1 15.2-7.1 6.3 0 11.4 3.8 14.6 7l.3.3c6.1 5.7 11.9 11.6 18 17.9 3.1 3.2 6.3 6.4 9.5 9.7l27.3 27.3c10.6 10.6 10.6 20.4 0 31-2.9 2.9-5.7 5.8-8.6 8.6-8.4 8.6-16.4 16.6-25.1 24.4-.2.2-.4.3-.5.5-8.6 8.6-7 17-5.2 22.7l.3.9c7.1 17.2 17.1 33.4 32.3 52.7l.1.1c27.6 34 56.7 60.5 88.8 80.8 4.1 2.6 8.3 4.7 12.3 6.7 3.6 1.8 7 3.5 9.9 5.3.4.2.8.5 1.2.7 3.4 1.7 6.6 2.5 9.9 2.5 8.3 0 13.5-5.2 15.2-6.9l34.2-34.2c3.4-3.4 8.8-7.5 15.1-7.5 6.2 0 11.3 3.9 14.4 7.3l.2.2 55.1 55.1c10.3 10.2 10.3 20.7.1 31.3zm-154.2-286.1c26.2 4.4 50 16.8 69 35.8s31.3 42.8 35.8 69c1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.4-1.2 12.3-8.2 11.1-15.6-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3 3.7-15.6 11s3.5 14.4 10.9 15.6zm217.2 96.3c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2 3.7-15.5 11-1.2 7.4 3.7 14.3 11.1 15.6 46.6 7.9 89.1 30 122.9 63.7 33.8 33.8 55.8 76.3 63.7 122.9 1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.3-1.1 12.3-8.1 11-15.4z" data-original="#000000"></path>
                            </svg>
                        </div>
                        <div class="ml-6 mt-3">
                            <h4 class="text-[#333] text-base font-semibold">Tel: (+880) 9617171125</h4>
                            {{-- <p class="text-sm tect-gray-400 mt-2"> +158 996 888</p> --}}
                        </div>
                    </div>
                    <div class="flex items-start bg-white">
                        <div class="shadow-[0_0px_2px_0px_rgba(6,81,237,0.3)] rounded p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 32 32">
                                <path d="M8 30a1.001 1.001 0 0 1-1-1v-5H4c-1.654 0-3-1.346-3-3V5c0-1.654 1.346-3 3-3h24c1.654 0 3 1.346 3 3v16c0 1.654-1.346 3-3 3H15.851l-7.226 5.781A.998.998 0 0 1 8 30zM4 4c-.552 0-1 .449-1 1v16c0 .551.448 1 1 1h4a1 1 0 0 1 1 1v3.92l5.875-4.701A1 1 0 0 1 15.5 22H28c.552 0 1-.449 1-1V5c0-.551-.448-1-1-1z" data-original="#000000"></path>
                                <path d="M24 12H8a1 1 0 1 1 0-2h16a1 1 0 1 1 0 2zm-8 4H8a1 1 0 1 1 0-2h8a1 1 0 1 1 0 2z" data-original="#000000"></path>
                            </svg>
                        </div>
                        <div class="ml-6">
                            <h4 class="text-[#333] text-base font-semibold">info@gyankosh.info</h4>
                            <p class="text-sm tect-gray-400 font-semibold">info@darcoltd.com</p>
                        </div>
                    </div>
                    <div class="flex items-start bg-white">
                        <div class="shadow-[0_0px_2px_0px_rgba(6,81,237,0.3)] rounded p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"></path>
                            </svg>
                        </div>
                        <div class="ml-6 mt-2">
                            <h4 class="text-[#333] text-base font-semibold">www.darcoltd.com</h4>
                            {{-- <p class="text-sm tect-gray-400 mt-2">+1-548-2588</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-4 lg:max-w-7xl -mt-5">
        <div class="rounded-sm overflow-hidden">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14597.774085737583!2d90.37566480000001!3d23.8383795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70dcadc56f7%3A0xb946328559001e9!2sDarco%20Technologies%20Limited!5e0!3m2!1sen!2sbd!4v1698915827908!5m2!1sen!2sbd"
                class="w-full" style="height: 350px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    {{-- <div class="font-[sans-serif] max-w-7xl mx-auto px-4">
        <div class="bg-white shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] my-12 p-8">
            <h2 class="text-4xl text-[#333] font-semibold text-center mb-12">SIGN UP</h2>
        <div class="grid lg:grid-cols-2 items-start gap-16">
                <div aria-hidden="true" class="mt-10 lg:mt-0">
                    <img src="img/ds/login.png" alt="" class="mx-auto rounded-lg dark:bg-gray-500">
                <div class="mt-8 space-y-2 px-16">
                    <h1 class="text-2xl font-semibold leadi sm:text-4xl text-start text-black">NICE TO MEET YOU!</h1>
                    <h2 class="text-sm font-semibold leadi sm:text-sm text-start text-black">WE'RE EXCITED TO HAVE YOU WITH US.</h2>
                </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2 px-8">
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    First Name
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Email Address
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="email" placeholder="********@*****.**">
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Password
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="Password" type="password" placeholder="p*************">
                            </div>
                        </div>

                        <div>
                            <h2 class="mb-2 text-xl font-semibold leadi">Occupaton</h2>
                            <div class="flex flex-wrap">
                                <div class="flex items-center me-4">
                                    <input id="red-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="red-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Student</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="green-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="green-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Teacher</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input checked id="purple-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="purple-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                                </div>
                            </div>                            
                        </div>

                        <div class="mt-5">
                            <h2 class="mb-2 text-xl font-semibold leadi">Level</h2>
                            <div class="flex flex-wrap">
                                <div class="flex items-center me-4">
                                    <input id="red-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="red-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">School</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="green-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="green-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">College</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input checked id="purple-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="purple-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">University</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input checked id="purple-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="purple-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Job</label>
                                </div>
                            </div>                            
                        </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="bg-gray-100">
        <div class="container flex flex-col justify-center p-6 mx-auto lg:px-8 lg:max-w-7xl sm:py-8 lg:py-8 lg:flex-row lg:justify-between">
            <div class="flex items-center py-5 md:w-1/2 md:pr-10">
                <div class="text-left">
                    <h1 class="text-4xl font-semibold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-4xl">
                        TEAM 
                        <span class="font-semibold text-blue-500">MIRPUR</span>
                    </h1>
                    <h2 class="mt-8 text-4xl font-semibold leading-10 tracking-tight text-green-500 sm:text-5xl sm:leading-none md:text-7xl">
                        Won
                    </h2>
                    {{-- <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate dignissim augue, Nullam vulputate dignissim augue.
                    </p> --}}
                </div>
            </div>
            <div class="flex items-center py-5 md:w-1/2 md:pl-48">
                <div class="relative w-full p-3 rounded  md:p-8">
                    <div class="text-left">
                        <h1 class="text-4xl font-semibold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-4xl">
                            TIMES 
                            <span class="font-semibold text-blue-500">UP!</span>
                        </h1>
                        <h2 class="mt-8 text-4xl font-semibold leading-10 tracking-tight text-green-500 sm:text-5xl sm:leading-none md:text-2xl">
                            Average time taken
                            <span class="font-semibold text-blue-500">32 seconds</span>
                        </h2>
                        {{-- <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate dignissim augue, Nullam vulputate dignissim augue.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex flex-col justify-center p-6 mx-auto lg:px-8 lg:max-w-7xl sm:py-8 lg:py-8 lg:flex-row lg:justify-between">
            <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                <div class="flex flex-col max-w-md p-6 space-y-4 divide-y sm:w-96 sm:p-10 dark:divide-gray-700 dark:bg-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold">Quiz Details</h2>
                    <ul class="flex flex-col pt-4 space-y-2">
                        <li class="flex items-start justify-between">
                            <h3>Total Questions</h3>
                            <div class="text-right">
                                <span class="block">100</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $2.50</span> --}}
                            </div>
                        </li>
                        <li class="flex items-start justify-between">
                            <h3>Correct Answers</h3>
                            <div class="text-right">
                                <span class="block">80</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $2.75</span> --}}
                            </div>
                        </li>
                        <li class="flex items-start justify-between">
                            <h3>Incorrect Answers</h3>
                            <div class="text-right">
                                <span class="block">20</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $1.75</span> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                <div class="flex flex-col max-w-md p-6 space-y-4 divide-y sm:w-96 sm:p-10 dark:divide-gray-700 dark:bg-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold">Quiz Details</h2>
                    <ul class="flex flex-col pt-4 space-y-2">
                        <li class="flex items-start justify-between">
                            <h3>Total Questions</h3>
                            <div class="text-right">
                                <span class="block">100</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $2.50</span> --}}
                            </div>
                        </li>
                        <li class="flex items-start justify-between">
                            <h3>Correct Answers</h3>
                            <div class="text-right">
                                <span class="block">80</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $2.75</span> --}}
                            </div>
                        </li>
                        <li class="flex items-start justify-between">
                            <h3>Incorrect Answers</h3>
                            <div class="text-right">
                                <span class="block">20</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $1.75</span> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-start lg:pt-2">
            <div>
                <h3 class="text-xl font-semibold">Congratulations on passing! You've offcially joined the 'Barely Made It Club' – where</h3>
                <p class="text-xl font-semibold">success has its own unique charm!</p>
            </div>
            <div class="mt-12 flex flex-col justify-end gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6">
                <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-gray-100 px-5 py-1.5 text-sm font-semibold text-black transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Exit</button>         
                <button type="submit" class="w-max rounded-md border-2 border-gray-500 bg-gray-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Share</button>
                <button type="submit" class="w-max rounded-md border-2 border-blue-500 bg-blue-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">View Answers</button>
                <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-amber-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Reset Session</button>
            </div>
        </div> 
    </section>

    <section class="bg-gray-100">
        <div class="container flex flex-col justify-center p-6 mx-auto lg:px-8 lg:max-w-7xl sm:py-8 lg:py-8 lg:flex-row lg:justify-between">
            <div class="flex items-center py-5 md:w-1/2 md:pr-10">
                <div class="text-left">
                    {{-- <h1 class="text-4xl font-extrabold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-4xl">
                        TEAM 
                        <span class="font-bold text-blue-500">MIRPUR</span>
                    </h1> --}}
                    <h2 class="text-4xl font-semibold leading-10 tracking-tight text-red-600 sm:text-5xl sm:leading-none md:text-8xl">
                        Fail
                    </h2>
                </div>
            </div>
            <div class="flex items-center py-5 md:w-1/2 md:pl-48">
                <div class="relative w-full p-3 rounded  md:p-8">
                    <div class="text-left">
                        <h1 class="text-4xl font-semibold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-4xl">
                            TIMES 
                            <span class="font-semibold text-blue-500">UP!</span>
                        </h1>
                        <h2 class="mt-8 text-4xl font-semibold leading-10 tracking-tight text-green-500 sm:text-5xl sm:leading-none md:text-2xl">
                            Average time taken
                            <span class="font-semibold text-blue-500">32 seconds</span>
                        </h2>
                        {{-- <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate dignissim augue, Nullam vulputate dignissim augue.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex flex-col justify-center p-6 mx-auto lg:px-8 lg:max-w-7xl sm:py-8 lg:py-8 lg:flex-row lg:justify-between">
            <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                <div class="flex flex-col max-w-md p-6 space-y-4 divide-y sm:w-96 sm:p-10 dark:divide-gray-700 dark:bg-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold">Quiz Details</h2>
                    <ul class="flex flex-col pt-4 space-y-2">
                        <li class="flex items-start justify-between">
                            <h3>Total Questions</h3>
                            <div class="text-right">
                                <span class="block">100</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $2.50</span> --}}
                            </div>
                        </li>
                        <li class="flex items-start justify-between">
                            <h3>Correct Answers</h3>
                            <div class="text-right">
                                <span class="block">10</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $2.75</span> --}}
                            </div>
                        </li>
                        <li class="flex items-start justify-between">
                            <h3>Incorrect Answers</h3>
                            <div class="text-right">
                                <span class="block">100</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $1.75</span> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-start lg:pt-2">
            <div>
                <h3 class="text-xl font-semibold">Failing a quiz is like a plot twist in your academic story. Keep reading;</h3>
                <p class="text-xl font-semibold">the best chapters are yet to come!</p>
            </div>
            <div class="mt-12 flex flex-col justify-end gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6">
                <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-gray-100 px-5 py-1.5 text-sm font-semibold text-black transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Exit</button>         
                <button type="submit" class="w-max rounded-md border-2 border-gray-500 bg-gray-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Share</button>
                <button type="submit" class="w-max rounded-md border-2 border-blue-500 bg-blue-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">View Answers</button>
                <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-amber-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Reset Session</button>
            </div>
        
        </div>
    </section>

<div class="container flex flex-col p-6 mx-auto lg:px-8 max-w-7xl sm:py-8 lg:py-8 lg:flex-row justify-center">
    <div class="space-x-80 flex justify-center mt-16 ">

        <div class="relative">
            <div class="text-left">
                <h1 class="text-4xl font-semibold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-4xl">TEAM MIRPUR</h1>
                <h1 class="text-4xl font-semibold leading-10 tracking-tight text-green-600 sm:text-5xl sm:leading-none md:text-8xl">Pass</h1>
            </div>
        </div>
      
        <div class="relative">
            <h1 class="text-4xl font-semibold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-4xl">
                TIMES 
            </h1>
            <h2 class="text-4xl font-semibold leading-10 tracking-tight text-green-500 sm:text-5xl sm:leading-none md:text-2xl">
                Average time taken
            </h2>
        </div>
      
        <div class="relative">
            <div class="text-left">
                <h2 class="mt-10 text-4xl font-semibold leading-10 tracking-tight text-green-500 sm:text-5xl sm:leading-none md:text-2xl">
                    <span class="font-semibold text-blue-500">32 seconds</span>
                </h2>
            </div>
        </div>
      
    </div>
</div>

<div class="font-[sans-serif] text-[#333] container flex flex-col p-6 mx-auto lg:px-8 max-w-7xl sm:py-8 lg:py-8 lg:flex-row justify-center">
    <div class="grid lg:grid-cols-2 sm:grid-cols-2 gap-x-6 gap-y-12 divide-x divide-gray-300">
      <div class="text-center">
        <div class="flex flex-col max-w-md p-6 space-y-4 divide-y sm:w-96 sm:p-10 dark:divide-gray-700 dark:bg-gray-900 dark:text-gray-100">
            <h2 class="text-xl font-semibold">Quiz Details</h2>
            <ul class="flex flex-col pt-4 space-y-2">
                <li class="flex items-start justify-between">
                    <h3>Total Questions</h3>
                    <div class="text-right">
                        <span class="block">100</span>
                        {{-- <span class="text-sm dark:text-gray-400">à $2.50</span> --}}
                    </div>
                </li>
                <li class="flex items-start justify-between">
                    <h3>Correct Answers</h3>
                    <div class="text-right">
                        <span class="block">10</span>
                        {{-- <span class="text-sm dark:text-gray-400">à $2.75</span> --}}
                    </div>
                </li>
                <li class="flex items-start justify-between">
                    <h3>Incorrect Answers</h3>
                    <div class="text-right">
                        <span class="block">100</span>
                        {{-- <span class="text-sm dark:text-gray-400">à $1.75</span> --}}
                    </div>
                </li>
            </ul>
        </div>
      </div>
      <div class="text-center">
                <div class="flex flex-col max-w-md p-6 space-y-4 divide-y sm:w-96 sm:p-10 dark:divide-gray-700 dark:bg-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold">Quiz Details</h2>
                    <ul class="flex flex-col pt-4 space-y-2">
                        <li class="flex items-start justify-between">
                            <h3>Total Questions</h3>
                            <div class="text-right">
                                <span class="block">100</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $2.50</span> --}}
                            </div>
                        </li>
                        <li class="flex items-start justify-between">
                            <h3>Correct Answers</h3>
                            <div class="text-right">
                                <span class="block">10</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $2.75</span> --}}
                            </div>
                        </li>
                        <li class="flex items-start justify-between">
                            <h3>Incorrect Answers</h3>
                            <div class="text-right">
                                <span class="block">100</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $1.75</span> --}}
                            </div>
                        </li>
                    </ul>
                </div>
      </div>
    </div>
</div>


    <section class="bg-gray-300">
        <div class="container flex flex-col justify-center p-6 mx-auto lg:px-8 lg:max-w-7xl sm:py-8 lg:py-8 lg:flex-row lg:justify-between">
            <div class="flex items-center py-5 md:w-1/2 md:pr-10">
                <div class="text-left">
                    <h1 class="text-4xl font-semibold leading-10 tracking-tight text-green-600 sm:text-5xl sm:leading-none md:text-8xl">
                        Pass
                    </h1>
                </div>
            </div>
            <div class="flex items-center py-5 md:w-1/2 md:pl-48">
                <div class="relative w-full p-3 rounded  md:p-8">
                    <div class="text-left">
                        <h1 class="text-4xl font-semibold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-4xl">
                            TIMES 
                            <span class="font-semibold text-blue-500">UP!</span>
                        </h1>
                        <h2 class="mt-8 text-4xl font-semibold leading-10 tracking-tight text-green-500 sm:text-5xl sm:leading-none md:text-2xl">
                            Average time taken
                            <span class="font-semibold text-blue-500">32 seconds</span>
                        </h2>
                        {{-- <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate dignissim augue, Nullam vulputate dignissim augue.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex flex-col justify-center p-6 mx-auto lg:px-8 lg:max-w-7xl sm:py-8 lg:py-8 lg:flex-row lg:justify-between">
        <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm">
                <div class="flex flex-col max-w-md p-6 space-y-4 divide-y sm:w-96 sm:p-10 dark:divide-gray-700 dark:bg-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold">Quiz Details</h2>
                    <ul class="flex flex-col pt-4 space-y-2">
                        <li class="flex items-start justify-between">
                            <h3>Total Questions</h3>
                            <div class="text-right">
                                <span class="block">100</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $2.50</span> --}}
                            </div>
                        </li>
                        <li class="flex items-start justify-between">
                            <h3>Correct Answers</h3>
                            <div class="text-right">
                                <span class="block">10</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $2.75</span> --}}
                            </div>
                        </li>
                        <li class="flex items-start justify-between">
                            <h3>Incorrect Answers</h3>
                            <div class="text-right">
                                <span class="block">100</span>
                                {{-- <span class="text-sm dark:text-gray-400">à $1.75</span> --}}
                            </div>
                        </li>
                    </ul>
                </div>
        </div>
        </div>  
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-start lg:pt-2">
            <div>
                <h3 class="text-xl font-semibold">Congratulations on passing! You've offcially joined the 'Barely Made It Club' – where</h3>
                <p class="text-xl font-semibold">success has its own unique charm!</p>
            </div>
            <div class="mt-12 flex flex-col justify-end gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6">
                <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-gray-100 px-5 py-1.5 text-sm font-semibold text-black transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Exit</button>         
                <button type="submit" class="w-max rounded-md border-2 border-gray-500 bg-gray-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Share</button>
                <button type="submit" class="w-max rounded-md border-2 border-blue-500 bg-blue-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">View Answers</button>
                <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-amber-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Reset Session</button>
            </div>       
        </div>
    </section>

    <section class="bg-gray-100">
        <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
            <div class="flex flex-col mx-auto lg:flex-row">
                <div class="flex flex-col w-full p-6 lg:w-2/3 md:p-8 lg:p-12">
                    <h2 class="text-4xl font-semibold leadi">YOUR QUIZ WILL START IN</h2>
                    {{-- <p class="mt-4 mb-8 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non voluptatum rem amet!</p> --}}
                    {{-- <button class="self-start px-10 py-3 text-lg font-medium rounded-3xl dark:bg-violet-400 dark:text-gray-900">Get started</button> --}}
                </div>
                <div class="w-full lg:w-1/3">
                    <div id="app"></div>
                </div>
            </div>
            <div class="flex flex-col justify-center p-6 mx-auto lg:px-8 lg:max-w-7xl sm:py-8 lg:py-8 lg:flex-row lg:justify-between rounded-lg border border-gray-200 shadow-sm">
                <div class="divide-y divide-gray-200">
                    <div class="flex flex-col max-w-md p-6 space-y-4 divide-y sm:w-96 sm:p-10 dark:divide-gray-700 dark:bg-gray-900 dark:text-gray-100">
                        <h2 class="text-xl font-semibold">TEAM MIRPUR</h2>
                        <ul class="flex flex-col pt-4 space-y-2">
                            <li class="flex items-start justify-between">
                                <h3>Member 1</h3>
                                <a href="" class="text-green-600">Online</a>
                                <div class="text-right">
                                    <input id="link-radio" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    {{-- <span class="text-sm dark:text-gray-400">à $2.50</span> --}}
                                </div>
                            </li>
                            <li class="flex items-start justify-between">
                                <h3>Member 2</h3>
                                <a href="" class="text-green-600">Online</a>
                                <div class="text-right">
                                    <input id="link-radio" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    {{-- <span class="text-sm dark:text-gray-400">à $2.75</span> --}}
                                </div>
                            </li>
                            <li class="flex items-start justify-between">
                                <h3>Member 3</h3>
                                <a href="" class="text-green-600">Online</a>
                                <div class="text-right">
                                    <input id="link-radio" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    {{-- <span class="text-sm dark:text-gray-400">à $1.75</span> --}}
                                </div>
                            </li>
                            <li class="flex items-start justify-between">
                                <h3>Member 4</h3>
                                <a href="" class="text-green-600">Online</a>
                                <div class="text-right">
                                    <input id="link-radio" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    {{-- <span class="text-sm dark:text-gray-400">à $1.75</span> --}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="flex flex-col max-w-md p-6 space-y-4 divide-y sm:w-96 sm:p-10 dark:divide-gray-700 dark:bg-gray-900 dark:text-gray-100">
                        <h2 class="text-xl font-semibold">TEAM UTTRA</h2>
                        <ul class="flex flex-col pt-4 space-y-2">
                            <li class="flex items-start justify-between">
                                <h3>Member 1</h3>
                                <a href="" class="text-green-600">Online</a>
                                <div class="text-right">
                                    <input id="link-radio" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    {{-- <span class="text-sm dark:text-gray-400">à $2.50</span> --}}
                                </div>
                            </li>
                            <li class="flex items-start justify-between">
                                <h3>Member 2</h3>
                                <a href="" class="text-green-600">Online</a>
                                <div class="text-right">
                                    <input id="link-radio" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    {{-- <span class="text-sm dark:text-gray-400">à $2.75</span> --}}
                                </div>
                            </li>
                            <li class="flex items-start justify-between">
                                <h3>Member 3</h3>
                                <a href="" class="text-green-600">Online</a>
                                <div class="text-right">
                                    <input id="link-radio" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    {{-- <span class="text-sm dark:text-gray-400">à $1.75</span> --}}
                                </div>
                            </li>
                            <li class="flex items-start justify-between">
                                <h3>Member 4</h3>
                                <a href="" class="text-green-600">Online</a>
                                <div class="text-right">
                                    <input id="link-radio" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    {{-- <span class="text-sm dark:text-gray-400">à $1.75</span> --}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-end gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6">
                <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-gray-100 px-8 py-1.5 text-sm font-semibold text-black transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Cancel</button>         
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="border rounded-md p-4 w-full mx-auto max-w-4xl">
            
            <h4 class="text-xl lg:text-4xl font-semibold">
                WHO IS THE DESIGNER OF NATIONAL MEMORIAL OF BANGLADESH?
            </h4>
        
            <div>
                <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
                    <input type="radio" name="Country">
                    <i class="pl-2">Syed Mainul Hossain</i>
                </label>
        
                <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
                    <input type="radio" name="Country">
                    <i class="pl-2">Hamidur Rahman</i>
                </label>
        
                <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
                    <input type="radio" name="Country">
                    <i class="pl-2">Mohammad Idris</i>
                </label>
        
                <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
                    <input type="radio" name="Country">
                    <i class="pl-2">S. N. Saha</i>
                </label>
        
            </div>

            <div class="px-5 py-5 flex flex-col justify-between gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6">
                <button type="submit" class="w-max rounded-md border-2 border-amber-400 px-5 py-1.5 text-sm font-semibold text-amber-400 transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-gray-300">Exit Session</button>
                <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-amber-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Next Question</button>            
            </div>

        </div>
    </section>

    <section>
        <div class="p-10">
            <div class="relative max-w-7xl mx-auto">
                <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                    <div class="flex-1 px-6 py-8 lg:p-12 bg-gray-300">
                        <p class="mt-2 text-base text-gray-50 sm:text-xl">
                            WHO IS THE DESIGNER OF NATIONAL MEMORIAL OF BANGLADESH?
                        </p>
                        <div class="mt-2">
                            <div class="flex items-center">
                                <div class="flex-1 border-t-2 border-gray-200"></div>
                            </div>
                            <div>
                                <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
                                    <input type="radio" name="Country">
                                    <i class="pl-2">Syed Mainul Hossain</i>
                                </label>
                        
                                <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
                                    <input type="radio" name="Country">
                                    <i class="pl-2">Hamidur Rahman</i>
                                </label>
                        
                                <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
                                    <input type="radio" name="Country">
                                    <i class="pl-2">Mohammad Idris</i>
                                </label>
                        
                                <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
                                    <input type="radio" name="Country">
                                    <i class="pl-2">S. N. Saha</i>
                                </label>
                        
                            </div>
                            <div class="py-12 flex item-center justify-between">
                                <button type="submit" class="w-max rounded-md border-2 border-amber-400 px-5 py-1.5 text-sm font-semibold text-amber-400 transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-gray-300">Exit Session</button>
                                <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-amber-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Next Question</button>            
                            </div>
                        </div>
                    </div>
                    <div class="py-4 px-4 text-center lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-4 bg-gray-300">
                        <p class="text-2xl leading-6 font-medium text-white mb-2">Current Score</p>
                        <table class="w-full mx-auto">
                            <thead>
                            <tr class="bg-yellow-500 text-white">
                                <th class="py-2 px-4 text-left">NO: </th>
                                <th class="py-2 px-4 text-left">Name: </th>
                                <th class="py-2 px-4 text-left">Marks: </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-white border-b border-blue-500">
                                <td class="py-2 px-4">01</td>
                                <td class="py-2 px-4">Mirpur 1</td>
                                <td class="py-2 px-4">100</td>
                            </tr>
                            <tr class="bg-white border-b border-blue-500">
                                <td class="py-2 px-4">02</td>
                                <td class="py-2 px-4">Mirpur 2</td>
                                <td class="py-2 px-4">90</td>
                            </tr>
                            <tr class="bg-white border-b border-blue-500">
                                <td class="py-2 px-4">03</td>
                                <td class="py-2 px-4">Mirpur 3</td>
                                <td class="py-2 px-4">70</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="space-y-3">
                            <div class="uppercase dark:text-gray-50 mt-10 mb-2">Social media</div>
                            <div class="flex justify-center space-x-3">
                                <a rel="noopener noreferrer" href="#" title="Facebook" class="flex items-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
                                        <path d="M32 16c0-8.839-7.167-16-16-16-8.839 0-16 7.161-16 16 0 7.984 5.849 14.604 13.5 15.803v-11.177h-4.063v-4.625h4.063v-3.527c0-4.009 2.385-6.223 6.041-6.223 1.751 0 3.584 0.312 3.584 0.312v3.937h-2.021c-1.984 0-2.604 1.235-2.604 2.5v3h4.437l-0.713 4.625h-3.724v11.177c7.645-1.199 13.5-7.819 13.5-15.803z"></path>
                                    </svg>
                                </a>
                                <a rel="noopener noreferrer" href="#" title="Twitter" class="flex items-center p-1">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current">
                                        <path d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z"></path>
                                    </svg>
                                </a>
                                <a rel="noopener noreferrer" href="#" title="Instagram" class="flex items-center p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5 fill-current">
                                        <path d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959 2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="border rounded-md w-full mx-auto max-w-7xl">
        <div class="border border-gray-300 shadow-sm rounded-lg overflow-hidden max-w-md mx-auto my-10">
            <div>
                <h1 class="text-center text-4xl py-5 px-5 uppercase">Select Team</h1>
            </div>
            <table class="w-full text-sm leading-5">
              <tbody>
                <tr>
                  <td class="py-3 px-4 text-left font-medium text-gray-600">Team Mirpur</td>
                  <td class="py-3 px-4 text-left">
                    <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 348.882 348.882" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier"> <g> <path d="M333.988,11.758l-0.42-0.383C325.538,4.04,315.129,0,304.258,0c-12.187,0-23.888,5.159-32.104,14.153L116.803,184.231 c-1.416,1.55-2.49,3.379-3.154,5.37l-18.267,54.762c-2.112,6.331-1.052,13.333,2.835,18.729c3.918,5.438,10.23,8.685,16.886,8.685 c0,0,0.001,0,0.001,0c2.879,0,5.693-0.592,8.362-1.76l52.89-23.138c1.923-0.841,3.648-2.076,5.063-3.626L336.771,73.176 C352.937,55.479,351.69,27.929,333.988,11.758z M130.381,234.247l10.719-32.134l0.904-0.99l20.316,18.556l-0.904,0.99 L130.381,234.247z M314.621,52.943L182.553,197.53l-20.316-18.556L294.305,34.386c2.583-2.828,6.118-4.386,9.954-4.386 c3.365,0,6.588,1.252,9.082,3.53l0.419,0.383C319.244,38.922,319.63,47.459,314.621,52.943z">
                        </path> 
                            <path d="M303.85,138.388c-8.284,0-15,6.716-15,15v127.347c0,21.034-17.113,38.147-38.147,38.147H68.904 c-21.035,0-38.147-17.113-38.147-38.147V100.413c0-21.034,17.113-38.147,38.147-38.147h131.587c8.284,0,15-6.716,15-15 s-6.716-15-15-15H68.904c-37.577,0-68.147,30.571-68.147,68.147v180.321c0,37.576,30.571,68.147,68.147,68.147h181.798 c37.576,0,68.147-30.571,68.147-68.147V153.388C318.85,145.104,312.134,138.388,303.85,138.388z">
                            </path> 
                        </g> 
                        </g>
                    </svg>
                  </td>
                </tr>
                <tr class="bg-gray-50">
                  <td class="py-3 px-4 text-left font-medium text-gray-600">Team Utara</td>
                  <td class="py-3 px-4 text-left">
                    <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 348.882 348.882" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier"> <g> <path d="M333.988,11.758l-0.42-0.383C325.538,4.04,315.129,0,304.258,0c-12.187,0-23.888,5.159-32.104,14.153L116.803,184.231 c-1.416,1.55-2.49,3.379-3.154,5.37l-18.267,54.762c-2.112,6.331-1.052,13.333,2.835,18.729c3.918,5.438,10.23,8.685,16.886,8.685 c0,0,0.001,0,0.001,0c2.879,0,5.693-0.592,8.362-1.76l52.89-23.138c1.923-0.841,3.648-2.076,5.063-3.626L336.771,73.176 C352.937,55.479,351.69,27.929,333.988,11.758z M130.381,234.247l10.719-32.134l0.904-0.99l20.316,18.556l-0.904,0.99 L130.381,234.247z M314.621,52.943L182.553,197.53l-20.316-18.556L294.305,34.386c2.583-2.828,6.118-4.386,9.954-4.386 c3.365,0,6.588,1.252,9.082,3.53l0.419,0.383C319.244,38.922,319.63,47.459,314.621,52.943z">
                        </path> 
                            <path d="M303.85,138.388c-8.284,0-15,6.716-15,15v127.347c0,21.034-17.113,38.147-38.147,38.147H68.904 c-21.035,0-38.147-17.113-38.147-38.147V100.413c0-21.034,17.113-38.147,38.147-38.147h131.587c8.284,0,15-6.716,15-15 s-6.716-15-15-15H68.904c-37.577,0-68.147,30.571-68.147,68.147v180.321c0,37.576,30.571,68.147,68.147,68.147h181.798 c37.576,0,68.147-30.571,68.147-68.147V153.388C318.85,145.104,312.134,138.388,303.85,138.388z">
                            </path> 
                        </g> 
                        </g>
                    </svg>
                  </td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-left font-medium text-gray-600">Team Utara</td>
                    <td class="py-3 px-4 text-left">
                      <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 348.882 348.882" xml:space="preserve">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier"> <g> <path d="M333.988,11.758l-0.42-0.383C325.538,4.04,315.129,0,304.258,0c-12.187,0-23.888,5.159-32.104,14.153L116.803,184.231 c-1.416,1.55-2.49,3.379-3.154,5.37l-18.267,54.762c-2.112,6.331-1.052,13.333,2.835,18.729c3.918,5.438,10.23,8.685,16.886,8.685 c0,0,0.001,0,0.001,0c2.879,0,5.693-0.592,8.362-1.76l52.89-23.138c1.923-0.841,3.648-2.076,5.063-3.626L336.771,73.176 C352.937,55.479,351.69,27.929,333.988,11.758z M130.381,234.247l10.719-32.134l0.904-0.99l20.316,18.556l-0.904,0.99 L130.381,234.247z M314.621,52.943L182.553,197.53l-20.316-18.556L294.305,34.386c2.583-2.828,6.118-4.386,9.954-4.386 c3.365,0,6.588,1.252,9.082,3.53l0.419,0.383C319.244,38.922,319.63,47.459,314.621,52.943z">
                          </path> 
                              <path d="M303.85,138.388c-8.284,0-15,6.716-15,15v127.347c0,21.034-17.113,38.147-38.147,38.147H68.904 c-21.035,0-38.147-17.113-38.147-38.147V100.413c0-21.034,17.113-38.147,38.147-38.147h131.587c8.284,0,15-6.716,15-15 s-6.716-15-15-15H68.904c-37.577,0-68.147,30.571-68.147,68.147v180.321c0,37.576,30.571,68.147,68.147,68.147h181.798 c37.576,0,68.147-30.571,68.147-68.147V153.388C318.85,145.104,312.134,138.388,303.85,138.388z">
                              </path> 
                          </g> 
                          </g>
                      </svg>
                    </td>
                  </tr>
                  <tr class="bg-gray-50">
                    <td class="py-3 px-4 text-left font-medium text-gray-600">Team Utara</td>
                    <td class="py-3 px-4 text-left">
                      <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 348.882 348.882" xml:space="preserve">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier"> <g> <path d="M333.988,11.758l-0.42-0.383C325.538,4.04,315.129,0,304.258,0c-12.187,0-23.888,5.159-32.104,14.153L116.803,184.231 c-1.416,1.55-2.49,3.379-3.154,5.37l-18.267,54.762c-2.112,6.331-1.052,13.333,2.835,18.729c3.918,5.438,10.23,8.685,16.886,8.685 c0,0,0.001,0,0.001,0c2.879,0,5.693-0.592,8.362-1.76l52.89-23.138c1.923-0.841,3.648-2.076,5.063-3.626L336.771,73.176 C352.937,55.479,351.69,27.929,333.988,11.758z M130.381,234.247l10.719-32.134l0.904-0.99l20.316,18.556l-0.904,0.99 L130.381,234.247z M314.621,52.943L182.553,197.53l-20.316-18.556L294.305,34.386c2.583-2.828,6.118-4.386,9.954-4.386 c3.365,0,6.588,1.252,9.082,3.53l0.419,0.383C319.244,38.922,319.63,47.459,314.621,52.943z">
                          </path> 
                              <path d="M303.85,138.388c-8.284,0-15,6.716-15,15v127.347c0,21.034-17.113,38.147-38.147,38.147H68.904 c-21.035,0-38.147-17.113-38.147-38.147V100.413c0-21.034,17.113-38.147,38.147-38.147h131.587c8.284,0,15-6.716,15-15 s-6.716-15-15-15H68.904c-37.577,0-68.147,30.571-68.147,68.147v180.321c0,37.576,30.571,68.147,68.147,68.147h181.798 c37.576,0,68.147-30.571,68.147-68.147V153.388C318.85,145.104,312.134,138.388,303.85,138.388z">
                              </path> 
                          </g> 
                          </g>
                      </svg>
                    </td>
                  </tr>
                <tr>
                    <td class="py-3 px-4 text-left font-medium text-gray-600">Team Agargaon</td>
                    <td class="py-3 px-4 text-left">
                      <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 348.882 348.882" xml:space="preserve">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier"> <g> <path d="M333.988,11.758l-0.42-0.383C325.538,4.04,315.129,0,304.258,0c-12.187,0-23.888,5.159-32.104,14.153L116.803,184.231 c-1.416,1.55-2.49,3.379-3.154,5.37l-18.267,54.762c-2.112,6.331-1.052,13.333,2.835,18.729c3.918,5.438,10.23,8.685,16.886,8.685 c0,0,0.001,0,0.001,0c2.879,0,5.693-0.592,8.362-1.76l52.89-23.138c1.923-0.841,3.648-2.076,5.063-3.626L336.771,73.176 C352.937,55.479,351.69,27.929,333.988,11.758z M130.381,234.247l10.719-32.134l0.904-0.99l20.316,18.556l-0.904,0.99 L130.381,234.247z M314.621,52.943L182.553,197.53l-20.316-18.556L294.305,34.386c2.583-2.828,6.118-4.386,9.954-4.386 c3.365,0,6.588,1.252,9.082,3.53l0.419,0.383C319.244,38.922,319.63,47.459,314.621,52.943z">
                          </path> 
                              <path d="M303.85,138.388c-8.284,0-15,6.716-15,15v127.347c0,21.034-17.113,38.147-38.147,38.147H68.904 c-21.035,0-38.147-17.113-38.147-38.147V100.413c0-21.034,17.113-38.147,38.147-38.147h131.587c8.284,0,15-6.716,15-15 s-6.716-15-15-15H68.904c-37.577,0-68.147,30.571-68.147,68.147v180.321c0,37.576,30.571,68.147,68.147,68.147h181.798 c37.576,0,68.147-30.571,68.147-68.147V153.388C318.85,145.104,312.134,138.388,303.85,138.388z">
                              </path> 
                          </g> 
                          </g>
                      </svg>
                    </td>
                  </tr>
                  <tr class="bg-gray-50">
                    <td class="py-3 px-4 text-left font-medium text-gray-600">Team Kutubkhali</td>
                    <td class="py-3 px-4 text-left">
                      <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 348.882 348.882" xml:space="preserve">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier"> <g> <path d="M333.988,11.758l-0.42-0.383C325.538,4.04,315.129,0,304.258,0c-12.187,0-23.888,5.159-32.104,14.153L116.803,184.231 c-1.416,1.55-2.49,3.379-3.154,5.37l-18.267,54.762c-2.112,6.331-1.052,13.333,2.835,18.729c3.918,5.438,10.23,8.685,16.886,8.685 c0,0,0.001,0,0.001,0c2.879,0,5.693-0.592,8.362-1.76l52.89-23.138c1.923-0.841,3.648-2.076,5.063-3.626L336.771,73.176 C352.937,55.479,351.69,27.929,333.988,11.758z M130.381,234.247l10.719-32.134l0.904-0.99l20.316,18.556l-0.904,0.99 L130.381,234.247z M314.621,52.943L182.553,197.53l-20.316-18.556L294.305,34.386c2.583-2.828,6.118-4.386,9.954-4.386 c3.365,0,6.588,1.252,9.082,3.53l0.419,0.383C319.244,38.922,319.63,47.459,314.621,52.943z">
                          </path> 
                              <path d="M303.85,138.388c-8.284,0-15,6.716-15,15v127.347c0,21.034-17.113,38.147-38.147,38.147H68.904 c-21.035,0-38.147-17.113-38.147-38.147V100.413c0-21.034,17.113-38.147,38.147-38.147h131.587c8.284,0,15-6.716,15-15 s-6.716-15-15-15H68.904c-37.577,0-68.147,30.571-68.147,68.147v180.321c0,37.576,30.571,68.147,68.147,68.147h181.798 c37.576,0,68.147-30.571,68.147-68.147V153.388C318.85,145.104,312.134,138.388,303.85,138.388z">
                              </path> 
                          </g> 
                          </g>
                      </svg>
                    </td>
                  </tr>
              </tbody>
            </table>
            <div class="text-end py-5 px-5">
                <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-amber-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Add new team</button>            
            </div>
        </div>
    </section>

    <section class="border rounded-md w-full mx-auto max-w-7xl my-10">
        <div class="mx-auto max-w-screen-xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-1 h-full">
                <div class="col-span-3 sm:col-span-2 md:col-span-3 h-auto md:h-full flex flex-col">
                    <div class="container p-2 mx-auto sm:p-4 dark:text-gray-100">
                        <h2 class="mb-4 text-2xl font-semibold leadi">Quiz Test</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <h1>01</h1>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        What's your name?
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 bg-green-500">Syed Mainul Hossain</div>
                                            <div class="text-sm text-gray-500">Pending</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Hamidur Rahman
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Mohammad Idris
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            S.N Saha
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                            <img class="w-10 h-10 animate-spin" src="https://www.svgrepo.com/show/70469/loading.svg" alt="Loading icon">                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <h1>02</h1>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        What's your name?
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 bg-green-500">Syed Mainul Hossain</div>
                                            <div class="text-sm text-gray-500">Pending</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Hamidur Rahman
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Mohammad Idris
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            S.N Saha
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                            <img class="w-10 h-10 animate-spin" src="https://www.svgrepo.com/show/70469/loading.svg" alt="Loading icon">                                        </td>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <h1>03</h1>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        What's your name?
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 bg-green-500">Syed Mainul Hossain</div>
                                            <div class="text-sm text-gray-500">Pending</div>
                                        </td>
                                        {{-- <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        </td> --}}
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Hamidur Rahman
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Mohammad Idris
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            S.N Saha
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                            <img class="w-10 h-10 animate-spin" src="https://www.svgrepo.com/show/70469/loading.svg" alt="Loading icon">                                        </td>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="">
                                                    <h1>04</h1>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        What's your name?
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 bg-green-500">Syed Mainul Hossain</div>
                                            <div class="text-sm text-gray-500">Pending</div>
                                        </td>
                                        {{-- <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        </td> --}}
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Hamidur Rahman
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Mohammad Idris
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            S.N Saha
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                            <img class="w-10 h-10 animate-spin" src="https://www.svgrepo.com/show/70469/loading.svg" alt="Loading icon">                                        </td>
                                        </td>
                                    </tr>
                                    <!-- More rows... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 sm:col-span-1 md:col-span-1">
                    <div class="shadow-lg rounded-lg">
                        <table class="w-full table-fixed mt-24">
                            {{-- <thead>
                                <tr class="bg-gray-100 text-sm">
                                    <th class="w-1/4 py-2 px-2 text-left text-gray-600 ">N0.</th>
                                    <th class="w-1/4 py-2 px-2 text-left text-gray-600 ">Name</th>
                                    <th class="w-1/4 py-2 px-2 text-left text-gray-600 ">Device</th>
                                    <th class="w-1/4 py-2 px-2 text-left text-gray-600 ">Status</th>
                                    <th class="w-1/4 py-2 px-2 text-left text-gray-600 ">Star</th>
                                    <th class="w-1/4 py-2 px-2 text-left text-gray-600 ">Marks</th>
                                </tr>
                            </thead> --}}
                            <tbody class="bg-white text-sm">
                                <tr>
                                    <td class="py-2 px-1 border-b border-gray-200">Hasan</td>
                                    <td class="py-2 px-1 border-b border-gray-200 truncate">PC</td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <input id="link-radio" type="radio" value="" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <div class="flex gap-0.5">
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200">15</td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <div class="flex gap-0.5">
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path
                                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200 text-red-400">Eli:</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-1 border-b border-gray-200">Hasan</td>
                                    <td class="py-2 px-1 border-b border-gray-200 truncate">PC</td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <input id="link-radio" type="radio" value="" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <div class="flex gap-0.5">
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200">15</td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <div class="flex gap-0.5">
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path
                                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200 text-red-400">Eli:</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-1 border-b border-gray-200">Kamal</td>
                                    <td class="py-2 px-1 border-b border-gray-200 truncate">M</td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <input id="link-radio" type="radio" value="" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <div class="flex gap-0.5">
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200">16</td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <div class="flex gap-0.5">
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path
                                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200 text-red-400">Eli:</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-1 border-b border-gray-200">Habib</td>
                                    <td class="py-2 px-1 border-b border-gray-200 truncate">PC</td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <input id="link-radio" type="radio" value="" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <div class="flex gap-0.5">
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200">17</td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <div class="flex gap-0.5">
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path
                                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200 text-red-400">Eli:</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-1 border-b border-gray-200">Rahim</td>
                                    <td class="py-2 px-1 border-b border-gray-200 truncate">M</td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <input id="link-radio" type="radio" value="" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <div class="flex gap-0.5">
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                            <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                                <path
                                                    d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200">18</td>
                                    <td class="py-2 px-1 border-b border-gray-200">
                                        <div class="flex gap-0.5">
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path
                                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="py-2 px-1 border-b border-gray-200 text-red-400">Eli:</td>
                                </tr>
                                <!-- Add more rows here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end py-10 px-48">
            <button type="submit" class="w-max rounded-md border-2 border-amber-500 px-8 py-1.5 text-sm font-semibold text-amber-500 transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">End Quiz</button>            
        </div>
    </section>

    <section class="px-5 py-16">
        <div class="border rounded-md w-full mx-auto max-w-7xl">
            <div class="text-start py-2 px-10">
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold">QUIZ MASTER</h2>
                    <p class="font-serif text-md text-gray-900">Test Quiz 1150</p>
                </div>
                <div class="space-y-2 mt-2">
                    <h2 class="text-3xl font-bold">RESULTS</h2>
                    <p class="font-serif text-md text-gray-900">Host-Task Master</p>
                </div>
            </div>
            <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
                <table class="w-full table-fixed">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">NO.</th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Name</th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Device</th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Status</th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Star Rating</th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Marks</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td class="py-4 px-6 border-b border-gray-200">1st</td>
                            <td class="py-4 px-6 border-b border-gray-200">Rayhan</td>
                            <td class="py-4 px-6 border-b border-gray-200 truncate">Mobile</td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <input id="link-radio" type="radio" value="" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <div class="flex gap-0.10">
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                </div>
                            </td>
                            <td class="py-4 px-6 border-b border-gray-200">14</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 border-b border-gray-200">2nd</td>
                            <td class="py-4 px-6 border-b border-gray-200">Hasan</td>
                            <td class="py-4 px-6 border-b border-gray-200 truncate">PC</td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <input id="link-radio" type="radio" value="" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <div class="flex gap-0.5">
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                </div>
                            </td>
                            <td class="py-4 px-6 border-b border-gray-200">15</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 border-b border-gray-200">3rd</td>
                            <td class="py-4 px-6 border-b border-gray-200">Kamal</td>
                            <td class="py-4 px-6 border-b border-gray-200 truncate">Mobile</td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <input id="link-radio" type="radio" value="" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <div class="flex gap-0.5">
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                </div>
                            </td>
                            <td class="py-4 px-6 border-b border-gray-200">16</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 border-b border-gray-200">Passed</td>
                            <td class="py-4 px-6 border-b border-gray-200">Habib</td>
                            <td class="py-4 px-6 border-b border-gray-200 truncate">PC</td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <input id="link-radio" type="radio" value="" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <div class="flex gap-0.5">
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                </div>
                            </td>
                            <td class="py-4 px-6 border-b border-gray-200">17</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 border-b border-gray-200">Failed</td>
                            <td class="py-4 px-6 border-b border-gray-200">Rahim</td>
                            <td class="py-4 px-6 border-b border-gray-200 truncate">Mobile</td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <input id="link-radio" type="radio" value="" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <div class="flex gap-0.5">
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                    <svg class="h-3 w-3 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                                        </path>
                                    </svg>
                                </div>
                            </td>
                            <td class="py-4 px-6 border-b border-gray-200">18</td>
                        </tr>
                        <!-- Add more rows here -->
                    </tbody>
                </table>
            </div>
            <div class="text-end py-5 px-10">
                <button type="submit" class="w-max rounded-md border-2 border-amber-500 px-16 py-1.5 text-sm font-semibold text-amber-500 transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Exit</button>            
                <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-amber-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400 ml-5">Download as PDF</button>            
            </div>
        </div>
    </section>

    <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl bg-gray-50">
        <div id="section2" class="p-16 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="mb-10">
                <h1 class="text-xl font-semibold leadi sm:text-4xl text-start">NEW TEAM</h1>
            </div>
            <form>   
                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-900 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Team Name
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input type="email" id="email" name="email" class="w-full rounded border border-gray-300 bg-white py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                        <p class="py-2 text-sm text-gray-900">Add Notes About Populating The Field</p>
                    </div>
                </div>

                <div class="md:flex mb-2">
                    <div class="md:w-1/3">
                        <label class="block text-gray-900 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Add Members
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input type="email" id="email" name="email" value="Insert user ID" class="w-full rounded border border-gray-300 bg-white py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                    </div>
                </div>
                
                <div class="md:flex mb-2">
                    <div class="md:w-1/3">
                        {{-- <label class="block text-gray-900 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Add Members
                        </label> --}}
                    </div>
                    <div class="md:w-2/3">
                        <input type="email" id="email" name="email" value="Insert user ID" class="w-full rounded border border-gray-300 bg-white py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                    </div>
                </div>
                
                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        {{-- <label class="block text-gray-900 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Add Members
                        </label> --}}
                    </div>
                    <div class="md:w-2/3">
                        <input type="email" id="email" name="email" value="Insert user ID" class="w-full rounded border border-gray-300 bg-white py-1 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                    </div>
                </div>

                <div class="md:flex md:items-center">
                    <div class="md:w-1/3">
                    </div>
                    <div class="md:w-2/3">
                        <button type="submit" class="w-max rounded-md border-2 border-amber-500 px-12 py-1.5 text-sm font-semibold text-amber-500 transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">
                            Add
                        </button>
                    </div>
                </div>

                <div class="mt-12 flex flex-col justify-end gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6">
                    <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-amber-500 px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Create Team</button>
                </div>
            </form>
        </div>

    </div>

    <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl bg-gray-50">
        <div id="section2" class="p-16 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="mb-10">
                <h1 class="font-semibold text-md leadi sm:text-4xl text-start">SET YOUR QUIZ PREFERENCES</h1>
            </div>
            <form>   
                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-checkbox">
                            Timing Mode
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div>
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Each Queston within a specifed tme</label>
                            </label>
                        </div>
                        <div>
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">All Questons within a specifed tme</label>
                            </label>
                        </div>
                    </div>
                </div>

                {{-- <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-checkbox">
                            Timing Mode
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <label class="inline-flex items-center">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Each Queston within a specifed tme</label>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Challenge Border</label>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Art & Literature</label>
                        </label>
                        <label class="inline-flex items-center ml-0">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">All Questons within a specifed tme</label>
                        </label>
                        <label class="inline-flex items-center">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Display Timer</label>
                        </label>
                        <label class="inline-flex items-center">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Communicaton between members</label>
                        </label>
                    </div>
                </div> --}}

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Duraton
                        </label>
                    </div>
                    <div class="md:w-1/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="05" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">05</label>
                            </label>
                        </div>
                    </div>
                    <div class="md:w-1/3">
                        <div>
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Challenge Border</label>
                            </label>
                        </div>
                        <div>
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Display Timer</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Topic Preferences
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">General Knowledge</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Sports</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Art & Literature</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Culture and Lifestyle</label>
                            </label>
                            <label class="inline-flex items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Life Science</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Science</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Mathematcs</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Geography</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">History</label>
                            </label>
                            <label class="inline-flex items-center ml-2">
                                <button type="submit" class="w-max rounded-md border-2 border-amber-500 px-2 py-1 text-sm font-semibold text-amber-500 transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Insert Question</button>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Academic Level
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="100" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">BCS</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Academic Level
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="50" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">10</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Feedback Preference
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">MCQ</label>
                            </label>
                            <label class="items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">True/False</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Academic Level
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="100" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">100</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Feedback Preference
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label class="ml-2 shadow bg-gray-500 hover:bg-gray-300 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">0.25</label>
                            </label>
                            <label class="items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">No Negatve Marking</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Academic Level
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="33" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">33</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Feedback Preference
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Immediate</label>
                            </label>
                            <label class="items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Post Exam</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="dark:bg-gray-800 -mt-80 px-24">
                    <div class="flex items-end justify-end">
                        <img src="img/services/icon.png" alt="" class="rounded-lg shadow-lg dark:bg-gray-500 w-72 h-72">
                    </div>
                </div>

                <div class="flex flex-col justify-end gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6 py-12">                
                    <button type="submit" class="w-max rounded-md border-2 border-amber-500 px-2 py-1.5 text-sm font-semibold text-amber-500 transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Save Preferences</button>            
                    <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-amber-500 px-12 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400 ml-5">Start</button>            
                </div>

            </form>
        </div>
    </div>

    <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl bg-gray-50">
        <div id="section2" class="p-16 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="mb-10">
                <h1 class="font-semibold text-md leadi sm:text-4xl text-start">SET YOUR QUIZ PREFERENCES</h1>
            </div>
            <form>   
                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-900 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Team Name
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input type="email" id="email" name="email" value="Test Quiz 1150" class="w-full rounded border border-gray-300 bg-white py-1 px-2 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                            Select Team A
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select name="" class="form-select block w-full focus:bg-white rounded border border-gray-300 bg-white py-2" id="my-select">
                            <option value="DOHS ABC">DOHS ABC</option>
                            <option value="A">Uttara A</option>
                            <option value="B">Uttara B</option>
                            <option value="C">Uttara C</option>
                        </select>
                        <p class="py-2 text-sm text-yellow-500">Add another team (Maximum 5)</p>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                            Select Team B
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <select name="" class="form-select block w-full focus:bg-white rounded border border-gray-300 bg-white py-2" id="my-select">
                            <option value="Default">Mirpur ABC</option>
                            <option value="B">Mirpur A</option>
                            <option value="B">Mirpur B</option>
                            <option value="C">Mirpur C</option>
                        </select>
                        <p class="py-2 text-sm text-yellow-500">Add another team (Maximum 5)</p>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-checkbox">
                            Quiz Mode
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div>
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">One Queston at a tme</label>
                            </label>
                        </div>
                        <div>
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">All at once</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-checkbox">
                            Timing Mode
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <label class="inline-flex items-center">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Each Queston within a specifed tme</label>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Challenge Border</label>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Art & Literature</label>
                        </label>
                        <label class="inline-flex items-center ml-0">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">All Questons within a specifed tme</label>
                        </label>
                        <label class="inline-flex items-center">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Display Timer</label>
                        </label>
                        <label class="inline-flex items-center">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Communicaton between members</label>
                        </label>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Duraton
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="05" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">05</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Topic Preferences
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">General Knowledge</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Sports</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Art & Literature</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Culture and Lifestyle</label>
                            </label>
                            <label class="inline-flex items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Life Science</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Science</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Mathematcs</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Geography</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">History</label>
                            </label>
                            <label class="inline-flex items-center ml-2">
                                <button type="submit" class="w-max rounded-md border-2 border-amber-500 px-2 py-1 text-sm font-semibold text-amber-500 transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Insert Question</button>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Academic Level
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="50" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">BCS</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Academic Level
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="50" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">10</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Feedback Preference
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">MCQ</label>
                            </label>
                            <label class="items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">True/False</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Academic Level
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="100" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">100</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Feedback Preference
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label class="ml-2 shadow bg-gray-500 hover:bg-gray-300 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">0.25</label>
                            </label>
                            <label class="items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">No Negatve Marking</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Academic Level
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="33" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">33</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Feedback Preference
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Immediate</label>
                            </label>
                            <label class="items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Post Exam</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="dark:bg-gray-800 -mt-72 px-24">
                    <div class="flex items-end justify-end">
                        <img src="img/services/QR.png" alt="" class="rounded-lg shadow-lg dark:bg-gray-500 w-72 h-72">
                    </div>
                </div>

                <div class="py-5">
                    <input type="text" id="text" name="text" class="w-full rounded border border-gray-300 bg-white py-4 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                </div>

                <div class="flex flex-col justify-end gap-y-5 sm:mt-4 sm:flex-row sm:gap-y-0 sm:gap-x-6">                
                    <button type="submit" class="w-max rounded-md border-2 border-amber-500 px-2 py-1.5 text-sm font-semibold text-amber-500 transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Save Preferences</button>            
                    <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-amber-500 px-6 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400 ml-5">Copy Link</button>            
                </div>

                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button class="shadow bg-yellow-600 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-8 rounded" type="button">
                            Start
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl bg-gray-50">
        <div id="section2" class="p-16 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="mb-10">
                <h1 class="font-semibold text-md leadi sm:text-4xl text-start">SET YOUR QUIZ PREFERENCES</h1>
            </div>
            <form>   
                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-900 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Quiz Name
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input type="email" id="email" name="email" value="Test Quiz 1150" class="w-full rounded border border-gray-300 bg-white py-1 px-2 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-checkbox">
                            Quiz Mode
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div>
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">One Queston at a tme</label>
                            </label>
                        </div>
                        <div>
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">All at once</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-checkbox">
                            Timing Mode
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <label class="inline-flex items-center">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Each Queston within a specifed tme</label>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">All Questons within a specifed tme</label>
                        </label>
                        <label class="inline-flex items-center ml-0">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Challenge Border</label>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Display Timer</label>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Communicaton between members</label>
                        </label>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Duraton
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="05" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">05</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Topic Preferences
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">General Knowledge</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Sports</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Art & Literature</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Culture and Lifestyle</label>
                            </label>
                            <label class="inline-flex items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Life Science</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Science</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Mathematcs</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Geography</label>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">History</label>
                            </label>
                            <label class="inline-flex items-center ml-2">
                                <button type="submit" class="w-max rounded-md border-2 border-amber-500 px-2 py-1 text-sm font-semibold text-amber-500 transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Insert Question</button>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Academic Level
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="75" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">Admission</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Academic Level
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="50" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">10</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Feedback Preference
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">MCQ</label>
                            </label>
                            <label class="items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">True/False</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Academic Level
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="100" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">100</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Feedback Preference
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label class="ml-2 shadow bg-gray-500 hover:bg-gray-300 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">0.25</label>
                            </label>
                            <label class="items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">No Negatve Marking</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Academic Level
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input id="small-range" type="range" value="33" class="w-full h-1 mb-0 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm bg-yellow-500">
                                <label class="ml-6 shadow bg-gray-500 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-semibold text-sm py-1 px-4 rounded" for="passwordConfirmation">33</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="md:flex mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-semibold text-md md:text-left mb-3 md:mb-0 pr-4" for="my-radio">
                            Feedback Preference
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="mt-2">
                            <label class="items-center">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Immediate</label>
                            </label>
                            <label class="items-center ml-6">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">Post Exam</label>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="dark:bg-gray-800 -mt-72 px-24">
                    <div class="flex items-end justify-end">
                        <img src="img/services/QR.png" alt="" class="rounded-lg shadow-lg dark:bg-gray-500 w-72 h-72">
                    </div>
                </div>

                <div class="py-5">
                    <input type="text" id="text" name="text" class="w-full rounded border border-gray-300 bg-white py-4 px-3 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200" />
                </div>

                <div class="flex flex-col justify-end gap-y-5 sm:mt-2 sm:flex-row sm:gap-y-0 sm:gap-x-6">                
                    <button type="submit" class="w-max rounded-md border-2 border-amber-500 px-2 py-1.5 text-sm font-semibold text-amber-500 transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400">Save Preferences</button>            
                    <button type="submit" class="w-max rounded-md border-2 border-amber-500 bg-amber-500 px-6 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-amber-400 hover:bg-amber-400 ml-5">Copy Link</button>            
                </div>

                <div class="flex flex-col justify-center gap-y-5 sm:mt-2 sm:flex-row sm:gap-y-0 sm:gap-x-6">                
                    <button type="submit" class="w-max rounded-md border-2 border-blue-500 px-2 py-1.5 text-sm font-semibold text-amber-500 transition-colors duration-150 ease-in-out hover:border-blue-400 hover:bg-blue-400">Save Preferences</button>            
                </div>

            </form>
        </div>
    </div>
    

@stop

