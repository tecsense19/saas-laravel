<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.8
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!--begin::Head-->
	<head><base href=""/>
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
		<link rel="shortcut icon" href="{{ asset_url('front/media/logos/favicon.ico') }}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{ asset_url('front/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset_url('front/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset_url('front/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset_url('front/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->

		<style>
            .error {
                font-weight: bold;
                color: red;
            }
		</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
        <div class="d-flex flex-column flex-root" id="kt_app_root">
			
			<div class="mb-0" id="home">
				
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url({{  asset_url('front/media/svg/illustrations/landing.svg') }})">
					
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						
						<div class="container">
							
							<div class="d-flex align-items-center justify-content-between">
								
								<div class="d-flex align-items-center flex-equal">
									
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<i class="ki-duotone ki-abstract-14 fs-2hx">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</button>
									
									
									<a href="../../demo1/dist/landing.html">
										<img alt="Logo" src="{{ asset_url('front/media/logos/landing.svg') }}" class="logo-default h-25px h-lg-30px" />
										<img alt="Logo" src="{{ asset_url('front/media/logos/landing-dark.svg') }}" class="logo-sticky h-20px h-lg-25px" />
									</a>
									
								</div>
								
								
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
											
											<div class="menu-item">
												
												<a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
												
											</div>
											
											
											<div class="menu-item">
												
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">How it Works</a>
												
											</div>
											
											
											<div class="menu-item">
												
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#achievements" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Achievements</a>
												
											</div>
											
											
											<div class="menu-item">
												
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Team</a>
												
											</div>
											
											
											<div class="menu-item">
												
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#portfolio" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Portfolio</a>
												
											</div>
											
											
											<div class="menu-item">
												
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#pricing" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Pricing</a>
												
											</div>
											
										</div>
										
									</div>
								</div>

                                @if (Route::has('login'))
                                    @auth
                                        <div class="flex-equal text-end ms-1">
                                            <a href="{{ route('dashboard') }}" class="btn btn-success">Dashboard</a>
                                        </div>
                                    @else
                                        <div class="flex-equal text-end ms-1">
                                            <a href="{{ route('login') }}" class="btn btn-success">Log in</a>
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 btn btn-success">Register</a>
                                            @endif
                                        </div>
                                    @endauth
                                @endif
								
							</div>
							
						</div>
						
					</div>
					
					@if(!request()->is('customer/details/*') && !request()->is('payment'))
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
						
						<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
							
							<h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">Build An Outstanding Solutions
							<br />with
							<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">The Best Theme Ever</span>
							</span></h1>
							
							
							<a href="../../demo1/dist/index.html" class="btn btn-primary">Try Metronic</a>
							
						</div>
						
						
						<div class="d-flex flex-center flex-wrap position-relative px-5">
							
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Fujifilm">
								<img src="{{ asset_url('front/media/svg/brand-logos/fujifilm.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							
							
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Vodafone">
								<img src="{{ asset_url('front/media/svg/brand-logos/vodafone.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							
							
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="KPMG International">
								<img src="{{ asset_url('front/media/svg/brand-logos/kpmg.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							
							
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Nasa">
								<img src="{{ asset_url('front/media/svg/brand-logos/nasa.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							
							
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Aspnetzero">
								<img src="{{ asset_url('front/media/svg/brand-logos/aspnetzero.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							
							
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="AON - Empower Results">
								<img src="{{ asset_url('front/media/svg/brand-logos/aon.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							
							
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Hewlett-Packard">
								<img src="{{ asset_url('front/media/svg/brand-logos/hp-3.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							
							
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Truman">
								<img src="{{ asset_url('front/media/svg/brand-logos/truman.svg') }}" class="mh-30px mh-lg-40px" alt="" />
							</div>
							
						</div>
						
					</div>
					@endif
				</div>
				
                <div class="landing-curve landing-dark-color @if(!request()->is('customer/details/*') && !request()->is('payment')) mb-10 mb-lg-20 @endif">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				
			</div>
            
            {{ $slot }}
			
			<div class="mb-0">
				
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				
				
				<div class="landing-dark-bg pt-20">
					
					<div class="container">
						
						<div class="row py-10 py-lg-20">
							
							<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
								
								<div class="rounded landing-dark-border p-9 mb-10">
									
									<h2 class="text-white">Would you need a Custom License?</h2>
									
									
									<span class="fw-normal fs-4 text-gray-700">Email us to
									<a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
									
								</div>
								
								
								<div class="rounded landing-dark-border p-9">
									
									<h2 class="text-white">How About a Custom Project?</h2>
									
									
									<span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
									<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>
									
								</div>
								
							</div>
							
							
							<div class="col-lg-6 ps-lg-16">
								
								<div class="d-flex justify-content-center">
									
									<div class="d-flex fw-semibold flex-column me-20">
										
										<h4 class="fw-bold text-gray-400 mb-6">More for Metronic</h4>
										
										
										<a href="https://keenthemes.com/faqs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
										
										
										<a href="https://preview.keenthemes.com/html/metronic/docs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
										
										
										<a href="https://www.youtube.com/c/KeenThemesTuts/videos" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
										
										
										<a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
										
										
										<a href="https://devs.keenthemes.com/" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>
										
										
										<a href="https://keenthemes.com/blog" class="text-white opacity-50 text-hover-primary fs-5">Blog</a>
										
									</div>
									
									
									<div class="d-flex fw-semibold flex-column ms-lg-20">
										
										<h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
										
										
										<a href="https://www.facebook.com/keenthemes" class="mb-6">
											<img src="{{ asset_url('front/media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
										</a>
										
										
										<a href="https://github.com/KeenthemesHub" class="mb-6">
											<img src="{{ asset_url('front/media/svg/brand-logos/github.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
										</a>
										
										
										<a href="https://twitter.com/keenthemes" class="mb-6">
											<img src="{{ asset_url('front/media/svg/brand-logos/twitter.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
										</a>
										
										
										<a href="https://dribbble.com/keenthemes" class="mb-6">
											<img src="{{ asset_url('front/media/svg/brand-logos/dribbble-icon-1.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
										</a>
										
										
										<a href="https://www.instagram.com/keenthemes" class="mb-6">
											<img src="{{ asset_url('front/media/svg/brand-logos/instagram-2-1.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
										</a>
										
									</div>
									
								</div>
								
							</div>
							
						</div>
						
					</div>
					
					
					<div class="landing-dark-separator"></div>
					
					
					<div class="container">
						
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							
							<div class="d-flex align-items-center order-2 order-md-1">
								
								<a href="../../demo1/dist/landing.html">
									<img alt="Logo" src="{{ asset_url('front/media/logos/landing.svg') }}" class="h-15px h-md-20px" />
								</a>
								
								
								<span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="https://keenthemes.com">&copy; 2023 Keenthemes Inc.</span>
								
							</div>
							
							
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item mx-5">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<i class="ki-duotone ki-arrow-up">
					<span class="path1"></span>
					<span class="path2"></span>
				</i>
			</div>
			
		</div>
        <!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset_url('front/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset_url('front/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->

        <script src="{{ asset_url('front/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
		<script src="{{ asset_url('front/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
        
        <script src="{{ asset_url('front/js/custom/landing.js') }}"></script>
		<script src="{{ asset_url('front/js/custom/pages/pricing/general.js') }}"></script>

		<script src="{{ asset_url('front/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="{{ asset_url('front/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset_url('front/js/widgets.bundle.js') }}"></script>
		<script src="{{ asset_url('front/js/custom/widgets.js') }}"></script>
		<script src="{{ asset_url('front/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset_url('front/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset_url('front/js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{ asset_url('front/js/custom/utilities/modals/new-target.js') }}"></script>
		<script src="{{ asset_url('front/js/custom/utilities/modals/users-search.js') }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->

		<script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 3000);
        </script>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
		@yield('script')
    </body>
</html>
