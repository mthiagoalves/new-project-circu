@extends('layouts.master')
@section('main-content')
{{-- @if($ebook->slug != 'new-products-2022')
<div class="container-fluid p-0">
	<div class="col-12 p-0">
		<a href="https://www.circu.net/ebook/new-products-2022">
		<img src="/img/slides/main/new-products.gif" alt="New Products 2022 - Circu Magical Furniture" class="img-fluid d-none d-md-block">
		<img src="/img/slides/main/new-products-mobile.gif" alt="New Products 2022 - Circu Magical Furniture" class="img-fluid d-block d-md-none">
		</a>
	</div>
</div>
@endif --}}
<div class="container-fluid my-3">
	<div class="row">
		<div class="col-12 col-xl-10 offset-xl-1">
			<div class="row">
				<div class="col-12 col-lg-6 product-slide text-center">
					@if($ebook->slug == 'new-products-2023' || $ebook->slug == 'stocklist-annual-sale' || $ebook->slug == 'catalogue-circu-magical-furniture' || $ebook->slug == 'summer-sale' || $ebook->slug == '100-luxury-kids-rooms' || $ebook->slug == 'magical-kids-bedrooms-playground-ideas' || $ebook->slug == 'brochura-best-sellers' || $ebook->slug == 'coveted-magazine-23nd-edition')
					<img src="/img/landing/download-catalogue/{{$ebook->slug}}-banner.jpg" style="height: 100%;object-fit: cover;" class="img-fluid d-none d-md-block">
					<img src="/img/landing/download-catalogue/{{$ebook->slug}}.jpg" class="img-fluid d-block d-md-none">
					@elseif($ebook->issue_code == '')
					<img src="/img/landing/download-catalogue/{{$ebook->slug}}.jpg" class="img-fluid">
					@else
					<iframe allowfullscreen allow="fullscreen" style="border:none;width:100%;height:500px;" src="//e.issuu.com/embed.html?d={{$ebook->issue_code}}&doAutoflipPages=true&hideIssuuLogo=true&u=trend.book"></iframe>
					@endif
				</div>
				<!-- issuu code -->
				<div class="col-12 col-lg-6 product-details mt-3">
					<div class="row">
						<div class="col-12">
							<div class="product-details__intro clearfix col mb-3 p-0">
								<div class="float-left">
									<h1 class="product-details__name" style="text-align: initial;">{{ $ebook->article_languages[0]->title }}</h1>
								</div>
							</div>
							<!-- product-details__intro -->
							<div class="product-details__description mb-3">
								<div class="col col-xl-10 text-justify p-0">
									@if($ebook->slug == 'inside-every-child-dream-bedroom')
									<p>Get inspired by the first series of our magical kid's bedrooms and playgrounds ideas. For boys, girls, or gender-neutral, in this ebook, you will find the most functional and incredible designs, where every detail is customizable and dreams come true!</p>
									@elseif($ebook->slug == 'the-ultimate-lighting-collection')
									<p>From chandeliers to floor lamps and from mid-century style to modern classic, we present to you The Ultimate Lighting Collection. Check out the best sellers selection to enlighten your spaces!<br><br>Download this ebook and discover more!</p>
									@elseif($ebook->slug == 'textile-fabrics-key-trends-2024')
									<p>A new welcoming into the wonders of textile world, a different supplement with a new perspective of trend forecast for you to create the most amazing projects. Give your work the gleam it deserves for the season of 2022/2024.</p>
									@elseif($ebook->slug == 'multimillion-dollar-homes')
									<p>The world is continuously looking for new and improved sources of inspiration. Luxury Houses talented team created this inspirational ebook composed of a series of houses entirely furnished and decorated with a huge collection of furniture, lighting and accessories, in partnership with some of the world’s top designers. Their creative minds developed beautiful and unique projects in a wide range of styles, that we are happy to share with you on the next pages. While some houses are more conceptual, others are focused on functionality and offer solutions for every family member’s modern way of living. In the end, there is a house for everyone.<br><br>Download this ebook and discover more!</p>
									@elseif($ebook->article_languages[0]->description != '')
									<p>{!!$ebook->article_languages[0]->description!!}</p>
									@else
									<p>CIRCU was built under a dream! The dream is to allow children to live their own fantasies and adventures in a magical world of their own.</p>
									@endif
								</div>
							</div>
							<!-- product-details__description -->
							<form method="post" class="col-xl-10  p-0 form-popup form-parsley" action="{{ route('process.downloadEbook') }}">
								<div class="row">
									{{ csrf_field() }}
									<input type="hidden" name="origin" class="origin" />
									<input type="hidden" name="referrer" class="referrer" />
									<input type="hidden" name="lead_path" class="lead_path" />
									<input type="hidden" class="product_slug" name="product_slug" value="{{$ebook->slug}}" />
									<input type="hidden" name="product_type" value="{{$ebook->key_words}}" />
									<input type="hidden" name="product_name" value="{{$ebook->article_languages[0]->title}}" />
									<input type="text" name="interested" class="interested">
									<div class="col-sm-6">
										<div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
											<span class="txt-request">Name:*</span>
											<input type="text" name="first_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
										</div>
									</div>
									<div class="col-sm-6">
										<div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
											<span class="txt-request">Last Name:*</span>
											<input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
										</div>
									</div>
									<div class="col-sm-12">
										<div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
											<span class="txt-request">Email:*</span>
											<input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
										</div>
									</div>
									<div class="col-sm-6">
										<div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
											<span class="txt-request">Occupation:*</span>
											<select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
											@include('includes.options-occupation')
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
											<span class="txt-request">Company:*</span>
											<input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" />
										</div>
									</div>
									<div class="col-sm-6">
										<div style="margin: 0px 0px 12px !important;" class="input-block" {{ $errors->has('country') ? 'has-error' : '' }}">
										<span class="txt-request">Country:*</span>
										<select name="country" class="custom-select country country-ebook" data-parsley-required="true" value="{{ old('country') }}">
										@include('includes.options-country')
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div style="margin: 0px 0px 12px !important;" class="input-block" {{ $errors->has('city') ? 'has-error' : '' }}">
									<span class="txt-request">City:*</span>
									<input type="text" name="city" class="form-control city" data-parsley-required="true" value="{{ old('city') }}" />
								</div>
						</div>
						<div class="col-sm-12">
						<div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('email') ? 'has-error' : '' }} d-none state-ebook">
						<span class="txt-request">State:*</span>
						<select name="state" class="custom-select state" data-parsley-required="true" value="{{ old('state') }}">
						@include('includes.options-state')
						</select>
						</div>
						</div>
						<div class="col-12 mb-3"><input type="checkbox" name="virtual_meeting" value="yes" id="virtual_meeting"><label for="virtual_meeting" class="label_left"></label><span class="blue">BOOK A MEETING WITH OUR MAGICAL TEAM</span></div>
						<div class="col-12">
						<button type="submit" id="request-price-tag" class="btn-request-piece" style="color: #FFFFFF;font-size: 0.75rem;letter-spacing: 0.1rem;font-weight: bold;border: 1px solid transparent;padding: .375rem 1.75rem;">DOWNLOAD NOW <i class="fas fa-caret-right"></i></button>
						</div>
					</div>
					</form>
					<!-- <div class="product-details__actions mb-3 print-d-none">
						<div class="block">
						  <a rel="modal:open" class="btn btn--primary-green w-50 mb-1" href="{{route('modal-ebook', ['ebook' => $ebook->slug] )}}"><span>DOWNLOAD NOW <i class="fas fa-caret-right"></i></span></a>
						</div>
						
						</div> -->
					<!-- product-details__actions -->
				</div>
			</div>
		</div>
		<!-- product-details -->
	</div>
</div>
</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 text-center filters mt-5">
			<span class="filter-trigger filter-name active-filter isotope-reset" data-category="*">ALL CONTENT</span> |
			<span class="filter-trigger filter-name" data-category="catalogue">CATALOGUES</span> |
			<span class="filter-trigger filter-name" data-category="ebook">EBOOKS</span> |
			<span class="filter-trigger filter-name" data-category="magazine">MAGAZINES</span> |
			<span class="filter-name"><a href="{{route('pricelist')}}" target="_blank">PRICELISTS</a></span>
		</div>
	</div>
</div>
<div class="container max-width-site">
	<div class="row grid">
		<div class="grid-sizer col-6 col-sm-6 col-xl-3 d-none"></div>
		@php $count = 0; @endphp
		@foreach($ebooks as $ebook)
		@php
		$count++;
		@endphp
		@if ($count < 9) 
		<div class="grid-item col-6 col-sm-6 col-xl-3 text-center element-item element-item2 p-2 product-box {{$ebook->key_words}}">
			<a href="{{ route('landing-ebook', ['ebook' => $ebook->slug]) }}">
				<img src="/img/landing/download-catalogue/{{$ebook->slug}}.jpg" width="540" height="422" class="img-fluid py-3 d-none d-md-block" alt="">
				<img src="/img/landing/download-catalogue/{{$ebook->slug}}-m.png" width="540" height="422" class="img-fluid py-3 d-block d-md-none" alt="">
				<div class="product--title mt-2 col-12 p-0 pb-md-2">
					<span class="name">{{$ebook->article_languages[0]->title}}</span>
				</div>
			</a>
			<div class="row">
				<div class="col-12 d-flex justify-content-center">
					<input type="checkbox" value="*" data-value="{{$ebook->slug}}" data-name="{{$ebook->article_languages[0]->title}}" data-category="{{$ebook->key_words}}" class="itemToSelect" id="{{$ebook->slug}}">
					<label for="{{$ebook->slug}}" class="checkbox-custom d-none d-md-block"> </label>
					<a href="{{ route('landing-ebook', ['ebook' => $ebook->slug]) }}" class="btn btn--ebook">
					<span>DOWNLOAD NOW </span>
					</a>
				</div>
			</div>
		</div>
		@elseif($count >= 9)
		@if ($count == 9)
		<div id="demo-stock" class="row col-12 m-0 p-0 collapse">
			@endif
			<div class="grid-item col-6 col-sm-6 col-xl-3 element-item text-center p-2 product-box {{$ebook->key_words}}">
				@if($ebook->slug == 'spring-sale-catalogue-caffe-latte')
				<a href="https://www.caffelattehome.com/ebooks/spring-sale?utm_source=website&utm_medium=2nslide&utm_content=circu-página-catalogues&books&utm_campaign=annualsale" target="_blank">
				@elseif($ebook->slug == 'pricelist-showroom-caffe-latte')
				<a href="https://www.caffelattehome.com/showroom-caffe-latte?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-caffelatte-showroom-pagcatalogues&utm_campaign=showroom2" target="_blank">
				@elseif($ebook->slug == 'the-ultimate-lighting-catalogue')
				<a href="https://covetlighting.com/catalogue?utm_source=website&utm_medium=2nslide&utm_content=circu-página-catalogues&books&utm_campaign=catalogue22" target="_blank">
				@elseif($ebook->slug == 'coveted-magazine-23nd-edition')
				<a href="https://www.covetedition.com/coveted-edition-magazine-twenty-three-edition/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-coveted23&utm_campaign=covetedition23" target="_blank">
				@elseif($ebook->slug == 'new-products-caffe-latte')
				<a href="https://www.caffelattehome.com/ebooks/new-products-ebook?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-newproducts-23-pagcatalogues&utm_campaign=newproducts" target="_blank">
				@elseif($ebook->slug == 'new-products-covet-collection')
				<a href="https://covetcollection.eu/new-products-ebooks/?utm_source=website&utm_medium=cataloguesandbookscc&utm_content=new-products-23&utm_campaign=newproducts" target="_blank">
				@elseif($ebook->slug == 'casegoods-collection-covet-house')
				<a href="https://www.covethouse.eu/inspirations/covet-house-casegoods/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-casegoods-catalogue-pagcatalogues&utm_campaign=catalogue" target="_blank">
				@elseif($ebook->slug == 'covet-house-new-catalogue')
				<a href="https://www.covethouse.eu/inspirations/covet-house-new-catalogue?utm_source=website&utm_medium=2nslide&utm_content=circu-página-catalogues&books&utm_campaign=catalogue22" target="_blank">
				@elseif($ebook->slug == '11-highly-curated-capsule-collections')
				<a href="https://covetcollection.eu/11-highly-curated-capsule-collections?utm_source=website&utm_medium=2nslide&utm_content=circu-página-catalogues&books&utm_campaign=catalogue22" target="_blank">
				@elseif($ebook->slug == 'spring-sale-covet-lighting')
				<a href="https://covetlighting.com/spring-sale/?utm_source=website&utm_medium=editorialcontent&utm_content=circu-springsalecvtl&utm_campaign=annualsales" target="_blank">
				@elseif($ebook->slug == 'the-prime-living-room-inspiration-caffe-latte')
				<a href="https://www.caffelattehome.com/ebooks/the-prime-living-room-inspiration-book?utm_source=website&utm_medium=2nslide&utm_content=circu-pag-catalogues&books-prime-livingroom&utm_campaign=inspirationsbookCL" target="_blank">
				@elseif($ebook->slug == 'summer-sale-caffelatte')
				<a href="https://www.caffelattehome.com/ebooks/summer-sale?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-summer-sale-pagcatalogues&utm_campaign=stocklist" target="_blank">
				@elseif($ebook->slug == 'summer-sale-covetcollection')
				<a href="https://covetcollection.eu/in-stock/?utm_source=website&utm_medium=catalogues-cc&utm_content=covetcollection-summer-sale&utm_campaign=stock" target="_blank">
				@elseif($ebook->slug == 'summer-sale-covethouse')
				<a href="https://www.covethouse.eu/in-stock/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-summer-sale-pagcatalogues&utm_campaign=stock" target="_blank">
				@elseif($ebook->slug == 'summer-sale-covetlighting')
				<a href="https://covetlighting.com/summer-sale/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-summer-sale-pagcatalogues&utm_campaign=instock" target="_blank">
				@elseif($ebook->slug == 'lighting-stocklist')
				<a href="https://covetlighting.com/in-stock/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-lighting-stocklist-pagcatalogues&utm_campaign=stocklist" target="_blank">
				@elseif($ebook->slug == 'best-sellers-stocklist-covet-house')
				<a href="https://www.covethouse.eu/in-stock/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-bestsellers-stocklist-pagcatalogues&utm_campaign=stock" target="_blank">
				@elseif($ebook->slug == 'best-deals-stocklist-covet-collection')
				<a href="https://covetcollection.eu/in-stock/?utm_source=website&utm_medium=catalogues-cc&utm_content=covetcollection-summer-stock&utm_campaign=instock" target="_blank">
				@elseif($ebook->slug == 'best-sellers-stocklist-caffelatte')
				<a href="https://www.caffelattehome.com/in-stock?utm_source=website&utm_medium=cataloguesandbookscc-&utm_content=circu-bestsellersinstock&utm_campaign=stocklist" target="_blank">
				{{-- @elseif($ebook->slug == 'new-products-covet-house')
				<a href="https://www.covethouse.eu/inspirations/new-products/?utm_source=website&utm_medium=2nslide&utm_content=circu-página-catalogues&books&utm_campaign=newproducts" target="_blank">
				@elseif($ebook->slug == 'new-products-covet-lighting')
				<a href="https://covetlighting.com/new-products-ebook/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-newproducts&utm_campaign=newproducts" target="_blank">
				@elseif($ebook->slug == 'new-products-caffe-latte')
				<a href="https://www.caffelattehome.com/ebooks/new-products-isaloni?utm_source=website&utm_medium=paginacatalogues&utm_content=circu&utm_campaign=isaloni22" target="_blank">
				@elseif($ebook->slug == 'new-products-covet-collection')
				<a href="https://covetcollection.eu/new-products-ebooks/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-newproducts&utm_campaign=newproducts" target="_blank"> --}}
				@else
				<a href="{{ route('landing-ebook', ['ebook' => $ebook->slug]) }}">
					@endif
					<img src="/img/landing/download-catalogue/{{$ebook->slug}}.jpg" width="540" height="422" class="img-fluid py-3" alt="">
					<div class="product--title mt-2">
						<span class="name">{{$ebook->article_languages[0]->title}}</span>
					</div>
				</a>
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<input type="checkbox" value="*" data-value="{{$ebook->slug}}" data-name="{{$ebook->article_languages[0]->title}}" data-category="{{$ebook->key_words}}" class="itemToSelect" id="{{$ebook->slug}}">
						<label for="{{$ebook->slug}}" class="checkbox-custom d-none d-md-block"> </label>
						@if($ebook->slug == 'spring-sale-catalogue-caffe-latte')
						<a href="https://www.caffelattehome.com/ebooks/spring-sale?utm_source=website&utm_medium=2nslide&utm_content=circu-página-catalogues&books&utm_campaign=annualsale" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'new-products-caffe-latte')
						<a href="https://www.caffelattehome.com/ebooks/new-products-ebook?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-newproducts-23-pagcatalogues&utm_campaign=newproducts" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'pricelist-showroom-caffe-latte')
						<a href="https://www.caffelattehome.com/showroom-caffe-latte?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-caffelatte-showroom-pagcatalogues&utm_campaign=showroom" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'coveted-magazine-23nd-edition')
						<a href="https://www.covetedition.com/coveted-edition-magazine-twenty-three-edition/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-coveted23&utm_campaign=covetedition23" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'new-products-covet-collection')
						<a href="https://covetcollection.eu/new-products-ebooks/?utm_source=website&utm_medium=cataloguesandbookscc&utm_content=new-products-23&utm_campaign=newproducts" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'casegoods-collection-covet-house')
						<a href="https://www.covethouse.eu/inspirations/covet-house-casegoods/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-casegoods-catalogue-pagcatalogues&utm_campaign=catalogue" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'the-ultimate-lighting-catalogue')
						<a href="https://covetlighting.com/catalogue?utm_source=website&utm_medium=2nslide&utm_content=circu-página-catalogues&books&utm_campaign=catalogue22" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'covet-house-new-catalogue')
						<a href="https://www.covethouse.eu/inspirations/covet-house-new-catalogue?utm_source=website&utm_medium=2nslide&utm_content=circu-página-catalogues&books&utm_campaign=catalogue22" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == '11-highly-curated-capsule-collections')
						<a href="https://covetcollection.eu/11-highly-curated-capsule-collections?utm_source=website&utm_medium=2nslide&utm_content=circu-página-catalogues&books&utm_campaign=catalogue22" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'spring-sale-covet-lighting')
						<a href="https://covetlighting.com/spring-sale/?utm_source=website&utm_medium=editorialcontent&utm_content=circu-springsalecvtl&utm_campaign=annualsales" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'the-prime-living-room-inspiration-caffe-latte')
						<a href="https://www.caffelattehome.com/ebooks/the-prime-living-room-inspiration-book?utm_source=website&utm_medium=2nslide&utm_content=circu-pag-catalogues&books-prime-livingroom&utm_campaign=inspirationsbookCL" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'summer-sale-caffelatte')
						<a href="https://www.caffelattehome.com/ebooks/summer-sale?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-summer-sale-pagcatalogues&utm_campaign=stocklist" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'summer-sale-covetcollection')
						<a href="https://covetcollection.eu/in-stock/?utm_source=website&utm_medium=catalogues-cc&utm_content=covetcollection-summer-sale&utm_campaign=stock" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'summer-sale-covethouse')
						<a href="https://www.covethouse.eu/in-stock/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-summer-sale-pagcatalogues&utm_campaign=stock" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'summer-sale-covetlighting')
						<a href="https://covetlighting.com/summer-sale/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-summer-sale-pagcatalogues&utm_campaign=instock" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'lighting-stocklist')
						<a href="https://covetlighting.com/in-stock/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-lighting-stocklist-pagcatalogues&utm_campaign=stocklist" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'best-sellers-stocklist-covet-house')
						<a href="https://www.covethouse.eu/in-stock/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-bestsellers-stocklist-pagcatalogues&utm_campaign=stock" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'best-deals-stocklist-covet-collection')
						<a href="https://covetcollection.eu/in-stock/?utm_source=website&utm_medium=catalogues-cc&utm_content=covetcollection-summer-stock&utm_campaign=instock" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'best-sellers-stocklist-caffelatte')
						<a href="https://www.caffelattehome.com/in-stock?utm_source=website&utm_medium=cataloguesandbookscc-&utm_content=circu-bestsellersinstock&utm_campaign=stocklist" target="_blank" class="btn btn--ebook">
						{{-- @elseif($ebook->slug == 'new-products-covet-house')
						<a href="https://www.covethouse.eu/inspirations/new-products/?utm_source=website&utm_medium=2nslide&utm_content=circu-página-catalogues&books&utm_campaign=newproducts" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'new-products-covet-lighting')
						<a href="https://covetlighting.com/new-products-ebook/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-newproducts&utm_campaign=newproducts" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'new-products-caffe-latte')
						<a href="https://www.caffelattehome.com/ebooks/new-products-isaloni?utm_source=website&utm_medium=paginacatalogues&utm_content=circu&utm_campaign=isaloni22" target="_blank" class="btn btn--ebook">
						@elseif($ebook->slug == 'new-products-covet-collection')
						<a href="https://covetcollection.eu/new-products-ebooks/?utm_source=website&utm_medium=cataloguesandbooks&utm_content=circu-newproducts&utm_campaign=newproducts" target="_blank" class="btn btn--ebook"> --}}
						@else
						<a href="{{ route('landing-ebook', ['ebook' => $ebook->slug]) }}" class="btn btn--ebook">
						@endif
						<span>DOWNLOAD NOW </span>
						</a>
					</div>
				</div>
			</div>
			@if ($loop->last)
		</div>
		@endif
		@endif
		@endforeach
	</div>
	@if($count > 9)
	<div class="row mt-4 mb-3">
		<div class="col-12 d-flex justify-content-center load-more">
			<a href="#initial" data-toggle="collapse" data-target="#demo-stock">
			<span class="btn btn--ebook newButton">SHOW MORE ></span>
			</a>
		</div>
	</div>
	@endif
