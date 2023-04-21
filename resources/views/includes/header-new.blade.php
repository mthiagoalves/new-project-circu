<script type="text/javascript" src="/js/megaTracker.js"></script>
@php session_start(); @endphp
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<style>
    @media (min-width: 992px){
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 0.3rem !important;
            padding-left: 0.3rem !important;
        }
    }

    @media (max-width:1740px) and (min-width:1115px) {
        .topbar .option {
            float: left;
            margin-left: 10px;
            font-size: 9px !important;
            letter-spacing: 0.5px;
            height: 26px;
            line-height: 26px;
        }

        .navbar-nav li a {
            font-family: RalewayMedium, sans-serif;
            font-size: 10px;
            letter-spacing: 0.6px;
            padding: 0.4rem;
            color: #666 !important;
            font-weight: 400;
            cursor: pointer;
        }
    }

    @media (max-width:1115px) and (min-width:992px) {
        .topbar .option {
            float: left;
            margin-left: 10px;
            font-size: 8.5px !important;
            letter-spacing: 0.5px;
            height: 26px;
            line-height: 26px;
        }
    }

    @media (max-width:1310px) {
        .img-d-none {
            display: none !important;
        }

        .margin-out-in {
            margin-left: 10px !important;
            margin-right: 0px !important;
        }
    }

    @media (min-width: 992px) {
        .d-md-block-r {
            display: block !important;
        }

        .col-md-4-r {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 12.333333%;
            max-width: 30.333333%;
        }

        .col-5-r {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 35.666667%;
        }
    }

    @media (min-width: 1240px) {
        .d-lg-block-r {
            display: block !important;
        }

        .d-lg-none-r {
            display: none !important;
        }
    }

    @media (max-width:550px) {
        .f-size-r {
            font-size: 7px;
        }
        .navbar-nav li a{
            text-align: center;
        }
    }

    @media (min-width:1115px) and (max-width:1185px) {
        .f-size-r {
            font-size: 9px;
        }
    }

    .swiper-header .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        color: white;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
</style>
<div id="menu_top" class="row background_green topbar print-d-none">
    <div class="container-fluid px-1">

        <div class="row m-0 px-2">

            <div class="col-6 d-none d-md-block-r social_header p-0">
                <div class="col-12 option p-0 m-0">
                    <a class="m-0 margin-out-in" href="{{ route('about') }}">
                        <img class="img-d-none" style="width: 17px;float: none !important;margin-top: -3px;filter: invert(100%);" src="/img/header/hi.svg" />
                        <span>ABOUT US</span>
                    </a>
                    <a class="mr-0 margin-out-in" href="{{ route('contact') }}">
                        <img class="img-d-none" style="width: 17px;float: none !important;margin-top: -3px;filter: invert(100%);" src="/img/header/change.svg" />
                        <span>CONTACT US</span>
                    </a>
                    <a class="mr-0 margin-out-in" href="{{ route('pricelist') }}">
                        <img class="img-d-none" style="width: 17px;float: none !important;margin-top: -3px;filter: invert(100%);" src="/img/header/cloud-computing.svg" />
                        <span>PRICELIST</span>
                    </a>
                    <a class="mr-0 margin-out-in" href="{{ route('stocklist') }}">
                        <img class="img-d-none" style="width: 17px;float: none !important;margin-top: -3px;filter: invert(100%);" src="/img/header/cloud-computing.svg" />
                        <span></i> STOCKLIST</span>
                    </a>
                    <a class="mr-0 margin-out-in" href="{{ route('catalogue') }}">
                        <img class="img-d-none" style="width: 17px;float: none !important;margin-top: -3px;filter: invert(100%);" src="/img/header/cloud-computing.svg" />
                        <span>CATALOGUES & BOOKS</span>
                    </a>
                </div>


            </div>
            <div class="col-12 col-md-4-r p-0 swiper-header" style="position: absolute; left: 50%; transform: translate(-50%, 0%);">
                <div class="col-12 option m-0 p-0 text-center">
                    <div class="col-12 owl-header owl-carousel owl-slide owl-theme p-0 position-relative">
                        <div class="item">
                            <a href="/stocklist">
                                <span class="f-size-r" style="font-style: italic;">15% OFF - YOUR FIRST ORDER</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="/stocklist">
                                <span class="f-size-r" style="font-style: italic;">SEE ALL PRODUCTS IN STOCK</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-6 d-none d-md-block-r p-0 ">
                <div class="p-0 text-center float-right">
                    <div class="option">
                        <a href="/inspirations">
                            <span>ROOM BY ROOM</span></a>
                    </div>
                    <div class="option">
                        <a href="{{ route('our-houses-new') }}">
                            <span style="font-weight: bold;color: #689CB3;">ROOMS BY DESIGNERS</span></a>
                    </div>
                    <div class="option">
                        <a href="{{ route('projects') }}">
                            <span>PROJECTS</span></a>
                    </div>
                    <div class="option">
                        <a href="/trends">
                            <span>TRENDS</span></a>
                    </div>
                    <!-- <div class="option">
                        <a href="{{ route('showrooms') }}">
                            <span>SHOWROOMS</span></a>
                    </div> -->
                    <div class="option">
                        <a href="{{ route('press') }}">
                            <span>PRESS</span></a>
                    </div>
                    <div class="option">
                        <a href="https://blog.circu.net/" target="_blank">
                            <span>BLOG</span></a>
                    </div>
                    <a class="option">
                        <a rel="modal:open" href="{{route('modal-search')}}">
                            <img class="img-d-none" style="width: 12.5px;float: none !important;margin-top: -3px;filter: invert(100%);" src="/img/header/loupe.svg" />
                        </a>
                </div>

            </div>

        </div>

    </div><!-- end container-->

