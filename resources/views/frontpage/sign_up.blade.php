@extends('layouts.mainlayout')

@section('title', 'Expertlingo')

@section('content')

    <body class="bg-slate-900">
        <section class="container mx-auto my-40">
            <div class="max-w-md mx-auto bg-slate-800 p-10 rounded shadow-md">
                <h2 class="text-3xl text-white font-semibold mb-8 text-center">Sign Up</h2>
                
                <form action="{{ route('students1.store') }}" method="post" class="space-y-4"> 
                    @csrf
                    <div class="flex space-x-4">
                        <!-- First Name -->
                        <div class="w-1/2">
                            <label for="firstName" class="block text-white text-sm font-medium">First Name</label>
                            <input type="text" id="firstName" name="firstName"
                                class="mt-1 p-2 w-full border rounded-md">
                        </div>
                        <!-- Last Name -->
                        <div class="w-1/2">
                            <label for="lastName" class="block text-white text-sm font-medium">Last Name</label>
                            <input type="text" id="lastName" name="lastName"
                                class="mt-1 p-2 w-full border rounded-md">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-white text-sm font-medium">Email</label>
                        <input type="text" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div>
                        <label for="phoneNumber" class="block text-white text-sm font-medium">Phone Number</label>
                        <input type="text" id="phoneNumber" name="phoneNumber"
                            class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div>
                        <label for="password" class="block text-white text-sm font-medium">Password</label>
                        <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div>
                        <label for="confirmPassword" class="block text-white text-sm font-medium">Confirm
                            Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword"
                            class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded-md w-full">Sign Up</button>
                </form>

                <div class="mt-8 text-center">
                    <h3 class="text-xl text-white font-semibold mb-4">Or Sign Up with</h3>
                    <div class="flex justify-center space-x-4">
                        <!-- Google Sign-up -->
                        <a href="your_google_signup_url"
                            class="bg-red-600 text-white p-2 rounded-md hover:bg-red-700 transition duration-300">Google</a>

                        <!-- Facebook Sign-up -->
                        <a href="your_facebook_signup_url"
                            class="bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700 transition duration-300">Facebook</a>

                        <!-- Twitter Sign-up -->
                        <a href="your_twitter_signup_url"
                            class="bg-blue-400 text-white p-2 rounded-md hover:bg-blue-500 transition duration-300">Twitter</a>
                    </div>
                </div>
            </div>
        </section>



        <!-- Scripts -->
        <script src="js/jquery.min.js"></script> <!-- jQuery for JavaScript plugins -->
        <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
@endsection
