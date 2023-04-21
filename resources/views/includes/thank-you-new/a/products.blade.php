<div class="row">
    <div class="col-12" id="others" style="padding:12px;">
        <h2 class="col-12 category_name_title text-center mb-0"><span>BEST SELLERS</span></h2>
    </div>
    @foreach($products as $product1)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
        <div class="product_thumb py-4">
            @if(file_exists('./img/products/thumbnails/'.$product1->slug.'-circu-magical-furniture.png'))
            <img src="/img/products/thumbnails/{{ $product1->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
            @else
            <img src="/img/products/thumbnails/{{ $product1->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
            @endif

            <div class="product--title">
                <span class="name">{{ $product1->name }}</span>
                <span class="sub_category">{{ ucwords($product1->sub_category->sub_category_languages[0]->name) }}</span>
            </div>

            <div class="col-12 clearfix position-relative mt-1 p-0">
                <div class="slideToggle">
                    <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $product1->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                </div>
            </div>

            @if( $product1->is_new && ($product1->slug == "bubble-gum-bed") || ($product1->slug == "bubble-gum-bench") || ($product1->slug == "bubble-gum-dressing-table") || ($product1->slug == "bubble-gum-chest-3-drawers") || ($product1->slug == "bubble-gum-chest-2-drawers") || ($product1->slug == "bubble-gum-desk") || ($product1->slug == "bubble-slide") || ($product1->slug == "bubble-loop") || ($product1->slug == "bubble-drop") || ($product1->slug =="bubble-gum-playground") || ($product1->slug == "bubble-gum-big-mirror") || ($product1->slug == "bubble-gum-small-mirror") || ($product1->slug == "cotton-candy-sofa") || ($product1->slug == "rainbow-sofa"))
            <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                <img src="/img/icons/product-new-collection.png">
            </div>

            @elseif($product1->is_new)
            <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                <img src="/img/icons/product-new.png">
            </div>

            @endif

            <div class="product-box--content">
                @if($product1->product_samples->count() > 0 && $product1->slug != 'dainty-armchair')
                <div class="col-12 slider-for text-center">
                    @foreach($product1->product_samples as $product_sample)
                    <div>
                        <a href="{{ route('product', ['product' => $product1->slug]) }}">
                            <img src="/img/products/{{ $product1->slug }}/finishes/{{ $product1->slug }}-circu-magical-furniture-{{$product_sample->sample->slug}}.png" width="960" height="800" alt="" class="img-fluid">
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="col-12 product-samples slider-nav text-center p-0">
                    @foreach($product1->product_samples as $product_sample)
                    @if($product_sample->is_options == null)
                    <div class="d-inline text-center">
                        <img src="/img/icons/finishes/{{$product_sample->sample->slug}}-sm.png" width="20" height="20" alt="" class="img-fluid">
                    </div>
                    @endif
                    @endforeach
                </div>

                @else
                <div>
                    <a href="{{ route('product', ['product' => $product1->slug]) }}">
                        <img src="/img/products/thumbnails-covers/{{ $product1->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                    </a>
                </div>
                @endif
                <div class="col-12 clearfix position-relative mt-3 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $product1->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @endforeach


</div>