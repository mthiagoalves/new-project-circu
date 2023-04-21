@extends('layouts.master')
@section('meta')
<title>Room By Room | Circu Magical Furniture</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas, children room, kids room furniture, kids room decoration, kids' room design, children bedroom, kids room interior design, kids room inspiration, kids room decor ideas, design for kids, kids luxury brand" />
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
	.title-page{
	color: #8bb9b6;
	letter-spacing: 1px;
	font-size: 1.5rem;
	padding: 0px;
	margin: 15px;
	text-align: center;
	text-transform: uppercase;
	}
	.title-article{
	color: #FFFFFF;
	line-height: 24px !important;
	margin: 1rem 0;
	font-weight: 400;
	}
	.title-article-genre{
	font-family: Raleway, sans-serif;
    position: relative;
    text-transform: uppercase;
    font-size: 10px;
    color: #fff;
    margin: 0 !important;
	}
	.content-details i {
	color: #FFFFFF !important;
	font-size: 1.2rem;
	text-align: center;	
	}
	.content-main{
	position: relative;
	}
	.content-overlay{
	background-color: rgb(137,186,182,.5);
	position: absolute;
	height: 100%;
	width: 100%;
	left: 0;
	top: 0;
	bottom: 0;
	right: 0;
	opacity: 0;
	transition: all .4s ease-in-out 0s;
	z-index: 1;
	}
	.content-overlay:hover{
	opacity: 1;
	}
	.content-details{
	position: absolute;
	text-align: center;
	padding-left: 1em;
	padding-right: 1em;
	width: 100%;
	top: 50%;
	left: 50%;
	opacity: 0;
	-webkit-transform: translate(-50%,-50%);
	transform: translate(-50%,-50%);
	transition: all .4s ease-in-out 0s;
	z-index: 2;
	font-family: "RalewayMedium";
	}
	.content-main:hover .content-details{
	opacity: 1;
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

	.spaces-button-prev {
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
	.spaces-button-next {
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
	.img-slide{
		position: relative;
	}
	.text-spaces{
		position:absolute;
		bottom: 0px;
	}
	.text-spaces p{
		font-size: 18px;
		color: #fff;
		font-weight: 400;
		letter-spacing: 2px;
	}
</style>
@endsection
@section('main-content')
<div class="swiper-container swiper-top-banner">
	<div class="swiper-wrapper">
		<div class="swiper-slide" style="margin-bottom: 0;">
			<img alt="" width="1920" height="800" src="https://www.circu.net/img/our-houses/new/circu-new-showroom/an-authentic-little-kids-corner-banner-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block" />
			<img alt="" src="https://www.circu.net/img/our-houses/new/circu-new-showroom/an-authentic-little-kids-corner-banner-1-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none" />
		</div>
		<div class="swiper-slide" style="margin-bottom: 0;">
			<img alt="" src="https://www.circu.net/img/our-houses/new/circu-new-showroom/an-authentic-little-kids-corner-banner-1.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block" />
			<img alt="" src="https://www.circu.net/img/our-houses/new/circu-new-showroom/an-authentic-little-kids-corner-banner-1-m.jpg" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none" />
		</div>
		
	</div>	
	<div class="button-prev arrow-banners">
		<i class="fas fa-chevron-left p-0 pr-2"></i>
	</div>
	<div class="button-next arrow-banners">
		<i class="fas fa-chevron-right p-0 pl-2"></i>
	</div>
</div>

@include('includes.backoffice.meet-our-spaces-slide')

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h1 class="title-page">
				GIRL ROOM
			</h1>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-12 px-5">
			@foreach($projects as $project)
				<div class="col-12 col-md-3 float-left p-1 content-main">
					<div class="col-12 p-0">
						<a href="#">
							<img src="/img/inspirations/thumbnails/{{$project->slug}}/{{$project->slug}}-thumbnail.jpg" class="img-fluid" alt="">
						</a>
						<div class="content-overlay">
							<div class="content-details">
								<div class="row justify-content-center">
									@foreach($project->category as $category)
										<a href="/room-by-room/{{$category}}">
											<p class="title-article-genre">{{ $category }} &nbsp;</p>		
										</a>
									@endforeach
								</div>
								<a href="/room-by-room/{{$project->slug}}">
									<h3 class="title-article">{{$project->projects_languages[0]->title}}</h3>
								</a>
								<a href="/room-by-room/{{$project->slug}}">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
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
<script type="text/javascript">

	var swiper_top_banner = new Swiper('.swiper-top-banner', {
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

	var swiper_projects = new Swiper('.swiper-projects', {
	    slidesPerView: 4,
		initialSlide: 2,
		centeredSlides: true,
		spaceBetween: 5,
		grabCursor: true,
		loop: true,
	    navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	    },
	});

	initPhotoSwipeFromDOMambients('.my-gallery');
	
</script>
@endsection