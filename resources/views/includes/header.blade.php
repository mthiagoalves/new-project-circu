<script type="text/javascript" src="/js/megaTracker.js"></script>
@php session_start(); @endphp

<div class="row background_green topbar print-d-none">
	<div class="container-fluid">

		<div class="col-12">

			<div class="social_header float-left">
				<div class="option">
					<a href="{{ route('contact') }}">
						<span>CONTACT US</span>
					</a>

					<a href="https://api.whatsapp.com/send?phone=351914929073&text=Hello, I'm interested in knowing more about Circu. Can you help me?" target="_blank" class="whatsapp">
						<i class="fab fa-whatsapp"></i>
						<!-- <span style="font-family:RalewayMedium;"> +351 914 929 073 GMT+1:00</span> -->
					</a>

					<a href="https://www.facebook.com/circumagicalfurniture/" target="_blank">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="https://twitter.com/circu_magical" target="_blank">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="https://www.pinterest.pt/circumagicalfurniture/boards/" target="_blank">
						<i class="fab fa-pinterest-p"></i>
					</a>
					<a href="https://instagram.com/circu_magical_furniture/" target="_blank">
						<i class="fab fa-instagram"></i>
					</a>
					<a href="https://www.linkedin.com/company/circu-magicalfurniture/" target="_blank">
						<i class="fab fa-linkedin-in"></i>
					</a>
					<a href="https://www.youtube.com/channel/UC2_hoG6aHFGnqF9SVTkhwxA" target="_blank">
						<i class="fab fa-youtube"></i>
					</a>
				</div>


			</div>

			<div class="d-none d-md-block float-right">
				<div class="option">
					<a href="{{ route('pricelist') }}">
						<span>PRICELIST</span></a>
				</div>
				<div class="option">
					<a href="{{ route('catalogue') }}">
						<span>CATALOGUE</span></a>
				</div>
				<div class="option">
					<a href="{{ route('stocklist') }}">
						<span>STOCKLIST</span></a>
				</div>
				<div class="option">
					<a href="{{ route('showrooms') }}">
						<span>SHOWROOMS</span></a>
				</div>
				<div class="option">
					<a href="{{ route('press') }}">
						<span>PRESS</span></a>
				</div>
				<div class="option">
					<a href="/blog" target="_blank">
						<span>BLOG</span></a>
				</div>
				<div class="option">
					<a href="{{ route('about') }}">
						<span>ABOUT US</span></a>
				</div>
			</div>

		</div>

	</div><!-- end container-->

</div><!-- end row-->

<div class="container-fluid print-d-none" style="margin-top:26px;">
	<div class="row">

		<div class="col-12" id="menu-fixed">
			<nav class="navbar navbar-expand-lg navbar-light position-static container-fluid">

				<a class="navbar-brand col-6 col-sm-4 col-lg-2 ml-0 ml-lg-4" href="{{ route('homepage') }}">
					<img src="/img/logo-circu-magical-furniture.png" border="0" width="174" height="56" class="img-fluid" />
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item position-static dropdown">
							<a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownProducts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ALL PRODUCTS</a>
							<ul class="dropdown-menu w-100" aria-labelledby="navbarDropdownProducts">
								<div class="container max-width-site">
									<li><a href="{{ route('finishes') }}" class="dropdown-item menu-header">Finishes</a></li>
									<li><a href="{{ route('category', ['category' => 'rugs']) }}" class="dropdown-item menu-header">Rugs</a></li>
									<li><a href="{{ route('category', ['category' => 'mirrors']) }}" class="dropdown-item menu-header">Mirrors</a></li>
									<li><a href="{{ route('category', ['category' => 'play-learn']) }}" class="dropdown-item menu-header">Play & Learn</a></li>
									<li><a href="{{ route('category', ['category' => 'storage']) }}" class="dropdown-item menu-header">Storage</a></li>
									<li><a href="{{ route('category', ['category' => 'lighting']) }}" class="dropdown-item menu-header">Lighting</a></li>
									<li><a href="{{ route('category', ['category' => 'seating']) }}" class="dropdown-item menu-header">Seating</a></li>
									<li><a href="{{ route('category', ['category' => 'beds']) }}" class="dropdown-item menu-header">Beds</a></li>
									<li><a href="{{ route('products') }}" class="dropdown-item menu-header">All Products</a></li>
								</div>
							</ul>
						</li>

						<li class="nav-item position-static dropdown">
							<a class="nav-link menu-header" href="{{ route('new-products') }}">NEW PRODUCTS</a>
						</li>

						<li class="nav-item position-static dropdown">
							<a class="nav-link menu-header" href="/inspirations" target="_blank">INSPIRATIONS</a>
						</li>

						<li class="nav-item position-static dropdown">
							<a class="nav-link menu-header" href="{{ route('projects') }}">PROJECTS</a>
						</li>

						<li class="nav-item position-static dropdown">
							<a class="nav-link menu-header" href="/trends" target="_blank">TRENDS</a>
						</li>

						<li class="nav-item position-static dropdown">
							<a class="nav-link menu-header" href="{{route('landing.parents-room')}}">PARENTS ROOMS</a>
						</li>

						<li class="nav-item position-static dropdown">
							<a class="nav-link menu-header" href="{{route('deals')}}">DEALS</a>
						</li>


						<li class="nav-item menu-icon" style="display:none;">
							<a rel="modal:open" id="trigger-popup" class="btn-modal-popup" href="{{route('modal-popup')}}"><img src="/img/icons/alarm.svg"></a>
						</li>

						{{-- <li class="nav-item menu-icon">
							@if(Auth::check() && Auth::user())
								<a href="{{ route('wishlist.index') }}"><img src="/img/icons/heart.svg"></a>
						@else
						<a href="{{ route('login') }}"><img src="/img/icons/heart.svg"></a>
						@endif
						</li>

						<li class="nav-item menu-icon position-static dropdown">
							@if(Auth::check() && Auth::user())
							<a class="nav-link dropdown-toggle menu-header p-1" href="#" id="navbarDropdownUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/img/icons/user.svg"></a>
							<ul class="dropdown-menu w-100" aria-labelledby="navbarDropdownUser">
								<div class="container max-width-site">
									<li><a href="" class="dropdown-item menu-header" onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">Logout</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
											{{ csrf_field() }}
										</form>
									</li>
								</div>
							</ul>
							@else
							<a class="nav-link menu-header p-1" href="{{ route('login') }}"><img src="/img/icons/user.svg"></a>
							@endif
						</li> --}}
					</ul>
				</div><!-- /.navbar-collapse -->

			</nav>

		</div>

	</div>
</div>


<script>
	var tracker = getUrl();
</script>