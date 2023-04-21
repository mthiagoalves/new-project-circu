@extends('layouts.master')
@section('meta')
<title>Circu Magical Furniture - Luxury brand for children</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="Circu Magical Furniture - Luxury brand for children" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="https://www.circu.net/deals" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="https://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection
@section('head-includes')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css">
<link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css">
<link rel="stylesheet" href="https://www.luxxu.net/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
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
	display: none !important;
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
	display: block !important;
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
	.hotspot--cloud-6-drawers {
	top: 5%;
	left: 9%;
	}
	.hotspot--cloud-6-drawers .hotspot--title {
	top: 18%;
	left: 105%;
	}
	.hotspot--cloud-bed {
	top: 21%;
	right: 59%;
	}
	.hotspot--cloud-bed .hotspot--title {
	top: 0%;
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
	.hotspot--fantasy-air-balloon {
	top: 20%;
	right: 37%;
	}
	.hotspot--fantasy-air-balloon .hotspot--title {
	top: 0%;
	right: 105%;
	}
	.hotspot--little-cloud-nightstand {
	bottom: 24%;
	right: 28%;
	}
	.hotspot--little-cloud-nightstand .hotspot--title {
	top: 0%;
	right: 0%;
	}
	/*** ***/
	.hotspot--cloud-shelf-big {
	top: 4%;
	right: 33%;
	}
	.hotspot--cloud-shelf-big .hotspot--title {
	top: 0%;
	left: 105%;
	}
	.hotspot--letter-a {
	top: 33%;
	left: 20%;
	}
	.hotspot--letter-a .hotspot--title {
	top: -142%;
	left: 118%;
	}
	.hotspot---swing {
	bottom: 16%;
	right: 24%;
	}
	.hotspot--booboo-swing .hotspot--title {
	bottom: 0%;
	right: 105%;
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
	}
	.product--title .sub_category {
	text-transform: lowercase;
	}
	@media (max-width:767px) {
	#modal-deals {
	transform: translate(0, -110%);
	}
	}
	@media (max-width:325px) {
	#modal-deals {
	transform: translate(0, -100%);
	}
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
	.slick-slide {
	padding: 0px 3px;
	cursor: pointer;
	}
	/* --------------- linha de produtos --------------- */
	@media (max-width: 800px) {
	.title-banner-rooms {
	bottom: 2% !important;
	}
	.title-banner-rooms p {
	color: #fff;
	font-size: 20px;
	font-weight: 700;
	}
	}
	.hotspot--sky-nightstand {
	top: 60%;
	right: 31%;
	}
	.hotspot--sky-nightstand .hotspot--title {
	bottom: -15%;
	right: 105%;
	}
	.hotspot--stellar-round-rug {
	bottom: 17%;
	left: 36%;
	}
	.hotspot--stellar-round-rug .hotspot--title {
	bottom: -15%;
	right: 105%;
	}
	.hotspot--atomic-wall-lamp {
	top: 17%;
	left: 33%;
	}
	.hotspot--atomic-wall-lamp .hotspot--title {
	top: 18%;
	left: 105%;
	}
	button:focus {
	outline: 0;
	}
	.btn-white-underline,
	.btn-white-underline:hover {
	font-size: 12px;
	letter-spacing: 1px;
	padding: 5px 20px 4px;
	margin: 12px auto 0px;
	z-index: 2;
	background-color: #fff;
	color: #98b9b5;
	border: 1px solid #fff;
	display: inline-block;
	}
	.btn-green-underline,
	.btn-green-underline:hover {
	font-size: 12px;
	letter-spacing: 1px;
	padding: 5px 20px 4px;
	margin: 12px auto 0px;
	z-index: 2;
	background-color: #98b9b5;
	color: #fff;
	border: 1px solid #98b9b5;
	display: inline-block;
	}
	/* -------------------- formulario VT -------------------- */
	.text-1-title {
	text-transform: uppercase;
	color: #fff !important;
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
	color: #fff !important;
	font-size: 22px;
	font-weight: bold;
	text-align: center;
	}
	.text-2-title {
	text-transform: inherit;
	color: #fff;
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
	color: #fff;
	font-size: 13px;
	}
	.text-3-title {
	text-transform: uppercase;
	color: #8c8c8c;
	font-size: 11px;
	font-weight: bold;
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
	font-size: 13px;
	letter-spacing: 0.5px;
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
	/* -------------------- formulario VT -------------------- */
	.pswp {
	z-index: 10052;
	}
	.swiper-ambients .arrow-banners {
	color: white;
	opacity: 50%;
	background-image: none !important;
	-webkit-transition: opacity .50s ease-in-out;
	-moz-transition: opacity .50s ease-in-out;
	-ms-transition: opacity .50s ease-in-out;
	-o-transition: opacity .50s ease-in-out;
	transition: opacity .50s ease-in-out;
	}
	.swiper-ambients .arrow-banners:hover {
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
<div class="container-fluid p-0">
	<div class="row m-0 p-0">
		<div class="col-12 p-0">
			<img src="/img/landing/isaloni/banner/isaloni-milan-banner-d.jpg" alt="Circu Magical World"
				class="cd-dot img-fluid d-none d-sm-block" style="width:100%;">
			<div class="col-12 pt-4 text-center position-absolute" style="flex-basis: auto;cursor: pointer;bottom:3%;">
				<p class="subtitle text-center mb-1 text-uppercase" style="font-size: 1.1rem;color:#fff;">
					<b>Come Visit our Magical World at Salone del Mobile Milano</b>
				</p>
				<p class="subtitle text-center mb-0 text-uppercase" style="font-size: 0.95rem;color:#fff;">
					<b>18th - 23rd April 2023 | Pav.: 3 <br class="d-block d-sm-none"> Stand: G24 - G28</b>
				</p>
			</div>
			<img src="/img/landing/isaloni/banner/isaloni-milan-banner-m.jpg" width="550" height="650"
				alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none" style="width:100%;">
		</div>
	</div>
	<div class="row m-0 justify-content-center mt-4 mb-2">
		<div class="col-12 col-md-5 text-center">
			<p style="font-size: 14px; color: #666 !important;">The most awaited furniture event is coming. Salone Del Mobile Milano, a reference in the interior design world, will open doors from the 18th to the 23rd of April, and Circu will be there to showcase its most famous, but also newest pieces. Meet us at Pav.: 3 / Stand: G24 - G28 and get the opportunity to discover our magical universe!
			</p>
		</div>
	</div>
	<div class="row m-0 justify-content-center mb-4 mt-0">
		<div class="col-12 col-md-5 text-center">
			<a rel="modal:open" href="https://www.circu.net/includes/modal-download-ebooks/new-products-2023" style="font-size: 12px; letter-spacing: 1px; padding: 5px 26px 4px; margin: 0px 10px; z-index: 2; background-color: #98b9b5; color: #FFFFFF; border: 1px solid #98b9b5; display: inline-block;">DOWNLOAD EBOOK</a>
			<a rel="modal:open" href="{{ route('modal-download-pricelist') }}" style="font-size: 12px; letter-spacing: 1px; padding: 5px 20px 4px; margin: 0px 10px; z-index: 2; background-color: #98b9b5; color: #FFFFFF; border: 1px solid #98b9b5; display: inline-block;">DOWNLOAD PRICELIST</a>
		</div>
	</div>
	{{-- 
	<div class="row m-0 justify-content-center my-4" style="background-color: #95b7b4;">
		<div class="col-12 col-md-5 text-center py-5">
			<p style="color:white;font-size:1.1rem;">DON'T BE SHY, GET TO KNOW US PERSONALLY. SCHEDULE YOUR MEETING
				RIGHT NOW.
			</p>
			<a rel="modal:open" href="{{ route('modal-book-a-meeting') }}" class="btn-white-underline m-0">GET A
			MEETING <i class="fas fa-caret-right"></i></a>
		</div>
	</div>
	--}}
</div>
<div class="container-fluid my-2" style="background-color:#f7f7f7;">
	<div class="row m-0 p-0">
		<div class="col-12 p-0">
			<div class="row">
				<div class="col-12 col-md-7 p-0">
					<img src="/img/isaloni-form.jpg" class="img-fluid img-height d-none d-md-block" alt="Isaloni Virtual Tour Circu" style="width: 100%;">
					<img src="/img/isaloni-form-m.jpg" class="img-fluid img-height-mobile d-block d-md-none" alt="Isaloni Virtual Tour Circu" style="width: 100%;">
					<div class="col-12 p-0 px-3 px-md-5 position-absolute " style="top:0;left:0;height: 100%;">
						<div class="row m-0 p-0 justify-content-center align-items-center div-text-banner-center" style="height: 100%;">
							<div class="col-12 p-0 div-text-banner-center-paddings">
								<div class="col-12 p-0">
									<p class="text-1-title">VIRTUAL TOUR EXPERIENCE</p>
								</div>
								<div class="col-12 p-0">
									<p class="text-2-title">CIRCU was built under a dream! The dream is to allow children to live their own fantasies and create a magical world for them to fly under an imagination that has no limit and we will bring ou magical world to this year Salone del Mobile! Discover hundreds of magical new products through a virtual tour of our stand in Milano.<br class="d-none d-md-block"> 
										You can't buy happiness but you can buy CIRCU, that's kind of the same thing! Visit now for yourself or book a virtual meeting to know more about ongoing campaigns.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-5 p-1 p-md-4 p-md-0 div-form-ourhouses section-form" style="background-color: #fafafa;">
					<div class="row m-0 p-0 justify-content-center align-items-center" style="height:100%;">
						<div class="col-12 px-3 px-md-1">
							<h1 style="color: #9bbfbd !important;">EXPLORE <b>THE FULL PROJECT</b></h1>
							@include('includes.form-vt-isaloni')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid text-center p-0 swiper-ambients mb-4">
	<div class="col-12 swiper-container">
		<div class="swiper-wrapper my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-1.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-1.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-1-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 20%; left: 20%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/vixey-bed">
								<img draggable="false" alt="vixey bed circu magical furniture kids bed" src="/img/products/carousel/vixey-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>Vixey</b>
									bed
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'vixey-bed']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 23%; left: 74%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-gum-big-mirror">
								<img draggable="false" alt="bubble gum big mirror circu magical furniture kids mirror" src="/img/products/carousel/bubble-gum-big-mirror-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>Bubble Gum Big</b>
									mirror
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-gum-big-mirror']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 20%; left: 48%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-shelf-small">
								<img draggable="false" alt="cloud shelf small circu magical furniture kids shelf" src="/img/products/carousel/cloud-shelf-small-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud small</b>
									shelf
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-shelf-small']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 80%; left: 8%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/little-cloud-nightstand">
								<img draggable="false" alt="little cloud nightstand circu magical furniture kids" src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>little cloud</b>
									nightstand
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'little-cloud-nightstand']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>

			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-26.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-26.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-26-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 10%; left: 35%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-lamp-big">
								<img draggable="false" alt="cloud big suspension lamp circu magical furniture kids bed" src="/img/products/carousel/cloud-lamp-big-circu-magical-furniture.gif" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud big</b>
									suspension lamp
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-lamp-big']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 63%; left: 60%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-shelf-big">
								<img draggable="false" alt="fantasy air  big shelf circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-shelf-big-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air big</b>
									shelf
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-shelf-big']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 35%; left: 75%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-shelf-small">
								<img draggable="false" alt="fantasy air small shelf circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-shelf-small-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air small</b>
									shelf
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-shelf-small']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-25.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-25.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-25-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 20%; left: 20%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/diana-table-lamp">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/diana-table-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>diana </b>
									table lamp
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'diana-table-lamp']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 55%; left: 35%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-nightstand">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air </b>
									nightstand
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-nightstand']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 40%; left: 66%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-balloon">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-balloon-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air balloon</b>
									crib/bed/sofa
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-balloon']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 60%; left: 8%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-stool-puff">
								<img draggable="false" alt="cloud stool puff circu magical furniture kids" src="/img/products/carousel/cloud-stool-puff-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud puff</b>
									stool
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-stool-puff']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-5.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-5.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-5-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 20%; left: 20%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-gum-gym">
								<img draggable="false" alt="vixey-bed circu magical furniture kids bed" src="/img/products/carousel/bubble-gum-gym-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>bubble gum</b>
									gym
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-gum-gym']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 72%; left: 70%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/mr-bunny-bed">
								<img draggable="false" alt="vixey-bed circu magical furniture kids bed" src="/img/products/carousel/mr-bunny-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>mr bunny</b>
									bed
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'mr-bunny-bed']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 48%; left: 57%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-gum-desk">
								<img draggable="false" alt="bubble gum desk circu magical furniture kids" src="/img/products/carousel/bubble-gum-desk-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>bubble gum</b>
									desk
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-gum-desk']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 58%; left: 87%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-nightstand">
								<img draggable="false" alt="cloud nightstand circu magical furniture kids bed" src="/img/products/carousel/cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud</b>
									nightstand
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-nightstand']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 78%; left: 91%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-drop">
								<img draggable="false" alt="bubble drop circu magical furniture kids bed" src="/img/products/carousel/bubble-drop-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>bubble drop</b>
									play and fun
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-drop']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 5%; left: 60%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/atomic-round-suspension-lamp">
								<img draggable="false" alt="atomic round suspension lamp circu magical furniture kids bed" src="/img/products/carousel/atomic-round-suspension-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>atomic round</b>
									suspension lamp
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'atomic-round-suspension-lamp']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 15%; left: 90%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/atomic-wall-lamp">
								<img draggable="false" alt="atomic wall lamp circu magical furniture kids bed" src="/img/products/carousel/atomic-wall-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>atomic</b>
									wall lamp
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'atomic-wall-lamp']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-24.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-24.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-24-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 80%; left: 23%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/hoot-stool">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/hoot-stool-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>hoot</b>
									stool
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'hoot-stool']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 60%; left: 40%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-mirror">
								<img draggable="false" alt="cloud mirror circu magical furniture kids" src="/img/products/carousel/cloud-mirror-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud</b>
									mirror
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-mirror']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 70%; left: 65%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/sky-one-plane-bed">
								<img draggable="false" alt="sky one plane circu magical furniture kids bed" src="/img/products/carousel/sky-one-plane-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>sky one plane</b>
									bed
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'sky-one-plane-bed']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 10%; left: 55%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-lamp-big">
								<img draggable="false" alt="cloud big suspension lamp circu magical furniture kids bed" src="/img/products/carousel/cloud-lamp-big-circu-magical-furniture.gif" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud big</b>
									suspension lamp
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-lamp-big']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 43%; left: 60%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-shelf-big">
								<img draggable="false" alt="fantasy air  big shelf circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-shelf-big-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air big</b>
									shelf
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-shelf-big']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 33%; left: 70%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-shelf-small">
								<img draggable="false" alt="fantasy air small shelf circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-shelf-small-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air small</b>
									shelf
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-shelf-small']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-23.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-23.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-23-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 35%; left: 65%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/diana-table-lamp">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/diana-table-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>diana </b>
									table lamp
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'diana-table-lamp']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 55%; left: 65%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-nightstand">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air </b>
									nightstand
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-nightstand']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 85%; left: 50%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/sky-rug">
								<img draggable="false" alt="sky rug circu magical furniture kids" src="/img/products/carousel/sky-rug-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>sky</b>
									rug
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'sky-rug']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 60%; left: 10%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-stool-puff">
								<img draggable="false" alt="cloud stool puff circu magical furniture kids" src="/img/products/carousel/cloud-stool-puff-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud puff</b>
									stool
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-stool-puff']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-22.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-22.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-22-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 20%; left: 48%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-gum-gym">
								<img draggable="false" alt="cloud shelf small circu magical furniture kids shelf" src="/img/products/carousel/bubble-gum-gym-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>bubble gum</b>
									gym
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-gum-gym']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-21.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-21.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-21-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 65%; left: 48%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-gum-gym">
								<img draggable="false" alt="cloud shelf small circu magical furniture kids shelf" src="/img/products/carousel/bubble-gum-gym-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>bubble gum</b>
									gym
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-gum-gym']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-20.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-20.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-20-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 40%; left: 26%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-gum-desk">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/bubble-gum-desk-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>bubble gum</b>
									desk
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-gum-desk']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-19.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-19.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-19-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 40%; left: 86%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-bookcase-limited-edition">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-bookcase-limited-edition-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air </b>
									bookcase limited edition
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-bookcase-limited-edition']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 20%; left: 26%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-balloon">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-balloon-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air balloon</b>
									crib/bed/sofa
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-balloon']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 80%; left: 20%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/sky-rug">
								<img draggable="false" alt="sky rug circu magical furniture kids" src="/img/products/carousel/sky-rug-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>sky</b>
									rug
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'sky-rug']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 70%; left: 10%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-stool-puff">
								<img draggable="false" alt="cloud stool puff circu magical furniture kids" src="/img/products/carousel/cloud-stool-puff-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud puff</b>
									stool
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-stool-puff']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-18.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-18.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-18-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 20%; left: 48%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-gum-gym">
								<img draggable="false" alt="cloud shelf small circu magical furniture kids shelf" src="/img/products/carousel/bubble-gum-gym-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>bubble gum</b>
									gym
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-gum-gym']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-17.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-17.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-17-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 60%; left: 15%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/vixey-bed">
								<img draggable="false" alt="vixey bed circu magical furniture kids bed" src="/img/products/carousel/vixey-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>Vixey</b>
									bed
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'vixey-bed']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 20%; left: 48%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-gum-big-mirror">
								<img draggable="false" alt="cloud shelf small circu magical furniture kids shelf" src="/img/products/carousel/bubble-gum-big-mirror-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>bubble gum big</b>
									mirror
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-gum-big-mirror']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-16.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-16.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-16-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 20%; left: 50%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/vixey-bed">
								<img draggable="false" alt="vixey bed circu magical furniture kids bed" src="/img/products/carousel/vixey-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>Vixey</b>
									bed
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'vixey-bed']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 80%; left: 8%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/little-cloud-nightstand">
								<img draggable="false" alt="little cloud nightstand circu magical furniture kids" src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>little cloud</b>
									nightstand
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'little-cloud-nightstand']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>

			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-2.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-2.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-2-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 20%; left: 20%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-balloon">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-balloon-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air balloon</b>
									crib/bed/sofa
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-balloon']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 80%; left: 20%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/sky-rug">
								<img draggable="false" alt="sky rug circu magical furniture kids" src="/img/products/carousel/sky-rug-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>sky</b>
									rug
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'sky-rug']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 70%; left: 10%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-stool-puff">
								<img draggable="false" alt="cloud stool puff circu magical furniture kids" src="/img/products/carousel/cloud-stool-puff-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud puff</b>
									stool
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-stool-puff']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-3.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-3.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-3-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 80%; left: 15%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/hoot-stool">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/hoot-stool-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>hoot</b>
									stool
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'hoot-stool']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 60%; left: 38%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-mirror">
								<img draggable="false" alt="cloud mirror circu magical furniture kids" src="/img/products/carousel/cloud-mirror-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud</b>
									mirror
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-mirror']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 70%; left: 65%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/sky-one-plane-bed">
								<img draggable="false" alt="sky one plane circu magical furniture kids bed" src="/img/products/carousel/sky-one-plane-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>sky one plane</b>
									bed
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'sky-one-plane-bed']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 10%; left: 55%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-lamp-big">
								<img draggable="false" alt="cloud big suspension lamp circu magical furniture kids bed" src="/img/products/carousel/cloud-lamp-big-circu-magical-furniture.gif" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud big</b>
									suspension lamp
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-lamp-big']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 30%; left: 60%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-shelf-big">
								<img draggable="false" alt="fantasy air  big shelf circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-shelf-big-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air big</b>
									shelf
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-shelf-big']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 25%; left: 70%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-shelf-small">
								<img draggable="false" alt="fantasy air small shelf circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-shelf-small-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air small</b>
									shelf
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-shelf-small']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-4.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-4.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-4-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 10%; left: 20%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/atomic-round-suspension-lamp">
								<img draggable="false" alt="atomic round suspension lamp circu magical furniture kids bed" src="/img/products/carousel/atomic-round-suspension-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>atomic round</b>
									suspension lamp
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'atomic-round-suspension-lamp']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 25%; left: 90%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/atomic-wall-lamp">
								<img draggable="false" alt="atomic wall lamp circu magical furniture kids bed" src="/img/products/carousel/atomic-wall-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>atomic</b>
									wall lamp
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'atomic-wall-lamp']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 45%; left: 25%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/mr-bunny-bed">
								<img draggable="false" alt="mr bunny bed circu magical furniture kids bed" src="/img/products/carousel/mr-bunny-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>mr. bunny</b>
									bed
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'mr-bunny-bed']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 65%; left: 73%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-nightstand">
								<img draggable="false" alt="cloud nightstand circu magical furniture kids bed" src="/img/products/carousel/cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud</b>
									nightstand
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-nightstand']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 80%; left: 80%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-drop">
								<img draggable="false" alt="bubble drop circu magical furniture kids bed" src="/img/products/carousel/bubble-drop-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>bubble drop</b>
									play and fun
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-drop']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-6.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-6.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-6-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 9%; left: 25%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-mirror">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/cloud-mirror-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud</b>
									mirror
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-mirror']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 80%; left: 20%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/sky-one-plane-bed">
								<img draggable="false" alt="sky bed circu magical furniture kids" src="/img/products/carousel/sky-one-plane-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>sky one plane</b>
									bed
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'sky-one-plane-bed']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-7.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-7.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-7-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 45%; left: 25%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-slide">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/bubble-slide-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>bubble slide</b>
									play and fun
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-slide']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 53%; left: 65%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="bottom:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-drop">
								<img draggable="false" alt="sky bed circu magical furniture kids" src="/img/products/carousel/bubble-drop-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>bubble drop</b>
									play and fun
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-drop']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-8.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-8.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-8-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-9.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-9.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-9-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 11%; left: 35%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/bubble-gum-desk">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/bubble-gum-desk-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>bubble gum</b>
									desk
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-gum-desk']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-10.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-10.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-10-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 11%; left: 35%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/mr-bunny-bed">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/mr-bunny-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>mr. bunny </b>
									bed
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'mr-bunny-bed']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-11.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-11.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-11-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 11%; left: 35%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/diana-table-lamp">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/diana-table-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>diana </b>
									table lamp
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'diana-table-lamp']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 55%; left: 15%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-nightstand">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air </b>
									nightstand
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-nightstand']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-12.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-12.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-12-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 11%; left: 57%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/fantasy-air-bookcase-limited-edition">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/fantasy-air-bookcase-limited-edition-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>fantasy air </b>
									bookcase limited edition
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'fantasy-air-bookcase-limited-edition']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-13.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-13.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-13-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-14.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-14.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-14-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 11%; left: 57%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/periwinkle-wall-lamp">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/periwinkle-wall-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>periwinkle</b>
									wall lamp
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'periwinkle-wall-lamp']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
			<figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
				<a href="/img/landing/isaloni/slide/zoom/isaloni-circu-magical-furniture-15.jpg" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-15.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
				<img draggable="false" alt="Isaloni Circu" src="/img/landing/isaloni/slide/banners/isaloni-circu-magical-furniture-15-m.jpg" itemprop="thumbnail" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
				</a>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 11%; left: 37%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;left:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/mr-bunny-bed">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/mr-bunny-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>mr. bunny</b>
									bed
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'mr-bunny-bed']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 48%; left: 67%;">
					<div class="hotspot--cta"></div>
					<div class="hotspot--title text-center d-block" style="top:5%;right:105%;">
						<div class="close-hotspot">X</div>
						<div class="col-12 p-0">
							<a href="https://www.circu.net/products/cloud-nightstand">
								<img draggable="false" alt="fantasy air balloon circu magical furniture kids bed" src="/img/products/carousel/cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
								<div class="hotspot-name"><b>cloud</b>
									nightstand
								</div>
							</a>
						</div>
						<div class="col-12 p-0">
							<a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-nightstand']) }}">
								<div class="hotspot-get-price"><span>GET PRICE</span></div>
							</a>
						</div>
					</div>
				</div>
			</figure>
		</div>
		<div class="swiper-button-prev arrow-banners"></div>
		<div class="swiper-button-next arrow-banners"></div>
	</div>
</div>
<div class="container-fluid py-2">
	<div class="col-12 p-0">
		<h2 class="col-12 category_name_title text-center mb-0"><span>SHOWCASE PRODUCTS</span></h2>
	</div>
	<div class="row grid-showcase">
		<?php $number = 0; ?>
		@foreach ($products_showcase as $product)
		<?php $number++; ?>
		@if ($number < 9)
		<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box element-item element-item-showcase">
			<div class="product_thumb py-4">
				@if(file_exists('./img/products/thumbnails/'.$product->slug.'-circu-magical-furniture.png'))
				@if($product->slug == 'rainbow-sofa')
				<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture-pink.png" width="960" height="800" class="img-fluid">
				@else
				<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
				@endif
				@else
				<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
				@endif
				<div class="product--title">
					<span class="name">{{ $product->name }}</span>
					<br class="d-block d-lg-none">
					<span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
				</div>
				<div class="col-12 clearfix position-relative mt-1 p-0">
					<div class="slideToggle">
						<a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
					</div>
				</div>
				@if( $product->is_new && ($product->slug == "bubble-gum-bed") || ($product->slug == "bubble-gum-bench") || ($product->slug == "bubble-gum-dressing-table") || ($product->slug == "bubble-gum-chest-3-drawers") || ($product->slug == "bubble-gum-chest-2-drawers") || ($product->slug == "bubble-gum-desk") || ($product->slug == "bubble-slide") || ($product->slug == "bubble-loop") || ($product->slug == "bubble-drop") || ($product->slug =="bubble-gum-playground") || ($product->slug == "bubble-gum-big-mirror") || ($product->slug == "bubble-gum-small-mirror") || ($product->slug == "cotton-candy-sofa") || ($product->slug == "rainbow-sofa"))
				<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
					<img src="/img/icons/product-new-collection.png">
				</div>
				@elseif($product->is_new)
				<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
					<img src="/img/icons/product-new.png">
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
						@if($product_sample->is_options == null)
						<div class="d-inline text-center">
							<img src="/img/icons/finishes/{{$product_sample->sample->slug}}-sm.png" width="20" height="20" alt="" class="img-fluid">
						</div>
						@endif
						@endforeach
					</div>
					@else
					<div>
						<a href="{{ route('product', ['product' => $product->slug]) }}">
						<img src="/img/products/thumbnails-covers/{{ $product->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
						</a>
					</div>
					@endif
					<!-- <div class="product--title my-2"> 
						<span class="name">{{ $product->name }}</span>  
						<span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span> 
						</div> -->
					<div class="col-12 clearfix position-relative mt-3 p-0">
						<div class="slideToggle">
							<a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@elseif($number >= 9)
		@if ($number == 9)
		<div id="demo-stock2" class="container-fluid m-0 p-0 showcase collapse">
			<div class="row grid-showcase2">
				@endif
				<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box element-item element-item-showcase">
					<div class="product_thumb py-4">
						@if(file_exists('./img/products/thumbnails/'.$product->slug.'-circu-magical-furniture.png'))
						@if($product->slug == 'rainbow-sofa')
						<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture-pink.png" width="960" height="800" class="img-fluid">
						@else
						<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
						@endif
						@else
						<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
						@endif
						<div class="product--title">
							<span class="name">{{ $product->name }}</span>
							<br class="d-block d-lg-none">
							<span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
						</div>
						<div class="col-12 clearfix position-relative mt-1 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
						@if( $product->is_new && ($product->slug == "bubble-gum-bed") || ($product->slug == "bubble-gum-bench") || ($product->slug == "bubble-gum-dressing-table") || ($product->slug == "bubble-gum-chest-3-drawers") || ($product->slug == "bubble-gum-chest-2-drawers") || ($product->slug == "bubble-gum-desk") || ($product->slug == "bubble-slide") || ($product->slug == "bubble-loop") || ($product->slug == "bubble-drop") || ($product->slug =="bubble-gum-playground") || ($product->slug == "bubble-gum-big-mirror") || ($product->slug == "bubble-gum-small-mirror") || ($product->slug == "cotton-candy-sofa") || ($product->slug == "rainbow-sofa"))
						<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
							<img src="/img/icons/product-new-collection.png">
						</div>
						@elseif($product->is_new)
						<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
							<img src="/img/icons/product-new.png">
						</div>
						@endif
						<div class="product-box--content">
							<div>
								<a href="{{ route('product', ['product' => $product->slug]) }}">
								<img src="/img/products/thumbnails-covers/{{ $product->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-12 clearfix position-relative mt-3 p-0">
								<div class="slideToggle">
									<a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@if ($loop->last)
			</div>
		</div>
		<div
			class="element-item element-item-showcase col-12 pt-3 float-left d-flex align-items-center justify-content-center showcase">
			<a data-toggle="collapse" data-target="#demo-stock2" style="text-decoration: none !important;">
			<button style="max-width:100%; font-size:12px;cursor:pointer;" type="button" data-text=""
				class="btn-green-underline m-0 col-12 border-0">SHOW MORE <i class="fas fa-caret-right"></i></button>
			</a>
		</div>
		@endif
		@endif
		@endforeach
	</div>
