@extends('layouts.master')
@section('meta')
<title>New Products | Circu Magical Furniture - Luxury brand for children</title>
<meta name="description" content="Every child's room will shine even brighter with Circu's latest and most unique pieces! Designed with care and dedication, they are the ideal reflection of comfort and well-being for children." />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas, childrens room, kids room furniture, kids room decoration, kids' room design, children bedroom, kids room interior design, kids room inspiration, kids room decor ideas, design for kids, kids luxury brand, kids beds, beds, storage, lighting, rugs, mirrors, playroom, desks, play and learn, playground, seating, hardware" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="New Products Circu Magical Furniture - Luxury brand for children" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="http://www.circu.net/new-products" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection
@section('head-includes')
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<style>
	.navbar-nav .dropdown-menu {
	position: absolute !important;
	float: none;
	}
	/*.dropdown-menu {
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
	.swiper-container{
	overflow: hidden;
	}
	.button-next {
	text-shadow: 3px 3px 16px #272634;
	position: absolute;
	top: 50%;
	left: 0;
	z-index: 999;
	font-size: 1.8rem;
	}
	.button-prev {
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
<!-- -->
<div class="container-fluid pb-2" id="main-slide">
	<div class="row">
		<!-- SLIDE DESKTOP -->
		<div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative">
			<div class="item">
				<a href="https://www.circu.net/ebook/new-products-2023?utm_origem=website&utm_meio=topbanner-pagnp&utm_conteudo=circu-newproducts-23&utm_campanha=newproducts">
				<img src="/img/slides/main/new-products-2023.jpg" alt="New Products Circu Magical Furniture" class="d-none d-sm-block">
				<img src="/img/slides/main/new-products-2023-mobile-new.jpg" alt="New Products Circu Magical Furniture" class="d-block d-sm-none">
				</a>
			</div>
			<!-- <div class="item">
				<a href="https://www.circu.net/stocklist?utm_origem=website&utm_meio=topbanner-categoria&utm_conteudo=circu-annual-sale-22&utm_campanha=annualsales">
				<img src="/img/slides/main/stocklist-annual-sale.jpg" alt="Stocklist Annual Sale Circu Magical Furniture" class="d-none d-sm-block">
				<img src="/img/slides/main/stocklist-annual-sale-m.jpg" alt="Stocklist Annual Sale Circu Magical Furniture" class="d-block d-sm-none">
				</a>
				</div> -->
			<div class="item">
				<a href="https://www.circu.net/products/merida-corner-bed?utm_origem=website&utm_meio=topbanner-newproducts&utm_conteudo=circu-meridacorner-bed&utm_campanha=product">
				<img src="/img/merida-corner-bed.gif" alt="Merida Corner Bed circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/merida-bed-corner-mobile.gif" alt="Merida Corner Bed circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/products/merida-bed?utm_origem=website&utm_meio=topbanner-newproducts&utm_conteudo=circu-merida-bed&utm_campanha=product">
				<img src="/img/merida-bed.gif" alt="Merida Bed circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/merida-bed-mobile.gif" alt="Merida Bed circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/products/lotus-sofa?utm_origem=website&utm_meio=topbanner-newproducts&utm_conteudo=circu-lotus-sofa&utm_campanha=product">
				<img src="/img/lotus-sofa.gif" alt="Lotus Sofa circu magical furniture" class="img-fluid w-100 d-none d-md-block">
				<img src="/img/lotus-sofa-mobile.gif" alt="Lotus Sofa circu magical furniture" class="img-fluid w-100 d-block d-md-none">
				</a>
			</div>
			<div class="item">
				<a href="https://www.circu.net/ebook/magical-kids-bedrooms-playground-ideas?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-magical-bedrooms-playgrounds&utm_campanha=ourmagicalrooms">
				<img src="/img/slides/main/rooms-inpirations-banner-home.jpg" alt="New Products Circu Magical Furniture" class="d-none d-sm-block">
				<img src="/img/slides/main/rooms-inpirations-banner-home-m.jpg" alt="New Products Circu Magical Furniture" class="d-block d-sm-none">
				</a>
			</div>
		</div>
	</div>
</div>
@include('includes.menu-visual-new-products')
<!-- -->
<div class="container-fluid">
<div class="row">
@foreach ($all_products as $key => $category)
@if (!empty($category))
<div class="col-12 menu-filters" id="{{ $key }}">
	<!-- <a name="{{ $key }}" href="#"></a> -->
	<a href="{{ route('category', ['category' => $key]) }}">
		<h2 class="col-12 category_name_title text-center mb-0"><span>NEW
			<b>{{ ucwords($key) }}</b></span>
		</h2>
	</a>
</div>
@endif 
@php $count = 0; @endphp <!-- start count -->
@if ($key == 'hardware')
<div class="col-12 p-0">
<div class="row grid">
	<div class="grid-sizer col-12 col-sm-6 col-xl-3 d-none"></div>
	@endif
	@if ($key == 'rugs')
	<div class="col-12 p-0">
		<div class="row grid">
			<div class="grid-sizer col-12 col-sm-6 col-xl-3 d-none"></div>
			@endif
			@foreach ($category as $product)
			@if ($key == 'hardware' || $key == 'rugs')
			@php $count++; @endphp
			@endif
			@if ($count < 13)
			<div class="grid-item col-6 col-sm-6 col-md-4 col-lg-3 element-item element-item2 product-box d-none d-md-block">
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
							<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $product->slug]) }}"><span>GET
							<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
					@if (($product->is_new && $product->slug == 'bubble-gum-bed') || $product->slug == 'bubble-gum-bench' || $product->slug == 'bubble-gum-dressing-table' || $product->slug == 'bubble-gum-chest-3-drawers' || $product->slug == 'bubble-gum-chest-2-drawers' || $product->slug == 'bubble-gum-desk' || $product->slug == 'bubble-slide' || $product->slug == 'bubble-drop' || $product->slug == 'bubble-loop' || $product->slug == 'bubble-gum-playground' || $product->slug == 'bubble-gum-big-mirror' || $product->slug == 'bubble-gum-small-mirror' || $product->slug == 'cotton-candy-sofa' || $product->slug == 'rainbow-sofa')
					<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
						<img src="/img/icons/product-new-collection.png">
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
							<div class="d-inline text-center">
								<img src="/img/icons/finishes/{{ $product_sample->sample->slug }}-sm.png" width="20" height="20" alt="" class="img-fluid">
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
						<!-- <div class="product--title my-2">
							<span class="name">{{ $product->name }}</span>
							<span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
							</div> -->
						<div class="col-12 clearfix position-relative mt-3 p-0">
							<div class="slideToggle">
								<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $product->slug]) }}"><span>GET
								<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-item col-6 col-sm-6 col-md-4 col-lg-3 element-item element-item2 product-box d-block d-md-none">
				<div class="product_thumb py-4">
					@if ($product->product_samples->count() > 0)
					<div class="col-12 swiper-container swiper-thumbnails">
						<div class="swiper-wrapper">
							@foreach ($product->product_samples as $product_sample)
							<div class="swiper-slide">
								<a href="{{ route('product', ['product' => $product->slug]) }}">
								<img src="/img/products/{{ $product->slug }}/finishes/{{ $product->slug }}-circu-magical-furniture-{{ $product_sample->sample->slug }}.png" width="960" height="800" alt="" class="img-fluid">
								</a>
							</div>
							@endforeach
						</div>
						<div class="button-next arrow-banners">
							<i class="fas fa-chevron-left arrow-banners"></i>
						</div>
						<div class="button-prev arrow-banners">
							<i class="fas fa-chevron-right arrow-banners"></i>
						</div>
					</div>
					<!-- <div class="col-12 p-0 swiper-container swiper-colors thumbs-class">
						<div class="swiper-wrapper">
							@foreach ($product->product_samples as $product_sample)
							<div class="swiper-slide">
								<img src="/img/icons/finishes/{{ $product_sample->sample->slug }}-sm.png" width="20" height="20" alt="" class="img-fluid">
							</div>
							@endforeach
						</div>
					</div> -->
					@else
					<div>
						<a href="{{ route('product', ['product' => $product->slug]) }}">
						<img src="/img/products/thumbnails-covers/{{ $product->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
						</a>
					</div>
					@endif
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
				</div>
			</div>
			@elseif($count >= 13)
			@if ($count == 13 && $key == 'hardware') 
			<div id="demo-stock-hardware" class="row col-12 m-0 p-0 collapse">
				@endif
				@if ($count == 13 && $key == 'rugs') 
				<div id="demo-stock-rugs" class="row col-12 m-0 p-0 collapse">
					@endif
					<div class="grid-item col-6 col-sm-6 col-md-4 col-lg-3 element-item product-box">
						<div class="product_thumb py-4">
							@if (file_exists('./img/products/thumbnails/' . $product->slug . '-circu-magical-furniture.png'))
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
									<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $product->slug]) }}"><span>GET
									<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
								</div>
							</div>
							@if (($product->is_new && $product->slug == 'bubble-gum-bed') || $product->slug == 'bubble-gum-bench' || $product->slug == 'bubble-gum-dressing-table' || $product->slug == 'bubble-gum-chest-3-drawers' || $product->slug == 'bubble-gum-chest-2-drawers' || $product->slug == 'bubble-gum-desk' || $product->slug == 'bubble-slide' || $product->slug == 'bubble-drop' || $product->slug == 'bubble-loop' || $product->slug == 'bubble-gum-playground' || $product->slug == 'bubble-gum-big-mirror' || $product->slug == 'bubble-gum-small-mirror' || $product->slug == 'cotton-candy-sofa' || $product->slug == 'rainbow-sofa')
							<div class="new-product" style="top: 2%;right: 2%;width: 19%;">
								<img src="/img/icons/product-new-collection.png">
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
									<div class="d-inline text-center">
										<img src="/img/icons/finishes/{{ $product_sample->sample->slug }}-sm.png" width="20" height="20" alt="" class="img-fluid">
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
								<!-- <div class="product--title my-2">
									<span class="name">{{ $product->name }}</span>
									<span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
									</div> -->
								<div class="col-12 clearfix position-relative mt-3 p-0">
									<div class="slideToggle">
										<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $product->slug]) }}"><span>GET
										<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@if ($loop->last)
				</div>
				@endif
				@endif
				@endforeach
				@if ($key == 'hardware' || $key == 'rugs')
			</div>
			<!-- end row -->
		</div>
		<!-- end grid -->
		@endif
		@if($count > 13 && $key == 'rugs')
		<div class="container-fluid">
			<div class="row mt-4 mb-3">
				<div class="col-12 d-flex justify-content-center load-more">
					<a data-toggle="collapse" data-target="#demo-stock-rugs">
					<span class="btn btn--ebook newButton">SHOW MORE RUGS ></span>
					</a>
				</div>
			</div>
		</div>
		@endif
		@if($count > 13 && $key == 'hardware')
		<div class="container-fluid">
			<div class="row mt-4 mb-3">
				<div class="col-12 d-flex justify-content-center load-more">
					<a data-toggle="collapse" data-target="#demo-stock-hardware">
					<span class="btn btn--ebook newButton2">SHOW MORE HARDWARES ></span>
					</a>
				</div>
			</div>
		</div>
		@endif
		@if ($key == 'rugs')
		<!-- <div class="d-none d-lg-block col-lg-9 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-cloud-craddle-circu-magical-furniture.jpg');background-position:bottom;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/the-whales-class-rug"'>
			<div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">THE WHALE'S CLASS RUG |<span style="font-size:0.9rem;">SEE MORE ></span></div>
			</div> -->
		<div class="container-fluid my-3" style="background-color:#fff;">
			<div class="row">
				<div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
					<div class="row">
						<div class="col-12 col-lg-6 d-block d-sm-none">
							<img src="/img/new-products-2023-banner-form.png" width="524" height="264" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
						</div>
						<div class="col-12 col-lg-6">
							@include('includes.middle.form-ebook-new')
						</div>
						<div class="col-12 col-lg-6">
							<img src="/img/new-products-2023-banner-form.png" width="992" height="500" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
		@if ($key == 'beds')
		<!-- <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-tristen-bed-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/tristen-bed/ '>
			<div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
			    TRISTEN BED | <span style="font-size:0.9rem;">SEE MORE ></span></div>
			</div> -->
		<div class="container-fluid my-3" style="background-color:#fff;">
			<div class="row">
				<div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
					<div class="row">
						<div class="col-12 col-lg-6 d-block d-sm-none">
							<img src="/img/new-products-2023-banner-form.png" width="524" height="264" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
						</div>
						<div class="col-12 col-lg-6">
							@include('includes.middle.form-ebook-new')
						</div>
						<div class="col-12 col-lg-6">
							<img src="/img/new-products-2023-banner-form.png" width="992" height="500" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif @if ($key == 'mirrors')
		<!-- <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/big-mirrors-new-products-circu.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/magical-mirror"'>
			<div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">MAGICAL MIRROR | <span style="font-size:0.9rem;">SEE MORE ></span></div>
			</div> -->
		<div class="d-none d-lg-block col-lg-3 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/small-chameleon-pink-mirror-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/chameleon-pink-mirror/"'>
			<div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
				CHAMELEON PINK MIRROR | <span style="font-size:0.9rem;">SEE MORE ></span>
			</div>
		</div>
		@endif
		@if ($key == 'play-learn')
		<div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-bubble-gum-gym-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/bubble-gum-gym"'>
			<div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">BUBBLE GUM GYM | <span style="font-size:0.9rem;">SEE MORE ></span></div>
		</div>
		<!-- <div class="d-none d-lg-block col-lg-3 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/our-magical-boy-room-small.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/our-magical-rooms"'>
			<div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">OUR MAGICAL ROOMS | <span style="font-size:0.9rem;">SEE MORE ></span></div>
			</div> -->
		<!-- <div class="d-none d-lg-block col-lg-9 product-box has-overlay"
			style="background-image:url('/img/products/blank-spaces/big-bubble-gum-gym-circu-magical-furniture.jpg');background-position:center 68%;background-size:cover;cursor:pointer;"
			onclick='window.location.href="https://www.circu.net/products/bubble-gum-gym"'>
			<div class="position-absolute"
			    style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
			    BUBBLE GUM GYM |<span style="font-size:0.9rem;">SEE MORE ></span></div>
			</div> -->
		<div class="container-fluid my-3" style="background-color:#a1b2ac;">
			<div class="row">
				<div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
					<div class="row">
						<div class="col-12 col-lg-6 d-block d-sm-none">
							<img src="/img/stocklist-annual-sale-bannerform-m.jpg" width="524" height="264" alt="Stocklist Annual Sale Circu" class="img-fluid d-block d-sm-none">
						</div>
						<div class="col-12 col-lg-6">
							@include('includes.middle.form-stocklist-annual-sale')
						</div>
						<div class="col-12 col-lg-6">
							<img src="/img/stocklist-annual-sale-bannerform.jpg" width="992" height="500" alt="Stocklist Annual Sale Circu" class="img-fluid d-none d-sm-block">
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
		@if ($key == 'storage')
		<!-- <div class="d-none d-lg-block col-lg-3 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/our-magical-room-jungle-fun-3.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/our-magical-rooms"'>
			<div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">OUR MAGICAL ROOMS | <span style="font-size:0.9rem;">SEE MORE ></span></div>
			</div> -->
		<div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-dreamhouse-adventures-bedroom-circu-magical-furniture.jpg');background-position:center 68%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/our-magical-rooms"'>
			<div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
				OUR MAGICAL ROOMS | <span style="font-size:0.9rem;">SEE MORE ></span>
			</div>
		</div>
		<div class="container-fluid my-3" style="background-color:#99b1c9;">
			<div class="row">
				<div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
					<div class="row">
						<div class="col-12 col-lg-6 d-block d-sm-none">
							<img src="/img/catalogo-2022-banner-form-m.jpg" width="524" height="264" alt="Catalogue 2022" class="img-fluid d-block d-sm-none">
						</div>
						<div class="col-12 col-lg-6">
							@include('includes.middle.form-catalogue-2022')
						</div>
						<div class="col-12 col-lg-6">
							<img src="/img/catalogo-2022-banner-form.jpg" width="992" height="500" alt="Catalogue 2022" class="img-fluid d-none d-sm-block">
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
		@if ($key == 'others')
		<div class="d-none d-lg-block col-lg-9 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-fantasy-air-balloon-lounge-circu-magical-furniture.jpg');background-position:center 80%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/fantasy-air-balloon-lounge/"'>
			<div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
				FANTASY AIR BALLOON | <span style="font-size:0.9rem;">SEE MORE ></span>
			</div>
		</div>
		<div class="container-fluid my-3" style="background-color:#99b1c9;">
			<div class="row">
				<div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
					<div class="row">
						<div class="col-12 col-lg-6 d-block d-sm-none">
							<img src="/img/catalogo-2022-banner-form-m.jpg" width="524" height="264" alt="Catalogue 2022" class="img-fluid d-block d-sm-none">
						</div>
						<div class="col-12 col-lg-6">
							@include('includes.middle.form-catalogue-2022')
						</div>
						<div class="col-12 col-lg-6">
							<img src="/img/catalogo-2022-banner-form.jpg" width="992" height="500" alt="Catalogue 2022" class="img-fluid d-none d-sm-block">
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
		@if ($key == 'lighting')
		<!-- <div class="d-none d-lg-block col-lg-9 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-cloud-lamp-big-circu-magical-furniture.jpg');background-position:center 68%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/cloud-lamp-big"'>
			<div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">CLOUD LAMP |<span style="font-size:0.9rem;">SEE MORE ></span></div>
			</div>  -->
		@endif
		@if ($key == 'hardware')
		<!-- <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/big-seating-new-collection-circu.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/little-bunny-chair"'>
			<div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">GET THE LOOK > </div>
			</div> -->
		<div class="container-fluid my-3" style="background-color:#a1b2ac;">
			<div class="row">
				<div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
					<div class="row">
						<div class="col-12 col-lg-6 d-block d-sm-none">
							<img src="/img/stocklist-annual-sale-bannerform-m.jpg" width="524" height="264" alt="Stocklist Annual Sale Circu" class="img-fluid d-block d-sm-none">
						</div>
						<div class="col-12 col-lg-6">
							@include('includes.middle.form-stocklist-annual-sale')
						</div>
						<div class="col-12 col-lg-6">
							<img src="/img/stocklist-annual-sale-bannerform.jpg" width="992" height="500" alt="Stocklist Annual Sale Circu" class="img-fluid d-none d-sm-block">
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
		@if ($key == 'seating')
		<div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-lewis-two-seat-sofa-circu-magical-furniture-1.jpg');background-position:center 68%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/lewis-two-seat-sofa"'>
			<div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">LEWIS TWO SEAT SOFA |<span style="font-size:0.9rem;">SEE MORE ></span></div>
		</div>
	</div>
</div>
<div class="container-fluid my-3" style="background-color:#fff;">
	<div class="row">
		<div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
			<div class="row">
				<div class="col-12 col-lg-6 d-block d-sm-none">
					<img src="/img/new-products-2023-banner-form.png" width="524" height="264" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
				</div>
				<div class="col-12 col-lg-6">
					@include('includes.middle.form-ebook-new')
				</div>
				<div class="col-12 col-lg-6">
					<img src="/img/new-products-2023-banner-form.png" width="992" height="500" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		@endif @if ($key == 'mirrors')
	</div>
</div>
<div class="container-fluid my-3" style="background-color:#a1b2ac;">
	<div class="row">
		<div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
			<div class="row">
				<div class="col-12 col-lg-6 d-block d-sm-none">
					<img src="/img/stocklist-annual-sale-bannerform-m.jpg" width="524" height="264" alt="Stocklist Annual Sale Circu" class="img-fluid d-block d-sm-none">
				</div>
				<div class="col-12 col-lg-6">
					@include('includes.middle.form-stocklist-annual-sale')
				</div>
				<div class="col-12 col-lg-6">
					<img src="/img/stocklist-annual-sale-bannerform.jpg" width="992" height="500" alt="Stocklist Annual Sale Circu" class="img-fluid d-none d-sm-block">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		@endif @if ($key == 'lighting')
	</div>
</div>
<div class="container-fluid my-3" style="background-color:#99b1c9;">
	<div class="row">
		<div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
			<div class="row">
				<div class="col-12 col-lg-6 d-block d-sm-none">
					<img src="/img/catalogo-2022-banner-form-m.jpg" width="524" height="264" alt="Catalogue 2022" class="img-fluid d-block d-sm-none">
				</div>
				<div class="col-12 col-lg-6">
					@include('includes.middle.form-catalogue-2022')
				</div>
				<div class="col-12 col-lg-6">
					<img src="/img/catalogo-2022-banner-form.jpg" width="992" height="500" alt="Catalogue 2022" class="img-fluid d-none d-sm-block">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		@endif
		@endforeach
	</div>
	<!-- end row -->
	@if (count($best_sellers) > 0)
	<div class="row">
		<div class="col-12 menu-filters" id="{{ $key }}">
			<h2 class="col-12 category_name_title text-center mb-0"><span>OUR MAGICAL PIECES</span></h2>
			</a>
		</div>
		@foreach ($best_sellers as $best_seller)
		<div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box">
			<div class="product_thumb py-4 px-3">
				@if (file_exists('./img/products/thumbnails/' . $best_seller->slug . '-circu-magical-furniture.png'))
				<img src="/img/products/thumbnails/{{ $best_seller->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
				@else
				<img src="/img/products/thumbnails/{{ $best_seller->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
				@endif
				<div class="product--title">
					<span class="name">{{ $best_seller->name }}</span>
					<br class="d-block d-lg-block">
					<span class="sub_category">{{ ucwords($best_seller->sub_category->sub_category_languages[0]->name) }}</span>
				</div>
				<div class="col-12 clearfix position-relative mt-1 p-0">
					<div class="slideToggle">
						<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
					</div>
				</div>
				<div class="product-box--content align-items-end">
					<a href="{{ route('product', ['product' => $best_seller->slug]) }}">
						<img src="/img/products/hover/{{ $best_seller->slug }}-circu-magical-furniture.jpg" width="500" height="360" alt="" class="img-fluid">
						<div class="product--title mt-2">
							<span class="name">{{ $best_seller->name }}</span>
							<br>
							<span class="sub_category">{{ ucwords($best_seller->sub_category->sub_category_languages[0]->name) }}</span>
						</div>
					</a>
					<div class="product-box--share col-12 p-0 pb-5 clearfix">
						<div class="slideToggle">
							<a rel="modal:open" class="btn-green-underline modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $best_seller->slug]) }}"><span>GET
							<b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	@endif
</div>
<div class="container-fluid my-2" style="background-color:#f7f7f7;">
	<div class="row">
		<div class="col-12 col-xl-10 offset-0 offset-xl-1 p-0">
			<div class="row">
				<div class="col-12 col-lg-5">
					<img src="/img/download-ebook-interior-designers.gif" width="576" height="550" alt="Ebook Circu Kid's Luxury Furniture" class="img-fluid">
				</div>
				<div class="col-12 col-lg-6">
					@include(
					'includes.middle.form-ebook-interior-designers'
					)
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end container -->
@endsection
@section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/addtoany.js"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript"> 
	jQuery('.form-d-block-mobile input[name="email"]').on('change', function() {
		    jQuery('.formvisibleMobile').css('display', 'block');
		});
	
		var swiperThumbnails = new Swiper ('.swiper-thumbnails', { 
			slidesPerView: 1,
			centeredSlides: true,
			loop: true,
			loopedSlides: 6,
			navigation: {
	        nextEl: '.button-next',
	        prevEl: '.button-prev',
	    },
		});

		// const custonSwiperThumbnails = document.querySelectorAll('.swiper-thumbnails');
		// const custonSwiperColors = document.querySelectorAll('.swiper-colors');
		
		// for(i = 0; i< custonSwiperThumbnails.length; i++){
		// 	custonSwiperThumbnails[i].classList.add('swiper-thumbnails-' + i);
		// 	custonSwiperColors[i].classList.add('swiper-colors-' + i);
	
			
		// var swiperColors = new Swiper('.swiper-colors-' + i, {
		// 	slidesPerView: 3,
		// 	spaceBetween: 10,
		// 	centeredSlides: true,
		// 	loop: true,
		// 	loopedSlides: 6,
		// 	slideToClickedSlide: true,
		// 	navigation: {
	    //     nextEl: '.button-next',
	    //     prevEl: '.button-prev',
	    // },
		// });
		// };
		
		$(window).on("load", function() {
		 var $grid = $('.grid').isotope({
		   itemSelector: '.grid-item',
		   percentPosition: true,
		   masonry: {
		     columnWidth: '.grid-sizer'
		   }
		 });
		
		 $('.filter-trigger').click(function(e) {
		   $('.filters').find('.active-filter').removeClass('active-filter');
		   $(this).addClass("active-filter");
		   e.preventDefault();
		   var category = $(this).data('category');
		   setTimeout(function() {
		     $grid.isotope({
		       filter: '.' + category
		     });
		   }, 200);
		 });
		
		 $('.isotope-reset').click(function() {
		   $grid.isotope({
		     filter: '*'
		   });
		 });
		});
		
		$(document).on("click", '[data-toggle="collapse"] .newButton', function() {
		    if ($(this).hasClass('clicked')) {
		        $(this).removeClass('clicked');
		        $(this).html('SHOW MORE RUGS >');
		    } else {
		        $(this).addClass('clicked');
		        $(this).html('< SHOW LESS ');
		    }
		});
		$(document).on("click", '[data-toggle="collapse"] .newButton2', function() {
		    if ($(this).hasClass('clicked')) {
		        $(this).removeClass('clicked');
		        $(this).html('SHOW MORE HARDWARES >');
		    } else {
		        $(this).addClass('clicked');
		        $(this).html('< SHOW LESS ');
		    }
		});
		$(".collapse").on('shown.bs.collapse', function() {
		    var $grid = $('.grid').isotope({
		        itemSelector: '.element-item',
		        percentPosition: true,
		        masonry: {
		            // use element for option
		            columnWidth: '.element-item2'
		        }
		    });
		});
		$(".collapse").on('hidden.bs.collapse', function() {
		    var $grid = $('.grid').isotope({
		        itemSelector: '.element-item',
		        percentPosition: true,
		        masonry: {
		            // use element for option
		            columnWidth: '.element-item2'
		        }
		    });
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