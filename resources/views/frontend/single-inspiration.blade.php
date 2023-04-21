@extends('layouts.master')

@section('meta')

<title>{{$project->projects_languages[0]->title}} | Circu Magical Furniture</title>
<meta name="description" content="{{$project->meta_description}}" />
<meta name="keywords" content="{{$project->key_words}}" />
<meta name="author" content="circu">

@endsection

@section('head-includes')

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

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
	.swiper-ambients .arrow-banners {
	color: #fff;
	opacity: 50%;
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

<div class="col-12 swiper-container swiper-ambience-inspirations">
	<div class="swiper-wrapper my-gallery">
		@php
		$directory = './storage/banners/' . $project->slug . '/';
		$filecount = count(glob($directory . '*.{jpg,png,gif}', GLOB_BRACE));
		@endphp
		@for ($i = 1; $i <= $filecount; $i++)

		<div class="swiper-slide slider-main find-them-all" style="margin-bottom: 0;">
			<img draggable="false" alt="" src="/storage/banners/{{$project->slug}}/{{$project->slug}}-banner-{{$i}}.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
		</div>
		@endfor
	</div>
	<div class="swiper-button-prev arrow-banners"></div>
	<div class="swiper-button-next arrow-banners"></div>
</div>

<div class="container-fluid p-0">
	<div class="row">
		<div class="col-10 offset-1 col-lg-8 offset-lg-2 p-0">
			<h1 class="title-article">{{$project->projects_languages[0]->title}}</h1>

			@if($project->projects_languages[0]->sub_title)
				<h3 class="subtitle-article">{{$project->projects_languages[0]->sub_title}}</h3>
			@endif

			<p class="text-article">{!!$project->projects_languages[0]->description!!}</p>
		</div>
	</div>
</div>

@endsection
@section('footer-includes')
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(window).on('load', function() {
	   var swiper = new Swiper('.swiper-ambience-inspirations.swiper-container', {
	       centeredSlides: true,
	       spaceBetween: 5,
		   initialSlide: 2,
	       loop: false,
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
</script>

@endsection