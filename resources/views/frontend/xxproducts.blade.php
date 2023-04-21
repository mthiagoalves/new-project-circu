@extends('layouts.master')

@section('main-content')

<div class="container-fluid pt-5">

  @include('includes.errors')
               
  @if (session('message'))
      <div class="alert alert-success">
          <span onclick="this.parentElement.style.display='none'"
              class="position-absolute" style="right:10px; cursor:pointer;"> <i class="fas fa-times"></i> </span>
          {{ session('message') }}
      </div>
  @endif

    @if(count($best_sellers) > 0)

    <div class="row">

      <div class="col-12">
          <a name="best_sellers" href="#"></a>
          <h2 class="title_category mt-0"> Best Sellers </h2>
      </div>

    </div>

    <div class="row outer eight-cols">

      @foreach($best_sellers as $best_seller)

        <div class="col-12 col-sm-6 col-xl-1 product-item product-box text-center p-3">
            @if(file_exists('./img/products/carousel/'.$best_seller->slug.'-circu-magical-furniture.jpg'))
                <img src="/img/products/carousel/{{ $best_seller->slug }}-circu-magical-furniture.jpg" class="img-responsive">
            @else
                <img src="/img/products/carousel/{{ $best_seller->slug }}-circu-magical-furniture.gif" class="img-responsive">
            @endif
            <div class="cat_title product-caption my-1"> {{ $best_seller->name }} </div>
            <div class="view-more-hover"></div>
            <div class="btn-view-more"><a href="{{ route('product', ['product' => $best_seller->slug]) }}">KNOW MORE</a></div>

        </div>

      @endforeach

    @endif

    </div>

  </div>

  <div class="container max-width-site">
    <div class="row">

    <div class="col-12 pb-4"></div>

    @foreach( $all_products as $key => $category)

        <div class="col-12">
            <a name="{{ $key }}" href="#"></a>
            <h2 class="title_category">{{ ucwords($key) }} </h2>
        </div>

            @foreach($category as $product )
            <div class="col-12 col-sm-4 col-md-3 product_thumb" id="">
                <a href="{{ route('product', ['product' => $product->slug]) }}">
                
                @if(file_exists('./img/products/carousel/'.$product->slug.'-circu-magical-furniture.jpg'))
                    <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.jpg" class="img-responsive">
                @else
                    <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.gif" class="img-responsive">
                @endif

                <div class="product-caption"> {{ $product->name }}  </div>
                <div class="product-caption-sub"> {{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</div>
                @if($instock->contains('id', $product->id)) 
                  <div class="product-stock in-stock"> IN STOCK </div>
                @else
                  <div class="product-stock off-stock"> OUT STOCK </div>
                @endif
                @if ($product->is_new)
                    <div class="new-product">
                        <img src="/img/icons/new-product.png">
                    </div>
                @endif
                </a>
                <div class="slideToggle">
                    <a rel="modal:open" class="btn-get-price" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE ></b></span></a>
                </div>
                
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
  <meta property="og:url" content="http://www.circu.net/products"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection

@section('head-includes')
  <style>
    .product-caption {
      font-size: 0.7rem !important;
    }
    .btn-view-more a {
      font-size: 0.70rem;
      letter-spacing: 1px;
      font-weight: 600;
      width: 80%;
    }
  </style>
@endsection