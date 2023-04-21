@extends('layouts.master')

@section('main-content')

    <div class="container max-width-site pt-5">   


        <div class="row">

            <div class="col-12">
                <a name="{{ $collection->slug }}" href="#"></a>
                <h2 class="title_category text-center">{{ $collection->collection_languages[0]->name }}</h2>
            </div>

            @foreach($collection->collection_products as $collection_product)
                @if ($collection_product->product != null)
                    <div class="col-12 col-sm-3 product_thumb" id="">
                        <a href="/products/{{ $collection_product->product->slug }}">
                        <img src="/img/products/carousel/{{ $collection_product->product->slug }}-circu-magical-furniture.jpg" class="img-responsive">
                        <div class="product-caption"> {{ $collection_product->product->name }}  </div>
                        <div class="product-caption-sub"> {{ $collection_product->product->sub_category->sub_category_languages[0]->name }} </div>
                        @if ($collection_product->product->is_new)
                            <div class="new-product">
                                <img src="/img/icons/new-product.png">
                            </div>
                        @endif
                        </a>
                    </div>
                @endif
            @endforeach 

        </div>

    </div><!-- container-->

@endsection

@section('meta')
  <title>{{ $collection->collection_languages[0]->name }} Circu Magical Furniture - Luxury brand for children</title>
  <meta name="description" content="{{ $collection->collection_languages[0]->name }} Circu Magical Furniture - Luxury brand for children" />
  <meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
  <meta name="author" content="circu">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="{{ $collection->collection_languages[0]->name }} Circu Magical Furniture - Luxury brand for children" />
  <meta property="og:description" content="{{ $collection->collection_languages[0]->name }} Circu Magical Furniture - Luxury brand for children" />
  <meta property="og:url" content="http://www.circu.net/collections/{{ $collection->slug }}"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection