<div class="container-fluid p-0">

	<div class="row m-0">

		<div class="col-12">
		<a name="best_sellers" href="#"></a>
            <h2 class="title_category mb-0 {{ $search_terms }}">
                {{ $search_terms }}
            </h2>
		</div>
                @php
                    $countTest = 0;
                @endphp
		@foreach($searchResultsSamples as $sample)
 
                @php
                    $countTest++;
                 @endphp
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box {{$countTest}}" >
                    <div class="product_thumb py-4 px-3">
                        <img src="/img/icons/finishes-new/thumbnail/{{$sample->slug}}.png" width="960" height="800" class="img-fluid">

                        <div class="product--title">
                            @if(!(empty($sample->sample_languages[0]->name)))
                                <span class="name">{{$sample->sample_languages[0]->name}}</span>
                            @endif
                        </div>
                        <div class="col-12 clearfix position-relative mt-1 p-0">
                            <div class="slideToggle">
                                <a rel="modal:open" class="btn-green-underline mt-0" href="{{ route('modal-finish-info', ['name' => $sample->slug] ) }}"><span>GET <b>INFO <i class="fas fa-caret-right"></i></b></span></a>
                            </div>
                        </div>
                        <div class="product-box--content">
                            <div>
                                <img src="/img/icons/finishes-new/thumbnail-hover/{{$sample->slug}}.png" width="500" height="420" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 clearfix position-relative mt-3 p-0">
                                <div class="slideToggle">
                                    <a rel="modal:open" class="btn-green-underline mt-0" href="{{ route('modal-finish-info', ['name' => $sample->slug] ) }}"><span>GET <b>INFO <i class="fas fa-caret-right"></i></b></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
		        @if($search_terms == "special finishings")
                        @if($countTest == 3)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box " >
                                <div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
                                    <img src="/img/icons/finishes-new/products/magical-mirror.jpg" width="960" height="800" class="img-fluid">

                                    <div class="product--title">
                                        <span class="name">Magical Mirror</span>
                                    </div>
                                    <div class="col-12 clearfix position-relative mt-1 p-0">
                                        <div class="slideToggle">
                                            <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/magical-mirror"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                        </div>
                                    </div>
                                    <div class="product-box--content">
                                        <div>
                                            <img src="/img/icons/finishes-new/products/magical-mirror.jpg" width="500" height="420" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-12 clearfix position-relative mt-3 p-0">
                                            <div class="slideToggle">
                                                <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/magical-mirror"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endif
                        @if($countTest == 6)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box " >
                                <div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
                                    <img src="/img/icons/finishes-new/products/mermaid-bed.jpg" width="960" height="800" class="img-fluid">

                                    <div class="product--title">
                                        <span class="name">Little Mermaid Bed</span>
                                    </div>
                                    <div class="col-12 clearfix position-relative mt-1 p-0">
                                        <div class="slideToggle">
                                            <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/mermaid-bed"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                        </div>
                                    </div>
                                    <div class="product-box--content">
                                        <div>
                                            <img src="/img/icons/finishes-new/products/mermaid-bed.jpg" width="500" height="420" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-12 clearfix position-relative mt-3 p-0">
                                            <div class="slideToggle">
                                                <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/mermaid-bed"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endif
                    @endif
    	@endforeach		 
        
        @if($search_terms == "lacquer colors")
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box " >
                    <div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
                        <img src="/img/icons/finishes-new/products/rocky-rocket.jpg" width="960" height="800" class="img-fluid">

                        <div class="product--title">
                            <span class="name">Rocky rocket</span>
                        </div>
                        <div class="col-12 clearfix position-relative mt-1 p-0">
                            <div class="slideToggle">
                                <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/rocky-rocket"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                            </div>
                        </div>
                        <div class="product-box--content">
                            <div>
                                <img src="/img/icons/finishes-new/products/rocky-rocket.jpg" width="500" height="420" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 clearfix position-relative mt-3 p-0">
                                <div class="slideToggle">
                                    <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/rocky-rocket"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container-fluid my-2" style="background-color:#9BB1C9;">
                    <div class="row">
                        <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-1">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                            @include('includes.middle.form-catalogue-new')
                            </div>
                            <div class="col-12 col-lg-6">
                            <img src="/img/catalogue-circu-all-products.jpg" width="992" height="500" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
                            <img src="/img/catalogue-circu-all-products-mobile.jpg" width="524" height="264" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                @endif

                @if($search_terms == "fabrics")
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box " >
                    <div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
                        <img src="/img/icons/finishes-new/products/little-cloud-nightstand.jpg" width="960" height="800" class="img-fluid">

                        <div class="product--title">
                            <span class="name">Little Cloud Nigthstand</span>
                        </div>
                        <div class="col-12 clearfix position-relative mt-1 p-0">
                            <div class="slideToggle">
                                <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/little-cloud-nightstand"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                            </div>
                        </div>
                        <div class="product-box--content">
                            <div>
                                <img src="/img/icons/finishes-new/products/little-cloud-nightstand.jpg" width="500" height="420" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 clearfix position-relative mt-3 p-0">
                                <div class="slideToggle">
                                    <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/little-cloud-nightstand"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endif
                @if($search_terms == "Metallic Leafs")
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box " >
                        <div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
                            <img src="/img/icons/finishes-new/products/gold-toy-box.jpg" width="960" height="800" class="img-fluid">

                            <div class="product--title">
                                <span class="name">Gold Toy Box</span>
                            </div>
                            <div class="col-12 clearfix position-relative mt-1 p-0">
                                <div class="slideToggle">
                                    <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/gold-box"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                </div>
                            </div>
                            <div class="product-box--content">
                                <div>
                                    <img src="/img/icons/finishes-new/products/gold-toy-box.jpg" width="500" height="420" alt="" class="img-fluid">
                                </div>
                                <div class="col-12 clearfix position-relative mt-3 p-0">
                                    <div class="slideToggle">
                                        <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/gold-box"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <div class="container-fluid my-3" style="background-color:#ded6ad;">
                    <div class="row">
                        <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-1">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                            @include('includes.middle.form-ebook-rooms-new')
                            </div>
                            <div class="col-12 col-lg-6">
                            <img src="/img/banner-rooms-new.gif" width="992" height="500" alt="Ebook Rooms Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
                            <img src="/img/banner-rooms-new-m.gif" width="524" height="264" alt="Ebook Rooms Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($search_terms == "Metallic finishes")
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box " >
                      <div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
                          <img src="/img/icons/finishes-new/products/puzzled-bookcase.jpg" width="960" height="800" class="img-fluid">

                          <div class="product--title">
                              <span class="name">Puzzled Bookcase</span>
                          </div>
                          <div class="col-12 clearfix position-relative mt-1 p-0">
                              <div class="slideToggle">
                                  <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/puzzled-bookcase-desk"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                              </div>
                          </div>
                          <div class="product-box--content">
                              <div>
                                  <img src="/img/icons/finishes-new/products/puzzled-bookcase.jpg" width="500" height="420" alt="" class="img-fluid">
                              </div>
                              <div class="col-12 clearfix position-relative mt-3 p-0">
                                  <div class="slideToggle">
                                      <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/puzzled-bookcase-desk"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
                    <div class="container-fluid my-3" style="background-color:#d0c8a4;">
                        <div class="row">
                            <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                @include('includes.middle.form-catalogue-annual-sales')
                                </div>
                                <div class="col-12 col-lg-6">
                                <img src="/img/catalogue-annual-sales.jpg" width="992" height="500" alt="Catalogue Annual Sales" class="img-fluid d-none d-sm-block">
                                <img src="/img/catalogue-annual-sales-mobile.jpg" width="524" height="264" alt="Catalogue Annual Sales" class="img-fluid d-block d-sm-none">
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                  @endif
                  @if($search_terms == "woods")
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box " >
                        <div class="product_thumb py-4 px-3" style="background-color: #fff !important;">
                            <img src="/img/icons/finishes-new/products/bun-van-bed.jpg" width="960" height="800" class="img-fluid">

                            <div class="product--title">
                                <span class="name">Bun Van Bed</span>
                            </div>
                            <div class="col-12 clearfix position-relative mt-1 p-0">
                                <div class="slideToggle">
                                    <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/bun-van"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                </div>
                            </div>
                            <div class="product-box--content">
                                <div>
                                    <img src="/img/icons/finishes-new/products/bun-van-bed.jpg" width="500" height="420" alt="" class="img-fluid">
                                </div>
                                <div class="col-12 clearfix position-relative mt-3 p-0">
                                    <div class="slideToggle">
                                        <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/bun-van"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
		 
        </div>
    </div>
