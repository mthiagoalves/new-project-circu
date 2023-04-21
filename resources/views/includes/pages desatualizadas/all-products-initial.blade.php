<div class="container-fluid">

    @if (count($best_sellers) > 0)

    <div class="row">

        <div class="col-12 menu-filters" >        
                <h2 class="col-12 category_name_title text-center mb-0"><span>BEST SELLERS</span></h2>
            </a>
        </div>

        @foreach ($best_sellers as $best_seller)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box">
            <div class="product_thumb py-4 px-3">
                @if (file_exists('./img/products/thumbnails/' . $best_seller->slug . '-circu-magical-furniture.png'))
                <img src="/img/products/thumbnails/{{ $best_seller->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid w-100"> @else
                <img src="/img/products/thumbnails/{{ $best_seller->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid w-100"> @endif
                <div class="product--title">
                    <span class="name">{{ $best_seller->name }}</span>
                    <br class="d-block d-lg-none">
                    <span class="sub_category">{{ ucwords($best_seller->sub_category->sub_category_languages[0]->name) }}</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $best_seller->slug]) }}">
                            <span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>

                <div class="product-box--content align-items-end">
                    <a href="{{ route('product', ['product' => $best_seller->slug]) }}">
                        <img src="/img/products/thumbnails-covers/{{ $best_seller->slug }}-circu-magical-furniture.jpg" width="500" height="360" alt="" class="img-fluid w-100">
                        <!-- <div class="product--title mt-2">
              <span class="name">{{ $best_seller->name }}</span>
              <span class="sub_category">{{ ucwords($best_seller->sub_category->sub_category_languages[0]->name) }}</span>
            </div> -->
                    </a>

                    <div class="product-box--share col-12 clearfix">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $best_seller->slug]) }}"><span>GET
                                    <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach @endif

    </div>

</div>

@include('includes.middle.form-download-pricelist-showroom')

