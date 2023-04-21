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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
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
	font-size: 17px;
	font-weight: bold;
	text-align: start;
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
	.text-1-title {
	text-transform: uppercase;
	color: #9bbfbd !important;
	font-size: 17px;
	font-weight: bold;
	text-align: start;
    letter-spacing: 2px;
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
	.start_virtual_tour span {
	background-color: white;
	color: #9bbfbd;
	padding: 10px 30px;
	font-family: 'Raleway', sans-serif;
	text-transform: uppercase;
	font-size: 0.8rem;
	letter-spacing: 2px;
	font-weight: bold;
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
	h2.texto_room {
	text-transform: inherit;
	color: #707070;
	font-size: 13px;
	text-align-last: center;
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
	/* --------------- linha de produtos --------------- */
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
	.start_virtual_tour span {
        background-color: white;
        color: #9bbfbd;
        padding: 10px 30px;
        font-family: 'Raleway', sans-serif;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 2px;
        font-weight: bold;
    }
	/* --------------- linha de produtos --------------- */
	.form-catlogue-r .form-catalogue-middle-banner {
	top: unset !important;
	transform: unset !important;
	}
	@media (max-width:720px) {
	.texto_room {
	text-align: justify !important;
	}
	}
	.text-title-banner1 {
	color: #98b9b5;
	font-size: 1.2rem;
	font-weight: bold;
	letter-spacing: 2px;
	}
	.moodboards-title {
	bottom: 3%;
	}
	@media (max-width:900px) {
	.text-title-banner1 {
	color: #98b9b5;
	font-size: 1rem !important;
	font-weight: bold;
	letter-spacing: 0.5px;
	text-align: start;
	}
	.moodboards-title {
	bottom: 0%;
	}
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
	font-size: 15px;
	}
	@media (max-width:900px) {
	.form-access-vt .btn-request-access {
	min-width: 100%;
	}
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
	.form-access-vt .input-costum .checkmark {
	position: absolute;
	top: 0;
	left: 0;
	height: 20px;
	width: 20px;
	background-color: #fafafa;
	border: 1px solid #b5b5b5;
	}
	.form-download-ebook .input-costum .checkmark:after,
	.form-access-vt .input-costum .checkmark:after {
	content: "";
	position: absolute;
	display: none;
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
	.text-1-title {
	text-transform: uppercase;
	color: #9bbfbd !important;
	font-size: 30px;
	line-height: 35px;
	font-weight: bold;
	text-align: start;
    letter-spacing: 2px;
	}
	.swiper-container .arrow-banners {
	color: #fff;
	opacity: 75%;
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

	.button-prev {
		position: absolute;
		z-index: 9;
		left: 35px !important;
		right: auto;
		top: 50% !important;
		font-size: 1.6rem;
		background-repeat: no-repeat;
		background-size: 100%;
		background-position: center;
		text-shadow: 3px 3px 16px #272634;
		cursor: pointer;
	}
	.button-next {
		position: absolute;
		z-index: 9;
		right: 35px !important;
		left: auto;
		top: 50% !important;
		font-size: 1.6rem;
		background-repeat: no-repeat;
		background-size: 100%;
		background-position: center;
		text-shadow: 3px 3px 16px #272634;
		cursor: pointer;
	}
	@media (min-width:641px) {
	.slider-main.swiper-slide {
	width: auto !important;
	}
	}
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
	.owl-carousel .owl-item img,
	.owl-slide_animated .owl-item img {
	display: block;
	width: 100% !important;
	margin: 0 auto;
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

	.text-title-banner-1 {
        color: white;
        font-size: 1.3rem;
        font-weight: bold;
        letter-spacing: 2px;
    }
	.title-h1{
	text-align: start;
	}
	@media (max-width:900px) {
        .text-title-banner-1 {
            color: white;
            font-size: 18px !important;
            font-weight: bold;
            letter-spacing: 2px;
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
	.title-h1{
	font-size: 24px;
	text-align: start;
	}
	.text-1-title{ 
	font-size: 26px;
	}
	.text-title-banner1{
	font-size: .9rem !important;
	}
	.text-title-banner-1 {
        color: white;
        font-size: 30px;
        font-weight: bold;
        letter-spacing: 2px;
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
	.swiper-container{
	overflow: hidden;
	}
	.form-catalogue-middle-banner .btn{
		background-color: #ffffff;
	}
</style>
@endsection
@section('main-content')
<div class="container-fluid p-0">
	<div class="row m-0 p-0">
		<div class="swiper-container swiper-banner-top">
			<div class="swiper-wrapper">
				<div class="col-12 p-0 swiper-slide">
					<video style="width: 100%;" autoplay loop muted playsinline onloadeddata="this.play();" class="d-none d-lg-block">
						<source src="/img/our-houses/new/circu-new-showroom/circu-new-showroom-2.mp4" type="video/mp4" class="">
					</video>
					<video style="width: 100%;" autoplay loop muted playsinline onloadeddata="this.play();" class="d-block d-lg-none    ">
						<source src="/img/our-houses/new/circu-new-showroom/circu-new-showroom-2-m.mp4" type="video/mp4" class="">
					</video>
					<div class="position-absolute" style="bottom:2%;left:2.5%;">
						<div class="play-video">
							<img class="img-d-none" id="soundimage" style="width: 30px;float: none !important;margin-top: -3px;filter: invert(100%);" src="/img/about/volume-up.svg">
						</div>
					</div>
				</div>
				<div class="col-12 p-0 swiper-slide">
					<img src="/img/our-houses/new/circu-new-showroom/an-authentic-little-kids-corner-banner-1.jpg" class="img-fluid d-none d-md-block" style="width: 100% !important;">
					<img src="/img/our-houses/new/circu-new-showroom/an-authentic-little-kids-corner-banner-1-m.jpg" class="img-fluid d-block d-md-none" style="width: 100% !important;">
				</div>
			</div>
			<div class="button-prev arrow-banners">
				<i class="fas fa-chevron-left p-0 pr-2 arrow-banners"></i>
			</div>
			<div class="button-next arrow-banners">
				<i class="fas fa-chevron-right p-0 pl-2 arrow-banners"></i>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid my-2" style="background-color:#f7f7f7;">
	<div class="row m-0 p-0">
		<div class="col-12 col-md-7 p-0">
			<img src="/img/our-houses/text-banner-new.jpg" class="img-fluid img-height d-none d-md-block" style="width: 100%;">
			<img src="/img/our-houses/text-banner-new-m.jpg" class="img-fluid img-height-mobile d-block d-md-none" style="width: 100%;">
			<div class="col-12 position-absolute p-0" style="top:0;left:0;height: 100%;">
				<div class="row m-0 p-0 justify-content-center align-items-center div-text-banner-center" style="height: 100%;">
					<div class="col-12 p-0 div-text-banner-center-paddings">
						<div class="col-12 p-0">
							<p class="text-1-title">TOUR CIRCU'S MAGICAL WORLD IN OPORTO</p>
							<p class="text-uppercase text-title-banner1 pb-2 pb-lg-2">Explore the showroom</p>
						</div>
						<div class="col-12 p-0">
							<p class="text-2-title">Circu has a new showroom in Oporto and just like Willy Wonka's Chocolate Factory, it is an enchanting world of Magic. The showroom  was designed to be an actual kid's room, with a sleeping area, study corner, and playground filled with beautiful and functional designs, such as an air balloon transformed into a lounge, a bed inspired by a fox or a sea shell, and a gym for toddlers full of form and color. Circu´s dream is to allow children to live their fantasies and create their own magical world with limitless imagination, and this is the experience we offer our visitors. Besides exploring the showroom, you will also have the chance to tour our workshops and meet the skilled craftsmen who transform raw material into magical designs. Moreover, you will be in one of Europe's best travelling destinations. It is the perfect chance to experience Porto's magical allure.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-5 p-1 p-md-4 p-md-0 div-form-ourhouses section-form" style="background-color: #fafafa;">
			<div class="row m-0 p-0 justify-content-center align-items-center" style="height:100%;">
				<div class="col-12 px-3 px-md-1">
					@if(session()->has('message'))
					<div class="alert alert-success">
						<h1 style="color: #9bbfbd !important;" class="title-h1 text-uppercase">{{ session()->get('message') }}</h1>
					</div>
					@endif
					<h1 style="color: #9bbfbd !important;" class="title-h1 text-uppercase">Circu has a new showroom in Oporto</h1>
					<p style="color: #9bbfbd !important;">Schedule your appointment</p>
					@include('our-houses.form-request-encounter')
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid my-2 p-0">
	<div class="row m-0">
		<div class="col-12 p-0">
			<img src="/img/our-houses/new/circu-new-showroom/banner-virtual-tour.jpg" alt="" class="img-fluid d-none d-sm-block">
			<img src="/img/our-houses/new/circu-new-showroom/banner-virtual-tour-m.jpg" alt="" class="img-fluid d-block d-sm-none">
			<div class="col-12 p-0 position-absolute text-center" style="z-index:10;bottom:10%;">
				<img src="/img/our-houses/new/circu-new-showroom/start_tour.png" alt="" class="img-fluid mb-3" style="max-width: 100px;">
                <p class="text-uppercase text-center text-title-banner-1 m-0">Experience Circu Magical Showroom</p>
                <a href="/virtual-tour/circu-new-showroom/">
                    <h2 class="col-12 start_virtual_tour text-center mb-0" style="color:white !important; "><span>START VIRTUAL TOUR</span></h2>
                </a>
            </div>
		</div>
	</div>
</div>
<div class="container-fluid p-0">
	<div class="row m-0">
		<div class="col-12 p-0 swiper-container swiper-slide-our">
			<div class="swiper-wrapper my-gallery">
			<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-03.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 61%;left: 68%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/bubble-slide">
								<img src="/img/products/carousel/fantasy-air-balloon-circu-magical-furniture.jpg" alt="Fantasy Air Balloon Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>FANTANSY AIR BALLOON </b>crib / bed / sofa</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Bubble Slide is here to add more fun to your kid's bedroom.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'fantasy-air-balloon'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 88%;left: 50%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/sky-rug">
								<img src="/img/products/carousel/sky-rug-circu-magical-furniture.jpg" alt="Sky Rug Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>SKY </b>RUG</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Sky rug is the ideal product for your little pilot’s bedroom. Walking above the clouds is not impossible with a little imagination and also the coolest rug!</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'sky-rug'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 22%;left: 32%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/cloud-lamp-big">
								<img src="/img/products/carousel/cloud-lamp-big-circu-magical-furniture.jpg" alt="Sky Rug Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD BIG </b>LAMP</div>
								<div class="hotspot-description my-2 d-none d-lg-block">This cloud lamp is made in an innovative material, created by Circu, designed in several layers and fine coating with a fire retardant.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-lamp-big'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-02.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 24%;left: 55%;">
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
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 42%;left: 36%;">
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
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 32%;left: 77%;">
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
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 32%;left: 77%;">
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
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 38%;left: 26%;">
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
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 37%;left: 16%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/illusion-table">
								<img src="/img/products/carousel/illusion-table-circu-magical-furniture.jpg" alt="Illusion Table Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>ILLUSION </b>TABLE</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Illusion Table will bring a touch magic to the children's playroom decor. This creative kids' table gives the illusion of being suspended on the air by its translucid acrylic legs.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'illusion-table'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 50%;left: 80%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/little-cloud-nightstand">
								<img src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" alt="Diana Table Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>LITTLE CLOUD </b>nightstand</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Little Cloud Nightstand is a kids’ furniture product inspired by Pixar’s Short film “Partly Cloudy” and it is the perfect storage item for dreamy bedroom decoration.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-cloud-nightstand'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 74%;left: 41%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/cloud-bench-2-seat">
								<img src="/img/products/carousel/cloud-bench-2-seat-circu-magical-furniture.jpg" alt="Cloud Bench 2 Seat Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD 2 SEAT </b>BENCH</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Cloud Seat promises to awaken your children's imagination and increase their creativity.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bench-2-seat'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 45%;left: 8%;">
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
				</div>
				
				<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-05.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 54%;left: 6%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/diana-table-lamp">
								<img src="/img/products/carousel/diana-table-lamp-circu-magical-furniture.jpg" alt="Diana Table Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>DIANA </b>table lamp</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Diana is a vintage table lamp inspired by some of the greatest design classics of the mid-century era. It is a handmade lamp built with materials such as brass and aluminum.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'diana-table-lamp'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 54%;left: 63%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/vixey-bed">
								<img src="/img/products/carousel/vixey-bed-circu-magical-furniture.jpg" alt="Diana Table Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>VIXEY </b>BED</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Inspired by Disney's 1981 classic "The Fox and the Hound", the Vixey Bed is a fun, soft and comfortable kids' bed.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'vixey-bed'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-06.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 66%;left: 25%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/bubble-gum-bench">
								<img src="/img/products/carousel/bubble-gum-bench-circu-magical-furniture.jpg" alt="Bubble Gum Bench Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>BUBBLE GUM </b>bench</div>
								<div class="hotspot-description my-2 d-none d-lg-block">With its creative and trendy round shapes, the Bubble Gum Bench is here to give more sweetness to your kid's room design.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'bubble-gum-benchr'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 68%;left: 37%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/bubble-slide">
								<img src="/img/products/carousel/fantasy-air-balloon-circu-magical-furniture.jpg" alt="Bubble Slide Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>FANTANSY AIR BALLOON </b>crib / bed / sofa</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Bubble Slide is here to add more fun to your kid's bedroom.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'fantasy-air-balloon'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 77%;left: 15%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/bubble-slide">
								<img src="/img/products/carousel/bubble-slide-circu-magical-furniture.jpg" alt="Bubble Slide Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>BUBBLE </b>slide</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Bubble Slide is here to add more fun to your kid's bedroom.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'bubble-slide'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 87%;left: 28%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/bubble-slide">
								<img src="/img/products/carousel/sky-rug-circu-magical-furniture.jpg" alt="Sky Rug Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>SKY </b>RUG</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Sky rug is the ideal product for your little pilot’s bedroom. Walking above the clouds is not impossible with a little imagination and also the coolest rug!</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'sky-rug'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 47%;left: 73%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/cloud-chest-6-drawers">
								<img src="/img/products/carousel/cloud-chest-6-drawers-circu-magical-furniture.jpg" alt="Cloud Chest 6 Drawers Chest Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD CHEST 6 DRAWERS </b>chest</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Cloud Chest of drawers is inspired by Pixar short-film “Party Cloud”, and it's the perfect storage item for whimsical bedroom decoration.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-chest-6-drawers'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 56%;left: 10%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/sky-chest-3-drawers">
								<img src="/img/products/carousel/sky-chest-3-drawers-circu-magical-furniture.jpg" alt="Sky 3 Drawers Chest Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>SKY 3 DRAWERS </b>chest</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Sky Chest is a kids’ chest of drawers inspired by the Disney movie “Planes” and it is the perfect storage item for your aviation inspired bedroom decoration.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'sky-chest-3-drawers'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-07.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 69%;left: 60%;">
						
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/bubble-gum-gym">
								<img src="/img/products/carousel/bubble-gum-gym-circu-magical-furniture.jpg" alt="Bubble Gum Gym Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>BUBBLE GUM </b>GYM</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Inspired by the traditional outdoor playgrounds the Bubble Gum Gym is the product you need to bring adventure and creativity to your children play area.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'bubble-gum-gym'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-08.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 65%;left: 45%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/fantasy-air-balloon">
								<img src="/img/products/carousel/fantasy-air-balloon-circu-magical-furniture.jpg" alt="Fantasy Air Balloon Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>FANTANSY AIR BALLOON </b>crib / bed / sofa</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Bubble Slide is here to add more fun to your kid's bedroom.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'fantasy-air-balloon'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 88%;left: 28%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/bubble-slide">
								<img src="/img/products/carousel/sky-rug-circu-magical-furniture.jpg" alt="Sky Rug Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>SKY </b>RUG</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Sky rug is the ideal product for your little pilot’s bedroom. Walking above the clouds is not impossible with a little imagination and also the coolest rug!</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'sky-rug'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 67%;left: 11%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/cloud-bench-2-seat">
								<img src="/img/products/carousel/cloud-bench-2-seat-circu-magical-furniture.jpg" alt="Cloud Bench 2 Seat Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD 2 SEAT </b>BENCH</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Cloud Seat promises to awaken your children's imagination and increase their creativity.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bench-2-seat'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 54%;left: 88%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/cloud-chest-6-drawers">
								<img src="/img/products/carousel/cloud-chest-6-drawers-circu-magical-furniture.jpg" alt="Cloud Chest 6 Drawers Chest Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD CHEST 6 DRAWERS </b>chest</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Cloud Chest of drawers is inspired by Pixar short-film “Party Cloud”, and it's the perfect storage item for whimsical bedroom decoration.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-chest-6-drawers'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-09.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 57%;left: 59%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/fantasy-air-balloon">
								<img src="/img/products/carousel/fantasy-air-balloon-circu-magical-furniture.jpg" alt="Fantasy Air Balloon Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>FANTANSY AIR BALLOON </b>crib / bed / sofa</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Bubble Slide is here to add more fun to your kid's bedroom.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'fantasy-air-balloon'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 88%;left: 28%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/bubble-slide">
								<img src="/img/products/carousel/sky-rug-circu-magical-furniture.jpg" alt="Sky Rug Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>SKY </b>RUG</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Sky rug is the ideal product for your little pilot’s bedroom. Walking above the clouds is not impossible with a little imagination and also the coolest rug!</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'sky-rug'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 63%;left: 12%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/bubble-slide">
								<img src="/img/products/carousel/bubble-slide-circu-magical-furniture.jpg" alt="Bubble Slide Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>BUBBLE </b>slide</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Bubble Slide is here to add more fun to your kid's bedroom.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'bubble-slide'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 54%;left: 43%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/bubble-gum-bench">
								<img src="/img/products/carousel/bubble-gum-bench-circu-magical-furniture.jpg" alt="Bubble Gum Bench Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>BUBBLE GUM </b>bench</div>
								<div class="hotspot-description my-2 d-none d-lg-block">With its creative and trendy round shapes, the Bubble Gum Bench is here to give more sweetness to your kid's room design.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'bubble-gum-benchr'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 44%;left: 23%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/sky-chest-3-drawers">
								<img src="/img/products/carousel/sky-chest-3-drawers-circu-magical-furniture.jpg" alt="Sky 3 Drawers Chest Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>SKY 3 DRAWERS </b>chest</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Sky Chest is a kids’ chest of drawers inspired by the Disney movie “Planes” and it is the perfect storage item for your aviation inspired bedroom decoration.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'sky-chest-3-drawers'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-10.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 32%;left: 31%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/vixey-bed">
								<img src="/img/products/carousel/vixey-bed-circu-magical-furniture.jpg" alt="Diana Table Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>VIXEY </b>BED</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Inspired by Disney's 1981 classic "The Fox and the Hound", the Vixey Bed is a fun, soft and comfortable kids' bed.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'vixey-bed'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 63%;left: 17%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/fantasy-air-nightstand">
								<img src="/img/products/carousel/fantasy-air-nightstand-circu-magical-furniture.jpg" alt="Fantasy Air Nightstand Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>FANTASY AIR </b>nightstand</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Fantasy Air Nightstand is the perfect piece to complement your kids to dream. Inspired by the world of adventure, this piece is a reference to the Disney movie “Up!”. </div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'fantasy-air-nightstand'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 41%;left: 14%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/diana-table-lamp">
								<img src="/img/products/carousel/diana-table-lamp-circu-magical-furniture.jpg" alt="Diana Table Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>DIANA </b>table lamp</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Diana is a vintage table lamp inspired by some of the greatest design classics of the mid-century era. It is a handmade lamp built with materials such as brass and aluminum.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'diana-table-lamp'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 62%;left: 77%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/cloud-bench-2-seat">
								<img src="/img/products/carousel/cloud-bench-2-seat-circu-magical-furniture.jpg" alt="Cloud Bench 2 Seat Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD 2 SEAT </b>BENCH</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Cloud Seat promises to awaken your children's imagination and increase their creativity.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bench-2-seat'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 87%;left: 62%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/moon-rug">
								<img src="/img/products/carousel/moon-rug-circu-magical-furniture.jpg" alt="Animal Stool Bird Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD </b>mirror</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Moon Rug is the ideal piece for your little astronaut or adventurous kid room.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'moon-rug'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 35%;left: 88%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/hoot-stool">
								<img src="/img/products/carousel/hoot-stool-circu-magical-furniture.jpg" alt="Diana Table Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>HOOT</b>STOOL</div>
								<div class="hotspot-description my-2 d-none d-lg-block">With the shape of an owl, the Hoot Stool represents the spirit of nature. Made with fiberglass and resin, this stool turns every kid's bedroom into a space full of personality and will help children to connect with nature.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'hoot-stool'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 35%;left: 88%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/bubble-gum-desk">
								<img src="/img/products/carousel/bubble-gum-desk-circu-magical-furniture.jpg" alt="Diana Table Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>BUBBLE GUM</b>desk</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Inspired by the sweetness of kids favourite candies our Bubble Gum Desk is specially made to make homework time into a sweet moment for kids.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'bubble-gum-desk'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-11.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 38%;left: 23%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/mermaid-bed">
								<img src="/img/products/carousel/mermaid-bed-circu-magical-furniture.jpg" alt="Little Mermaid Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>LITTLE MERMAID </b>bed</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Little Mermaid is a shell bed, inspired by Disney’s princess Ariel and her undersea kingdom.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'mermaid-bed'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 87%;left: 47%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/moon-rug">
								<img src="/img/products/carousel/moon-rug-circu-magical-furniture.jpg" alt="Animal Stool Bird Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD </b>mirror</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Moon Rug is the ideal piece for your little astronaut or adventurous kid room.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'moon-rug'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 71%;left: 21%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/cloud-nightstand">
								<img src="/img/products/carousel/cloud-nightstand-circu-magical-furniture.jpg" alt="Diana Table Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD </b>nightstand</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Inspired by Disney's 1981 classic "The Fox and the Hound", the Vixey Bed is a fun, soft and comfortable kids' bed.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-nightstand'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 27%;left: 82%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/cloud-mirror">
								<img src="/img/products/carousel/cloud-mirror-circu-magical-furniture.jpg" alt="Animal Stool Bird Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD </b>mirror</div>
								<div class="hotspot-description my-2 d-none d-lg-block">This exquisite mirror is the perfect piece of decoration that will embellish any children’s bedroom.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-mirror'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 55%;left: 77%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/animal-stool-elephant">
								<img src="/img/products/carousel/animal-stool-elephant-circu-magical-furniture.jpg" alt="Animal Stool Elephant Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>ANIMAL ELEPHANT </b>stool</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Animal Stools collection owns an exclusive design that promises to awaken children's friendship with animals.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'animal-stool-elephant'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 47%;left: 68%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/animal-stool-bird">
								<img src="/img/products/carousel/animal-stool-bird-circu-magical-furniture.jpg" alt="Animal Stool Bird Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>ANIMAL BIRD </b>stool</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Animal Stools collection owns an exclusive design that promises to awaken children's friendship with animals.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'animal-stool-bird'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-12.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 41%;left: 20%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/cloud-chest-6-drawers">
								<img src="/img/products/carousel/cloud-chest-6-drawers-circu-magical-furniture.jpg" alt="Cloud Chest 6 Drawers Chest Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD CHEST 6 DRAWERS </b>chest</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Cloud Chest of drawers is inspired by Pixar short-film “Party Cloud”, and it's the perfect storage item for whimsical bedroom decoration.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-chest-6-drawers'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 57%;left: 64%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/pixie-chair">
								<img src="/img/products/carousel/pixie-chair-circu-magical-furniture.jpg" alt="Pixie Chair Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>PIXIE </b>CHAIR</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Inspired by the iconic fairy Tinker Bell, the Pixie Chair is here to add more magic to your room design.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'pixie-chair'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 54%;left: 46%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/illusion-table">
								<img src="/img/products/carousel/illusion-table-circu-magical-furniture.jpg" alt="Illusion Table Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>ILLUSION </b>TABLE</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Illusion Table will bring a touch magic to the children's playroom decor. This creative kids' table gives the illusion of being suspended on the air by its translucid acrylic legs.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'illusion-table'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 72%;left: 46%;">
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
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 73%;left: 86%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/fantasy-air-nightstand">
								<img src="/img/products/carousel/fantasy-air-nightstand-circu-magical-furniture.jpg" alt="Illusion White Bear Chair Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>FANTASY AIR </b>nightstand</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Fantasy Air Nightstand is the perfect piece to complement your kids to dream. Inspired by the world of adventure, this piece is a reference to the Disney movie “Up!”.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'fantasy-air-nightstand'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 63%;left: 33%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/illusion-chair-leopard">
								<img src="/img/products/carousel/illusion-chair-leopard-circu-magical-furniture.jpg" alt="Pixie Chair Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>ILLUSION LEOPARD </b>CHAIR</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Illusion Series brings a touch of magic to the children's playroom decor.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'illusion-chair-leopard'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 54%;left: 72%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/animal-stool-shark">
								<img src="/img/products/carousel/animal-stool-shark-circu-magical-furniture.jpg" alt="Pixie Chair Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>ANIMAL SHARK </b>STOOL</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Animal Stools collection owns an exclusive design that promises to awaken children's friendship with animals.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'animal-stool-shark'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					
				</div>
				<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-13.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 83%;left: 26%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/sky-rug">
								<img src="/img/products/carousel/sky-rug-circu-magical-furniture.jpg" alt="Sky Rug Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>SKY </b>RUG</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Sky rug is the ideal product for your little pilot’s bedroom. Walking above the clouds is not impossible with a little imagination and also the coolest rug!</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'sky-rug'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 38%;left: 23%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/mermaid-bed">
								<img src="/img/products/carousel/mermaid-bed-circu-magical-furniture.jpg" alt="Little Mermaid Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>LITTLE MERMAID </b>bed</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Little Mermaid is a shell bed, inspired by Disney’s princess Ariel and her undersea kingdom.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'mermaid-bed'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 54%;left: 6%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/cloud-nightstand">
								<img src="/img/products/carousel/cloud-nightstand-circu-magical-furniture.jpg" alt="Diana Table Lamp Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD </b>nightstand</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Inspired by Disney's 1981 classic "The Fox and the Hound", the Vixey Bed is a fun, soft and comfortable kids' bed.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-nightstand'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-01.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-04.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 80%;left: 40%;">
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
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 55%;left: 40%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/illusion-table">
								<img src="/img/products/carousel/illusion-table-circu-magical-furniture.jpg" alt="Illusion Table Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>ILLUSION </b>TABLE</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Illusion Table will bring a touch magic to the children's playroom decor. This creative kids' table gives the illusion of being suspended on the air by its translucid acrylic legs.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'illusion-table'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 56%;left: 68%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/pixie-chair">
								<img src="/img/products/carousel/pixie-chair-circu-magical-furniture.jpg" alt="Pixie Chair Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>PIXIE </b>CHAIR</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Inspired by the iconic fairy Tinker Bell, the Pixie Chair is here to add more magic to your room design.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'pixie-chair'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 74%;left: 26%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/illusion-chair-leopard">
								<img src="/img/products/carousel/illusion-chair-leopard-circu-magical-furniture.jpg" alt="Pixie Chair Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>ILLUSION LEOPARD </b>CHAIR</div>
								<div class="hotspot-description my-2 d-none d-lg-block">The Illusion Series brings a touch of magic to the children's playroom decor.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'illusion-chair-leopard'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
					<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 48%;left: 16%;">
						<!-- desktop -->
						<div class="hotspot--cta"></div>
						<div class="hotspot--title text-center" style="top: -215%;left: 105%;">
							<div class="close-hotspot">X</div>
							<a href="https://www.circu.net/products/cloud-chest-6-drawers">
								<img src="/img/products/carousel/cloud-chest-6-drawers-circu-magical-furniture.jpg" alt="Cloud Chest 6 Drawers Chest Circu Magical Furniture" width="364" height="380" class="img-fluid hotspot-img" style="width: auto !important;">
								<div class="hotspot-name"><b>CLOUD CHEST 6 DRAWERS </b>chest</div>
								<div class="hotspot-description my-2 d-none d-lg-block">Cloud Chest of drawers is inspired by Pixar short-film “Party Cloud”, and it's the perfect storage item for whimsical bedroom decoration.</div>
							</a>
							<a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-chest-6-drawers'] )}}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="button-prev arrow-banners">
				<i class="fas fa-chevron-left p-0 pr-2 arrow-banners"></i>
			</div>
			<div class="button-next arrow-banners">
				<i class="fas fa-chevron-right p-0 pl-2 arrow-banners"></i>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid pt-2 p-0 d-block d-md-none">
	<div class="row pb-2 m-0">
		<div class="col-12 swiper-container swiper-banner-mobile">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-01-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-02-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-03-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-04-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-05-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-06-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-07-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-08-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-09-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-10-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-11-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-12-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
				<div class="swiper-slide">
					<img draggable="false" alt="" src="/img/our-houses/new/circu-new-showroom/slides/banner-slide-13-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r imgs-hotspots" />
				</div>
			</div>
			<div class="button-prev arrow-banners">
				<i class="fas fa-chevron-left p-0 pr-2 arrow-banners"></i>
			</div>
			<div class="button-next arrow-banners">
				<i class="fas fa-chevron-right p-0 pl-2 arrow-banners"></i>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid pt-2" style="clear:both;">
	<div class="row pb-2">
		<div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#fff;">
			<div class="col-12 col-xl-11 offset-0 offset-xl-1 py-1">
				<div class="row">
					<div class="col-12 col-lg-6 pl-lg-0 text-center">
						<img src="/img/our-houses/banner-form-pricelist-m.jpg" width="524" height="264" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid text-center">
					</div>
					<div class="col-12 col-lg-6 p-lg-0">
						@include('includes.middle.form-download-pricelist-our-magical')
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-8 p-0 d-none d-lg-block">
			<div class="col-12 p-0">
				<img src="/img/our-houses/banner-form-pricelist.jpg" style="width:100%;" class="img-fluid d-none d-lg-block">
			</div>
			<div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%; transform: translate(0,-50%);">
				@include('includes.middle.form-download-pricelist-our-magical')
			</div>
		</div>
		<div class="col-12 col-lg-4 p-0">
			<a rel="modal:open" href="/ebook/catalogue-circu-magical-furniture">
			<img src="/img/our-houses/banner-catalogue.jpg" alt="Catalogue 2023" width="800" height="800" class="img-fluid" style="width: 100% !important;">
			</a>
		</div>
	</div>
</div>
<!-- Products Desktop -->
<div class="container-fluid pb-2">
	<h2 class="col-12 category_name_title text-center mb-0"><span>OUR MAGICAL PIECES</span></h2>
	<div class="row pt-2 ">
		<div class="col-12 swiper-container swiper-products">
			<div class="swiper-wrapper">
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box swiper-slide">
					<div class="product_thumb py-4 px-3">
						<img src="/img/products/thumbnails/fantasy-air-balloon-lounge-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
						<div class="product--title">
							<span class="name">FANTASY AIR BALLOON</span>
							<span class="sub_category">lounge</span>
						</div>
						<div class="col-12 clearfix position-relative mt-1 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/fantasy-air-balloon-lounge"><span>GET
								<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
						<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
							<img src="/img/icons/product-new.png">
						</div>
						<div class="product-box--content">
							<div>
								<a href="https://www.circu.net/products/fantasy-air-balloon-lounge">
								<img src="/img/products/thumbnails-covers/fantasy-air-balloon-lounge-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-12 clearfix position-relative mt-3 p-0">
								<div class="slideToggle">
									<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/fantasy-air-balloon-lounge"><span>GET
									<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box swiper-slide">
					<div class="product_thumb py-4 px-3">
						<img src="/img/products/thumbnails/bubble-gum-gym-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
						<div class="product--title">
							<span class="name">BUBBLE GUM</span>
							<span class="sub_category">gym</span>
						</div>
						<div class="col-12 clearfix position-relative mt-1 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/bubble-gum-gym"><span>GET
								<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
						<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
							<img src="/img/icons/product-new.png">
						</div>
						<div class="product-box--content">
							<div>
								<a href="https://www.circu.net/products/bubble-gum-gym">
								<img src="/img/products/thumbnails-covers/bubble-gum-gym-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-12 clearfix position-relative mt-3 p-0">
								<div class="slideToggle">
									<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/bubble-gum-gym"><span>GET
									<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box swiper-slide">
					<div class="product_thumb py-4 px-3">
						<img src="/img/products/thumbnails/vixey-bed-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
						<div class="product--title">
							<span class="name">VIXEY</span>
							<span class="sub_category">bed</span>
						</div>
						<div class="col-12 clearfix position-relative mt-1 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/vixey-bed"><span>GET
								<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
						<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
							<img src="/img/icons/product-new.png">
						</div>
						<div class="product-box--content">
							<div>
								<a href="https://www.circu.net/products/vixey-bed">
								<img src="/img/products/thumbnails-covers/vixey-bed-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-12 clearfix position-relative mt-3 p-0">
								<div class="slideToggle">
									<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/vixey-bed"><span>GET
									<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box swiper-slide">
					<div class="product_thumb py-4 px-3">
						<img src="/img/products/thumbnails/pixie-chair-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
						<div class="product--title">
							<span class="name">PIXIE</span>
							<span class="sub_category">chair</span>
						</div>
						<div class="col-12 clearfix position-relative mt-1 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/pixie-chair"><span>GET
								<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
						<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
							<img src="/img/icons/product-new.png">
						</div>
						<div class="product-box--content">
							<div>
								<a href="https://www.circu.net/products/pixie-chair">
								<img src="/img/products/thumbnails-covers/pixie-chair-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-12 clearfix position-relative mt-3 p-0">
								<div class="slideToggle">
									<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/pixie-chair"><span>GET
									<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box swiper-slide">
					<div class="product_thumb py-4 px-3">
						<img src="/img/products/thumbnails/cloud-bench-2-seat-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
						<div class="product--title">
							<span class="name">CLOUD 2 SEAT</span>
							<span class="sub_category">bench</span>
						</div>
						<div class="col-12 clearfix position-relative mt-1 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/cloud-bench-2-seat"><span>GET
								<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
						<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
							<img src="/img/icons/product-new.png">
						</div>
						<div class="product-box--content">
							<div>
								<a href="https://www.circu.net/products/cloud-bench-2-seat">
								<img src="/img/products/thumbnails-covers/cloud-bench-2-seat-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-12 clearfix position-relative mt-3 p-0">
								<div class="slideToggle">
									<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/cloud-bench-2-seat"><span>GET
									<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box swiper-slide">
					<div class="product_thumb py-4 px-3">
						<img src="/img/products/thumbnails/upside-down-rug-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
						<div class="product--title">
							<span class="name">UPSIDE DOWN</span>
							<span class="sub_category">rug</span>
						</div>
						<div class="col-12 clearfix position-relative mt-1 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/upside-down-rug"><span>GET
								<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
						<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
							<img src="/img/icons/product-new.png">
						</div>
						<div class="product-box--content">
							<div>
								<a href="https://www.circu.net/products/upside-down-rug">
								<img src="/img/products/thumbnails-covers/upside-down-rug-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-12 clearfix position-relative mt-3 p-0">
								<div class="slideToggle">
									<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/upside-down-rug"><span>GET
									<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box swiper-slide">
					<div class="product_thumb py-4 px-3">
						<img src="/img/products/thumbnails/illusion-table-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
						<div class="product--title">
							<span class="name">ILLUSION</span>
							<span class="sub_category">table</span>
						</div>
						<div class="col-12 clearfix position-relative mt-1 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/illusion-table"><span>GET
								<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
						<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
							<img src="/img/icons/product-new.png">
						</div>
						<div class="product-box--content">
							<div>
								<a href="https://www.circu.net/products/illusion-table">
								<img src="/img/products/thumbnails-covers/illusion-table-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-12 clearfix position-relative mt-3 p-0">
								<div class="slideToggle">
									<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/illusion-table"><span>GET
									<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box swiper-slide">
					<div class="product_thumb py-4 px-3">
						<img src="/img/products/thumbnails/cloud-chest-6-drawers-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
						<div class="product--title">
							<span class="name">CLOUD 6 DRAWERS</span>
							<span class="sub_category">chest</span>
						</div>
						<div class="col-12 clearfix position-relative mt-1 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/cloud-chest-6-drawers"><span>GET
								<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
						<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
							<img src="/img/icons/product-new.png">
						</div>
						<div class="product-box--content">
							<div>
								<a href="https://www.circu.net/products/cloud-chest-6-drawers">
								<img src="/img/products/thumbnails-covers/cloud-chest-6-drawers-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-12 clearfix position-relative mt-3 p-0">
								<div class="slideToggle">
									<a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/cloud-chest-6-drawers"><span>GET
									<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="button-prev arrow-banners">
				<i class="fas fa-chevron-left p-0 pr-2 arrow-banners"></i>
			</div>
			<div class="button-next arrow-banners">
				<i class="fas fa-chevron-right p-0 pl-2 arrow-banners"></i>
			</div>
		</div>
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
<div class="container-fluid p-0 pb-2 pt-4">
	<div class="col-12 ">
		<h2 class="col-12 name_title text-center mb-0"><span>SEE ALL MAGICAL KIDS BEDROOMS AND PLAYGROUNDS</span></h2>
	</div>
</div>
<div class="container-fluid p-0 pb-2">
	<div class="row m-0">
		<!-- SLIDE DESKTOP -->
		<div class="col-12 owl-rooms owl-carousel owl-slide owl-theme p-0 position-relative ">
			<div class="item">
				<a href="{{route('spaceman-room')}}">
					<img src="/img/our-houses/new/banners-rooms/1.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>GOODNIGHT SPACEMAN</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.caffelattehome.com/an-exceptional-contemporary-modern-16-million-penthouse-in-monaco/" target="_blank">
					<img src="/img/our-houses/new/banners-rooms/2.jpg" width="800" height="900" alt="New Products Collection" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>INSIDE THE CLOUDS</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.covethouse.eu/modern-eclectic-home-decor-by-ptang-studio-limited-and-covet-house/" target="_blank">
					<img src="/img/our-houses/new/banners-rooms/3.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>BUBBLE GUM</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/a-room-above-the-clouds" target="_blank">
					<img src="/img/our-houses/new/banners-rooms/a-room-above-the-clouds.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>A ROOM ABOVE THE CLOUDS</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/dreamhouse-adventures-bedroom" target="_blank">
					<img src="/img/our-houses/new/banners-rooms/16.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>DREAMHOUSE ADVENTURE BEDROOM</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/candyland-playroom" target="_blank">
					<img src="/img/our-houses/new/banners-rooms/15.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>CANDYLAND PLAYROOM</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.covethouse.eu/high-end-contemporary-condo-in-los-angeles-rooms/?vrnotaccess=vrtour&utm_source=website&utm_medium=pagproduct&utm_content=circu-ourmagicalrooms&utm_campaign=ourmagicalrooms" target="_blank">
					<img src="/img/our-houses/new/banners-rooms/14.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>LITTLE RISING STAR</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/an-undersea-adventure-by-bymura" target="_blank">
					<img src="/img/our-houses/new/banners-rooms/13.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>AN UNDERSEA ADVENTURE BY BYMURA</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/an-outer-space-mission-room" target="_blank">
					<img src="/img/our-houses/new/banners-rooms/12.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>AN OUTER SPACE MISSION</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.covethouse.eu/opulent-modern-classic-villa-in-riyadh/?utm_source=website&utm_medium=banner&utm_content=circu-chourhouses-opulentriyadh&utm_campaign=ourmagicalrooms" target="_blank">
					<img src="/img/our-houses/new/banners-rooms/11.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>IN A CLOUDY SKY, BE A GOLDEN STAR</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.covethouse.eu/millionaires-modern-apartment-in-nyc/?utm_source=website&utm_medium=endbanner&utm_content=circu-newcovetnyc&utm_campaign=ourmagicalrooms" target="_blank">
					<img src="/img/our-houses/new/banners-rooms/10.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>MILLIONAIRES MODERN APARTMENT IN NYC</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="{{route('jungle-fun')}}">
					<img src="/img/our-houses/new/banners-rooms/4.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>JUNGLE FUN</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/our-magical-boy-room">
					<img src="/img/our-houses/new/banners-rooms/5.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>LITTLE-BOY</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.covethouse.eu/modern-eclectic-home-decor-by-ptang-studio-limited-and-covet-house/" target="_blank">
					<img src="/img/our-houses/new/banners-rooms/6.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>ROAD TRIP</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/our-magical-girl-room">
					<img src="/img/our-houses/new/banners-rooms/7.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
					<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
						<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>LITTLE-GIRL</span></h2>
						<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
					</div>
				</a>
			</div>
			<div class="item">
				<img src="/img/our-houses/new/banners-rooms/8.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
				<div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
					<h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>GRAPHIC</span></h2>
					<h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>COMING SOON</span></h2>
				</div>
			</div>
		</div>
	</div>
</div>
@include('includes.menu-visual-new')
@endsection
@section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script>
	$(document).ready(function() {
	
	$("video").prop('muted', true);
	
	$("video").click(function() {
	    $(this).prop('muted', !$(this).prop('muted'));
	});
	
	$(".play-video").click(function() {
	    $("video").prop('muted', !$("video").prop('muted'));
	});
	});
	
	
	
	$(document).ready(function() {
	var flag = 0;
	$(".play-video").click(function() {
	    if (flag == 0) {
	        $("#soundimage").attr("src", "/img/about/no-sound.svg");
	        flag = 1;
	    } else if (flag == 1) {
	        $("#soundimage").attr("src", "/img/about/volume-up.svg");
	        flag = 0;
	    }
	});
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
	        $(window).on('load', function() {
	            var swiper_banner = new Swiper('.swiper-slide-our', {
	                centeredSlides: true,
	                spaceBetween: 5,
	                loop: true,
	                autoplay: false,
	                navigation: {
	                    nextEl: '.button-next',
	                    prevEl: '.button-prev',
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
				
	            var swiper_banner_mobile = new Swiper('.swiper-banner-mobile', {
	                centeredSlides: true,
	                spaceBetween: 5,
	                loop: true,
	                autoplay: false,
	                navigation: {
	                    nextEl: '.button-next',
	                    prevEl: '.button-prev',
	                },
	                disableOnInteraction: false,
	                slideToClickedSlide: false,
	                slidesPerView: 1,
	            });
	
	            var swiper_products = new Swiper('.swiper-products', {
	                loop: true,
	                autoplay: true,
	                navigation: {
	                    nextEl: '.button-next',
	                    prevEl: '.button-prev',
	                },
	                slidesPerView: 4,
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
	            var swiper_banner_top = new Swiper('.swiper-banner-top', {
	                loop: true,
	                autoplay: false,
	                navigation: {
	                    nextEl: '.button-next',
	                    prevEl: '.button-prev',
	                },
	                slidesPerView: 1,
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
	          
	        });
	        $('.talk-with-us').click(function() {
	            SnapEngage.startLink();
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
</script>
<script type="text/javascript">
	$('.talk-with-us').click(function() {
	    SnapEngage.startLink();
	});
	jQuery('.form-access-vt input[name="email"]').on('change', function() {
	    jQuery('.formvisible').css('display', 'block');
	});
	
	jQuery('.form-d-block-mobile input[name="email"]').on('change', function() {
	    jQuery('.formvisibleMobile').css('display', 'block');
	});
	
	if ($(window).width() < 514) {
	   $('.card-finish').addClass('f-nav');
	   } else {
	       $('#menu2').removeClass('f-nav');
	   }
	
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
	
	$('.owl-rooms').owlCarousel({
	    loop: true,
	    margin: 3,
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
	            items: 3
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
</script>
@endsection