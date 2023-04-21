@extends('layouts.master-test')
@section('meta')
<title>Circu Magical Furniture - Luxury brand for children</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="Circu Magical Furniture - Luxury brand for children" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="https://www.circu.net" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="https://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection
@section('head-includes')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    .img-bg-icon {
        background-image: url('https://dummyimage.com/15x15/000/fff');
        background-repeat: no-repeat;
    }

    .topbar .option i {
        float: none !important;
    }

    .background {
        background-size: cover;
        padding-bottom: calc(100%);
        background-position: center;
    }

    p {
        font-family: 'RalewayMedium', sans-serif;
    }

    .product-caption {
        font-size: 0.7rem !important;
    }

    .btn-view-more a {
        font-size: 0.70rem;
        letter-spacing: 1px;
        font-weight: 600;
        width: 80%;
    }

    .input-block {
        margin: 0px 0px 10px;
    }

    .hotspot {
        position: absolute;
        display: block;
    }

    .hotspot--title {
        opacity: 0;
        display: inline-block;
        padding-right: 10px;
        color: #413e3e;
        text-transform: uppercase;
        line-height: 50px;
        font-size: 12px;
        letter-spacing: 1px;
        transition: all cubic-bezier(.8, 0, .2, 1) .4s;
    }

    .hotspot:hover .hotspot--title {
        opacity: 1;
    }

    .hotspot--title__right {
        float: right;
        padding-right: 0;
        padding-left: 4px;
    }

    .hotspot--cta {
        position: relative;
        float: right;
        display: inline-block;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: transparent;
        border: 1px solid #fff;
        transition: all cubic-bezier(.8, 0, .2, 1) .4s;
    }

    .hotspot--cta::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #fff;
        z-index: 2;
        transition: opacity .6s;
        animation: pulse 1.5s cubic-bezier(.8, 0, .2, 1) 0s infinite;
    }

    .hotspot:hover .hotspot--cta {
        transform: scale(.6);
    }

    .hotspot:hover .hotspot--cta:after {
        opacity: 0;
    }

    @keyframes pulse {
        0% {
            transform: scale(0.4);
        }

        33% {
            transform: scale(1);
        }

        66% {
            transform: scale(0.4);
        }

        100% {
            transform: scale(0.4);
        }
    }

    .hotspot--cloud-6-drawers {
        top: 6%;
        right: 82%;
    }

    .hotspot--cloud-bed {
        top: 27%;
        right: 48%;
    }

    .hotspot--cloud-3-drawers {
        top: 30%;
        left: 73%;
    }

    .hotspot--cloud-bench-2-seat {
        bottom: 18%;
        right: 48%;
    }

    /*** ***/

    .hotspot--stool-shark {
        top: 32%;
        right: 82%;
    }

    .hotspot--sky-desk {
        top: 27%;
        right: 53%;
    }

    .hotspot--fantasy-3-drawers {
        top: 30%;
        left: 73%;
    }

    .hotspot--diana-table {
        top: 10%;
        right: 8%;
    }

    .hotspot--sky-rug {
        bottom: 10%;
        left: 75%;
    }

    /*** ***/

    .hotspot--little-mermaid {
        top: 27%;
        right: 53%;
    }

    .hotspot--chameleon-mirror {
        top: 22%;
        left: 65%;
    }

    .hotspot--cloud-puff {
        bottom: 10%;
        left: 84%;
    }

    .hotspot--cloud-dressing-table {
        top: 40%;
        right: 8%;
    }

    .hotspot--cloud-shelf-big {
        top: 32%;
        right: 83%;
    }

    @media screen and (max-width: 640px) {
        .hotspot--title {
            line-height: 40px;
            font-size: 10px;
        }

        .hotspot--cta {
            width: 40px;
            height: 40px;
        }
    }

    @media screen and (max-width: 420px) {
        .hotspot--title {
            line-height: 30px;
            font-size: 9px;
        }

        .hotspot--cta {
            width: 30px;
            height: 30px;
        }
    }

    @media screen and (max-width: 320px) {
        .hotspot--title {
            display: none;
        }

        .hotspot--cta {
            width: 20px;
            height: 20px;
        }

        .hotspot--cta::after {
            width: 5px;
            height: 5px;
        }
    }

    .form-catlogue-r .form-catalogue-middle-banner {
        top: unset !important;
        transform: unset !important;
    }

    @media (max-width:495px) {
        .bg-img-m-1 {
            display: block !important;
        }

        .bg-img-m-2 {
            display: none !important;
        }

        .bg-img-t {
            display: none !important;
        }
    }

    @media (min-width:496px) and (max-width:575px) {
        .bg-img-m-1 {
            display: none !important;
        }

        .bg-img-m-2 {
            display: block !important;
        }

        .bg-img-t {
            display: none !important;
        }
    }

    @media (min-width:576px) and (max-width:991px) {
        .bg-img-m-1 {
            display: none !important;
        }

        .bg-img-m-2 {
            display: none !important;
        }

        .bg-img-t {
            display: block !important;
        }
    }

    /* linha de produtos */

    .product-box {
        padding: 0.09rem;
        margin: 0;
    }

    .product_thumb {
        width: 100%;
        background-color: #F7F7F7;
        margin: 0;
        float: left;
        text-align: center;
    }

    .product--title {
        font-family: 'Raleway', sans-serif;
        text-align: center;
        color: #666666;
        font-size: 0.74rem;
    }

    .product--title .name {
        font-weight: bold;
        text-transform: uppercase;
    }

    .product--title .sub_category {
        text-transform: lowercase;
    }

    .clearfix {
        content: "";
        display: table;
        /* float: none; */
        clear: both;
    }

    .product-box--content {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        visibility: hidden;
        display: block;
        width: 100%;
        height: 100%;
        background-color: #FFFFFF;
        z-index: 3;
        padding: 12px;
        -webkit-transition: all 100ms ease 0ms;
        -o-transition: all 100ms ease 0ms;
        transition: all 100ms ease 0ms;
    }

    .product-box--share {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 12px;
    }

    .slideToggle a,
    .slideToggle a:hover {
        font-size: 12px;
        letter-spacing: 1px;
        padding: 5px 20px 4px;
        margin: 12px auto 0px;
        z-index: 2;
        background-color: #98b9b5;
        color: #FFFFFF;
        border: 1px solid #98b9b5;
        display: inline-block;
    }

    .product-box:hover .product-box--hover,
    .product-box:hover .product-box--content {
        visibility: visible;
        -webkit-box-shadow: 0px 0px 22px 0px rgb(0 0 0 / 30%);
        -moz-box-shadow: 0px 0px 22px 0px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 0px 22px 0px rgb(0 0 0 / 30%);
    }

    .product-box--share {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 12px;
    }

    /* linha de produtos */

    .swiper-container {
        width: 100%;
    }

    @media (min-width:640px) {
        .swiper-thankyou .swiper-slide {
            width: auto !important;
        }
    }

    .swiper-thankyou .swiper-pagination-bullet-active {
        opacity: 1;
        background: #a3c2bc !important;
        border: 2px solid #a3c2bc !important;
    }

    .swiper-thankyou .swiper-pagination-bullet {
        opacity: 1;
        background: transparent;
        border: 1px solid #a3c2bc !important;
        border: 2px solid #a3c2bc !important;
        width: 10px;
        height: 10px;
    }

    .swiper-container {
        width: 100%;
    }

    @media (min-width:640px) {
        .swiper-thankyou .swiper-slide {
            width: auto !important;
        }
    }

    .swiper-thankyou .swiper-pagination-bullet-active {
        opacity: 1;
        background: #a3c2bc !important;
        border: 2px solid #a3c2bc !important;
    }

    .swiper-thankyou .swiper-pagination-bullet {
        opacity: 1;
        background: transparent;
        border: 1px solid #a3c2bc !important;
        border: 2px solid #a3c2bc !important;
        width: 10px;
        height: 10px;
    }

    .swiper-ambients .swiper-container {
        width: 100%;
        height: 100%;
    }

    .horizontal-id {
        width: 75% !important;
    }

    .vertical-id {
        width: 33% !important;
    }

    .bigImages .img-fluid {
        width: 100%;
    }

    .slider-button-next.next-item,
    .slider-button-prev.prev-item {
        padding: 8px;
        cursor: pointer;
        position: absolute;
        top: 50%;
        z-index: 9999;
    }

    .slider-button-prev.prev-item {
        left: 1%;
        right: auto;
        font-size: 18px;
    }

    .slider-button-next.next-item {
        right: 1%;
        left: auto;
        font-size: 18px;
    }

    .swiper-ambients.arrow-banners {
        color: white;
        opacity: 50%;
        background-image: none !important;
        -webkit-transition: opacity .50s ease-in-out;
        -moz-transition: opacity .50s ease-in-out;
        -ms-transition: opacity .50s ease-in-out;
        -o-transition: opacity .50s ease-in-out;
        transition: opacity .50s ease-in-out;
    }

    .swiper-ambients.arrow-banners:hover {
        color: white;
        opacity: 100%;
        background-image: none !important;
        -webkit-transition: opacity .50s ease-in-out;
        -moz-transition: opacity .50s ease-in-out;
        -ms-transition: opacity .50s ease-in-out;
        -o-transition: opacity .50s ease-in-out;
        transition: opacity .50s ease-in-out;
    }

    .swiper-button-prev {
        left: 35px !important;
        right: auto;
    }

    .swiper-button-next {
        right: 35px !important;
        left: auto;
    }

    @media (min-width:641px) {
        .slider-main.swiper-slide {
            width: auto !important;
        }
    }
