@extends('layouts.master')
@section('meta')
<title>{!! str_replace('<br>', ' ',$pressrelease->article_languages[0]->title) !!} - Circu Magical Furniture</title>
<meta name="description" content="{!! str_replace('<br>', ' ',$pressrelease->article_languages[0]->title) !!}" />
<meta name="keywords" content="press release circu magical furniture" />
<meta name="author" content="circu">
<meta property="og:type" content="product" />
<meta property="og:title" content="{{ $pressrelease->article_languages[0]->title }} - Circu Magical Furniture" />
<meta property="og:description" content="{{ str_limit($pressrelease->article_languages[0]->description, 160) }}" />
<meta property="og:url" content="http://www.circu.net/pressroom/press-releases/{{ $pressrelease->slug }}" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="http://www.circu.net/img/press/press-release/{{ $pressrelease->slug }}.jpg" />
@endsection
@section('main-content')

<div class="container max-width-site pt-3">

  <div class="row">

    @php
    $directory = "./img/press/media-pack/";
    @endphp

    @if(file_exists('./img/press/media-pack/'.$pressrelease->slug.'.jpg'))
    <div class="col-12 pb-4">
      @if(file_exists('./docs/media-pack/'.$pressrelease->slug.'.zip'))

      <a rel="modal:open" href="{{route('modal-press-release', $pressrelease->slug )}}">
        @else
        <a rel="modal:open" href="{{route('modal-press-release', $pressrelease->slug )}}">
          @endif
          <img src="/img/press/media-pack/{{ $pressrelease->slug }}.jpg" onmouseover="this.src='/img/press/media-pack/{{ $pressrelease->slug }}_s.jpg'" onmouseout="this.src='/img/press/media-pack/{{ $pressrelease->slug }}.jpg'" class="d-none d-md-block img-fluid" alt="" style="cursor:pointer;">

        </a>
    </div>
    @endif

    <div class="col-12 col-md-5 nopadding">
      <img src="/img/press/press-release/{{ $pressrelease->slug }}.jpg" class="img-fluid"></a>
    </div>

    <div class="col-12 col-md-7 product_info">
      <h1 class="product_title">{!! str_replace('<br>', ' ',$pressrelease->article_languages[0]->title) !!}</h1>

      <div class="product_description">
        <p>
          {!! $pressrelease->article_languages[0]->description !!}
        </p>

        <div class="btn_option btn_c_green">
          @if(file_exists('./docs/media-pack/'.$pressrelease->slug.'.zip'))
          <a rel="modal:open" href="{{route('modal-press-release', $pressrelease->slug )}}"><span>DOWNLOAD MEDIA PACK ></span></a>
          @else
          <a rel="modal:open" href="{{route('modal-press-release', $pressrelease->slug )}}"><span>DOWNLOAD PRESS RELEASE ></span></a>
          @endif
        </div>
      </div>
    </div>

    @if($pressrelease->slug == 'press-release-the-sky-is-the-limit' || $pressrelease->slug == 'a-step-into-a-haven-of-luxury')
    <div class="col-12 pt-4">
    </div>
    @else
    <div class="row m-0 pt-4">

      <div class="col-12 text-center pt-5 pb-2">
        <h5 class="title_highlight border_b_grey py-2 mb-4"> Product Featureds </h5>
      </div>

      @foreach($pressrelease->article_products as $article_product)
      @if ($article_product->product != null)
      <div class="col-6 col-sm-3 ">
        <a href="{{ route('product', ['product' => $article_product->product->slug]) }}" target="_blank">
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