</div>
<div class="container-fluid pt-2">
	@include('includes.banners-hotspots-new')
</div>
<div class="container-fluid">
	@if(count($best_sellers) > 0)
	<div class="row">
		<div class="col-12">
			<h2 class="col-12 category_name_title text-center mb-0"><span>OUR MAGICAL PIECES</span></h2>
			</a>
		</div>
		@foreach($best_sellers as $best_seller)
		<div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
			<div class="product_thumb py-2 px-3">
				@if(file_exists('./img/products/thumbnails/'.$best_seller->slug.'-circu-magical-furniture.png'))
				<img src="/img/products/thumbnails/{{ $best_seller->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
				@else
				<img src="/img/products/thumbnails/{{ $best_seller->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
				@endif
				<div class="product--title">
					<span class="name">{{ $best_seller->name }}</span>
					<span class="sub_category">{{ ucwords($best_seller->sub_category->sub_category_languages[0]->name) }}</span>
				</div>
				<div class="col-12 clearfix position-relative mt-3 p-0">
					<div class="slideToggle">
						<a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', $best_seller->slug )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
					</div>
				</div>
				<div class="product-box--content align-items-end">
					<a href="{{ route('product', ['product' => $best_seller->slug]) }}">
						<img src="/img/products/hover/{{ $best_seller->slug }}-circu-magical-furniture.jpg" width="500" height="360" alt="" class="img-fluid">
						<div class="product--title my-2">
							<span class="name">{{ $best_seller->name }}</span>
							<span class="sub_category">{{ ucwords($best_seller->sub_category->sub_category_languages[0]->name) }}</span>
						</div>
					</a>
					<div class="product-box--share col-12 clearfix">
						<div class="slideToggle">
							<a rel="modal:open" class="btn-green-underline" href="{{route('modal-product-price', $best_seller->slug )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	@endif
</div>
<a rel="modal:open" href="#modalDownload" class="totalDownloadsCloud d-none">
<span class="counter"></span>
</a>
<!-- MODAL DOWNLOADS -->
<form method="post" id="modalDownload" class="form-popup form-parsley modal-big" action="{{ route('process.downloadEbook') }}">
	<div class="row">
		<div class="form-popup-header col-12">
			<h1>DOWNLOAD NOW ALL SELECTION</h1>
		</div>
		@if(Session::has('message'))
		<div class="alert alert-success" role="alert">
			{{Session::get('message')}}
		</div>
		@endif
		@include('includes.errors')
		<div class="col-12 col-md-6">
			<div class="row">
				<input type="hidden" name="origin" class="origin" />
				<input type="hidden" name="referrer" class="referrer" />
				<input type="hidden" name="lead_path" class="lead_path" />
				<input type="hidden" class="product_slug" name="product_slug" value="" />
				<input type="hidden" name="product_type" value="{{$ebook->key_words}}" />
				<input type="hidden" name="product_name" value="Files" />
				<input type="text" name="interested" class="interested">
				<div class="selectedFiles">
				</div>
				{{ csrf_field() }}
				<div class="col-sm-12">
					<div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
						<span class="txt-request">First Name:*</span>
						<input type="text" name="first_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
					</div>
				</div>
				<div class="col-sm-12">
					<div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
						<span class="txt-request">Last Name:*</span>
						<input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
					</div>
				</div>
				<div class="col-sm-12">
					<div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
						<span class="txt-request">Email:*</span>
						<input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
					</div>
				</div>
				<div class="col-sm-12">
					<div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
						<span class="txt-request">Occupation:*</span>
						<select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
						@include('includes.options-occupation')
						</select>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
						<span class="txt-request">Company:*</span>
						<input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" />
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-block {{ $errors->has('country') ? 'has-error' : '' }}">
						<span class="txt-request">Country:*</span>
						<select name="country" class="custom-select country" data-parsley-required="true" value="{{ old('country') }}">
						@include('includes.options-country')
						</select>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="input-block {{ $errors->has('city') ? 'has-error' : '' }}">
						<span class="txt-request">City:*</span>
						<input type="text" name="city" class="form-control city" data-parsley-required="true" value="{{ old('city') }}" />
					</div>
				</div>
				<div class="col-12">
					<button type="submit" id="request-price-tag" class="btn-request-piece">DOWNLOAD NOW</button>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<p class="number_ebooks"></p>
			<div class="downloads-list"></div>
		</div>
	</div>
