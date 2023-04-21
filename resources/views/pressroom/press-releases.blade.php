@extends('layouts.master-pressroom')

@section('main-content')

<div class="container max-width-site">

    <div class="row">

      <div class="col-12 text-center pt-5 pb-2">
        <h5 class="title_highlight py-2 mb-4"> PRESS RELEASES </h5>
      </div>

      <div class="col-12 nopadding">

      <?php $i = 1 ?>
      @foreach($pressreleases as $pressrelease)

          <div class="col-12 col-sm-6 col-lg-3 product_thumb">
          <a href="{{ route('pressroom.press-release', $pressrelease->slug) }}">
          <img src="/img/press/press-release/{{ $pressrelease->slug }}.jpg" class="img-responsive"></a>
          <p class="press-title_release">{!! $pressrelease->article_languages[0]->title !!}</p>
          <p class="press-text_release">{!! str_limit($pressrelease->article_languages[0]->description, 100) !!}</p>
          <a href="/press/press-releases/{{ $pressrelease->slug }}" class="a_read_more">Read More &gt;</a>
          </div>

          @if($i % 4 == 0)
            <div class="clearfix d-none d-sm-block d-md-block d-lg-block"></div>

          @endif

          <?php  $i++ ?>

      @endforeach



      </div><!--  end col-md-12 -->

  </div>


</div>

@endsection

@section('meta')
  <title>Press Releases - Circu Magical Furniture</title>
  <meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
  <meta name="author" content="circu">
  <meta property="og:type" content="product" />
  <meta property="og:title" content="Press Releases - Circu Magical Furniture" />
  <meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta property="og:url" content="http://www.circu.net/pressroom/press-releases"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:price:amount" content="0.0" />
  <meta property="og:price:currency" content="USD" />
  <meta property="og:availability" content="preorder" />
  <meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection
