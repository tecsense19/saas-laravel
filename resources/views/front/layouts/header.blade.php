<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->

<section class="header_area">
    <div class="navbar-area bg-white">
        <div class="container relative">
            <div class="row items-center">
                <div class="w-full">
                    <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                        <a class="navbar-brand mr-5" href="index.html">
                            <img src="{{ asset_url('front/images/logo.svg') }}" alt="Logo">
                        </a>
                        <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white lg:w-auto collapse navbar-collapse lg:block top-full mt-full lg:static lg:bg-transparent shadow lg:shadow-none" id="navbarOne">
                            <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                <li class="nav-item ml-5 lg:ml-11">
                                    <a class="page-scroll active" href="#home">Home</a>
                                </li>
                                <li class="nav-item ml-5 lg:ml-11">
                                    <a class="page-scroll" href="#about">About</a>
                                </li>
                                <li class="nav-item ml-5 lg:ml-11">
                                    <a class="page-scroll" href="#services">Services</a>
                                </li>
                                <li class="nav-item ml-5 lg:ml-11">
                                    <a class="page-scroll" href="#work">Projects</a>
                                </li>
                                <li class="nav-item ml-5 lg:ml-11">
                                    <a class="page-scroll" href="#pricing">Pricing</a>
                                </li>
                                <li class="nav-item ml-5 lg:ml-11">
                                    <a class="page-scroll" href="#blog">Blog</a>
                                </li>
                                <li class="nav-item ml-5 lg:ml-11">
                                    <a class="page-scroll" href="#contact">Contact</a>
                                </li>
                                @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item ml-5 lg:ml-11">
                                            <a href="{{ route('dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                        </li>
                                    @else
                                        <li class="nav-item ml-5 lg:ml-11">
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item ml-5 lg:ml-11">
                                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                            </li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header navbar -->

    @include('front.layouts.partials.hero')
</section>

<!--====== HEADER PART ENDS ======-->