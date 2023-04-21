<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns:fb="http://ogp.me/ns/fb#">

    <head>

        @yield('meta')

        @include('includes.head-w-video')

    </head>

    <body>

        @include('includes.header-w-video')

            @yield('main-content')

        @include('includes.footer.footer-w-video')

    </body>

</html>