</style>
@endsection
@section('main-content')


<div class="container-fluid text-center p-0 swiper-ambients mb-4 d-print-none " style="overflow: hidden;">
    <div class="row d-none d-md-block">
        <div class="col-12 swiper-container swiper-ambients">
            <div class="swiper-wrapper my-gallery">
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/the-multiverse-bedroom-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 69%;left: 31%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -215%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/illusion-chair-white-bear">
                                <img src="/img/products/carousel/illusion-chair-white-bear-circu-magical-furniture.jpg" alt="Illusion White Bear Chair Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>ILLUSION WHITE BEAR </b>CHAIR</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The Illusion Series brings a touch of magic to the children's playroom decor. This kids’ furniture set includes a table, a stool,</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'illusion-chair-white-bear'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 69%;left: 46%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/illusion-stool-leopard">
                                <img src="/img/products/carousel/illusion-stool-leopard-circu-magical-furniture.jpg" alt="Illusion Leopard Chair Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>ILLUSION LEOPARD</b> STOOL</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The Illusion Series brings a touch of magic to the children's playroom decor.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'illusion-stool-leopard'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 62%;left: 43%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/illusion-table">
                                <img src="/img/products/carousel/illusion-table-circu-magical-furniture.jpg" alt="Illusion Table Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>ILLUSION </b>TABLE</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">This creative kids' table gives the illusion of being suspended on the air by its translucid acrylic legs.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'illusion-table'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 47%;left: 19%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: -155%;right: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/periwinkle-wall-lamp">
                                <img src="/img/products/carousel/periwinkle-wall-lamp-circu-magical-furniture.jpg" alt="Periwnkle Wall Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>PERIWINKLE </b>WALL LAMP</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The Periwinkle flower serves as the main inspiration for this illuminating lighting piece.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'periwinkle-wall-lamp'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 77%;left: 52%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: -155%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/the-rhinos-troupe-round-rug">
                                <img src="/img/products/carousel/the-rhinos-troupe-round-rug-circu-magical-furniture.jpg" alt="THE RHINO’S TROUPE ROUN Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>THE RHINO’S TROUPE ROUND </b>RUG</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The biggest show of the world full of music, fun, and magic is here and it can be a part of your kid's bedroom project.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'the-rhinos-troupe-round-rug'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 33%;left: 50%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -215%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/periwinkle-pendant">
                                <img src="/img/products/carousel/periwinkle-pendant-circu-magical-furniture.jpg" alt="Periwnkle Pendant Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>PERIWINKLE </b>PENDANT</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The Periwinkle flower, which is delicate and petite, is the main inspiration for this brilliant lighting item.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'giraffe-jungle-rug'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 28%;left: 38%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/periwinkle-suspension-lamp">
                                <img src="/img/products/carousel/periwinkle-suspension-lamp-circu-magical-furniture.jpg" alt="Periwnkle Suspension Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>PERIWINKLE </b>SUSPENSION LAMP</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Delicate and small, the Periwinkle flower serves as the main inspiration for this illuminating lighting piece.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'periwinkle-suspension-lamp'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 71%;left: 70%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/lotus-armchair">
                                <img src="/img/products/carousel/lotus-armchair-circu-magical-furniture.jpg" alt="Lotus Armchair Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>LOTUS </b>ARMCHAIR</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The perennially precious and divine Lotus Flower has a long and illustrious history in the myths of various nations and civilizations.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'lotus-armchair'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 23%;left: 59%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: -155%;right: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/mogli-playhouse">
                                <img src="/img/products/carousel/mogli-playhouse-circu-magical-furniture.jpg" alt="Mogli Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>MOGLI PLAYHOUSE </b>BED / GYM</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the Jungle Book, the Mogli Playhouse was designed by using the elements and the wonders of nature.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'mogli-playhouse'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 45%;left: 55%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: -155%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/little-bunny-office-chair">
                                <img src="/img/products/carousel/little-bunny-office-chair-circu-magical-furniture.jpg" alt="Little Bunny Office Chair Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>LITTLE BUNNY </b>OFFICE CHAIR</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Little Bunny Office Chair is inspired by the iconic character Bugs Bunny.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-bunny-office-chair'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 73%;left: 19%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: -155%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/animal-stool-elephant">
                                <img src="/img/products/carousel/animal-stool-elephant-circu-magical-furniture.jpg" alt="Animal Stool Elephant Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>ANIMAL ELEPHANT </b>STOOL</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The Animal Stools collection owns an exclusive design that promises to awaken children's friendship with animals.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'animal-stool-elephant'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 39%;left: 90%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: -155%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/cloud-shelf-small">
                                <img src="/img/products/carousel/cloud-shelf-small-circu-magical-furniture.jpg" alt="Cloud Small Shelf Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>CLOUD SMALL </b>SHELF</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">With a creative and playful design, this Cloud Shelf aims to reinforce the connection between children and imagination.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-shelf-smal'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/green-mint-playroom-circu-magical-furniture-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 33%;left: 28%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/magical-market-playroom">
                                <img src="/img/products/carousel/magical-market-playroom-circu-magical-furniture.jpg" alt="Dolly Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>MAGICAL MARKET </b>PLAYROOM</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Magical Market Playroom is here to take the category of kids' playgrounds to another level.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'magical-market-playroom'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/vixey-bed-circu-magical-furniture-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 37%;left: 55%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/vixey-bed">
                                <img src="/img/products/carousel/vixey-bed-circu-magical-furniture.jpg" alt="Dolly Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>VIXEY </b>BED</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Inspired by Disney's 1981 classic "The Fox and the Hound", the Vixey Bed is a fun, soft and comfortable kids' bed.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'vixey-bed'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 63%;left: 75%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/fantasy-air-nightstand">
                                <img src="/img/products/carousel/fantasy-air-nightstand-circu-magical-furniture.jpg" alt="Dolly Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>FANTASY AIR </b>NIGHTSTAND</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Fantasy Air Nightstand is the perfect piece to complement your kid's bedroom.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'fantasy-air-nightstand'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 50%;left: 28%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/diana-table-lamp">
                                <img src="/img/products/carousel/diana-table-lamp-circu-magical-furniture.jpg" alt="Dolly Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>DIANA </b>TABLE LAMP</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Diana is a vintage table lamp inspired by some of the greatest design classics of the mid-century era.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'diana-table-lamp'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/pixel-office-chair-circu-magical-furniture-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 70%;left: 55%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/pixie-office-chair">
                                <img src="/img/products/carousel/pixie-office-chair-circu-magical-furniture.jpg" alt="Dolly Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>PIXIE </b>OFFICE CHAIR</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Pixie Office Chair was inspired by the iconic fairy Tinker Bell.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'pixie-office-chair'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 52%;left: 35%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/cloud-desk">
                                <img src="/img/products/carousel/cloud-desk-circu-magical-furniture.jpg" alt="Dolly Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>CLOUD </b>DESK</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">It’s original cloud shaped form has unique details that were specially made to make homework feel like a magical adventure.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-desk'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/lewis-two-seat-sofa-circu-magical-furniture-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 66%;left: 60%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/lewis-chaise-longue">
                                <img src="/img/products/carousel/lewis-chaise-longue-circu-magical-furniture.jpg" alt="Dolly Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>LEWIS </b>CHAISE LONGUE</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The Callanish Standing Stones on the Isle of Lewis are one of Scotland's oldest and most magnificent landmarks.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'lewis-chaise-longue'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/cloud-rocking-chair-circu-magical-furniture-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 25%;left: 15%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/cloud-cradle">
                                <img src="/img/products/carousel/cloud-cradle-circu-magical-furniture.jpg" alt="Dolly Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>CLOUD </b>CRADLE</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">This cradle is the perfect piece for every baby (and parents) bedroom.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-cradle'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 45%;left: 75%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;right: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/cuddle-rocking-chair">
                                <img src="/img/products/carousel/cuddle-rocking-chair-circu-magical-furniture.jpg" alt="Dolly Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>CLOUD ROCKING</b>CHAIR</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">We bet you can't imagine anything more loving and more nurturing than a parent's tight embrace.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cuddle-rocking-chair'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 60%;left: 55%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;right: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/animal-stool-bird">
                                <img src="/img/products/carousel/animal-stool-bird-circu-magical-furniture.jpg" alt="Dolly Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>ANIMAL BIRD</b>STOOL</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Bird Stool has an exclusive design that promises to awaken children's friendship with animals.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'animal-stool-bird'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/cloud-craddle-circu-magical-furniture-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 55%;left: 35%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/cloud-cradle">
                                <img src="/img/products/carousel/cloud-cradle-circu-magical-furniture.jpg" alt="Dolly Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>CLOUD </b>CRADLE</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">This cradle is the perfect piece for every baby (and parents) bedroom.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-cradle'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/dreamhouse-adventures-bedroom-banner-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 18%;left: 60%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/dolly-playhouse-bed">
                                <img src="/img/products/carousel/dolly-playhouse-bed-circu-magical-furniture.jpg" alt="Dolly Playhouse Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>DOLLY PLAYHOUSE</b> BED</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Dolly Playhouse is a luxury kid bed specially made to ensure that kids have the ultimate fun in their bedroom.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'dolly-playhouse-bed'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/candyland-playroom-banner-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 44%;left: 32%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;right: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/bubble-gum-gym">
                                <img src="/img/products/carousel/bubble-gum-gym-circu-magical-furniture.jpg" alt="Bubble Gum Gym Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>BUBBLE GUM</b> GYM</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Bubble Gum Gym is inspired by the traditional outdoor playgrounds and it's the product you need to bring adventure and creativity to your children's play area.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'bubble-gum-gym'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/an-undersea-adventure-by-bymura-banner-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 51%;left: 81%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;right: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/amik-table-lamp">
                                <img src="/img/products/carousel/amik-table-lamp-circu-magical-furniture.jpg" alt="Amik Table Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>AMIK</b> TABLE LAMP</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">AMIK Table Lamp reminds of a lacquered piece of wood scooped by beaver teeth. This unique accent lamp fits perfectly as a bedside table light or as living room lighting.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'amik-table-lamp'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 69%;left: 65%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: -40%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/tristen-bed">
                                <img src="/img/products/carousel/tristen-bed-circu-magical-furniture.jpg" alt="Tristen Bed Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>TRISTEN</b> BED</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the movie Atlantics, this one of a kind bed was made to shape comfort and to keep your little one's dreams safe and sound while he/she travels through their imagination at night.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'tristen-bed'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 50%;left: 29%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -105%;right: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/cloud-dressing-table-vanity-console">
                                <img src="/img/products/carousel/cloud-dressing-table-vanity-console-circu-magical-furniture.jpg" alt="Cloud Dressing Table Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>CLOUD VANITY</b> CONSOLE</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Cloud Vanity Console is the ideal dressing table for a magical-inspired bedroom. Its original cloud-shaped form has unique details that were specially made to make little girls feel like true princesses living in a fairytale.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-dressing-table-vanity-console'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 81%;left: 37%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: -10%;right: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/the-whales-tale-rug">
                                <img src="/img/products/carousel/the-whales-tale-rug-circu-magical-furniture.jpg" alt="The Whales Tale Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>THE WHALE’S TALE</b> RUG</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">This rug was inspired by kids' favorite tales about the ocean and about the whales. These amazing animals are known to be history keepers and they symbolize emotional and peaceful strength.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'the-whales-tale-rug'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 61%;left: 35%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: -105%;right: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/little-mermaid-chair">
                                <img src="/img/products/carousel/little-mermaid-chair-circu-magical-furniture.jpg" alt="Little Mermaid Chair Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>LITTLE MERMAID</b> CHAIR</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the iconic Disney's princess Ariel and her undersea kingdom, the Little Mermaid Chair is a unique item that will highlight the decor of any girl's room.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-mermaid-chair'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/an-outer-space-mission-room-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 23%;left: 41%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -10%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/cloud-bed">
                                <img src="/img/products/carousel/cloud-bed-circu-magical-furniture.jpg" alt="Cloud Bed Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>CLOUD</b> BED</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Its cloud-shaped form is only one of the details that make this piece whimsical and a perfect item for any bedroom.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bed'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>

                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 38%;left: 23%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: -80%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/diana-table-lamp">
                                <img src="/img/products/carousel/diana-table-lamp-circu-magical-furniture.jpg" alt="Diana Table Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>DIANA</b> TABLE LAMP</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Diana is a vintage table lamp inspired by some of the greatest design classics of the mid-century era. It is a handmade lamp built with materials such as brass and aluminum.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'diana-table-lamp'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>

                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 63%;left: 75%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: -10%;right: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/little-cloud-nightstand">
                                <img src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" alt="Little Cloud Nighstand Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>LITTLE COULD</b> NIGHTSTAND</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The Little Cloud Nightstand is a kids’ furniture product inspired by Pixar’s Short film “Partly Cloudy” and it is the perfect storage item for dreamy bedroom decoration.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-cloud-nightstand'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/an-outer-space-mission-room-2.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/our-magical-room-jungle-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 61%;left: 48%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/tristen-bed">
                                <img src="/img/products/carousel/tristen-bed-circu-magical-furniture.jpg" alt="Tristen Bed Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>TRISTEN</b> BED</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the movie Atlantics, this one of a kind bed was made to shape comfort and to keep your little one's dreams safe and sound while he/she travels through their imagination at night.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'tristen-bed'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>

                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 63%;left: 25%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/little-cloud-nightstand">
                                <img src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" alt="Little Cloud Nightstand Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>LITTLE CLOUD</b> NIGHTSTAND</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The Little Cloud Nightstand is a kids’ furniture product inspired by Pixar’s Short film “Partly Cloudy” and it is the perfect storage item for dreamy bedroom decoration. </div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-cloud-nightstand'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>

                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 70%;left: 14%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/illusion-chair-leopard">
                                <img src="/img/products/carousel/illusion-chair-leopard-circu-magical-furniture.jpg" alt="Illusion Leopard Chair Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>ILLUSION LEOPARD</b> CHAIR</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The Illusion Series brings a touch of magic to the children's playroom decor. This kids’ furniture set includes a table, a stool, and a chair.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'illusion-chair-leopard'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>

                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 65%;left: 67%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/teepee-playground">
                                <img src="/img/products/carousel/teepee-playground-circu-magical-furniture.jpg" alt="Teepee Playground Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>TEEPEE</b> PLAYGROUND</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">This kids’ teepee is a playroom inspired by the traditional indigenous tents. The Teepee Playground has a playful design.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'teepee-playground'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/our-magical-room-spaceman-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 27%;left: 53%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: 18%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/rocky-rocket">
                                <img src="/img/products/carousel/rocky-rocket-circu-magical-furniture.jpg" alt="Rocky Rocket Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>ROCKY ROCKET</b> SOFA / CHAIR</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The Rocky Rocket it’s a children’s interactive chair, that will be the perfect addition to any kid's play area.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'rocky-rocket'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 56%;left: 11%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center" style="top: 18%;left: 105%;">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/puzzled-bookcase-desk">
                                <img src="/img/products/carousel/puzzled-bookcase-desk-circu-magical-furniture.jpg" alt="Puzzled Bookcase Desk Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>PUZZLED</b> BOOKCASE | DESK</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Inspired by geometric spaces and with the drive and passion to create a piece where kids can explore their imagination and allow the dreams to get out of the box.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'puzzled-bookcase-desk'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/our-magical-room-spaceman-3.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 41%;left: 62%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/atomic-wall-lamp">
                                <img src="/img/products/carousel/atomic-wall-lamp-circu-magical-furniture.jpg" alt="Atomic Wall Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>ATOMIC</b> WALL LAMP</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Atomic wall light is a mid-century modern lighting design inspired by the atomic discoveries of the mid-20th century.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'atomic-wall-lamp'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>

                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 91%;left: 46%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/stellar-round-rug">
                                <img src="/img/products/carousel/stellar-round-rug-circu-magical-furniture.jpg" alt="Stellar Round Rug Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>STELLAR ROUND</b> RUG</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the galaxy’s constellations, the Stellar Rug is the ideal piece for the little space adventures who love to look up to the sky every night and count the stars.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'stellar-round-rug'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>

                    <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 77%;left: 18%;">
                        <!-- desktop -->
                        <div class="hotspot--cta"></div>
                        <div class="hotspot--title text-center">
                            <div class="close-hotspot">X</div>
                            <a href="https://www.circu.net/products/sky-nightstand">
                                <img src="/img/products/carousel/sky-nightstand-circu-magical-furniture.jpg" alt="Sky Nightstand Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
                                <div class="hotspot-name"><b>SKY</b> NIGHTSTAND</div>
                                <div class="hotspot-description my-2 d-none d-lg-block">The Sky Nightstand is a kids’ small chest of drawers inspired by the Disney movie “Planes” and it is the perfect storage item for your aviation inspired bedroom decoration.</div>
                            </a>
                            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'sky-nightstand'] )}}">
                                <div class="hotspot-get-price"><span>GET PRICE</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/cloud-collection-circu-magical-collection-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                </div>
                <div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
                    <img draggable="false" alt="" src="/img/slides/home-ambiences/news-ambiences/playground-circu-magical-furniture-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                </div>
            </div>

            <div class="swiper-button-prev arrow-banners"></div>
            <div class="swiper-button-next arrow-banners"></div>
        </div>


    </div>

