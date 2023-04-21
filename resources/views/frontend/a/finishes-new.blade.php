@extends('layouts.master')
@section('main-content')
<div class="container-fluid p-0">
	<div class="col-12 p-0 ">
		<div class="col-12 p-0 ">
			<video id="myVideo1" class="videomy myVideo d-none d-md-block w-100" onloadeddata="this.play();" autoplay muted loop playsinline style="position:relative;">
				<source class="d-none d-md-block" src="/includes/video/brand-homepage.mp4" loop muted controls autoplay type="video/mp4">
				<source class="d-none d-md-block" src="/includes/video/brand-homepage.mp4" loop muted controls autoplay type="video/webm">
			</video>
			<video id="myVideo1" class="videomy myVideo d-block d-md-none w-100" onloadeddata="this.play();" autoplay muted loop playsinline style="position:relative;">
				<source class="d-block d-md-none" src="https://www.circu.net/includes/video/brand-about-mobile.mp4" loop muted controls autoplay type="video/mp4">
				<source class="d-block d-md-none" src="https://www.circu.net/includes/video/brand-about-mobile.mp4" loop muted controls autoplay type="video/webm">
			</video>
			<div class="position-absolute" style="bottom:2%;left:2.5%;">
				<div class="play-video">
					<img class="img-d-none" id="soundimage" style="width: 30px !important;float: none !important;margin-top: -3px;filter: invert(100%);" src="/img/about/volume-up.svg">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-sm-5 mx-auto text-center txt-section2 pt-5 pb-3">
		<h2 class="title-finishes">CIRCU MATERIALS & FINISHES</h2>
		<p class="description py-3">Circu presents you a range of product finishes with a careful selection of fabrics, wood veneers, lacquers and original translucent colors. Ancient techniques such as application of metallic leafs, copper and brass work complete our extraordinary
			finishings list.
		</p>
	</div>
	<div class="col-12 menu-filters" style="border: 0 !important;">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="collapse navbar-collapse show" id="navbarFilters">
				<ul class="navbar-nav w-100">
					<div class="col-12 col-lg-6 float-lg-left d-none d-lg-inline-block">
						<li class="nav-item float-left">
							<a class="nav-link trigger-filter" href="#" id="navbarFiltersCollections" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-target="best sellers" style="font-size:0.95rem;">
							FINISHES
							</a>
						</li>
					</div>
					<div class="col-12 col-lg-6 float-left float-lg-right text-lg-right">
						<li class="nav-item dropdown float-lg-right pl-0">
							<a class="nav-link clear-filter float-left" href="" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-times"></i> Clear Filter
							</a>
						</li>
						<li class="nav-item dropdown float-left float-lg-right pl-0">
							<a class="nav-link dropdown-toggle" href="#" id="navbarFiltersCategory" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Category
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarFiltersCategory">
								<a class="dropdown-item trigger-filter" data-target="lacquer colors">Lacquer Colors</a>
								<a class="dropdown-item trigger-filter" data-target="fabrics">Fabrics</a>
								<a class="dropdown-item trigger-filter" data-target="Metallic finishes">Metalic Finishes</a>
								<a class="dropdown-item trigger-filter" data-target="Metallic Leafs">Metalic Leafs</a>
								<a class="dropdown-item trigger-filter" data-target="woods">Woods</a>
								<a class="dropdown-item trigger-filter" data-target="special finishings">Specials Finihings</a>
							</div>
						</li>
				</ul>
				</div>
		</nav>
		</div>
	</div>
