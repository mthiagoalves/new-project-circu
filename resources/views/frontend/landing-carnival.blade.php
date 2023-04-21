@extends('layouts.master')

@section('main-content')

    <div class="container-fluid mb-3">
        <div class="row">
            <div class="col-12 p-0 text-center">
                <img src="/img/landing/pick-your-color/circu-pick-your-color.jpg" class="img-fluid d-none d-sm-block" alt="Circu Customize your Color">
                <img src="/img/landing/pick-your-color/circu-pick-your-color-mobile.jpg" class="img-fluid d-block d-sm-none" alt="Circu Customize your Color">
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="container max-width-site">

        <div class="row main_area area_products">
            <div class="col-12 col-lg-6 offset-lg-3 text-center">
                <p>Pack your dreams and get ready to fly on your own custom plane bed! <br>
                Enjoy our exclusive customization offer, and choose your favorite color on the Sky One Plane without any upcharge. <br>
                Pick the color and we will mask the price!</p>
            </div>
        </div>

        <div class="row"> 
            <form method="post" class="col col-lg-10 offset-lg-1 form-popup form-parsley my-4" action="{{route('process.campaignCarnival')}}">

                <div class="row">
                    
                    <div class="col-12">
                      @if(Session::has('message'))
                      <div class="alert alert-success" role="alert">
                          {{Session::get('message')}}
                      </div>
                      @endif

                      @include('includes.errors')
                    </div>
                    
          
                    <div class="col-12">
                      <h6 class="mb-5">Pick Your Color:</h6>
                    </div>
                        
                    <div class="col-6 col-md-3 mb-2">
                        <input type="radio" id="control_01" name="product_color" value="candy red" checked>
                        <label for="control_01" class="row">
                            <div class="col-12">
                                <img src="/img/landing/pick-your-color/sky-b-plane-candy-red.jpg" class="img-fluid img-circle" alt="">
                            </div>
                            <div class="col-12 text-center my-4">
                                <i class="far fa-star"></i> <b>Candy Red</b><br>
                            </div>   
                        </label>
                    </div>
                    
                    <div class="col-6 col-md-3 mb-2">
                      <input type="radio" id="control_02" name="product_color" value="royal blue">
                      <label for="control_02" class="row">
                          <div class="col-12">
                              <img src="/img/landing/pick-your-color/sky-b-plane-royal-blue.jpg" class="img-fluid img-circle" alt="">
                          </div>
                          <div class="col-12 text-center my-4">
                              <i class="far fa-star"></i> <b>Royal Blue</b><br>
                          </div> 
                    </div>

                    <div class="col-6 col-md-3 mb-2">
                      <input type="radio" id="control_03" name="product_color" value="lemon yellow">
                      <label for="control_03" class="row">
                          <div class="col-12">
                              <img src="/img/landing/pick-your-color/sky-b-plane-lemon-yellow.jpg" class="img-fluid img-circle" alt="">
                          </div>
                          <div class="col-12 text-center my-4">
                              <i class="far fa-star"></i> <b>Lemon Yellow</b><br>
                          </div>
                      </label>
                    </div>

                    <div class="col-6 col-md-3 mb-2">
                      <input type="radio" id="control_04" name="product_color" value="light blue">
                      <label for="control_04" class="row">
                          <div class="col-12">
                              <img src="/img/landing/pick-your-color/sky-b-plane-light-blue.jpg" class="img-fluid img-circle" alt="">
                          </div>
                          <div class="col-12 text-center my-4">
                              <i class="far fa-star"></i> <b>Light Blue</b><br>
                          </div>
                      </label>
                    </div>


                    <div class="col-12 col-lg-10 offset-lg-1 mt-3">

                        <div class="row">
                            <input type="hidden" name="origin" class="origin"/>
                            <input type="hidden" name="referrer" class="referrer"/>
                            <input type="hidden" name="lead_path" class="lead_path"/>
                            <input type="hidden" name="campaign_name" value="carnival-pick-your-color"/>
                        
                          {{ csrf_field() }}

                          <div class="input-block col-12 col-lg-6 {{ $errors->has('first_name') ? 'has-error' : '' }}">
                          <span class="txt-request">First Name:*</span>
                          <input type="text" name="first_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('first_name') }}" placeholder="First Name"/>
                          </div>

                          <div class="input-block col-12 col-lg-6 {{ $errors->has('last_name') ? 'has-error' : '' }}">
                          <span class="txt-request">Last Name:*</span>
                          <input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('last_name') }}" placeholder="Last Name"/>
                          </div>

                          <div class="input-block col-12 {{ $errors->has('email') ? 'has-error' : '' }}">
                          <span class="txt-request">Email:*</span>
                          <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" placeholder="email@address.com"/>
                          </div>
                
                          <div class="input-block col-12 {{ $errors->has('country') ? 'has-error' : '' }}">
                          <span class="txt-request">Country:*</span>
                          <select name="country" class="custom-select country" data-parsley-required="true" value="{{ old('country') }}">
                          @include('includes.options-country')
                          </select>
                          </div>

                          <div class="input-block col-12 col-lg-6  {{ $errors->has('company') ? 'has-error' : '' }}">
                          <span class="txt-request">Company:*</span>
                          <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}"/>
                          </div>

                          <div class="input-block col-12 col-lg-6  {{ $errors->has('phone') ? 'has-error' : '' }}">
                          <span class="txt-request">Phone <span class="form-optional">(optional)</span></span>
                          <input type="text" name="phone" class="form-control phone" data-parsley-required="false" value="{{ old('phone') }}"/>
                          </div>
                          
                          <div class="col-12 text-center">
                            <button type="submit" class="btn-request-piece py-1 px-5">PICK YOUR COLOR</button>
                          </div>
                          
                      </div>

                    </div>
                                    
                </div>

            </form>
        </div>

        <div class="row main_area area_products">
            <div class="col-12 text-center pt-5 pb-2">
                <h5> COMPLETE YOUR CUSTOM </h5>
            </div>

            @foreach ($products as $product)

            <div class="col-6 col-md-4 product_thumb">
                <a href="http://www.circu.net/products/{{ $product->slug }}">
                    @if (file_exists('./img/products/carousel/'. $product->slug .'-circu-magical-furniture.jpg'))
                        <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.jpg" class="img-fluid">
                    @else
                        <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.gif" class="img-fluid">
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

        <div class="row main_area area_products">
            <hr>
            <div class="col-12 text-center pt-5 pb-2">

                <h5> GET INSPIRED </h5>
            </div>
            <div class="col col-lg-10 offset-lg-1">
                
                <div class="row">
                    
                    <div class="col-12 col-md-4 text-center p-4">
                        <a href="{{route('catalogue') }}" target="_blank"><img srcset="/img/home/download-catalogue-circu-magical-furniture.jpg" data-src="/img/home/download-catalogue-circu-magical-furniture.jpg" width="540" height="422" class="img-fluid py-3" alt=""></a> <a href="{{route('catalogue') }}" target="_blank" class="btn_border_green"> DOWNLOAD CATALOGUE <i class="fas fa-caret-right"></i></a> 
                    </div>

                    <div class="col-12 col-md-4 text-center p-4">
                        <a href="https://www.circu.net/ebook/best-kids-interior-designers"><img srcset="/img/landing/download-catalogue/ebook-kids-interior-designers.jpg" data-src="/img/landing/download-catalogue/ebook-kids-interior-designers.jpg" width="540" height="422" class="img-fluid py-3" alt=""></a> <a href="https://www.circu.net/ebook/best-kids-interior-designers" class="btn_border_green"> FREE DOWNLOAD <i class="fas fa-caret-right"></i>  </a> 
                    </div>

                    <div class="col-12 col-md-4 text-center p-4">
                        <a href="https://www.circu.net/trends/moodboard/pantones-color-of-the-year-2020-classic-blue/"><img srcset="/img/landing/pick-your-color/moodboard-trends-2020-pantone-color-classic-blue.jpg" data-src="/img/landing/pick-your-color/moodboard-trends-2020-pantone-color-classic-blue.jpg" width="540" height="422" class="img-fluid py-3" alt=""></a> <a href="https://www.circu.net/trends/moodboard/pantones-color-of-the-year-2020-classic-blue/" class="btn_border_green"> TRENDS 2020 <i class="fas fa-caret-right"></i>  </a> 
                    </div>
                </div>
            </div>
        </div>

         

        

        <div class="row main_area area_products">
            <div class="col-12 text-center pt-5 pb-2">
                <h5> In every story there is a chapter, don't miss ours </h5>
            </div>

            <div class="col-12 social_actions text-center pt-4 pb-5">
                <a href="https://instagram.com/circu_magical_furniture/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/circu-magicalfurniture/" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://www.pinterest.com/circudesign/" target="_blank">
                    <i class="fab fa-pinterest-p"></i>
                </a>
                <a href="https://www.facebook.com/circumagicalfurniture/" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/circu_magical" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.youtube.com/channel/UC2_hoG6aHFGnqF9SVTkhwxA" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

        </div>

    </div>


