<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <base href="../../../"/>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
        <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="{{ asset_url('app/media/logos/favicon.ico') }}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <link href="{{ asset_url('app/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset_url('app/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body id="kt_body" class="app-blank">
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                    <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                        <div class="w-lg-500px p-10">
                            {{ $slot }}
                        </div>
                    </div>
                    <div class="w-lg-500px d-flex flex-stack px-10 mx-auto">
                        <div class="me-10">
                            <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                            <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="{{ asset_url('app/media/flags/united-states.svg') }}" alt="" />
                            <span data-kt-element="current-lang-name" class="me-1">English</span>
                            <i class="ki-duotone ki-down fs-5 text-muted rotate-180 m-0"></i>
                            </button>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                                    <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset_url('app/media/flags/united-states.svg') }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">English</span>
                                    </a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                                    <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset_url('app/media/flags/spain.svg') }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">Spanish</span>
                                    </a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                                    <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset_url('app/media/flags/germany.svg') }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">German</span>
                                    </a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                                    <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset_url('app/media/flags/japan.svg') }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">Japanese</span>
                                    </a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                                    <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset_url('app/media/flags/france.svg') }}" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">French</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex fw-semibold text-primary fs-base gap-5">
                            <a href="../../demo1/dist/pages/team.html" target="_blank">Terms</a>
                            <a href="../../demo1/dist/pages/pricing/column.html" target="_blank">Plans</a>
                            <a href="../../demo1/dist/pages/contact.html" target="_blank">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url({{ asset_url('app/media/misc/auth-bg.png') }})">
                    <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                        <a href="../../demo1/dist/index.html" class="mb-0 mb-lg-12">
                        <img alt="Logo" src="{{ asset_url('app/media/logos/custom-1.png') }}" class="h-60px h-lg-75px" />
                        </a>
                        <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{ asset_url('app/media/misc/auth-screens.png') }}" alt="" />
                        <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and Productive</h1>
                        <div class="d-none d-lg-block text-white fs-base text-center">In this kind of post,
                            <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a person they’ve interviewed
                            <br />and provides some background information about
                            <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their
                            <br />work following this is a transcript of the interview.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>var hostUrl = "assets/";</script>
        <script src="{{ asset_url('app/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset_url('app/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset_url('app/js/custom/authentication/sign-in/general.js') }}"></script>
    </body>
</html>