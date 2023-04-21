@extends('layouts.master')

@section('main-content')

<div class="container-fluid"> 

	<div class="row">

		<div class="col-12 nopadding">
		
			<img src="/img/landing/thank-you/background-solid.jpg" class="image_full img-fluid mx-auto" alt="">

			<img src="/img/landing/thank-you/background-solid-mobile.jpg" class="image_small img-fluid mx-auto" alt="">

		</div>
		
		<div class="col-12 text-center position-absolute align-self-center">
				
				<h4 class="text-uppercase mb-4">SOMETHING WRONG!</h4>

				<p class="col-12 font-italic font-weight-bold mr-2 ml-2 mb-5">
					Sorry we could not sent your email to our team. Please try again.
				</p>

			</div>

	</div>

</div>

<div class="container-fluid no-gutters pt-4 pb-4">

	<div class="col-12 max-width-site container">

		<div class="row">

			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a href="https://www.circu.net/inspirations/" onclick="ga('send','event','Banner','Read More','Thankyoupage-CircuInspirations');"><img src="/img/thank-you/insp-blog.jpg" class="img-fluid d-block mx-auto"></a>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a href="https://www.circu.net/blog/" onclick="ga('send','event','Banner','Read More','Thankyoupage-CircuBlog');"><img src="/img/thank-you/blog.jpg" class="img-fluid d-block mx-auto"></a>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a href="https://www.circu.net/download-inspirations-catalogue" onclick="ga('send','event','Banner','Free Download','Thankyoupage-InspirationBook');"><img src="/img/thank-you/insp-book.jpg" class="img-fluid d-block mx-auto"></a>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a href="https://www.circu.net/download-catalogue" onclick="ga('send','event','Banner','Free Download','Thankyoupage-Catalogue');"><img src="/img/thank-you/catalogue.jpg" class="img-fluid d-block mx-auto"></a>
			</div>

		</div>

	</div>

</div>

@endsection

@section('meta')
  <title>Circu Magical Furniture - Luxury brand for children</title>
  <meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
  <meta name="author" content="circu">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="All Products Circu Magical Furniture - Luxury brand for children" />
  <meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta property="og:url" content="http://www.circu.net/products"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection
