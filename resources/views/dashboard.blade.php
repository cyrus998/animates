<x-app-layout>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- here -->

	<body class="antialiased" x-data="{ isOpen : false}">


    <!-- hero -->
    <div class="firstcard py-16">
        <!-- container -->
        <div class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
            <!-- hero wrapper -->
            <div class="hero-wrapper grid grid-cols-1 md:grid-cols-12 gap-8 items-center">

                <!-- hero text -->
                <div class="hero-text col-span-6">
                    <h1 class=" font-bold text-7xl md:text-12xl max-w-xl text-white leading-tight"><span class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-green-400 to-blue-600 lg:inline">AniMates </span> <br> Anime Merch Store</h1>
                    <hr class=" w-12 h-1 bg-orange-500 rounded-full mt-8">   
        <h2 class="text-4xl font-bold mb-2 mt-2 text-white">
          Get your favorite anime merchs here!
        </h2>
        <h3 class="text-3xl mb-8" style="color:#00ffff">
          From Figurines, Hoodies and T-shirts
        </h3>
        <a href="{{ route('store') }}">
        <button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">Browse the Store</button></a>
                      
                </div>

                <!-- hero image -->
                <div class="hero-image col-span-6">
				<img src="" alt="" style="width:20rem;">
                </div>
            </div>
        </div>
       
    </div><!-- end hero -->
    

    <section class=" bg-blueGray-200 -mt-24">
        
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap">
      <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-1 shadow-lg rounded-lg">
          <div class="px-4 flex-auto">
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap items-center mt-16 mb-5">
      <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
        <h3 class="font-bold text-5xl md:text-12xl max-w-xl text-black leading-tight mt-10">
          <img src="https://cdn.discordapp.com/attachments/894663951357468693/909128113856839781/Capture.PNG" alt="">
        Greetings from our Store!
        </h3>
        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
          We have a huge variety of anime goods and products! Feel free to browse and chose whichever you like!
        </p>
        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-blueGray-600">
          We aim to provide only the best quality products, readily available to you and your friends.
        </p>
        <a href="" class="font-bold text-blueGray-700 mt-8 mb-5">Have fun messing around!</a>
      </div>
      <div class="w-full md:w-4/12 px-4 mr-auto ml-auto mt-5">
        <div style="background-color:#132c40;"class="relative flex flex-col min-w-0 break-words bg-white w-full mb-2 shadow-lg rounded-lg">
          <img alt="..." src="https://m.media-amazon.com/images/I/717+fh2PiVS._AC_SL1500_.jpg" class="w-full align-middle rounded-t-lg">
          <blockquote class="relative p-8 mb-4">
     
         
            <h4 class="text-xl font-bold text-white">
              We love Anime.
            </h4>
            <p class="text-md font-light mt-2 text-white">
             We deliver to you only the best and the latest items currently on your favorite and trending anime shows!
            </p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>   
 
</body>


</x-app-layout>


<style>
  .firstcard{
    background-image:url('https://cdn.discordapp.com/attachments/894663951357468693/907123441667285042/Z.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
  }
</style>