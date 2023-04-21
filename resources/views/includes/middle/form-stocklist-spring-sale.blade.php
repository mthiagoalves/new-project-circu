<style>
	@media(max-width: 540px){
	.formvisibleMobile{
	display: none;
	}   
	}
</style>
<div class="container-fluid my-3" style="background-color:#fefeda;">
	<div class="row">
		<div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
			<div class="row">
				<div class="col-12 col-lg-6">
					<form method="POST" action="{{ route('process.catalogue') }}" class="col-12 form-parsley form-catalogue-middle-banner form-d-block-mobile">
						<div class="row">
							<input type="hidden" name="origin" class="origin" />
							<input type="hidden" name="referrer" class="referrer" />
							<input type="hidden" name="lead_path" class="lead_path" />
							<input type="text" name="interested" class="interested" />
							<input type="hidden" name="product_slug" value="stocklist-spring-sale" />
							<input type="hidden" name="product_name" value="Stocklist Spring Sale" />
							{{ csrf_field() }}
							<h1 class="col-12 text-center mt-2 pb-2 mt-lg-0 p-0" style="color:#9fbfbc;"><b>STOCKLIST SPRING SALE</b></h1>
							<div class="col-sm-6 px-1">
								<div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
									<input type="text" name="name" class="form-control name" style="border: 1px solid #9fbfbc;" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="Name*" />
								</div>
								<div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
									<input type="email" name="email" class="form-control email" style="border: 1px solid #9fbfbc;" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" placeholder="Email*" />
								</div>
								<div class="input-block {{ $errors->has('country') ? 'has-error' : '' }} formvisibleMobile">
									<select name="country" class="custom-select country country-ebook" style="border: 1px solid #9fbfbc;" data-parsley-required="true">
										<option value="">Country*</option>
										@include('includes.options-country')
									</select>
								</div>
								<div class="input-block d-none {{ $errors->has('state') ? 'has-error' : '' }} state-ebook formvisibleMobile">
									<select name="state" class="custom-select state" style="border: 1px solid #9fbfbc;" data-parsley-required="true">
										<option value="">State*</option>
										@include('includes.options-state')
									</select>
								</div>
							</div>
							<div class="col-sm-6 px-1">
								<div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }} formvisibleMobile">
									<select name="occupation" class="custom-select occupation" style="border: 1px solid #9fbfbc;" data-parsley-required="true" value="{{ old('occupation') }}">
										<option value="">Occupation*</option>
										@include('includes.options-occupation')
									</select>
								</div>
								<div class="input-block {{ $errors->has('company') ? 'has-error' : '' }} formvisibleMobile">
									<input type="text" name="company" class="form-control company" style="border: 1px solid #9fbfbc;" data-parsley-required="true" value="{{ old('company') }}" placeholder="Company*" />
								</div>
								<div class="input-block">
									<button type="submit" onclick="ga('send','event','Banner','Download Now','Allproducts-newcatalogue');" style="border: 1px solid #9fbfbc; color:#9fbfbc;" class="btn btn--primary-green w-100 mb-1" id="download-catalogue-tag">DOWNLOAD NOW <i class="fas fa-caret-right"></i></button>
								</div>
							</div>
						</div>
					</form>
				</div>
				@if (Route::is('products'))
					<div class="col-12 col-lg-6">
						<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-pagallp&utm_conteudo=circu-springsale23&utm_campanha=springsale23">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale-m.jpg" width="524" height="264" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale.png" width="992" height="500" alt="Stocklist Spring Sale Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
						</a>
					</div>
				@elseif(Route::is('new-products'))
					<div class="col-12 col-lg-6">
						<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=topbanner-pagnp&utm_conteudo=circu-springsale23&utm_campanha=springsale">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale-m.jpg" width="524" height="264" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale.png" width="992" height="500" alt="Stocklist Spring Sale Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
						</a>
					</div>
				@elseif(Route::is('category'))
					<div class="col-12 col-lg-6">
						<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale-m.jpg" width="524" height="264" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale.png" width="992" height="500" alt="Stocklist Spring Sale Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
						</a>
					</div>
				@elseif(Route::is('finishes'))
					<div class="col-12 col-lg-6">
						<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-springsale23&utm_campanha=springsale">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale-m.jpg" width="524" height="264" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale.png" width="992" height="500" alt="Stocklist Spring Sale Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
						</a>
					</div>
				@elseif(Route::is('projects'))
					<div class="col-12 col-lg-6">
						<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-pagprojects&utm_conteudo=circu-springsale23&utm_campanha=springsale">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale-m.jpg" width="524" height="264" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale.png" width="992" height="500" alt="Stocklist Spring Sale Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
						</a>
					</div>
				@elseif(Route::is('stocklist'))
					<div class="col-12 col-lg-6">
						<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-pagprojects&utm_conteudo=circu-springsale23&utm_campanha=springsale">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale-m.jpg" width="524" height="264" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale.png" width="992" height="500" alt="Stocklist Spring Sale Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
						</a>
					</div>
				@elseif(Route::is('our-houses-new'))
					<div class="col-12 col-lg-6">
						<a href="https://www.circu.net/ebook/stocklist-spring-sale?utm_origem=website&utm_meio=banner-pagprojects&utm_conteudo=circu-springsale23&utm_campanha=springsale">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale-m.jpg" width="524" height="264" alt="Stocklist Spring Sale Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
							<img src="/img/form-imgs/middle-form-stocklist-spring-sale.png" width="992" height="500" alt="Stocklist Spring Sale Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
						</a>
					</div>
				@endif
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	document.getElementById("download-catalogue-tag").onclick = function() {
	    ga('send', 'event', 'Botão', 'Clicar', 'Catalogue')
	};
</script>