</div><!-- end row-->

<div class="container-fluid downbar print-d-none" style="margin-top:26px;z-index: 9999999999999999999 !important;">
    <div class="row">
        <div class="col-12" id="menu-fixed">
            <nav class="navbar navbar-expand-lg navbar-light position-static container-fluid">

                <a class="navbar-brand col-8 col-sm-4 col-lg-2 ml-0 ml-lg-4" href="{{ route('homepage') }}">
                    <img src="/img/logo-circu-magical-furniture-new.png" border="0" width="174" height="56" class="img-fluid" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item position-static dropdown d-block d-lg-none-r p-0">
                            <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownProducts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#9fbfbc !important;">ALL PRODUCTS</a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdownProducts">
                                <div class="container max-width-site">
                                    <li><a href="{{ route('products') }}" class="dropdown-item menu-header" style="color:#9fbfbc !important;">All Products</a></li>
                                    <li><a href="{{ route('category', ['category' => 'beds']) }}" class="dropdown-item menu-header">Beds</a></li>
                                    <li><a href="{{ route('category', ['category' => 'seating']) }}" class="dropdown-item menu-header">Seating</a></li>
                                    <li><a href="{{ route('category', ['category' => 'lighting']) }}" class="dropdown-item menu-header">Lighting</a></li>
                                    <li><a href="{{ route('category', ['category' => 'storage']) }}" class="dropdown-item menu-header">Storage</a></li>
                                    <li><a href="{{ route('category', ['category' => 'play-learn']) }}" class="dropdown-item menu-header">Play & Learn</a></li>
                                    <li><a href="{{ route('category', ['category' => 'mirrors']) }}" class="dropdown-item menu-header">Mirrors</a></li>
                                    <li><a href="{{ route('category', ['category' => 'rugs']) }}" class="dropdown-item menu-header">Rugs</a></li>
                                    <li><a href="{{ route('category', ['category' => 'hardware']) }}" class="dropdown-item menu-header">Hardware</a></li>
                                    <li><a href="{{ route('category', ['category' => 'others']) }}" class="dropdown-item menu-header">Others</a></li>
                                    <li><a href="{{ route('finishes') }}" class="dropdown-item menu-header">Finishes</a></li>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r">
                            <a class="nav-link menu-header" style="color:#9fbfbc !important;" href="{{ route('products') }}">ALL PRODUCTS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 ">
                            <a class="nav-link menu-header" href="{{ route('new-products') }}">NEW PRODUCTS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r">
                            <a class="nav-link menu-header" href="{{ route('category', ['category' => 'beds']) }}">BEDS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r">
                            <a class="nav-link menu-header" href="{{ route('category', ['category' => 'seating']) }}">SEATING</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r">
                            <a class="nav-link menu-header" href="{{ route('category', ['category' => 'lighting']) }}">LIGHTING</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r">
                            <a class="nav-link menu-header" href="{{ route('category', ['category' => 'storage']) }}">STORAGE</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r">
                            <a class="nav-link menu-header" href="{{ route('category', ['category' => 'play-learn']) }}">PLAY & LEARN</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r">
                            <a class="nav-link menu-header" href="{{ route('category', ['category' => 'mirrors']) }}">MIRRORS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r">
                            <a class="nav-link menu-header" href="{{ route('category', ['category' => 'rugs']) }}">RUGS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r">
                            <a class="nav-link menu-header" href="{{ route('category', ['category' => 'hardware']) }}">HARDWARE</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r">
                            <a class="nav-link menu-header" href="{{ route('category', ['category' => 'others']) }}">OTHERS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0">
                            <a class="nav-link menu-header" href="{{route('landing.parents-room')}}">
                                <img class="d-none d-lg-block" style="width: 18px;float: left !important;margin-top: -2px; margin-right: 3px;" src="/img/header/parents.svg" /> PARENTS ROOMS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r">
                            <a class="nav-link menu-header" href="{{ route('finishes') }}">FINISHES</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0">
                            <a class="nav-link menu-header" href="{{route('deals')}}"><img class="d-none d-lg-block" style="width: 15px;float: left !important;margin-top: 0px;" src="/img/header/dollar.svg" /> DEALS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-block d-lg-none">
                            <a class="nav-link menu-header" href="/inspirations">ROOM BY ROOM</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-block d-lg-none">
                            <a class="nav-link menu-header" href="{{route('projects')}}">PROJECTS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-block d-lg-none">
                            <a class="nav-link menu-header" href="/finishes">FINISHES</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-block d-lg-none">
                            <a class="nav-link menu-header" href="{{route('press')}}">PRESS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-block d-lg-none">
                            <a class="nav-link menu-header" href="https://blog.circu.net/">BLOG</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-block d-lg-none">
                            <a class="nav-link menu-header" href="{{route('catalogue')}}">CATALOGUE</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-block d-lg-none">
                            <a class="nav-link menu-header" href="{{route('pricelist')}}">PRICELIST</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-block d-lg-none">
                            <a class="nav-link menu-header" href="{{route('about')}}">ABOUT</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-block d-lg-none">
                            <a class="nav-link menu-header" href="{{route('contact')}}">CONTACT US</a>
                        </li>


                        <li class="nav-item menu-icon" style="display:none;">
                            <a rel="modal:open" id="trigger-popup" class="btn-modal-popup" href="{{route('modal-popup')}}"><img src="/img/icons/alarm.svg"></a>
                        </li>

                        {{-- <li class="nav-item menu-icon">
							@if(Auth::check() && Auth::user())
								<a href="{{ route('wishlist.index') }}"><img src="/img/icons/heart.svg"></a>
                        @else
                        <a href="{{ route('login') }}"><img src="/img/icons/heart.svg"></a>
                        @endif
                        </li>

                        <li class="nav-item menu-icon position-static dropdown">
                            @if(Auth::check() && Auth::user())
                            <a class="nav-link dropdown-toggle menu-header p-1" href="#" id="navbarDropdownUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/img/icons/user.svg"></a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdownUser">
                                <div class="container max-width-site">
                                    <li><a href="" class="dropdown-item menu-header" onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </div>
                            </ul>
                            @else
                            <a class="nav-link menu-header p-1" href="{{ route('login') }}"><img src="/img/icons/user.svg"></a>
                            @endif
                        </li> --}}
                    </ul>
                </div><!-- /.navbar-collapse -->

            </nav>

        </div>

    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var tracker = getUrl();
</script>
<script>
    var mySwiper = new Swiper('.swiper-header .swiper-container', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        autoplay: {
            delay: 5000,
        },
    })
</script>