<div class="container-fluid">

    <div class="row">

        @foreach ($all_products as $key => $category)
        <div class="col-12 menu-filters" id="{{ $key }}">
            <!-- <a name="{{ $key }}" href="#"></a> -->
            <a href="{{ route('category', ['category' => $key]) }}">
                <h2 class="col-12 category_name_title text-center mb-0"><span>{{ ucwords($key) }}</span></h2>
            </a>
        </div>


        @foreach ($category as $product)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box">
            <div class="product_thumb py-4 px-3">
                @if (file_exists('./img/products/thumbnails/' . $product->slug . '-circu-magical-furniture.png'))
                <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid w-100"> @else
                <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid w-100"> @endif

                <div class="product--title">
                    <span class="name">{{ $product->name }}</span>
                    <br class="d-block d-lg-none">
                    <span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $product->slug]) }}"><span>GET
                                <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>

                @if (($product->is_new && $product->slug == 'bubble-gum-bed') || $product->slug == 'bubble-gum-bench' || $product->slug == 'bubble-gum-dressing-table' || $product->slug == 'bubble-gum-chest-3-drawers' || $product->slug == 'bubble-gum-chest-2-drawers'
                || $product->slug == 'bubble-gum-desk' || $product->slug == 'bubble-slide' || $product->slug == 'bubble-loop' || $product->slug == 'bubble-drop' || $product->slug == 'bubble-gum-playground' || $product->slug == 'bubble-gum-big-mirror'
                || $product->slug == 'bubble-gum-small-mirror' || $product->slug == 'cotton-candy-sofa' || $product->slug == 'rainbow-sofa')
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new-collection.png">
                </div>
                @elseif($product->is_new)
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new.png">
                </div>
                @endif

                <div class="product-box--content">
                    @if ($product->product_samples->count() > 0)
                    <div class="col-12 slider-for text-center">
                        @foreach ($product->product_samples as $product_sample)
                        <div>
                            <a href="{{ route('product', ['product' => $product->slug]) }}">
                                <img src="/img/products/{{ $product->slug }}/finishes/{{ $product->slug }}-circu-magical-furniture-{{ $product_sample->sample->slug }}.png" width="960" height="800" alt="" class="img-fluid w-100">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-12 product-samples slider-nav text-center p-0">
                        @foreach ($product->product_samples as $product_sample)
                        @if ($product_sample->is_options == null)
                        <div class="d-inline text-center">
                            <img src="/img/icons/finishes/{{ $product_sample->sample->slug }}-sm.png" width="20" height="20" alt="" class="img-fluid">
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @else
                    <div>
                        <a href="{{ route('product', ['product' => $product->slug]) }}">
                            <img src="/img/products/thumbnails-covers/{{ $product->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid w-100">
                        </a>
                    </div>
                    @endif

                    <!-- <div class="product--title my-2">
                <span class="name">{{ $product->name }}</span>
                <span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
              </div> -->

                    <div class="col-12 clearfix position-relative mt-3 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $product->slug]) }}"><span>GET
                                    <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
        @if ($key == 'beds')
        <!-- <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/our-magical-room-jungle-fun.jpg');background-position:0px -80px;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/our-magical-rooms"'>
      <div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">OUR MAGICAL ROOMS | <span style="font-size:0.9rem;">GET THE LOOK ></span></div>
    </div> -->
    <div class="swiper-container swiper-blank-space d-none d-lg-block col-lg-3 product-box has-overlay">
        <div class="swiper-wrapper">
            <div class="swiper-slide d-none d-lg-block col-lg-12 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/small-merida-corner-bed-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="/products/merida-corner-bed"'>
                <div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
                    MERIDA CORNER BED | <span style="font-size:0.9rem;">SEE MORE ></span></div>
            </div>
            <div class="swiper-slide d-none d-lg-block col-lg-12 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/small-merida-bed-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="/products/merida-bed"'>
                <div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
                    MERIDA BED | <span style="font-size:0.9rem;">SEE MORE ></span></div>
            </div>
            
        </div>
        <div class="swiper-button-prev arrow-banners"></div>
        <div class="swiper-button-next arrow-banners"></div>
    </div>
        <!-- <div class="d-none d-lg-block col-lg-9 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-cloud-sofa-circu-magical-furniture.jpg');background-position:center 68%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/cloud-sofa"'>
      <div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">CLOUD SOFA |<span style="font-size:0.9rem;">SEE MORE ></span></div>
    </div> -->

        @endif @if ($key == 'seating')
        <div class="d-none d-lg-block col-lg-9 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-lotus-sofa-circu-magical-furniture.jpg');background-position:center 68%;background-size:cover;cursor:pointer;" onclick='window.location.href="/products/lotus-sofa"'>
            <div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">LOTUS SOFA|<span style="font-size:0.9rem;">SEE MORE ></span></div>
        </div>
        <!-- <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/big-seating-new-collection-circu.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/little-bunny-chair"'>

      <div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">GET THE LOOK > </div>
    </div> -->
        <!-- <div class="d-none d-lg-block col-lg-3 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/our-magical-room-jungle-fun-3.jpg');background-position:center 68%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/minelli-bookcase"'>
      <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">MINELLI BOOKCASE | <span style="font-size:0.9rem;">SEE MORE ></span></div>
    </div> -->
        <!-- <div class="d-none d-lg-block col-lg-9 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/our-magical-lighting-room-big.jpg');background-position:center 68%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/our-magical-rooms"'>
      <div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">OUR MAGICAL ROOMS |<span style="font-size:0.9rem;">SEE MORE ></span></div>
    </div> -->
        @endif @if ($key == 'hardware')
        <!-- <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/big-seating-new-collection-circu.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/little-bunny-chair"'>

      <div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">GET THE LOOK > </div>
    </div> -->

        <!-- form -->
        @include('includes.middle.form-download-pricelist-showroom')
        
        @endif @if ($key == 'lighting')
        <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-pixie-office-chair-circu-magical-furniture.jpg');background-position:center 35%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/pixie-office-chair"'>
            <div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
                PIXIE OFFICE CHAIR |<span style="font-size:0.9rem;">SEE MORE ></span></div>
        </div>

        <!-- form -->
        @include('includes.middle.form-download-pricelist-showroom')

        @endif @if ($key == 'others')
        <!-- <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/big-seating-new-collection-circu.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/little-bunny-chair"'>

      <div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">GET THE LOOK > </div>
    </div> -->
        <div class="d-none d-lg-block col-lg-3 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/small-fantasy-air-balloon-lounge-circu-magical-furniture.jpg');background-position:center 68%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/fantasy-air-balloon-lounge/"'>
            <div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
                FANTASY AIR BALLOON LOUNGE |<span style="font-size:0.9rem;">SEE MORE ></span></div>
        </div>
        <div class="container-fluid my-3" style="background-color:#99b1c9;">
            <div class="row">
                <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            @include('includes.middle.form-catalogue-2022')
                        </div>
                        <div class="col-12 col-lg-6">
                            <img src="/img/catalogo-2022-banner-form-mobile.jpg" width="524" height="264" alt="Catalogue 2022" class="img-fluid d-block d-sm-none">
                            <img src="/img/catalogo-2022-banner-form.jpg" width="992" height="500" alt="Catalogue 2022" class="img-fluid d-none d-sm-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif @if ($key == 'play-learn')
        <!-- <div class="d-none d-lg-block col-lg-9 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-bubble-gum-gym-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/bubble-gum-gym"'>
            <div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
                BUBBLE GUM GYM | <span style="font-size:0.9rem;">SEE MORE ></span>
            </div>
        </div> -->
        {{-- <div class="container-fluid background_light_green mt-3 mb-0">
            <div class="row pb-2">
                <!-- desktop -->
                <div class="col-12 p-0 d-none d-lg-block">
                    <div class="col-12 p-0">
                        <img src="/img/home/bg-banner-all-products.jpg" style="width:100%;" class="img-fluid d-none d-lg-block">
                    </div>
                    <div class="col-12 col-lg-5 position-absolute form-catlogue-r" style="top: 50%; left: 4%; transform: translate(0,-50%);">
                        @include( 'includes.middle.form-download-pricelist')
                    </div>
                </div>
                <!-- desktop -->

                <!-- desktop -->
                <div class="col-12 p-0 d-block d-lg-none">
                    <div class="col-12 p-0">
                        <img src="/img/home/bg-banner-all-products-m.jpg" style="width:100%;" class="img-fluid bg-img-m-1 d-none">
                        <img src="/img/home/bg-banner-all-products-t.jpg" style="width:100%;" class="img-fluid bg-img-m-2 d-none">
                        <img src="/img/home/bg-banner-all-products-t-s.jpg" style="width:100%;" class="img-fluid bg-img-t d-none">
                    </div>
                    <div class="col-12 mt-1 mt-sm-5 mt-lg-0 position-absolute form-catlogue-r" style="top: 0;">
                        @include( 'includes.middle.form-download-pricelist' )
                    </div>
                </div>
                <!-- desktop -->
            </div>
        </div> --}}
        <div class="container-fluid my-3" style="background-color:#99b1c9;">
            <div class="row">
                <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            @include('includes.middle.form-catalogue-2022')
                        </div>
                        <div class="col-12 col-lg-6">
                            <img src="/img/catalogo-2022-banner-form-mobile.jpg" width="524" height="264" alt="Catalogue 2022" class="img-fluid d-block d-sm-none">
                            <img src="/img/catalogo-2022-banner-form.jpg" width="992" height="500" alt="Catalogue 2022" class="img-fluid d-none d-sm-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif @if ($key == 'storage')
        <!-- <div class="d-none d-lg-block col-lg-3 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/our-magical-room-jungle-fun-3.jpg');background-position:center 68%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/minelli-bookcase"'>
      <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">MINELLI BOOKCASE | <span style="font-size:0.9rem;">SEE MORE ></span></div>
    </div> -->
        <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-cuddle-rocking-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/cuddle-rocking-chair"'>
            <div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
                CUDDLE ROCKING CHAIR | <span style="font-size:0.9rem;">SEE MORE ></span></div>
        </div>

        <div class="container-fluid my-3" style="background-color:#fff;">
            <div class="row">
                <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            @include('includes.middle.form-ebook-new')
                        </div>
                        <div class="col-12 col-lg-6">
                            <img src="/img/new-products-2023-banner-form-m-new.png" width="524" height="264" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
                            <img src="/img/new-products-2023-banner-form-new.png" width="992" height="500" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif @if ($key == 'mirrors')
        <div class="d-none d-lg-block col-lg-3 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/small-chameleon-pink-mirror-circu-magical-furniture.jpg');background-position:center bottom;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/chameleon-pink-mirror/"'>
            <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
                CHAMELEON PINK MIRROR <span style="font-size:0.95rem;"> see more
                    ></span> </div>
        </div>

        <!-- form -->
        @include('includes.middle.form-download-pricelist-showroom')

        <!-- <div class="d-none d-lg-block col-lg-3 product-box">
      <div class="col-12 mt-2 text-center" style="color:#777777;font-size:0.95rem;letter-spacing:1px;font-weight:500;">
        <b>PERFECT COMBINATION</b>
      </div>
      <div class="col-12 owl-novelties owl-carousel owl-slide owl-theme p-0 position-relative">
        <div class="item">
          <a href="{{ route('product', ['product' => 'pixie-chair']) }}">
            <img src="/img/products/thumbnails/pixie-chair-circu-magical-furniture.png" alt="Pixie Chair" class="img-fluid">
            <div class="product--title position-absolute" style="bottom:1%;right:0;left:0;">
              <span class="name d-inline">Pixie</span>
              <span class="sub_category d-inline"> chair</span>
            </div>
          </a>
        </div>
        <div class="item">
          <a href="{{ route('product', ['product' => 'little-bunny-chair']) }}">
            <img src="/img/products/thumbnails/little-bunny-chair-circu-magical-furniture.png" alt="Little Bunny Chair" class="img-fluid">
            <div class="product--title position-absolute" style="bottom:1%;right:0;left:0;">
              <span class="name d-inline">Little Bunny</span>
              <span class="sub_category d-inline">Chair</span>
            </div>
          </a>
        </div>
        <div class="item">
          <a href="{{ route('product', ['product' => 'little-mermaid-chair']) }}">
            <img src="/img/products/thumbnails/little-mermaid-chair-circu-magical-furniture.png" alt="Little Mermaid Chair" class="img-fluid">
            <div class="product--title position-absolute" style="bottom:1%;right:0;left:0;">
              <span class="name d-inline">Little Mermaid</span>
              <span class="sub_category d-inline">Chair</span>
            </div>
          </a>
        </div>
        <div class="item">
          <a href="{{ route('product', ['product' => 'fantasy-air-chest-3-drawers']) }}">
            <img src="https://www.circu.net/img/products/thumbnails/fantasy-air-chest-3-drawers-circu-magical-furniture.png" alt="Fantasy Air 3 Drawers" class="img-fluid">
            <div class="product--title position-absolute" style="bottom:1%;right:0;left:0;">
              <span class="name d-inline">Fantasy 3 Drawers</span>
              <span class="sub_category d-inline"> Chest</span>
            </div>
          </a>
        </div>
      </div>
    </div> -->
        @endif

        <!-- @if ($key == 'mirrors')
