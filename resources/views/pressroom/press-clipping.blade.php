@extends('layouts.master-pressroom')

@section('main-content')

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ol class="breadcrumb" style="margin-bottom: 5px;">
            <li><a href="/">Home</a></li>
            <li><a href="/pressroom/">Press</a></li>
            <li class="active">{{ $pressclipping->article_languages[0]->title }}</li>
            </ol>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="/img/press/clipping/magazine/{{ $pressclipping->slug }}.jpg" class="img-responsive" alt="{{ $pressclipping->article_languages[0]->title }} Press Clipping of Circu Magical Furniture Luxury brand for children">
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-xs-12">
                    <h1 class="product_title">{{ $pressclipping->article_languages[0]->title }}<br>
                    <span class="highlight">Product Featured: </span></h1>


                    @foreach($pressclipping->article_products as $product) 
                        {{-- {{ $product->product->name }}  --}}

                        <div class="col-xs-6 col-sm-3 product_thumb" id="">
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