@extends('layouts.master')

@section('main-content')

    <div class="container max-width-site pt-5">
        
        <div class="row">
            <div class="col-12">
                @if(Session::has('message'))
                  <div class="alert alert-success" role="alert">
                    {{Session::get('message')}}
                  </div>
                @endif

                @include('includes.errors')
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="/img/events/halloween-discount-2018/halloween-discount-1.jpg" class="img-fluid" alt="Happy Halloween Circu Magical Furniture" style="margin:0 auto;"/>
            </div>
        </div>

        <div class="row content_fair_area marg_top_big" id="here">
            <div class="row main_area">

                <div class="col-12 col-md-6">
                    <h1 style="text-align: left;color:#cb7d3b;">A magical campaign for this Special Halloween</h1>

                    <p>Halloween is right on the corner and kids and adults around the world will celebrate this day. With a scary or a fun costume, this night will turn even more sweet, with Circu’s magical discounts.</p>

                    <p>The special and limited campaign want to give you the opportunity to make your Halloween decor more magical.</p>

                    <p>Trick or treat?</p>
                </div>

                <div class="col-12 col-md-5 col-md-offset-1">
                    <img src="/img/events/halloween-discount-2018/halloween-discount-2.jpg" class="img-responsive" style="margin:0 auto;">
                </div>
            </div>

    
            <div class="row main_area area_products">
                
                <div class="col-12"><div class="separator"><h3 class="background red"> <span>Halloween Inspiration</span></h3></div></div>

                @foreach ($products as $product)

                    <div class="col-6 col-sm-3 col-md-3 product_thumb">
                        <a href="http://www.circu.net/products/{{ $product->slug }}">
                            @if (file_exists('./img/products/carousel/'. $product->slug .'-circu-magical-furniture.jpg'))
                                <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.jpg" class="img-responsive">
                            @else
                                <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.gif" class="img-responsive">
                            @endif
                            <div class="product-caption"> {{ $product->name }} </div>
                            <div class="product-caption-sub" style="color: #ababab;"> {{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</div>
                            <div class="product-caption-sub" style="color:#cb7d3b !important;">
                                <b>*this campaign is no longer active</b>
                            </div>
                            <!-- @if ($product->id==12) -->
                                
                            <!-- @else
                                <div class="product-caption-sub" style="color:#cb7d3b !important;">
                                    <b>*on the first 2 orders</b>
                                </div> -->
                            <!-- @endif -->

                            <!-- @if ($product->id==12)
                                <div class="new-product">
                                    <img src="/img/icons/stamp-20.png">
                                </div>
                            @else
                                <div class="new-product">
                                    <img src="/img/icons/stamp-15.png">
                                </div>
                            @endif -->
                        </a>
                        <!-- <div class="slideToggle">
                            <a rel="modal:open" href="{{ route('modal-product-order', ['name' => $product->slug] ) }}"><span>BUY NOW</span></a>
                        </div> -->
                    </div>

                @endforeach

            </div>

       
            <div class="row main_area">
                <div class="col-12 sup">
                    <a href="http://circu.net/download-catalogue">
                        <img src="/img/events/halloween-discount-2018/banner-catalogo.jpg" alt="Download New Magical Catalogue - Circu Magical Furniture"> 
                     </a>    
                </div>
            </div>
        </div>

    </div>
@endsection

@section('head-includes')
       
        <title>Halloween Discount 2018 | circu magical furniture</title>
        <meta name="description" content="circu magical furniture" />
        <meta name="author" content="circu">
        <meta name="keywords" content="" />
        <link REL="SHORTCUT ICON" HREF="http://circu.net/favicon-circu-magical-furniture.jpg">


<style>

    .product-caption, .product-caption-sub {
        color: #433d3f !important;
        font-weight: normal !important;
    }
    
    .newbutton:hover{
        background-color: #89bab6;
        border:none;
    }
    
    .newbutton{
        background-color: #c7e0dc;
        border:none;
        margin-top: 10px;
        -webkit-transition: background-color 0.5s;
        transition: background-color 0.5s;
    } 
    
    @media (max-width: 767.98px) {
      .divbutton{
            padding-left: 0;
        }
        
        .divbutton:last-child{
            margin-bottom: 20px;
        }
        
        .sup:last-child{
            margin-top: 12px;
        }
    }
    
    @media (min-width: 768px) {
       .p-l-0{
            padding-left: 0;
        }
    
        .p-r-0{
            padding-right: 0;
        } 
    }
    
    
    
    .h-50{
        height: 50px;
    }
    
    
.rotateslider-container {
position: relative;
height: 500px;
margin-left: auto;
margin-right: auto;
}

.rotateslider-container .rotateslider-item {
position: absolute;
left: 50%;
top: 50%;
-webkit-transform: translateY(-50%) translateX(-50%) scale(0.6);
-ms-transform: translateY(-50%) translateX(-50%) scale(0.6);
transform: translateY(-50%) translateX(-50%) scale(0.6);
opacity: 0;
-webkit-filter: blur(2px);
filter: blur(2px);
-webkit-transition: all 0.3s ease;
transition: all 0.3s ease;
}

.rotateslider-container .rotateslider-item.next {
left: 82%;
opacity: 0.5;
}

.rotateslider-container .rotateslider-item.next img {
width: 220px;
height: 220px;
}

.rotateslider-container .rotateslider-item.prev {
width: 220px;
height: 220px;
left: 18%;
opacity: 0.5;
}

.rotateslider-container .rotateslider-item.prev img {
width: 220px;
height: 220px;
}

.rotateslider-container .rotateslider-item.now {
opacity: 1;
-webkit-filter: blur(0px);
filter: blur(0px);
top: 50%;
left: 50%;
-webkit-transform: translateY(-50%) translateX(-50%) scale(1);
-ms-transform: translateY(-50%) translateX(-50%) scale(1);
transform: translateY(-50%) translateX(-50%) scale(1);
}

.rotateslider-container .arrow {
display: inline-block;
width: 50px;
height: 50px;
background-color: #000;
position: absolute;
top: 50%;
margin-top: -25px;
cursor: pointer;
color: #fff;
text-align: center;
}

.rotateslider-container .arrow.left { left: 0;     background: url(/images/prev.png) no-repeat;
width: 66px;
height: 66px;}

.rotateslider-container .arrow.right { right: 0; background: url(/images/next.png) no-repeat;
width: 66px;
height: 66px;}
</style>
@endsection

@section('footer-includes')
    <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
    <script src="http://www.jqueryscript.net/demo/Basic-3D-Image-Rotator-with-jQuery-CSS3-rotateSlider/src/js/jquery.rotateSlider.js"></script>
    <script src="http://www.jqueryscript.net/demo/Basic-3D-Image-Rotator-with-jQuery-CSS3-rotateSlider/src/js/app.js"></script>
    <script type="text/javascript">
        window.addeventasync = function(){
            addeventatc.settings({
                css  : true
            });
        };
    </script>
@endsection