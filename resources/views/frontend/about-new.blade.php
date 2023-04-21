@extends('layouts.master')
@section('meta')
  <title>{{$meta_data->meta_title}}</title>
  <meta name="description" content="{{$meta_data->meta_description}}" />
  <meta name="keywords" content="{{$meta_data->key_words}}" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
  <meta property="og:title" content="{{$meta_data->meta_title}}" />
  <meta property="og:description" content="{{$meta_data->meta_description}}" />
<meta property="og:url" content="https://www.circu.net" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="https://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection


@section('head-includes')
<style>
    p {
        font-family: 'RalewayMedium', sans-serif;
    }

    .form-catlogue-r .form-catalogue-middle-banner {
        top: unset !important;
        transform: unset !important;
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

    .owl-nav {
        font-size: 1.6rem;
        color: #cccccc;
    }

    .input-block {
        margin: 0px 0px 10px;
    }

    .hotspot {
        position: absolute;
        display: block;
        /* z-index: 999999; */
    }

    .hotspot--title {
        position: absolute;
        margin: 0;
        background-color: #FFFFFF;
        padding: 14px;
        width: 20em;
        max-width: 50vw;
        z-index: 100;
        opacity: 0;
        display: none;
        padding-right: 10px;
        color: #413e3e;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 1px;
        transition: all cubic-bezier(.8, 0, .2, 1) .4s;
    }

    .close-hotspot {
        right: 0.4rem;
        top: 0.3rem;
        text-align: right;
        font-size: 1.1rem;
        position: absolute;
        cursor: pointer;
    }

    .hotspot-img {
        max-height: 180px;
        width: auto;
    }

    .hotspot-name {
        text-align: center;
        color: #7d7d7d;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 1px;
    }

    a .hotspot-description {
        font-size: 0.6rem;
        line-height: 15px;
        color: #7d7d7d;
        text-transform: capitalize;
    }

    .hotspot-get-price {
        background-color: #94b7b3;
        color: #FFFFFF;
        padding: 4px 20px;
        margin: 5px 0px;
        display: inline-block;
    }

    .hotspot--title__right .hotspot--cta {
        float: right;
    }

    .hotspot--title__left .hotspot--cta {
        float: left;
    }

    .hotspot--cta {
        position: relative;
        float: right;
        display: inline-block;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        z-index: 10;
        background: transparent;
        border: 1px solid #fff;
        cursor: pointer;
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

    /*.hotspot:hover .hotspot--cta:after {
      opacity: 0;
    }*/
    /*.hotspot--cta:hover + .hotspot--title{
      opacity: 1;
    }*/
    /* .lg-hotspot--selected {
        z-index: 999;
    } */

    .lg-hotspot--selected .hotspot--title {
        opacity: 1;
        display: inline-block;
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

    /*** ***/

    .hotspot--little-cloud-nightstand {
        top: 77%;
        left: 46%;
    }

    .hotspot--little-cloud-nightstand .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--cloud-chest-3-drawers {
        top: 77%;
        left: 29%;
    }

    .hotspot--cloud-chest-3-drawers .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--cloud-nightstand {
        top: 77%;
        right: 22%;
    }

    .hotspot--cloud-nightstand .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--cloud-stool-puff {
        top: 82%;
        left: 56%;
    }

    .hotspot--cloud-stool-puff .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--cloud-shelf-big {
        top: 35%;
        left: 60%;
    }

    .hotspot--cloud-shelf-big .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--dream-desk {
        top: 53%;
        left: 60%;
    }

    .hotspot--dream-desk .hotspot--title {
        top: -8%;
        right: 105%;
    }

    .hotspot--cloud-mirror {
        top: 26%;
        left: 56%;
    }

    .hotspot--cloud-mirror .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--cloud-shelf-small {
        top: 28%;
        left: 41%;
    }

    .hotspot--cloud-shelf-small .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--cloud-dressing-table-vanity-console {
        top: 54%;
        left: 33%;
    }

    .hotspot--cloud-dressing-table-vanity-console .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--fantasy-air-balloon-mobile {
        top: 47%;
        left: 56%;
    }

    .hotspot--fantasy-air-bookcase-limited-edition-mobile {
        top: 44%;
        left: 30%;
    }

    .hotspot--fantasy-air-chest-3-drawers-mobile {
        top: 54%;
        right: 20%;
    }

    .hotspot--fantasy-air-balloon {
        top: 46%;
        right: 42%;
    }

    .hotspot--fantasy-air-balloon .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--fantasy-air-bookcase-limited-edition {
        top: 44%;
        right: 61%;
    }

    .hotspot--fantasy-air-bookcase-limited-edition .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--fantasy-air-shelf-big {
        top: 47%;
        left: 25%;
    }

    .hotspot--fantasy-air-shelf-big .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--fantasy-air-nightstand {
        bottom: 18%;
        left: 26%;
    }

    .hotspot--fantasy-air-nightstand .hotspot--title {
        bottom: 0%;
        left: 105%;
    }


    .hotspot--fantasy-air-shelf-small {
        top: 37%;
        right: 27%;
    }

    .hotspot--fantasy-air-shelf-small .hotspot--title {
        top: 0%;
        left: 105%;
    }

    .hotspot--fantasy-air-chest-3-drawers {
        top: 57%;
        right: 36%;
    }

    .hotspot--fantasy-air-chest-3-drawers .hotspot--title {
        top: 18%;
        left: 105%;
    }


    .hotspot--cloud-6-drawers {
        top: 5%;
        left: 9%;
    }

    .hotspot--cloud-6-drawers .hotspot--title {
        top: 18%;
        left: 105%;
    }

    .hotspot--sky-b-plane {
        top: 21%;
        right: 59%;
    }

    .hotspot--sky-b-plane .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--cloud-bed {
        top: 10%;
        right: 59%;
    }

    .hotspot--cloud-bed .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--sky-one-plane {
        top: 26%;
        left: 73%;
    }

    .hotspot--sky-one-plane .hotspot--title {
        top: 9%;
        right: 105%;
    }

    .hotspot--cloud-3-drawers {
        top: 26%;
        left: 73%;
    }

    .hotspot--cloud-3-drawers .hotspot--title {
        top: 9%;
        right: 105%;
    }

    /*** ***/
    .hotspot--kings-and-queens {
        top: 18%;
        right: 40%;
    }

    .hotspot--kings-and-queens .hotspot--title {
        top: 0%;
        left: 105%;
    }

    /*** ***/

    .hotspot--sky-rug {
        top: 26%;
        right: 37%;
    }

    .hotspot--sky-rug-mobile {
        top: 25%;
        right: 37%;
    }

    .hotspot--sky-b-plane-bed-mobile {
        top: 50%;
        left: 15%;
    }

    .hotspot--sky-one-plane-bed-mobile {
        top: 58%;
        right: 18%;
    }

    .hotspot--cloud-mirror-mobile {
        top: 30%;
        right: 44.5%;
    }

    .hotspot--dream-desk-mobile {
        top: 53%;
        right: 18%;
    }

    .hotspot--cloud-dressing-table-vanity-console-mobile {
        top: 50%;
        left: 21%;
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


    .section1 {
        background-image: url('/img/about/section1/banner1.jpg');
        background-image: -webkit-image-set(url('/img/about/section1/banner1.jpg') 1x, url('/img/about/section1/banner1-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section2 {
        background-image: url('/img/about/section2/banner2.jpg');
        background-image: -webkit-image-set(url('/img/about/section2/banner2.jpg') 1x, url('/img/about/section2/banner2-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    @media (min-width: 768px) {
        .col-md-20 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 20%;
            max-width: 20%;
        }
    }

    .plus {
        cursor: pointer;
        display: inline-block;
        vertical-align: top;
        color: white;
        text-align: center;
        line-height: 40px;
        font-size: 30px;
    }

    .section3 {
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section5 {
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .myVideo {
        position: absolute;
        right: 0;
        bottom: 0;
        top: 0;
        right: 0;
        width: 100%;
        background-size: 100% 100%;
        background-color: black;
        background-image:
            /* our video */
        ;
        background-position: center center;
        background-size: contain;
        object-fit: cover;
    }


    .section4-slide1 {
        background-image: url('/img/about/section4/fantasy-collection/banner1-d.jpg');
        background-image: -webkit-image-set(url('/img/about/section4/fantasy-collection/banner1-d.jpg') 1x, url('/img/about/section4/fantasy-collection/banner1-d-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section4-slide2 {
        background-image: url('/img/about/section4/sky-collection/banner1-d.jpg');
        background-image: -webkit-image-set(url('/img/about/section4/sky-collection/banner1-d.jpg') 1x, url('/img/about/section4/sky-collection/banner1-d-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section4-slide3 {
        background-image: url('/img/about/section4/cloud-collection/banner1-d.jpg');
        background-image: -webkit-image-set(url('/img/about/section4/cloud-collection/banner1-d.jpg') 1x, url('/img/about/section4/cloud-collection/banner1-d-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }


    .section5-banner1-slide1 {
        background-image: url('/img/about/section6/room-by-room/banner1-new.jpg');
        background-image: -webkit-image-set(url('/img/about/section6/room-by-room/banner1-new.jpg') 1x, url('/img/about/section6/room-by-room/banner1-new-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section5-banner1-slide2 {
        background-image: url('/img/about/section6/room-by-room/banner2.jpg');
        background-image: -webkit-image-set(url('/img/about/section6/room-by-room/banner2.jpg') 1x, url('/img/about/section6/room-by-room/banner2-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section5-banner1-slide3 {
        background-image: url('/img/about/section6/room-by-room/banner3.jpg');
        background-image: -webkit-image-set(url('/img/about/section6/room-by-room/banner3.jpg') 1x, url('/img/about/section6/room-by-room/banner3-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section5-banner1-slide4 {
        background-image: url('/img/about/section6/room-by-room/banner4.jpg');
        background-image: -webkit-image-set(url('/img/about/section6/room-by-room/banner4.jpg') 1x, url('/img/about/section6/room-by-room/banner4-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section5-banner1-slide5 {
        background-image: url('/img/about/section6/room-by-room/banner5.jpg');
        background-image: -webkit-image-set(url('/img/about/section6/room-by-room/banner5.jpg') 1x, url('/img/about/section6/room-by-room/banner5-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section5-banner1-slide6 {
        background-image: url('/img/about/section6/room-by-room/banner6.jpg');
        background-image: -webkit-image-set(url('/img/about/section6/room-by-room/banner6.jpg') 1x, url('/img/about/section6/room-by-room/banner6-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section5-banner2-slide1 {
        background-image: url('/img/about/section6/projects/banner1.jpg');
        background-image: -webkit-image-set(url('/img/about/section6/projects/banner1.jpg') 1x, url('/img/about/section6/projects/banner1-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section5-banner2-slide2 {
        background-image: url('/img/about/section6/projects/banner2.jpg');
        background-image: -webkit-image-set(url('/img/about/section6/projects/banner2.jpg') 1x, url('/img/about/section6/projects/banner2-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section5-banner2-slide3 {
        background-image: url('/img/about/section6/projects/banner3.jpg');
        background-image: -webkit-image-set(url('/img/about/section6/projects/banner3.jpg') 1x, url('/img/about/section6/projects/banner3-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section5-banner2-slide4 {
        background-image: url('/img/about/section6/projects/banner4.jpg');
        background-image: -webkit-image-set(url('/img/about/section6/projects/banner4.jpg') 1x, url('/img/about/section6/projects/banner4-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section5-banner2-slide5 {
        background-image: url('/img/about/section6/projects/banner5.jpg');
        background-image: -webkit-image-set(url('/img/about/section6/projects/banner5.jpg') 1x, url('/img/about/section6/projects/banner5-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section6-left-1 {
        background-image: url('/img/about/section7/castle/ambiente.jpg');
        background-image: -webkit-image-set(url('/img/about/section7/castle/ambiente.jpg') 1x, url('/img/about/section7/castle/ambiente-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section6-left-2 {
        background-image: url('/img/about/section7/plane/ambiente.jpg');
        background-image: -webkit-image-set(url('/img/about/section7/plane/ambiente.jpg') 1x, url('/img/about/section7/plane/ambiente-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section6-left-3 {
        background-image: url('/img/about/section7/rocket/ambiente.jpg');
        background-image: -webkit-image-set(url('/img/about/section7/rocket/ambiente.jpg') 1x, url('/img/about/section7/rocket/ambiente-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }


    .section6-right-1 {
        background-image: url('/img/about/section7/castle/castle-1.jpg');
        background-image: -webkit-image-set(url('/img/about/section7/castle/castle-1.jpg') 1x, url('/img/about/section7/castle/castle-1-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section6-right-2 {
        background-image: url('/img/about/section7/castle/castle-2.jpg');
        background-image: -webkit-image-set(url('/img/about/section7/castle/castle-2.jpg') 1x, url('/img/about/section7/castle/castle-2-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section6-right-3 {
        background-image: url('/img/about/section7/castle/castle-3.jpg');
        background-image: -webkit-image-set(url('/img/about/section7/castle/castle-3.jpg') 1x, url('/img/about/section7/castle/castle-3-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section6-right-2-1 {
        background-image: url('/img/about/section7/plane/plane-1.jpg');
        background-image: -webkit-image-set(url('/img/about/section7/plane/plane-1.jpg') 1x, url('/img/about/section7/plane/plane-1-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section6-right-2-2 {
        background-image: url('/img/about/section7/plane/plane-2.jpg');
        background-image: -webkit-image-set(url('/img/about/section7/plane/plane-2.jpg') 1x, url('/img/about/section7/plane/plane-2-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section6-right-2-3 {
        background-image: url('/img/about/section7/plane/plane-3.jpg');
        background-image: -webkit-image-set(url('/img/about/section7/plane/plane-3.jpg') 1x, url('/img/about/section7/plane/plane-3-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section6-right-3-1 {
        background-image: url('/img/about/section7/rocket/rocket-1.jpg');
        background-image: -webkit-image-set(url('/img/about/section7/rocket/rocket-1.jpg') 1x, url('/img/about/section7/rocket/rocket-1-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section6-right-3-2 {
        background-image: url('/img/about/section7/rocket/rocket-2.jpg');
        background-image: -webkit-image-set(url('/img/about/section7/rocket/rocket-2.jpg') 1x, url('/img/about/section7/rocket/rocket-2-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section6-right-3-3 {
        background-image: url('/img/about/section7/rocket/rocket-3.jpg');
        background-image: -webkit-image-set(url('/img/about/section7/rocket/rocket-3.jpg') 1x, url('/img/about/section7/rocket/rocket-3-2x.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section7 {
        background-image: url('/img/about/section8/map-d.jpg');
        background-image: -webkit-image-set(url('/img/about/section8/map-d.jpg') 1x, url('/img/about/section8/map-2x-d.jpg') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .section8 {
        background-image: url('https://dummyimage.com/1920x250/9fbfbc/9fbfbc');
        background-image: -webkit-image-set(url('https://dummyimage.com/1920x250/9fbfbc/9fbfbc') 1x, url('https://dummyimage.com/3840x500/9fbfbc/9fbfbc') 2x);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    @media (max-width: 767px) {
        .section1 {
            background-image: url('/img/about/section1/banner1-m.jpg');
            height: 100%;
            background-repeat: no-repeat;
            color: white;
        }

        .section2 {
            background-image: url('/img/about/section2/banner2.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section4-slide1 {
            background-image: url('/img/about/section4/fantasy-collection/banner1-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section4-slide2 {
            background-image: url('/img/about/section4/sky-collection/banner1-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section4-slide3 {
            background-image: url('/img/about/section4/cloud-collection/banner1-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section5-banner1-slide1 {
            background-image: url('/img/about/section6/room-by-room/banner1-new-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section5-banner1-slide2 {
            background-image: url('/img/about/section6/room-by-room/banner2-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section5-banner1-slide3 {
            background-image: url('/img/about/section6/room-by-room/banner3-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section5-banner1-slide4 {
            background-image: url('/img/about/section6/room-by-room/banner4-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section5-banner1-slide5 {
            background-image: url('/img/about/section6/room-by-room/banner5-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section5-banner1-slide6 {
            background-image: url('/img/about/section6/room-by-room/banner6-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section5-banner2-slide1 {
            background-image: url('/img/about/section6/projects/banner1-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section5-banner2-slide2 {
            background-image: url('/img/about/section6/projects/banner2-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section5-banner2-slide3 {
            background-image: url('/img/about/section6/projects/banner3-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section5-banner2-slide4 {
            background-image: url('/img/about/section6/projects/banner4-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section5-banner2-slide5 {
            background-image: url('/img/about/section6/projects/banner5-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section6-left-1 {
            background-image: url('/img/about/section7/castle/ambiente.jpg');
            background-image: -webkit-image-set(url('/img/about/section7/castle/ambiente.jpg') 1x, url('/img/about/section7/castle/ambiente-2x.jpg') 2x);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section6-left-2 {
            background-image: url('/img/about/section7/plane/ambiente.jpg');
            background-image: -webkit-image-set(url('/img/about/section7/plane/ambiente.jpg') 1x, url('/img/about/section7/plane/ambiente-2x.jpg') 2x);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section6-left-3 {
            background-image: url('/img/about/section7/rocket/ambiente.jpg');
            background-image: -webkit-image-set(url('/img/about/section7/rocket/ambiente.jpg') 1x, url('/img/about/section7/rocket/ambiente-2x.jpg') 2x);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section6-right-1 {
            background-image: url('/img/about/section7/castle/castle-1.jpg');
            background-image: -webkit-image-set(url('/img/about/section7/castle/castle-1.jpg') 1x, url('/img/about/section7/castle/castle-1-2x.jpg') 2x);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section6-right-2 {
            background-image: url('/img/about/section7/castle/castle-2.jpg');
            background-image: -webkit-image-set(url('/img/about/section7/castle/castle-2.jpg') 1x, url('/img/about/section7/castle/castle-2-2x.jpg') 2x);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section6-right-3 {
            background-image: url('/img/about/section7/castle/castle-3.jpg');
            background-image: -webkit-image-set(url('/img/about/section7/castle/castle-3.jpg') 1x, url('/img/about/section7/castle/castle-3-2x.jpg') 2x);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section6-right-2-1 {
            background-image: url('/img/about/section7/plane/plane-1.jpg');
            background-image: -webkit-image-set(url('/img/about/section7/plane/plane-1.jpg') 1x, url('/img/about/section7/plane/plane-1-2x.jpg') 2x);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section6-right-2-2 {
            background-image: url('/img/about/section7/plane/plane-2.jpg');
            background-image: -webkit-image-set(url('/img/about/section7/plane/plane-2.jpg') 1x, url('/img/about/section7/plane/plane-2-2x.jpg') 2x);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section6-right-2-3 {
            background-image: url('/img/about/section7/plane/plane-3.jpg');
            background-image: -webkit-image-set(url('/img/about/section7/plane/plane-3.jpg') 1x, url('/img/about/section7/plane/plane-3-2x.jpg') 2x);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section6-right-3-1 {
            background-image: url('/img/about/section7/rocket/rocket-1.jpg');
            background-image: -webkit-image-set(url('/img/about/section7/rocket/rocket-1.jpg') 1x, url('/img/about/section7/rocket/rocket-1-2x.jpg') 2x);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section6-right-3-2 {
            background-image: url('/img/about/section7/rocket/rocket-2.jpg');
            background-image: -webkit-image-set(url('/img/about/section7/rocket/rocket-2.jpg') 1x, url('/img/about/section7/rocket/rocket-2-2x.jpg') 2x);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section6-right-3-3 {
            background-image: url('/img/about/section7/rocket/rocket-3.jpg');
            background-image: -webkit-image-set(url('/img/about/section7/rocket/rocket-3.jpg') 1x, url('/img/about/section7/rocket/rocket-3-2x.jpg') 2x);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .section7 {
            background-image: url('/img/about/section8/map-m.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        .owl-section6 .owl-nav {
            top: 18% !important;
        }

        .NYPin {
            top: 37% !important;
            left: 27% !important;
        }

        .PortugalPin {
            top: 38% !important;
            left: 43.9% !important;
        }

        .ParisPin {
            top: 35% !important;
            left: 48.5% !important;
        }

        .LondonPin {
            top: 30% !important;
            left: 45% !important;
        }

        .map-box-title {
            font-size: 12px !important;
        }

        .map-box-description {
            font-size: 10px !important;
        }

        .h2.category_name_title,
        .category_name_title {
            font-size: .8rem !important;
        }

        .owl-section6-small-1 .owl-dots,
        .owl-section6-small-2 .owl-dots,
        .owl-section6-small-3 .owl-dots {
            cursor: pointer;
            bottom: 15% !important;
        }

        .owl-section6 .owl-nav .owl-next i {
            color: white !important;
        }

        .text-div-countrys {
            top: 2% !important;
        }


        .div-text-countrys {
            height: 320px;
        }

        .section1-scroll {
            font-size: 13px;
        }

        .section1-scroll a {
            font-size: 18px;
        }

        .pin {
            width: 20px !important;
            height: 20px !important;
            border-radius: 50% 50% 50% 0;
            background: #548781;
            position: absolute;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
            left: 50%;
            top: 50%;
            margin: -20px 0 0 -20px;
            -webkit-animation-name: bounce;
            -moz-animation-name: bounce;
            -o-animation-name: bounce;
            -ms-animation-name: bounce;
            animation-name: bounce;
            /* -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  animation-fill-mode: both; */
            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            -o-animation-duration: 1s;
            -ms-animation-duration: 1s;
            animation-duration: 1s;
            z-index: 1;
            transition: transform .3s ease-out !important;
        }


        .pin:after {
            content: '';
            width: 10px !important;
            height: 10px !important;
            margin: 5px 0 0 5px !important;
            background: #548781;
            position: absolute;
            border-radius: 50%;
            border: 1.5px solid !important;
        }

        .pulse {
            background: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            height: 8px !important;
            width: 8px !important;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: 4px 0px 0px -13.5px !important;
            -webkit-transform: rotateX(55deg);
            -moz-transform: rotateX(55deg);
            -o-transform: rotateX(55deg);
            -ms-transform: rotateX(55deg);
            transform: rotateX(55deg);
            z-index: 0;
        }

        .pulse:after {
            content: "";
            border-radius: 50%;
            height: 20px !important;
            width: 20px !important;
            position: absolute;
            margin: -6px 0 0 -6px !important;
            -webkit-animation: pulsate 1s ease-out;
            -moz-animation: pulsate 1s ease-out;
            -o-animation: pulsate 1s ease-out;
            -ms-animation: pulsate 1s ease-out;
            animation: pulsate 1s ease-out;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            -o-animation-iteration-count: infinite;
            -ms-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
            -webkit-box-shadow: 0 0 1px 2px #548781;
            box-shadow: 0 0 1px 2px #548781;
            -webkit-animation-delay: 1.1s;
            -moz-animation-delay: 1.1s;
            -o-animation-delay: 1.1s;
            -ms-animation-delay: 1.1s;
            animation-delay: 1.1s;
        }
    }

    .pin {
        width: 30px;
        height: 30px;
        border-radius: 50% 50% 50% 0;
        background: #548781;
        position: absolute;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
        left: 50%;
        top: 50%;
        margin: -20px 0 0 -20px;
        -webkit-animation-name: bounce;
        -moz-animation-name: bounce;
        -o-animation-name: bounce;
        -ms-animation-name: bounce;
        animation-name: bounce;
        /* -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  animation-fill-mode: both; */
        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        -o-animation-duration: 1s;
        -ms-animation-duration: 1s;
        animation-duration: 1s;
        z-index: 1;
        transition: transform .3s ease-out !important;
    }


    .markerClick {
        width: 34px;
        height: 42px;
    }

    .markerClick:hover .pin {
        transform: translateY(-10px) rotate(-45deg) !important;
    }

    .pin:after {
        content: '';
        width: 15px;
        height: 15px;
        margin: 7px 0 0 8px;
        background: #548781;
        position: absolute;
        border-radius: 50%;
        border: 2px solid;
    }

    .pulse {
        background: rgba(255, 255, 255, 0.7);
        border-radius: 50%;
        height: 14px;
        width: 14px;
        position: absolute;
        left: 50%;
        top: 50%;
        margin: 11px 0px 0px -12px;
        -webkit-transform: rotateX(55deg);
        -moz-transform: rotateX(55deg);
        -o-transform: rotateX(55deg);
        -ms-transform: rotateX(55deg);
        transform: rotateX(55deg);
        z-index: 0;
    }

    .pulse:after {
        content: "";
        border-radius: 50%;
        height: 40px;
        width: 40px;
        position: absolute;
        margin: -13px 0 0 -13px;
        -webkit-animation: pulsate 1s ease-out;
        -moz-animation: pulsate 1s ease-out;
        -o-animation: pulsate 1s ease-out;
        -ms-animation: pulsate 1s ease-out;
        animation: pulsate 1s ease-out;
        -webkit-animation-iteration-count: infinite;
        -moz-animation-iteration-count: infinite;
        -o-animation-iteration-count: infinite;
        -ms-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        filter: alpha(opacity=0);
        -webkit-box-shadow: 0 0 1px 2px #548781;
        box-shadow: 0 0 1px 2px #548781;
        -webkit-animation-delay: 1.1s;
        -moz-animation-delay: 1.1s;
        -o-animation-delay: 1.1s;
        -ms-animation-delay: 1.1s;
        animation-delay: 1.1s;
    }

    @-moz-keyframes pulsate {
        0% {
            -webkit-transform: scale(0.1, 0.1);
            -moz-transform: scale(0.1, 0.1);
            -o-transform: scale(0.1, 0.1);
            -ms-transform: scale(0.1, 0.1);
            transform: scale(0.1, 0.1);
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
        }

        50% {
            opacity: 1;
            -ms-filter: none;
            filter: none;
        }

        100% {
            -webkit-transform: scale(1.2, 1.2);
            -moz-transform: scale(1.2, 1.2);
            -o-transform: scale(1.2, 1.2);
            -ms-transform: scale(1.2, 1.2);
            transform: scale(1.2, 1.2);
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
        }
    }

    @-webkit-keyframes pulsate {
        0% {
            -webkit-transform: scale(0.1, 0.1);
            -moz-transform: scale(0.1, 0.1);
            -o-transform: scale(0.1, 0.1);
            -ms-transform: scale(0.1, 0.1);
            transform: scale(0.1, 0.1);
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
        }

        50% {
            opacity: 1;
            -ms-filter: none;
            filter: none;
        }

        100% {
            -webkit-transform: scale(1.2, 1.2);
            -moz-transform: scale(1.2, 1.2);
            -o-transform: scale(1.2, 1.2);
            -ms-transform: scale(1.2, 1.2);
            transform: scale(1.2, 1.2);
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
        }
    }

    @-o-keyframes pulsate {
        0% {
            -webkit-transform: scale(0.1, 0.1);
            -moz-transform: scale(0.1, 0.1);
            -o-transform: scale(0.1, 0.1);
            -ms-transform: scale(0.1, 0.1);
            transform: scale(0.1, 0.1);
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
        }

        50% {
            opacity: 1;
            -ms-filter: none;
            filter: none;
        }

        100% {
            -webkit-transform: scale(1.2, 1.2);
            -moz-transform: scale(1.2, 1.2);
            -o-transform: scale(1.2, 1.2);
            -ms-transform: scale(1.2, 1.2);
            transform: scale(1.2, 1.2);
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
        }
    }

    @keyframes pulsate {
        0% {
            -webkit-transform: scale(0.1, 0.1);
            -moz-transform: scale(0.1, 0.1);
            -o-transform: scale(0.1, 0.1);
            -ms-transform: scale(0.1, 0.1);
            transform: scale(0.1, 0.1);
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
        }

        50% {
            opacity: 1;
            -ms-filter: none;
            filter: none;
        }

        100% {
            -webkit-transform: scale(1.2, 1.2);
            -moz-transform: scale(1.2, 1.2);
            -o-transform: scale(1.2, 1.2);
            -ms-transform: scale(1.2, 1.2);
            transform: scale(1.2, 1.2);
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
        }
    }

    @-moz-keyframes bounce {
        0% {
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
            -webkit-transform: translateY(-2000px) rotate(-45deg);
            -moz-transform: translateY(-2000px) rotate(-45deg);
            -o-transform: translateY(-2000px) rotate(-45deg);
            -ms-transform: translateY(-2000px) rotate(-45deg);
            transform: translateY(-2000px) rotate(-45deg);
        }

        60% {
            opacity: 1;
            -ms-filter: none;
            filter: none;
            -webkit-transform: translateY(30px) rotate(-45deg);
            -moz-transform: translateY(30px) rotate(-45deg);
            -o-transform: translateY(30px) rotate(-45deg);
            -ms-transform: translateY(30px) rotate(-45deg);
            transform: translateY(30px) rotate(-45deg);
        }

        80% {
            -webkit-transform: translateY(-10px) rotate(-45deg);
            -moz-transform: translateY(-10px) rotate(-45deg);
            -o-transform: translateY(-10px) rotate(-45deg);
            -ms-transform: translateY(-10px) rotate(-45deg);
            transform: translateY(-10px) rotate(-45deg);
        }

        100% {
            -webkit-transform: translateY(0) rotate(-45deg);
            -moz-transform: translateY(0) rotate(-45deg);
            -o-transform: translateY(0) rotate(-45deg);
            -ms-transform: translateY(0) rotate(-45deg);
            transform: translateY(0) rotate(-45deg);
        }
    }

    @-webkit-keyframes bounce {
        0% {
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
            -webkit-transform: translateY(-2000px) rotate(-45deg);
            -moz-transform: translateY(-2000px) rotate(-45deg);
            -o-transform: translateY(-2000px) rotate(-45deg);
            -ms-transform: translateY(-2000px) rotate(-45deg);
            transform: translateY(-2000px) rotate(-45deg);
        }

        60% {
            opacity: 1;
            -ms-filter: none;
            filter: none;
            -webkit-transform: translateY(30px) rotate(-45deg);
            -moz-transform: translateY(30px) rotate(-45deg);
            -o-transform: translateY(30px) rotate(-45deg);
            -ms-transform: translateY(30px) rotate(-45deg);
            transform: translateY(30px) rotate(-45deg);
        }

        80% {
            -webkit-transform: translateY(-10px) rotate(-45deg);
            -moz-transform: translateY(-10px) rotate(-45deg);
            -o-transform: translateY(-10px) rotate(-45deg);
            -ms-transform: translateY(-10px) rotate(-45deg);
            transform: translateY(-10px) rotate(-45deg);
        }

        100% {
            -webkit-transform: translateY(0) rotate(-45deg);
            -moz-transform: translateY(0) rotate(-45deg);
            -o-transform: translateY(0) rotate(-45deg);
            -ms-transform: translateY(0) rotate(-45deg);
            transform: translateY(0) rotate(-45deg);
        }
    }

    @-o-keyframes bounce {
        0% {
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
            -webkit-transform: translateY(-2000px) rotate(-45deg);
            -moz-transform: translateY(-2000px) rotate(-45deg);
            -o-transform: translateY(-2000px) rotate(-45deg);
            -ms-transform: translateY(-2000px) rotate(-45deg);
            transform: translateY(-2000px) rotate(-45deg);
        }

        60% {
            opacity: 1;
            -ms-filter: none;
            filter: none;
            -webkit-transform: translateY(30px) rotate(-45deg);
            -moz-transform: translateY(30px) rotate(-45deg);
            -o-transform: translateY(30px) rotate(-45deg);
            -ms-transform: translateY(30px) rotate(-45deg);
            transform: translateY(30px) rotate(-45deg);
        }

        80% {
            -webkit-transform: translateY(-10px) rotate(-45deg);
            -moz-transform: translateY(-10px) rotate(-45deg);
            -o-transform: translateY(-10px) rotate(-45deg);
            -ms-transform: translateY(-10px) rotate(-45deg);
            transform: translateY(-10px) rotate(-45deg);
        }

        100% {
            -webkit-transform: translateY(0) rotate(-45deg);
            -moz-transform: translateY(0) rotate(-45deg);
            -o-transform: translateY(0) rotate(-45deg);
            -ms-transform: translateY(0) rotate(-45deg);
            transform: translateY(0) rotate(-45deg);
        }
    }

    @keyframes bounce {
        0% {
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
            -webkit-transform: translateY(-2000px) rotate(-45deg);
            -moz-transform: translateY(-2000px) rotate(-45deg);
            -o-transform: translateY(-2000px) rotate(-45deg);
            -ms-transform: translateY(-2000px) rotate(-45deg);
            transform: translateY(-2000px) rotate(-45deg);
        }

        60% {
            opacity: 1;
            -ms-filter: none;
            filter: none;
            -webkit-transform: translateY(30px) rotate(-45deg);
            -moz-transform: translateY(30px) rotate(-45deg);
            -o-transform: translateY(30px) rotate(-45deg);
            -ms-transform: translateY(30px) rotate(-45deg);
            transform: translateY(30px) rotate(-45deg);
        }

        80% {
            -webkit-transform: translateY(-10px) rotate(-45deg);
            -moz-transform: translateY(-10px) rotate(-45deg);
            -o-transform: translateY(-10px) rotate(-45deg);
            -ms-transform: translateY(-10px) rotate(-45deg);
            transform: translateY(-10px) rotate(-45deg);
        }

        100% {
            -webkit-transform: translateY(0) rotate(-45deg);
            -moz-transform: translateY(0) rotate(-45deg);
            -o-transform: translateY(0) rotate(-45deg);
            -ms-transform: translateY(0) rotate(-45deg);
            transform: translateY(0) rotate(-45deg);
        }
    }

    .flex-items {
        display: flex;
        justify-content: center;
        /* position: sticky; */
        width: 100%;
        z-index: 4;
        transition: all .5s;
    }

    @media only screen and (max-width: 767px) {
        .flex-items {
            display: initial !important;
        }
    }



    .arrow {
        text-align: center;
        color: white !important;
        margin: 0;
    }

    .bouncearrow {
        -moz-animation: bounce 2s infinite;
        -webkit-animation: bounce 2s infinite;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-30px);
        }

        60% {
            transform: translateY(-15px);
        }
    }

    .gold-button {
        background: url(/img/icons/finishes/gold-leaf-sm.png);
        width: 20px;
        height: 20px;
        background-size: cover;
        color: none;
        color: transparent;
        background-color: transparent;
        border: none;
        background-repeat: no-repeat;
    }

    .silver-button {
        background: url(/img/icons/finishes/silver-leaf-sm.png);
        width: 20px;
        height: 20px;
        background-size: cover;
        color: none;
        color: transparent;
        background-color: transparent;
        border: none;
        background-repeat: no-repeat;
    }

    .copper-button {
        background: url(/img/icons/finishes/copper-leaf-sm.png);
        width: 20px;
        height: 20px;
        background-size: cover;
        color: none;
        color: transparent;
        background-color: transparent;
        border: none;
        background-repeat: no-repeat;
    }

    .plane-button-light-blue {
        background: url(/img/icons/finishes/light-blue-sm.png);
        width: 20px;
        height: 20px;
        background-size: cover;
        color: none;
        color: transparent;
        background-color: transparent;
        border: none;
        background-repeat: no-repeat;
    }

    .plane-button-blue {
        background: url(/img/icons/finishes/royal-blue-sm.png);
        width: 20px;
        height: 20px;
        background-size: cover;
        color: none;
        color: transparent;
        background-color: transparent;
        border: none;
        background-repeat: no-repeat;
    }

    .plane-button-yellow {
        background: url(/img/icons/finishes/lemon-yellow-sm.png);
        width: 20px;
        height: 20px;
        background-size: cover;
        color: none;
        color: transparent;
        background-color: transparent;
        border: none;
        background-repeat: no-repeat;
    }

    .rocket-button-red {
        background: url(/img/icons/finishes/white-red-sm.png);
        width: 20px;
        height: 20px;
        background-size: cover;
        color: none;
        color: transparent;
        background-color: transparent;
        border: none;
        background-repeat: no-repeat;
    }

    .rocket-button-pink {
        background: url(/img/icons/finishes/white-pink-sm.png);
        width: 20px;
        height: 20px;
        background-size: cover;
        color: none;
        color: transparent;
        background-color: transparent;
        border: none;
        background-repeat: no-repeat;
    }

    .rocket-button-creme {
        background: url(/img/icons/finishes/white-creme-sm.png);
        width: 20px;
        height: 20px;
        background-size: cover;
        color: none;
        color: transparent;
        background-color: transparent;
        border: none;
        background-repeat: no-repeat;
    }

    .owl-section6-small-1 .owl-dots,
    .owl-section6-small-2 .owl-dots,
    .owl-section6-small-3 .owl-dots {
        cursor: pointer;
        bottom: 10%;
    }



    .owl-section6-small-1 .owl-dots .active .buttons-active-css,
    .owl-section6-small-2 .owl-dots .active .buttons-active-css,
    .owl-section6-small-3 .owl-dots .active .buttons-active-css {
        border: 2px solid #98b9b5 !important;
        border-radius: 50%;
    }

    .buttons-active-css {
        border: 1px solid transparent;
        border-radius: 50%;
    }

    @media (min-width: 768px) {
        .owl-section6 .owl-nav .owl-next i {
            color: black !important;
        }

        .text-div-countrys {
            top: 16%;
        }

        .div-text-countrys {
            height: 350px;
        }

        .div-text-countrys-paris {
            height: 385px !important;
        }

        .hoverbutton {
            border-bottom: 1px solid transparent;
        }

        .hoverbutton:hover {
            border-bottom: 1px solid white;
        }
    }
    .swiper-container{
	overflow: hidden;
	position: relative;
	}
	.swiper-container .arrow-banners {
	color: #fff;
	opacity: 50%;
	background-image: none !important;
	-webkit-transition: opacity .50s ease-in-out;
	-moz-transition: opacity .50s ease-in-out;
	-ms-transition: opacity .50s ease-in-out;
	-o-transition: opacity .50s ease-in-out;
	transition: opacity .50s ease-in-out;
	}
	.swiper-container .arrow-banners:hover {
	color: #fff;
	opacity: 100%;
	background-image: none !important;
	-webkit-transition: opacity .50s ease-in-out;
	-moz-transition: opacity .50s ease-in-out;
	-ms-transition: opacity .50s ease-in-out;
	-o-transition: opacity .50s ease-in-out;
	transition: opacity .50s ease-in-out;
	}
	.button-next {
	left: 35px !important;
	right: auto;
	text-shadow: 3px 3px 16px #272634;
	position: absolute;
	top: 50%;
	left: 0;
	z-index: 999;
	font-size: 1.8rem;
	}
	.button-prev {
	right: 35px !important;
	left: auto;
	text-shadow: 3px 3px 16px #272634;
	position: absolute;
	top: 50%;
	right: 0;
	z-index: 999;
	font-size: 1.8rem;
	}
</style>
@endsection
@section('main-content')
<div class="col-12 p-0 swiper-container swiper-top-banner">
    <div class="col-12 p-0 swiper-wrapper">
        <div class="swiper-slide">
            <video class=" d-none d-md-block w-100" onloadeddata="this.play();" autoplay muted loop playsinline style="position:relative;">
                <source class="d-none d-md-block" src="https://www.circu.net/includes/video/brand-about-new.mp4" loop muted controls autoplay type="video/mp4">
                <source class="d-none d-md-block" src="https://www.circu.net/includes/video/brand-about-new.mp4" loop muted controls autoplay type="video/webm">
            </video>
            <video class=" d-block d-md-none w-100" onloadeddata="this.play();" autoplay muted loop playsinline style="position:relative;">
                <source class="d-block d-md-none" src="https://www.circu.net/includes/video/brand-about-new-mobile.mp4" loop muted controls autoplay type="video/mp4">
                <source class="d-block d-md-none" src="https://www.circu.net/includes/video/brand-about-new-mobile.mp4" loop muted controls autoplay type="video/webm">
            </video>
            <div class="position-absolute" style="bottom:2%;left:2.5%;">
                <div class="play-video">
                    <img class="img-d-none" id="soundimage" style="width: 30px;float: none !important;margin-top: -3px;filter: invert(100%);" src="/img/about/volume-up.svg">
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="/img/about/section1/circu-magical-world-d.jpg" alt="" class="d-none d-lg-block">
            <img src="/img/about/section1/circu-magical-world-m.jpg" alt="" class="d-block d-lg-none">
            <div class="col-12 p-0 position-absolute" style="bottom:3%">
                <div class="col-12 text-center pb-4 section1-scroll" style="letter-spacing: 1px;">
                    DISCOVER OUR FULL STORY
                </div>
                <div class="arrow bouncearrow section1-scroll">
                    <a class="fas fa-chevron-down fa-2x " style="color: white;" href="#"></a>
                </div>
            </div>
        </div>
        
    </div>
    <div class="button-next arrow-banners">
		<i class="fas fa-chevron-left arrow-banners"></i>
	</div>
	<div class="button-prev arrow-banners">
		<i class="fas fa-chevron-right arrow-banners"></i>
	</div>
</div>

<div class="col-12 p-0 pt-2 section2-ancor">
    <div class="col-12 p-0 section2">
        <div class="row text-center m-0 p-0 justify-content-center align-items-center banner-paper-txt ">
            <div class="col-11 col-md-8 col-lg-6 p-0 div-get-size1">
                <h1 style="color: white !important;letter-spacing: 2px;"><br>A WORLD FULL OF MAGIC AND FANTASY,<br>WHERE YOUR DREAMS TURN INTO REALITY!</br></h1>
                <p class="text-justify pt-4 m-0" style="text-align-last:center;color: white !important;font-size: 14px;line-height: 30px;">CIRCU was built under a dream! The dream is to allow children to live their own fantasies and create a magical world for them to fly under an imagination that has no limit.</p>
                <p class="text-justify m-0" style="text-align-last:center;color: white !important;font-size: 14px;line-height: 30px;">With our hand-crafted and hand-tailored pieces made in Portugal with the finest materials, we deliver only the highest quality furnishings that turn children’s dreams into reality!</p>
                <p class="text-justify m-0" style="text-align-last:center;color: white !important;font-size: 14px;line-height: 30px;">From airplane beds, rockets armchairs to a crib inspired on a hot air ballon, our pieces create moments and experience between children’s real-world and their fantasies.</p>
            </div>
            <div class="col-12 col-sm-10 col-md-8 p-0 pt-4 pb-4 pt-md-0 pb-md-0 flex-items postion-absolute div-get-size2" style="bottom:10%;">

                <div style="padding:0 15px" class="section2-scroll-collections py-3 py-md-0">
                    <h6 class="text-center m-0 hoverbutton" style="cursor: pointer;color: white;">COLLECTIONS</h6>
                </div>
                <div style="padding:0 15px" class="section2-scroll-love py-3 py-md-0">
                    <h6 class=" text-center m-0 hoverbutton" style="cursor: pointer;color: white;">MADE WITH LOVE</h6>
                </div>
                <div style="padding:0 15px" class="section2-scroll-projects py-3 py-md-0">
                    <h6 class="text-center m-0 hoverbutton" style="cursor: pointer;color: white;">PROJECTS</h6>
                </div>
                <div style="padding:0 15px" class="section2-scroll-room py-3 py-md-0">
                    <h6 class="text-center m-0 hoverbutton" style="cursor: pointer;color: white;">ROOM BY ROOM</h6>
                </div>
                <div style="padding:0 15px" class="section2-scroll-world py-3 py-md-0">
                    <h6 class="text-center m-0 hoverbutton" style="cursor: pointer;color: white;">AROUND THE WORLD</h6>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- section video display: none -->
<div class="col-12 p-0 pt-2 d-none">
    <div class="col-12 p-0 section3">
        <video id="myVideo1" class="videomy myVideo d-none d-md-block" onloadeddata="this.play();" autoplay muted loop playsinline style="position:relative;">
            <source class="d-none d-md-block" src="https://www.circu.net/includes/video/brand-about.mp4" loop muted controls autoplay type="video/mp4">
            <source class="d-none d-md-block" src="https://www.circu.net/includes/video/brand-about.mp4" loop muted controls autoplay type="video/webm">
        </video>
        <video id="myVideo1" class="videomy myVideo d-block d-md-none" onloadeddata="this.play();" autoplay muted loop playsinline style="position:relative;">
            <source class="d-block d-md-none" src="https://www.circu.net/includes/video/brand-about-mobile.mp4" loop muted controls autoplay type="video/mp4">
            <source class="d-block d-md-none" src="https://www.circu.net/includes/video/brand-about-mobile.mp4" loop muted controls autoplay type="video/webm">
        </video>
        <div class="position-absolute" style="bottom:2%;left:2.5%;">
            <div class="play-video">
                <img class="img-d-none" id="soundimage" style="width: 30px;float: none !important;margin-top: -3px;filter: invert(100%);" src="/img/about/volume-up.svg">
            </div>
        </div>
    </div>
</div>
<!-- end section video -->

<div class="col-12 pt-2 section4-ancor">
    <div class="col-12 p-0" style="background-color: white;">
        <h2 class="col-12 category_name_title text-center mb-0"><span>OUR COLLECTIONS</span></h2>
    </div>
    <div class="row section4">
        <div class="col-12 owl-ambiences owl-carousel owl-slide owl-theme p-0">

            <!-- fantasy collection -->
            <div class="item col-12 p-0 position-relative section4-slide1">

                <div class="hotspot hotspot--fantasy-air-balloon hotspot--title__left d-none d-lg-block"">
                    <!-- desktop -->
                    <div class=" hotspot--cta"></div>
                <div class="hotspot--title text-center">
                    <div class="close-hotspot">X</div>
                    <a href="https://www.circu.net/products/fantasy-air-balloon">
                        <img src="/img/products/carousel/fantasy-air-balloon-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                        <div class="hotspot-name"><b>FANTASY AIR BALLON</b> Bed/Sofa</div>
                        <div class="hotspot-description my-2 d-none d-lg-block">The Fantasy Air Balloon is a themed kids bed that invokes the romantic and whimsical ambiance of a hot air balloon ride!</div>
                    </a>
                    <a rel="modal:open" href="{{route('modal-product-price',  'fantasy-air-balloon')}}">
                        <div class="hotspot-get-price"><span>GET PRICE</span></div>
                    </a>
                </div>
            </div>

            <a class="hotspot hotspot--fantasy-air-balloon-mobile d-block d-lg-none" href="https://www.circu.net/products/fantasy-air-balloon">
                <!-- mobile -->
                <span class="hotspot--cta"></span>
            </a>

            <div class="hotspot hotspot--fantasy-air-bookcase-limited-edition hotspot--title__left d-none d-lg-block">
                <!-- desktop -->
                <div class="hotspot--cta"></div>
                <div class="hotspot--title text-center">
                    <div class="close-hotspot">X</div>
                    <a href="https://www.circu.net/products/fantasy-air-bookcase-limited-edition">
                        <img src="/img/products/carousel/fantasy-air-bookcase-limited-edition-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                        <div class="hotspot-name"><b>FANTASY AIR</b> Bookcase</div>
                        <div class="hotspot-description my-2 d-none d-lg-block">The Fantasy Air Bookcase is a kids’ bookcase inspired by the Disney movie “Up” and it is the perfect storage item for dreamy bedroom decoration.</div>
                    </a>
                    <a rel="modal:open" href="{{route('modal-product-price',  'fantasy-air-bookcase-limited-edition')}}">
                        <div class="hotspot-get-price"><span>GET PRICE</span></div>
                    </a>
                </div>
            </div>

            <a class="hotspot hotspot--fantasy-air-bookcase-limited-edition-mobile d-block d-lg-none" href="https://www.circu.net/products/fantasy-air-bookcase-limited-edition">
                <!-- mobile -->
                <span class="hotspot--cta"></span>
            </a>

            <div class="hotspot hotspot--fantasy-air-shelf-big hotspot--title__left d-none d-lg-block">
                <!-- desktop -->
                <div class="hotspot--cta"></div>
                <div class="hotspot--title text-center">
                    <div class="close-hotspot">X</div>
                    <a href="https://www.circu.net/products/fantasy-air-shelf-big">
                        <img src="/img/products/carousel/fantasy-air-shelf-big-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                        <div class="hotspot-name"><b>FANTASY AIR BIG</b> Shelf</div>
                        <div class="hotspot-description my-2 d-none d-lg-block">The Fantasy Air Shelf is inspired by the Disney movie “Up” and it is the perfect storage item for dreamy bedroom decoration.</div>
                    </a>
                    <a rel="modal:open" href="{{route('modal-product-price',  'fantasy-air-shelf-big')}}">
                        <div class="hotspot-get-price"><span>GET PRICE</span></div>
                    </a>
                </div>
            </div>

            <div class="hotspot hotspot--fantasy-air-nightstand hotspot--title__left d-none d-lg-block">
                <!-- desktop -->
                <div class="hotspot--cta"></div>
                <div class="hotspot--title text-center">
                    <div class="close-hotspot">X</div>
                    <a href="https://www.circu.net/products/fantasy-air-nightstand">
                        <img src="/img/products/carousel/fantasy-air-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                        <div class="hotspot-name"><b>FANTASY AIR</b> Nightstand</div>
                        <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the world of adventure, this piece is a reference to the Disney movie “Up!”. Parents can imagine and relive the life of the famous Phileas Fogg, from the movie “Around the World in 80 days”.</div>
                    </a>
                    <a rel="modal:open" href="{{route('modal-product-price',  'fantasy-air-nightstand')}}">
                        <div class="hotspot-get-price"><span>GET PRICE</span></div>
                    </a>
                </div>
            </div>


            <div class="hotspot hotspot--fantasy-air-shelf-small hotspot--title__left d-none d-lg-block"">
                    <!-- desktop -->
                    <div class=" hotspot--cta"></div>
            <div class="hotspot--title text-center">
                <div class="close-hotspot">X</div>
                <a href="https://www.circu.net/products/fantasy-air-shelf-small">
                    <img src="/img/products/carousel/fantasy-air-shelf-small-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                    <div class="hotspot-name"><b>FANTASY AIR SMALL</b> Shelf</div>
                    <div class="hotspot-description my-2 d-none d-lg-block">The Fantasy Air Shelf is inspired by the Disney movie “Up” and it is the perfect storage item for dreamy bedroom decoration.</div>
                </a>
                <a rel="modal:open" href="{{route('modal-product-price',  'fantasy-air-shelf-small')}}">
                    <div class="hotspot-get-price"><span>GET PRICE</span></div>
                </a>
            </div>
        </div>

        <div class="hotspot hotspot--fantasy-air-chest-3-drawers hotspot--title__left d-none d-lg-block"">
                    <!-- desktop -->
                    <div class=" hotspot--cta"></div>
        <div class="hotspot--title text-center" style="top: -200px;">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/fantasy-air-chest-3-drawers">
                <img src="/img/products/carousel/fantasy-air-chest-3-drawers-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>FANTASY AIR 3 DRAWERS</b> Chest</div>
                <div class="hotspot-description my-2 d-none d-lg-block">The Fantasy Air Chest is a kids’ chest of drawers inspired by the Disney movie “Up” and it is the perfect storage item for dreamy bedroom decoration.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'fantasy-air-chest-3-drawers')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

    <a class="hotspot hotspot--fantasy-air-chest-3-drawers-mobile d-block d-md-none" href="https://www.circu.net/products/fantasy-air-chest-3-drawers">
        <!-- mobile -->
        <span class="hotspot--cta"></span>
    </a>





</div>


<div class="item col-12 p-0 position-relative section4-slide2">

    <div style="top: 7%;right: 49%;" class="hotspot hotspot--sky-rug hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/bubble-gum-big-mirror">
                <img src="/img/products/carousel/sky-rug-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>SKY</b> rug</div>
                <div class="hotspot-description my-2"> Give your kid's bedroom to design a warm and comfortable feeling with CIRCU’s Cloud Rug. Cloud rug is made of artificial sheep wool, acrylic, and polyester.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'sky-rug')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

    <a class="hotspot hotspot--sky-rug-mobile d-block d-lg-none" href="https://www.circu.net/products/sky-rug">
        <!-- mobile -->
        <span class="hotspot--cta"></span>
    </a>

    <div style="top: 59%;right: 64%;" class="hotspot  hotspot--sky-b-plane hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/sky-b-plane-bed">
                <img src="/img/products/carousel/sky-b-plane-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>SKY B PLANE</b> bed</div>
                <div class="hotspot-description my-2">The Sky B Plane is an airplane kids bed with an aviation-inspired design that it’s meant to be educational and engaging.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'sky-b-plane-bed')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

    <a class="hotspot hotspot--sky-b-plane-bed-mobile d-block d-lg-none" href="https://www.circu.net/products/sky-b-plane-bed">
        <!-- mobile -->
        <span class="hotspot--cta"></span>
    </a>

    <div style="top: 61%;left: 62%;" class="hotspot hotspot--sky-one-plane  hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center" style="top:-200px">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/sky-one-plane-bed">
                <img src="/img/products/carousel/sky-one-plane-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>SKY ONE PLANE</b> bed</div>
                <div class="hotspot-description my-2 d-none d-lg-block">The Sky One Plane is an airplane-themed kids' bed with a playful design that it’s both didactic and fun.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'sky-one-plane-bed')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

    <a class="hotspot hotspot--sky-one-plane-bed-mobile d-block d-lg-none" href="https://www.circu.net/products/sky-one-plane-bed">
        <!-- mobile -->
        <span class="hotspot--cta"></span>
    </a>


    <div style="top: 28%;right: 54%;" class="hotspot hotspot--fantasy-air-balloon hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/sky-bookcase">
                <img src="/img/products/carousel/sky-bookcase-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>SKY BOOKCASE</b> mirror</div>
                <div class="hotspot-description my-2"> The Sky Bookcase is a kids’ bookcase inspired by the Disney movie “Planes” and it is the perfect storage item for your aviation inspired bedroom decoration.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'sky-bookcase')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

    <a class="hotspot d-block d-lg-none" href="https://www.circu.net/products/sky-chest-6-drawers" style="top:39%;left:63%;">
        <!-- mobile -->
        <span class="hotspot--cta"></span>
    </a>

    <div style="top: 48%;right: 45%;" class="hotspot hotspot--fantasy-air-balloon hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/sky-chest-6-drawers">
                <img src="/img/products/carousel/sky-chest-6-drawers-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>SKY 6 DRAWERS</b> chest</div>
                <div class="hotspot-description my-2">The Sky Chest is a kids’ chest of drawers inspired by the Disney movie “Planes” and it is the perfect storage item for your aviation inspired bedroom decoration.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'sky-chest-6-drawers')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

</div>

<div class="item col-12 p-0 position-relative section4-slide3">

    <div class="hotspot hotspot--cloud-mirror hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-mirror">
                <img src="/img/products/carousel/cloud-mirror-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>CLOUD</b> mirror</div>
                <div class="hotspot-description my-2">This exquisite mirror is the perfect piece of decoration that will embellish any children’s bedroom.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'cloud-mirror')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

    <a class="hotspot hotspot--cloud-mirror-mobile d-block d-lg-none" href="https://www.circu.net/products/cloud-mirror">
        <!-- mobile -->
        <span class="hotspot--cta"></span>
    </a>

    <div class="hotspot hotspot--cloud-shelf-small hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-shelf-small">
                <img src="/img/products/carousel/cloud-shelf-small-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>CLOUD SMALL</b> Shelf</div>
                <div class="hotspot-description my-2">With a creative and playful design, this Cloud Shelf aims to reinforce the connection between children and imagination.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'cloud-shelf-small')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

    <a class="hotspot d-block d-lg-none" href="/products/cloud-shelf-small" style="top: 36%; right: 68%;">
        <!-- mobile -->
        <span class="hotspot--cta"></span>
    </a>

    <div class="hotspot hotspot--cloud-dressing-table-vanity-console hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-dressing-table-vanity-console">
                <img src="/img/products/carousel/cloud-dressing-table-vanity-console-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>CLOUD VANITY CONSOLE</b> Dressing Table</div>
                <div class="hotspot-description my-2">Its original cloud-shaped form has unique details that were specially made to make little girls feel like true princesses living in a fairytale.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'cloud-dressing-table-vanity-console')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>
    <a class="hotspot hotspot--cloud-dressing-table-vanity-console-mobile d-block d-lg-none" href="https://www.circu.net/products/cloud-dressing-table-vanity-console">
        <!-- mobile -->
        <span class="hotspot--cta"></span>
    </a>



    <div class="hotspot hotspot--dream-desk hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/dream-desk">
                <img src="/img/products/carousel/dream-desk-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>DREAM DESK</b> Desk</div>
                <div class="hotspot-description my-2 d-none d-lg-block">The beautiful round shapes of the Cloud Collection made possible for us to create this Dream Desk, that showcase perfectly how round shapes can transform a piece into art.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'dream-desk')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

    <a class="hotspot hotspot--dream-desk-mobile d-block d-lg-none" href="https://www.circu.net/products/dream-desk">
        <!-- mobile -->
        <span class="hotspot--cta"></span>
    </a>

    <div class="hotspot hotspot--cloud-shelf-big hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div style="top:-60px" class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-shelf-big">
                <img src="/img/products/carousel/cloud-shelf-big-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>CLOUD BIG</b> Shelf</div>
                <div class="hotspot-description my-2 d-none d-lg-block">With a creative and playful design, this Cloud Shelf aims to reinforce the connection between children and imagination.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'cloud-shelf-big')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

    <a class="hotspot d-block d-lg-none" href="/products/cloud-stool-puff" style="top: 68%; right: 28%;">
        <!-- mobile -->
        <span class="hotspot--cta"></span>
    </a>

    <div class="hotspot hotspot--cloud-stool-puff hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center" style="top:-200px">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-stool-puff">
                <img src="/img/products/carousel/cloud-stool-puff-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>CLOUD PUFF</b> Stool</div>
                <div class="hotspot-description my-2 d-none d-lg-block">The Cloud Puff promises to awaken your children's imagination and increase their creativity.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'cloud-stool-puff')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

    <a class="hotspot d-block d-lg-none" href="https://www.circu.net/products/dream-desk" style="top: 68%; right: 65%;">
        <!-- mobile -->
        <span class="hotspot--cta"></span>
    </a>

    <div class="hotspot hotspot--cloud-nightstand hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center" style="top:-200px">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-nightstand">
                <img src="/img/products/carousel/cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>CLOUD</b> Nighstand</div>
                <div class="hotspot-description my-2 d-none d-lg-block">Cloud NightStand is a kids’ furniture product inspired by Pixar’s Short film “Party Cloud” and it is the perfect storage item for dreamy bedroom decoration.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'cloud-nightstand')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

    <div class="hotspot hotspot--cloud-chest-3-drawers hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center" style="top:-200px">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-chest-3-drawers">
                <img src="/img/products/carousel/cloud-chest-3-drawers-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>CLOUD 3 DRAWERS</b> Chest</div>
                <div class="hotspot-description my-2 d-none d-lg-block">Cloud Chest of drawers is inspired by Pixar short-film “Party Cloud”, and it's the perfect storage item for whimsical bedroom decoration.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'cloud-chest-3-drawers')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>

    <div class="hotspot hotspot--little-cloud-nightstand hotspot--title__left d-none d-lg-block">
        <!-- desktop -->
        <div class="hotspot--cta"></div>
        <div class="hotspot--title text-center" style="top:-200px">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/little-cloud-nightstand">
                <img src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                <div class="hotspot-name"><b>LITTLE CLOUD</b> Nightstand</div>
                <div class="hotspot-description my-2 d-none d-lg-block">The Little Cloud Nightstand is a kids’ furniture product inspired by Pixar’s Short film “Partly Cloudy” and it is the perfect storage item for dreamy bedroom decoration.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price',  'little-cloud-nightstand')}}">
                <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
        </div>
    </div>


</div>

</div>
</div>

</div>

<div class="col-12 p-0 pt-2 pb-2 section-video-ancor">
    <div class="col-12 p-0 section5">
        <video id="myVideo2" class="videomy myVideo d-none d-md-block" onloadeddata="this.play();" autoplay muted loop playsinline style="position:relative;">
            <source class="d-none d-md-block" src="https://www.circu.net/includes/video/brand-homepage.mp4" type="video/mp4">
            <source class="d-none d-md-block" src="https://www.circu.net/includes/video/brand-homepage.mp4" type="video/webm">
        </video>
        <video id="myVideo2" class="videomy myVideo d-block d-md-none" onloadeddata="this.play();" autoplay muted loop playsinline style="position:relative;">
            <source class="d-block d-md-none" src="https://www.circu.net/includes/video/brand-homepage-mobile.mp4" loop muted controls autoplay type="video/mp4">
            <source class="d-block d-md-none" src="https://www.circu.net/includes/video/brand-homepage-mobile.mp4" loop muted controls autoplay type="video/webm">
        </video>
        <div class="col-12 text-center position-absolute" style="bottom:5%;">
            <div class="col-12 p-0 text-center pt-5">
                <p class="section2-scroll-story m-1" style="color: white; font-size: 11px;"><b>DOWNLOAD CATALOGUE</b></p>
                <a rel="modal:open" href="https://www.circu.net/includes/modal-download-catalogo-2023/" class="modal-cursor-disable"><span class="section2-scroll-story plus"><i class="fas fa-plus-circle"></i></span></a>
            </div>
        </div>
    </div>
</div>

<div class="col-12 p-0 pt-2 section-room-projects-ancor">
    <div class="col-12 col-md-6 float-left">
        <div class="row ">
            <div class="col-12 p-0 position-absolute" style="z-index:10;top:2%">
                <h2 class="col-12 category_name_title text-center mb-0"><span style="color: #fff;font-size:1.6rem;font-weight: 600;">ROOM BY ROOM INSPIRATIONS</span></h2>
            </div>
            <div class="col-12 owl-ambiences owl-carousel owl-slide owl-theme p-0">

                <div class="item col-12 p-0 position-relative section5-banner1-slide1">
                    <a href="https://www.circu.net/inspirations/">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title text-center mb-0" style="color:white !important;font-size: 1.6rem;"><span>BOY ROOM</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item col-12 p-0 position-relative section5-banner1-slide2">
                    <a href="https://www.circu.net/inspirations/">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title text-center mb-0" style="color:white !important;font-size: 1.6rem;"><span>GIRL ROOM</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item col-12 p-0 position-relative section5-banner1-slide3">
                    <a href="https://www.circu.net/inspirations/">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title text-center mb-0" style="color:white !important;font-size: 1.6rem;"><span>DRESSING ROOM</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item col-12 p-0 position-relative section5-banner1-slide4">
                    <a href="https://www.circu.net/inspirations/">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title text-center mb-0" style="color:white !important;font-size: 1.6rem;"><span>LIVING ROOM</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item col-12 p-0 position-relative section5-banner1-slide5">
                    <a href="https://www.circu.net/inspirations/">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title text-center mb-0" style="color:white !important;font-size: 1.6rem;"><span>NURSERY ROOM</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item col-12 p-0 position-relative section5-banner1-slide6">
                    <a href="https://www.circu.net/inspirations/">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title text-center mb-0" style="color:white !important;font-size: 1.6rem;"><span>PLAYROOM</span></h2>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 float-left">
        <div class="row">
            <div class="col-12 p-0 position-absolute" style="top:2%;z-index:10;">
                <h2 class="col-12 category_name_title text-center mb-0"><span style="color: #fff;font-size:1.6rem;font-weight: 600;">DESIGN PROJECTS AROUND THE GLOBE</span></h2>
            </div>
            <div class="col-12 owl-ambiences owl-carousel owl-slide owl-theme p-0">
                <div class="item col-12 p-0 position-relative section5-banner2-slide1">
                    <a href="https://www.circu.net/projects">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title text-center mb-0" style="color:white !important;font-size: 1.6rem;"><span>CHARLOTTE'S LITTLE KINGDOM</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item col-12 p-0 position-relative section5-banner2-slide2">
                    <a href="https://www.circu.net/projects">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title text-center mb-0" style="color:white !important;font-size: 1.6rem;"><span>TO INFINITY AND BEYOND</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item col-12 p-0 position-relative section5-banner2-slide3">
                    <a href="https://www.circu.net/projects">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title text-center mb-0" style="color:white !important;font-size: 1.6rem;"><span>PASTEL COLOR BEDROOM FULL OF BRIGHTNESS</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item col-12 p-0 position-relative section5-banner2-slide4">
                    <a href="https://www.circu.net/projects">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title text-center mb-0" style="color:white !important;font-size: 1.6rem;"><span>LUXURIOUS APARTMENT IN KYIV FOR A MODERN FAMILY</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item col-12 p-0 position-relative section5-banner2-slide5">
                    <a href="https://www.circu.net/projects">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title text-center mb-0" style="color:white !important;font-size: 1.6rem;"><span>WHIMSICAL PINK ROOM</span></h2>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="col-12 pt-2" style="clear: both;">
    <div class="row">
        <div class="col-12 owl-section6 owl-carousel owl-slide owl-theme p-0">
            <div class="item col-12 p-0 position-relative section6">

                <div class="col-12 col-md-6 float-left section6-left-1">
                    <a href="https://www.circu.net/products/kings-and-queens-castle">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title mb-0" style="color:white !important;font-size: 1.6rem;"><span>KINGS & QUEENS CASTLE</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 float-left section6-right">
                    <div class="row">
                        <div class="col-12 p-0 position-absolute" style="top: 8%;z-index:10;">
                            <h2 class="col-12 category_name_title text-center mb-0"><span>CHOOSE OUR MAGICAL PIECE</span></h2>
                        </div>
                        <div class="col-12 text-center position-absolute mt-3 p-0" style="bottom: 5%;z-index: 10;">
                            <div class="slideToggle">
                                <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/kings-and-queens-castle"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                            </div>
                        </div>
                        <div class="col-12 owl-section6-small-1 owl-carousel owl-slide owl-theme p-0">

                            <div class="item col-12 p-0 position-relative section6-right-1" data-dot="<button class='gold-button mx-1 buttons-active-css' style='outline: 0;cursor: pointer;'></button>">
                            </div>

                            <div class="item col-12 p-0 position-relative section6-right-2" data-dot="<button class=' silver-button mx-1 buttons-active-css' style='outline: 0;cursor: pointer;'></button>">
                            </div>

                            <div class="item col-12 p-0 position-relative section6-right-3" data-dot="<button class='copper-button  mx-1 buttons-active-css' style='outline: 0;cursor: pointer;'></button>">
                            </div>



                        </div>
                    </div>
                </div>

            </div>


            <div class="item col-12 p-0 position-relative section6">

                <div class="col-12 col-md-6 float-left section6-left-2">
                    <a href="https://www.circu.net/products/sky-one-plane-bed">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title mb-0" style="color:white !important;font-size: 1.6rem;"><span>SKY ONE PLANE</span></h2>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 float-left section6-right">
                    <div class="row">
                        <div class="col-12 p-0 position-absolute" style="top: 8%;z-index:10;">
                            <h2 class="col-12 category_name_title text-center mb-0"><span>CHOOSE OUR MAGICAL PIECE</span></h2>
                        </div>
                        <div class="col-12 text-center position-absolute mt-3 p-0" style="bottom: 5%;z-index: 10;">
                            <div class="slideToggle">
                                <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/sky-one-plane-bed"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                            </div>
                        </div>
                        <div class="col-12 owl-section6-small-2 owl-carousel owl-slide owl-theme p-0">

                            <div class="item col-12 p-0 position-relative section6-right-2-1" data-dot="<button class='plane-button-light-blue mx-1 buttons-active-css' style='outline: 0;cursor: pointer;'></button>">
                            </div>
                            <div class="item col-12 p-0 position-relative section6-right-2-2" data-dot="<button class='plane-button-blue mx-1 buttons-active-css' style='outline: 0;cursor: pointer;'></button>">
                            </div>
                            <div class="item col-12 p-0 position-relative section6-right-2-3" data-dot="<button class='plane-button-yellow mx-1 buttons-active-css' style='outline: 0;cursor: pointer;'></button>">
                            </div>



                        </div>
                    </div>
                </div>

            </div>

            <div class="item col-12 p-0 position-relative section6">

                <div class="col-12 col-md-6 float-left section6-left-3">
                    <a href="https://www.circu.net/products/rocky-rocket">
                        <div class="col-12 p-0" style="height: 100%;">
                            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                                <h2 class="col-12 category_name_title mb-0" style="color:white !important;font-size: 1.6rem;"><span>ROCKY ROCKET</span></h2>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 float-left section6-right">
                    <div class="row">
                        <div class="col-12 p-0 position-absolute" style="top: 4%;z-index:10;">
                            <h2 class="col-12 category_name_title text-center mb-0"><span>CHOOSE OUR MAGICAL PIECE</span></h2>
                        </div>
                        <div class="col-12 text-center position-absolute mt-3 p-0" style="bottom: 5%;z-index: 10;">
                            <div class="slideToggle">
                                <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/rocky-rocket"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                            </div>
                        </div>
                        <div class="col-12 owl-section6-small-3 owl-carousel owl-slide owl-theme p-0">

                            <div class="item col-12 p-0 position-relative section6-right-3-1" data-dot="<button class='rocket-button-red mx-1 buttons-active-css' style='outline: 0;cursor: pointer;'></button>">
                            </div>
                            <div class="item col-12 p-0 position-relative section6-right-3-2" data-dot="<button class='rocket-button-pink mx-1 buttons-active-css' style='outline: 0;cursor: pointer;'></button>">
                            </div>
                            <div class="item col-12 p-0 position-relative section6-right-3-3" data-dot="<button class='rocket-button-creme mx-1 buttons-active-css' style='outline: 0;cursor: pointer;'></button>">
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="col-12 p-0 pt-2 section7-ancor" style="clear: both;">
    <div class="col-12 p-0 section7">
        <div class="col-12 p-0" style="background-color: white;">
            <h2 class="col-12 category_name_title text-center mb-0"><span>CIRCU AROUND THE WORLD</span></h2>
        </div>
        <!-- PIN NY -->
        <div style="cursor: pointer;position: absolute;top:39%; left:31%" class="markerClick NYPin">
            <div class='pin'></div>
            <div class='pulse'></div>
        </div>

        <div class="p-0 div-hover div-hover-1 position-absolute d-none " style="top: 50%;left: 50%;transform: translate(-50%, -46%);background-color:white;z-index: 10;opacity:95%;">
            <div class="col-12 p-0 div-text-countrys" style="width:500px;">
                <div class="col-12 text-right position-absolute close-div" style="top:1%;cursor:pointer;z-index: 10;">
                    <span style="color:#666666;">x</span>
                </div>
                <div class="col-12 p-0 px-3 px-md-5 text-div-countrys">
                    <p class="col-12 text-center map-box-title" id="stay-up1" style="color: #98b9b5; font-weight: bold; font-size: 18px;letter-spacing:1px;">COVET NEW YORK</p>
                    <p class="col-12 px-2 map-box-description" id="stay-up3" style="color: #666666; font-weight: lighter; font-size: 12px;text-align: justify;text-align-last: center;">Covet NYC is a new and improved staging project in the heart of Midtown. This new luxury apartment showcases 12 luxury brands, including our CIRCU Magical Furniture, in a room where our pieces fill the space with uniqueness and magic. Book a meeting now, and visit the place where dreams are made and design will inspire you!</p>

                    <div class="col-12 p-0 px-2 pt-3">
                        <div class="row m-0 p-0" id="stay-up-fr">
                            <div class="col-12 text-center" id="stay-up6">
                                <a href="https://www.circu.net/showrooms"><span class="text-center m-0 py-2 px-5" id="stay-up7" style="color: white;font-weight: bold;font-size: 12px;border: 1px solid #98b9b5;background-color: #98b9b5;">VIRTUAL TOUR</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PIN LONDRES -->
        <div style="cursor: pointer;position: absolute;top:30%; left:47%" class="markerClick LondonPin">
            <div class='pin'></div>
            <div class='pulse'></div>
        </div>
        <div class="p-0 div-hover div-hover-2 position-absolute d-none " style="top: 50%;left: 50%;transform: translate(-50%, -46%);background-color:white;z-index: 10;opacity:95%;">
            <div class="col-12 p-0 div-text-countrys" style="width:500px;">
                <div class="col-12 text-right position-absolute close-div" style="top:1%;cursor:pointer;z-index: 10;">
                    <span style="color:#666666;">x</span>
                </div>
                <div class="col-12 p-0 px-3 px-md-5 text-div-countrys">
                    <p class="col-12 text-center map-box-title" id="stay-up1" style="color: #98b9b5; font-weight: bold; font-size: 18px;letter-spacing:1px;">COVET LONDON</p>
                    <p class="col-12 px-2 map-box-description" id="stay-up3" style="color: #666666; font-weight: lighter; font-size: 12px;text-align: justify;text-align-last: center;">COVET LONDON is a private show flat in the heart of the world’s design capital, that offers an intimate design experience attached to an authentic scenario. A highly trained team is waiting to explain every detail of each brand, to tell the amazing stories behind the pieces, and to answer all questions, in order to help to finish projects on time by showing the best choices.</p>

                    <div class="col-12 p-0 px-2 pt-3">
                        <div class="row m-0 p-0" id="stay-up-fr">
                            <div class="col-12 text-center" id="stay-up6">
                                <a href="https://www.circu.net/showrooms"><span class="text-center m-0 py-2 px-5" id="stay-up7" style="color: white;font-weight: bold;font-size: 12px;border: 1px solid #98b9b5;background-color: #98b9b5;">VIRTUAL TOUR</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pin Portugal -->
        <div style="cursor: pointer;position: absolute;top:38%; left:45.5%" class="markerClick PortugalPin">
            <div class='pin'></div>
            <div class='pulse'></div>
        </div>
        <div class="p-0 div-hover div-hover-3 position-absolute d-none " style="top: 50%;left: 50%;transform: translate(-50%, -46%);background-color:white;z-index: 10;opacity:95%;">
            <div class="col-12 p-0 div-text-countrys" style="width:500px;">
                <div class="col-12 text-right position-absolute close-div" style="top:1%;cursor:pointer;z-index: 10;">
                    <span style="color:#666666;">x</span>
                </div>
                <div class="col-12 p-0 px-3 px-md-5 text-div-countrys">
                    <p class="col-12 text-center map-box-title" id="stay-up1" style="color: #98b9b5; font-weight: bold; font-size: 18px;letter-spacing:1px;">CIRCU SHOWROOM</p>
                    <p class="col-12 px-2 map-box-description" id="stay-up3" style="color: #666666; font-weight: lighter; font-size: 12px;text-align: justify;text-align-last: center;">Circu Showroom was designed to be an actual kid's room, with a sleeping area, study corner, and playground filled with beautiful and functional designs. Besides exploring the showroom, you will also have the chance to tour our workshops and meet the skilled craftsmen who transform raw materials into magical designs. Moreover, you will be in one of Europe's best travel destinations. It is the perfect chance to experience Porto's magical allure.</p>

                    <div class="col-12 p-0 px-2 pt-3">
                        <div class="row m-0 p-0" id="stay-up-fr">
                            <div class="col-12 text-center" id="stay-up6">
                                <a href="/circu-new-showroom"><span class="text-center m-0 py-2 px-5" id="stay-up7" style="color: white;font-weight: bold;font-size: 12px;border: 1px solid #98b9b5;background-color: #98b9b5;">VIRTUAL TOUR</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pin Paris -->
        <div style="cursor: pointer;position: absolute;top:33%; left:49%" class="markerClick ParisPin">
            <div class='pin'></div>
            <div class='pulse'></div>
        </div>
        <div class="p-0 div-hover div-hover-4 position-absolute d-none " style="top: 50%;left: 50%;transform: translate(-50%, -46%);background-color:white;z-index: 10;opacity:95%;">
            <div class="col-12 p-0 div-text-countrys div-text-countrys-paris" style="width:500px;">
                <div class="col-12 text-right position-absolute close-div" style="top:1%;cursor:pointer;z-index: 10;">
                    <span style="color:#666666;">x</span>
                </div>
                <div class="col-12 p-0 px-3 px-md-5 text-div-countrys">
                    <p class="col-12 text-center map-box-title" id="stay-up1" style="color: #98b9b5; font-weight: bold; font-size: 18px;letter-spacing:1px;">COVET PARIS</p>
                    <p class="col-12 px-2 map-box-description " id="stay-up3" style="color: #666666; font-weight: lighter; font-size: 12px;text-align: justify;text-align-last: center;">Covet Paris showcases a wide range of products and the tools needed to boost an interior designer’s creativity and complete the most amazing projects. In one place, more than 2000 products and 1300 inspirations represented through a curated selection of interior design sets, with a special corner for kids. An expert will guide you through the full collection so you can quickly find what you are looking for. Bring your client and close your project directly on site.</p>

                    <div class="col-12 p-0 px-2 pt-3">
                        <div class="row m-0 p-0" id="stay-up-fr">
                            <div class="col-12 text-center" id="stay-up6">
                                <a href="https://www.circu.net/showrooms"><span class="text-center m-0 py-2 px-5" id="stay-up7" style="color: white;font-weight: bold;font-size: 12px;border: 1px solid #98b9b5;background-color: #98b9b5;">VIRTUAL TOUR</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 p-0">
    <div class="col-12 p-0 section8 d-none d-md-block">
        <img src="/img/about/section9/banner1.jpg" style="width:100%;" class="img-fluid last-image-desktop section8-img-height">

        <div class="col-12 p-0 position-absolute " style="bottom:5%;height: 100%;">
            <div class="row text-center m-0 p-0 justify-content-center align-items-center " style="height: 100%;">
                <div class="col-12 p-0 col-md-8">
                    <div class="col-12 text-center pb-3 px-0">
                        <span style="color: white; font-weight:bold; font-size: 24px;letter-spacing: 3px;text-transform:uppercase">Enter Circu's magical world and discover how you can turn your dreams come true!</span>
                    </div>
                    <div class="col-12 p-0">
                        <div class="col-12 col-md-6 float-left ">
                            <a rel="modal:open" href="https://www.circu.net/includes/modal-subscribe/">
                                <div class="col-8 py-1 px-0" style="color:#70aab6; background-color:white;right: 0;position: absolute;letter-spacing: 2px;font-family: 'RalewayMedium', sans-serif;font-weight: 400;">SUBSCRIBE US</div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 float-left">
                            <a rel="modal:open" href="https://www.circu.net/includes/modal-contact/">
                                <div class="col-8 py-1 px-0" style="color:#70aab6; background-color:white;position: absolute;letter-spacing: 2px;font-family: 'RalewayMedium', sans-serif;font-weight: 400;">CONTACT US</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 p-0 section8-mobile d-block d-md-none">
        <img src="/img/about/section9/banner1-m.jpg" style="width:100%;" class="img-fluid last-image-desktop">

        <div class="col-12 p-0 position-absolute" style="top: 40%;transform: translate(0%, -50%);">
            <div class="row m-0 p-0 justify-content-center align-items-center text-center" style="height: 170px;">
                <div class="col-12 p-0 mt-4">
                    <span style="color: white; font-weight:bold; font-size: 18px;letter-spacing: 1px;text-transform: uppercase">Enter Circu's magical world and discover how you can turn your dreams come true!</span>
                </div>
                <div class="col-9 p-0">
                    <div class="row m-0 p-0 justify-content-center align-items-center text-center">
                        <div class="col-8 py-1 px-0" style="color:#70aab6; background-color:white;font-size: 12px;letter-spacing: 2px;font-family: 'RalewayMedium', sans-serif;font-weight: 400;">
                            <a rel="modal:open" href="https://www.circu.net/includes/modal-subscribe/">SUBSCRIBE US</a>
                        </div>
                    </div>
                </div>
                <div class="col-9 p-0">
                    <div class="row m-0 p-0 justify-content-center align-items-center text-center">
                        <div class="col-8 py-1 px-0" style="color:#70aab6; background-color:white;font-size: 12px;letter-spacing: 2px;font-family: 'RalewayMedium', sans-serif;font-weight: 400;">
                            <a rel="modal:open" href="https://www.circu.net/includes/modal-contact/">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>


<!-- end container -->
@include('includes.menu-visual-new')
@endsection



@section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vissense/0.10.0/vissense.min.js" integrity="sha512-2ES1bMYVtDkWzlzuUr6EkA0WZ4Vhg/cYBCBBlr0QtKAd12X9EWO1/JwId+9AVQnX7xu684o+7BElKL9HLd/YfQ==" crossorigin="anonymous"></script>


<script>

    $(document).ready(function() {
        var flag = 0;
        $(".play-video").click(function() {
            if (flag == 0) {
                $("#soundimage").attr("src", "/img/about/no-sound.svg");
                console.log(document.getElementById('soundimage'))
                flag = 1;
            } else if (flag == 1) {
                $("#soundimage").attr("src", "/img/about/volume-up.svg");
                console.log(document.getElementById('soundimage'))
                flag = 0;
            }
        });
    });
    var swiper_top_banner = new Swiper('.swiper-top-banner', {
	       spaceBetween: 5,
	       loop: true,
	       autoplay: false,
	       navigation: {
	           nextEl: '.button-prev',
	           prevEl: '.button-next',
	       },
	       disableOnInteraction: false,
	       slideToClickedSlide: true,
	   });
	

    $(window).ready(function() {

        var uh = $('.topbar').height(),
            lh = $('.downbar').height(),
            hh = uh + lh,
            hhm = $('.downbar').height(),
            wh = $(window).height(),
            ww = $(window).width(),
            wh2 = $(window).height() / 2;

        if (ww < 920) {
            $('.section1').css('height', wh - hh);
            $('.section2').css('height', $('.div-get-size1').height() + $('.div-get-size2').height() + 100);
            $('.section4-slide1').css('height', wh2 + hh + 50);
            $('.section4-slide2').css('height', wh2 + hh + 50);
            $('.section4-slide3').css('height', wh2 + hh + 50);
            $('.section5-banner1-slide1').css('height', wh2 + hh + 50);
            $('.section5-banner1-slide2').css('height', wh2 + hh + 50);
            $('.section5-banner1-slide3').css('height', wh2 + hh + 50);
            $('.section5-banner1-slide4').css('height', wh2 + hh + 50);
            $('.section5-banner1-slide5').css('height', wh2 + hh + 50);
            $('.section5-banner1-slide6').css('height', wh2 + hh + 50);
            $('.section5-banner2-slide1').css('height', wh2 + hh + 50);
            $('.section5-banner2-slide2').css('height', wh2 + hh + 50);
            $('.section5-banner2-slide3').css('height', wh2 + hh + 50);
            $('.section5-banner2-slide4').css('height', wh2 + hh + 50);
            $('.section5-banner2-slide5').css('height', wh2 + hh + 50);
            $('.section6-left-1').css('height', wh2);
            $('.section6-left-2').css('height', wh2);
            $('.section6-left-3').css('height', wh2);
            $('.section6-right-1').css('height', wh2 + hh + 50);
            $('.section6-right-2').css('height', wh2 + hh + 50);
            $('.section6-right-3').css('height', wh2 + hh + 50);
            $('.section6-right-2-1').css('height', wh2 + hh + 50);
            $('.section6-right-2-2').css('height', wh2 + hh + 50);
            $('.section6-right-2-3').css('height', wh2 + hh + 50);
            $('.section6-right-3-1').css('height', wh2 + hh + 50);
            $('.section6-right-3-2').css('height', wh2 + hh + 50);
            $('.section6-right-3-3').css('height', wh2 + hh + 50);
            $('.section7').css('height', 374 + 30);
            $('.div-text-countrys').css('width', ww - 25);
            $('.div-text-countrys').css('height', $(".close-div").offsetHeight() + $(".text-div-countrys").offsetHeight() + 100);
        } else {
            $('.section1').css('height', wh - hh);
            $('.section2').css('height', wh - hh);
            $('.section3').css('height', wh - hh);
            $('.section5').css('height', wh - hh);
            $('.myVideo').css('height', wh - hh);
            $('.section4-slide1').css('height', wh - hh);
            $('.section4-slide2').css('height', wh - hh);
            $('.section4-slide3').css('height', wh - hh);
            $('.section5-banner1-slide1').css('height', wh - hh);
            $('.section5-banner1-slide2').css('height', wh - hh);
            $('.section5-banner1-slide3').css('height', wh - hh);
            $('.section5-banner1-slide4').css('height', wh - hh);
            $('.section5-banner1-slide5').css('height', wh - hh);
            $('.section5-banner1-slide6').css('height', wh - hh);
            $('.section5-banner2-slide1').css('height', wh - hh);
            $('.section5-banner2-slide2').css('height', wh - hh);
            $('.section5-banner2-slide3').css('height', wh - hh);
            $('.section5-banner2-slide4').css('height', wh - hh);
            $('.section5-banner2-slide5').css('height', wh - hh);
            $('.section6-left-1').css('height', wh - hh);
            $('.section6-left-2').css('height', wh - hh);
            $('.section6-left-3').css('height', wh - hh);
            $('.section6-right-1').css('height', wh - hh);
            $('.section6-right-2').css('height', wh - hh);
            $('.section6-right-3').css('height', wh - hh);
            $('.section6-right-2-1').css('height', wh - hh);
            $('.section6-right-2-2').css('height', wh - hh);
            $('.section6-right-2-3').css('height', wh - hh);
            $('.section6-right-3-1').css('height', wh - hh);
            $('.section6-right-3-2').css('height', wh - hh);
            $('.section6-right-3-3').css('height', wh - hh);
            $('.section7').css('height', wh - hh);
            $('.banner-paper-txt').css('height', wh - lh);
            $('.last-banner-desktop').css('height', $('.section8-img-height').height() - 15);
            $('.section8-height').css('height', $('.section8-img-height').height() - 15);
        }

    });

    $(window).resize(function() {

        var uh = $('.topbar').height(),
            lh = $('.downbar').height(),
            hh = uh + lh,
            hhm = $('.downbar').height(),
            wh = $(window).height(),
            ww = $(window).width(),
            wh2 = $(window).height() / 2;

        if (ww < 920) {
            $('.section1').css('height', wh - hh);
            $('.section2').css('height', $('.div-get-size1').height() + $('.div-get-size2').height() + 100);
            $('.section4-slide1').css('height', wh2 + hh + 50);
            $('.section4-slide2').css('height', wh2 + hh + 50);
            $('.section4-slide3').css('height', wh2 + hh + 50);
            $('.section5-banner1-slide1').css('height', wh2 + hh + 50);
            $('.section5-banner1-slide2').css('height', wh2 + hh + 50);
            $('.section5-banner1-slide3').css('height', wh2 + hh + 50);
            $('.section5-banner1-slide4').css('height', wh2 + hh + 50);
            $('.section5-banner1-slide5').css('height', wh2 + hh + 50);
            $('.section5-banner1-slide6').css('height', wh2 + hh + 50);
            $('.section5-banner2-slide1').css('height', wh2 + hh + 50);
            $('.section5-banner2-slide2').css('height', wh2 + hh + 50);
            $('.section5-banner2-slide3').css('height', wh2 + hh + 50);
            $('.section5-banner2-slide4').css('height', wh2 + hh + 50);
            $('.section5-banner2-slide5').css('height', wh2 + hh + 50);
            $('.section6-left-1').css('height', wh2);
            $('.section6-left-2').css('height', wh2);
            $('.section6-left-3').css('height', wh2);
            $('.section6-right-1').css('height', wh2 + hh + 50);
            $('.section6-right-2').css('height', wh2 + hh + 50);
            $('.section6-right-3').css('height', wh2 + hh + 50);
            $('.section6-right-2-1').css('height', wh2 + hh + 50);
            $('.section6-right-2-2').css('height', wh2 + hh + 50);
            $('.section6-right-2-3').css('height', wh2 + hh + 50);
            $('.section6-right-3-1').css('height', wh2 + hh + 50);
            $('.section6-right-3-2').css('height', wh2 + hh + 50);
            $('.section6-right-3-3').css('height', wh2 + hh + 50);
            $('.section7').css('height', 374 + 30);
            $('.div-text-countrys').css('width', ww - 25);
            $('.div-text-countrys').css('height', $(".close-div").offsetHeight() + $(".text-div-countrys").offsetHeight() + 100);
        } else {
            $('.section1').css('height', wh - hh);
            $('.section2').css('height', wh - hh);
            $('.section3').css('height', wh - hh);
            $('.section5').css('height', wh - hh);
            $('.myVideo').css('height', wh - hh);
            $('.section4-slide1').css('height', wh - hh);
            $('.section4-slide2').css('height', wh - hh);
            $('.section4-slide3').css('height', wh - hh);
            $('.section5-banner1-slide1').css('height', wh - hh);
            $('.section5-banner1-slide2').css('height', wh - hh);
            $('.section5-banner1-slide3').css('height', wh - hh);
            $('.section5-banner1-slide4').css('height', wh - hh);
            $('.section5-banner1-slide5').css('height', wh - hh);
            $('.section5-banner1-slide6').css('height', wh - hh);
            $('.section5-banner2-slide1').css('height', wh - hh);
            $('.section5-banner2-slide2').css('height', wh - hh);
            $('.section5-banner2-slide3').css('height', wh - hh);
            $('.section5-banner2-slide4').css('height', wh - hh);
            $('.section5-banner2-slide5').css('height', wh - hh);
            $('.section6-left-1').css('height', wh - hh);
            $('.section6-left-2').css('height', wh - hh);
            $('.section6-left-3').css('height', wh - hh);
            $('.section6-right-1').css('height', wh - hh);
            $('.section6-right-2').css('height', wh - hh);
            $('.section6-right-3').css('height', wh - hh);
            $('.section6-right-2-1').css('height', wh - hh);
            $('.section6-right-2-2').css('height', wh - hh);
            $('.section6-right-2-3').css('height', wh - hh);
            $('.section6-right-3-1').css('height', wh - hh);
            $('.section6-right-3-2').css('height', wh - hh);
            $('.section6-right-3-3').css('height', wh - hh);
            $('.section7').css('height', wh - hh);
            $('.banner-paper-txt').css('height', wh - lh);
            $('.last-banner-desktop').css('height', $('.section8-img-height').height() - 15);
            $('.section8-height').css('height', $('.section8-img-height').height() - 15);

        }

    });



    var myVideo1 = document.getElementById('myVideo1');

    VisSense.VisMon.Builder(VisSense(myVideo1, {
            fullyvisible: 0.75,
            hidden: 0.25
        }))
        .on('fullyvisible', function() {
            myVideo1.play();
        })
        .on('hidden', function() {
            myVideo1.pause();
        })
        .build()
        .start();

    var myVideo2 = document.getElementById('myVideo2');

    VisSense.VisMon.Builder(VisSense(myVideo2, {
            fullyvisible: 0.75,
            hidden: 0.25
        }))
        .on('fullyvisible', function() {
            myVideo2.play();
        })
        .on('hidden', function() {
            myVideo2.pause();
        })
        .build()
        .start();

    const selectHotspot = (e) => {
        const clickedHotspot = e.target.parentElement;
        const container = clickedHotspot.parentElement;

        const hotspots = container.querySelectorAll(".hotspot");
        hotspots.forEach(hotspot => {
            if (hotspot === clickedHotspot) {
                hotspot.classList.toggle("lg-hotspot--selected");
            } else {
                hotspot.classList.remove("lg-hotspot--selected");
            }
        });

        $('.close-hotspot').click(function() {
            clickedHotspot.classList.remove("lg-hotspot--selected");
        });

    }

    (() => {
        const buttons = document.querySelectorAll(".hotspot--cta");
        buttons.forEach(button => {
            button.addEventListener("click", selectHotspot);
        });
    })();



    $('.owl-ambiences').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left arrow-banners'></i>", "<i class='fas fa-chevron-right arrow-banners'></i>"],
        // autoplay: {
        //     delay: 4000,
        // },
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

    $('.owl-section6').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        mouseDrag: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-left arrow-banners'></i>", "<i class='fas fa-chevron-right arrow-banners'></i>"],
        // autoplay: {
        //     delay: 4000,
        // },
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

    $('.owl-section6-small-1').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        mouseDrag: false,
        dots: true,
        dotsData: true,
        nav: false,
        navText: ["<i style='left:12%;' class='fas fa-chevron-left arrow-banners'></i>", "<i style='right:12%;' class='fas fa-chevron-right arrow-banners'></i>"],
        // autoplay: {
        //     delay: 4000,
        // },
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
    $('.owl-section6-small-2').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        mouseDrag: false,
        dots: true,
        dotsData: true,
        nav: false,
        navText: ["<i style='left:12%;' class='fas fa-chevron-left arrow-banners'></i>", "<i style='right:12%;' class='fas fa-chevron-right arrow-banners'></i>"],
        // autoplay: {
        //     delay: 4000,
        // },
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
    $('.owl-section6-small-3').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        mouseDrag: false,
        dots: true,
        dotsData: true,
        nav: false,
        navText: ["<i style='left:12%;' class='fas fa-chevron-left arrow-banners'></i>", "<i style='right:12%;' class='fas fa-chevron-right arrow-banners'></i>"],
        // autoplay: {
        //     delay: 4000,
        // },
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
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left p-0 arrow-banners'></i>", "<i class='fas fa-chevron-right p-0 arrow-banners'></i>"],
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

    $('.owl-novelties').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left p-0 pl-2 arrow-banners'></i>", "<i class='fas fa-chevron-right p-0 pr-2 arrow-banners'></i>"],
        autoplay: false,
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

    $('.owl-projects').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left arrow-banners'></i>", "<i class='fas fa-chevron-right arrow-banners'></i>"],
        autoplay: false,
        fluidSpeed: 1500,
        responsive: {
            0: {
                items: 4
            },
            600: {
                items: 4
            },
            768: {
                items: 4
            }
        }
    });



    // var videos = document.getElementsByTagName("video"),
    //     fraction = 0.5;

    // function checkScroll() {

    //     for (var i = 0; i < videos.length; i++) {

    //         var video = videos[i];

    //         var x = video.offsetLeft,
    //             y = video.offsetTop,
    //             w = video.offsetWidth,
    //             h = video.offsetHeight,
    //             r = x + w, //right
    //             b = y + h, //bottom
    //             visibleX, visibleY, visible;

    //         visibleX = Math.max(0, Math.min(w, window.pageXOffset + window.innerWidth - x, r - window.pageXOffset));
    //         visibleY = Math.max(0, Math.min(h, window.pageYOffset + window.innerHeight - y, b - window.pageYOffset));

    //         visible = visibleX * visibleY / (w * h);

    //         if (visible > fraction) {
    //             video.play();
    //         } else {
    //             video.pause();
    //         }

    //     }

    // }

    // window.addEventListener('scroll', checkScroll, false);
    // window.addEventListener('resize', checkScroll, false);

    $(document).on('click', '.section1-scroll', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section2-ancor').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 10
        }, 1000);
    });


    $(document).on('click', '.section2-scroll-collections', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section4-ancor').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 10
        }, 1000);
    });

    $(document).on('click', '.section2-scroll-love', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section-video-ancor').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 10
        }, 1000);
    });

    $(document).on('click', '.section2-scroll-projects', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section-room-projects-ancor').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 10
        }, 1000);
    });

    $(document).on('click', '.section2-scroll-room', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section-room-projects-ancor').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 10
        }, 1000);
    });


    $(document).on('click', '.section2-scroll-world', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section7-ancor').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 10
        }, 1000);
    });


    $(document).ready(function() {

        $("video").prop('muted', true);

        $("video").click(function() {
            $(this).prop('muted', !$(this).prop('muted'));
        });

        $(".play-video").click(function() {
            $("video").prop('muted', !$("video").prop('muted'));
        });
    });


    $(document).on('click', '.NYPin', function(event) {
        event.preventDefault();
        $(".div-hover").addClass("d-none");
        $(".div-hover-1").removeClass("d-none");
    });
    $(document).on('click', '.LondonPin', function(event) {
        event.preventDefault();
        $(".div-hover").addClass("d-none");
        $(".div-hover-2").removeClass("d-none");
    });
    $(document).on('click', '.PortugalPin', function(event) {
        event.preventDefault();
        $(".div-hover").addClass("d-none");
        $(".div-hover-3").removeClass("d-none");
    });
    $(document).on('click', '.ParisPin', function(event) {
        event.preventDefault();
        $(".div-hover").addClass("d-none");
        $(".div-hover-4").removeClass("d-none");
    });
    $(document).on('click', '.close-div', function(event) {
        event.preventDefault();

        $(".div-hover").addClass("d-none");
    });
</script>
@endsection