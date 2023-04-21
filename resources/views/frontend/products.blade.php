@extends('layouts.master') @section('meta')
<title>{{$meta_data->meta_title}}</title>
<meta name="description" content="{{$meta_data->meta_description}}" />
<meta name="keywords" content="{{$meta_data->key_words}}" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$meta_data->meta_title}}" />
<meta property="og:description" content="{{$meta_data->meta_description}}" />
<meta property="og:url" content="http://www.circu.net/about" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="http://www.circu.net/images/logo-circu-magical-furniture.png" />
@endsection @section('head-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<style>
	/*.navbar-nav .dropdown-menu {
	position: absolute !important;
	float: none;
	}
	.dropdown-menu {
	right: 0;
	left: inherit;
	padding: .5rem;
	}*/
	.menu-filters {
	border: 0px;
	padding: 0.5rem;
	}
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
	@media (min-width: 576px) {
	.dropdown-menu {
	left: 0;
	left: inherit;
	padding: .5rem;
	}
	}
	@media (min-width: 992px) {
	.dropdown-menu {
	right: 0;
	left: inherit;
	padding: .5rem;
	}
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
	.form-catlogue-r .form-catalogue-middle-banner {
	top: unset !important;
	transform: unset !important;
	}
	@media (min-width: 1380px) {
	.best-sellers-banners .title-best-sellers {
	color: #fff;
	font-weight: 600;
	font-size: 1.25rem;
	line-height: 1;
	text-shadow: 0.2px 0.5px #3a2d24;
	}
	.best-sellers-banners .subtitle-best-sellers {
	color: #fff;
	font-weight: normal;
	font-size: 0.85rem;
	text-shadow: 0.2px 0.5px #3a2d24;
	}
	}
	@media (min-width: 1200px) and (max-width:1380px) {
	.best-sellers-banners .title-best-sellers {
	color: #fff;
	font-weight: 600;
	font-size: 1.15rem;
	line-height: 1;
	text-shadow: 0.2px 0.5px #3a2d24;
	}
	.best-sellers-banners .subtitle-best-sellers {
	color: #fff;
	font-weight: normal;
	font-size: 0.80rem;
	text-shadow: 0.2px 0.5px #3a2d24;
	}
	}
	@media (min-width:992px) and (max-width:1200px) {
	.best-sellers-banners .title-best-sellers {
	color: #fff;
	font-weight: 600;
	font-size: 1.10rem;
	line-height: 1;
	text-shadow: 0.2px 0.5px #3a2d24;
	}
	.best-sellers-banners .subtitle-best-sellers {
	color: #fff;
	font-weight: normal;
	font-size: 0.7rem;
	text-shadow: 0.2px 0.5px #3a2d24;
	}
	}
	@media (max-width:992px) {
	.best-sellers-banners .title-best-sellers {
	color: #fff;
	font-weight: 600;
	font-size: 1.3rem;
	line-height: 1;
	text-shadow: 0.2px 0.5px #3a2d24;
	}
	.best-sellers-banners .subtitle-best-sellers {
	color: #fff;
	font-weight: normal;
	font-size: 0.9rem;
	text-shadow: 0.2px 0.5px #3a2d24;
	}
	}
	.best-sellers-banners .button {
	font-weight: 600;
	font-size: 12px;
	letter-spacing: 1px;
	padding: 5px 20px 4px;
	margin: 12px auto 0;
	z-index: 2;
	background-color: #fff;
	color: #98b9b5 !important;
	border: 1px solid #fff;
	display: inline-block;
	}
	.swiper-container{
	overflow: hidden;
	margin-top: 50px;
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
	left: 20px !important;
	right: auto;
	text-shadow: 3px 3px 16px #272634;
	position: absolute;
	top: 50%;
	left: 0;
	z-index: 999;
	font-size: 1.8rem;
	}
	.button-prev {
	right: 20px !important;
	left: auto;
	text-shadow: 3px 3px 16px #272634;
	position: absolute;
	top: 50%;
	right: 0;
	z-index: 999;
	font-size: 1.8rem;
	}
	@media (min-width:641px) {
	.slider-main.swiper-slide {
	width: auto !important;
	}
	}
	.owl-next i, .owl-prev i{
		bottom: 0% !important;
	}
</style>
@endsection @section('main-content') @include('includes.menu-visual-new')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 menu-filters">
			<nav class="justify-content-end navbar navbar-expand-lg navbar-light">
				<button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarFilters" aria-controls="navbarFilters" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarFilters">
					<ul class="navbar-nav w-100">
						<div class="col-12 col-lg-6 float-lg-left d-none d-lg-inline-block">
							<li class="nav-item float-left">
								<a class="nav-link trigger-filter" href="#" id="navbarFiltersCollections" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-target="best sellers" style="font-size:0.95rem;">
								</a>
							</li>
						</div>
						<div class="col-12 col-lg-6 float-left float-lg-right text-lg-right">
							<li class="nav-item dropdown float-lg-right pl-0">
								<a class="nav-link clear-filter float-left" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-times"></i> Clear Filter
								</a>
							</li>
							<li class="nav-item dropdown float-left float-lg-right pl-0">
								<a class="nav-link dropdown-toggle" href="#" id="navbarFiltersCategory" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Category
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarFiltersCategory">
									<a class="dropdown-item trigger-filter" data-target="beds">Beds</a>
									<a class="dropdown-item trigger-filter" data-target="seating">Seating</a>
									<a class="dropdown-item trigger-filter" data-target="lighting">Lighting</a>
									<a class="dropdown-item trigger-filter" data-target="storage">Storage</a>
									<a class="dropdown-item trigger-filter" data-target="play and learn">Play & Learn</a>
									<a class="dropdown-item trigger-filter" data-target="mirror">Mirrors</a>
									<a class="dropdown-item trigger-filter" data-target="rugs">Rugs</a>
								</div>
							</li>
							<li class="nav-item dropdown float-left float-lg-right pl-0">
								<a class="nav-link dropdown-toggle" href="#" id="navbarFiltersCollors" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Color
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarFiltersCollors">
									<div class="text-center">
										<a class="dot trigger-filter c-green" data-target="green"></a>
										<a class="dot trigger-filter c-blue" data-target="blue"></a>
										<a class="dot trigger-filter c-red" data-target="red"></a>
										<a class="dot trigger-filter c-pink" data-target="pink"></a>
									</div>
									<div class="text-center">
										<a class="dot trigger-filter c-yellow" data-target="yellow"></a>
										<a class="dot trigger-filter c-grey" data-target="grey"></a>
										<a class="dot trigger-filter c-brown" data-target="brown"></a>
										<a class="dot trigger-filter c-white" data-target="white"></a>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown float-left float-lg-right pl-0">
								<a class="nav-link dropdown-toggle" href="#" id="navbarFiltersCollections" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Collection
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarFiltersCollections">
									<a class="dropdown-item trigger-filter" data-target="Magical Furniture Collection">Magical Furniture</a>
									<a class="dropdown-item trigger-filter" data-target="Cloud Collection">Cloud Collection</a>
									<a class="dropdown-item trigger-filter" data-target="Sky Collection">Sky Collection</a>
									<a class="dropdown-item trigger-filter" data-target="Fantasy Air Collection">Fantasy Air Collection</a>
									<a class="dropdown-item trigger-filter" data-target="Illusion Collection">Illusion Collection</a>
									<a class="dropdown-item trigger-filter" data-target="Animals Stools Collection">Animals Stools Collection</a>
								</div>
							</li>
						</div>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>
<!-- banner products desktop -->
<div class="container-fluid best-sellers-banners d-none d-lg-block">
	<div class="row">
		<div class="col-12 col-md-4 p-0">
			<a href="/products/merida-corner-bed">
				<img src="/img/merida-corner-bed-best-seller-circu-magical-furniture.jpg" alt="Ambience Best Seller" class="img-fluid">
				<div style="width:100%;bottom:0px;z-index: 1;" class="position-absolute">
					<div class="col-12 d-flex align-items-center flex-column justify-content-center text-center">
						<!-- <p class="mt-3 mb-0 text-uppercase title-best-sellers">CHAMELEON PINK MIRROR</p>
							<p class="mb-0 text-uppercase subtitle-best-sellers">THE PERFECT WALL MIRROR TO GIVE YOUR LITTLE MAJESTY'S ROOM A CHARMING DECOR</p> -->
			<a href="/products/merida-corner-bed" class="button mb-3" style="z-index: 1;">KNOW MORE</a>
			</div>
			</div>
			</a>
		</div>
		<div class="col-12 col-md-4 p-0" style="outline: 2px solid white;outline-offset: 0px;">
			<a href="/products/lotus-sofa">
				<img src="/img/lotus-sofa-best-seller-circu-magical-furniture.jpg" alt="Ambience Best Seller" class="img-fluid">
				<div style="width:100%;bottom:0px;z-index: 1;" class="position-absolute">
					<div class="col-12 d-flex align-items-center flex-column justify-content-center text-center">
						<!-- <p class="mt-3 mb-0 text-uppercase title-best-sellers">FANTASY AIR BALLOON</p>
							<p class="mb-0 text-uppercase subtitle-best-sellers">INVOKE THE ROMANTIC AND WHIMSICAL AMBIANCE OF A HOT AIR BALLOON RIDE</p> -->
			<a href="/products/lotus-sofa" class="button mb-3" style="z-index: 1;">KNOW MORE</a>
			</div>
			</div>
			</a>
		</div>
		<div class="col-12 col-md-4 p-0" style="outline: 2px solid white;outline-offset: 0px;">
			<a href="/products/merida-bed">
				<img src="/img/merida-bed-best-seller-circu-magical-furniture.jpg" alt="Ambience Best Seller" class="img-fluid">
				<div style="width:100%;bottom:0px;z-index: 1;" class="position-absolute">
					<div class="col-12 d-flex align-items-center flex-column justify-content-center text-center">
						<!-- <p class="mt-3 mb-0 text-uppercase title-best-sellers">TRISTEN BED</p>
							<p class="mb-0 text-uppercase subtitle-best-sellers">DREAMING SAFE SOUND TO TRAVEL THROUGH IMAGINATION</p> -->
			<a href="/products/merida-bed" class="button mb-3" style="z-index: 1;">KNOW MORE</a>
			</div>
			</div>
			</a>
		</div>
	</div>
</div>
<!-- banner products mobile -->
<div class="container-fluid best-sellers-banners swiper-container swiper-banners d-block d-lg-none mt-0">
	<div class="swiper-wrapper">
		<div class="swiper-slide col-12 col-md-4 p-0" style="outline: 2px solid white;outline-offset: 0px;">
			<a href="/products/merida-corner-bed">
				<img src="/img/merida-corner-bed-best-seller-circu-magical-furniture-m.jpg" alt="Ambience Best Seller" class="img-fluid">
				<div style="width:100%;bottom:0px;z-index: 1;" class="position-absolute">
					<div class="col-12 d-flex align-items-center flex-column justify-content-center text-center">
						<!-- <p class="mt-3 mb-0 text-uppercase title-best-sellers">CHAMELEON PINK MIRROR</p>
							<p class="mb-0 text-uppercase subtitle-best-sellers">THE PERFECT WALL MIRROR TO GIVE YOUR LITTLE MAJESTY'S ROOM A CHARMING DECOR</p> -->
			<a href="/products/merida-corner-bed" class="button mb-3" style="z-index: 1;">SEE MORE</a>
			</div>
			</div>
			</a>
		</div>
		<div class="swiper-slide col-12 col-md-4 p-0" style="outline: 2px solid white;outline-offset: 0px;">
			<a href="/products/lotus-sofa">
				<img src="/img/lotus-sofa-best-seller-circu-magical-furniture-m.jpg" alt="Ambience Best Seller" class="img-fluid">
				<div style="width:100%;bottom:0px;z-index: 1;" class="position-absolute">
					<div class="col-12 d-flex align-items-center flex-column justify-content-center text-center">
						<!-- <p class="mt-3 mb-0 text-uppercase title-best-sellers">FANTASY AIR BALLOON</p>
							<p class="mb-0 text-uppercase subtitle-best-sellers">INVOKE THE ROMANTIC AND WHIMSICAL AMBIANCE OF A HOT AIR BALLOON RIDE</p> -->
			<a href="/products/lotus-sofa" class="button mb-3" style="z-index: 1;">SEE MORE</a>
			</div>
			</div>
			</a>
		</div>
		<div class="swiper-slide col-12 col-md-4 p-0" style="outline: 2px solid white;outline-offset: 0px;">
			<a href="/products/merida-bed">
				<img src="/img/merida-bed-best-seller-circu-magical-furniture-m.jpg" alt="Ambience Best Seller" class="img-fluid">
				<div style="width:100%;bottom:0px;z-index: 1;" class="position-absolute">
					<div class="col-12 d-flex align-items-center flex-column justify-content-center text-center">
						<!-- <p class="mt-3 mb-0 text-uppercase title-best-sellers">TRISTEN BED</p>
							<p class="mb-0 text-uppercase subtitle-best-sellers">DREAMING SAFE SOUND TO TRAVEL THROUGH IMAGINATION</p> -->
			<a href="/products/merida-bed" class="button mb-3" style="z-index: 1;">SEE MORE</a>
			</div>
			</div>
			</a>
		</div>
	</div>
	<div class="button-next arrow-banners">
		<i class="fas fa-chevron-left arrow-banners"></i>
	</div>
	<div class="button-prev arrow-banners">
		<i class="fas fa-chevron-right arrow-banners"></i>
	</div>
	
</div>
<div id="filterResults">
	@include('includes.all-products-initial')
</div>
@endsection @section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/addtoany.js"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript">
	jQuery('.form-d-block-mobile input[name="email"]').on('change', function() {
		    jQuery('.formvisibleMobile').css('display', 'block');
		    });
	
	const swiper_best_sellers = new Swiper('.swiper-container.swiper-banners', {
	    centeredSlides: true,
	    loop: true,
	    autoplay: true,
	    spaceBetween: 10,
	    navigation: {
	        prevEl: '.button-next',
	        nextEl: '.button-prev',
	    },
	    disableOnInteraction: false,
	    slideToClickedSlide: false,
	});
	
	const swiper_blankSpace = new Swiper('.swiper-container.swiper-blank-space', {
	    centeredSlides: true,
	    loop: true,
	    autoplay: true,
	    navigation: {
	        nextEl: '.button-next',
	        prevEl: '.button-prev',
	    },
	    disableOnInteraction: false,
	    slideToClickedSlide: false,
	
	});
	
	    $(document).ready(function() {
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
	            url: 'https://www.circu.net/filter/' + $search_term,
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
	            url: 'https://www.circu.net/all-products-initial',
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
</script>
@endsection