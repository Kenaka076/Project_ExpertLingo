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
                        href="#payment">Payment</a> 
                    <a class="px-4 py-2 mt-2 text-2xl font-semibold text-white bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 duration-200 hover:bg-gray-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#chat">Chat</a> 
                    </nav>
                </div>
        </header>
        <!-- end of navigation -->

        <section class="text-white bg-slate-900" id="about">
            <div class="container flex flex-col items-center px-6 py-20 mx-auto md:flex-row lg:px-32">
                <div class="w-full mb-12 lg:w-1/2 lg:max-w-lg md:w-1/2 md:mb-0">
                    <img class="object-cover object-center rounded-lg" alt="hero" src="images/English New.png" style="width: 100%; height: auto;">
                </div>
                <div class="flex flex-col items-start text-left lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16">
                    <h1 class="mb-8 text-5xl font-bold tracking-tighter text-left lg:text-5xl title-font">
                        Hello, Selamat Datang.
                    </h1>
        
                    <h2 class="mb-8 text-5xl font-bold tracking-tighter text-left lg:text-5xl title-font">
                        SKILL UP!
                    </h2>
                    <p class="mb-8 text-lg leading-relaxed text-white">
                        Apakah Anda seorang pemula yang baru memulai perjalanan bahasa Inggris 
                        atau seorang yang ingin meningkatkan keterampilan Anda, kami memiliki 
                        berbagai program dan materi pembelajaran yang dirancang khusus sesuai 
                        dengan kebutuhan Anda.
                    </p>
                    <div class="flex justify-left space-x-4">
                        <a href="{{route('sign_in')}}" class="bg-blue-400 text-white py-2 px-6 rounded-full hover:bg-yellow-300 transition-all duration-300">
                            Sign In
                        </a>
                        <a href="{{route('sign_up')}}" class="bg-gray-800 text-white py-2 px-6 rounded-full hover:bg-gray-900 transition-all duration-300">
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
        </section>
        

        <section class="text-center py-16 bg-slate-800">
            <div class="pt-4 pb-14 text-center">
                <div class="container px-4 sm:px-8 xl:px-4">
                    <h1 class="text-4xl text-white p-8 font-bold mb-4 text-center">Quotes</h1>
                    <p class="mb-4 text-white text-3xl leading-10 lg:max-w-5xl lg:mx-auto"> 
                        "Learning English is not just about mastering a language it's a journey of 
                        self-discovery, a passport to a world of endless possibilities. Embrace the 
                        challenges, savor the triumphs, for in the realm of language acquisition, every 
                        lesson is a step closer to unlocking the doors of communication and understanding." </p>
                </div> <!-- end of container -->
            </div>
        </section>

        
        
        <section class="px-2 pt-4 pb-12 text-black bg-slate-900">
            <h1 class="text-4xl font-bold mb-4 text-white text-center">Fitur</h1>

        <div class=" p-20 grid grid-cols-4 gap-6">
                <!-- Card -->
                <div class="bg-slate-600 p-6 rounded-lg shadow-md">
                    <div class="flex justify-center mb-4">
                        <img src="images/Icon Payment.png" alt="alternative" class="w-20 h-20" />
                    </div>
                    <h5 class="text-lg text-white font-bold mb-2">Payment</h5>
                    <p class="justify-center text-white">
                        Kami menyediakan berbagai opsi
                        pembayaran yang fleksibel dan aman. Dari transfer bank hingga pembayaran kartu kredit, 
                        kami menawarkan solusi yang sesuai dengan preferensi Anda.</p>
                </div>
                <!-- end of card -->
        
                <!-- Card -->
                <div class="bg-slate-600 p-6 rounded-lg shadow-md">
                    <div class="flex justify-center mb-4">
                        <img src="images/icon pilih guru.png" alt="alternative" class="w-30 h-20" />
                    </div>
                    <h5 class="text-lg text-white font-bold mb-2">Memilih Guru</h5>
                    <p class="text-white">Jelajahi profil guru-guru berkualitas kami
                        dan temukan pengajar yang cocok dengan gaya pembelajaran Anda. Apakah Anda mencari seseorang 
                        yang berfokus pada percakapan, pemahaman tata bahasa, atau keterampilan 
                        spesifik lainnya.</p>
                </div>
                <!-- end of card -->
        
                <!-- Card -->
                <div class="bg-slate-600 p-6 rounded-lg shadow-md">
                    <div class="flex justify-center mb-4">
                        <img src="images/icon chat.png" alt="alternative" class="w-20 h-20" />
                    </div>
                    <h5 class="text-lg text-white font-bold mb-2">Chat</h5>
                    <p class="text-white">Jangan ragu untuk berinteraksi, karena guru kami siap 
                        membimbing Anda melalui setiap tahap pembelajaran. Kami yakin, dengan akses 
                        langsung ke guru, perjalanan bahasa Inggris Anda akan menjadi lebih efektif dan memuaskan.</p>
                </div>

                <!-- Card -->
                <div class="bg-slate-600 p-6 rounded-lg shadow-md">
                    <div class="flex justify-center mb-4">
                        <img src="images/icon kalender.png" alt="alternative" class="w-20 h-20" />
                    </div>
                    <h5 class="text-lg text-white font-bold mb-2">Penjadwalan Kelas</h5>
                    <p class="text-white">Fitur penjadwalan kelas kami memungkinkan Anda 
                        mengatur sesi pembelajaran dengan mudah, sehingga Anda dapat fokus 
                        sepenuhnya pada materi pelajaran tanpa harus khawatir tentang waktu. 
                    </p>
                </div>
                <!-- end of card -->
            </div> <!-- end of grid -->
        </div>
        </section> <!-- end of container -->
    </div>

    <!-- Details 1 -->