<div class="d-none d-lg-block col-lg-9 product-box has-overlay"
            style="background-image:url('/img/products/thumbnails-covers/big-mirrors-new-collection-circu.jpg');background-position:center center;background-size:cover;cursor:pointer;"
            onclick='window.location.href="https://www.circu.net/products/chameleon-pink-mirror"'>
            <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">CHAMELEON MIRROR PINK | <span style="font-size:0.9rem;">SEE MORE ></span></div>
          </div>
@endif -->

        @if ($key == 'rugs')
        <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-cloud-sofa-circu-magical-furniture.jpg');background-position:center 95%;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/the-jungle-game-rug"'>
            <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">
                THE JUNGLE GAME RUG | <span style="font-size:0.9rem;">SEE MORE
                    ></span></div>
        </div>

        <div class="container-fluid my-3" style="background-color:#fff;">
            <div class="row">
                <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            @include('includes.middle.form-ebook-new')
                        </div>
                        <div class="col-12 col-lg-6">
                            <img src="/img/new-products-2023-banner-form-m-new.png" width="524" height="264" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
                            <img src="/img/new-products-2023-banner-form-new.png" width="992" height="500" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if ($key == 'seating')
    </div>
</div>
<div class="container-fluid my-3" style="background-color:#99b1c9;">
    <div class="row">
        <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
            <div class="row">
                <div class="col-12 col-lg-6">
                    @include('includes.middle.form-catalogue-2022')
                </div>
                <div class="col-12 col-lg-6">
                    <img src="/img/catalogo-2022-banner-form-mobile.jpg" width="524" height="264" alt="Catalogue 2022" class="img-fluid d-block d-sm-none">
                    <img src="/img/catalogo-2022-banner-form.jpg" width="992" height="500" alt="Catalogue 2022" class="img-fluid d-none d-sm-block">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        @endif @if ($key == 'beds')
    </div>
