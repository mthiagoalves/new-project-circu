@extends('layouts.master-pressroom')

@section('main-content')

<div class="container max-width-site">

    <div class="row">

      <div class="col-12">

        <div class="col-12 text-center pt-5 pb-2">
          <h5 class="title_highlight border_b_grey mb-4"> PRESS CLIPPING </h5>
        </div>

        <div class="row">

          <?php $i = 1 ?>
          @foreach($pressclipping as $clipping)

            <div class="col-6 col-md-2 {{ $i }}">
              <div class="product_thumb">
                <a href="{{ route('press-clipping', $clipping->slug) }}">
                  <img src="/img/press/clipping/covers/{{ $clipping->slug }}_s.jpg" border="0" alt="" onmouseover="this.src='/img/press/clipping/covers/{{ $clipping->slug }}_s.jpg'" onmouseout="this.src='/img/press/clipping/covers/{{ $clipping->slug }}_s.jpg'" class="img-responsive">
                    <div class="product-caption">{!! $clipping->article_languages[0]->title !!}</div>
                </a>
              </div>
            </div>

            @if($i % 6 == 0)
              
              <div class="clearfix visible-sm visible-md visible-lg"></div>

            @endif


            <?php  $i++ ?>

          @endforeach

        </div>

      </div><!--  end col-12 -->

  </div> <!-- end row -->

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