</div>
<div class="container-fluid pt-4 pb-2">
	<div class="col-12 p-0">
		<h2 class="col-12 category_name_title text-center mb-0"><span>NEW PRODUCTS</span></h2>
	</div>
	<div class="row grid-new">
		<?php $number = 0; ?>
		@foreach ($products_newproducts as $product)
		<?php $number++; ?>
		@if ($number < 9)
		<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box element-item element-item-new">
			<div class="product_thumb py-4">
				@if(file_exists('./img/products/thumbnails/'.$product->slug.'-circu-magical-furniture.png'))
				@if($product->slug == 'rainbow-sofa')
				<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture-pink.png" width="960" height="800" class="img-fluid">
				@else
				<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
				@endif
				@else
				<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
				@endif
				<div class="product--title">
					<span class="name">{{ $product->name }}</span>
					<br class="d-block d-lg-none">
					<span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
				</div>
				<div class="col-12 clearfix position-relative mt-1 p-0">
					<div class="slideToggle">
						<a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
					</div>
				</div>
				@if( $product->is_new && ($product->slug == "bubble-gum-bed") || ($product->slug == "bubble-gum-bench") || ($product->slug == "bubble-gum-dressing-table") || ($product->slug == "bubble-gum-chest-3-drawers") || ($product->slug == "bubble-gum-chest-2-drawers") || ($product->slug == "bubble-gum-desk") || ($product->slug == "bubble-slide") || ($product->slug == "bubble-loop") || ($product->slug == "bubble-drop") || ($product->slug =="bubble-gum-playground") || ($product->slug == "bubble-gum-big-mirror") || ($product->slug == "bubble-gum-small-mirror") || ($product->slug == "cotton-candy-sofa") || ($product->slug == "rainbow-sofa"))
				<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
					<img src="/img/icons/product-new-collection.png">
				</div>
				@elseif($product->is_new)
				<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
					<img src="/img/icons/product-new.png">
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
						@if($product_sample->is_options == null)
						<div class="d-inline text-center">
							<img src="/img/icons/finishes/{{$product_sample->sample->slug}}-sm.png" width="20" height="20" alt="" class="img-fluid">
						</div>
						@endif
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
							<a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@elseif($number >= 9)
		@if ($number == 9)
		<div id="demo-stock" class="col-12 m-0 p-0 new-procuct collapse">
			<div class="row m-0 grid-new2">
				@endif
				<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box element-item element-item-new">
					<div class="product_thumb py-4">
						@if(file_exists('./img/products/thumbnails/'.$product->slug.'-circu-magical-furniture.png'))
						@if($product->slug == 'rainbow-sofa')
						<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture-pink.png" width="960" height="800" class="img-fluid">
						@else
						<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
						@endif
						@else
						<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
						@endif
						<div class="product--title">
							<span class="name">{{ $product->name }}</span>
							<br class="d-block d-lg-none">
							<span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
						</div>
						<div class="col-12 clearfix position-relative mt-1 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
						@if( $product->is_new && ($product->slug == "bubble-gum-bed") || ($product->slug == "bubble-gum-bench") || ($product->slug == "bubble-gum-dressing-table") || ($product->slug == "bubble-gum-chest-3-drawers") || ($product->slug == "bubble-gum-chest-2-drawers") || ($product->slug == "bubble-gum-desk") || ($product->slug == "bubble-slide") || ($product->slug == "bubble-loop") || ($product->slug == "bubble-drop") || ($product->slug =="bubble-gum-playground") || ($product->slug == "bubble-gum-big-mirror") || ($product->slug == "bubble-gum-small-mirror") || ($product->slug == "cotton-candy-sofa") || ($product->slug == "rainbow-sofa"))
						<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
							<img src="/img/icons/product-new-collection.png">
						</div>
						@elseif($product->is_new)
						<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
							<img src="/img/icons/product-new.png">
						</div>
						@endif
						<div class="product-box--content">
								<div>
									<a href="{{ route('product', ['product' => $product->slug]) }}">
										<img src="/img/products/thumbnails-covers/{{ $product->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
									</a>
								</div>
								<div class="col-12 clearfix position-relative mt-3 p-0">
									<div class="slideToggle">
										<a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
									</div>
								</div>
						</div>
					</div>
				</div>
				@if ($loop->last)
			</div>
		</div>
		<div
			class="element-item element-item-new col-12 pt-3 float-left d-flex align-items-center justify-content-center new-procuct">
			<a data-toggle="collapse" data-target="#demo-stock" style="text-decoration: none !important;">
			<button style="max-width:100%; font-size:12px;cursor:pointer;" type="button" data-text=""
				class="btn-green-underline m-0 col-12 border-0">SHOW MORE <i class="fas fa-caret-right"></i></button>
			</a>
		</div>
		@endif
		@endif
		@endforeach
	</div>
</div>
<div class="container-fluid p-0 py-5">
	<div class="row m-0 justify-content-center">
		<div class="col-12 col-md-8">
			<div class="col-12 p-0">
				<div class="row m-0">
					<div class="col-12 col-md-6">
						<div class="col-12 p-0">
							<a href="https://blog.circu.net/interior-design/where-dreams-come-true-kids-furniture-designs-inspired-by-disney-movies/"
								target="_blank">
							<img src="/img/landing/isaloni/articles/isaloni-2022-guide-luxury-interior-design-event.jpg"
								alt="Isaloni 2022 Guide Luxury Interior Design Event" class="img-fluid">
							</a>
						</div>
						<div class="col-12 text-center">
							<p class="py-3" style="font-size: 1rem;font-weight: 600;margin: 0;">KIDS’ FURNITURE DESIGNS INSPIRED BY DISNEY MOVIES
							</p>
							<a href="https://blog.circu.net/interior-design/where-dreams-come-true-kids-furniture-designs-inspired-by-disney-movies/"
								target="_blank" class="btn-green-underline mt-0" style="color:#fff;">DISCOVER NOW</a>
						</div>
					</div>
					<div class="col-12 col-md-6 pt-5 pt-md-0">
						<div class="col-12 p-0">
							<a href="https://blog.circu.net/lifestyle/milan-design-week-5-things-to-do-with-your-kids/" target="_blank">
							<img src="/img/landing/isaloni/articles/isaloni-2022-milan-city-guide.jpg"
								alt="Isaloni 2022 Guide Luxury Interior Design Event" class="img-fluid">
							</a>
						</div>
						<div class="col-12 text-center">
							<p class="py-3" style="font-size: 1rem;font-weight: 600;margin: 0;">MILAN DESIGN WEEK: 5 THINGS TO DO WITH YOUR KIDS
							</p>
							<a href="https://blog.circu.net/lifestyle/milan-design-week-5-things-to-do-with-your-kids/" target="_blank"
								class="btn-green-underline mt-0" style="color:#fff;">DISCOVER NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid p-0">
	<div class="row m-0 pb-2">
		<div class="col-12 col-md-4 p-0">
			<a
				href="https://www.circu.net/ebook/new-products-2023">
			<img alt="Periwinkle circu magical furniture kids lighting" src="/img/home/new-products-2023.jpg"
				class="img-fluid w-100">
			</a>
		</div>
		<div class="col-12 col-md-4 p-0">
			<a href="https://www.circu.net/ebook/catalogue-circu-magical-furniture">
			<img alt="Periwinkle circu magical furniture kids lighting" src="/img/home/banner-catalogue.jpg"
				class="img-fluid w-100">
			</a>
		</div>
		<div class="col-12 col-md-4 p-0">
			<a href="https://www.circu.net/ebook/100-luxury-kids-rooms">
			<img alt="Periwinkle circu magical furniture kids lighting"
				src="/img/home/100-luxury-kids-rooms-book.jpg" class="img-fluid w-100">
			</a>
		</div>
	</div>
</div>
<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	<!-- Background of PhotoSwipe.
		It's a separate element, as animating opacity is faster than rgba(). -->
	<div class="pswp__bg"></div>
	<!-- Slides wrapper with overflow:hidden. -->
	<div class="pswp__scroll-wrap">
		<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
		<!-- don't modify these 3 pswp__item elements, data is added later on. -->
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>
		<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<!--  Controls are self-explanatory. Order can be changed. -->
				<div class="pswp__counter"></div>
				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
				<button class="pswp__button pswp__button--share" title="Share"></button>
				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
				<!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
				<!-- element will get class pswp__preloader--active when preloader is running -->
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div>
			</div>
			<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
			</button>
			<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
			</button>
			<div class="pswp__caption" style="background-color: #fff !important;">
				<div class="pswp__caption__center"></div>
			</div>
			<div class="pswp__bottom-bar py-2 align-items-center d-flex">
				<div class="col-6 text-left float-left">
					<h6 class="heading-secondary d-inline mr-1">MAY WE HELP?</h6>
					<p class="d-inline print-on-click"><img
						alt="Isaloni circu magical furniture kids"
						src="/img/icons/social/print.png" alt="" width="18" height="18"> Print</p>
					<div class="social-share d-inline">
						<ul class="a2a_kit">
							<li>&nbsp;<i class="fa fa-share-alt"></i>&nbsp;</li>
							<li><a class="a2a_button_email"><img
								alt="Isaloni circu magical furniture kids"
								src="/img/icons/social/email.png" alt="share on email"></a>&nbsp;</li>
							<li><a class="a2a_button_whatsapp"><img
								alt="Isaloni circu magical furniture kids"
								src="/img/icons/social/whatsapp.png" alt="share on whatsapp"></a></li>
							<li><a class="a2a_button_facebook"><img
								alt="Isaloni circu magical furniture kids"
								src="/img/icons/social/facebook.png" alt="share on facebook"></a></li>
							<li><a class="a2a_button_pinterest"><img
								alt="Isaloni circu magical furniture kids"
								src="/img/icons/social/pinterest.png" alt="share on pinterest"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script src="{{ asset('js/isotope.js') }}"></script>
<script>
	$(document).on("click", '.new-procuct [data-toggle="collapse"] .btn-green-underline', function() {
	    if ($(this).hasClass('clicked')) {
	        $(this).removeClass('clicked');
	        $(this).html('SHOW MORE <i class="fas fa-caret-right"></i>');
	        $(this).css('background-color', '#98b9b5');
	    } else {
	        $(this).addClass('clicked');
	        $(this).html('<i class="fas fa-caret-left"></i> SHOW LESS ');
	        $(this).css('background-color', '#d4d2d2');
	    }
	});
	
	   $(document).ready(function() {
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
	               slidesToShow: 10,
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
	
	
	   });
	$(".new-procuct.collapse").on('hidden.bs.collapse', function() {
	    var $gridnew = $('.grid-new2').isotope({
	        itemSelector: '.element-item-new',
	        percentPosition: true,
	        masonry: {
	            // use element for option
	            columnWidth: '.element-item-new'
	        }
	    });
	});
	
	$(document).on("click", '.showcase [data-toggle="collapse"] .btn-green-underline', function() {
	    if ($(this).hasClass('clicked')) {
	        $(this).removeClass('clicked');
	        $(this).html('SHOW MORE <i class="fas fa-caret-right"></i>');
	        $(this).css('background-color', '#98b9b5');
	    } else {
	        $(this).addClass('clicked');
	        $(this).html('<i class="fas fa-caret-left"></i> SHOW LESS ');
	        $(this).css('background-color', '#d4d2d2');
	    }
	});
	
	$(".showcase.collapse").on('shown.bs.collapse', function() {
	    var $gridshowcase = $('.grid-showcase2').isotope({
	        itemSelector: '.element-item-showcase',
	        percentPosition: true,
	        masonry: {
	            // use element for option
	            columnWidth: '.element-item-showcase'
	        }
	    });
	    $('.element-item-showcase .slider-for').each(function(num, elem) {
	        elem = $(elem);
	        console.log(elem + ' - slide');
	        elem.slick({
	            slidesToShow: 1,
	            slidesToScroll: 1,
	            arrows: true,
	            prevArrow: '<div class="slider-button-prev prev-item"><i class="fas fa-chevron-left"></i></div>',
	            nextArrow: '<div class="slider-button-next next-item"><i class="fas fa-chevron-right"></i></div>',
	            draggable: false,
	            fade: true,
	            accessibility: false,
	            asNavFor: '.element-item-showcase .slider-nav'
	        });
	
	        elem.next('.element-item-showcase .slider-nav').slick({
	            slidesToShow: 7,
	            slidesToScroll: 1,
	            asNavFor: '.element-item-showcase .slider-for',
	            variableWidth: true,
	            dots: false,
	            centerMode: true,
	            arrows: false,
	            draggable: false,
	            accessibility: false,
	            focusOnSelect: true
	        });
	    });
	    $('.element-item-showcase .slider-nav .slick-slide').on('click', function(event) {
	        $('.element-item-showcase .slider-for').slick('slickGoTo', $(this).data('slickIndex'));
	    });
	
	    var elm = $('.element-item-showcase .slider-nav '),
	        getSlick = elm.slick('getSlick');
	
	    if (getSlick.slideCount <= getSlick.options.slidesToShow) {
	        elm.addClass('slick-no-slide');
	    } else {
	        elm.removeClass('slick-no-slide');
	    }
	
	});
	$(".showcase.collapse").on('hidden.bs.collapse', function() {
	    var $gridshowcase = $('.grid-showcase2').isotope({
	        itemSelector: '.element-item-showcase',
	        percentPosition: true,
	        masonry: {
	            // use element for option
	            columnWidth: '.element-item-showcase'
	        }
	    });
	});
