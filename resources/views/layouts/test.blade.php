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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9K3Q5S" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    @include('includes.header-new')

    @yield('main-content')

    @include('includes.footer.footer-test')
    <script>
        $('.form-discount-anniversary input[name="email"]').on('change', function() {
            $('.form-discount-anniversary select[name="country"]').on('change', function() {
                $(".spin-this-shit").click(function() {
                    console.log("test");
                    $(".imagetospin").addClass("spinit");
                    window.setTimeout(function() {
                        $('.div-escondida').removeClass('d-none');
                    }, 2500);
                });
            });
        });
    </script>
</body>