</div>

<div class="container-fluid my-3" style="background-color:#fff;">
    <div class="row">
        <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
            <div class="row">
                <div class="col-12 col-lg-6">
                    @include('includes.middle.form-ebook-new')
                </div>
                <div class="col-12 col-lg-6">
                    <img src="/img/new-products-2023-banner-form-m-new.png" width="524" height="264" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
                    <img src="/img/new-products-2023-banner-form-new.png" width="992" height="500" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        @endif @endforeach

    </div>
    <!-- end row -->

</div>
<!-- end container -->

<script>
    	
        
    $(document).ready(function() {
        $('.owl-novelties').owlCarousel({
            loop: true,
            margin: 10,
            lazyLoad: false,
            dots: false,
            nav: true,
            navText: ["<i class='fas fa-chevron-left p-0 pl-2 arrow-banners'></i>",
                "<i class='fas fa-chevron-right p-0 pr-2 arrow-banners'></i>"
            ],
            autoplay: false,
            fluidSpeed: 1500,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                }
            }
        });
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
                slidesToShow: 2,
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

        $('.slider-nav .slick-slide').on('click', function(event) {
            $('.slider-for').slick('slickGoTo', $(this).data('slickIndex'));
        });

        var elm = $('.slider-nav '),
            getSlick = elm.slick('getSlick');

        if (getSlick.slideCount <= getSlick.options.slidesToShow) {
            elm.addClass('slick-no-slide');
        } else {
            elm.removeClass('slick-no-slide');
        }


    });
</script>