</div>
<div class="container max-width-site pt-3">

    <div class="row">

        <div class="col-12 text-center pt-5 pb-2">
            <h5> ZIPS </h5>
        </div>

        <div class="col-12">
            <div class="row">
                @foreach($projects as $project)
                <div class="col-12 col-md-6 my-3">
                    <a href="/docs/high-resolution-img/project-{{$project->slug}}.zip" download class="project_thumbnail">
                        <img src="/img/projects/{{$project->slug}}/slide/{{$project->slug}}-1.jpg" class="img-fluid">
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-bottom">
                            <p class="mx-auto">&#43;</p>
                        </div>
                    </a>
                    <div class="product-box--title my-3 text-center">
                        <a href="/docs/high-resolution-img/project-{{$project->slug}}.zip" download>{{ $project->article_languages[0]->title }} </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div><!-- end row -->

</div>
@endsection
@section('footer-includes')
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript">
    // $(window).bind("load resize", function () {
    //     var elementPos = $('.owl-ambiences .owl-item img').height();
    //     $('.owl-ambiences .owl-dots').css({
    //         'top': elementPos - 45
    //     });
    // });

    // window.setTimeout(function () {
    //     $('#target_url a')[0].click();
    // }, 1000);

    $(window).on('load', function() {
        var swiper = new Swiper('.swiper-ambients.swiper-container', {
            centeredSlides: true,
            spaceBetween: 5,
            loop: true,
            autoplay: false,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            disableOnInteraction: false,
            slideToClickedSlide: false,
            breakpoints: {
                // when window width is >= 320px
                100: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                640: {
                    slidesPerView: 'auto',
                    spaceBetween: 5
                }
            }
        });
        initPhotoSwipeFromDOMambients('.my-gallery');
    });
    const swiper = new Swiper('.swiper-container', {
        centeredSlides: true,
        spaceBetween: 5,
        loop: true,
        autoplay: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        disableOnInteraction: false,
        slideToClickedSlide: false,
        breakpoints: {
            // when window width is >= 320px
            100: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            640: {
                slidesPerView: 'auto',
                spaceBetween: 5
            }
        }
    });
    var swiperthnakyoupage = new Swiper('.swiper-thankyou .swiper-container', {
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 5,
        loop: true,
        autoplay: false,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        disableOnInteraction: false,
        breakpoints: {
            // when window width is >= 320px
            100: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            640: {
                slidesPerView: 'auto',
                spaceBetween: 5
            }
        }
    });
    $('.owl-ambients2').owlCarousel({
        loop: true,
        margin: 5,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left arrow-banners'></i>", "<i class='fas fa-chevron-right arrow-banners'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });
    $('.owl-ambiences').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        lazyLoad: false,
        dots: true,
        autoplay: false,
        fluidSpeed: 1500,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });

    $('.owl-main').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: true,
        nav: false,
        autoplay: true,
        fluidSpeed: 1500,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });

    $('.owl-novelties').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: false,
        autoplay: true,
        fluidSpeed: 1500,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });
</script>
@endsection