</form>
<!-- END MODAL DOWNLOADS -->
@endsection
@section('footer-includes')
<script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>
<script type="text/javascript">
	$(window).on('load', function() {
	      var swiper = new Swiper('.swiper-ambients.swiper-container', {
	          centeredSlides: true,
	          spaceBetween: 5,
	          loop: true,
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
	$(".country-ebook").change(function() {
	  var selected_option = $(this).val();
	  if (selected_option === 'United States') {
	    $('.state-ebook').removeClass('d-none').children().attr('data-parsley-required', 'true');
	  }
	  if (selected_option != 'United States') {
	    $('.state-ebook').addClass('d-none').children().attr('data-parsley-required', 'false');
	    $('.state-ebook').children().children().attr('value', '');
	  }
	});
	const selectHotspot = (e) => {
	  const clickedHotspot = e.target.parentElement;
	  const container = clickedHotspot.parentElement;
	
	  const hotspots = container.querySelectorAll(".hotspot");
	  hotspots.forEach(hotspot => {
	    if (hotspot === clickedHotspot) {
	      hotspot.classList.toggle("lg-hotspot--selected");
	    } else {
	      hotspot.classList.remove("lg-hotspot--selected");
	    }
	  });
	
	  $('.close-hotspot').click(function() {
	    clickedHotspot.classList.remove("lg-hotspot--selected");
	  });
	
	}
	
	(() => {
	  const buttons = document.querySelectorAll(".hotspot--cta");
	  buttons.forEach(button => {
	    button.addEventListener("click", selectHotspot);
	  });
	})();
	
	$('.owl-ambiences').owlCarousel({
	  loop: true,
	  margin: 10,
	  lazyLoad: false,
	  dots: false,
	  nav: true,
	  navText: ["<i class='fas fa-chevron-left arrow-banners'></i>", "<i class='fas fa-chevron-right arrow-banners'></i>"],
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
	
	$('.itemToSelect').click(function() {
	  if (!($(this).hasClass("itemChecked"))) {
	    $(this).addClass("itemChecked");
	  } else {
	    $(this).removeClass("itemChecked");
	  }
	
	  if ($('.itemToSelect.itemChecked').length > 0) {
	    $('.totalDownloadsCloud').removeClass('d-none');
	  } else {
	    $('.totalDownloadsCloud').addClass('d-none');
	    $.modal.close();
	  }
	
	  $('.totalDownloadsCloud span').html($('.itemToSelect.itemChecked').length);
	
	  var downloads = [];
	  var results = [];
	  $('.itemToSelect.itemChecked').each(function() {
	    downloads.push('<div class="col-12 text-center download-item"><div class="row"><div class="col-3 px-0"><img src="/img/landing/download-catalogue/' + $(this).attr('data-value') + '.jpg" class="img-fluid center-block mb-2"></div><div class="col-7 pl-0 product-title d-flex justify-left align-items-center download-title">' + $(this).attr('data-name') + '</div><div class="col-2 px-0 d-flex justify-end align-items-center"><input type="checkbox" value="*" checked data-value="' + $(this).attr('data-value') + '" data-name="' + $(this).attr('data-name') + '" data-category="{{$ebook->key_words}}" class="itemToSelect" id="' + $(this).attr('data-value') + '"><label for="' + $(this).attr('data-value') + '" class="checkbox-custom"></label></div></div></div>')
	    results.push('<input type="hidden" name="files[]" value="' + $(this).attr('data-value') + '">');
	  });
	  $('#modalDownload .downloads-list').html(downloads);
	  $('#modalDownload .selectedFiles').html(results);
	  $('#modalDownload .number_ebooks').html("You selected " + $('.itemToSelect.itemChecked').length + " ebook(s)");
	
	  $('.totalDownloadsCloud').click(function() {
	    $('#modalDownload').addClass("d-inline-block");
	  });
	});
	
	$(document).on("click", '[data-toggle="collapse"] .newButton', function() {
	      if ($(this).hasClass('clicked')) {
	          $(this).removeClass('clicked');
	          $(this).html('SHOW MORE >');
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
</script>
@endsection
@section('head-includes')
<style>
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
	font-family: 'RalewayMedium', sans-serif;
	font-size: 12px;
	letter-spacing: 1px;
	padding: 0.5rem;
	color: #666666 !important;
	font-weight: normal;
	}
	.product--title .name {
	font-weight: bold;
	text-transform: uppercase;
	display: block;
	}
	.product--title .sub_category {
	text-transform: lowercase;
	display: block;
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
	.hotspot {
	position: absolute;
	display: block;
	z-index: 0;
	}
	.hotspot--title {
	position: absolute;
	margin: 0;
	background-color: #FFFFFF;
	padding: 14px;
	width: 20em;
	max-width: 50vw;
	z-index: 1;
	opacity: 0;
	display: none;
	padding-right: 10px;
	color: #413e3e;
	text-transform: uppercase;
	font-size: 12px;
	letter-spacing: 1px;
	transition: all cubic-bezier(.8, 0, .2, 1) .4s;
	}
	.close-hotspot {
	right: 0.4rem;
	top: 0.3rem;
	text-align: right;
	font-size: 1.1rem;
	position: absolute;
	cursor: pointer;
	}
	.hotspot-img {
	max-height: 180px;
	width: auto;
	}
	.hotspot-name {
	text-align: center;
	color: #7d7d7d;
	text-transform: uppercase;
	font-size: 0.8rem;
	letter-spacing: 1px;
	}
	a .hotspot-description {
	font-size: 0.6rem;
	line-height: 15px;
	color: #7d7d7d;
	text-transform: capitalize;
	}
	.hotspot-get-price {
	background-color: #94b7b3;
	color: #FFFFFF;
	padding: 4px 20px;
	margin: 5px 0px;
	display: inline-block;
	}
	.hotspot--title__right .hotspot--cta {
	float: right;
	}
	.hotspot--title__left .hotspot--cta {
	float: left;
	}
	.hotspot--cta {
	position: relative;
	float: right;
	display: inline-block;
	width: 50px;
	height: 50px;
	border-radius: 50%;
	z-index: 9;
	background: transparent;
	border: 1px solid #fff;
	cursor: pointer;
	transition: all cubic-bezier(.8, 0, .2, 1) .4s;
	}
	.hotspot--cta::after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	bottom: 0;
	right: 0;
	margin: auto;
	width: 10px;
	height: 10px;
	border-radius: 50%;
	background: #fff;
	z-index: 2;
	transition: opacity .6s;
	animation: pulse 1.5s cubic-bezier(.8, 0, .2, 1) 0s infinite;
	}
	.hotspot:hover .hotspot--cta {
	transform: scale(.6);
	}
	/*.hotspot:hover .hotspot--cta:after {
	opacity: 0;
	}*/
	/*.hotspot--cta:hover + .hotspot--title{
	opacity: 1;
	}*/
	.lg-hotspot--selected {
	z-index: 999;
	}
	.lg-hotspot--selected .hotspot--title {
	opacity: 1;
	display: inline-block;
	}
	@keyframes pulse {
	0% {
	transform: scale(0.4);
	}
	33% {
	transform: scale(1);
	}
	66% {
	transform: scale(0.4);
	}
	100% {
	transform: scale(0.4);
	}
	}
	/*** ***/
	.hotspot--cloud-6-drawers {
	top: 5%;
	left: 9%;
	}
	.hotspot--cloud-6-drawers .hotspot--title {
	top: 18%;
	left: 105%;
	}
	.hotspot--cloud-bed {
	top: 21%;
	right: 59%;
	}
	.hotspot--cloud-bed .hotspot--title {
	top: 0%;
	right: 105%;
	}
	.hotspot--cloud-3-drawers {
	top: 26%;
	left: 73%;
	}
	.hotspot--cloud-3-drawers .hotspot--title {
	top: 9%;
	right: 105%;
	}
	/*** ***/
	.hotspot--kings-and-queens {
	top: 18%;
	right: 40%;
	}
	.hotspot--kings-and-queens .hotspot--title {
	top: 0%;
	left: 105%;
	}
	/*** ***/
	.hotspot--fantasy-air-balloon {
	top: 20%;
	right: 37%;
	}
	.hotspot--fantasy-air-balloon .hotspot--title {
	top: 0%;
	right: 105%;
	}
	.hotspot--little-cloud-nightstand {
	bottom: 24%;
	right: 28%;
	}
	.hotspot--little-cloud-nightstand .hotspot--title {
	top: 0%;
	right: 0%;
	}
	/*** ***/
	.hotspot--cloud-shelf-big {
	top: 4%;
	right: 33%;
	}
	.hotspot--cloud-shelf-big .hotspot--title {
	top: 0%;
	left: 105%;
	}
	.hotspot--letter-a {
	top: 33%;
	left: 20%;
	}
	.hotspot--letter-a .hotspot--title {
	top: -142%;
	left: 118%;
	}
	.hotspot---swing {
	bottom: 16%;
	right: 24%;
	}
	.hotspot--booboo-swing .hotspot--title {
	bottom: 0%;
	right: 105%;
	}
	@media screen and (max-width: 640px) {
	.hotspot--title {
	line-height: 40px;
	font-size: 10px;
	}
	.hotspot--cta {
	width: 40px;
	height: 40px;
	}
	.btn--ebook{
		padding: 0 8px;
	}

	.product--title{
		height: 35px;
	}

	.max-width-site{
		padding: 0 1.5rem;
	}
	}
	@media screen and (max-width: 420px) {
	.hotspot--title {
	line-height: 30px;
	font-size: 9px;
	}
	.hotspot--cta {
	width: 30px;
	height: 30px;
	}
	}
	@media screen and (max-width: 320px) {
	.hotspot--title {
	display: none;
	}
	.hotspot--cta {
	width: 20px;
	height: 20px;
	}
	.hotspot--cta::after {
	width: 5px;
	height: 5px;
	}
	}
	.swiper-container {
	width: 100%;
	}
	@media (min-width:640px) {
	.swiper-thankyou .swiper-slide {
	width: auto !important;
	}
	}
	.swiper-thankyou .swiper-pagination-bullet-active {
	opacity: 1;
	background: #a3c2bc !important;
	border: 2px solid #a3c2bc !important;
	}
	.swiper-thankyou .swiper-pagination-bullet {
	opacity: 1;
	background: transparent;
	border: 1px solid #a3c2bc !important;
	border: 2px solid #a3c2bc !important;
	width: 10px;
	height: 10px;
	}
	.swiper-ambients .swiper-container {
	width: 100%;
	height: 100%;
	}
	.horizontal-id {
	width: 75% !important;
	}
	.vertical-id {
	width: 33% !important;
	}
	.bigImages .img-fluid {
	width: 100%;
	}
	.swiper-ambients .arrow-banners {
	color: white;
	opacity: 50%;
	background-image: none !important;
	-webkit-transition: opacity .50s ease-in-out;
	-moz-transition: opacity .50s ease-in-out;
	-ms-transition: opacity .50s ease-in-out;
	-o-transition: opacity .50s ease-in-out;
	transition: opacity .50s ease-in-out;
	}
	.swiper-ambients .arrow-banners:hover {
	color: white;
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
@section('meta')
<title>Ebook Circu Magical Furniture</title>
<meta name="description" content="Ebook Circu Magical Furniture" />
<meta name="keywords" content="Ebook Circu Magical Furniture" />
<meta name="author" content="circu">
<meta property="og:type" content="product" />
<meta property="og:title" content="Ebook Circu Magical Furniture" />
<meta property="og:description" content="Ebook Circu Magical Furniture" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="" />
@endsection