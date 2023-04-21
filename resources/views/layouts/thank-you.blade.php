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

    @include('includes.footer.footer-thank-you')

</body>


<script>
    // function ipLookUp () {
    //   $.ajax('https://ip-api.com/json')
    //   .then(
    //       function success(response) {
    //           console.log('User\'s Location Data is ', response);
    //           console.log('User\'s Country', response.country);
    //       },

    //       // function fail(data, status) {
    //       //     console.log('Request failed.  Returned status of',
    //       //                 status);
    //       // }
    //   );
    // }
    // ipLookUp();
</script>