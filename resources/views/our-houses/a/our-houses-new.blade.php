@extends('layouts.master')
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
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
  h2.category_name_title,
  .category_name_title {
    font-family: 'RalewayMedium', sans-serif;
    text-transform: uppercase;
    font-size: 1.1rem;
    letter-spacing: 2px;
    padding: 0.5rem 2rem;
    color: #9fbfbc !important;
    font-weight: normal;
    cursor: auto !important;
  }

  h2.category_name_title span {
    padding: 0 15px;
  }

  h2.name_title,
  .name_title {
    font-family: 'RalewayMedium', sans-serif;
    font-size: 1rem;
    letter-spacing: 2px;
    padding: 0.5rem 2rem;
    color: #707070 !important;
    font-weight: normal;
    cursor: auto !important;
  }

  .product-box {
    padding: 0.09rem;
    margin: 0;
  }

  .product_thumb {
    width: 100%;
    background-color: #F7F7F7;
    margin: 0;
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
    /*display: block;*/
  }

  .product--title .sub_category {
    text-transform: lowercase;
    /*display: block;*/
  }

  .slick-slider .slick-track {
    transform: translate3d(0px, 0px, 0px) !important;
    /*-webkit-transform: translate3d(0, 0, 0) !important;
    -moz-transform: translate3d(0, 0, 0) !important;
    -ms-transform: translate3d(0, 0, 0) !important;
    -o-transform: translate3d(0, 0, 0) !important;
    transform: translate3d(0, 0, 0) !important;
    transform: none !important;*/
  }

  .slick-slide img {
    display: inline-block;
    cursor: pointer;
  }

  .slick-no-slide .slick-track {
    width: 100% !important;
    text-align: center;
    transform: inherit !important;
  }

  .slick-no-slide .slick-slide {
    float: none;
    display: inline-block !important;
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
    -webkit-transition: all 500ms ease-out 100ms;
    -o-transition: all 500ms ease-out 100ms;
    transition: all 500ms ease-out 100ms;
  }

  .product-box:hover img,
  .product-box:hover .product-caption,
  .product-box:hover .product-caption-sub {
    opacity: 1;
  }

  .product-box:hover .product-box--hover,
  .product-box:hover .product-box--content {
    visibility: visible;
    -webkit-box-shadow: 0px 0px 22px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 0px 22px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 22px 0px rgba(0, 0, 0, 0.3);
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

  .product-box--content {
    -webkit-transition: all 100ms ease 0ms;
    -o-transition: all 100ms ease 0ms;
    transition: all 100ms ease 0ms;
  }

  .owl-carousel .owl-dots.disabled,
  .owl-carousel .owl-nav.disabled {
    display: block !important;
  }

  .horizontal {
    width: 60% !important;
  }

  .vertical {
    width: 20% !important;
  }

  .form-ebook-interior-designers-middle-banner .input-block {
    margin: 0px 0px 0.4rem !important;
    width: 100%;
  }

  .text-1-title {
    text-transform: uppercase;
    color: #9bbfbd !important;
    font-size: 30px;
    line-height: 35px;
    font-weight: bold;
  }

  @media (max-width:1200px) {
    .title-form-acess {
      text-align: center !important;
    }

    .title-form-acess h1 {
      font-size: 14px !important;
    }

    .text-1-title {
      text-transform: uppercase;
      color: #9bbfbd !important;
      font-size: 22px;
      font-weight: bold;
      text-align: center;
    }

    .text-2-title {
      text-transform: inherit;
      color: #8c8c8c;
      font-size: 13px;
      text-align-last: center;
    }

    .text-3-title {
      text-transform: uppercase;
      color: #8c8c8c;
      font-size: 11px;
      font-weight: bold;
      text-align: center;
    }
  }



  .text-2-title {
    text-transform: inherit;
    color: #8c8c8c;
    font-size: 13px;
  }

  .text-3-title {
    text-transform: uppercase;
    color: #8c8c8c;
    font-size: 11px;
    font-weight: bold;
  }

  h2.category_name_room_title {
    font-family: 'RalewayMedium', sans-serif;
    text-transform: uppercase;
    font-size: 1.1rem;
    letter-spacing: 2px;
    padding: 0.5rem 2rem;
    color: #9fbfbc !important;
    font-weight: bold;
    cursor: pointer !important;
  }

  h2.category_name_room_subtitle {
    font-family: 'RalewayMedium', sans-serif;
    text-transform: uppercase;
    font-size: 0.7rem;
    letter-spacing: 2px;
    padding: 0.5rem 2rem;
    color: #9fbfbc !important;
    font-weight: normal;
    cursor: pointer !important;
  }

  h2.category_name_room_subtitle span {
    background-color: white;
    color: #979797;
    padding: 5px 30px;
  }

  h2.category_name_room_subtitle_button span {
    background-color: #9bbfbd;
    color: white;
    padding: 5px 30px;
    font-weight: normal;
    cursor: pointer !important;
    font-size: 0.8rem;
    letter-spacing: 2px;
    font-family: 'RalewayMedium', sans-serif;
    text-transform: uppercase;
  }




  @media (min-width:1100px) {
    .title-form-acess {
      text-align: left !important;
    }

    .title-form-acess h1 {
      font-size: 22px !important;
    }

    .div-form-ourhouses {
      padding-right: 2rem !important;
      padding-left: 2rem !important;
    }

    .div-form-ourhouses .div-button-submit {
      position: absolute !important;
    }

    .div-text-banner-center-paddings {
      padding-right: 3rem !important;
      padding-left: 3rem !important;
    }
  }

  .btn-form-acess {
    margin: 0px;
    color: #ffffff !important;
    line-height: 22px;
    font-size: 12px;
    font-weight: normal;
    letter-spacing: 1px;
    text-transform: uppercase;
    float: none !important;
    text-align: center;
  }

  .btn-video {
    background-color: rgb(255, 255, 255, 0.9);
    padding: 7px 30px;
    color: #a9c6c3;
    letter-spacing: 2px;
    font-size: 0.75rem;
    font-weight: 600;
    display: inline-block;
    cursor: pointer;
  }

  .btn-video-playroom {
    padding: 7px 30px;
    color: white;
    letter-spacing: 2px;
    font-size: 0.85rem;
    font-weight: bold;
    display: inline-block;
  }

  /* linha de produtos */
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

  .slider-button-prev.prev-item,
  .slider-button-next.next-item {
    padding: 8px;
    cursor: pointer;
    position: absolute;
    top: 50%;
    z-index: 9999;
  }

  .slick-slider {
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
  }

  .slick-no-slide .slick-slide {
    float: none;
    display: inline-block !important;
  }

  .slick-no-slide .slick-track {
    width: 100% !important;
    text-align: center;
    transform: inherit !important;
  }

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
  @media (min-width: 720px) {
    .pr-2-mine {
      padding-right: .2rem !important;
    }

    .pl-2-mine {
      padding-left: .2rem !important;
    }

    .px-1-mine {
      padding-left: .1rem !important;
      padding-right: .1rem !important;
    }
  }


  .content-ebook-img {
    text-align: center;
    height: 65%;
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .content-ebook-form {
    /* display: flex; */
    justify-content: center;
    /* position: absolute; */
    bottom: 0px;
    width: 100%;
    text-align: center;
    padding: 0 10px 12px;
    height: 35%;
    align-items: center;
  }

  .content-ebook-form p {
    color: white;
    font-size: 28px;
    font-weight: bold;
    letter-spacing: 2px;
    line-height: 30px;
  }

  .form-access-vt ::placeholder {
    color: #95bdb9;
  }

  .form-download-ebook ::placeholder {
    color: white;
  }

  .form-download-ebook :focus {
    outline: none !important;
    border: 1px solid white !important;
    box-shadow: 0 0 4px #fff !important;
  }

  .form-access-vt :focus {
    outline: none !important;
    border: 1px solid #b5b5b5 !important;
    box-shadow: 0 0 4px #b5b5b5 !important;
  }

  .form-download-ebook .form-control {
    display: block;
    width: 100%;
    height: calc(1.6em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 0.9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #fff;
    background-color: #dfd6af;
    background-clip: padding-box;
    border: 1px solid #fff;
    border-radius: 0;
    -webkit-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    text-transform: uppercase;
  }

  .form-access-vt .form-control {
    display: block;
    width: 100%;
    height: calc(1.6em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 0.9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #95bdb9;
    background-color: #fafafa;
    background-clip: padding-box;
    border: 1px solid #b5b5b5;
    border-radius: 0;
    -webkit-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    text-transform: uppercase;
  }

  .form-access-vt .custom-select {
    display: inline-block;
    width: 100%;
    height: calc(1.6em + 0.75rem + 2px);
    padding: 0.375rem 1.75rem 0.375rem 0.75rem;
    font-size: 0.9rem;
    font-weight: 400;
    line-height: 1.6;
    vertical-align: middle;
    border: 1px solid #b5b5b5;
    border-radius: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #fafafa;
    color: #95bdb9;
    text-transform: uppercase;
  }

  .form-access-vt .btn-request-access {
    background-color: #9bbfbd;
    color: #fff;
    border: 1px solid #9bbfbd;
    border-radius: 0;
    min-width: 200px;
    min-height: 34px;
  }


  @media (max-width:900px) {
    .form-access-vt .btn-request-access {
      min-width: 100%;
    }
  }

  .form-download-ebook .input-costum,
  .form-access-vt .input-costum {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    width: 6%;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  /* Hide the browser's default checkbox */
  .form-download-ebook .input-costum input,
  .form-access-vt .input-costum input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
  }

  .form-download-ebook .input-costum .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #dfd6af;
    border: 1px solid white;
  }

  .form-access-vt .input-costum .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #fafafa;
    border: 1px solid #b5b5b5;
  }

  /* When the checkbox is checked, add a blue background */
  .form-download-ebook .input-costum input:checked~.checkmark {
    background-color: #fff;
  }

  .form-access-vt .input-costum input:checked~.checkmark {
    background-color: #fafafa;
  }

  /* Create the checkmark/indicator (hidden when not checked) */
  .form-download-ebook .input-costum .checkmark:after,
  .form-access-vt .input-costum .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }

  /* Show the checkmark when checked */
  .form-download-ebook .input-costum input:checked~.checkmark:after,
  .form-access-vt .input-costum input:checked~.checkmark:after {
    display: block;
  }

  /* Style the checkmark/indicator */
  .form-download-ebook .input-costum .checkmark:after {
    left: 6px;
    top: 2px;
    width: 7px;
    height: 12px;
    border: solid #dfd6af;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }

  .form-access-vt .input-costum .checkmark:after {
    left: 6px;
    top: 2px;
    width: 7px;
    height: 12px;
    border: solid #95bdb9;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }

  .form-download-ebook .btn-free-download {
    background-color: white;
    color: #979797;
    padding: 5px 30px;
    font-family: 'RalewayMedium', sans-serif;
    text-transform: uppercase;
    font-size: 0.7rem;
    letter-spacing: 2px;
    border: none !important;
  }

  @media (min-width:1495px) {
    .form-access-vt .div-form-privacu-policy p {
      font-size: 9.5px;
      color: #8c8c8c;
      line-height: 16px;
    }

    .form-access-vt .check-vt label {
      color: #9bbfbd;
      font-size: 11px;
    }
  }

  @media (min-width:1000px) and (max-width:1495px) {
    .form-access-vt .div-form-privacu-policy p {
      font-size: 8.5px;
      color: #8c8c8c;
      line-height: 16px;
    }

    .form-access-vt .check-vt label {
      color: #9bbfbd;
      font-size: 11px;
    }
  }

  @media (max-width:999px) {
    .form-access-vt .div-form-privacu-policy p {
      font-size: 10px;
      color: #8c8c8c;
      line-height: 16px;
    }

    .form-access-vt .check-vt label {
      color: #9bbfbd;
      font-size: 10px;
    }

    .col-1-mine {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 8.333333%;
      flex: 0 0 8.333333%;
      max-width: 8.333333%;
    }
  }





  /* FORMS */


  /* ---------------------- FIM HTOSPOTS ------------------------- */
  .hotspot {
    position: absolute;
    display: block;
    z-index: 999999;
  }

  .hotspot--title {
    position: absolute;
    margin: 0;
    background-color: #FFFFFF;
    padding: 14px;
    width: 20em;
    max-width: 50vw;
    z-index: 1;
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
    z-index: 9;
    background: transparent;
    border: 1px solid #fff;
    cursor: pointer;
    transition: all cubic-bezier(.8, 0, .2, 1) .4s;
    z-index: 999999;
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
  .lg-hotspot--selected {
    z-index: 999;
  }

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

  /* slide 1 */
  .hotspot--cosmo {
    left: 49%;
    top: 10%;
  }

  .hotspot--cosmo-mobile {
    top: 13%;
    right: 10%;
  }


  .hotspot--cloud-sofa {
    left: 49%;
    bottom: 25%;
  }

  .hotspot--cloud-sofa .hotspot--title {
    bottom: -15%;
    left: 105%;
  }

  .hotspot--cloud-sofa-mobile {
    bottom: 14%;
    right: 23%;
  }

  .hotspot--nodo {
    left: 12%;
    top: 40%;
  }

  .hotspot--nodo-mobile {
    top: 54%;
    left: 9%;
  }


  .hotspot--dream-desk {
    right: 17%;
    bottom: 22%;
  }

  .hotspot--dream-desk .hotspot--title {
    bottom: -15%;
    right: 105%;
  }

  /* fim slide 1 */

  /* slide 2 */

  .hotspot--rocket {
    left: 53%;
    top: 10%;
  }

  .hotspot--rocket-mobile {
    top: 20%;
    right: 46%;
  }

  .hotspot--puzzle {
    left: 10%;
    top: 32%;
  }

  /* fim slide 2 */

  /* slide 3 */
  .hotspot--animal-stool-shark {
    top: 60%;
    right: 8%;
  }

  .hotspot--animal-stool-shark .hotspot--title {
    bottom: -15%;
    right: 105%;
  }

  .hotspot--animal-stool-shark-mobile {
    top: 59%;
    right: 5%;
  }

  .hotspot--cloud-3-drawers {
    top: 26%;
    left: 73%;
  }

  .hotspot--cloud-3-drawers .hotspot--title {
    top: 9%;
    right: 105%;
  }

  .hotspot--cloud-3-drawers-mobile {
    top: 39%;
    left: 83%;
  }

  .hotspot--cloud-bed {
    top: 26%;
    right: 59%;
  }

  .hotspot--cloud-bed .hotspot--title {
    top: 0%;
    right: 105%;
  }

  .hotspot--cloud-bed-mobile {
    top: 39%;
    right: 59%;
  }

  .hotspot--cloud-mirror {
    top: 5%;
    left: 9%;
  }

  .hotspot--cloud-mirror .hotspot--title {
    top: 18%;
    left: 105%;
  }

  .hotspot--cloud-mirror-mobile {
    top: 27%;
    left: 9%;
  }

  .hotspot--cloud-lamp-big-mobile {
    top: 5%;
    left: 9%;
  }

  .hotspot--little-cloud-nightstand {
    top: 69%;
    right: 31%;
  }

  .hotspot--little-cloud-nightstand .hotspot--title {
    bottom: -15%;
    right: 105%;
  }

  .hotspot--little-cloud-nightstand-mobile {
    top: 54%;
    right: 25%;
  }

  .hotspot--cloud-nightstand {
    top: 67%;
    left: 21%;
  }

  .hotspot--cloud-nightstand .hotspot--title {
    bottom: -15%;
    left: 105%;
  }

  .hotspot--cloud-nightstand-mobile {
    top: 55%;
    left: 18%;
  }

  .hotspot--cloud-2seat-puff-mobile {
    top: 73%;
    left: 47%;
  }

  /* ---------------------- FIM HTOSPOTS ------------------------- */
  .owl-item:hover {
    z-index: 2;
  }

  .form-catlogue-r .form-catalogue-middle-banner {
    top: unset !important;
    transform: unset !important;
  }

  @media (max-width:720px) {
    .section-form h1 {
      font-size: 21px !important;
    }

    .section-form .div-form-privacu-policy {
      font-size: 9.5px;
    }

    .content-ebook-form p {
      font-size: 22px !important;
    }
  }
</style>
@endsection

@section('main-content')
<div class="container-fluid pb-2" id="main-slide">
  <div class="row">
    <!-- SLIDE DESKTOP -->
    <div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative ">
      <div class="item scroll-banner-to-form" style="cursor:pointer;">
        <img src="/img/our-houses/new/the-multiverse-bedroom-d.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100% !important;">
        <img src="/img/our-houses/new/the-multiverse-bedroom-m.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none">
      </div>
      <div class="item scroll-banner-to-form" style="cursor:pointer;">
        <img src="/img/our-houses/new/green-mint-room-d.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100% !important;">
        <img src="/img/our-houses/new/green-mint-room-m.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none">
      </div>
      <div class="item scroll-banner-to-form" style="cursor:pointer;">
        <img src="/img/our-houses/new/a-room-above-the-clouds-d.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100% !important;">
        <img src="/img/our-houses/new/a-room-above-the-clouds-m.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none">
      </div>
      <div class="item scroll-banner-to-form" style="cursor:pointer;">
        <img src="/img/our-houses/new/dreamhouse-adventures-bedroom-d.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100% !important;">
        <img src="/img/our-houses/new/dreamhouse-adventures-bedroom-m.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none">
      </div>
      <div class="item scroll-banner-to-form" style="cursor:pointer;">
        <img src="/img/our-houses/new/candyland-playroom-d.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100% !important;">
        <img src="/img/our-houses/new/candyland-playroom-m.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none">
      </div>
      <div class="item scroll-banner-to-form" style="cursor:pointer;">
        <img src="/img/our-houses/new/little-rising-start-bedroom-banner.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100% !important;">
        <img src="/img/our-houses/new/little-rising-start-bedroom-banner-mobile.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none">
      </div>
      <div class="item scroll-banner-to-form" style="cursor:pointer;">
        <img src="/img/our-houses/new/an-undersea-adventure-by-bymura-banner.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100% !important;">
        <img src="/img/our-houses/new/an-undersea-adventure-by-bymura-banner-mobile.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none">
      </div>
      <div class="item scroll-banner-to-form" style="cursor:pointer;">
        <img src="/img/our-houses/new/an-outer-space-mission-room-banner.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100% !important;">
        <img src="/img/our-houses/new/an-outer-space-mission-room-banner-mobile.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none">
      </div>
      <div class="item scroll-banner-to-form" style="cursor:pointer;">
        <img src="/img/our-houses/new/covet-house-opulent-modern-classic-villa-in-riyadh-rooms-banner.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100% !important;">
        <img src="/img/our-houses/new/covet-house-opulent-modern-classic-villa-in-riyadh-rooms-banner-mobile.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none">
      </div>
      <div class="item scroll-banner-to-form" style="cursor:pointer;">
        <img src="/img/our-houses/new/blossom-fairytale-banner.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100% !important;">
        <img src="/img/our-houses/new/blossom-fairytale-banner-mobile.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none">
      </div>
      <div class="item scroll-banner-to-form" style="cursor:pointer;">
        <img src="/img/our-houses/new/jungle-fun-banner.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100% !important;">
        <img src="/img/our-houses/new/jungle-fun-banner-m.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none">
      </div>
      <div class="item scroll-banner-to-form" style="cursor:pointer;">
        <img src="/img/our-houses/new/our-house-d.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100% !important;">
        <img src="/img/our-houses/new/our-house-m.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none">
      </div>
    </div>
  </div>
</div>
@if(Session::has('user-login'))
<div class="container-fluid my-2 d-none" style="background-color:#f7f7f7;">
  @else
  <div class="container-fluid my-2" style="background-color:#f7f7f7;">
    @endif
    <div class="row m-0 p-0">
      <div class="col-12 p-0">
        <div class="row">
          <div class="col-12 col-md-7 p-0">
            <img src="/img/our-houses/banner-text-new.jpg" class="img-fluid img-height d-none d-md-block" style="width: 100%;">
            <img src="/img/our-houses/banner-text-m-new.jpg" class="img-fluid img-height-mobile d-block d-md-none" style="width: 100%;">
            <div class="col-12 p-0 px-3 px-md-5 position-absolute " style="top:0;left:0;height: 100%;">
              <div class="row m-0 p-0 justify-content-center align-items-center div-text-banner-center" style="height: 100%;">
                <div class="col-12 p-0 div-text-banner-center-paddings">
                  <div class="col-12 p-0">
                    <p class="text-1-title">How to create a wonderland<br class="d-none d-md-block"> in your Kid's Room</p>
                  </div>
                  <div class="col-12 p-0">
                    <p class="text-2-title">These awesome projects are part of a series of magical kids bedroom and playground design ideas, because creating the stuff dreams are made of and turn every child's fantasy into reality is our passion. As it is inspiring adults to achieve their kids' fantasy and create the room they wished they had when they were little.
                      Each room has its own wonderland theme: Candy, the Jungle, Space and more. Along with the final result, each project comes with a moodboard to help you understand how an idea was transformed into a magical, functional and interactive space.</p>
                  </div>
                  <!-- <div class="col-12 p-0">
                                    <p class="text-3-title">Book your virtual tour now</p>
                                </div> -->
                </div>
              </div>

            </div>
          </div>
          @if(Session::has('user-login'))
          <div class="col-12 col-md-5 p-2 p-md-0 div-form-ourhouses section-form" style="background-color: #fafafa;">
            <div class="row m-0 p-0 justify-content-center align-items-center" style="height:100%;">
              <div class="col-12 px-2 px-md-1">
                <h1 style="color: #9bbfbd !important;">THANK YOU </h1>
                <p style="color: #9bbfbd !important;">EXPLORE ALL MAGICAL ROOMS JUST CLICK IN DISCOVER MORE</p>
                <h1 class="pt-3" style="color: #9bbfbd !important;">NEED SOME HELP?</h1>
                <p style="color: #9bbfbd !important;">WE PROVIDE INTERIOR DESIGN SERVICE TO HELP YOU</p>
                <h2 class="col-12 category_name_room_subtitle_button mb-0 p-0 talk-with-us" style="color:white !important; "><span>TALK WITH A DESIGNER</span></h2>
              </div>
            </div>
          </div>
          @else
          <div class="col-12 col-md-5 p-1 p-md-4 p-md-0 div-form-ourhouses section-form" style="background-color: #fafafa;">
            <div class="row m-0 p-0 justify-content-center align-items-center" style="height:100%;">
              <div class="col-12 px-3 px-md-1">
                <h1 style="color: #9bbfbd !important;">GET EXCLUSIVE ACCESS</h1>
                <p style="color: #9bbfbd !important;">EXPLORE AND BOOK YOUR VIRTUAL TOUR NOW</p>
                @include('our-houses.form-access-our-houses')
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid p-0 pb-2 ">
    <div class="col-12 ">
      <h2 class="col-12 name_title text-center mb-0"><span>SEE ALL MAGICAL KIDS BEDROOMS AND PLAYGROUNDS</span></h2>
    </div>
  </div>
  <div class="container-fluid p-0 ">
    <div class="row m-0 p-0">
      @if(Session::has('user-login'))
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.circu.net/the-multiverse-bedroom" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/the-multiverse-bedroom.jpg" class="img-fluid" alt="a room above the clouds Circu Magical Furniture" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1 text-uppercase" style="color:white !important; "><span>The Multiverse Bedroom</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.circu.net/green-mint-playroom" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/green-mint-playroom.jpg" class="img-fluid" alt="a room above the clouds Circu Magical Furniture" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1 text-uppercase" style="color:white !important; "><span>Green Mint Playroom</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.circu.net/a-room-above-the-clouds" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/a-room-above-the-clouds.jpg" class="img-fluid" alt="a room above the clouds Circu Magical Furniture" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1 text-uppercase" style="color:white !important; "><span>A Room Above The Clouds</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.circu.net/dreamhouse-adventures-bedroom" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/16.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>DREAMHOUSE ADVENTURE BEDROOM</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.circu.net/candyland-playroom" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/15.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>CANDYLAND PLAYROOM</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.covethouse.eu/high-end-contemporary-condo-in-los-angeles-rooms/?vrnotaccess=vrtour&utm_source=website&utm_medium=pagproduct&utm_content=circu-ourmagicalrooms&utm_campaign=ourmagicalrooms" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/14.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>LITTLE RISING STAR</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="{{route('an-undersea-adventure-by-bymura')}}" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/13.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>AN UNDERSEA ADVENTURE BY BYMURA</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="{{route('an-outer-space-mission-room')}}" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/12.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>AN OUTER SPACE MISSION</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.covethouse.eu/opulent-modern-classic-villa-in-riyadh/?utm_source=website&utm_medium=banner&utm_content=circu-chourhouses-opulentriyadh&utm_campaign=ourmagicalrooms" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/11.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>IN A CLOUDY SKY, BE A GOLDEN STAR</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="{{route('blossom-fairytale')}}">
          <img src="/img/our-houses/new/banners-rooms/9.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>BLOSSOM FAIRYTALE</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.covethouse.eu/millionaires-modern-apartment-in-nyc/?utm_source=website&utm_medium=banner&utm_content=circu-chourhouses-newnychouse&utm_campaign=ourmagicalrooms" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/10.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>MILLIONAIRES MODERN APARTMENT IN NYC</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="{{route('jungle-fun')}}">
          <img src="/img/our-houses/new/banners-rooms/4.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>JUNGLE FUN</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="{{route('spaceman-room')}}">
          <img src="/img/our-houses/new/banners-rooms/1.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>GOODNIGHT SPACEMAN</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.caffelattehome.com/an-exceptional-contemporary-modern-16-million-penthouse-in-monaco/?utm_source=website&utm_medium=banner&utm_content=circu-chourhouses-insidetheclouds&utm_campaign=ourmagicalrooms" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/2.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>INSIDE THE CLOUDS</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.covethouse.eu/modern-eclectic-home-decor-by-ptang-studio-limited-and-covet-house/?utm_source=website&utm_medium=banner&utm_content=circu-chourhouses-ptanghouse&utm_campaign=ourmagicalrooms" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/3.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>BUBBLE GUM</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.circu.net/our-magical-boy-room">
          <img src="/img/our-houses/new/banners-rooms/5.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>LITTLE-BOY</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.covethouse.eu/modern-eclectic-home-decor-by-ptang-studio-limited-and-covet-house/?utm_source=website&utm_medium=banner&utm_content=circu-chourhouses-roadtrip&utm_campaign=ourmagicalrooms" target="_blank">
          <img src="/img/our-houses/new/banners-rooms/6.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>ROAD TRIP</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <a href="https://www.circu.net/our-magical-girl-room">
          <img src="/img/our-houses/new/banners-rooms/7.jpg" class="img-fluid" style="width: 100%;">
          <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
            <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>LITTLE-GIRL</span></h2>
            <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
          </div>
        </a>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/banner-form-magical-kids.jpg" class="img-fluid" alt="Magical Kids Bedroom and Playground" style="width: 100%;">
        <div class="col-12 p-3 position-absolute" style="z-index:10;bottom:3.7%;">
          @include('includes.middle.form-inspirations-books')
        </div>
      </div>
      {{--
        <div class="col-12 col-md-4 p-0" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <div class="col-12 p-0 content-ebook-img" style="background-color: #dfd6af;">
          <img src="/img/our-houses/new/ebook-new.jpg" class="img-fluid" style="width: 100%;height:100%;">
        </div>
        <div class="col-12 px-0 text-center content-ebook-form d-none d-lg-block" style="background-color: #dfd6af;">
          <div class="px-3" style="position: absolute;bottom: 10%;width: 100%;">
            <div class="col-12 p-0 pb-3">
              <p>MAGICAL KIDS BEDROOMS<br>AND PLAYGROUND IDEAS</p>
            </div>
            <div class="col-12 p-0">
              @include('our-houses.form-download-ebook')
            </div>
          </div>
        </div>
        <div class="col-12 px-0 text-center content-ebook-form d-block d-lg-none pb-5 " style="background-color: #dfd6af;">
          <div class="row m-0 px-3 justify-content-center align-items-center" style="bottom: 0;width: 100%;height:100%;">
            <div class="col-12 p-0">
              <div class="col-12 p-0">
                <p>MAGICAL KIDS BEDROOMS<br>AND PLAYGROUND IDEAS</p>
              </div>
              <div class="col-12 p-0">
                @include('our-houses.form-download-ebook')
              </div>
            </div>

          </div>
        </div>
      </div> --}}

      @else
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/the-multiverse-bedroom.jpg" class="img-fluid" alt="A Room Above The Clouds - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1 text-uppercase" style="color:white !important; "><span>The Multiverse Bedroom</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/green-mint-playroom.jpg" class="img-fluid" alt="A Room Above The Clouds - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1 text-uppercase" style="color:white !important; "><span>Green Mint Playroom</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/a-room-above-the-clouds.jpg" class="img-fluid" alt="A Room Above The Clouds - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1 text-uppercase" style="color:white !important; "><span>A Room Above The Clouds</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/16.jpg" class="img-fluid" alt="Dreammhouse Adventure Bedroom - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>DREAMHOUSE ADVENTURE BEDROOM</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/15.jpg" class="img-fluid" alt="Candyland Playroom - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>CANDYLAND PLAYROOM</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/14.jpg" class="img-fluid" alt="Little Rising Star - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>LITTLE RISING STAR</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/13.jpg" class="img-fluid" alt="An Undersea Adventure By Mura - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>AN UNDERSEA ADVENTURE BY BYMURA</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/12.jpg" class="img-fluid" alt="An Outer Space Mission - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>AN OUTER SPACE MISSION</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/11.jpg" class="img-fluid" alt="In a Cloudy Sky, Be a Golden Star - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>IN A CLOUDY SKY, BE A GOLDEN STAR</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/9.jpg" class="img-fluid" alt="Blossom Fairytale - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>BLOSSOM FAIRYTALE</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/10.jpg" class="img-fluid" alt="Millionaires Modern Apartment in NYC - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>MILLIONAIRES MODERN APARTMENT IN NYC</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/4.jpg" class="img-fluid" alt="Jungle Fun - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>JUNGLE FUN</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 girl-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/1.jpg" class="img-fluid" alt="Goodnight Spaceman - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>GOODNIGHT SPACEMAN</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 covet-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/2.jpg" class="img-fluid" alt="Inside the Clouds - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>INSIDE THE CLOUDS</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/3.jpg" class="img-fluid" alt="Bubble Gum - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>BUBBLE GUM</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 girl-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/5.jpg" class="img-fluid" alt="Little Boy - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>LITTLE-BOY</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 covet-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/6.jpg" class="img-fluid" alt="Road Trip - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>ROAD TRIP</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/7.jpg" class="img-fluid" alt="Little Girl - Circu Magical Furniture" style="width: 100%;">
        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
          <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>LITTLE-GIRL</span></h2>
          <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
        </div>
      </div>
      <!-- <div class="col-12 col-md-4 p-0 boy-room" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
        <img src="/img/our-houses/new/banners-rooms/banner-form-magical-kids.jpg" class="img-fluid" alt="Magical Kids Bedroom and Playground" style="width: 100%;">
        <div class="col-12 p-3 position-absolute" style="z-index:10;bottom:-100px;">
          @include('includes.middle.form-inspirations-books')
        </div>
      </div> -->
      <!-- <div class="col-12 col-md-4 p-0 girl-room px-1-mine pb-1" style="cursor:pointer; outline: 3px solid white; outline-offset: 0px;">
                <img src="/img/our-houses/new/banners-rooms/8.jpg" class="img-fluid give-img-height-width" style="width: 100%;">
                <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
                    <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>GRAPHIC</span></h2>
                    <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>COMING SOON</span></h2>
                </div>
            </div> -->
      @endif
      
      <!-- form -->
      @include('includes.middle.form-download-pricelist-showroom')

    </div>
  </div>
  <div class="container-fluid d-none d-lg-block">
    <div class="row">
      <div class="col-12 col-xl-12">
        <div class="row">
          <div class="col-12 col-xl-12 p-0">
            <a href="https://www.circu.net/interior-design-service">
              <video style="width: 100%;" autoplay loop muted>
                <source src="/img/videos/banner-id-service.mp4" type="video/mp4">
              </video>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid d-block d-lg-none">
    <div class="row">
      <div class="col-12 col-xl-12">
        <div class="row">
          <div class="col-12 col-xl-12 p-0">
            <a href="https://www.circu.net/interior-design-service">
              <video style="width: 100%;" autoplay muted loop>
                <source src="/img/videos/banner-id-service-m.mp4" type="video/mp4">
              </video>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="container-fluid p-0 pb-2 pt-4">
    <div class="col-12 p-0">
      <p class="col-12 text-2-title text-center mb-0 p-0"><span>Circu's Designers are ready to help you create your own magical kid's room.<br>Contact us today to know more about out Interior Design Service.</span></p>
    </div>
    <div class="col-12 p-0">
      <a href="https://www.circu.net/interior-design-service">
        <h2 class="col-12 category_name_room_subtitle_button text-center mb-0 p-0" style="color:white !important; "><span>BOOK NOW YOUR FREE CONSULTATION</span></h2>
      </a>
    </div>
  </div> -->
  <div class="container-fluid p-0 pt-3">
    <div class="col-12 ">
      <h2 class="col-12 category_name_title text-center mb-0"><span>OUR MAGICAL PIECES</span></h2>
    </div>
  </div>
  <div class="container-fluid p-0 pb-2">
    <div class="col-12 owl-products owl-carousel owl-slide owl-theme p-0 position-relative">
      @foreach($all_products as $key => $category)
      @foreach($category as $product)
      @if($product->slug == 'merida-bed' || $product->slug == 'merida-corner-bed' || $product->slug == 'lotus-sofa' || $product->slug == 'fantasy-air-balloon-lounge' || $product->slug == 'tristen-bed' || $product->slug == 'chameleon-pink-mirror' || $product->slug == 'cloud-lamp-big' || $product->slug == 'cloud-lamp-small' || $product->slug == 'bubble-gum-gym' || $product->slug == 'cloud-shelf-small' || $product->slug == 'cloud-shelf-big' || $product->slug == 'gold-box' || $product->slug == 'cloud-nightstand' || $product->slug == 'cloud-dressing-table-vanity-console' || $product->slug == 'cloud-stool-puff' || $product->slug == 'cloud-chest-6-drawers' || $product->slug == 'fantasy-air-nightstand' || $product->slug == 'cloud-mirror' || $product->slug == 'fantasy-air-nightstand' || $product->slug == 'fantasy-air-bookcase-limited-edition' || $product->slug == 'diana-table-lamp' || $product->slug == 'magical-mirror' || $product->slug == 'magical-mirror-blue' || $product->slug == 'cloud-lamp-big' || $product->slug == 'cloud-lamp-small' || $product->slug == 'nodo-suspension-chair' || $product->slug == 'cloud-sofa' || $product->slug == 'fantasy-air-shelf-small'
      || $product->slug == 'cloud-bench-2-seat' || $product->slug == 'illusion-table' || $product->slug == 'illusion-chair-white-bear' || $product->slug == 'illusion-chair-leopard' || $product->slug == 'illusion-stool-white-bear' || $product->slug == 'fantasy-air-shelf-big' || $product->slug == 'fantasy-air-shelf-small' || $product->slug == 'little-cloud-nightstand' || $product->slug == 'fantasy-air-chest-3-drawers' || $product->slug == 'dream-desk' || $product->slug == 'letter-a-graphic-collection' || $product->slug == 'moon-rug' || $product->slug == 'puzzled-bookcase-desk')
      <div class="item col-12 product-box float-left">
        <div class="product_thumb py-4">
          @if(file_exists('./img/products/thumbnails/'.$product->slug.'-circu-magical-furniture.png'))
          <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
          @else
          <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
          @endif

          <div class="product--title">
            <span class="name">{{ $product->name }}</span>
            <span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
          </div>

          <div class="col-12 clearfix position-relative mt-1 p-0">
            <div class="slideToggle">
              <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
            </div>
          </div>

          @if( $product->is_new && ($product->slug == "bubble-gum-bed") || ($product->slug == "bubble-gum-bench") || ($product->slug == "bubble-gum-dressing-table") || ($product->slug == "bubble-gum-chest-3-drawers") || ($product->slug == "bubble-gum-chest-2-drawers") || ($product->slug == "bubble-gum-desk") || ($product->slug == "bubble-slide") || ($product->slug == "bubble-drop") || ($product->slug == "bubble-loop") || ($product->slug =="bubble-gum-playground") || ($product->slug == "bubble-gum-big-mirror") || ($product->slug == "bubble-gum-small-mirror") || ($product->slug == "cotton-candy-sofa") || ($product->slug == "rainbow-sofa"))
          <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
            <img src="/img/icons/product-new-collection.png">
          </div>

          @endif

          <div class="product-box--content">
            @if($product->product_samples->count() > 0 && $product->slug != 'dainty-armchair')
            <div class="col-12 slider-for text-center">
              @foreach($product->product_samples as $product_sample)
              <div>
                <a href="{{ route('product', ['product' => $product->slug]) }}">
                  <img src="/img/products/{{ $product->slug }}/finishes/{{ $product->slug }}-circu-magical-furniture-{{$product_sample->sample->slug}}.png" width="960" height="800" alt="" class="img-fluid">
                </a>
              </div>
              @endforeach
            </div>
            <div class="col-12 product-samples slider-nav text-center p-0">
              @foreach($product->product_samples as $product_sample)
              <div class="d-inline text-center px-1">
                <img src="/img/icons/finishes/{{$product_sample->sample->slug}}-sm.png" width="20" height="20" alt="" class="img-fluid" style="width: 20px;height: 20px;">
              </div>
              @endforeach
            </div>

            @else
            <div>
              <a href="{{ route('product', ['product' => $product->slug]) }}">
                <img src="/img/products/thumbnails-covers/{{ $product->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
              </a>
            </div>
            @endif
            <div class="col-12 clearfix position-relative mt-3 p-0">
              <div class="slideToggle">
                <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
              </div>
            </div>
          </div>

        </div>
      </div>
      @endif
      @endforeach
      @endforeach


    </div>
  </div>
  <div class="container-fluid p-0">
    <div class="col-12 owl-ambiences owl-carousel owl-slide owl-theme p-0">

      <div class="item col-12 p-0 position-relative">
        <img src="/img/slides/home-ambiences/an-undersea-adventure-by-bymura-banner.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">



        <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 34%;left: 81%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center" style="top: -105%;right: 105%;">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/amik-table-lamp">
              <img src="/img/products/carousel/amik-table-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
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
              <img src="/img/products/carousel/tristen-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>TRISTEN</b> BED</div>
              <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the movie Atlantics, this one of a kind bed was made to shape comfort and to keep your little one's dreams safe and sound while he/she travels through their imagination at night.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'tristen-bed'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>
        <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 28%;left: 29%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center" style="top: -105%;right: 105%;">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-dressing-table-vanity-console">
              <img src="/img/products/carousel/cloud-dressing-table-vanity-console-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
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
              <img src="/img/products/carousel/the-whales-tale-rug-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>THE WHALE’S TALE</b> RUG</div>
              <div class="hotspot-description my-2 d-none d-lg-block">This rug was inspired by kids' favorite tales about the ocean and about the whales. These amazing animals are known to be history keepers and they symbolize emotional and peaceful strength.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'the-whales-tale-rug'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>
        <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 54%;left: 35%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center" style="bottom: -105%;right: 105%;">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/little-mermaid-chair">
              <img src="/img/products/carousel/little-mermaid-chair-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>LITTLE MERMAID</b> CHAIR</div>
              <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the iconic Disney's princess Ariel and her undersea kingdom, the Little Mermaid Chair is a unique item that will highlight the decor of any girl's room.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-mermaid-chair'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

      </div>
      <div class="item col-12 p-0 position-relative">
        <img src="/img/slides/home-ambiences/an-outer-space-mission-room.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

        <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 19%;left: 41%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center" style="top: -10%;left: 105%;">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-bed">
              <img src="/img/products/carousel/cloud-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>CLOUD</b> BED</div>
              <div class="hotspot-description my-2 d-none d-lg-block">Its cloud-shaped form is only one of the details that make this piece whimsical and a perfect item for any bedroom.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bed'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 29%;left: 23%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center" style="top: -80%;left: 105%;">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/diana-table-lamp">
              <img src="/img/products/carousel/diana-table-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
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
              <img src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>LITTLE COULD</b> NIGHTSTAND</div>
              <div class="hotspot-description my-2 d-none d-lg-block">The Little Cloud Nightstand is a kids’ furniture product inspired by Pixar’s Short film “Partly Cloudy” and it is the perfect storage item for dreamy bedroom decoration.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-cloud-nightstand'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

      </div>
      <div class="item col-12 p-0 position-relative">
        <img src="/img/slides/home-ambiences/our-magical-room-jungle-1.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

        <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 61%;left: 48%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/tristen-bed">
              <img src="/img/products/carousel/tristen-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>TRISTEN</b> BED</div>
              <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the movie Atlantics, this one of a kind bed was made to shape comfort and to keep your little one's dreams safe and sound while he/she travels through their imagination at night.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'tristen-bed'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 58%;left: 33%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/little-cloud-nightstand">
              <img src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>LITTLE CLOUD</b> NIGHTSTAND</div>
              <div class="hotspot-description my-2 d-none d-lg-block">The Little Cloud Nightstand is a kids’ furniture product inspired by Pixar’s Short film “Partly Cloudy” and it is the perfect storage item for dreamy bedroom decoration. </div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-cloud-nightstand'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 65%;left: 19%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/illusion-chair-leopard">
              <img src="/img/products/carousel/illusion-chair-leopard-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
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
              <img src="/img/products/carousel/teepee-playground-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>TEEPEE</b> PLAYGROUND</div>
              <div class="hotspot-description my-2 d-none d-lg-block">This kids’ teepee is a playroom inspired by the traditional indigenous tents. The Teepee Playground has a playful design.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'teepee-playground'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

      </div>
      <div class="item col-12 p-0 position-relative">
        <img src="/img/slides/home-ambiences/our-magical-room-spaceman-1.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

        <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 9%;left: 53%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center" style="top: 18%;left: 105%;">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/rocky-rocket">
              <img src="/img/products/carousel/rocky-rocket-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>ROCKY ROCKET</b> SOFA / CHAIR</div>
              <div class="hotspot-description my-2 d-none d-lg-block">The Rocky Rocket it’s a children’s interactive chair, that will be the perfect addition to any kid's play area.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'rocky-rocket'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 21%;left: 13%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center" style="top: 18%;left: 105%;">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/puzzled-bookcase-desk">
              <img src="/img/products/carousel/puzzled-bookcase-desk-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>PUZZLED</b> BOOKCASE | DESK</div>
              <div class="hotspot-description my-2 d-none d-lg-block">Inspired by geometric spaces and with the drive and passion to create a piece where kids can explore their imagination and allow the dreams to get out of the box.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'puzzled-bookcase-desk'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

      </div>
      <div class="item col-12 p-0 position-relative">
        <img src="/img/slides/home-ambiences/our-magical-room-spaceman-2.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

        <div class="hotspot hotspot--atomic-wall-lamp hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/atomic-wall-lamp">
              <img src="/img/products/carousel/atomic-wall-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>ATOMIC</b> WALL LAMP</div>
              <div class="hotspot-description my-2 d-none d-lg-block">Atomic wall light is a mid-century modern lighting design inspired by the atomic discoveries of the mid-20th century.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'atomic-wall-lamp'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <div class="hotspot hotspot--stellar-round-rug hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/stellar-round-rug">
              <img src="/img/products/carousel/stellar-round-rug-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>STELLAR ROUND</b> RUG</div>
              <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the galaxy’s constellations, the Stellar Rug is the ideal piece for the little space adventures who love to look up to the sky every night and count the stars.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'stellar-round-rug'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <div class="hotspot hotspot--sky-nightstand hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/sky-nightstand">
              <img src="/img/products/carousel/sky-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>SKY</b> NIGHTSTAND</div>
              <div class="hotspot-description my-2 d-none d-lg-block">The Sky Nightstand is a kids’ small chest of drawers inspired by the Disney movie “Planes” and it is the perfect storage item for your aviation inspired bedroom decoration.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'sky-nightstand'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

      </div>

      <div class="item col-12 p-0 position-relative">
        <img src="/img/slides/home-ambiences/our-magical-boy-room.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

        <div class="hotspot hotspot--cloud-6-drawers hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-mirror">
              <img src="/img/products/carousel/cloud-mirror-blue-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud</b> Mirror</div>
              <div class="hotspot-description my-2 d-none d-lg-block">This exquisite mirror is the perfect piece of decoration that will embellish any children’s bedroom.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-mirror'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-6-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-mirror">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--cloud-bed hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-bed">
              <img src="/img/products/carousel/cloud-bed-blue-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud</b> Bed</div>
              <div class="hotspot-description my-2 d-none d-lg-block"> The Cloud Room collection aims to offer you the solution to a never-ending problem: a complete, high-quality design for a child’s bedroom.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bed'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-bed d-block d-lg-none" href="https://www.circu.net/products/cloud-bed">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-shelf-big">
              <img src="/img/products/carousel/cloud-shelf-big-blue-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud Big</b> Shelf</div>
              <div class="hotspot-description my-2 d-none d-lg-block">With a creative and playful design, this Cloud Shelf aims to reinforce the connection between children and imagination.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-shelf-big'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-shelf-big">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--animal-stool-shark hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/animal-stool-shark">
              <img src="/img/products/carousel/animal-stool-shark-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Animal Shark</b> Stool</div>
              <div class="hotspot-description my-2 d-none d-lg-block">The Animal Stools collection owns an exclusive design that promises to awaken children's friendship with animals.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'animal-stool-shark'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/animal-stool-shark">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--little-cloud-nightstand hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/little-cloud-nightstand">
              <img src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Little Cloud</b> Nightstand</div>
              <div class="hotspot-description my-2 d-none d-lg-block">The Little Cloud Nightstand is a kids’ furniture product inspired by Pixar’s Short film “Partly Cloudy” and it is the perfect storage item for dreamy bedroom decoration.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-cloud-nightstand'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--little-cloud-nightstand d-block d-lg-none" href="https://www.circu.net/products/little-cloud-nightstand">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--cloud-nightstand hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-nightstand">
              <img src="/img/products/carousel/cloud-nightstand-white-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud</b> Nightstand</div>
              <div class="hotspot-description my-2 d-none d-lg-block">Cloud NightStand is a kids’ furniture product inspired by Pixar’s Short film “Party Cloud” and it is the perfect storage item for dreamy bedroom decoration.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-nightstand'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-nightstand d-block d-lg-none" href="https://www.circu.net/products/cloud-nightstand">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

      </div>

      <div class="item col-12 p-0 position-relative">
        <img src="/img/slides/home-ambiences/our-magical-girl-room.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

        <div class="hotspot hotspot--cloud-6-drawers hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-mirror">
              <img src="/img/products/carousel/cloud-mirror-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud</b> Mirror</div>
              <div class="hotspot-description my-2 d-none d-lg-block">This exquisite mirror is the perfect piece of decoration that will embellish any children’s bedroom.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-mirror'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-6-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-6-drawers">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--cloud-bed hotspot--title__left d-none d-lg-block" style="top: 31%;right: 66%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-bed">
              <img src="/img/products/carousel/cloud-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud</b> Bed</div>
              <div class="hotspot-description my-2 d-none d-lg-block"> The Cloud Room collection aims to offer you the solution to a never-ending problem: a complete, high-quality design for a child’s bedroom.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bed'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-bed d-block d-lg-none" href="https://www.circu.net/products/cloud-bed">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block" style="top: 26%;left: 69%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-shelf-big">
              <img src="/img/products/carousel/cloud-shelf-big-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud Big</b> Shelf</div>
              <div class="hotspot-description my-2 d-none d-lg-block">With a creative and playful design, this Cloud Shelf aims to reinforce the connection between children and imagination.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-shelf-big'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-3-drawers">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block" style="top: 18%;left: 52%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-chest-6-drawers">
              <img src="/img/products/carousel/cloud-chest-6-drawers-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud 6 Drawes</b> Chest</div>
              <div class="hotspot-description my-2 d-none d-lg-block">Cloud Chest of drawers is inspired by Pixar short-film “Party Cloud”, and it's the perfect storage item for whimsical bedroom decoration.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-chest-6-drawers'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-6-drawers">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--gold-box hotspot--title__left d-none d-lg-block" style="top: 56%;left: 69%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/gold-box">
              <img src="/img/products/carousel/gold-box-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Gold Toy</b> Box</div>
              <div class="hotspot-description my-2 d-none d-lg-block">Gold Box is a luxurious kids’ toy box inspired by the fine gold bar shape. Inspired by the adventures of Scrooge McDuck, the richest duck in the world.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'gold-box'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/gold-box">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--gold-box hotspot--title__left d-none d-lg-block" style="top: 56%;right: 10%;">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-stool-puff">
              <img src="/img/products/carousel/cloud-stool-puff-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud Puff</b> Stool</div>
              <div class="hotspot-description my-2 d-none d-lg-block">The Cloud Puff promises to awaken your children's imagination and increase their creativity.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-stool-puff'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-stool-puff">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--cloud-bench-2-seat hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-bench-2-seat">
              <img src="/img/products/carousel/cloud-bench-2-seat-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud 2 Seat</b> Bench</div>
              <div class="hotspot-description my-2 d-none d-lg-block">The Cloud Seat promises to awaken your children's imagination and increase their creativity.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bench-2-seat'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-bench-2-seat d-block d-lg-none" href="https://www.circu.net/products/cloud-bench-2-seat">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>
        <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-stool-puff">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--cloud-nightstand-girl  hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-nightstand">
              <img src="/img/products/carousel/cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud</b> Nightstand</div>
              <div class="hotspot-description my-2 d-none d-lg-block">Cloud NightStand is a kids’ furniture product inspired by Pixar’s Short film “Party Cloud” and it is the perfect storage item for dreamy bedroom decoration.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-nightstand'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-nightstand-girl  d-block d-lg-none" href="https://www.circu.net/products/cloud-nightstand">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>
      </div>

      <div class="item col-12 p-0 position-relative">
        <img src="/img/slides/home-ambiences/cloud-collection-circu-magical-collection.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

        <div class="hotspot hotspot--cloud-6-drawers hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-chest-6-drawers">
              <img src="/img/products/carousel/cloud-chest-6-drawers-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud</b> 6 Drawers</div>
              <div class="hotspot-description my-2 d-none d-lg-block"> The Cloud Room collection aims to offer you the solution to a never-ending problem: a complete, high-quality design for a child’s bedroom.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-chest-6-drawers'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-6-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-6-drawers">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--cloud-bed hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-bed">
              <img src="/img/products/carousel/cloud-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud</b> Bed</div>
              <div class="hotspot-description my-2 d-none d-lg-block"> The Cloud Room collection aims to offer you the solution to a never-ending problem: a complete, high-quality design for a child’s bedroom.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bed'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-bed d-block d-lg-none" href="https://www.circu.net/products/cloud-bed">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cloud-chest-3-drawers">
              <img src="/img/products/carousel/cloud-chest-3-drawers-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Cloud</b> 3 Drawers</div>
              <div class="hotspot-description my-2 d-none d-lg-block"> The Cloud Room collection aims to offer you the solution to a never-ending problem: a complete, high-quality design for a child’s bedroom.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-chest-3-drawers'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-3-drawers">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>
      </div>
      <div class="item col-12 p-0 position-relative">
        <img src="/img/slides/home-ambiences/playground-circu-magical-furniture.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

        <div style="top: 32%;right: 52%;" class="hotspot hotspot--fantasy-air-balloon hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/bubble-gum-big-mirror">
              <img src="/img/products/carousel/bubble-gum-big-mirror-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>BUBBLE GUM BIG</b> mirror</div>
              <div class="hotspot-description my-2"> The Bubble Gum Big Mirror is the accessory you need to embellish any children's bedroom. With its elegant design inspired by the fun shapes of the kid's favorite candies.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'bubble-gum-big-mirror'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--fantasy-air-balloon d-block d-lg-none" href="https://www.circu.net/products/fantasy-air-balloon">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>
        <div style="top: 19%;right: 77%;" class="hotspot hotspot--cloud-bed hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/rocky-rocket">
              <img src="/img/products/carousel/rocky-rocket-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Rocky Rocket</b> Sofa / Chair</div>
              <div class="hotspot-description my-2 d-none d-lg-block"> The Rocky Rocket it’s a children’s interactive chair, painted in red and white checkered pattern.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'rocky-rocket'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-bed d-block d-lg-none" href="https://www.circu.net/products/cloud-bed">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>

        <div style="top: 47%;left: 65%;" class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div style="top:-60px" class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/bubble-gum-gym">
              <img src="/img/products/carousel/bubble-gum-gym-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>BUBBLE GUM</b> GYM</div>
              <div class="hotspot-description my-2 d-none d-lg-block"> The Bubble Gum Gym is going to bring magic and playfulness to your kid's playroom!</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'bubble-gum-gym'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-3-drawers">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>
        <!-- <div style="top: 70%;left: 71%;" class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block">
                  
                  <div class="hotspot--cta"></div>
                  <div class="hotspot--title text-center" style="top:-200px">
                    <div class="close-hotspot">X</div>
                    <a href="https://www.circu.net/products/illusion-table">
                      <img src="/img/products/carousel/illusion-table-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                      <div class="hotspot-name"><b>ILLUSION</b> TABLE</div>
                      <div class="hotspot-description my-2 d-none d-lg-block"> The Illusion Series brings a touch of magic to the children's playroomdecor. </div>
                    </a>
                    <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'illusion-table'] )}}">
                      <div class="hotspot-get-price"><span>GET PRICE</span></div>
                    </a>
                  </div>
                </div> -->

        <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-3-drawers">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>
        <div style="top: 60%;left: 92%;" class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center" style="top:-170px">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/cotton-candy-sofa">
              <img src="/img/products/carousel/cotton-candy-sofa-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>cotton candy</b> sofa</div>
              <div class="hotspot-description my-2 d-none d-lg-block"> The Cotton Candy Sofa will add sweetness and playfulness to you bedroom design.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cotton-candy-sofa'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-3-drawers">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>
      </div>

      <div class="item col-12 p-0 position-relative">
        <img src="/img/slides/home-ambiences/kings-and-queens-room.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

        <div class="hotspot hotspot--kings-and-queens hotspot--title__left d-none d-lg-block">
          <!-- desktop -->
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/kings-and-queens-castle">
              <img src="/img/products/carousel/kings-and-queens-castle-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>Kings & Queens</b> Castle</div>
              <div class="hotspot-description my-2"> Kings and Queens Castle is made entirely by hand with noble materials of great quality, it follows a modular system.</div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'kings-and-queens-castle'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div>

        <a class="hotspot hotspot--kings-and-queens d-block d-lg-none" href="https://www.circu.net/products/kings-and-queens-castle">
          <!-- mobile -->
          <span class="hotspot--cta"></span>
        </a>
      </div>


    </div>
  </div>
  <div class="container-fluid pt-2" style="clear:both;">
    <div class="row pb-2">
      <div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#9bb1c9;">
        <div class="col-12 col-xl-11 offset-0 offset-xl-1 py-1">
          <div class="row">
            <div class="col-12 col-lg-6 p-lg-0">
              @include('includes.middle.form-catalogue-2022')
            </div>
            <div class="col-12 col-lg-6 pl-lg-0 text-center">
              <img src="/img/home/banner-form-catalogue-m.jpg" width="524" height="264" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid text-center">
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-8 p-0 d-none d-lg-block">
        <div class="col-12 p-0">
          <img src="/img/home/bg-banner-ebook.jpg" style="width:100%;" class="img-fluid d-none d-lg-block">
        </div>
        <div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%; transform: translate(0,-50%);">
          @include('includes.middle.form-catalogue-2022')
        </div>
      </div>
      <div class="col-12 col-lg-4 p-0">
        <a rel="modal:open" href="{{route('modal-download-pricelist-our-houses')}}">
          <img src="/img/our-houses/banner-pricelist.jpg" alt="Pricelist Our Houses 2021" width="800" height="800" class="img-fluid" style="width: 100% !important;">
        </a>
      </div>
    </div>
  </div>
  @include('includes.menu-visual-new')
  @endsection

  @section('footer-includes')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="/js/slick.min.js"></script>
  <script type="text/javascript">
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
    $('.talk-with-us').click(function() {
      SnapEngage.startLink();
    });
    jQuery('.form-access-vt input[name="email"]').on('change', function() {
      jQuery('.formvisible').css('display', 'block');
    });
    $('#form-ourhouses').click(function() {
      console.log('asd');
      $('#form-acess-rooms').parsley().validate();
      console.log($('#form-acess-rooms').parsley().isValid());
      if ($('#form-acess-rooms').parsley().isValid() == true) {
        $(this).attr('rel', 'modal:open').attr('href', '{{ route("modal-our-houses") }}');
      } else {
        $(this).attr('rel', '').removeAttr('href');
      }
    });

    $(window).load(function() {
      @if(Session::has('thank_you_note'))
      // setTimeout(function() {
      //     $('#form-ourhouses').click();
      // }, 1000);
      @endif
    });



    $('.owl-ambiences').owlCarousel({
      loop: true,
      margin: 10,
      lazyLoad: false,
      dots: false,
      nav: true,
      navText: ["<i class='fas fa-chevron-left arrow-banners'></i>", "<i class='fas fa-chevron-right arrow-banners'></i>"],
      // autoplay: {
      //   delay: 4000,
      // },
      // fluidSpeed: 1500,
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

    $('.owl-products').owlCarousel({
      loop: true,
      margin: 1,
      lazyLoad: false,
      dots: false,
      nav: true,
      navText: ["<i class='fas fa-chevron-left p-0 pl-2 arrow-banners'></i>", "<i class='fas fa-chevron-right p-0 pr-2 arrow-banners'></i>"],
      autoplay: false,
      fluidSpeed: 1500,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        768: {
          items: 4,
          nav: true
        }
      }
    });
    $('.slider-for').each(function(num, elem) {
      elem = $(elem);
      elem.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<div class="slider-button-prev prev-item"><i class="fas fa-chevron-left"></i></div>',
        nextArrow: '<div class="slider-button-next next-item"><i class="fas fa-chevron-right"></i></div>',
        draggable: false,
        fade: true,
        accessibility: false,
        asNavFor: '.slider-nav'
      });

      elem.next('.slider-nav').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        variableWidth: true,
        dots: false,
        centerMode: true,
        arrows: false,
        draggable: false,
        accessibility: false,
        focusOnSelect: true
      });
    });

    $('.slider-nav .slick-slide').on('click', function(event) {
      $('.slider-for').slick('slickGoTo', $(this).data('slickIndex'));
    });

    var elm = $('.slider-nav '),
      getSlick = elm.slick('getSlick');

    if (getSlick.slideCount <= getSlick.options.slidesToShow) {
      elm.addClass('slick-no-slide');
    } else {
      elm.removeClass('slick-no-slide');
    }

    $(document).on('click', '.scroll-banner-to-form', function(event) {
      event.preventDefault();

      $('html, body').animate({
        scrollTop: $('.section-form').offset().top - $('.downbar').height()
      }, 1000);
    });
    $(document).on('click', '.boy-room', function(event) {
      event.preventDefault();

      $('html, body').animate({
        scrollTop: $('.section-form').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 120
      }, 1000);
    });

    $(document).on('click', '.girl-room', function(event) {
      event.preventDefault();

      $('html, body').animate({
        scrollTop: $('.section-form').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 120
      }, 1000);
    });

    $(document).on('click', '.covet-room', function(event) {
      event.preventDefault();

      $('html, body').animate({
        scrollTop: $('.section-form').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 120
      }, 1000);
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
        $('.div-text-banner-center').css('height', $('.img-height-mobile').height());
      } else {
        $('.form-catlogue-r').css('height', $('.img-size-form').height());
        $('.heigh-div-form-image').css('height', $('.heigh-div-form').height());
        $('.get-img-height-width').css('height', $('.give-img-height-width').height() - 0.50);
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
        $('.div-text-banner-center').css('height', $('.img-height-mobile').height());
      } else {
        $('.form-catlogue-r').css('height', $('.img-size-form').height());
        $('.heigh-div-form-image').css('height', $('.heigh-div-form').height());
        $('.get-img-height-width').css('height', $('.give-img-height-width').height() - 0.50);
      }

    });

    $(".country-ebook").change(function() {
      var selected_option = $(this).val();
      if (selected_option === 'United States') {
        $('.state-ebook').removeClass('d-none').children().attr('data-parsley-required', 'true');
      }
      if (selected_option != 'United States') {
        $('.state-ebook').addClass('d-none').children().attr('data-parsley-required', 'false');
      }
    });
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
  </script>

  @endsection