</div>
<div id="filterResults">
	<div class="container-fluid p-0 my-3">
		<div class="row m-0">
			@foreach( $all_finishes as $key => $finish)
			<h2 class="col-12 category_name_title text-center mb-0 {{$key}}"><span>{{ strtoupper($key) }}</span></h2>
			@php $countTest = 0; @endphp @foreach($finish as $sample ) @php $countTest+1; @endphp
			<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box {{$countTest++}}">
				<div class="product_thumb py-4 px-3">
					<img src="/img/icons/finishes-new/thumbnail/{{$sample->slug}}.png" width="960" height="800" class="img-fluid">
					<div class="product--title">
						@if(!(empty($sample->sample_languages[0]->name)))
						<span class="name">{{$sample->sample_languages[0]->name}}</span> @endif
					</div>
					<div class="col-12 clearfix position-relative mt-1 p-0">
						<div class="slideToggle">
							<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-finish-info', ['name' => $sample->slug] ) }}"><span>GET <b>INFO <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
					<div class="product-box--content">
						<div>
							<img src="/img/icons/finishes-new/thumbnail-hover/{{$sample->slug}}.png" width="500" height="420" alt="" class="img-fluid">
						</div>
						<div class="col-12 clearfix position-relative mt-3 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-finish-info', ['name' => $sample->slug] ) }}"><span>GET <b>INFO <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@if($key == "Special Finishings") @if($countTest == 3)
			<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box ">
				<div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
					<img src="/img/icons/finishes-new/products/magical-mirror.jpg" width="960" height="800" class="img-fluid">
					<div class="product--title">
						<span class="name">Magical Mirror</span>
					</div>
					<div class="col-12 clearfix position-relative mt-1 p-0">
						<div class="slideToggle">
							<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/magical-mirror"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
					<div class="product-box--content">
						<div>
							<img src="/img/icons/finishes-new/products/magical-mirror.jpg" width="500" height="420" alt="" class="img-fluid">
						</div>
						<div class="col-12 clearfix position-relative mt-3 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/magical-mirror"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif @if($countTest == 6)
			<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box ">
				<div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
					<img src="/img/icons/finishes-new/products/mermaid-bed.jpg" width="960" height="800" class="img-fluid">
					<div class="product--title">
						<span class="name">Little Mermaid Bed</span>
					</div>
					<div class="col-12 clearfix position-relative mt-1 p-0">
						<div class="slideToggle">
							<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/mermaid-bed"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
					<div class="product-box--content">
						<div>
							<img src="/img/icons/finishes-new/products/mermaid-bed.jpg" width="500" height="420" alt="" class="img-fluid">
						</div>
						<div class="col-12 clearfix position-relative mt-3 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/mermaid-bed"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif @endif @endforeach @if($key == "Lacquer Colors")
			<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box ">
				<div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
					<img src="/img/icons/finishes-new/products/rocky-rocket.jpg" width="960" height="800" class="img-fluid">
					<div class="product--title">
						<span class="name">Rocky rocket</span>
					</div>
					<div class="col-12 clearfix position-relative mt-1 p-0">
						<div class="slideToggle">
							<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/rocky-rocket"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
					<div class="product-box--content">
						<div>
							<img src="/img/icons/finishes-new/products/rocky-rocket.jpg" width="500" height="420" alt="" class="img-fluid">
						</div>
						<div class="col-12 clearfix position-relative mt-3 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/rocky-rocket"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- form -->
			@include('includes.middle.form-download-pricelist-showroom')

			@endif @if($key == "Fabrics")
			{{-- 
			<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box ">
				<div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
					<img src="/img/icons/finishes-new/products/little-cloud-nightstand.jpg" width="960" height="800" class="img-fluid">
					<div class="product--title">
						<span class="name">Little Cloud Nigthstand</span>
					</div>
					<div class="col-12 clearfix position-relative mt-1 p-0">
						<div class="slideToggle">
							<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/little-cloud-nightstand"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
					<div class="product-box--content">
						<div>
							<img src="/img/icons/finishes-new/products/little-cloud-nightstand.jpg" width="500" height="420" alt="" class="img-fluid">
						</div>
						<div class="col-12 clearfix position-relative mt-3 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/little-cloud-nightstand"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			--}}
			<!-- <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-tristen-bed-circu-circu-magical-furniture.jpg');background-position:center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/tristen-bed"'>
				<div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">TRISTEN BED | <span style="font-size:0.9rem;">SEE MORE ></span></div>
				</div> -->
			<div class="container-fluid p-0 pt-2 pb-2">
				<div class="col-12 p-0">
					<p class="col-12 texto_room text-center mb-0 px-3 px-md-0 pb-2 pb-md-0"><span>Circu's Designers are ready to help you create your own magical kid's room.<br>Contact us today to know more about out Interior Design Service.</span></p>
				</div>
				<div class="col-12 text-center pt-2">
					<a class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/interior-design-service"><span><b>BOOK NOW YOUR FREE CONSULTATION</b></span></a>
				</div>
			</div>
			@endif @if($key == "Metallic Leafs")
			<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box ">
				<div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
					<img src="/img/icons/finishes-new/products/gold-toy-box.jpg" width="960" height="800" class="img-fluid">
					<div class="product--title">
						<span class="name">Gold Toy Box</span>
					</div>
					<div class="col-12 clearfix position-relative mt-1 p-0">
						<div class="slideToggle">
							<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/gold-box"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
					<div class="product-box--content">
						<div>
							<img src="/img/icons/finishes-new/products/gold-toy-box.jpg" width="500" height="420" alt="" class="img-fluid">
						</div>
						<div class="col-12 clearfix position-relative mt-3 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/gold-box"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid my-2" style="background-color:#9BB1C9;">
				<div class="row">
					<div class="col-12 col-xl-10 offset-0 offset-xl-1 py-1">
						<div class="row">
							<div class="col-12 col-lg-6">
								@include('includes.middle.form-catalogue-2022')
							</div>
							<div class="col-12 col-lg-6">
								<img src="/img/catalogue-circu-all-products.jpg" width="992" height="500" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
								<img src="/img/catalogo-2022-banner-form-mobile.jpg" width="524" height="264" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid d-block- d-sm-none">
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif @if($key == "Metallic Finishes")
			<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box ">
				<div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
					<img src="/img/icons/finishes-new/products/puzzled-bookcase.jpg" width="960" height="800" class="img-fluid">
					<div class="product--title">
						<span class="name">Puzzled Bookcase</span>
					</div>
					<div class="col-12 clearfix position-relative mt-1 p-0">
						<div class="slideToggle">
							<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/puzzled-bookcase-desk"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
					<div class="product-box--content">
						<div>
							<img src="/img/icons/finishes-new/products/puzzled-bookcase.jpg" width="500" height="420" alt="" class="img-fluid">
						</div>
						<div class="col-12 clearfix position-relative mt-3 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/puzzled-bookcase-desk"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
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
			@endif @if($key == "Woods")
			<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box ">
				<div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
					<img src="/img/icons/finishes-new/products/bun-van-bed.jpg" width="960" height="800" class="img-fluid">
					<div class="product--title">
						<span class="name">Bun Van Bed</span>
					</div>
					<div class="col-12 clearfix position-relative mt-1 p-0">
						<div class="slideToggle">
							<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/bun-van"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
					<div class="product-box--content">
						<div>
							<img src="/img/icons/finishes-new/products/bun-van-bed.jpg" width="500" height="420" alt="" class="img-fluid">
						</div>
						<div class="col-12 clearfix position-relative mt-3 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price/bun-van"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- form -->
			@include('includes.middle.form-download-pricelist-showroom')
			
			@endif
			@endforeach
		</div>
	</div>
