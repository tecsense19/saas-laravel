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
		<link rel="shortcut icon" href="{{ asset_url('app/media/logos/favicon.ico') }}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{ asset_url('app/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset_url('app/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset_url('app/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset_url('app/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
		<!--end::Global Stylesheets Bundle-->
        <style>
            .error {
                font-weight: bold;
                color: red;
            }
			.select2-container--default .select2-selection--single {
				border: none !important;
			}
			.select2-container--default .select2-selection--single .select2-selection__arrow {
				top: 12px !important;
			}
			.select2-container--default .select2-selection--single .select2-selection__rendered {
				display: block;
				width: 100%;
				padding: .775rem 1rem !important;
				font-size: 1.1rem;
				font-weight: 500;
				line-height: 26px !important;
				color: #5E6278;
				background-color: #F9F9F9;
				background-clip: padding-box;
				border: 1px solid #E1E3EA;
				appearance: none;
				border-radius: .475rem;
				box-shadow: false;
				transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
				border: none !important;
				margin-top: 0.25rem !important;
			}
			.select2-container .select2-selection--single .select2-selection__rendered {

			}
			.select2-container .select2-selection--single {
				height: 45px !important;
				border: none !important;
			}
			.select2-container--default .select2-search--dropdown .select2-search__field {
				background-color: var(--bs-body-bg) !important;
				padding: .55rem .75rem !important;
				color: var(--bs-gray-700) !important;
				font-size: .95rem !important;
				border: 1px solid var(--bs-gray-300) !important;
				border-radius: .425rem !important;
				outline: 0 !important;
			}
			.select2-container--open .select2-dropdown--below {
				border: 0;
				box-shadow: var(--bs-dropdown-box-shadow);
				border-radius: .475rem;
				padding: 1rem 0;
				background-color: var(--bs-dropdown-bg);
			}
			.select2-container--default .select2-results__option--highlighted[aria-selected] {
				background-color: var(--bs-component-hover-bg) !important;
				color: var(--bs-component-hover-color) !important;
				transition: color .2s ease !important;
			}
			.select2-container {
				z-index: 99
			}

			.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
				color: #999;
				cursor: pointer;
				display: inline-block;
				font-weight: bold;
				margin-right: 5px !important;
			}

			.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
				background-color: transparent;
				border: none;
				/* border-right: 1px solid #aaa; */
				border-top-left-radius: 4px;
				border-bottom-left-radius: 4px;
				color: #999;
				cursor: pointer;
				font-size: 1em;
				font-weight: 700;
				margin: 0px 0px !important;
				position: unset !important;
			}
			
			/* Tooltip */

			.tooltip-container {
				position: relative;
				cursor: pointer; /* Optional: Change cursor to pointer */
			}

			.tooltip-text {
				visibility: hidden;
				background-color: #333;
				color: #fff;
				text-align: center;
				border-radius: 6px;
				padding: 5px 10px; /* Adjust padding as needed */
				position: absolute;
				z-index: 1;
				bottom: 125%;
				left: 50%;
				transform: translateX(-50%);
				opacity: 0;
				transition: opacity 0.3s;
				/* white-space: nowrap; */
				width: 350px; /* Set width to auto */
			}

			.tooltip-container:hover .tooltip-text {
				visibility: visible;
				opacity: 1;
			}


			/* Tooltip */
        </style>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                @include('app.layouts.header')
                <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                    @include('app.layouts.sidebar')
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        {{ $slot }}
                        <div id="kt_app_footer" class="app-footer">
                            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                                <div class="text-dark order-2 order-md-1">
                                    <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                                </div>
                                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                    <li class="menu-item">
                                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset_url('app/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset_url('app/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{ asset_url('app/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
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
		<script src="{{ asset_url('app/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset_url('app/js/widgets.bundle.js') }}"></script>
		<script src="{{ asset_url('app/js/custom/widgets.js') }}"></script>
		<script src="{{ asset_url('app/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset_url('app/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset_url('app/js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{ asset_url('app/js/custom/utilities/modals/new-target.js') }}"></script>
		<script src="{{ asset_url('app/js/custom/utilities/modals/users-search.js') }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->

		<script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 3000);
        </script>

        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script> -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
		@yield('script')
		<script>
			// document.addEventListener('contextmenu', function(event) {
			// 	event.preventDefault();
			// });

			// $(document).keydown(function(event) {
			// 	if (event.keyCode == 123) {
			// 		// Prevent default action
			// 		event.preventDefault();
			// 		// Optionally, display a message or perform other actions
			// 		console.log("F12 key is disabled");
			// 	}
			// });

			// $(document).keydown(function(event) {
			// 	// Check if the key combination Ctrl + Shift + I or Ctrl + Shift + J is pressed
			// 	if ((event.ctrlKey || event.metaKey) && (event.shiftKey) && (event.keyCode == 73 || event.keyCode == 74)) {
			// 		// Display an alert message
			// 		alert("Developer tools are disabled on this website.");
			// 		// Prevent the default action
			// 		event.preventDefault();
			// 	}
			// });

			// Optional: Add smooth animation to the tooltip
			document.querySelectorAll('.tooltip-container').forEach(container => {
				container.addEventListener('mouseover', () => {
					container.querySelector('.tooltip-text').style.opacity = '1';
				});

				container.addEventListener('mouseout', () => {
					container.querySelector('.tooltip-text').style.opacity = '0';
				});
			});
		</script>
    </body>
</html>
