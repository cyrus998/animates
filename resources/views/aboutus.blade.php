<x-app-layout>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('aboutus') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<!--start adding stuff dito-->
<div class="w-full bg-cover bg-center" style="height:30rem; background-image: url(https://images.unsplash.com/photo-1504109586057-7a2ae83d1338?&auto=format&fit=crop&w=1080&h=500); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
              
                <h1 class="text-white text-2xl font-semibold uppercase md:text-5xl">About AniMates Anime Merch Store.</h1>
            </div>
        </div>
    </div>
    <section class="relative pt-16 bg-blueGray-50">
<div class="container mx-auto">
  <div class="flex flex-wrap items-center">
    <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-78">
      <div style="background-color:#161d29"class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg">
        <img alt="..." style="height:20rem;"src="https://i.pinimg.com/originals/b5/8c/2a/b58c2a22b5ea8d7b66f68bf79941dcfc.jpg" class="w-full align-middle rounded-t-lg">
        <blockquote class="relative p-8 mb-4">
          <h4 class="text-xl font-bold" style="color:#14fff3">
            A safe haven of collecting your favorite anime merch!
          </h4>
          <p class="text-md font-light mt-2 text-white">
            Founded in the year 2021, we have already established our existence in the online community!
          </p>
        </blockquote>
      </div>
    </div>

    <div class="w-full md:w-6/12 px-4">
      <div class="flex flex-wrap">
        <div class="w-full md:w-6/12 px-4">
          <div class="relative flex flex-col mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
              <i class="fas fa-cookie-bite"></i>
              </div>
              <h6 class="text-xl mb-1 font-semibold">Merch from your favorite anime shows.</h6>
              <p class="mb-4 text-blueGray-500">
                Watched any anime shows recently? Check our shop if we have an item for you!
              </p>
            </div>
          </div>
          <div class="relative flex flex-col min-w-0">
            <div class="px-4 py-5 flex-auto">
              <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
              <i class="far fa-credit-card"></i>
              </div>
              <h6 class="text-xl mb-1 font-semibold">
                Convenient Payment Methods
              </h6>
              <p class="mb-4 text-blueGray-500">
                With added PayPal payment integration, you can now buy your favorite items hassle-free!
              </p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-6/12 px-4">
          <div class="relative flex flex-col min-w-0 mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
              <i class="fas fa-truck"></i>
              </div>
              <h6 class="text-xl mb-1 font-semibold">We Deliver Quick.</h6>
              <p class="mb-4 text-blueGray-500">
                Rest assured that we value each and every one of our customer's orders, and we would deliver them as soon as possible!
              </p>
            </div>
          </div>
          <div class="relative flex flex-col min-w-0">
            <div class="px-4 py-5 flex-auto">
              <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
              <i class="fas fa-check-circle"></i>
              </div>
              <h6 class="text-xl mb-1 font-semibold">Item Quality</h6>
              <p class="mb-4 text-blueGray-500">
                We outsource only the best quality there is, and we make sure that every item passes our quality control check.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<div class=" team w-full">
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h2 class="text-base font-bold text-indigo-600">
                POGGERS
            </h2>
            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-white">
                The Team Behind AniMates.      
            </h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center transform transition duration-500 hover:scale-105">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="https://cdn.discordapp.com/attachments/894663951357468693/910185741781454848/cropped.png" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-white font-bold mb-2">Cyrus Francisco</p>
                    <p class="text-base text-gray-400 font-normal">Front-End Dev</p>
                </div>
            </div>
            <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center transform transition duration-500 hover:scale-105">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="https://scontent.fmnl25-1.fna.fbcdn.net/v/t1.6435-9/165673234_3745940898787098_1816593986351472589_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=174925&_nc_ohc=YurnBkgMXv8AX-zprcy&_nc_ht=scontent.fmnl25-1.fna&oh=041d6f020cb474b08314e8ea79492d67&oe=61B214EB" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-white font-bold mb-2">Cedz Adap</p>
                    <p class="text-base text-gray-400 font-normal">Back-End Dev</p>
                </div>
            </div>
            <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center transform transition duration-500 hover:scale-105">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="https://scontent.fmnl25-2.fna.fbcdn.net/v/t39.30808-6/241324248_4403003739782327_7142743275512633809_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=vkf0VjPnX-UAX8owzql&_nc_ht=scontent.fmnl25-2.fna&oh=4686fb264f8d5dcb79c30d2cd034609c&oe=6195A682" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-white font-bold mb-2">Sittie Manali</p>
                    <p class="text-base text-gray-400 font-normal">Designer</p>
                </div>
            </div>
            <div class="w-full bg-gray-900 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center transform transition duration-500 hover:scale-105">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-36 w-36" src="https://scontent.fmnl25-1.fna.fbcdn.net/v/t1.18169-9/20294271_873774969458178_8219698173887586873_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=jjVKaXG9SKkAX9zcE3R&tn=aQx8EVyoGLVgxoSd&_nc_ht=scontent.fmnl25-1.fna&oh=eebe73ced619554b1bd52bfb70b03119&oe=61B2B9E8" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-xl text-white font-bold mb-2">Raineer Yabut</p>
                    <p class="text-base text-gray-400 font-normal">Software Engineer</p>
                </div>
            </div>
      
    </section>
</div>


</x-app-layout>

<style>
    .team{
        background-image:url("https://cdn.discordapp.com/attachments/894663951357468693/907130834950160394/wp5612083-anime-rooms-wallpapers.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }
</style>