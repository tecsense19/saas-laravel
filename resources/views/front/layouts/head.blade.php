<meta charset="utf-8">

<!--====== Title ======-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="{{ asset_url('front/images/favicon.png') }}" type="image/png">

<!--====== Animate CSS ======-->
<link rel="stylesheet" href="{{ asset_url('front/css/animate.css') }}">

<!--====== Slick CSS ======-->
<link rel="stylesheet" href="{{ asset_url('front/css/tiny-slider.css') }}">

<!--====== Line Icons CSS ======-->
<link rel="stylesheet" href="{{ asset_url('front/fonts/lineicons/font-css/LineIcons.css') }}">

<!--====== Tailwind CSS ======-->
<link rel="stylesheet" href="{{ asset_url('front/css/tailwindcss.css') }}">