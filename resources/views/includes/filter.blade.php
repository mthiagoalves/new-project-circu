<div class="container-fluid">

	<div class="row">

		<div class="col-12 menu-filters">
            <h2 class="col-12 category_name_title text-center mb-0">{{ $search_term }} </h2>
        </div>
		
    		@foreach($searchResults as $category)

    			@foreach($category->sub_categories as $sub_category)
					
    				@if(count($sub_category->products) > 0)
    				
				    		@foreach($sub_category->products as $product_item)
	
				    			<div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
				    				<div class="product_thumb py-4">
             
					                @if(file_exists('./img/products/thumbnails/'.$product_item->slug.'-circu-magical-furniture.png'))
					                    <img src="/img/products/thumbnails/{{ $product_item->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
					                @else
					                    <img src="/img/products/thumbnails/{{ $product_item->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
					                @endif

					                <div class="product--title"> 
						              <span class="name">{{ $product_item->name }}</span>  
						              <span class="sub_category">{{ ucwords($product_item->sub_category->sub_category_languages[0]->name) }}</span> 
						            </div>

						            <div class="col-12 clearfix position-relative mt-1 p-0">
						              <div class="slideToggle">
						                <a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', ['name' => $product_item->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						              </div>
						            </div>

						            @if( $product_item->is_new && ($product_item->slug == "bubble-gum-bed") || ($product_item->slug == "bubble-gum-bench") || ($product_item->slug == "bubble-gum-dressing-table") || ($product_item->slug == "bubble-gum-chest-3-drawers") || ($product_item->slug == "bubble-gum-chest-2-drawers") || ($product_item->slug == "bubble-gum-desk") || ($product_item->slug == "bubble-loop") || ($product_item->slug == "bubble-slide") || ($product_item->slug == "bubble-drop") || ($product_item->slug =="bubble-gum-playground") || ($product_item->slug == "bubble-gum-big-mirror") || ($product_item->slug == "bubble-gum-small-mirror") || ($product_item->slug == "cotton-candy-sofa") || ($product_item->slug == "rainbow-sofa"))
						             
						              <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
						              <img src="/img/icons/product-new-collection.png">
						              </div>
						                
						            @else
						              <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
						              <img src="/img/icons/product-new.png">
						              </div>
						            @endif

					                <div class="product-box--content">
						              @if($product_item->product_samples->count() > 0)
						                <div class="col-12 slider-for text-center">
						                  @foreach($product_item->product_samples as $product_sample)
						                  <div>
						                    <a href="{{ route('product', ['product' => $product_item->slug]) }}">
						                      <img src="/img/products/{{ $product_item->slug }}/finishes/{{ $product_item->slug }}-circu-magical-furniture-{{$product_sample->sample->slug}}.png" width="960" height="800" alt="" class="img-fluid"> 
						                    </a>
						                  </div>
						                  @endforeach
						                </div>
						                <div class="col-12 product-samples slider-nav text-center p-0">
						                  @foreach($product_item->product_samples as $product_sample)
						                  <div class="d-inline text-center">
						                    <img src="/img/icons/finishes/{{$product_sample->sample->slug}}-sm.png" width="20" height="20" alt="" class="img-fluid">
						                  </div>
						                  @endforeach
						                </div>

						              @else
						                <div>
											<a href="{{ route('product', ['product' => $product_item->slug]) }}">
												<img src="/img/products/thumbnails-covers/{{ $product_item->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
											</a> 
						                </div>
						              @endif

						              <div class="col-12 clearfix position-relative mt-3 p-0">
						                <div class="slideToggle">
						                  <a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', ['name' => $product_item->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
						                </div>
						              </div>
						            </div>
						        </div>
					            </div>

				    		@endforeach
			    	@endif

    			@endforeach
    		@endforeach		 
        </div>
</div>

<script>
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
	    	  slidesToShow: 7,
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

	$('.slider-nav .slick-slide').on('click', function (event) {
   		$('.slider-for').slick('slickGoTo', $(this).data('slickIndex'));
   	});

	var elm = $('.slider-nav '),
	getSlick = elm.slick('getSlick');

	if(getSlick.slideCount <= getSlick.options.slidesToShow) {
	  elm.addClass('slick-no-slide');
	}
	else {
	  elm.removeClass('slick-no-slide');
	}

	$('.owl-novelties').owlCarousel({
	      loop: true,
	      margin: 10,
	      lazyLoad: false,
	      dots: false,
	      nav: true,
	      navText: ["<i class='fas fa-chevron-left p-0 pl-2 arrow-banners'></i>","<i class='fas fa-chevron-right p-0 pr-2 arrow-banners'></i>"],
	      autoplay: false,
	      fluidSpeed: 1500,
	      responsive: {0: {items: 1},768: {items: 1}}
	  });
</script>
