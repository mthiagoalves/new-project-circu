<script type="text/javascript" src="/js/megaTracker.js"></script>
@php session_start(); @endphp
<script type="application/ld+json">
{
  "@context": "http://www.circu.net/",
  "@id": "http://www.circu.net/",
  "@type": "Organization",
  "name": "Circu",
  "description": "Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies",
  "title": "Circu Magical Furnish | Press",
  "url": "http://www.circu.net/pressroom",
  "sameAs": "https://www.facebook.com/circumagicalfurniture/",
  "homepage": "http://www.circu.net/",
  "image": "http://www.circu.net/img/contact-circu-magical-furniture.jpg",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": " +351 914 925 846",
	 "email": "mailto:press@circu.net",
	 "name": "Filipa Mendonça",
    "contactType": "press",
  }],
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Fânzeres",
    "addressRegion": "Gondomar",
    "postalCode": "4510-640",
    "streetAddress": "Rua Presa da Cavada 114"
  },
   "audience": {
    "@type": "Design",
  },
}
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script> -->
<meta name="p:domain_verify" content="460bc20210642b847aa42232d2ab3e2b"/>


<div class="row background_green topbar">
	<div class="container max-width-site">
		<div class="row">
			<div class="col-lg-6 col-md-6 hidden-sm hidden-xs nopadding-left">
				<div class="option">
					<a href="{{ route('catalogue') }}"><img src="/img/icons/icon-download.png">
					<span>CATALOGUE</span></a>
				</div>
				<div class="option">
					<a href="http://www.circu.net/docs/presskit-circu-magical-furniture.pdf" target="_blank"><img src="/img/icons/icon-download.png">
					<span>PRESSKIT</span></a>
				</div>
				<div class="option">
					<a href="{{ route('about') }}"><img src="/img/icons/icon-download.png">
					<span>ABOUT US</span></a>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 hidden-sm hidden-xs nopadding-right">
				<div class="option" style="float:right;">

					@if(Auth::guest())
						{{-- <a href="{{ route('process.press-login') }}">Login</a> --}}
					@else

						<span style="color:#FFFFFF;">{{ Auth::user()->name }} <i class="fas fa-user"></i> </span>

						<a href="{{ route('process.press-logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">Logout</a>

						<form id="logout-form" action="{{ route('process.press-logout') }}" method="POST" style="display:none;">
							{{ csrf_field() }}
						</form>

					@endif

				</div>
			</div>
		</div>

	</div><!-- end container-->

</div><!-- end row-->

<div class="container-fluid" style="margin-top:26px;">
	<div class="row">

		<div class="col-12 pressroom" id="menu-fixed">
			<nav class="navbar navbar-expand-xl navbar-light max-width-site container">
				<a class="navbar-brand col-6 col-sm-4 col-lg-2" href="{{ route('homepage') }}">
					<img src="/img/logo-circu-magical-furniture.png" border="0" class="img-fluid" />
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto">
						<li><a href="{{ route('pressroom.ambiences') }}" class="menu-header">AMBIENCES</a></li>
						<li><a href="{{ route('pressroom.magical-ambiences') }}" class="menu-header">MAGICAL AMBIENCES</a></li>
						<li><a href="{{ route('pressroom.products') }}">PRODUCTS</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle menu-header" href="#" id="navbarDropdownCollections" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COLLECTIONS</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownCollections">
								<li><a href="{{ route('pressroom.collection', ['collection' => 'magical-collection']) }}">Magical Furniture</a></li>
								<li><a href="{{ route('pressroom.collection', ['collection' => 'fantasy-air-collection']) }}">Fantasy Air</a></li>
								<li><a href="{{ route('pressroom.collection', ['collection' => 'illusion-collection']) }}">Illusion</a></li>
								<li><a href="{{ route('pressroom.collection', ['collection' => 'sky-collection']) }}">Sky</a></li>
								<li><a href="{{ route('pressroom.collection', ['collection' => 'animal-stools-collection']) }}">Animal Stools</a></li>
								<li><a href="{{ route('pressroom.collection', ['collection' => 'cloud-collection']) }}">Cloud</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle menu-header" href="#" id="navbarDropdownMediaRoom" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MEDIA ROOM</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMediaRoom">
								<li><a href="{{ route('pressroom.press-releases') }}">Press Releases</a></li>
								<li><a href="{{ route('pressroom.all-press-clipping') }}">Press Clipping</a></li>
								<li><a href="{{ route('pressroom.projects') }}">Projects</a></li>
							</ul>
						</li>
						<li><a href="{{ route('pressroom.tradeshows') }}">TRADESHOWS</a></li>

					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>

{{-- 			<div id="dropdown-menu-collections" class="col-12">
				<div class="drop-close"> </div>
					<div class="max-width-site container">
						<div class="col-12" style="display: block; position: relative; float: right; text-align: right;">
							<div class="sub-menu col-12">
							  <ul class="float-none float-sm-right text-center text-sm-right">
							    <li><a href="{{ route('pressroom.collection', ['collection' => 'magical-collection']) }}">Magical Furniture</a></li>
								<li><a href="{{ route('pressroom.collection', ['collection' => 'fantasy-air-collection']) }}">Fantasy Air</a></li>
								<li><a href="{{ route('pressroom.collection', ['collection' => 'illusion-collection']) }}">Illusion</a></li>
								<li><a href="{{ route('pressroom.collection', ['collection' => 'sky-collection']) }}">Sky</a></li>
								<li><a href="{{ route('pressroom.collection', ['collection' => 'animal-stools-collection']) }}">Animal Stools</a></li>
							  </ul>
							</div>
						</div>
				</div>
			</div>

			<div id="dropdown-menu-media-room" class="col-12">
				<div class="drop-close"> </div>
					<div class="max-width-site container">
						<div class="col-12" style="display: block; position: relative; float: right; text-align: right;">
							<div class="sub-menu col-12">
							  <ul class="float-none float-sm-right text-center text-sm-right">
							    <li><a href="{{ route('pressroom.press-releases') }}">Press Releases</a></li>
								<li><a>Press Kit</a></li>
								<li><a>Press Clipping</a></li>
							  </ul>
							</div>
						</div>
				</div>
			</div> --}}

	  	</div>

	</div>
</div>
<script>var tracker=getUrl();</script>
