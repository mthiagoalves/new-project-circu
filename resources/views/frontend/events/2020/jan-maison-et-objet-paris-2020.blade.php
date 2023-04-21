@extends('layouts.master')

@section('main-content')

    <div class="container-fluid mb-3">
        <div class="row">
            <div class="col-12 p-0 text-center">
            	<a href="https://www.circu.net/virtual-tour/maison-et-objet-paris-january-2020/" target="_blank">
                	<img src="/img/slides/main/virtual-tour-maison-objet-2020.jpg" class="img-fluid d-none d-sm-block" alt="Maison et Objet 2020">
                	<img src="/img/slides/main/virtual-tour-maison-objet-2020-mobile.jpg" class="img-fluid d-block d-sm-none" alt="Maison et Objet 2020">
            	</a>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="container-fluid" style="background-color: #f1f1f1;">
    
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2 py-5">
            <video
              id="vid1"
              class="video-js vjs-fluid"
              controls
              loop
              height="400"
              data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=NWtng1BW69g"}] }'
            >
            </video>
          </div><!-- .col-12 -->
        </div><!-- .row -->

      </div>

    <div class="container max-width-site">

    	<div class="row main_area area_products">
            <div class="col-12">
                <a rel="modal:open" href="{{route('modal-ebook', ['ebook' => 'ebook-circu-new-products-2020'] )}}">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/new-products-2020.jpg" class="img-fluid" alt="New Products 2020">
                </a>
            </div>
        </div>

        <div class="row main_area area_products">
            <div class="col col-lg-10 offset-lg-1">
                <hr>
                <div class="row">
                    
                    <div class="col-12 col-md-4 text-center p-4">
                        <a href="{{route('catalogue') }}" target="_blank"><img srcset="/img/home/download-catalogue-circu-magical-furniture.jpg" data-src="/img/home/download-catalogue-circu-magical-furniture.jpg" width="540" height="422" class="img-fluid py-3" alt=""></a> <a href="{{route('catalogue') }}" target="_blank" class="btn_border_green"> DOWNLOAD CATALOGUE <i class="fas fa-caret-right"></i></a> 
                    </div>

                    <div class="col-12 col-md-4 text-center p-4">
                        <a rel="modal:open" href="{{route('modal-press-release', ['slug' => 'press-release-2020-jan-maison-et-objet'])}}"><img srcset="/img/events/jan-maison-et-objet-paris-2020/thumbnails/press-release.jpg" data-src="/img/events/jan-maison-et-objet-paris-2020/thumbnails/press-release.jpg" width="540" height="422" class="img-fluid py-3" alt=""></a> <a rel="modal:open" href="{{route('modal-press-release', ['slug' => 'press-release-2020-jan-maison-et-objet'])}}" class="btn_border_green"> DOWNLOAD PRESS RELEASE<i class="fas fa-caret-right"></i>  </a> 
                    </div>

                    <div class="col-12 col-md-4 text-center p-4">
                        <a href="{{route('pricelist') }}" target="_blank"><img srcset="/img/events/jan-maison-et-objet-paris-2020/thumbnails/pricelist.jpg" data-src="/img/events/jan-maison-et-objet-paris-2020/thumbnails/pricelist.jpg" width="540" height="422" class="img-fluid py-3" alt=""></a> <a href="{{route('pricelist') }}" target="_blank" class="btn_border_green"> DOWNLOAD PRICELIST <i class="fas fa-caret-right"></i>  </a> 
                    </div>
                </div>
            </div>
        </div>

    	<div class="row">
            <div class="col-12 owl-ambiences owl-carousel owl-slide owl-theme position-relative">
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-17.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-1.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-2.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
               <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-3.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-4.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-5.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-6.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-7.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-8.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-9.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-10.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-11.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-12.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-13.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-14.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-15.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-17.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-18.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-19.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-20.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-21.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-22.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-23.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-24.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-25.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-26.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
                <div class="item">
                    <img src="/img/events/jan-maison-et-objet-paris-2020/carousel/jan-maison-et-objet-paris-2020-27.jpg" width="333" height="500" class="cd-dot img-fluid">
                </div>
            </div>
        </div>

        <!-- <div class="row"> 
            <form method="post" class="col col-lg-10 offset-lg-1 form-popup form-parsley my-4" action="">

                <div class="row">

                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif

                    @include('includes.errors')
					
					<div class="col-12">
						<h6 class="mb-5">Choose your Brand Ambassador:</h6>
					</div>
                    <div class="col-12 col-md-6">
                        
                        <div>
                        <input type="radio" id="control_01" name="brand_ambassador" value="maria simão" checked>
                            <label for="control_01" class="row">
                                <div class="col col-lg-4">
                                    <img src="/img/events/jan-maison-et-objet-paris-2020/team/maria.png" class="img-fluid img-circle" alt="">
                                </div>
                                <div class="col col-lg-8 text-left my-4">
                                    <b>America and Oceania</b><br>
                                    <i class="far fa-star"></i> Maria Simão<br>
                                    <i class="fas fa-envelope"></i> msimao@circu.net<br>
                                </div>   
                            </label>
                        </div>

                        <div>
                        <input type="radio" id="control_02" name="brand_ambassador" value="ana torres">
                        <label for="control_02" class="row">
                            <div class="col col-lg-4">
                                <img src="/img/events/jan-maison-et-objet-paris-2020/team/ana-torres.png" class="img-fluid img-circle" alt="">
                            </div>
                            <div class="col col-lg-8 text-left my-4">
                                <b>Asia, Africa, Middle-East and Europe</b><br>
                                <i class="far fa-star"></i> Ana Torres<br>
                                <i class="fas fa-envelope"></i> atorres@circu.net<br>
                            </div> 
                        </div>

                        <div>
                        <input type="radio" id="control_03" name="brand_ambassador" value="andreia">
                        <label for="control_03" class="row">
                            <div class="col col-lg-4">
                                <img src="/img/events/jan-maison-et-objet-paris-2020/team/andreia.png" class="img-fluid img-circle" alt="">
                            </div>
                            <div class="col col-lg-8 text-left my-4">
                                <b>Press PR</b><br>
                                <i class="far fa-star"></i> Andreia Tavares<br>
                                <i class="fas fa-envelope"></i> press@circu.net<br>
                            </div> 
                        </label>
                        </div>

                    </div>

                    <div class="col-12 col-md-6">

                        <div class="row">
                            <input type="hidden" name="origin" class="origin"/>
                            <input type="hidden" name="referrer" class="referrer"/>
                            <input type="hidden" name="lead_path" class="lead_path"/>
                            <input type="hidden" name="fair_name" value="maison-et-objet-jan-2020"/>
                        
                        	{{ csrf_field() }}

	                        <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
	                        <span class="txt-request">Name:*</span>
	                        <input type="text" name="name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="Full Name"/>
	                        </div>

	                        <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
	                        <span class="txt-request">Email:*</span>
	                        <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" placeholder="email@address.com"/>
	                        </div>
	                
	                        <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }} w-50 pr-2">
	                        <span class="txt-request">Occupation:*</span>
	                        <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
	                        @include('includes.options-occupation')
	                        </select>
	                        </div>
            
	                        <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }} w-50 pl-2">
	                        <span class="txt-request">Company:*</span>
	                        <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}"/>
	                        </div>
	              
	                        <div class="input-block" {{ $errors->has('country') ? 'has-error' : '' }}">
	                        <span class="txt-request">Country:*</span>
	                        <select name="country" class="custom-select country" data-parsley-required="true" value="{{ old('country') }}">
	                        @include('includes.options-country')
	                        </select>
	                        </div>

	                        <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
	                        <span class="txt-request">Phone <span class="form-optional">(optional)</span></span>
	                        <input type="text" name="phone" class="form-control phone" data-parsley-required="false" value="{{ old('phone') }}"/>
	                        </div>

							<div class="input-block {{ $errors->has('choosen_date') ? 'has-error' : '' }}">
							<span class="txt-request">Date and time <span class="form-optional">(optional)</span></span>
							<input type="datetime-local" name="choosen_date" class="form-control choosen_date" value="2020-01-17T10:45:00">
							</div>

                            <button type="submit" class="btn-request-piece py-1 px-5">BOOK A MEETING</button>

	                    </div>

                    </div>
                                    
                </div>

            </form>
        </div> -->

        <div class="row main_area area_products">
            <div class="col-12 text-center pt-5 pb-2">
                <h5> WHAT TO EXPECT </h5>
            </div>

            <!-- Little Cloud Nightstand; Dream Desk, Cloud Desk, Mocho; Nodo Chair -->

            <div class="col-sm-3 product_thumb">
                <a href="http://www.circu.net/products/little-cloud-nightstand">
                    <img src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" class="img-fluid">
                    <div class="product-caption"> Little Cloud </div>
                    <div class="product-caption-sub"> Nightstand</div>
                    <div class="new-product">
                        <img src="/img/icons/new-product.png">
                    </div>
                </a>
                <div class="slideToggle">
                    <a href="http://www.circu.net/products/little-cloud-nightstand"><span>GET EXCLUSIVE PREVIEW</span></a>
                </div>
            </div>

            <div class="col-sm-3 product_thumb">
                <a href="http://www.circu.net/products/dream-desk">
                    <img src="/img/products/carousel/dream-desk-circu-magical-furniture.jpg" class="img-fluid">
                    <div class="product-caption"> Dream Desk </div>
                    <div class="product-caption-sub"> Desk</div>
                    <div class="new-product">
                        <img src="/img/icons/new-product.png">
                    </div>
                </a>
                <div class="slideToggle">
                    <a href="http://www.circu.net/products/dream-desk"><span>GET EXCLUSIVE PREVIEW</span></a>
                </div>
            </div>

            <div class="col-sm-3 product_thumb">
                <a href="http://www.circu.net/products/cloud-desk">
                    <img src="/img/products/carousel/cloud-desk-circu-magical-furniture.jpg" class="img-fluid">
                    <div class="product-caption"> Cloud Desk </div>
                    <div class="product-caption-sub"> Desk</div>
                    <div class="new-product">
                        <img src="/img/icons/new-product.png">
                    </div>
                </a>
                <div class="slideToggle">
                    <a href="http://www.circu.net/products/cloud-desk"><span>GET EXCLUSIVE PREVIEW</span></a>
                </div>
            </div>

            <div class="col-sm-3 product_thumb">
                <a rel="modal:open" href="{{ route('modal-new-product-preview', ['name' => 'Nodo Suspension Chair'] ) }}">
                    <img src="/img/products/carousel/nodo-suspension-chair-circu-magical-furniture.jpg" class="img-fluid">
                    <div class="product-caption"> Nodo Suspension Chair </div>
                    <div class="product-caption-sub"> Chair</div>
                    <div class="new-product">
                        <img src="/img/icons/new-product.png">
                    </div>
                </a>
                <div class="slideToggle">
                    <a rel="modal:open" href="{{ route('modal-new-product-preview', ['name' => 'Nodo Suspension Chair'] ) }}"><span>GET EXCLUSIVE PREVIEW</span></a>
                </div>
            </div>

            <div class="col-sm-3 product_thumb">
                <a href="http://www.circu.net/products/hoot-stool">
                    <img src="/img/products/carousel/hoot-stool-circu-magical-furniture.jpg" class="img-fluid">
                    <div class="product-caption"> Hoot </div>
                    <div class="product-caption-sub"> Stool</div>
                    <div class="new-product">
                        <img src="/img/icons/new-product.png">
                    </div>
                </a>
                <div class="slideToggle">
                    <a href="http://www.circu.net/products/hoot-stool"><span>GET EXCLUSIVE PREVIEW</span></a>
                </div>
            </div>

            @foreach ($products as $product)

            <div class="col-sm-3 product_thumb">
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

<title>Maison et Objet 2020 | Circu Magical Furniture</title>
<meta name="description" content="circu magical furniture" />
<meta name="author" content="circu">
<meta name="keywords" content="maison et object" />
<link REL="SHORTCUT ICON" HREF="https://circu.net/favicon-circu-magical-furniture.jpg">
<link rel="stylesheet" href="https://vjs.zencdn.net/7.4.1/video-js.css">
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
    <script src='https://vjs.zencdn.net/7.4.1/video.js'></script>
    <script src="/js/Youtube.min.js"></script>
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