@endsection

@section('head-includes')

<title>Customize Your Color | Circu Magical Furniture</title>
<meta name="description" content="circu magical furniture" />
<meta name="author" content="circu">
<meta name="keywords" content="Customize Your Color" />
<link REL="SHORTCUT ICON" HREF="https://circu.net/favicon-circu-magical-furniture.jpg">
<style>
  input[type="date"]::-webkit-inner-spin-button {
        opacity: 0
    }
    
  .input-block {
      margin: 0px 0px 1rem;
      width: 100%;
      display: inline-block;
  }
  .form-optional {
      font-style: italic;
      color: #b9b9b9 !important;
  }
    .form-control {
    padding: .375rem 1.8rem;
    font-size: 0.8rem;
    color: #222;
    }
    .custom-select {
      padding: .375rem 2rem;
  }
    ul.parsley-errors-list {
      margin-bottom: 0px;
  }
    form span { float: none; }
    .form-popup input.name { background: url('/img/icons/person-icon.png') 6px center no-repeat; }
    .form-popup input.email { background: url('/img/icons/email-icon.png') 6px center no-repeat; }
    .form-popup input.phone { background: url('/img/icons/phone-icon.png') 6px center no-repeat; }
    .form-popup select.country { background: url('/img/icons/country-icon.png') 6px center no-repeat; -webkit-appearance: none; -moz-appearance: none;}
    .form-popup input.city { background: url('/img/icons/city-icon.png') 6px center no-repeat; }
    .form-popup input.company { background: url('/img/icons/occupation-icon.png') 6px center no-repeat; }
    .form-popup select.occupation { background: url('/img/icons/occupation-icon.png') 6px center no-repeat; -webkit-appearance: none; -moz-appearance: none;}
    .form-popup input[type="date"]::-webkit-calendar-picker-indicator {
        background: url(https://cdn3.iconfinder.com/data/icons/linecons-free-vector-icons-pack/32/calendar-16.png) 6px center no-repeat;
    }


    .img-circle {
        border-radius: 50%; 
    }
    input[type="radio"] {
        display: none;
    }
    input[type="radio"]:not(:disabled) ~ label {
        cursor: pointer;
    }
    input[type="radio"]:disabled ~ label {
        color: #bcc2bf;
        border-color: #bcc2bf;
        box-shadow: none;
        cursor: not-allowed;
    }

    label {
        height: 100%;
        display: block;
        background: white;
        border: 2px solid #9fbfbc;
        border-radius: 20px;
        padding: 1rem;
        margin-bottom: 1rem;
        text-align: center;
        box-shadow: 0px 3px 10px -2px rgba(161, 170, 166, 0.5);
        position: relative;
    }

    input[type="radio"]:checked + label {
        background: #e0edec;
        color: #777777;
    }

    input[type="radio"]:checked + label::after {
        color: #29544d;
        font-family: FontAwesome;
        border: 2px solid #9fbfbc;
        content: "\f00c";
        font-size: 24px;
        position: absolute;
        top: -25px;
        left: 50%;
        transform: translateX(-50%);
        height: 50px;
        width: 50px;
        line-height: 50px;
        text-align: center;
        border-radius: 50%;
        background: white;
        box-shadow: 0px 2px 5px -2px rgba(0, 0, 0, 0.25);
    }
</style>
@endsection

@section('footer-includes')
    <script>
        $('.owl-ambiences').owlCarousel({
            loop: true, 
            margin: 6, 
            lazyLoad: false, 
            dots: true, 
            nav: false, 
            autoplay: true, 
            fluidSpeed: 1500, 
            responsive: {
                0: {
                    items: 2
                }, 
                600: {
                    items: 2
                }, 
                768: {
                    items: 4
                }
            }
        });
    </script>
@endsection