@extends('layouts.master')

@section('main-content')

    <div class="container max-width-site pt-5">

        <div class="row">

            <div class="col-12">
            <ol class="breadcrumb col-12" style="margin-bottom: 5px;">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/press/">Press</a></li>
            <li class="breadcrumb-item active">{!! $pressclipping->article_languages[0]->title !!}</li>
            </ol>
            </div>

            <div class="col-12">
                <img src="/img/press/clipping/magazine/{{ $pressclipping->slug }}.jpg" class="img-responsive" alt="{{ $pressclipping->article_languages[0]->title }} Press Clipping of Circu Magical Furniture Luxury brand for children">
            </div>

            <div class="col-12">
                <div class="col-12">
                    <h1 class="product_title" id="title">{!! $pressclipping->article_languages[0]->title !!}<br><br class="d-block d-lg-none">
                    <span class="highlight">Product Featured: </span></h1>


                    @foreach($pressclipping->article_products as $product) 
                        {{-- {{ $product->product->name }}  --}}

                        <div class="col-6 col-sm-3 product_thumb" id="">
                            <a href="{{ route('pressroom.product', ['product' => $product->product->slug]) }}">
                            @if(file_exists('./img/products/carousel/'. $product->product->slug .'-circu-magical-furniture.jpg'))
                                <img src="/img/products/carousel/{{ $product->product->slug }}-circu-magical-furniture.jpg" class="img-responsive">
                            @else
                                <img src="/img/products/carousel/{{ $product->product->slug }}-circu-magical-furniture.gif" class="img-responsive">
                            @endif
                            <div class="product-caption"> {{ $product->product->name }}  </div>
                            <div class="product-caption-sub"> {{ ucwords($product->product->sub_category->sub_category_languages[0]->name) }}  
                            </div>
                            @if ($product->product->is_new)
                                <div class="new-product">
                                    <img src="/img/icons/new-product.png">
                                </div>
                            @endif
                            </a>
                        </div>
                    @endforeach
                
                </div>
                
            </div>


        </div><!-- end row -->

    </div><!-- container-->

@endsection

@section('meta')
  <title>{!! $pressclipping->article_languages[0]->title !!} - Circu Magical Furniture</title>
  <meta name="description" content="{{ $pressclipping->article_languages[0]->title }}" />
  <meta name="keywords" content="press release circu magical furniture" />
  <meta name="author" content="circu">
  <meta property="og:type" content="product" />
  <meta property="og:title" content="{{ $pressclipping->article_languages[0]->title }} - Circu Magical Furniture" />
  <meta property="og:description" content="{{ $pressclipping->article_languages[0]->title }}" />
  <meta property="og:url" content="http://www.circu.net/pressroom/press-releases/{{ $pressclipping->slug }}"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:price:amount" content="0.0" />
  <meta property="og:price:currency" content="USD" />
  <meta property="og:availability" content="preorder" />
  <meta property="og:image" content="http://www.circu.net/img/press/clipping/magazine/{{ $pressclipping->slug }}.jpg" />
@endsection

<script>
    let element = document.getElementById('title');

    let title = document.title;
    title = Item;
</script>