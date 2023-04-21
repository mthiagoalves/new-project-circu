@extends('layouts.master')
@section('meta')
<title>{{$post->post_title}} | Circu Magical Furniture</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="circu">
@endsection
@section('head-includes')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style type="text/css">
	body {
	width: 100%;
	text-align: justify;
	color: #ababab;
	font-family: Raleway, sans-serif;
	word-wrap: break-word;
	margin: 0;
	background-color: #fff;
	overflow-x: hidden;
	}
	.title-article{
	color: #8bb9b6;
	letter-spacing: 1px;
	font-size: 1.6rem;
	font-weight: bold;
	padding: 0px;
	margin: 15px 15px 0px 15px;
	text-align: center;
	text-transform: uppercase;
	}
	.subtitle-article{
	color: #8bb9b6;
	letter-spacing: 1px;
	font-size: 1.2rem;
	font-weight: normal;
	padding: 0px;
	margin: 5px 15px 15px 15px;
	text-align: center;
	text-transform: uppercase;
	}
	.text-article{
	text-align: justify;
	color: #87878f;
	line-height: 22px;
	font-size: 13px;
	letter-spacing: 1px;
	}
	.swiper-container .arrow-banners {
	color: #fff;
	opacity: 70%;
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
	@media (min-width:641px) {
	.slider-main.swiper-slide {
	width: auto !important;
	}

	}
	.card-img{
		position: relative;
		width: 100%;
		height: auto;
		padding-top: calc(100% * (100 / 300));
	}

	.img-card{
		position: absolute;
		top: 0;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.overlay-background{
		width: 100%;
		height: 100%;
		background-color: #8bb9b680;
		display: flex;
		justify-content: center;
	}

	.content-overlay{
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		color: #ffffff;
		text-align: center
	}

	.title-overlay{
		text-transform: uppercase;
		font-size: 1.2rem;
		color: #ffffff;
	}
	.content-overlay i{
		text-transform: uppercase;
		font-size: 2.3rem;
		color: #ffffff;
	}
	.content-overlay p{
		text-transform: uppercase;
		font-size: 0.8rem;
		color: #ffffff;
	}

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

</style>
@endsection
@section('main-content')

<div class="container-fluid p-0">
	<div class="row">
		<div class="col-10 offset-1 col-lg-5 m-auto p-0">
			<h1 class="title-article">{{$post->post_title}}</h1>

			<p class="text-article">{!!$post->post_content!!}</p>
		</div>
	</div>
</div>
{{-- <div class="container-fluid">
	<div class="row">
		<div class="col-12 p-0">
			<h3 class="subtitle-article">
				SHOP THE LOOK
			</h3>
		</div>
		@foreach ($products as $product)
		<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box">
            <div class="product_thumb py-4 px-3">
                @if (file_exists('./img/products/thumbnails/' . $product->slug . '-circu-magical-furniture.png'))
                <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid w-100"> @else
                <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid w-100"> @endif

                <div class="product--title">
                    <span class="name">{{ $product->name }}</span>
                    <br class="d-block d-lg-none">
                    <span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $product->slug]) }}"><span>GET
                                <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>

                @if (($product->is_new && $product->slug == 'bubble-gum-bed') || $product->slug == 'bubble-gum-bench' || $product->slug == 'bubble-gum-dressing-table' || $product->slug == 'bubble-gum-chest-3-drawers' || $product->slug == 'bubble-gum-chest-2-drawers'
                || $product->slug == 'bubble-gum-desk' || $product->slug == 'bubble-slide' || $product->slug == 'bubble-loop' || $product->slug == 'bubble-drop' || $product->slug == 'bubble-gum-playground' || $product->slug == 'bubble-gum-big-mirror'
                || $product->slug == 'bubble-gum-small-mirror' || $product->slug == 'cotton-candy-sofa' || $product->slug == 'rainbow-sofa')
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
                                <img src="/img/products/{{ $product->slug }}/finishes/{{ $product->slug }}-circu-magical-furniture-{{ $product_sample->sample->slug }}.png" width="960" height="800" alt="" class="img-fluid w-100">
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
                            <img src="/img/products/thumbnails-covers/{{ $product->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid w-100">
                        </a>
                    </div>
                    @endif

                    <div class="col-12 clearfix position-relative mt-3 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $product->slug]) }}"><span>GET
                                    <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
		@endforeach
	</div>
</div> --}}

<div class="container-fluid pt-3">
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
            <a href="https://www.circu.net/circu-new-showroom?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-newshowroom&utm_campanha=showroom">
                <img src="/img/pag-styles/modern-luxury/banner-side-form-new-showroom.jpg" alt="New Showroom Circu Magical Furniture" class="img-fluid w-100">
            </a>
        </div>
    </div>
</div>

@endsection
@section('footer-includes')
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/addtoany.js"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript">
	$(window).on('load', function() {
	   var swiper = new Swiper('.swiper-ambience-inspirations.swiper-container', {
	       centeredSlides: false,
	       spaceBetween: 5,
		   initialSlide: 10,
	       loop: false,
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
</script>
@endsection