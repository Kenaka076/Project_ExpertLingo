<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Webpage Title -->
        <title>Expertlingo</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

        <header class="navbar fixed-top bg-blue-950 shadow-lg">
                <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">

                    <!-- Image Logo -->
                    <a class="inline-block mr-4 py-2 text-xl whitespace-nowrap hover:no-underline focus:no-underline" href="index.html">
                        <img src="images/Logo Expertlingo.png" alt="alternative" class="h-14" />
                    </a>

                    <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400" type="button" data-toggle="offcanvas">
                        <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
                    </button>

                    <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
                    </div>
                    <nav :class="{'flex': open, 'hidden': !open}"
                    class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                    <a class="px-4 py-2 mt-2 text-2xl font-semibold text-white bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 duration-200 hover:bg-gray-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="3">Home</a>
                    <a class="px-4 py-2 mt-2 text-2xl font-semibold text-white bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 duration-200 hover:bg-gray-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#organisasi">Payment</a> 
                    <a class="px-4 py-2 mt-2 text-2xl font-semibold text-white bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 duration-200 hover:bg-gray-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#hobi&minat">Chat</a> 
                        <a class="px-4 py-2 mt-2 text-2xl font-semibold text-white bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 duration-200 hover:bg-gray-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#hobi&minat">Profile</a>   
                    </nav>
                </div>
        </header>
       
         <!-- Home Section -->
    <section id="home" class="py-5">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to ExpertLingo</h1>
            <p class="text-lg text-gray-600">Your home for expert language services.</p>
            <!-- Add more content as needed -->
        </div>
    </section>


    <section class="px-2 pt-4 pb-12 text-black bg-slate-900">
        <h1 class="text-4xl font-bold mb-4 text-white text-center"></h1>

        <div class=" p-20 grid grid-cols-6 gap-4">
                <!-- Card -->
                <div class="bg-slate-600 p-6 rounded-lg shadow-md">
                    <div class="flex justify-center mb-4">
                        <img src="images/icon pilih guru.png" alt="Pilih Guru Icon" class="w-30 h-20" />
                    </div>
                    <h5 class="text-lg text-white font-bold mb-2">Memilih Guru</h5>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="bg-slate-600 p-6 rounded-lg shadow-md">
                    <div class="flex justify-center mb-4">
                        <img src="images/icon my class.png" alt="My Class Icon" class="w-30 h-20" />
                    </div>
                    <h5 class="text-lg text-white font-bold mb-2">My Class</h5>
                </div>
        </div>
    </section> <!-- end of container -->

    

        <footer class="bg-gray-800 text-white">
            <div class="container mx-auto py-6 px-4">
              <div class="flex flex-wrap justify-between items-center">
                <div class="w-full md:w-auto text-center md:text-center mb-4 md:mb-0">
                  <p> 2023 ExpertLingo. All rights reserved.</p>
                </div>
          </footer> 

        


        <!-- Scripts -->
        <script src="js/jquery.min.js"></script> <!-- jQuery for JavaScript plugins -->
        <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>