</div>
@endsection @section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript" src="/js/addtoany.js"></script>
<script>
	jQuery('.form-d-block-mobile input[name="email"]').on('change', function() {
		    jQuery('.formvisibleMobile').css('display', 'block');
		});
	    $('.trigger-opt-item').on('click', function(e) {
	        $search_term = $(e.target).attr("data-target");
	        $product_slug = $(e.target).attr("data-product");
	
	        $.ajax({
	            url: 'https://www.circu.net/filter-samples/' + $product_slug + '/' + $search_term,
	            type: 'GET',
	            success: function(data) {
	                $('#product-samples').fadeIn().html(data);
	                $('html, body').animate({
	                    scrollTop: $("#product-samples").offset().top - 150
	                }, 500);
	
	                var lastScrollTop = 0;
	                window.addEventListener("scroll", function() {
	                    var st = window.pageYOffset || document.documentElement.scrollTop;
	                    if (st < lastScrollTop) {
	                        $("#product-samples").fadeOut();
	                    }
	                    lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
	                }, false);
	            }
	        });
	    });
</script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('.fas.fa-print').click(function() {
	        window.print();
	    });
	    $('.product-slide--details').slick({
	        slidesToShow: 1,
	        useTransform: false,
	        asNavFor: '.product-slide--nav',
	        nextArrow: '<span class="lnr lnr-chevron-right" style="font-size:20px;position: absolute;top: 50%;right: 20px;z-index: 99;cursor:pointer;"></span>',
	        prevArrow: '<span class="lnr lnr-chevron-left" style="font-size:20px;position: absolute;top: 50%;left: 20px;z-index: 99;cursor:pointer;"></span>',
	        autoplaySpeed: 4000,
	        speed: 600,
	    })
	
	    $('.product-slide--nav').slick({
	        slidesToShow: 6,
	        useTransform: false,
	        asNavFor: '.product-slide--details',
	        focusOnSelect: true,
	        vertical: true,
	        verticalSwiping: true,
	        nextArrow: '<span class="lnr lnr-chevron-down" style="font-size:20px;z-index: 99;cursor:pointer;"></span>',
	        prevArrow: '<span class="lnr lnr-chevron-up" style="font-size:20px;z-index: 99;cursor:pointer;"></span>',
	    });
	
	    $('.product-slide--press').slick({
	        slidesToShow: 8,
	        slidesToScroll: 1,
	        autoplay: true,
	        autoplaySpeed: 2000,
	        variableWidth: true,
	        arrows: false,
	    });
	
	    $('.product--slide-covers').slick({
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        autoplay: false,
	        arrows: false,
	        dots: true,
	    });
	
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
	
	$('#navbarFilters .dropdown-toggle').click(function(event) {
	    event.stopPropagation();
	    event.preventDefault();
	});
	
	$('.trigger-filter').on('click', function(e) {
	    $search_term = $(e.target).attr("data-target");
	
	    $.ajax({
	        url: 'https://www.circu.net/filter-finishes/' + $search_term,
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
	
	// $('.clear-filter').on('click', function(e) {
	//     $.ajax({
	//     url: 'https://www.circu.net/filter-finishes',
	//     type: 'GET',
	//     success: function(data) {
	//         $('#filterResults').html(data);
	//         $('.clear-filter').fadeOut();
	//         $('html, body').animate({
	//         scrollTop: $("#filterResults").offset().top - 150
	//         }, 500);
	//     }
	//     });
	// });
</script>
@endsection @section('head-includes')
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
	color: #666666 !important;
	font-weight: normal;
	cursor: pointer;
	}
	.videoplayer_product {
	float: none;
	clear: both;
	width: 100%;
	height: auto;
	position: relative;
	padding-bottom: 68%;
	padding-top: 25px;
	}
	.slick-slider .slick-track,
	.slick-slider .slick-list {
	transform: none;
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
	/* --------------- linha de produtos --------------- */
	.txt-section2 .title-finishes {
	font-family: 'RalewayMedium', sans-serif;
	text-transform: uppercase;
	font-size: 1.6rem;
	letter-spacing: 2px;
	padding: 0.5rem 2rem;
	color: #9fbfbc !important;
	font-weight: normal;
	cursor: auto !important;
	}
	.txt-section2 .description {
	font-size: 1rem;
	color: #8e8e8e;
	}
</style>
@endsection @section('meta')
  <title>{{$meta_data->meta_title}}</title>
  <meta name="description" content="{{$meta_data->meta_description}}" />
  <meta name="keywords" content="{{$meta_data->key_words}}" />
<meta name="author" content="circu">
<meta property="og:type" content="product" />
  <meta property="og:title" content="{{$meta_data->meta_title}}" />
  <meta property="og:description" content="{{$meta_data->meta_description}}" />
<meta property="og:url" content="https://www.circu.net/finishes" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="https://www.circu.net/img/slides/home-ambiences/sky-one-plane-bed-circu-magical-furniture.jpg" />
@endsection