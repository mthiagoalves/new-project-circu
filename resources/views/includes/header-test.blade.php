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
    }

    @media (min-width:1115px) and (max-width:1185px) {
        .f-size-r {
            font-size: 9px;
        }
    }

    #navbarNavDropdown .navbar-nav>li.dropdown.show .dropdown-menu{
        border: 0 !important;
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

    .social-media i{
        display: flex;
        align-items: center;
        color: #fff;
        width: 20px;

    }
    .social-media i::before{

color: #fff;
width: 30px;

}

.menu-text{
    font-size: 14px !important;
}

.dropdown-item:hover{
    background-color: transparent;
}

@media (min-width: 767px) {
    .dropdown-menu{
        opacity: 80%;
    }
    .sub-menu-text{
    font-size: 12px !important;
    }
    .sub-menu-text:hover{
        transition: 0.4s all ease;
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -o-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
    }
}

@media (max-width: 767px){
    .navbar-nav{
        align-items: center;
    }

    .navbar-nav li a{
        font-size: 14px;
    }

    .menu-header{
        text-align: center;
    }
}

@media(max-width: 1326px){
    .menu-text{
    font-size: 12px !important;
    }
    .navbar-nav li{
        margin-right: 5px !important;
    }
    .navbar-expand-lg .navbar-collapse{
        padding: 0rem 1.5rem !important;
    }
    .sub-menu-text{
        font-size: 10px !important;
        padding: 0.8rem 0 !important;
    }
    .sub-menu-text:hover{
        transition: 0.4s all ease;
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1);
    }
}


