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
       
    <section>
        

    <div class="mb-8">
        <h1 class="text-3xl font-semibold mb-4">Pilih Guru</h1>
        <!-- Tabel atau konten lainnya dapat ditambahkan di sini -->
    </div>

    <div class="grid grid-cols-4 gap-8 bg-gray-300 p-2 rounded-md" id="guruGrid">

        <!-- Kotak 1 -->
    <div class="bg-white p-4 rounded-md shadow-md flex flex-col items-center justify-center space-y-4 guru-box" data-guru="1">
    <div class="flex-shrink-0">
        <img src="https://cdn.pixabay.com/photo/2014/03/25/16/24/female-296990_1280.png" alt="Gambar 1" class="w-12 h-12 object-cover rounded-full">
    </div>
    <div class="text-center">
        <h2 class="text-lg font-semibold">Mrs. Mela</h2>
        <p class="text-gray-600">Pendidikan terakhir magister di Universitas Indonesia</p>
    </div>
    <div class="mt-auto">
        <button class="text-gray-500 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
            <!-- Icon panah ke bawah dari Heroicons -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
    </div>
</div>


        <!-- Kotak 2 -->
        <div class="bg-white p-4 rounded-md shadow-md flex flex-col items-center justify-center space-y-4 guru-box" data-guru="1">
            <div class="flex-shrink-0">
                <img src="https://cdn.pixabay.com/photo/2014/03/25/16/24/female-296990_1280.png" alt="Gambar 1" class="w-12 h-12 object-cover rounded-full">
            </div>
            <div class="text-center">
                <h2 class="text-lg font-semibold">Mrs. </h2>
                <p class="text-gray-600">Pendidikan terakhir magister di Universitas Indonesia</p>
            </div>
            <div class="mt-auto">
                <button class="text-gray-500 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                    <!-- Icon panah ke bawah dari Heroicons -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        </div>

        

        <!-- Kotak 3 -->
        <div class="bg-white p-4 rounded-md shadow-md flex flex-col items-center justify-center space-y-4 guru-box" data-guru="1">
            <div class="flex-shrink-0">
                <img src="https://cdn.pixabay.com/photo/2013/07/12/14/36/man-148582_1280.png" alt="Gambar 1" class="w-12 h-12 object-cover rounded-full">
            </div>
            <div class="text-center">
                <h2 class="text-lg font-semibold">Mr. Eren</h2>
                <p class="text-gray-600">Pendidikan terakhir magister di Universitas Indonesia</p>
            </div>
            <div class="mt-auto">
                <button class="text-gray-500 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                    <!-- Icon panah ke bawah dari Heroicons -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        </div>


        <!-- Kotak 4 -->
        <div class="bg-white p-4 rounded-md shadow-md flex flex-col items-center justify-center space-y-4 guru-box" data-guru="1">
            <div class="flex-shrink-0">
                <img src="https://cdn.pixabay.com/photo/2013/07/12/14/36/man-148582_1280.png" alt="Gambar 1" class="w-12 h-12 object-cover rounded-full">
            </div>
            <div class="text-center">
                <h2 class="text-lg font-semibold">Mrs. Yodi</h2>
                <p class="text-gray-600">Pendidikan terakhir magister di Universitas Padjajaran</p>
            </div>
            <div class="mt-auto">
                <button class="text-gray-500 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                    <!-- Icon panah ke bawah dari Heroicons -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        </div>

    <div>
        <button id="selanjutnyaBtn" class="mt-4 mb-8 px-6 py-3 bg-gray-800 text-white rounded-full disabled float-right">Selanjutnya</button>
    </div>
    
</div>

   

    </section> 

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
