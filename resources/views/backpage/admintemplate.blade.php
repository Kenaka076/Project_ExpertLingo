<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title', 'App')</title>
</head>

<body class="bg-slate-300 text-slate-100">
    <header class="z-10 sticky top-0 bg-blue-950 py-3"> <!-- header -->
        <nav class=" px-5 flex flex-row mx-auto">
            <div class="uppercase text-lg basis-1/4"> <!-- logo -->
                <a href="{{ route('jadwal.index') }}" class="hover:opacity-75">
                    <span class="font-bold text-2xl text-white">Exp</span>
                    <span class="font-normal text-2xl text-blue-400">Lin</span>
                    <span class="font-bold text-2xl text-blue-800">Admin</span>
                </a>
            </div>
            <div class="basis-1/2 flex items-center justify-evenly"> <!-- Link -->

            </div>
            <div class="basis-1/4 flex justify-end"> <!-- dark mode -->
                <!-- dark mode -->
                <span class="hidden dark:inline end:0">
                    <svg viewBox="0 0 20 20" fill="white" class="w-6 h-6">
                        <path fill="white"
                            d="M12.443,9.672c0.203-0.496,0.329-1.052,0.329-1.652c0-1.969-1.241-3.565-2.772-3.565S7.228,6.051,7.228,8.02c0,0.599,0.126,1.156,0.33,1.652c-1.379,0.555-2.31,1.553-2.31,2.704c0,1.75,2.128,3.169,4.753,3.169c2.624,0,4.753-1.419,4.753-3.169C14.753,11.225,13.821,10.227,12.443,9.672z M10,5.247c1.094,0,1.98,1.242,1.98,2.773c0,1.531-0.887,2.772-1.98,2.772S8.02,9.551,8.02,8.02C8.02,6.489,8.906,5.247,10,5.247z M10,14.753c-2.187,0-3.96-1.063-3.96-2.377c0-0.854,0.757-1.596,1.885-2.015c0.508,0.745,1.245,1.224,2.076,1.224s1.567-0.479,2.076-1.224c1.127,0.418,1.885,1.162,1.885,2.015C13.961,13.689,12.188,14.753,10,14.753z M10,0.891c-5.031,0-9.109,4.079-9.109,9.109c0,5.031,4.079,9.109,9.109,9.109c5.031,0,9.109-4.078,9.109-9.109C19.109,4.969,15.031,0.891,10,0.891z M10,18.317c-4.593,0-8.317-3.725-8.317-8.317c0-4.593,3.724-8.317,8.317-8.317c4.593,0,8.317,3.724,8.317,8.317C18.317,14.593,14.593,18.317,10,18.317z">
                        </path>
                    </svg>
                </span>
            </div>
        </nav>
    </header>
    
    <div>
        <body class="bg-slate-300 text-slate-900">

            <div class="flex h-screen">
                @include('backpage.adminsidebar')
                @yield('content')
            </div>
        </body>
    </div>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full bg-blue-800 shadow md:flex md:items-center md:justify-between md:p-2">
        <span class="text-sm text-slate-50">
            2023 ExpertLingo. All rights reserved
        </span>
    </footer>
</body>

