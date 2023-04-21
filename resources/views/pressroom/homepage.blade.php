@extends('layouts.master-pressroom')

@section('main-content')

<div class="container max-width-site">

    @include('includes.errors')

    @if (session('message'))
    <div class="alert alert-success">
        <span onclick="this.parentElement.style.display='none'" class="position-absolute" style="right:10px; cursor:pointer;"> <i class="fas fa-times"></i> </span>
        {{ session('message') }}
    </div>
    @endif

    <div class="row area_press_slides">

        <div class="col-sm-6">
            <div class="col-12 nopadding">
                <h2 class="above">NEW PRODUCTS</h2>
            </div>

            <div class="flexslider_controls">
                <ul class="slides">

                    <li><a href="/pressroom/products/dainty-armchair"><img src="https://www.circu.net/img/products/dainty-armchair/slide/dainty-armchair-circu-magical-furniture-1.jpg" class="img-fluid" alt="Furniture for children's bedroom"></a></li>

                    <li><a href="/pressroom/products/little-cloud-nightstand"><img src="https://www.circu.net/img/products/little-cloud-nightstand/slide/little-cloud-nightstand-circu-magical-furniture-3.jpg" class="img-fluid" alt="Furniture for children's bedroom"></a></li>

                    <li><a href="/pressroom/products/dream-desk"><img src="https://www.circu.net/img/products/dream-desk/slide/dream-desk-circu-magical-furniture-1.jpg" class="img-fluid" alt="Furniture for children's bedroom"></a></li>

                    <li><a href="/pressroom/products/hoot-stool"><img src="https://www.circu.net/img/products/hoot-stool/slide/hoot-stool-circu-magical-furniture-1.jpg" class="img-fluid" alt="Furniture for children's bedroom"></a></li>

                </ul>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="col-12 nopadding">
                <h2 class="above">MAGICAL AMBIENCES</h2>
            </div>

            <div class="flexslider_controls">
                <ul class="slides">

                    <li><a href="/pressroom/products/dainty-armchair"><img src="/img/products/dainty-armchair/slide/dainty-armchair-circu-magical-furniture-6.jpg" class="img-fluid" alt="ainty is a real-life figure of elegance and beautifulness. "></a></li>

                    <li><a href="/pressroom/products/little-cloud-nightstand"><img src="/img/products/little-cloud-nightstand/slide/little-cloud-nightstand-circu-magical-furniture-10.jpg" class="img-fluid" alt="Furniture for children's bedroom"></a></li>

                    <li><a href="/pressroom/products/dream-desk"><img src="/img/products/dream-desk/slide/dream-desk-circu-magical-furniture-16.jpg" class="img-fluid" alt="Furniture for children's bedroom"></a></li>

                    <li><a href="/pressroom/products/hoot-stool"><img src="/img/products/hoot-stool/slide/hoot-stool-circu-magical-furniture-7.jpg" class="img-fluid" alt="Furniture for children's bedroom"></a></li>

                    {{-- <li><a href="/pressroom/products/cloud-chest-3-drawers"><img src="/img/products/cloud-chest-3-drawers/slide/cloud-chest-3-drawers-circu-magical-furniture-2.jpg" class="img-responsive" alt="Furniture for children's bedroom"></a></li>

                        <li><a href="/pressroom/products/sky-desk"><img src="/img/products/sky-desk/slide/sky-desk-circu-magical-furniture-1.jpg" class="img-fluid" alt="Furniture for children's bedroom"></a></li> --}}

                </ul>
            </div>
        </div>

    </div><!-- end row -->

    <div class="row">

        <div class="col-12">
            <div class="separator">
                <h3 class="background"> <span> PRESS RELEASES </span></h3>
            </div>
        </div>

        @foreach($pressreleases as $pressrelease)

        <div class="col-6 col-sm-3">
            <div class="product_thumb">
                <p class="press-title_release m-0" style="height:44px;">{!! $pressrelease->article_languages[0]->title !!}</p>
                <a href="{{ route('pressroom.press-release', $pressrelease->slug) }}">
                    <img src="/img/press/press-release/{{ $pressrelease->slug }}.jpg" class="img-responsive"></a>
                <div class="slideToggle">
                    <a class="btn-get-price" href="/press/press-release/{{ $pressrelease->slug }}"><span><b>DOWNLOAD </b> PRESS RELEASE</span> </a>
                </div>
            </div>
        </div>

        @endforeach


        <div class="clearfix visible-sm visible-md visible-lg"></div>

        <div class="col-12" style="text-align: center;">
            <a href="/pressroom/press-releases" class="btn_submit btn_border_dark">VIEW ALL <b>PRESS RELEASES</b> &gt;</a>
        </div>


    </div>

    <div class="row">

        @foreach( $all_products as $key => $category)

        <div class="col-12">
            <h2 class="title_category"><i>{{ ucwords($key) }} </i></h2>
        </div>

        @foreach($category as $product )
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 product_thumb" id="">
            <a href="{{ route('pressroom.product', ['product' => $product->slug]) }}">
                @if (file_exists('./img/products/carousel/'. $product->slug .'-circu-magical-furniture.jpg'))
                <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.jpg" class="img-responsive">
                @else
                <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.gif" class="img-responsive">
                @endif
                <div class="product-caption"> {{ $product->name }} </div>
                <div class="product-caption-sub"> {{ ucwords($product->sub_category->sub_category_languages[0]->name) }}
                </div>
                @if ($product->is_new)
                <div class="new-product">
                    <img src="/img/icons/new-product.png">
                </div>
                @endif
            </a>
        </div>
        @endforeach

        <br><br><br>
        @endforeach

        <br><br>

    </div><!-- end row -->
</div>
<!-- end container -->

@endsection

@section('meta')
<title>PressRoom Circu Magical Furniture - Luxury brand for children</title>
<meta name="description" content="PressRoom Circu Magical Furniture - Luxury brand for children" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="HR Images, ambiences and press releases by Circu Magical Furniture - Luxury brand for children" />
<meta property="og:description" content="pressroom, pressarea, press, hr images" />
<meta property="og:url" content="http://www.circu.net/pressroom/" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="http://www.circu.net/img/circu-magical-furniture-logo.png" />
@endsection