@extends('layouts.master-pressroom')

@section('main-content')

    <div class="container max-width-site">   

        <div class="row">

            <div class="col-12">
              <div class="separator"><h3 class="background"> <span> {{ $collection->collection_languages[0]->name }} </span></h3></div>
            </div>

            @foreach($collection->collection_products as $collection_product)
                @if ($collection_product->product != null)

                    <?php 
                        $directory = './img/products/'.$collection_product->product->slug.'/high-resolution/';
                        $files = glob($directory . '*.jpg');
                        if ( $files !== false ){
                            $filecount = count($files);
                        }
                    ?>

                    @for($i = 1; $i < $filecount; $i++)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 product_thumb">
                        <a href="/img/products/{{ $collection_product->product->slug }}/high-resolution/{{ $collection_product->product->slug }}-circu-magical-furniture-{{$i}}.jpg" target="_blank">
                        <img src="/img/products/{{ $collection_product->product->slug }}/364x368/{{ $collection_product->product->slug }}-circu-magical-furniture-{{$i}}.jpg" class="img-responsive">
                        <div class="product-caption"> {{ $collection_product->product->name }}  </div>
                            <div class="product-caption-sub"> {{ $collection_product->product->sub_category->sub_category_languages[0]->name }} </div>
                        </a>
                        </div>
                    @endfor

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
  <meta property="og:url" content="http://www.circu.net/pressroom/collections/{{ $collection->slug }}"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection