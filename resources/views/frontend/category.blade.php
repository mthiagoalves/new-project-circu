@extends('layouts.master')
@section('meta')
<title>Circu Magical Furniture - Luxury brand for children</title>
<meta name="description" content="$keywords" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="All Products Circu Magical Furniture - Luxury brand for children" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="http://www.circu.net/products" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection
@section('head-includes')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
	h2.category_name_title,
	.category_name_title {
	font-family: 'RalewayMedium', sans-serif;
	text-transform: uppercase;
	font-size: 1.1rem;
	letter-spacing: 2px;
	padding: 0.5rem 2rem;
	color: #666666 !important;
	font-weight: normal;
	cursor: pointer;
	}
	h2.category_name_title span {
	padding: 0 15px;
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
	display: inline-block;
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
	/* -------------------- AMBIENTES HOTSPOT -------------------------- */
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
	/* -------------------- FIMAMBIENTES HOTSPOT -------------------------- */
</style>
@endsection
@section('main-content')
<div class="container-fluid mb-3">
	<div class="row">
		@foreach ($all_products as $key => $category)
		{{-- @php dd($all_products) @endphp --}}
		@if ($key == $cat)
		@if ($key == 'beds')
		<script>
			let meta_title = '<?php echo $meta_data[0]->meta_title; ?>'
			let meta_description = '<?php echo $meta_data[0]->meta_description; ?>'
			let key_words = '<?php echo $meta_data[0]->key_words; ?>'

			console.log(meta_title, meta_description, key_words)

			document.title = meta_title;
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('keywords')
			    .setAttribute('content', key_words);
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('description')
			    .setAttribute('content', meta_description);

			let title_og = document.querySelector('meta[property="og:title"]');
			let description_og = document.querySelector('meta[property="og:description"]');

			title_og.setAttribute('content', meta_title);
			description_og.setAttribute('content', meta_description);
		</script>
		<!-- SLIDE DESKTOP -->
		<div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative">
			<div class="col-12 p-0">
				<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=topbanner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
				<img src="/img/slides/main/spring-sale-homepage.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/slides/main/spring-sale-homepage-m.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
			<div class="col-12 p-0">
				<a href="https://www.circu.net/products/merida-bed?utm_origem=website&utm_meio=topbanner-beds&utm_conteudo=circu-merida-bed&utm_campanha=product">
				<img src="/img/merida-bed.gif" alt="Merida Bed circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/merida-bed-mobile.gif" alt="Merida Bed circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
			<div class="col-12 p-0">
				<a href="https://www.circu.net/products/merida-corner-bed?utm_origem=website&utm_meio=topbanner-beds&utm_conteudo=circu-meridacorner-bed&utm_campanha=product">
				<img src="/img/merida-corner-bed.gif" alt="Merida Corner Bed circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/merida-bed-corner-mobile.gif" alt="Merida Corner Bed circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
		</div>
		@elseif($key == 'lighting')
		<script>
			let meta_title = '<?php echo $meta_data[2]->meta_title; ?>'
			let meta_description = '<?php echo $meta_data[2]->meta_description; ?>'
			let key_words = '<?php echo $meta_data[2]->key_words; ?>'

			console.log(meta_title, meta_description, key_words)

			document.title = meta_title;
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('keywords')
			    .setAttribute('content', key_words);
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('description')
			    .setAttribute('content', meta_description);

			let title_og = document.querySelector('meta[property="og:title"]');
			let description_og = document.querySelector('meta[property="og:description"]');

			title_og.setAttribute('content', meta_title);
			description_og.setAttribute('content', meta_description);
		</script>
		<!-- SLIDE DESKTOP -->
		<div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative">
			<div class="col-12 p-0">
				<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=topbanner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
				<img src="/img/slides/main/spring-sale-homepage.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/slides/main/spring-sale-homepage-m.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
			<div class="col-12 p-0">
				<a href="https://www.circu.net/products/cloud-lamp-big">
				<img src="/img/cloud-lamp.gif" alt="cloud lamp circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/cloud-lamp-mobile.gif" alt="cloud lamp circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
		</div>
		@elseif($key == 'seating')
		<script>
			let meta_title = '<?php echo $meta_data[1]->meta_title; ?>'
			let meta_description = '<?php echo $meta_data[1]->meta_description; ?>'
			let key_words = '<?php echo $meta_data[1]->key_words; ?>'

			console.log(meta_title, meta_description, key_words)

			document.title = meta_title;
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('keywords')
			    .setAttribute('content', key_words);
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('description')
			    .setAttribute('content', meta_description);

			let title_og = document.querySelector('meta[property="og:title"]');
			let description_og = document.querySelector('meta[property="og:description"]');

			title_og.setAttribute('content', meta_title);
			description_og.setAttribute('content', meta_description);
		</script>
		<!-- SLIDE DESKTOP -->
		<div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative">
			<div class="col-12 p-0">
				<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=topbanner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
				<img src="/img/slides/main/spring-sale-homepage.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/slides/main/spring-sale-homepage-m.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
			<div class="col-12 p-0">
				<a href="https://www.circu.net/products/lotus-sofa?utm_origem=website&utm_meio=topbanner-seating&utm_conteudo=circu-lotus-sofa&utm_campanha=product">
				<img src="/img/lotus-sofa.gif" alt="Lotus Sofa circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/lotus-sofa-mobile.gif" alt="Lotus Sofa circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
		</div>
		@elseif($key == 'play-learn')
		<script>
			let meta_title = '<?php echo $meta_data[4]->meta_title; ?>'
			let meta_description = '<?php echo $meta_data[4]->meta_description; ?>'
			let key_words = '<?php echo $meta_data[4]->key_words; ?>'

			console.log(meta_title, meta_description, key_words)

			document.title = meta_title;
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('keywords')
			    .setAttribute('content', key_words);
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('description')
			    .setAttribute('content', meta_description);

			let title_og = document.querySelector('meta[property="og:title"]');
			let description_og = document.querySelector('meta[property="og:description"]');

			title_og.setAttribute('content', meta_title);
			description_og.setAttribute('content', meta_description);
		</script>
		<!-- SLIDE DESKTOP -->
		<div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative">
			<div class="col-12 p-0">
				<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=topbanner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
				<img src="/img/slides/main/spring-sale-homepage.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/slides/main/spring-sale-homepage-m.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
			<div class="col-12 p-0">
				<a href="https://www.circu.net/products/bubble-gum-gym">
				<img src="/img/bubble-gum-gym.gif" alt="bubble gum gym circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/bubble-gum-gym-mobile.gif" alt="bubble gum gym circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
		</div>
		@elseif($key == 'mirrors')
		<script>
			let meta_title = '<?php echo $meta_data[5]->meta_title; ?>'
			let meta_description = '<?php echo $meta_data[5]->meta_description; ?>'
			let key_words = '<?php echo $meta_data[5]->key_words; ?>'

			console.log(meta_title, meta_description, key_words)

			document.title = meta_title;
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('keywords')
			    .setAttribute('content', key_words);
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('description')
			    .setAttribute('content', meta_description);

			let title_og = document.querySelector('meta[property="og:title"]');
			let description_og = document.querySelector('meta[property="og:description"]');

			title_og.setAttribute('content', meta_title);
			description_og.setAttribute('content', meta_description);
		</script>
		<!-- SLIDE DESKTOP -->
		<div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative">
			<div class="col-12 p-0">
				<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=topbanner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
				<img src="/img/slides/main/spring-sale-homepage.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/slides/main/spring-sale-homepage-m.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
			<div class="col-12 p-0">
				<a href="https://www.circu.net/products/chameleon-pink-mirror/?utm_origem=website&utm_meio=topbanner-mirrors&utm_conteudo=circu-chameleon-pink-mirror&utm_campanha=product">
				<img src="/img/chameleon-pink.gif" alt="Chameleon Pink Mirror circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/chameleon-pink-mobile.gif" alt="Chameleon Pink Mirror circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
		</div>
		@elseif($key == 'rugs')
		<script>
			let meta_title = '<?php echo $meta_data[6]->meta_title; ?>'
			let meta_description = '<?php echo $meta_data[6]->meta_description; ?>'
			let key_words = '<?php echo $meta_data[6]->key_words; ?>'

			console.log(meta_title, meta_description, key_words)

			document.title = meta_title;
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('keywords')
			    .setAttribute('content', key_words);
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('description')
			    .setAttribute('content', meta_description);

			let title_og = document.querySelector('meta[property="og:title"]');
			let description_og = document.querySelector('meta[property="og:description"]');

			title_og.setAttribute('content', meta_title);
			description_og.setAttribute('content', meta_description);
		</script>
		<!-- SLIDE DESKTOP -->
		<div class="col-12 owl-novelties owl-carousel owl-slide owl-theme p-0 position-relative">
			<div class="col-12 p-0">
				<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=topbanner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
				<img src="/img/slides/main/spring-sale-homepage.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/slides/main/spring-sale-homepage-m.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
			<div class="item">
				<a href="">
				<img src="/img/slides/main/astro-rug.gif" alt="Chameleon Pink Mirror circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/slides/main/astro-rug-mobile.gif" alt="Chameleon Pink Mirror circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
		</div>
		@elseif($key == 'others')
		<script>
			let meta_title = '<?php echo $meta_data[8]->meta_title; ?>'
			let meta_description = '<?php echo $meta_data[8]->meta_description; ?>'
			let key_words = '<?php echo $meta_data[8]->key_words; ?>'

			console.log(meta_title, meta_description, key_words)

			document.title = meta_title;
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('keywords')
			    .setAttribute('content', key_words);
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('description')
			    .setAttribute('content', meta_description);

			let title_og = document.querySelector('meta[property="og:title"]');
			let description_og = document.querySelector('meta[property="og:description"]');

			title_og.setAttribute('content', meta_title);
			description_og.setAttribute('content', meta_description);
		</script>
		<!-- SLIDE DESKTOP -->
		<div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative" style="display:block;">
			<div class="col-12 p-0">
                <a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=topbanner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
                    <img src="/img/slides/main/spring-sale-homepage.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-none d-md-block">
                    <img src="/img/slides/main/spring-sale-homepage-m.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-block d-md-none">
                </a>
            </div>
			{{-- <div class="item">
				<a href="https://www.circu.net/products/fantasy-air-balloon-lounge/?utm_origem=website&utm_meio=topbanner-others&utm_conteudo=circu-fantasy-air-balloon-lounge&utm_campanha=product">
				<img src="/img/fantasy-air-balloon.gif" alt="Fantasy Air Balloon Lounge circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/fantasy-air-balloon-lounge-mobile.gif" alt="Fantasy Air Balloon Lounge circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div> --}}
		</div>
		@elseif($key == 'storage')
		<script>
			let meta_title = '<?php echo $meta_data[3]->meta_title; ?>'
			let meta_description = '<?php echo $meta_data[3]->meta_description; ?>'
			let key_words = '<?php echo $meta_data[3]->key_words; ?>'

			console.log(meta_title, meta_description, key_words)

			document.title = meta_title;
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('keywords')
			    .setAttribute('content', key_words);
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('description')
			    .setAttribute('content', meta_description);

			let title_og = document.querySelector('meta[property="og:title"]');
			let description_og = document.querySelector('meta[property="og:description"]');

			title_og.setAttribute('content', meta_title);
			description_og.setAttribute('content', meta_description);
		</script>
		<!-- SLIDE DESKTOP -->
		<div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative">
			<div class="col-12 p-0">
				<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=topbanner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
				<img src="/img/slides/main/spring-sale-homepage.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/slides/main/spring-sale-homepage-m.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
			<div class="col-12 p-0">
				<a href="https://www.circu.net/products/bubble-gum-chest-2-drawers?utm_origem=website&utm_meio=topbanner-storage&utm_conteudo=circu-bubblegum-chest2&utm_campanha=product">
				<img src="/img/bubble-gum-2-drawers.gif" alt="Magical Kids Bedrooms and Playground Ideas" class="d-none d-sm-block">
				<img src="/img/bubble-gum-2-drawers-m.gif" alt="Magical Kids Bedrooms and Playground Ideas" class="d-block d-sm-none">
				</a>
			</div>
		</div>

		@elseif($key == 'hardware')

		<script>
			let meta_title = '<?php echo $meta_data[7]->meta_title; ?>'
			let meta_description = '<?php echo $meta_data[7]->meta_description; ?>'
			let key_words = '<?php echo $meta_data[7]->key_words; ?>'

			console.log(meta_title, meta_description, key_words)

			document.title = meta_title;
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('keywords')
			    .setAttribute('content', key_words);
			
			document
			    .getElementsByTagName('meta')
			    .namedItem('description')
			    .setAttribute('content', meta_description);

			let title_og = document.querySelector('meta[property="og:title"]');
			let description_og = document.querySelector('meta[property="og:description"]');

			title_og.setAttribute('content', meta_title);
			description_og.setAttribute('content', meta_description);
		</script>

		<!-- SLIDE DESKTOP -->
		<div class="col-12 p-0 position-relative">
			<div class="col-12 p-0">
				<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=topbanner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
				<img src="/img/slides/main/spring-sale-homepage.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/slides/main/spring-sale-homepage-m.jpg" alt="Spring Sale circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
		</div>
		@endif
		<div class="col-12" id="{{ $key }}" style="padding:12px;">
			<a name="{{ $key }}" href="#"></a>
			<h2 class="col-12 category_name_title text-center mb-0"><span>{{ ucwords($key) }}</span></h2>
			</a>
		</div>
		@php
		$countTest = 0;
		@endphp
		@foreach ($category as $product)
		@php
		$countTest++;
		@endphp
		@if (($countTest == 13 && $key == 'seating') || ($countTest == 13 && $key == 'beds') || ($countTest == 13 && $key == 'lighting')  || ($countTest == 13 && $key == 'storage') || ($countTest == 13 && $key == 'rugs') || ($countTest == 13 && $key == 'play-learn') || ($countTest == 13 && $key == 'mirrors') || ($countTest == 13 && $key == 'hardware') || ($countTest == 13 && $key == 'others'))
		<!-- form -->
        @include('includes.middle.form-stocklist-spring-sale')

		@elseif($countTest == 33 && $key == 'seating' || ($countTest == 29 && $key == 'lighting') || ($countTest == 33 && $key == 'storage'))
		<div class="container-fluid my-3" style="background-color:#fff;">
			<div class="row">
				<div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
					<div class="row">
						<div class="col-12 col-lg-6">
							@include('includes.middle.form-ebook-new')
						</div>
						<div class="col-12 col-lg-6">
							<img src="/img/new-products-2023-banner-form-m-new.png" width="524" height="264" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
							<img src="/img/new-products-2023-banner-form-new.png" width="992" height="500" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
		<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box">
			<div class="product_thumb py-4">
				@if (file_exists('./img/products/thumbnails/' . $product->slug . '-circu-magical-furniture.png'))
				<img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
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
						<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', $product->slug) }}"><span>GET
						<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
					</div>
				</div>
				@if (($product->is_new && $product->slug == 'bubble-gum-bed') || $product->slug == 'bubble-gum-bench' || $product->slug == 'bubble-gum-dressing-table' || $product->slug == 'bubble-gum-chest-3-drawers' || $product->slug == 'bubble-gum-chest-2-drawers' || $product->slug == 'bubble-gum-desk' || $product->slug == 'bubble-slide' || $product->slug == 'bubble-loop' || $product->slug == 'bubble-drop' || $product->slug == 'bubble-gum-playground' || $product->slug == 'bubble-gum-big-mirror' || $product->slug == 'bubble-gum-small-mirror' || $product->slug == 'cotton-candy-sofa' || $product->slug == 'rainbow-sofa')
				<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
					<img src="/img/icons/product-new-collection.png">
				</div>
				@elseif($product->is_new)
				<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
					<img src="/img/icons/product-new.png">
				</div>
				@endif
				<div class="product-box--content">
					@if ($product->product_samples->count() > 0)
					<div class="col-12 slider-for text-center">
						@foreach ($product->product_samples as $product_sample)
						<div>
							<a href="{{ route('product', ['product' => $product->slug]) }}">
							<img src="/img/products/{{ $product->slug }}/finishes/{{ $product->slug }}-circu-magical-furniture-{{ $product_sample->sample->slug }}.png" width="960" height="800" alt="" class="img-fluid">
							</a>
						</div>
						@endforeach
					</div>
					<div class="col-12 product-samples slider-nav text-center p-0">
						@foreach ($product->product_samples as $product_sample)
						@if ($product_sample->is_options == null)
						<div class="d-inline text-center">
							<img src="/img/icons/finishes/{{ $product_sample->sample->slug }}-sm.png" width="20" height="20" alt="" class="img-fluid">
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
							<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', $product->slug) }}"><span>GET
							<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		@if ($key == 'beds')
		{{-- 
		<div class="d-none d-lg-block col-lg-3 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/small-tristen-bed-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/tristen-bed"'>
			<div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
				TRISTEN BED | <span style="font-size:0.9rem;">SEE MORE ></span>
			</div>
		</div>
		--}}
		@endif
		@if ($key == 'play-learn')
		<!-- <div class="d-none d-lg-block col-lg-3 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/our-magical-room-jungle-fun-3.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/dream-desk"'>
			<div class="position-absolute" style="bottom:3%;right:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">DREAM DESK | <span style="font-size:0.9rem;">SEE MORE ></span></div>
			</div> -->
		@endif
		@if ($key == 'seating')
		{{-- 
		<div class="d-none d-lg-block col-lg-9 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-lewis-two-seat-sofa-circu-magical-furniture.jpg');background-position:center 68%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/lewis-two-seat-sofa"'>
			<div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">LEWIS TWO SEAT SOFA |<span style="font-size:0.9rem;">SEE MORE ></span></div>
		</div>
		--}}
		<div class="col-12 slideToggle text-center my-3">
			<a class="btn-get-price py-2 px-4" href="{{ route('products') }}"><span>SEE <b>ALL
			PRODUCTS</b>
			&gt;</span> </a>
		</div>
		<!-- <div class="container-fluid my-2" style="background-color:#9BB1C9;">
			<div class="row">
			    <div class="col-12 col-xl-10 offset-0 offset-xl-1 p-0">
			        <div class="row">
			            <div class="col-12 col-lg-6">
			                @include('includes.middle.form-catalogue-2022')
			            </div>
			            <div class="col-12 col-lg-6">
			                <img src="/img/catalogue-circu-all-products.jpg" width="992" height="500" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
			                <img src="/img/catalogue-circu-all-products-mobile.jpg" width="524" height="264" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
			            </div>
			        </div>
			    </div>
			</div>
			</div> -->
		<div class="container-fluid pt-2">
			<div class="row pb-2">
				<div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#dfcfae;">
					<div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
						<div class="row">
							<div class="col-12 col-lg-6 p-lg-0">
								@include('includes.middle.form-catalogue-2022')
							</div>
							<div class="col-12 col-lg-6 pl-lg-0 text-center px-0">
								<img src="/img/catalogo-2022-banner-form-mobile.jpg" width="524" height="264" alt="New Showroom Circu Kid's Luxury Furniture" class="img-fluid text-center">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-8 p-0 d-none d-lg-block">
					<div class="col-12 p-0">
						<a href="https://www.circu.net/download-catalogue?utm_origem=blog&utm_meio=banner-categoria&utm_conteudo=Circu-brandcatalog&utm_campanha=catalogue">
						<img src="/img/home/bg-banner-ebook.jpg" alt="Catalogue Circu Kid's Luxury Furniture" style="width:100%;" class="img-fluid d-none d-lg-block">
						</a>
					</div>
					<div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%;">
						@include('includes.middle.form-catalogue-2022')
					</div>
				</div>
				<div class="col-12 col-lg-4 p-0">
					<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
					<img src="/img/pag-styles/modern-luxury/banner-side-form-spring-sale.jpg" alt="Stocklist Spring Sale Circu Magical Furniture" class="img-fluid w-100">
					</a>
				</div>
			</div>
		</div>
		@endif
		@if ($key == 'others')
		<div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-fantasy-air-balloon-lounge-circu-magical-furniture.jpg');background-position:center 80%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/fantasy-air-balloon-lounge"'>
			<div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
				FANTASY AIR BALLON LOUNGE | <span style="font-size:0.9rem;">SEE MORE ></span>
			</div>
		</div>
		<div class="col-12 slideToggle text-center my-3">
			<a class="btn-get-price py-2 px-4" href="{{ route('products') }}"><span>SEE <b>ALL
			PRODUCTS</b> &gt;</span> </a>
		</div>
		<div class="container-fluid pt-2">
			<div class="row pb-2">
				<div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#fefeda;">
                    <div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
                        <div class="row">
                            <div class="col-12 col-lg-6 p-lg-0">
                                @include('includes.middle.form-spring-sale-catalogue')
                            </div>
                            <div class="col-12 col-lg-6 pl-lg-0 text-center px-0">
                                <a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
                                    <img src="/img/form-imgs/big-form-spring-sale-m.jpg" width="524" height="264" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" class="img-fluid text-center">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 p-0 d-none d-lg-block">
                    <div class="col-12 p-0">
                        <a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
                            <img src="/img/form-imgs/big-form-spring-sale.jpg" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" style="width:100%;" class="img-fluid d-none d-lg-block">
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%;">
                        @include('includes.middle.form-spring-sale-catalogue')
                    </div>
                </div>
				<div class="col-12 col-lg-4 p-0">
					<a href="https://www.circu.net/download-catalogue">
					<img src="/img/home/banner-catalogue.jpg" alt="Magical Kids Circu Magical Furniture" class="img-fluid w-100">
					</a>
				</div>
			</div>
		</div>
		@endif
		@if ($key == 'hardware')
		<div class="col-12 slideToggle text-center my-3">
			<a class="btn-get-price py-2 px-4" href="{{ route('products') }}"><span>SEE <b>ALL
			PRODUCTS</b> &gt;</span> </a>
		</div>
		<div class="container-fluid pt-2">
			<div class="row pb-2">
				<div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#dfcfae;">
					<div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
						<div class="row">
							<div class="col-12 col-lg-6 p-lg-0">
								@include('includes.middle.form-catalogue-new')
							</div>
							<div class="col-12 col-lg-6 pl-lg-0 text-center px-0">
                                <a href="https://www.circu.net/ebook/magical-kids-bedrooms-playground-ideas?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-magical-bedrooms-playgrounds&utm_campanha=ourmagicalrooms">
                                    <img src="/img/magical-kids-bedrooms-and-playground-ideas-banner-m.jpg" width="524" height="264" alt="Magical Kids Bedrooms Circu Kid's Luxury Furniture" class="img-fluid text-center">
                                </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-8 p-0 d-none d-lg-block">
					<div class="col-12 p-0">
                        <a href="https://www.circu.net/ebook/magical-kids-bedrooms-playground-ideas?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-magical-bedrooms-playgrounds&utm_campanha=ourmagicalrooms">
                            <img src="/img/home/form-magical-kids-bedrooms-and-playground-ideas.jpg" alt="Magical Kids Bedrooms Circu Kid's Luxury Furniture" style="width:100%;" class="img-fluid d-none d-lg-block">
                        </a>
					</div>
					<div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%;">
						@include('includes.middle.form-catalogue-new')
					</div>
				</div>
				<div class="col-12 col-lg-4 p-0">
					<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
					<img src="/img/pag-styles/modern-luxury/banner-side-form-spring-sale.jpg" alt="Stocklist Spring Sale Circu Magical Furniture" class="img-fluid w-100">
					</a>
				</div>
			</div>
		</div>
		@endif
		<!-- @if ($key == 'seating')
			<div class="d-none d-lg-block col-lg-9 product-box has-overlay"
			                        style="background-image:url('/img/products/thumbnails-covers/big-seating-new-collection-circu.jpg');background-position:center center;background-size:cover;cursor:pointer;"
			                        onclick='window.location.href="https://www.circu.net/products/pixie-chair"'>
			                        
			                        <div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">GET THE LOOK > </div>
			                      </div>
			
			                      <div class="col-12 slideToggle text-center my-3">
			                        <a class="btn-get-price py-2 px-4" href="{{ route('products') }}"><span>SEE <b>ALL PRODUCTS</b> &gt;</span> </a>
			                      </div>
			@endif -->
		@if ($key == 'lighting')
		{{-- 
		<div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-cloud-lamp-big-circu-magical-furniture.jpg');background-position:center 35%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/cloud-lamp-big"'>
			<div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
				CLOUD LAMP BIG |<span style="font-size:0.9rem;">SEE MORE ></span>
			</div>
		</div>
		--}}
		<div class="col-12 slideToggle text-center my-3">
			<a class="btn-get-price py-2 px-4" href="{{ route('products') }}"><span>SEE <b>ALL
			PRODUCTS</b> &gt;</span> </a>
		</div>
		<div class="container-fluid pt-2">
			<div class="row pb-2">
				<div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#98b0c8;">
					<div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
						<div class="row">
							<div class="col-12 col-lg-6 p-lg-0">
								@include('includes.middle.form-ebook-new')
							</div>
							<div class="col-12 col-lg-6 pl-lg-0 text-center px-0">
								<img src="/img/new-products-2023-banner-form-m-new.png" width="524" height="264" alt="Magical Kids Bedrooms Circu Kid's Luxury Furniture" class="img-fluid text-center">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-8 p-0 d-none d-lg-block">
					<div class="col-12 p-0">
						<a href="https://www.circu.net/ebook/new-products-2023?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-newproducts-23&utm_campanha=newproducts">
						<img src="/img/home/new-products-banner-form.jpg" alt="Catalogue Circu Kid's Luxury Furniture" style="width:100%;" class="img-fluid d-none d-lg-block">
						</a>
					</div>
					<div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%;">
						@include('includes.middle.form-ebook-new')
					</div>
				</div>
				<div class="col-12 col-lg-4 p-0">
					<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
					<img src="/img/pag-styles/modern-luxury/banner-side-form-spring-sale.jpg" alt="New Showroom Circu Magical Furniture" class="img-fluid w-100">
					</a>
				</div>
			</div>
		</div>
		@endif
		@if ($key == 'storage')
		<div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-bubble-gum-3-drawers-circu-magical-furniture.jpg');background-position:center bottom;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/bubble-gum-chest-3-drawers"'>
			<div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
				BUBBLE GUM 3 DRAWERS | <span style="font-size:0.9rem;">SEE MORE ></span>
			</div>
		</div>
		<div class="col-12 slideToggle text-center my-3">
			<a class="btn-get-price py-2 px-4" href="{{ route('products') }}"><span>SEE <b>ALL
			PRODUCTS</b> &gt;</span> </a>
		</div>
		<div class="container-fluid pt-2">
			<div class="row pb-2">
				<div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#fefeda;">
					<div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
						<div class="row">
							<div class="col-12 col-lg-6 p-lg-0">
								@include('includes.middle.form-spring-sale-catalogue')
							</div>
							<div class="col-12 col-lg-6 pl-lg-0 text-center px-0">
                                <a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
                                    <img src="/img/form-imgs/big-form-spring-sale-m.jpg" width="524" height="264" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" class="img-fluid text-center">
                                </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-8 p-0 d-none d-lg-block">
					<div class="col-12 p-0">
						<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
						    <img src="/img/form-imgs/big-form-spring-sale.jpg" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" style="width:100%;" class="img-fluid d-none d-lg-block">
						</a>
					</div>
					<div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%;">
						@include('includes.middle.form-spring-sale-catalogue')
					</div>
				</div>
				<div class="col-12 col-lg-4 p-0">
					<a href="https://www.circu.net/circu-new-showroom?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-newshowroom&utm_campanha=showroom">
					<img src="/img/pag-styles/modern-luxury/banner-side-form-new-showroom.jpg" alt="New Showroom Circu Magical Furniture" class="img-fluid w-100">
					</a>
				</div>
			</div>
		</div>
		@endif
		@if ($key == 'mirrors')
		<div class="d-none d-lg-block col-lg-3 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/small-magical-mirror-circu-magical-furniture.jpg');background-position:center bottom;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/magical-mirror"'>
			<div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;"> MAGICAL MIRROR | <span style="font-size:0.9rem;">SEE MORE ></span></div>
		</div>
		<div class="col-12 slideToggle text-center my-3">
			<a class="btn-get-price py-2 px-4" href="{{ route('products') }}"><span>SEE <b>ALL PRODUCTS</b> &gt;</span> </a>
		</div>
		<div class="row pt-2">
			<div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#98b0c8;">
				<div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
					<div class="row">
						<div class="col-12 col-lg-6 p-lg-0">
							@include('includes.middle.form-catalogue-2022')
						</div>
						<div class="col-12 col-lg-6 pl-lg-0 text-center px-0">
							<img src="/img/catalogo-2022-banner-form-mobile.jpg" width="524" height="264" alt="Magical Kids Bedrooms Circu Kid's Luxury Furniture" class="img-fluid text-center">
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-8 p-0 d-none d-lg-block">
				<div class="col-12 p-0">
					<a href="https://www.circu.net/download-catalogue?utm_origem=blog&utm_meio=banner-categoria&utm_conteudo=Circu-brandcatalog&utm_campanha=catalogue">
					<img src="/img/home/bg-banner-ebook.jpg" alt="Catalogue Circu Kid's Luxury Furniture" style="width:100%;" class="img-fluid d-none d-lg-block">
					</a>
				</div>
				<div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%;">
					@include('includes.middle.form-catalogue-2022')
				</div>
			</div>
			<div class="col-12 col-lg-4 p-0">
				<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
				    <img src="/img/pag-styles/modern-luxury/banner-side-form-spring-sale.jpg" alt="Stocklist Spring Sale Circu Magical Furniture" class="img-fluid w-100">
				</a>
			</div>
		</div>
		@endif
		@if ($key == 'play-learn')
		<!-- <div class="d-none d-lg-block col-lg-9 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-bubble-gum-gym-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/bubble-gum-gym"'>
			<div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
			    BUBBLE GUM GYM | <span style="font-size:0.9rem;">SEE MORE ></span>
			</div>
			</div> -->
		<div class="col-12 slideToggle text-center my-3">
			<a class="btn-get-price py-2 px-4" href="{{ route('products') }}"><span>SEE <b>ALL
			PRODUCTS</b> &gt;</span> </a>
		</div>
		<div class="row pt-2">
			<div class="col-12 col-lg-8 my-2 d-block d-lg-none" style="background-color:#a1b2ac;">
				<div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
					<div class="row">
						<div class="col-12 col-lg-6 p-lg-0">
							@include('includes.middle.form-ebook-new')
						</div>
						<div class="col-12 col-lg-6 pl-lg-0 text-center">
							<img src="/img/new-products-2023-banner-form-m-new.png" width="524" height="264" alt="New Products Circu Kid's Luxury Furniture" class="img-fluid text-center">
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-8 p-0 d-none d-lg-block">
				<div class="col-12 p-0">
					<a href="https://www.circu.net/ebook/new-products-2023?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-newproducts-23&utm_campanha=newproducts">
					<img src="/img/home/new-products-banner-form.jpg" alt="New Products Circu Kid's Luxury Furniture" style="width:100%;" class="img-fluid d-none d-lg-block">
					</a>
				</div>
				<div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%;">
					@include('includes.middle.form-ebook-new')
				</div>
			</div>
			<div class="col-12 col-lg-4 p-0">
				<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
				<img src="/img/pag-styles/modern-luxury/banner-side-form-spring-sale.jpg" alt="Stocklist Spring Sale Circu Magical Furniture" class="img-fluid w-100">
				</a>
			</div>
		</div>
		@endif
		@if ($key == 'rugs')
		{{-- 
		<div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-cloud-craddle-circu-magical-furniture.jpg');background-position:center 68%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/the-whales-class-rug"'>
			<div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">THE WHALE'S CLASS RUG |<span style="font-size:0.9rem;">SEE MORE ></span></div>
		</div>
		--}}
		<div class="col-12 slideToggle text-center my-3">
			<a class="btn-get-price py-2 px-4" href="{{ route('products') }}"><span>SEE <b>ALL
			PRODUCTS</b> &gt;</span> </a>
		</div>
		<!-- <div class="container-fluid my-3" style="background-color:#d4a9a0;">
			<div class="row">
			    <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
			        <div class="row">
			            <div class="col-12 col-lg-6">
			                @include('includes.middle.form-ebook-new')
			            </div>
			            <div class="col-12 col-lg-6">
			                <img src="/img/new-products-2022.gif" width="992" height="500" alt="New Products 2022 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
			                <img src="/img/new-products-2022-mobile.gif" width="524" height="264" alt="New Products 2022 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
			            </div>
			        </div>
			    </div>
			</div>
			</div> -->
		<div class="container-fluid pt-2">
			<div class="row pb-2">
				<div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#fefeda;">
                    <div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
                        <div class="row">
                            <div class="col-12 col-lg-6 p-lg-0">
                                @include('includes.middle.form-spring-sale-catalogue')
                            </div>
                            <div class="col-12 col-lg-6 pl-lg-0 text-center px-0">
                                <a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
                                    <img src="/img/form-imgs/big-form-spring-sale-m.jpg" width="524" height="264" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" class="img-fluid text-center">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 p-0 d-none d-lg-block">
                    <div class="col-12 p-0">
                        <a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
                            <img src="/img/form-imgs/big-form-spring-sale.jpg" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" style="width:100%;" class="img-fluid d-none d-lg-block">
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%;">
                        @include('includes.middle.form-spring-sale-catalogue')
                    </div>
                </div>
				<div class="col-12 col-lg-4 p-0">
					<a href="https://www.circu.net/ebook/new-products-2023?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-newproducts-23&utm_campanha=newproducts">
					<img src="/img/pag-styles/modern-luxury/new-products-2023.jpg" alt="New Products 2023 Circu Magical Furniture" class="img-fluid w-100">
					</a>
				</div>
			</div>
		</div>
		@endif
		@if ($key == 'seating')
	</div>
</div>
<!-- <div class="container-fluid background_light_green my-3">
	<div class="row">
	  <div class="col-12 p-0">
	    <a href="https://www.circu.net/category/lighting">
	      <img src="/img/graphic-collection-circu-magical-furniture.jpg" width="1920" height="400" alt="New Collection Graphic Lamps" class="img-fluid d-none d-sm-block">
	      <img src="/img/graphic-collection-circu-magical-furniture-mobile.gif" width="524" height="264" alt="New Collection Graphic Lamps" class="img-fluid d-block d-sm-none">
	    </a>
	  </div>
	</div>
	</div> -->
<div class="container-fluid">
	<div class="row">
		@endif
		@if ($key == 'beds')
		<div class="col-12 slideToggle text-center my-3">
			<a class="btn-get-price py-2 px-4" href="{{ route('products') }}"><span>SEE <b>ALL PRODUCTS</b>
			&gt;</span> </a>
		</div>
	</div>
</div>
@if ($key == 'beds')
<div class="container-fluid pt-2">
	<div class="row pb-2">
		<div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#98b0c8;">
			<div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
				<div class="row">
					<div class="col-12 col-lg-6 p-lg-0">
						@include('includes.middle.form-ebook-new')
					</div>
					<div class="col-12 col-lg-6 pl-lg-0 text-center px-0">
						<img src="/img/new-products-2023-banner-form-m-new.png" width="524" height="264" alt="Magical Kids Bedrooms Circu Kid's Luxury Furniture" class="img-fluid text-center">
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-8 p-0 d-none d-lg-block">
			<div class="col-12 p-0">
				<a href="https://www.circu.net/ebook/new-products-2023?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-newproducts-23&utm_campanha=newproducts">
				<img src="/img/home/new-products-banner-form.jpg" alt="Catalogue Circu Kid's Luxury Furniture" style="width:100%;" class="img-fluid d-none d-lg-block">
				</a>
			</div>
			<div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%;">
				@include('includes.middle.form-ebook-new')
			</div>
		</div>
		<div class="col-12 col-lg-4 p-0 d-none d-lg-block">
			<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
			<img src="/img/pag-styles/modern-luxury/banner-side-form-spring-sale.jpg" alt="Stocklist Spring Sale Circu Magical Furniture" class="img-fluid w-100">
			</a>
		</div>
	</div>
</div>
@endif
<div class="container-fluid">
	<div class="row">
		@endif
		@endif
		@endforeach
	</div>
	<!-- end row -->
</div>
@include('includes.menu-visual-new')
<div class="container-fluid py-2">
	@include('includes.banners-hotspots')
</div>
@endsection
@section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript">
	jQuery('.form-d-block-mobile input[name="email"]').on('change', function() {
	jQuery('.formvisibleMobile').css('display', 'block');
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
	
	$(document).ready(function() {
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
	            slidesToShow: 9,
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
	$(document).ready(function() {
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
	
	    // $('.slider-for').each(function(num, elem) {
	    //     elem = $(elem);
	    //     elem.slick({
	    //         slidesToShow: 1,
	    //         slidesToScroll: 1,
	    //         arrows: true,
	    //         prevArrow: '<div class="slider-button-prev prev-item"><i class="fas fa-chevron-left"></i></div>',
	    //         nextArrow: '<div class="slider-button-next next-item"><i class="fas fa-chevron-right"></i></div>',
	    //         draggable: false,
	    //         fade: true,
	    //         accessibility: false,
	    //         asNavFor: '.slider-nav'
	    //     });
	
	    //     elem.next('.slider-nav').slick({
	    //         slidesToShow: 9,
	    //         slidesToScroll: 1,
	    //         asNavFor: '.slider-for',
	    //         variableWidth: true,
	    //         dots: false,
	    //         centerMode: true,
	    //         arrows: false,
	    //         draggable: false,
	    //         accessibility: false,
	    //         focusOnSelect: true
	    //     });
	    // });
	
	    // $('.slider-nav .slick-slide').on('click', function(event) {
	    //     $('.slider-for').slick('slickGoTo', $(this).data('slickIndex'));
	    // });
	
	    // var elm = $('.slider-nav '),
	    //     getSlick = elm.slick('getSlick');
	
	    // if (getSlick.slideCount <= getSlick.options.slidesToShow) {
	    //     elm.addClass('slick-no-slide');
	    // } else {
	    //     elm.removeClass('slick-no-slide');
	    // }
	
	    $('.ahref-smooth-scrool').click(function() {
	        $('html, body').animate({
	            scrollTop: $($(this).attr('href')).offset().top
	        }, 500);
	        return false;
	    });
	
	    $('a[href^="#"]').on('click', function(event) {
	        var target = $(this.getAttribute('href'));
	        if (target.length) {
	            event.preventDefault();
	            $('html, body').stop().animate({
	                scrollTop: target.offset().top - 155
	            }, 1000);
	        }
	    });
	});
	
	$('#navbarFilters .dropdown-toggle').click(function(event) {
	    event.stopPropagation();
	    event.preventDefault();
	});
	
	$('.trigger-filter').on('click', function(e) {
	    $search_term = $(e.target).attr("data-target");
	
	    $.ajax({
	        url: 'https://www.circu.net/filter-new/' + $search_term,
	        type: 'GET',
	        success: function(data) {
	            $('#filterResults').html(data);
	            $('.clear-filter').fadeIn();
	            $('html, body').animate({
	                scrollTop: $("#filterResults").offset().top - 150
	            }, 500);
	        }
	    });
	
	});
	
	$('.clear-filter').on('click', function(e) {
	    $.ajax({
	        url: 'https://www.circu.net/all-products-initial-new',
	        type: 'GET',
	        success: function(data) {
	            $('#filterResults').html(data);
	            $('.clear-filter').fadeOut();
	            $('html, body').animate({
	                scrollTop: $("#filterResults").offset().top - 150
	            }, 500);
	        }
	    });
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