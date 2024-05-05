
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" 
               rel="stylesheet" />

    </head>
    <body>

        @include('include.navbar')
        
        <div class="min-h-screen">

            <div class="font-[sans-serif] max-w-7xl mx-auto px-8">
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
            </div>

        </div>

        @include('include.footer')
       
    </body>
    


</html>

    



