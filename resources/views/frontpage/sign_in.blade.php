@extends('layouts.mainlayout')

@section('title', 'Expertlingo')

@section('content')

    <body class="bg-slate-900">
        <section class="container mx-auto my-40">
            <div class="max-w-md mx-auto bg-slate-800 p-10  rounded shadow-md">
                <h2 class="text-3xl text-white font-semibold mb-8 text-center">Sign In</h2>
                <form action="your_login_action_url" method="post" class="space-y-4">
                    <!-- Add your login form fields here -->
                    <div>
                        <label for="username" class="block text-white text-sm font-medium">Email</label>
                        <input type="text" id="username" name="username" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div>
                        <label for="password" class="block text-white text-sm font-medium">Password</label>
                        <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded-md w-full">Login</button>
                </form>
    
                <div class="mt-8 text-center">
                    <h3 class="text-xl text-white font-semibold mb-4">Or Sign In with</h3>
                    <div class="flex justify-center space-x-4">
                        <!-- Google Sign-in -->
                        <a href="your_google_signin_url"
                            class="bg-red-600 text-white p-2 rounded-md hover:bg-red-700 transition duration-300">Google</a>
    
                        <!-- Facebook Sign-in -->
                        <a href="your_facebook_signin_url"
                            class="bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700 transition duration-300">Facebook</a>
    
                        <!-- Twitter Sign-in -->
                        <a href="your_twitter_signin_url"
                            class="bg-blue-400 text-white p-2 rounded-md hover:bg-blue-500 transition duration-300">Twitter</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->


        <!-- Scripts -->
        <script src="js/jquery.min.js"></script> <!-- jQuery for JavaScript plugins -->
        <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
@endsection
