@extends('layouts.master-pressroom')

@section('main-content')

<div class="container max-width-site">

    <div class="row">

      <div class="col-12">
          <div class="separator"><h3 class="background"> <span> AMBIENCES </span></h3></div>
      </div>

      <div class="col-12 nopadding">

      @foreach($ambiences as $ambience)

        <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/{{$ambience->slug}}.jpg" target="_blank">
        <img src="/img/press/ambiences/364x368/{{$ambience->slug}}.jpg" class="img-responsive">
        <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
        </div>

      @endforeach

      

      </div><!--  end col-md-12 -->

  </div>


</div>

@endsection

@section('meta')
  <title>Ambiences - Circu Magical Furniture</title>
  <meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
  <meta name="author" content="circu">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="About - Circu Magical Furniture" />
  <meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta property="og:url" content="http://www.circu.net/pressroom/ambiences"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:price:amount" content="0.0" />
  <meta property="og:price:currency" content="USD" />
  <meta property="og:availability" content="preorder" />
  <meta property="og:image" content="http://www.circu.net/images/logo-circu-magical-furniture.png" />
@endsection