<x-app-layout>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('contactus') }}
        </h2>
    </x-slot>
    <!--start dito-->
    
    <h1 class="text-4xl sm:text-7xl text-white font-extrabold tracking-tight text-center mt-10 mb-10">Contact Us</h1>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
   
                <div class="grid grid-cols-1 md:grid-cols-4">
                    
                    <div class="p-6 mr-2 sm:rounded-lg">
                        <h1 style="color:#14ccc3" class="text-4xl sm:text-5xl font-extrabold tracking-tight">
                            Get in touch
                        </h1>
                        <p style="color:white" class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">
                            Fill in the form to start a conversation
                        </p>

                        <div style="color:white" class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                            363 Pascual Casal St, Quiapo, Manila, 1001 Metro Manila
                            </div>
                        </div>

                        <div style="color:white" class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                            +(02) 8733 9117
                            </div>
                        </div>

                        <div style="color:white" class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div class="ml-4 text-md tracking-wide font-semibold w-40">
                            cyrus.app@hotmail.com
                            </div>
                        </div>
                    </div>

                    <form class="p-6 flex flex-col justify-center">
                        <div class="flex flex-col">
                            <label for="name" class="hidden">Full Name</label>
                            <input type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="email" class="hidden">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="tel" class="hidden">Number</label>
                            <input type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <button style="background:#07e0d6" type="submit" class="md:w-32 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                            Submit
                        </button>
                    </form>
                    <iframe class="mt-5 mb-10 mx-5 my-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.0550314866355!2d120.98727774280435!3d14.595940058134952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9f6480fc749%3A0x7e21fe1ae8839777!2s363%20Pascual%20Casal%20St%2C%20Quiapo%2C%20Manila%2C%201001%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1633543114752!5m2!1sen!2sph" width="650" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
            </div>


</x-app-layout>

<style>
    body{
        background-image:url("https://cdn.discordapp.com/attachments/894663951357468693/907240340312977448/Z.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }
</style>
