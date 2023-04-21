@extends('layouts.master-pressroom')

@section('main-content')

<div class="container max-width-site">

  @include('includes.errors')
               
  @if (session('message'))
      <div class="alert alert-success">
          <span onclick="this.parentElement.style.display='none'"
              class="position-absolute" style="right:10px; cursor:pointer;"> <i class="fas fa-times"></i> </span>
          {{ session('message') }}
      </div>
  @endif

  <div class="row">

    @foreach( $all_products as $key => $category)

        <div class="col-12">
            <a name="{{ $key }}" href="#"></a>
            <h2 class="title_category">{{ ucwords($key) }} </h2>
        </div>

            @foreach($category as $product )
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 product_thumb" id="">
                <a href="{{ route('pressroom.product', ['product' => $product->slug]) }}">
                @if (file_exists('./img/products/carousel/'. $product->slug .'-circu-magical-furniture.jpg'))
                    <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.jpg" class="img-responsive">
                @else
                    <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.gif" class="img-responsive">
                @endif
                <div class="product-caption"> {{ $product->name }}  </div>
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

</div><!-- end container -->

@endsection

@section('meta')
  <title>All Products Circu Magical Furniture - Luxury brand for children</title>
  <meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
  <meta name="author" content="circu">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="All Products Circu Magical Furniture - Luxury brand for children" />
  <meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta property="og:url" content="http://www.circu.net/pressroom/products"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection