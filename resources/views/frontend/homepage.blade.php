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
	.owl-next i, .owl-prev i {
    bottom: 0% !important;
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
	/*** ***/
	.hotspot--sky-nightstand {
	top: 60%;
	right: 31%;
	}
	.hotspot--sky-nightstand .hotspot--title {
	bottom: -15%;
	right: 105%;
	}
	.hotspot--stellar-round-rug {
	bottom: 12%;
	left: 27%
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
	.hotspot--animal-stool-shark {
	top: 60%;
	right: 8%;
	}
	.hotspot--animal-stool-shark .hotspot--title {
	bottom: -15%;
	right: 105%;
	}
	.hotspot--little-cloud-nightstand {
	top: 60%;
	right: 31%;
	}
	.hotspot--little-cloud-nightstand .hotspot--title {
	bottom: -15%;
	right: 105%;
	}
	.hotspot--cloud-nightstand {
	top: 64%;
	left: 23%;
	}
	.hotspot--cloud-nightstand .hotspot--title {
	bottom: -15%;
	left: 105%;
	}
	.hotspot--gold-box {}
	.hotspot--gold-box .hotspot--title {
	bottom: -15%;
	right: 105%;
	}
	.hotspot--cloud-bench-2-seat {
	top: 74%;
	left: 40%;
	}
	.hotspot--cloud-bench-2-seat .hotspot--title {
	bottom: -15%;
	left: 105%;
	}
	.hotspot--cloud-nightstand-girl {
	top: 54%;
	left: 15%;
	}
	.hotspot--cloud-nightstand-girl .hotspot--title {
	bottom: -15%;
	left: 105%;
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
	.owl-theme .owl-dots .owl-dot span {
	background: none repeat scroll 0 0 #fff;
	border: none;
	border-radius: 20px;
	display: block;
	height: 10px;
	margin: 3px 4px;
	width: 10px;
	cursor: pointer;
	}
	.owl-dots {
	text-align: center;
	}
	.owl-dots button.owl-dot.active span,
	.owl-dots button.owl-dot:hover span {
	background: #9fbfbc;
	}
	.menu-project-item {
	width: 100%;
	text-align: center;
	position: absolute;
	z-index: 1;
	bottom: 0.8rem;
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
	.swiper-ambients .arrow-banners {
	color: #fff;
	opacity: 70%;
	background-image: none !important;
	-webkit-transition: opacity .50s ease-in-out;
	-moz-transition: opacity .50s ease-in-out;
	-ms-transition: opacity .50s ease-in-out;
	-o-transition: opacity .50s ease-in-out;
	transition: opacity .50s ease-in-out;
	}
	.swiper-ambients .arrow-banners:hover {
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
</style>
@endsection
@section('main-content')
<div class="container-fluid pb-2" id="main-slide">
	<div class="row">
		<!-- SLIDE DESKTOP -->
		<div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative d-none d-sm-block">
			<div class="item">
				<a href="https://www.circu.net/products?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-products&utm_campanha=product">
					<video id="vid" width="1920" height="800" class="cd-dot img-fluid" onloadeddata="this.play();" style="width:100% !important;" autoplay muted loop>
						<source src="/img/slides/main/video-banner.mp4" type="video/mp4">
						<source src="/img/slides/main/video-banner.mp4" type="video/ogg">
					</video>
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-springsale23&utm_campanha=springsale">
				<img src="/img/slides/main/spring-sale-homepage.jpg" width="1920" height="800" alt="Stocklist Spring Sale" class="cd-dot img-fluid" style="width:100% !important;">
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/isaloni-milan?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-isaloni23&utm_campanha=isaloni23">
				<img src="/img/slides/main/isaloni-banner-homepage.jpg" width="1920" height="800" alt="New Showroom Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/circu-new-showroom?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-newshowroom&utm_campanha=showroom">
				<img src="/img/slides/main/banner-homepage-showroom.jpg" width="1920" height="800" alt="New Showroom Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
				</a>
			</div>
			<div class="item">
				<a href="{{ route('products') }}">
				<img src="/img/slides/main/circu-magical-world.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/our-magical-rooms?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-the-multiverse-bedroom&utm_campanha=ourmagicalrooms">
				<img src="/img/slides/main/the-multiverse-bedroom.jpg" width="1920" height="800" alt="Summer Sale Stocklist Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
				</a>
			</div>
			<div class="item">
				<a href="{{ route('our-houses-new') }}">
				<img src="/img/slides/main/green-mint-room-d.jpg" width="1920" height="800" alt="Green Mint Playroom Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
				</a>
			</div>
			<div class="item">
				<a href="{{ route('new-products') }}">
				<img src="/img/slides/main/new-products-collection.jpg" width="1920" height="800" alt="New Products Collection Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/download-catalogue">
				<img src="/img/slides/main/new-catalogue.jpg" width="1920" height="800" alt="New Catalogue Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
				</a>
			</div>
			<div class="item">
				<a href="{{ route('our-houses-new') }}">
				<img src="/img/slides/main/little-rising-star-bedroom-desktop.jpg" width="1920" height="800" alt="Little Rising Star Bedroom Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
				</a>
			</div>
			<div class="item">
				<a href="{{ route('id-services') }}">
				<img src="/img/slides/main/id-services-d.jpg" width="1920" height="800" alt="ID Services Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
				</a>
			</div>
			<div class="item">
				<a href="{{ route('products') }}">
				<img src="/img/slides/main/new-collection-bubble-gum.jpg" width="1920" height="800" alt="New Collection Bubble Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
				</a>
			</div>
		</div>
		<!-- SLIDE MOBILE -->
		<div class="col-12 owl-main owl-carousel owl-slide owl-theme nopadding position-relative d-block d-sm-none">
			<div class="item">
				<a href="https://www.circu.net/products?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-products&utm_campanha=product">
					<video id="vid" width="1920" height="800" class="cd-dot img-fluid" onloadeddata="this.play();" style="width:100% !important;" autoplay muted loop>
						<source src="/img/slides/main/video-banner-m-new.mp4" type="video/mp4">
						<source src="/img/slides/main/video-banner-m-new.mp4" type="video/ogg">
					</video>
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-springsale23&utm_campanha=springsale">
				<img src="/img/slides/main/spring-sale-homepage-m.jpg" width="552" height="432" alt="New Showroom Circu Magical Furniture" class="cd-dot img-fluid">
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/isaloni-milan?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-isaloni23&utm_campanha=isaloni23">
				<img src="/img/slides/main/isaloni-banner-homepage-m.jpg" width="552" height="432" alt="New Showroom Circu Magical Furniture" class="cd-dot img-fluid">
				</a>
			</div>
			<div class="item">
				<a href="{{ route('products') }}">
				<img src="/img/slides/main/circu-magical-world-mobile-new.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid">
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/circu-new-showroom?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-newshowroom&utm_campanha=showroom">
				<img src="/img/slides/main/banner-homepage-showroom-m.jpg" width="552" height="432" alt="New Showroom Circu Magical Furniture" class="cd-dot img-fluid">
				</a>
			</div>
			
			<div class="item">
				<a href="{{ route('our-houses-new') }}">
				<img src="/img/slides/main/the-multiverse-bedroom-m-new.jpg" width="1920" height="800" alt="Summer Sale Stocklist Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
				</a>
			</div>
			<div class="item">
				<a href="{{ route('our-houses-new') }}">
				<img src="/img/slides/main/green-mint-room-m-new.jpg" width="552" height="432" alt="Summer Sale Stocklist Circu Magical Furniture" class="cd-dot img-fluid">
				</a>
			</div>
			<div class="item">
				<a href="{{ route('new-products') }}">
				<img src="/img/slides/main/new-products-collection-mobile-new.jpg" width="552" height="432" alt="New Products Collection Circu Magical Furniture" class="cd-dot img-fluid">
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/download-catalogue">
				<img src="/img/slides/main/new-catalogue-m-new.jpg" width="552" height="432" alt="New Catalogue Circu Magical Furniture" class="cd-dot img-fluid">
				</a>
			</div>
			<div class="item">
				<a href="{{ route('id-services') }}">
				<img src="/img/slides/main/id-services-m-new.jpg" width="552" height="432" alt="ID Service Circu Magical Furniture" class="cd-dot img-fluid">
				</a>
			</div>
			<div class="item">
				<a href="{{ route('products') }}">
				<img src="/img/slides/main/new-collection-bubble-gum-mobile-new.jpg" alt="New Collection Circu Magical Furniture" width="768" height="600" class="cd-dot img-fluid">
				</a>
			</div>
		</div>
	</div>
</div>
@include('includes.menu-visual-new')
<div class="container-fluid pt-2">
	@include('includes.banners-hotspots-new')
	<div class="row py-2">
		<div class="col-12 col-lg-3" style="padding: 0 0 0.25rem 0">
			<a href="https://www.circu.net/inspirations/category/interior-design/boys-room/" target="_blank">
				<img src="/img/icons/menu-projects/boys-room-circu-magical-furniture-m.jpg" alt="Shop Boy Circu Magical Furniture" width="500" height="425"  class="img-fluid w-100 d-block d-lg-none">
				<img src="/img/icons/menu-projects/shop-boy-circu-magical-furniture.jpg" alt="Shop Boy Circu Magical Furniture" width="500" height="425" class="img-fluid w-100 d-none d-lg-block">
				<div class="menu-project-item">
					<span class="homepage-shop">SHOP</span>
					<span class="homepage-cat">BOY</span>
				</div>
			</a>
		</div>
		<div class="col-12 col-lg-3 " style="padding: 0 0 0.25rem 0">
			<a href="https://www.circu.net/inspirations/category/interior-design/girls-room/" target="_blank">
				<img src="/img/icons/menu-projects/girls-room-circu-magical-furniture-m.jpg" alt="Shop Girl Circu Magical Furniture" width="500" height="425" class="img-fluid w-100 d-block d-lg-none">
				<img src="/img/icons/menu-projects/shop-girl-circu-magical-furniture.jpg" alt="Shop Girl Circu Magical Furniture" width="500" height="425" class="img-fluid w-100 d-none d-lg-block">
				<div class="menu-project-item">
					<span class="homepage-shop">SHOP</span>
					<span class="homepage-cat">GIRL</span>
				</div>
			</a>
		</div>
		<div class="col-6 col-lg-3 p-0">
			<a href="{{ route('our-houses-new') }}" target="_blank">
				<img src="/img/icons/menu-projects/shop-magical-rooms-circu-magical-furniture.jpg" width="500" height="425" alt="Shop Magical Rooms Circu Magical Furniture" class="img-fluid w-100">
				<div class="menu-project-item">
					<span class="homepage-shop">SHOP</span>
					<span class="homepage-cat">MAGICAL ROOMS</span>
				</div>
			</a>
		</div>
		<div class="col-6 col-lg-3 p-0">
			<div class="col-12 owl-projects-slide owl-carousel owl-slide owl-theme nopadding position-relative">
				<div class="item">
					<a href="{{ route('project', ['slug' => 'a-room-above-the-clouds']) }}">
					<img src="/img/icons/menu-projects/projects-circu-magical-furniture.jpg" width="500" height="425" alt="Projects Circu Magical Furniture" class="img-fluid w-100">
					</a>
				</div>
				<div class="item">
					<a href="{{ route('project', ['slug' => 'charlotte-little-kingdom']) }}">
					<img src="/img/icons/menu-projects/project-1.jpg" alt="Projects Circu Magical Furniture" width="500" height="425" class="img-fluid w-100">
					</a>
				</div>
				<div class="item">
					<a href="{{ route('project', ['slug' => 'pastel-color-bedroom-full-of-brightness']) }}">
					<img src="/img/icons/menu-projects/project-2.jpg" alt="Projects Circu Magical Furniture" width="500" height="425" class="img-fluid w-100">
					</a>
				</div>
				<div class="item">
					<a href="{{ route('project', ['slug' => 'fairytale-in-the-heart-moscow-by-a3-design-studio']) }}">
					<img src="/img/icons/menu-projects/project-3.jpg" alt="Projects Circu Magical Furniture" width="500" height="425" class="img-fluid w-100">
					</a>
				</div>
				<div class="item">
					<a href="{{ route('project', ['slug' => 'royal-project-in-the-queen-hometown']) }}">
					<img src="/img/icons/menu-projects/project-4.jpg" alt="Projects Circu Magical Furniture" width="500" height="425" class="img-fluid w-100">
					</a>
				</div>
				<div class="item">
					<a href="{{ route('project', ['slug' => 'touch-of-glam-into-a-luxury-apartment']) }}">
					<img src="/img/icons/menu-projects/project-5.jpg" alt="Projects Circu Magical Furniture" width="500" height="425" class="img-fluid">
					</a>
				</div>
				<div class="item">
					<a href="{{ route('project', ['slug' => 'fairytale-bedroom-brought-to-life']) }}">
					<img src="/img/icons/menu-projects/project-6.jpg" alt="Projects Circu Magical Furniture" width="500" height="425" class="img-fluid">
					</a>
				</div>
				<div class="item">
					<a href="{{ route('project', ['slug' => 'whimsical-pink-room']) }}">
					<img src="/img/icons/menu-projects/project-7.jpg" alt="Projects Circu Magical Furniture" width="500" height="425" class="img-fluid">
					</a>
				</div>
			</div>
			<a href="{{ route('projects') }}">
				<div class="menu-project-item">
					<span class="homepage-shop">SEE ALL</span>
					<span class="homepage-cat">PROJECTS</span>
				</div>
			</a>
		</div>
	</div>
	<div class="row pb-2">
		<div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#9bb1c9;">
			<div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
				<div class="row">
					<div class="col-12 col-lg-6 p-lg-0">
						@include('includes.middle.form-catalogue-2022')
					</div>
					<div class="col-12 col-lg-6 pl-lg-0 text-center">
						<img src="/img/catalogo-banner-form-mobile.jpg" width="524" height="264" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid text-center">
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-8 p-0 d-none d-lg-block">
			<div class="col-12 p-0">
				<img src="/img/home/bg-banner-ebook.jpg" style="width:100%;" width="1250" height="630" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid d-none d-lg-block">
			</div>
			<div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%; transform: translate(0,-50%);">
				@include('includes.middle.form-catalogue-2022')
			</div>
		</div>
		<div class="col-12 col-lg-4 p-0">
			<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=2nslide&utm_conteudo=circu-springsale3&utm_campanha=springsale">
			<img src="/img/pag-styles/modern-luxury/banner-side-form-spring-sale.jpg" width="630" height="630"  alt="Stocklist Spring Sale" class="img-fluid w-100">
			</a>
		</div>
	</div>
	<div class="row pt-2">
		<div class="col-12 col-lg-7 mx-auto text-center pt-4 pb-3">
			<h1>ONCE UPON A TIME ...</h1>
			<p class="description"><i>Our hand-crafted and hand-tailored pieces are made by the best and most
				experienced craftsmen in Portugal, <br>combining the finest materials with a lot of passion, so we
				can deliver only the highest quality furnishings.</i>
			</p>
		</div>
		<div class="col-12 parallax d-none d-md-block px-0" style="z-index:1;">
			<video width="100%" height="auto" onloadeddata="this.play();" autoplay muted loop playsinline>
				<source src="/includes/video/brand-homepage.mp4" type="video/mp4" />
				<p>Your browser does not support the video tag or the file format of this video.</p>
			</video>
			<a href="{{ route('about') }}" style="z-index:2;">
				<div class="text-hover text-center position-absolute" style="bottom: 10%;top: unset;">
					<div class="btn-video-homepage grow">EXPLORE OUR CRAFTSMANSHIP</div>
				</div>
			</a>
		</div>
		<div class="col-12 parallax d-block d-md-none px-0" style="z-index:1;">
			<video width="100%" height="auto" onloadeddata="this.play();" autoplay muted loop playsinline>
				<source src="/includes/video/brand-homepage-mobile.mp4" type="video/mp4" />
				<p>Your browser does not support the video tag or the file format of this video.</p>
			</video>
			<a href="{{ route('about') }}" style="z-index:2;">
				<div class="text-hover text-center position-absolute" style="bottom: 10%;top: unset;">
					<div class="btn-video-homepage grow">EXPLORE OUR CRAFTSMANSHIP</div>
				</div>
			</a>
		</div>
	</div>
	<!-- end row -->
</div>
<!-- end container -->
@endsection
@section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">
    
	jQuery('.form-d-block-mobile input[name="email"]').on('change', function() {
	jQuery('.formvisibleMobile').css('display', 'block');
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
	$(window).on('load', function() {
	   var swiper = new Swiper('.swiper-ambients.swiper-container', {
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
	   initPhotoSwipeFromDOMambients('.my-gallery');
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
	
	$('.owl-ambiences').owlCarousel({
	   loop: true,
	   margin: 10,
	   lazyLoad: false,
	   dots: false,
	   nav: true,
	   navText: ["<i class='fas fa-chevron-left arrow-banners'></i>",
	       "<i class='fas fa-chevron-right arrow-banners'></i>"
	   ],
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
	   fluidSpeed: 3000,
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
	   dots: true,
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
	
	$('.owl-projects-slide').owlCarousel({
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
	
	$('.owl-hotspot').owlCarousel({
	   loop: true,
	   margin: 10,
	   lazyLoad: false,
	   nav: true,
	   navText: ["<i class='fas fa-chevron-left p-0 pl-2 arrow-banners'></i>",
	       "<i class='fas fa-chevron-right p-0 pr-2 arrow-banners'></i>"
	   ],
	   autoplay: false,
	   dots: false,
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