@extends('layouts.mainlayout')

@section('title', 'Expertlingo')

@section('content')

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


        <!-- Scripts -->
        <script src="js/jquery.min.js"></script> <!-- jQuery for JavaScript plugins -->
        <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
@endsection