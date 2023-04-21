<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">

<head>

    @yield('meta')

    @include('includes.backoffice.head-backoffice')

    @php
    $ip= $_SERVER['REMOTE_ADDR'];
    @endphp

</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('includes.backoffice.header')

    @yield('main-content')
    
    @include('includes.footer.footer-backoffice')
</body>
