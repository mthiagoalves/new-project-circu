<script type="text/javascript" src="/js/megaTracker.js"></script>
@php session_start(); @endphp

<div class="row background_green topbar">
	<div class="container max-width-site">

			<div class="col-12 nopadding-right">

				<div class="social_header" style="float:right;">
					<a href="https://www.facebook.com/circumagicalfurniture/" target="_blank">
						<img src="/img/icons/social-white/facebook.png" border="0" alt="facebook"/>
					</a>
					<a href="https://twitter.com/circu_magical" target="_blank">
						<img src="/img/icons/social-white/twitter.png" border="0" alt="twitter"/>
					</a>
					<a href="https://www.pinterest.pt/circumagicalfurniture/boards/" target="_blank">
						<img src="/img/icons/social-white/pinterest.png" border="0" alt="pinterest"/>
					</a>
					<a href="https://instagram.com/circu_magical_furniture/" target="_blank">
						<img src="/img/icons/social-white/instagram.png" border="0" alt="instagram"/>
					</a>
					<a href="https://www.linkedin.com/company/circu-magicalfurniture/" target="_blank">
						<img src="/img/icons/social-white/linkedin.png" border="0" alt="instagram"/>
					</a>
					<a href="https://www.youtube.com/channel/UC2_hoG6aHFGnqF9SVTkhwxA" target="_blank">
						<img src="/img/icons/social-white/youtube.png" border="0" alt="youtube"/>
					</a>
				</div>

				<div class="d-none d-md-block">
					<div class="option" style="float:right;">
						<a href="https://api.whatsapp.com/send?phone=351914929073&text=Hello, I'm interested in knowing more about Circu. Can you help me?" target="_blank" class="whatsapp"><img src="/img/icons/icon-whatsapp.png">
						<span style="margin-left:5px;font-family:RalewayMedium;">+351 914 929 073 GMT+1:00</span></a>
					</div>
					<div class="option" style="float:left;">
						<a href="{{ route('contact') }}">
						<span>CONTACT</span></a>
					</div>
					<div class="option" style="float:left;">
						<a href="http://www.circu.net/inspirations" target="_blank">
						<span>INSPIRATIONS</span></a>
					</div>
					<div class="option" style="float:left;">
						<a href="{{ route('pricelist') }}">
						<span>PRICELIST</span></a>
					</div>
					<div class="option" style="float:left;">
						<a href="{{ route('catalogue') }}">
						<span>CATALOGUE</span></a>
					</div>
				</div>

			</div>

	</div><!-- end container-->

</div><!-- end row-->

{{-- <div id="intro" class="d-none d-lg-block">
	<div class="video-box embed-responsive embed-responsive-16by9">
		<iframe id="video-placeholder" frameborder="0" allowfullscreen="1" src="https://www.youtube.com/embed/Vq7dRVivTWg?autoplay=1&amp;version=3&amp;rel=0&amp;enablejsapi=1&amp;modestbranding=1&amp;loop=1&amp;playlist=Vq7dRVivTWg&amp;showinfo=0&amp;fs=0&amp;VQ=HD720" frameborder="0" allow="autoplay; encrypted-media" style=" width:1920; height:1080;"></iframe>
		<img src="/img/icons/icon-sound-on.png" id="mute_sound" class="img-fluid position-absolute" style="bottom:25%;left:2%;">
	</div>
</div> --}}

