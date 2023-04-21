@extends('layouts.master')

@section('main-content')

<div class="container-fluid">

  @php
  $directory = "./img/projects/".$project->slug."/slide/";
  $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
  @endphp

  <div class="row">
    <div class="col-12 p-0 d-none d-sm-block">
      <img src="/img/projects/{{$project->slug}}/{{$project->slug}}.jpg" class="img-fluid d-none d-sm-block w-100" alt="{{ $project->article_languages[0]->title }}">
      <img src="/img/projects/{{$project->slug}}/{{$project->slug}}-mobile.jpg" width="768" height="600" class="img-fluid d-block d-sm-none" alt="{{ $project->article_languages[0]->title }}">
    </div>
  </div>

</div><!-- container-->

<div class="container max-width-site">

  <div class="row margin-top-col">

    <div class="col-12 col-lg-6">
      <img src="/img/projects/{{$project->slug}}/slide/{{$project->slug}}-1.jpg" class="img-fluid" alt="{{ $project->article_languages[0]->title }}">
    </div>

    <div class="col-12 col-lg-5">
      <div class="project--info px-0 px-lg-4">
        <h1 class="project--title mt-3">{{ $project->article_languages[0]->title }}</h1>

        <div class="project--description mt-4 mb-5">
          {!! $project->article_languages[0]->description !!}
        </div>

        <div class="btn_option btn_c_green py-1 w-50">
          <a rel="modal:open" href="{{route('modal-hr-images', ['slug' => $project->slug] )}}"><span>DOWNLOAD HR IMAGES ></span></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    @for($i = 2; $i <= $filecount; $i++) @if(file_exists('./img/projects/'.$project->slug.'/slide/'.$project->slug.'-'.$i.'.jpg'))
      <div class="col-12 col-lg-6 margin-top-col">
        <img src="/img/projects/{{$project->slug}}/slide/{{$project->slug}}-{{$i}}.jpg" class="img-fluid" alt="{{ $project->article_languages[0]->title }}">
      </div>
      @endif
      @endfor

  </div><!-- end row -->

  <div class="row margin-top-col">
    <div class="col-12 pt-4">
      <div class="col-12 text-center pt-5 pb-2">
        <h5 class="title_highlight border_b_grey py-2 mb-4"> Product Featured </h5>
      </div>
      <div class="row justify-content-center m-0">
        @foreach($project->article_products as $article_product)
        @if ($article_product->product != null)
        <div class="col-12 col-sm-3 product_thumb" id="">
          <a href="/products/{{ $article_product->product->slug }}">
            @if (file_exists('./img/products/carousel/'. $article_product->product->slug .'-circu-magical-furniture.jpg'))
            <img src="/img/products/carousel/{{ $article_product->product->slug }}-circu-magical-furniture.jpg" class="img-responsive">
            @else
            <img src="/img/products/carousel/{{ $article_product->product->slug }}-circu-magical-furniture.gif" class="img-responsive">
            @endif
            <div class="product-caption"> {{ $article_product->product->name }} </div>
            <div class="product-caption-sub">
              {{ ucwords($article_product->product->sub_category->sub_category_languages[0]->name) }}
            </div>
            @if ($article_product->product->is_new)
            <div class="new-product">
              <img src="/img/icons/new-product.png">
            </div>
            @endif
          </a>
          <a rel="modal:open" class="btn btn--primary-green mt-2" href="{{ route('modal-product-price', ['name' => $article_product->product->slug] ) }}"><span>GET PRICE <i class="fas fa-caret-right"></i></span></a>
        </div>
        @endif
        @endforeach
      </div>


    </div>
  </div><!-- end row -->

</div><!-- container-->

@endsection

@section('head-includes')
<style>
  .project--title {
    color: #8bb9b6;
    letter-spacing: 1px;
    font-size: 1.2rem;
    font-weight: bold;
    padding: 0px;
    margin: 0px;
    text-align: left;
    text-transform: uppercase;
  }

  .project--description {
    text-align: justify;
    color: #87878f;
    line-height: 22px;
    font-size: 13px;
    letter-spacing: 1px;
  }

  .margin-top-col {
    margin-top: 30px;
  }

  @media (max-width: 650px) {
    .btn_option {
      width: 100% !important;
    }
  }
</style>
@endsection

@section('meta')
<title>{{ $project->article_languages[0]->title }} Circu Magical Furniture</title>
<meta name="description" content="" />
<meta name="keywords" content="press release circu magical furniture" />
<meta name="author" content="circu">
<meta property="og:type" content="product" />
<meta property="og:title" content="{{ $project->article_languages[0]->title }} Circu Magical Furniture" />
<meta property="og:description" content="{{ str_limit($project->article_languages[0]->description, 160) }}" />
<meta property="og:url" content="https://www.circu.net/projects/{{$project->slug}}" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="https://www.circu.net/img/projects/{{$project->slug}}/{{$project->slug}}.jpg" />
@endsection