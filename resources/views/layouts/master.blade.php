<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">

<head>

    @yield('meta')

    @include('includes.head')

    @php
    $ip= $_SERVER['REMOTE_ADDR'];
    // $geo=CallAPI("GET", "http://www.geoplugin.net/json.gp?ip=".$ip);
    @endphp
    {{-- <style>
        #loading {
            display: flex;
            z-index: 999999999999999;
            width: 100%;
            height: 100%;
            background-color: rgba(192, 192, 192, 0.5);
            background-image: url(https://i.stack.imgur.com/MnyxU.gif);
            background-repeat: no-repeat;
            background-position: center;
            position: fixed;
            top: 0;
        }
    </style> --}}
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9K3Q5S" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    @include('includes.header-new')

    @yield('main-content')
    {{-- <div id="loading"></div> --}}
    @include('includes.footer.footer')

    {{-- <script>
        const wait = (delay = 0) =>
            new Promise(resolve => setTimeout(resolve, delay));

            const setVisible = (elementOrSelector, visible) => 
            (typeof elementOrSelector === 'string'
                ? document.querySelector(elementOrSelector)
                : elementOrSelector
            ).style.display = visible ? 'block' : 'none';

            setVisible('body', false);
            setVisible('#loading', true);

            document.addEventListener('DOMContentLoaded', () =>
            wait(1000).then(() => {
                setVisible('body', true);
                setVisible('#loading', false);
            }));
    </script> --}}

    {{-- <script>
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
    </script> --}}
</body>