<div class="container-fluid" style="margin-top:26px;">
	<div class="row">

	<div class="col-12" id="menu-fixed">
		<nav class="navbar navbar-expand-lg navbar-light max-width-site container">
		    <div class="col-12">

		      <div class="navbar-header">
			      <a class="navbar-brand col-6 col-sm-4 col-lg-2" href="{{ route('homepage') }}">
			      <img src="/img/logo-circu-magical-furniture.png" border="0" class="img-fluid" />
			      </a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="nav navbar-nav">
								<li class="dropdown" id="products">
								<a class="dropdown-toggle products menu-header" role="button" aria-haspopup="true" aria-expanded="false">OUR PRODUCTS</a>
								</li>
								<li class="dropdown" id="collections">
								<a class="dropdown-toggle collections menu-header" role="button" aria-haspopup="true" aria-expanded="false">OUR COLLECTIONS</a>
								</li>
								<li class="dropdown" id="company">
								<a class="dropdown-toggle company menu-header" role="button" aria-haspopup="true" aria-expanded="false">OUR COMPANY</a>
								</li>
								<li class="dropdown">
								<a class="menu-header" role="button" aria-haspopup="true" aria-expanded="false" style="color: #cb7d3b !important;" href="/halloween-discount-2018?utm_source=menu&utm_medium=website&utm_content=halloween&utm_campaign=halloween"><b>HALLOWEEN SPECIAL</b></a>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
		      </div>

		    </div>
		</nav>

	  <div id="dropdown-menu-products" class="col-12">
	    <div class="drop-close"> </div>
	    <div class="max-width-site container">
	      <div class="col-12" style="display: block; position: relative; float: right; text-align: right;">

	        <div class="sub-menu col-12">
	          <ul class="float-none float-sm-right text-center text-sm-right">
				<li><a href="{{ route('products') }}"  class="menu-header">All Products</a></li>
	            <li><a href="{{ route('new-products') }}"  class="menu-header">Novelties</a></li>
	            <li><a href="{{ route('category', ['category' => 'beds']) }}"  class="menu-header">Beds</a></li>
	            <li><a href="{{ route('category', ['category' => 'seating']) }}"  class="menu-header">Seating</a></li>
	            <li><a href="{{ route('category', ['category' => 'lighting']) }}" class="menu-header">Lighting</a></li>
	            <li><a href="{{ route('category', ['category' => 'storage']) }}" class="menu-header">Storage</a></li>
	            <li><a href="{{ route('category', ['category' => 'play-learn']) }}" class="menu-header">Play & Learn</a></li>
	            <li><a href="{{ route('category', ['category' => 'mirrors']) }}" class="menu-header">Mirrors</a></li>
	            <li><a href="{{ route('category', ['category' => 'rugs']) }}" class="menu-header">Rugs</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>

	  <div id="dropdown-menu-collections" class="col-12">
	    <div class="drop-close"> </div>
	    <div class="max-width-site container">
	      <div class="col-12" style="display: block; position: relative; float: right; text-align: right;">
	        <div class="sub-menu col-12">
	          <ul class="float-none float-sm-right text-center text-sm-right">
	            <li><a href="{{ route('collection', ['collection' => 'magical-collection']) }}"  class="menu-header">Magical Furniture</a></li>
	            <li><a href="{{ route('collection', ['collection' => 'sky-collection']) }}"  class="menu-header">Sky</a></li>
	            <li><a href="{{ route('collection', ['collection' => 'fantasy-air-collection']) }}" class="menu-header">Fantasy Air</a></li>
	            <li><a href="{{ route('collection', ['collection' => 'illusion-collection']) }}" class="menu-header">Illusion</a></li>
	            <li><a href="{{ route('collection', ['collection' => 'animal-stools-collection']) }}" class="menu-header">Animals Stools</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>

	  <div id="dropdown-menu-company" class="col-12">
	    <div class="drop-close"> </div>
	    <div class="max-width-site container">
	      <div class="col-12" style="display: block; position: relative; float: right; text-align: right;">
	        <div class="sub-menu col-12">
	          <ul class="float-none float-sm-right text-center text-sm-right">
	            <li><a href="{{ route('about') }}"  class="menu-header">About Us</a></li>
							<li><a href="{{ route('press') }}" class="menu-header">Press</a></li>
	            <li><a href="{{ route('contact') }}"  class="menu-header">Contact</a></li>
							<li><a href="/inspirations" target="_blank" class="menu-header">Inspirations & Ideas</a></li>
							<li><a href="/blog" target="_blank" class="menu-header">Blog</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
  </div>

	</div>
</div>


<script>var tracker=getUrl();</script>
