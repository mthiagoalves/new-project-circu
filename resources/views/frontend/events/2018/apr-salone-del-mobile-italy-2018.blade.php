@extends('layouts.master')

@section('main-content')

    <div class="container">
        
        <div class="row">
            <div class="col-xs-12">
                <img src="/img/events/apr-salone-del-mobile-italy-2018/isaloni-2018-circu-magical-furniture.jpg" class="img-responsive" alt="iSaloni Circu Magical Furniture"/>
            </div>
        </div>

        <div class="row content_fair_area marg_top_big">

            <div class="col-xs-12 col-md-6">
                <h1>Highlights from Salone del Mobile 2018.</h1>

                <p>From 17th to 22nd of April the eyes of the world of design will be focus on the capital of fashion, Milano. Indeed, the italian city will welcome The Salone del Mobile. Circu is proud to be part of the adventure one more time.</p>

                <p>Because Isaloni is a place where connections, creativity and innovation are the main focus, it is an unmissable global experience. All Circu team is ready and happy to join and celebrate design with our new and old friends. </p>

                <p>Every year Isaloni confirm its uninqueness in the design world. Therefore Circu will be part of this experience where we will share our passion of unique and exclusive magical furniture with an exceptional design.</p>

                <p>We are waiting for you to live a Magical Experience! </p>

                {{-- <div title="Add to Calendar" class="addeventatc">
                    Add to Calendar
                    <span class="start">04/17/2018 08:00 AM</span>
                    <span class="end">04/22/2018 10:00 AM</span>
                    <span class="timezone">Europe/Paris</span>
                    <span class="title">iSaloni 2018</span>
                    <span class="location">Circu @ Hall 1 | Stand L09</span>
                </div> --}}
            </div>

            <div class="col-xs-12 col-md-5 col-md-offset-1">
                <img src="/img/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-italy-2018-featured.jpg" class="img-responsive" style="margin:0 auto;">
            </div>

        </div>

        <div class="row main_area marg_top_big">
            <a href="http://www.circu.net/virtual-tour/salone-del-mobile-italy-april-2018/?utm_source=CCWeek16-2018-isaloni-virtual-tour&utm_medium=website&utm_content=virtual-tour&utm_term=landing&utm_campaign=isaloni" target="_blank" class="col-xs-12 col-sm-4">
                <img src="/images/news/events/apr-salone-del-mobile-italy-2018/virtual-tour.jpg" class="img-responsive" style="margin:0 auto;">
              </a>
            <a href="/landing-page/download-catalogue.php" target="_blank" class="col-xs-12 col-sm-4">
            <img src="/img/events/apr-salone-del-mobile-italy-2018/download-catalogue-circu.jpg" class="img-responsive" style="margin:0 auto;">
            </a> 
            <a href="/landing-page/download-inspirations-book" target="_blank" class="col-xs-12 col-sm-4">
            <img src="/img/events/apr-salone-del-mobile-italy-2018/download-inspirations-catalogue-circu.jpg" class="img-responsive" style="margin:0 auto;">
            </a> 
        </div>

        {{-- <div class="row main_area">
            <div class="col-xs-12"><div class="separator"><h3 class="background red"> <span> BOOK A <b>TOUR</b></span></h3></div></div>
            <div class="col-xs-12">

                <form method="POST" action="{{ route('process.book-meeting') }}" class="form-parsley">

                    <div class="col-sm-6">

                        <input type="hidden" name="origin" class="origin"/>
                        <input type="hidden" name="referrer" class="referrer"/>
                        <input type="hidden" name="lead_path" class="lead_path"/>
                        <input type="hidden" name="fair_name" value="Isaloni 2018">

                        {{ csrf_field() }}

                        <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                        <span class="txt-request">Name:*</span>
                        <input type="text" name="name" class="name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}"/>
                        </div>

                        <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                        <span class="txt-request">Email:*</span>
                        <input type="email" name="email" class="email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}"/>
                        </div>

                        <div class="input-block" {{ $errors->has('country') ? 'has-error' : '' }}">
                        <span class="txt-request">Country:*</span>
                        <select name="country" class="country" data-parsley-required="true" value="{{ old('country') }}">
                        @include('includes.options-country')
                        </select>
                        </div>

                        <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <span class="txt-request">Phone:</span>
                        <input type="text" name="phone" class="phone" data-parsley-required="true" value="{{ old('phone') }}"/>
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="input-block-half {{ $errors->has('occupation') ? 'has-error' : '' }}">
                        <span class="txt-request">Occupation:*</span>
                        <select name="occupation" class="occupation" data-parsley-required="true" value="{{ old('occupation') }}">
                        @include('includes.options-occupation')
                        </select>
                        </div>

                        <div class="input-block-half {{ $errors->has('company') ? 'has-error' : '' }}">
                        <span class="txt-request">Company:*</span>
                        <input type="text" name="company" class="company" data-parsley-required="true" value="{{ old('company') }}"/>
                        </div>

                        <div class="input-block {{ $errors->has('city') ? 'has-error' : '' }}">
                        <span class="txt-request">City:</span>
                        <input type="text" name="city" class="city" data-parsley-required="true" value="{{ old('city') }}"/>
                        </div>

                        <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }}">
                        <span class="txt-request">How did you hear about us?*</span>
                        <select name="hear_about" class="hear_about" data-parsley-required="true" value="{{ old('hear_about') }}">
                        @include('includes.options-hear-about')
                        </select>
                        </div>

                    </div>

                    <div class="col-xs-12">
                        <button type="submit" id="isaloni-tag">BOOK STAND TOUR</button>
                    </div>
                </form>
            </div>
        </div>  --}}

        <div class="row main_area">
          <div class="rotateslider-container" id="slider">
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-01.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-02.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-03.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-04.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-05.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-06.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-07.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-08.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-09.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-10.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-11.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-12.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-13.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-14.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-15.jpg"></div>
            <div class="rotateslider-item"><img src="/images/news/events/apr-salone-del-mobile-italy-2018/apr-salone-del-mobile-16.jpg"></div>
            <span class="arrow right js-rotateslider-arrow" data-action="next"><i class="fa fa-angle-right fa-3x"></i></span>
            <span class="arrow left js-rotateslider-arrow" data-action="prev"><i class="fa fa-angle-left fa-3x"></i></span>
          </div>
        </div>

        <div class="row main_area area_products">
          <div class="col-xs-12"><div class="separator"><h3 class="background red"> <span> OUR MAGICAL VIDEOS FROM <b>ISALONI</b></span></h3></div></div>

          <div class="col-xs-6">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/G2Y4Gq1KtXQ?rel=0" allowfullscreen></iframe>
          </div>
          </div>

          <div class="col-xs-6">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eDRDqhU7OVU?rel=0" allowfullscreen></iframe>
          </div>
          </div>

        </div>

        <div class="row main_area area_products visible-sm visible-md visible-lg">
            <div class="col-xs-12"><a href="http://covetedition.com/coveted-edition-magazine-ten-edition/?utm_source=landing-isaloni-2018&utm_medium=Circu&utm_content=tenth-edition&utm_campaign=coveted_brands" target="_blank"><img src="/img/events/coveted-edition-magazine-download.jpg" class="img-responsive" alt="Coveted Edition New Edition Download"></a></div>
        </div>
    
        <div class="row main_area area_products">
            
            <div class="col-xs-12"><div class="separator"><h3 class="background red"> <span> <b>PRODUCTS AT</b> ISALONI</span></h3></div></div>

            @foreach ($products as $product)

                <div class="col-xs-6 col-sm-3 col-md-2 product_thumb">
                <a href="http://www.circu.net/products/{{ $product->slug }}">
                    @if (file_exists('./img/products/carousel/'. $product->slug .'-circu-magical-furniture.jpg'))
                        <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.jpg" class="img-responsive">
                    @else
                        <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.gif" class="img-responsive">
                    @endif
                    <div class="product-caption"> {{ $product->name }} </div>
                    <div class="product-caption-sub"> {{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</div>
                    @if ($product->is_new)
                        <div class="new-product">
                            <img src="/img/icons/new-product.png">
                        </div>
                    @endif
                </a>
                <div class="slideToggle">
                    <a rel="modal:open" href="{{ route('modal-product-price', ['name' => $product->slug] ) }}"><span>GET PRICE</span></a>
                </div>
                </div>

            @endforeach

        </div>

    </div>


@endsection

@section('head-includes')
<style>
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