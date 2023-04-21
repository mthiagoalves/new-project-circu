<!DOCTYPE html>
    <html xmlns:fb="http://ogp.me/ns/fb#">

    <head>

        @yield('meta')

        @include('includes.head')

        @php 
        $ip= $_SERVER['REMOTE_ADDR']; 
        $geo=CallAPI("GET", "http://www.geoplugin.net/json.gp?ip=".$ip); 
        @endphp

    </head>

    <body>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9K3Q5S"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->


        @include('includes.header')

            @yield('main-content')

        @include('includes.footer.footer')

    </body>
