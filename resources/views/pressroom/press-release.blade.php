@extends('layouts.master-pressroom')

@section('main-content')

<div class="container max-width-site pt-5">

  <div class="row">

    @php
    $directory = "./img/press/media-pack/";
    @endphp

    @if(file_exists('./img/press/media-pack/'.$pressrelease->slug.'.jpg'))
    <div class="col-12 pb-4">
      @if(file_exists('./docs/media-pack/'.$pressrelease->slug.'.zip'))
      <a href="/docs/media-pack/{{ $pressrelease->slug }}.zip">
        @else
        <a href="/docs/press-release/{{ $pressrelease->slug }}.pdf" target="_blank">
          @endif
          <img src="/img/press/media-pack/{{ $pressrelease->slug }}.jpg" onmouseover="this.src='/img/press/media-pack/{{ $pressrelease->slug }}_s.jpg'" onmouseout="this.src='/img/press/media-pack/{{ $pressrelease->slug }}.jpg'" class="d-none d-md-block img-fluid" alt="" style="cursor:pointer;">

          <img src="/img/press/media-pack/{{ $pressrelease->slug }}-mobile.jpg" onmouseover="this.src='/img/press/media-pack/{{ $pressrelease->slug }}-mobile_s.jpg'" onmouseout="this.src='/img/press/media-pack/{{ $pressrelease->slug }}-mobile.jpg'" class="d-block d-md-none img-fluid" alt="" style="cursor:pointer;">
        </a>
    </div>
    @endif

    <div class="col-12 col-md-5 nopadding">
      <img src="/img/press/press-release/{{ $pressrelease->slug }}.jpg" class="img-fluid"></a>
    </div>

    <div class="col-12 col-md-7 product_info">
      <h1 class="product_title">{!! $pressrelease->article_languages[0]->title !!}</h1>

      <div class="product_description">
        <p>
          {!! $pressrelease->article_languages[0]->description !!}
        </p>

        <div class="btn_option btn_c_green">
          @if(file_exists('./docs/media-pack/'.$pressrelease->slug.'.zip'))
          <a href="/docs/media-pack/{{ $pressrelease->slug }}.zip"><span>DOWNLOAD MEDIA PACK ></span></a>
          @else
          <a href="/docs/press-release/{{ $pressrelease->slug }}.pdf" target="_blank"><span>DOWNLOAD PRESS RELEASE ></span></a>
          @endif
        </div>
      </div>
    </div>

    @if($pressrelease->slug == 'press-release-the-sky-is-the-limit' || 'a-step-into-a-haven-of-luxury')
    <div class="col-12 pt-4">
    </div>
    @else
    <div class="col-12 pt-4">

      <div class="col-12 text-center pt-5 pb-2">
        <h5 class="title_highlight border_b_grey py-2 mb-4"> Product Featureds </h5>
      </div>

      @foreach($pressrelease->article_products as $article_product)
      @if ($article_product->product != null)
      <div class="col-6 col-sm-3 product_thumb">
        <a href="{{ route('pressroom.product', ['product' => $article_product->product->slug]) }}">
          @if (file_exists('./img/products/carousel/'. $article_product->product->slug .'-circu-magical-furniture.jpg'))
          <img src="/img/products/carousel/{{ $article_product->product->slug }}-circu-magical-furniture.jpg" class="img-fluid">
          @else
          <img src="/img/products/carousel/{{ $article_product->product->slug }}-circu-magical-furniture.gif" class="img-fluid">
          @endif
          <div class="product-caption"> {{ $article_product->product->name }} </div>
          <div class="product-caption-sub"> {{ ucwords($article_product->product->sub_category->sub_category_languages[0]->name) }}
          </div>
          @if ($article_product->product->is_new)
          <div class="new-product">
            <img src="/img/icons/new-product.png">
          </div>
          @endif
        </a>
      </div>
      @endif
      @endforeach

    </div>
    @endif


  </div><!-- end row -->

</div><!-- container-->

@endsection

@section('meta')
<title>{{ $pressrelease->article_languages[0]->title }} - Circu Magical Furniture</title>
<meta name="description" content="{{ $pressrelease->article_languages[0]->title }} - Circu Magical Furniture" />
<meta name="keywords" content="press release circu magical furniture" />
<meta name="author" content="circu">
<meta property="og:type" content="product" />
<meta property="og:title" content="{{ $pressrelease->article_languages[0]->title }} - Circu Magical Furniture" />
<meta property="og:description" content="{{ str_limit($pressrelease->article_languages[0]->description, 200) }}" />
<meta property="og:url" content="http://www.circu.net/pressroom/press-releases/{{ $pressrelease->slug }}" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="http://www.circu.net/img/press/press-release/{{ $pressrelease->slug }}.jpg" />
@endsection