</script>
<script>
	let removeCookie = () => {
	    $.removeCookie("popupEntrance",
	        "1");
	}
</script>
<script type="text/javascript">
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
	
	var initPhotoSwipeFromDOMambients = function(gallerySelector) {
	
	// parse slide data (url, title, size ...) from DOM elements 
	// (children of gallerySelector)
	var parseThumbnailElements = function(el) {
	    var thumbElements = el.childNodes,
	        numNodes = thumbElements.length,
	        items = [],
	        figureEl,
	        linkEl,
	        size,
	        item;
	
	    for (var i = 0; i < numNodes; i++) {
	
	        figureEl = thumbElements[i]; // <figure> element
	
	        // include only element nodes 
	        if (figureEl.nodeType !== 1) {
	            continue;
	        }
	
	        /* if (figureEl.className.indexOf('swiper-slide-duplicate') > 0) {
	            continue;
	        } */
	
	        linkEl = figureEl.children[0]; // <a> element
	
	        size = linkEl.getAttribute('data-size').split('x');
	
	        // create slide object
	        item = {
	            src: linkEl.getAttribute('href'),
	            w: parseInt(size[0], 10),
	            h: parseInt(size[1], 10)
	        };
	
	
	
	        if (figureEl.children.length > 1) {
	            // <figcaption> content
	            item.title = figureEl.children[1].innerHTML;
	        }
	
	        if (linkEl.children.length > 0) {
	            // <img> thumbnail element, retrieving thumbnail url
	            item.msrc = linkEl.children[0].getAttribute('src');
	        }
	
	            item.el = figureEl; // save link to element for getThumbBoundsFn
	            items.push(item);
	        }
	
	        return items;
	    };
	
	    // find nearest parent element
	    var closest = function closest(el, fn) {
	        return el && (fn(el) ? el : closest(el.parentNode, fn));
	    };
	
	    // triggers when user clicks on thumbnail
	    var onThumbnailsClick = function(e) {
	        e = e || window.event;
	        e.preventDefault ? e.preventDefault() : e.returnValue = false;
	
	        var eTarget = e.target || e.srcElement;
	
	        // find root element of slide
	        var clickedListItem = closest(eTarget, function(el) {
	            return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
	        });
	
	        if (!clickedListItem) {
	            return;
	        }
	
	        // find index of clicked item by looping through all child nodes
	        // alternatively, you may define index via data- attribute
	        var clickedGallery = clickedListItem.parentNode,
	            childNodes = clickedListItem.parentNode.childNodes,
	            numChildNodes = childNodes.length,
	            nodeIndex = 0,
	            index;
	
	        for (var i = 0; i < numChildNodes; i++) {
	            if (childNodes[i].nodeType !== 1) {
	                continue;
	            }
	
	            if (childNodes[i] === clickedListItem) {
	                index = nodeIndex;
	                break;
	            }
	            nodeIndex++;
	        }
	
	        if (index >= 0) {
	            // open PhotoSwipe if valid index found
	            openPhotoSwipe(index, clickedGallery);
	        }
	        return false;
	    };
	
	    // parse picture index and gallery index from URL (#&pid=1&gid=2)
	    var photoswipeParseHash = function() {
	        var hash = window.location.hash.substring(1),
	            params = {};
	
	        if (hash.length < 5) {
	            return params;
	        }
	
	        var vars = hash.split('&');
	        for (var i = 0; i < vars.length; i++) {
	            if (!vars[i]) {
	                continue;
	            }
	            var pair = vars[i].split('=');
	            if (pair.length < 2) {
	                continue;
	            }
	            params[pair[0]] = pair[1];
	        }
	
	        if (params.gid) {
	            params.gid = parseInt(params.gid, 10);
	        }
	
	        return params;
	    };
	
	    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
	        $('body').addClass('photoSwipeOpen');
	        var pswpElement = document.querySelectorAll('.pswp')[0],
	            gallery,
	            options,
	            items;
	
	        items = parseThumbnailElements(galleryElement);
	
	        //index -= 1;
	        // define options (if needed)
	        options = {
	
	            // define gallery index (for URL)
	            galleryUID: galleryElement.getAttribute("data-pswp-uid"),
	
	            // getThumbBoundsFn: function(index) {
	            //     // See Options -> getThumbBoundsFn section of documentation for more info
	            //     var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
	            //         pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
	            //         rect = thumbnail.getBoundingClientRect(); 
	
	            //     return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
	            // },
	            showAnimationDuration: 0,
	            showHideOpacity: true,
	            getThumbBoundsFn: false
	
	        };
	
	        // PhotoSwipe opened from URL
	        if (fromURL) {
	            if (options.galleryPIDs) {
	                // parse real index when custom PIDs are used 
	                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
	                for (var j = 0; j < items.length; j++) {
	                    if (items[j].pid == index) {
	                        options.index = j;
	                        break;
	                    }
	                }
	            } else {
	                // in URL indexes start from 1
	                options.index = parseInt(index, 10) - 1;
	            }
	        } else {
	            options.index = parseInt(index, 10);
	        }
	
	        // exit if index not found
	        if (isNaN(options.index)) {
	            return;
	        }
	
	        if (disableAnimation) {
	            options.showAnimationDuration = 0;
	        }
	
	        // Pass data to PhotoSwipe and initialize it
	        gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
	        gallery.init();
	
	        gallery.listen('close', function() {
	            $('body').removeClass('photoSwipeOpen');
	        });
	    };
	
	    // loop through all gallery elements and bind events
	    var galleryElements = document.querySelectorAll(gallerySelector);
	
	    for (var i = 0, l = galleryElements.length; i < l; i++) {
	        galleryElements[i].setAttribute('data-pswp-uid', i + 1);
	        galleryElements[i].onclick = onThumbnailsClick;
	    }
	
	    // Parse URL and open gallery if it contains #&pid=3&gid=1
	    var hashData = photoswipeParseHash();
	    if (hashData.pid && hashData.gid) {
	        openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
	    }
	};
	
	$('.hotspot').not('a[rel="modal:open"]').click(function() {
	    return false;
	});
	$('.hotspot a[rel="modal:open"]').click(function() {
	    $(this).modal();
	});
	
	// execute above function
	initPhotoSwipeFromDOMambients('.my-gallery');
	
	$(window).on('load', function() {
	        var swiper = new Swiper('.swiper-ambients .swiper-container', {
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
	
	$('.owl-ambiences').owlCarousel({
	    loop: true,
	    margin: 10,
	    lazyLoad: false,
	    dots: false,
	    nav: true,
	    navText: ["<i class='fas fa-chevron-left arrow-banners'></i>",
	        "<i class='fas fa-chevron-right arrow-banners'></i>"
	    ],
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
	    dots: false,
	    nav: true,
	    navText: ["<i class='fas fa-chevron-left p-0 arrow-banners'></i>",
	        "<i class='fas fa-chevron-right p-0 arrow-banners'></i>"
	    ],
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
	    navText: ["<i class='fas fa-chevron-left p-0 pl-2 arrow-banners'></i>",
	        "<i class='fas fa-chevron-right p-0 pr-2 arrow-banners'></i>"
	    ],
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
	    navText: ["<i class='fas fa-chevron-left arrow-banners'></i>",
	        "<i class='fas fa-chevron-right arrow-banners'></i>"
	    ],
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
</script>
<script>
	$(window).bind('resize load', function() {
	    if ($(window).width() > 800) {
	        $('.banner-height-2').css('height', $('.product-box').height());
	    }
	
	    if ($(window).width() < 767) {
	        $('.modal-height').css('height', $(window).height());
	    }
	
	});
</script>
@endsection