</style>
<div id="menu_top" class="row background_green topbar print-d-none">
    <div class="container-fluid px-1">

        <div class="row m-0 px-4">

            <div class="col-6 d-none d-md-block-r social_header p-0 px-3">
                <div class="col-12 option p-0 m-0">
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
                        <span>CATALOGUE</span>
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

            <div class="col-6 d-none d-md-block-r p-0 px-3 padding-social-media">
                <div class="p-0 text-center float-right social-media">
                    <div class="option">
                        <a href="/inspirations">
                            <span>FOLLOW US</span></a>
                    </div>
                    <div class="option">
                        <a href="https://instagram.com/circu_magical_furniture/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="option">
                        <a href="https://www.pinterest.pt/circumagicalfurniture/" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                    <div class="option">
                        <a href="https://www.tiktok.com/@circu_magical_furniture" target="_blank"><i><svg style="width: 12.5px;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="tiktok" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-tiktok fa-w-14">
                            <path fill="currentColor" d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" class=""></path>
                        </svg></i></a>
                    </div>
                    <div class="option">
                        <a href="https://www.facebook.com/circumagicalfurniture/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="option">
                        <a href="https://twitter.com/circu_magical" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="option">
                        <a class="a2a_button_facebook_messenger" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                    <div class="option">
                        <a rel="modal:open" href="{{ route('modal-we-chat') }}" class="modal-cursor-disable"><i style="font-size: 18px;" class="fab fa-lg fa-weixin"></i></a>
                    </div>
                    <div class="option">
                        <a href="https://api.whatsapp.com/send?phone=351911780428&text=Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies"><i class="fab fa-whatsapp"></i></a>
                    </div>
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

                <div class="collapse navbar-collapse px-2" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item position-static dropdown d-block d-lg-none-r p-0">
                            <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownProducts" style="color:#9fbfbc !important;font-weight:bold" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ALL PRODUCTS</a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdownProducts">
                                <div class="container max-width-site">
                                    <li><a href="{{ route('new-products') }}" class="dropdown-item menu-header" style="color:#9fbfbc !important;">New Products</a></li>  
                                    <li><a href="{{ route('products') }}" class="dropdown-item menu-header">All Products</a></li>
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
                        <li class="nav-item position-static dropdown d-none d-lg-block-r p-0 mr-3">
                            <a class="nav-link dropdown-toggle menu-header menu-text" href="#" id="navbarDropdownProducts" style="color:#9fbfbc !important;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ALL PRODUCTS</a>
                            <ul class="dropdown-menu w-100 opacity-80 px-3 py-1" aria-labelledby="navbarDropdownProducts">
                                <div class="container-fluid">
                                    <li><a href="{{ route('finishes') }}" class="dropdown-item menu-header sub-menu-text">Finishes</a></li>
                                    <li><a href="{{ route('category', ['category' => 'others']) }}" class="dropdown-item menu-header sub-menu-text">Others</a></li>
                                    <li><a href="{{ route('category', ['category' => 'hardware']) }}" class="dropdown-item menu-header sub-menu-text">Hardware</a></li>
                                    <li><a href="{{ route('category', ['category' => 'rugs']) }}" class="dropdown-item menu-header sub-menu-text">Rugs</a></li>
                                    <li><a href="{{ route('category', ['category' => 'mirrors']) }}" class="dropdown-item menu-header sub-menu-text">Mirrors</a></li>
                                    <li><a href="{{ route('category', ['category' => 'play-learn']) }}" class="dropdown-item menu-header sub-menu-text">Play & Learn</a></li>
                                    <li><a href="{{ route('category', ['category' => 'storage']) }}" class="dropdown-item menu-header sub-menu-text">Storage</a></li>
                                    <li><a href="{{ route('category', ['category' => 'lighting']) }}" class="dropdown-item menu-header sub-menu-text">Lighting</a></li>
                                    <li><a href="{{ route('category', ['category' => 'seating']) }}" class="dropdown-item menu-header sub-menu-text">Seating</a></li>
                                    <li><a href="{{ route('category', ['category' => 'beds']) }}" class="dropdown-item menu-header sub-menu-text">Beds</a></li>
                                    <li><a href="{{ route('products') }}" class="dropdown-item menu-header sub-menu-text">All Products</a></li>        
                                    <li><a href="{{ route('new-products') }}" class="dropdown-item menu-header sub-menu-text" style="color:#9fbfbc !important;">New Products</a></li>        
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r mr-4">
                            <a class="nav-link menu-header menu-text" href="{{ route('deals') }}">DEALS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r mr-4">
                            <a class="nav-link menu-header menu-text" href="{{ route('our-houses-new') }}">OUR PROJECTS</a>
                        </li>
                        <li class="nav-item position-static dropdown d-none d-lg-block-r p-0 mr-3">
                            <a class="nav-link dropdown-toggle menu-header menu-text" href="#" id="navbarDropdownProducts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ROOM BY ROOM</a>
                            <ul class="dropdown-menu w-100 opacity-80 px-3 py-1" aria-labelledby="navbarDropdownProducts">
                                <div class="container-fluid">
                                    <li><a href="{{ route('lifestyle-inspirations') }}" class="dropdown-item menu-header sub-menu-text">Lifestyle</a></li>
                                    <li><a href="{{ route('architecture-inspirations') }}" class="dropdown-item menu-header sub-menu-text">Architecture</a></li>
                                    <li><a href="{{ route('nursery-room-inspirations') }}" class="dropdown-item menu-header sub-menu-text">Nursery Room</a></li>
                                    <li><a href="{{ route('living-room-inspirations') }}" class="dropdown-item menu-header sub-menu-text">Living Room</a></li>
                                    <li><a href="{{ route('study-area-inspirations') }}" class="dropdown-item menu-header sub-menu-text">Study Area</a></li>
                                    <li><a href="{{ route('play-room-inspirations') }}" class="dropdown-item menu-header sub-menu-text">Play Room</a></li>
                                    <li><a href="{{ route('girl-room-inspirations') }}" class="dropdown-item menu-header sub-menu-text">Girl Room</a></li>
                                    <li><a href="{{ route('boy-room-inspirations') }}" class="dropdown-item menu-header sub-menu-text">Boy Room</a></li>       
                                    <li><a href="{{ route('all-inspirations') }}" class="dropdown-item menu-header sub-menu-text">All Inspirations</a></li>       
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r mr-4">
                            <a class="nav-link menu-header menu-text" href="{{ route('catalogue') }}}">CATALOGUES</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r mr-4">
                            <a class="nav-link menu-header menu-text" href="https://blog.circu.net/">BLOG</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r mr-4">
                            <a class="nav-link menu-header menu-text" href="{{ route('press') }}">PRESS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r mr-4">
                            <a class="nav-link menu-header menu-text" href="{{ route('contact') }}">CONTACT</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r mr-4">
                            <a class="nav-link menu-header menu-text" href="{{ route('about') }}">ABOUT</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-none d-lg-block-r mr-4">
                            <a rel="modal:open" href="{{route('modal-search')}}">
                                <img class="img-d-none" style="width: 14.5px;float: none !important;margin-top:3px !important;filter: invert(85%) sepia(5%) saturate(959%) hue-rotate(125deg) brightness(87%) contrast(89%);" src="/img/header/loupe.svg" />
                            </a>
                        </li>
                        <!-- options moble -->
                        <li class="nav-item position-static dropdown p-0 d-block d-lg-none">
                            <a class="nav-link menu-header" href="{{route('deals')}}">DEALS</a>
                        </li>
                        <li class="nav-item position-static dropdown p-0 d-block d-lg-none">
                            <a class="nav-link menu-header" href="{{ route('our-houses-new') }}">OUR PROJECTS</a>
                        </li>
                        <li class="nav-item position-static dropdown d-block d-lg-none-r p-0">
                            <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownProducts" style="font-weight:bold;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ROOM BY ROOM</a>
                            <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdownProducts">
                                <div class="container max-width-site">
                                    <li><a href="{{ route('all-inspirations') }}" class="dropdown-item menu-header">All Inspirations</a></li>   
                                    <li><a href="/inspirations/category/interior-design/boys-room/" class="dropdown-item menu-header">Boy Room</a></li>
                                    <li><a href="/inspirations/category/interior-design/girls-room/" class="dropdown-item menu-header">Girl Room</a></li>
                                    <li><a href="/inspirations/category/interior-design/toys-room/" class="dropdown-item menu-header">Play Room</a></li>
                                    <li><a href="/inspirations/category/interior-design/study/" class="dropdown-item menu-header">Study Area</a></li>
                                    <li><a href="/inspirations/category/interior-design/" class="dropdown-item menu-header">Living Room</a></li>
                                    <li><a href="/inspirations/category/interior-design/nursery/" class="dropdown-item menu-header">Nursery Room</a></li>
                                    <li><a href="/inspirations/category/architecture/" class="dropdown-item menu-header">Architecture</a></li>
                                    <li><a href="/inspirations/category/lifestyle/" class="dropdown-item menu-header">Lifestyle</a></li>  
                                </div>
                            </ul>
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
                        <li class="nav-item position-static dropdown p-0 d-block d-lg-none" style="padding-bottom: 15px;">
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