<section id="details" class="pt-12 pb-16 lg:pt-16 bg-slate-800">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
        <div class="lg:col-span-5">
            <div class="mb-16 lg:mb-0 xl:mt-16">
                <h2 class="mb-6 text-4xl font-bold">Results driven ground breaking technology</h2>
                <p class="mb-4">Based on our team's extensive experience in developing line of business applications and constructive customer feedback we reached a new level of revenue.</p>
                <p class="mb-4">We enjoy helping small and medium-sized tech businesses take a shot at established Fortune 500 companies</p>
            </div>
        </div> <!-- end of col -->
        <div class="lg:col-span-7">
            <div class="xl:ml-14">
                <img class="inline" src="images/details-1.jpg" alt="alternative" />
            </div>
        </div> <!-- end of col -->
    </div> <!-- end of container -->
</div>
<!-- end of details 1 -->

<!-- Details 2 -->
<div class="py-24">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
        <div class="lg:col-span-7">
            <div class="mb-12 lg:mb-0 xl:mr-14">
                <img class="inline" src="images/details-2.jpg" alt="alternative" />
            </div>
        </div> <!-- end of col -->
        <div class="lg:col-span-5">
            <div class="xl:mt-12">
                <h2 class="mb-6 text-4xl font-bold">Instant results for the marketing department</h2>
                <ul class="list-disc pl-5 mb-7 space-y-2">
                    <li>Features that will help you and your marketers</li>
                    <li>Smooth learning curve due to the knowledge base</li>
                    <li>Ready out-of-the-box with minor setup settings</li>
                </ul>
                <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Lightbox</a>
                <a class="btn-outline-reg" href="article.html">Details</a>
            </div>
        </div> <!-- end of col -->
    </div> <!-- end of container -->
</div>
<!-- end of details 2 -->

<!-- Details Lightbox -->
<!-- Lightbox -->
<div id="details-lightbox" class="lightbox-basic zoom-anim-dialog hidden">
    <div class="lg:grid lg:grid-cols-12 lg:gap-x-8">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="lg:col-span-8">
            <div class="mb-12 text-center lg:mb-0 lg:text-left xl:mr-6">
                <img class="inline rounded-lg" src="images/details-lightbox.jpg" alt="alternative" />
            </div>
        </div> <!-- end of col -->
        <div class="lg:col-span-4">
            <h3 class="mb-2 text-2xl font-bold">Goals Setting</h3>
            <hr class="w-11 h-0.5 mt-0.5 mb-4 ml-0 border-none bg-indigo-600" />
            <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
            <h4 class="mt-7 mb-2.5 text-2xl font-bold">User Feedback</h4>
            <p class="mb-4">This is a great app that can help you save time and make your life easier. And it will help improve your productivity.</p>
            <ul class="list mb-6 space-y-2">
                <li class="flex">
                    <i class="fas fa-chevron-right"></i>
                    <div>Splash screen panel</div>
                </li>
                <li class="flex">
                    <i class="fas fa-chevron-right"></i>
                    <div>Statistics graph report</div>
                </li>
                <li class="flex">
                    <i class="fas fa-chevron-right"></i>
                    <div>Events calendar layout</div>
                </li>
                <li class="flex">
                    <i class="fas fa-chevron-right"></i>
                    <div>Location details screen</div>
                </li>
                <li class="flex">
                    <i class="fas fa-chevron-right"></i>
                    <div>Onboarding steps interface</div>
                </li>
            </ul>
            <a class="btn-solid-reg mfp-close page-scroll" href="#download">Download</a>
            <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of lightbox-basic -->
<!-- end of lightbox -->
<!-- end of details lightbox -->

<!-- Details 3 -->
<div class="pt-16 pb-12">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
        <div class="lg:col-span-5">
            <div class="mb-16 lg:mb-0 xl:mt-16">
                <h2 class="mb-6 text-4xl font-bold">Platform integration and life-time free updates</h2>
                <p class="mb-4">Get a glimpse of what this app can do for your marketing automation and understand why current users are so excited when using Pavo together with their teams.</p>
                <p class="mb-4">We will promptly answer any questions and honor your requests based on the service level agreement</p>
            </div>
        </div> <!-- end of col -->
        <div class="lg:col-span-7">
            <div class="ml-14">
                <img class="inline" src="images/details-3.jpg" alt="alternative" />
            </div>
        </div> <!-- end of col -->
    </div> <!-- end of container -->
</section>
<!-- end of details 3 -->

        <!-- Copyright -->
        <footer class="bg-gray-800 text-white">
            <div class="container mx-auto py-6 px-4">
              <div class="flex flex-wrap justify-between items-center">
                <div class="w-full md:w-auto text-center md:text-center mb-4 md:mb-0">
                  <p> 2023 ExpertLingo. All rights reserved.</p>
                </div>
          </footer>

        <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->


        <!-- Scripts -->
        <script src="js/jquery.min.js"></script> <!-- jQuery for JavaScript plugins -->
        <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>
