@extends('layouts.master-pressroom')

@section('main-content')
<style>
  .product_description p {
    margin: 0px !important;
  }
</style>
<div class="container max-width-site">

  <div class="row product">

    <div class="col-sm-12 col-md-6 nopadding">
      <?php
      $directory = '/img/products/' . $product->slug . '/slide/';
      $files = glob($directory . '*.jpg');
      if ($files !== false) {
        $filecount = count($files);
      }
      ?>
      <div class="slide_product_main col-12 flexslider nopadding" id="slider_product">
        @if($product->slug == 'cloud-lamp-small' || $product->slug == 'cloud-lamp-big')
        <img src="/img/products/{{$product->slug}}/details/{{$product->slug}}-circu-magical-furniture-1.gif" class="img-responsive" alt="">
        @else
        <img src="/img/products/{{$product->slug}}/slide/{{$product->slug}}-circu-magical-furniture-1.jpg" class="img-responsive" alt="">
        @endif
      </div>
    </div>

    <div class="col-sm-12 col-md-6 product_info">

      <h1 class="product_title px-3">{{ $product->name }} <span class="highlight_n">{{ $product->sub_category->sub_category_languages->where('language_id', '=', '1')->first()->name }}</span><br>
        @if($product->is_limited == true)
        <span class="highlight">Limited Edition</span>
        @endif
      </h1>

      <div class="col-12 product_copyright px-3">Registered Design ® | Patent Pending ℗ </div>

      <div class="col-12 product_description px-3" style="padding-top: 2em;">
        <p><b>PRODUCT DETAILS</b>
          {!! $product->product_languages[0]->description !!}</p>
      </div>

      <div class="col-12 product_technical px-3">
        <p><b>MATERIALS</b><br>{!! $product->product_languages[0]->tec_info !!}</p>
        <p><b>DIMENSIONS</b><br>{!! $product->product_languages[0]->dimensions !!}</p>

      </div>

      <div class="col-12">
        <div class="addthis_sharing_toolbox"></div>
      </div>

    </div><!-- end col-6 -->

  </div><!-- end row -->

  <div class="row">

    <div class="col-12">
      <div class="separator">
        <h3 class="background"> <span> HIGH RESOLUTION IMG </span></h3>
      </div>
    </div>

    <div class="col-12 nopadding">

      <!-- <div class="col-6 col-sm-3 product_thumb">

      <a href="{{ asset('/pressroom/'.$product->slug.'-hr-images-circu-magical-furniture.zip') }}">
      <img src="/img/icons/download-pack.jpg" class="img-responsive">
      <div class="product-caption"> DOWNLOAD PACK > </div>
      </a>
      </div> -->

      <?php
      $directory = './img/products/' . $product->slug . '/high-resolution/';
      $files = glob($directory . '*.{jpg,gif}', GLOB_BRACE);
      if ($files !== false) {
        $filecount = count($files);
      }
      ?>




      @if(($product->slug == "dainty-armchair") )
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/cloud-armchair-rosa.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/cloud-armchair-rosa.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif





      @if(($product->slug == "mermaid-bed"))
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/mermaid-bed-circu-magical-furniture-3.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/mermaid-bed-circu-magical-furniture-3.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif


      @if(($product->slug == "hoot-stool"))
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/hoot-stool-circu-magical-furniture-ambience-1.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/hoot-stool-circu-magical-furniture-ambience-1.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif

      @if(($product->slug == "kings-and-queens-castle"))
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/kings-and-queens-castle-circu-magical-furniture-3.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/kings-and-queens-castle-circu-magical-furniture-3.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>

      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/kings-and-queens-castle-circu-magical-furniture-4.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/kings-and-queens-castle-circu-magical-furniture-4.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif



      @if(($product->slug == "cloud-dressing-table-vanity-console"))
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/cloud-dressing-table-vanity-console-circu-magical-furniture-ambience-1.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/cloud-dressing-table-vanity-console-circu-magical-furniture-ambience-1.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif

      @if(($product->slug == "sky-desk"))
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/playground-sky-desk-circu-magical-furniture.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/playground-circu-magical-furniture.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>

      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/sky-desk-circu-magical-furniture-3-blue.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/sky-desk-circu-magical-furniture-3-blue.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>

      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/sky-desk-circu-magical-furniture-3-yellow.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/sky-desk-circu-magical-furniture-3-yellow.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>

      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/sky-desk-circu-magical-furniture-3-pink.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/sky-desk-circu-magical-furniture-3-pink.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif

      @if(($product->slug == "letter-b-graphic-collection"))
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/letter-b-graphic-collection-circu-magical-furniture-1.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/letter-b-graphic-collection-circu-magical-furniture-1.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif

      @if(($product->slug == "bubble-gum-bed"))
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/bubble-gum-bed-circu-magical-furniture-1.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/bubble-gum-bed-circu-magical-furniture-1.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>

      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/bubble-gum-collection-circu-magical-furniture-1.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/bubble-gum-collection-circu-magical-furniture-1b.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif

      @if(($product->slug == "bubble-gum-chest-3-drawers") || ($product->slug == "bubble-gum-small-mirror"))
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/bubble-gum-collection-circu-magical-furniture-1.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/bubble-gum-collection-circu-magical-furniture-1.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif

      @if(($product->slug == "bubble-gum-desk"))
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/bubble-gum-desk-circu-magical-furniture-1.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/bubble-gum-desk-circu-magical-furniture-1.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif

      @if(($product->slug == "bubble-gum-playground"))
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/playground-circu-magical-furniture.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/playground-circu-magical-furniture.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif

      @if(($product->slug == "rocky-rocket"))
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/playground-circu-magical-furniture.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/playground-rocky-rocket-circu-magical-furniture.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif

      @if(($product->slug == "cotton-candy-sofa"))
      <div class="col-6 col-sm-3 product_thumb">
        <a href="/img/press/ambiences/high-resolution/playground-circu-magical-furniture.jpg" target="_blank">
          <img src="/img/press/ambiences/364x368/playground-cotton-candy-sofa-circu-magical-furniture.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
      </div>
      @endif



      @for($i = 1; $i <= $filecount; $i++) <div class="col-6 col-sm-3 product_thumb">
        @if(file_exists('./img/products/'.$product->slug.'/high-resolution/'.$product->slug.'-circu-magical-furniture-'.$i.'.jpg'))
        <a href="/img/products/{{$product->slug}}/high-resolution/{{$product->slug}}-circu-magical-furniture-{{$i}}.jpg" target="_blank">
          <img src="/img/products/{{$product->slug}}/364x368/{{$product->slug}}-circu-magical-furniture-{{$i}}.jpg" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
        @else
        <a href="/img/products/{{$product->slug}}/high-resolution/{{$product->slug}}-circu-magical-furniture-{{$i}}.gif" target="_blank">
          <img src="/img/products/{{$product->slug}}/364x368/{{$product->slug}}-circu-magical-furniture-{{$i}}.gif" style="height:380px;" class="img-responsive">
          <div class="product-caption"> DOWNLOAD IMAGE > </div>
        </a>
        @endif
    </div>

    @endfor
    @if(($product->slug == "little-bunny-chair") || ($product->slug == "little-mermaid-chair"))
    <div class="col-6 col-sm-3 product_thumb">
      <a href="/img/press/ambiences/high-resolution/puzzled-bookcase-desk-circu-magical-furniture-1.jpg" target="_blank">
        <img src="/img/press/ambiences/364x368/puzzled-bookcase-desk-circu-magical-furniture-1.jpg" style="height:380px;" class="img-responsive">
        <div class="product-caption"> DOWNLOAD IMAGE > </div>
      </a>
    </div>
    @endif
    @if(($product->slug == "dream-desk") || ($product->slug == "little-cloud-nightstand"))
    <div class="col-6 col-sm-3 product_thumb">
      <a href="/img/press/ambiences/high-resolution/cloud-collection-milk-white-circu-magical-furniture-1.jpg" target="_blank">
        <img src="/img/press/ambiences/364x368/cloud-collection-milk-white-circu-magical-furniture-1.jpg" style="height:380px;" class="img-responsive">
        <div class="product-caption"> DOWNLOAD IMAGE > </div>
      </a>
    </div>
    @endif
    @if(($product->slug == "nodo-suspension-chair"))
    <div class="col-6 col-sm-3 product_thumb">
      <a href="/img/press/ambiences/high-resolution/nodo-suspension-chair-circu-magical-furniture-1.jpg" target="_blank">
        <img src="/img/press/ambiences/364x368/nodo-suspension-chair-circu-magical-furniture-1.jpg" style="height:380px;" class="img-responsive">
        <div class="product-caption"> DOWNLOAD IMAGE > </div>
      </a>
    </div>

    <div class="col-6 col-sm-3 product_thumb">
      <a href="/img/press/ambiences/high-resolution/nodo-suspension-chair-circu-magical-furniture-2.jpg" target="_blank">
        <img src="/img/press/ambiences/364x368/nodo-suspension-chair-circu-magical-furniture-2.jpg" style="height:380px;" class="img-responsive">
        <div class="product-caption"> DOWNLOAD IMAGE > </div>
      </a>
    </div>
    @endif

    @if(($product->slug == "fantasy-air-balloon"))
    <div class="col-6 col-sm-3 product_thumb">
      <a href="/img/press/ambiences/high-resolution/fantasy-balloon-circu-magical-furniture-5.jpg" target="_blank">
        <img src="/img/press/ambiences/364x368/fantasy-balloon-circu-magical-furniture-5.jpg" style="height:380px;" class="img-responsive">
        <div class="product-caption"> DOWNLOAD IMAGE > </div>
      </a>
    </div>

    <div class="col-6 col-sm-3 product_thumb">
      <a href="/img/press/ambiences/high-resolution/fantasy-balloon-circu-magical-furniture-3.jpg" target="_blank">
        <img src="/img/press/ambiences/364x368/fantasy-balloon-circu-magical-furniture-3.jpg" style="height:380px;" class="img-responsive">
        <div class="product-caption"> DOWNLOAD IMAGE > </div>
      </a>
    </div>
    @endif

  </div><!--  end col-md-12 -->

</div>


</div>

@endsection

@section('meta')
<title>{{ $product->name }} - Circu Magical Furniture</title>
<meta name="description" content="{{ $product->meta_description }}" />
<meta name="keywords" content="{{ $product->key_words }}" />
<meta name="author" content="circu">
<meta property="og:type" content="product" />
<meta property="og:title" content="{{ strtoupper($product->name) }} - Circu Magical Furniture" />
<meta property="og:description" content="{{ $product->meta_description }}" />
<meta property="og:url" content="http://www.circu.net/pressroom/products/{{ $product->slug }}" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="http://www.circu.net/img/products/{{ $product->slug }}/slide/{{ $product->slug }}-circu-magical-furniture-1.jpg" />
@endsection