<!DOCTYPE html>
    <html xmlns:fb="http://ogp.me/ns/fb#">

    <!-- include geoplugin russia landing page -->

    <head>

        @yield('meta')

        @include('includes.head')

    </head>

    <body>

        @include('includes.header-pressroom')

            @yield('main-content')

        @include('includes.footer.footer-pressroom')

        <!-- include form process home subscribe news -->
    </body>

</html>
