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
                        href="{{route('index')}}">Home</a>
                    <a class="px-4 py-2 mt-2 text-2xl font-semibold text-white bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 duration-200 hover:bg-gray-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#organisasi">Payment</a> 
                    <a class="px-4 py-2 mt-2 text-2xl font-semibold text-white bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 duration-200 hover:bg-gray-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#hobi&minat">Chat</a> 
                    </nav>
                </div>
        </header>

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
     
        <footer class="bg-blue-950 text-white">
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
