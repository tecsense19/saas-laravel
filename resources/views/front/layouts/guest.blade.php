<!doctype html>
<html class="no-js" lang="en">
    <head>
        @include('front.layouts.head')
    </head>
    <body>
        @include('front.layouts.header')

        {{ $slot }}

        @include('front.layouts.footer')
    </body>
</html>
