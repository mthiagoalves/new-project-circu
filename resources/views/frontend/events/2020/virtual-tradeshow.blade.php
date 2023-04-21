@extends('layouts.master')

@section('main-content')

    <div class="container-fluid mb-3">
        <div class="row">
            <div class="col-12 p-0 text-center">
                <a href="https://www.circu.net/virtual-tour/virtual-tradeshow/" target="_blank">
                    <img src="/img/events/virtual-tradeshow/virtual-tour-2020.jpg" class="img-fluid d-none d-sm-block" alt="Virtual Tradeshows 2020">
                    <img src="/img/events/virtual-tradeshow/virtual-tour-2020-mobile.jpg" class="img-fluid d-block d-sm-none" alt="Virtual Tradeshows 2020">
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center my-4">
                <h4 class="mt-3">Go on a magical adventure to our Virtual Tradeshow!</h4>
                <p>Feel like walking into our ocean of magic and discover all of the <b>newest and iconic products</b>, <br> and enjoy a <b>10% discount</b> on the selected pieces!</p>
                <p>For a more exclusive adventure, <b>book a virtual meeting</b> with one of our Brand Ambassadors <br> and get a special insight into our magical products.</p>
                <div class="slideToggle">
                    <a href="https://www.circu.net/virtual-tour/virtual-tradeshow/" class="py-2 px-5" target="_blank"> START VIRTUAL TOUR &nbsp;<i class="fas fa-vr-cardboard"></i> </a>
                </div>
            </div>
        </div>

        <div class="row"> 
            <form method="post" class="col col-lg-10 offset-lg-1 form-popup form-parsley my-4" action="{{route('process.book-meeting-fair')}}">

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
                                    <i class="fab fa-whatsapp"></i> +351 914 929 073<br>
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
                                <i class="fab fa-whatsapp"></i> +351 913 422 378<br>
                            </div> 
                        </div>

                    </div>

                    <div class="col-12 col-md-6">

                        <div class="row">
                            <input type="hidden" name="origin" class="origin"/>
                            <input type="hidden" name="referrer" class="referrer"/>
                            <input type="hidden" name="lead_path" class="lead_path"/>
                            <input type="hidden" name="fair_name" value="virtual-tradeshow-2020"/>
                        
                            {{ csrf_field() }}

                            <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }} w-50 pr-2">
                            <span class="txt-request">Name:*</span>
                            <input type="text" name="name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="Full Name"/>
                            </div>

                            <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }} w-50 pr-2">
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
                  
                            <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }} w-50 pr-2">
                            <span class="txt-request">Country:*</span>
                            <select name="country" class="custom-select country" data-parsley-required="true" value="{{ old('country') }}">
                            @include('includes.options-country')
                            </select>
                            </div>

                            <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }} w-50 pr-2">
                            <span class="txt-request">Phone:* </span>
                            <input type="text" name="phone" class="form-control phone" data-parsley-required="true" value="{{ old('phone') }}" required/>
                            </div>

                            <div class="input-block {{ $errors->has('choosen_date') ? 'has-error' : '' }}">
                            <span class="txt-request">Date and time <span class="form-optional">(optional)</span></span>
                            <input type="datetime-local" name="choosen_date" class="form-control choosen_date" value="2020-04-16T10:45:00">
                            </div>

                            <button type="submit" class="btn-request-piece py-1 px-5">BOOK VIRTUAL MEETING</button>

                        </div>

                    </div>
                                    
                </div>

            </form>
        </div>
    </div>
    <!-- end row -->

    <div class="container max-width-site">

        <div class="row main_area area_products">
            <div class="col-12 text-center pt-4 pb-2">
                <h5> EXCLUSIVE CONTENT </h5>
            </div>

            <div class="col col-lg-10 offset-lg-1">
                <div class="row">
                    
                    <div class="col-12 col-md-4 text-center p-4">
                        <a href="{{route('catalogue') }}" target="_blank"><img srcset="/img/home/download-catalogue-circu-magical-furniture.jpg" data-src="/img/home/download-catalogue-circu-magical-furniture.jpg" width="540" height="422" class="img-fluid py-3" alt=""></a> <a href="{{route('catalogue') }}" target="_blank" class="btn_border_green"> NEW CATALOGUE 2020 <i class="fas fa-caret-right"></i></a> 
                    </div>

                    <div class="col-12 col-md-4 text-center p-4">
                        <a href="/ebook/best-kids-interior-designers" target="_blank"><img srcset="https://www.circu.net/img/landing/download-catalogue/ebook-kids-interior-designers.jpg" data-src="https://www.circu.net/img/landing/download-catalogue/ebook-kids-interior-designers.jpg" width="540" height="422" class="img-fluid py-3" alt=""></a> <a rel="modal:open" href="{{route('modal-press-release', ['slug' => 'press-release-2020-jan-maison-et-objet'])}}" class="btn_border_green"> TOP KID'S INTERIOR DESIGNERS <i class="fas fa-caret-right"></i>  </a> 
                    </div>

                    <div class="col-12 col-md-4 text-center p-4">
                        <a rel="modal:open" href="{{route('modal-ebook', ['ebook' => 'ebook-circu-new-products-2020'] )}}"><img srcset="https://www.circu.net/img/landing/download-catalogue/ebook-circu-new-products-2020.png" data-src="https://www.circu.net/img/landing/download-catalogue/ebook-circu-new-products-2020.png" width="540" height="422" class="img-fluid py-3" alt=""></a> <a href="{{route('pricelist') }}" target="_blank" class="btn_border_green"> NEW PRODUCTS 2020 <i class="fas fa-caret-right"></i>  </a> 
                    </div>
                </div>
            </div>
        </div>

        <div class="row main_area area_products">
            <div class="col-12 text-center pt-5 pb-2">
                <h5> ENJOY 10% DISCOUNT ON THIS MAGICAL PRODUCTS </h5>
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
                    <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'dream-desk'] ) }}"><span>GET PRICE</span></a>
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
                    <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-desk'] ) }}"><span>GET PRICE</span></a>
                </div>
            </div>

            <div class="col-sm-3 product_thumb">
                <a href="http://www.circu.net/products/booboo-suspension-sofa">
                    <img src="/img/products/carousel/booboo-suspension-sofa-circu-magical-furniture.jpg" class="img-fluid">
                    <div class="product-caption"> Booboo Suspension Sofa </div>
                    <div class="product-caption-sub"> Sofa</div>
                    <div class="new-product">
                        <img src="/img/icons/new-product.png">
                    </div>
                </a>
                <div class="slideToggle">
                    <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'booboo-suspension-sofa'] ) }}"><span>GET PRICE</span></a>
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
                    <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'hoot-stool'] ) }}"><span>GET PRICE</span></a>
                </div>
            </div>

            <div class="col-sm-3 product_thumb">
                <a href="http://www.circu.net/products/nodo-suspension-chair">
                    <img src="/img/products/carousel/nodo-suspension-chair-circu-magical-furniture.jpg" class="img-fluid">
                    <div class="product-caption"> Nodo Suspension Chair </div>
                    <div class="product-caption-sub"> Chair</div>
                    <div class="new-product">
                        <img src="/img/icons/new-product.png">
                    </div>
                </a>
                <div class="slideToggle">
                    <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'nodo-suspension-chair'] ) }}"><span>GET PRICE</span></a>
                </div>
            </div>

            <div class="col-sm-3 product_thumb">
                <a href="http://www.circu.net/products/rocky-rocket">
                    <img src="/img/products/carousel/rocky-rocket-circu-magical-furniture.jpg" class="img-fluid">
                    <div class="product-caption"> Rocky Rocket </div>
                    <div class="product-caption-sub"> Sofa / Chair </div>
                </a>
                <div class="slideToggle">
                    <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'rocky-rocket'] ) }}"><span>GET PRICE</span></a>
                </div>
            </div>

            <div class="col-sm-3 product_thumb">
                <a href="http://www.circu.net/products/mermaid-bed">
                    <img src="/img/products/carousel/mermaid-bed-circu-magical-furniture.jpg" class="img-fluid">
                    <div class="product-caption"> Little Mermaid </div>
                    <div class="product-caption-sub"> Bed </div>
                </a>
                <div class="slideToggle">
                    <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'mermaid-bed'] ) }}"><span>GET PRICE</span></a>
                </div>
            </div>

            <div class="col-sm-3 product_thumb">
                <a href="http://www.circu.net/products/cloud-lamp-big">
                    <img src="/img/products/carousel/cloud-lamp-big-circu-magical-furniture.gif" class="img-fluid">
                    <div class="product-caption"> Cloud Lamp Big </div>
                    <div class="product-caption-sub"> Suspension Lamp </div>
                </a>
                <div class="slideToggle">
                    <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-lamp-big'] ) }}"><span>GET PRICE</span></a>
                </div>
            </div>
            
            <div class="col-12 text-center mb-3">
                <div class="slideToggle">
                    <a class="py-2 px-5" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse"> SHOW MORE PRODUCTS &nbsp; <i class="fas fa-chevron-down"></i> </a>
                </div>
            </div>
            
            <div class="collapse" id="collapse">
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
                    </a>
                    <div class="slideToggle">
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => $product->slug] ) }}"><span>GET PRICE</span></a>
                    </div>
                </div>

                @endforeach
            </div>

        </div>

        <div class="row">

            <div class="col-12 outercontainer position-relative">
                <div class="my-gallery gallery">
                    <div>
                        <a href="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-hr-1.jpg" data-size="900x1273"><img src="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-1.jpg" alt="Salone del Mobile 2020" /></a>
                    </div>
                    <div>
                        <a href="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-hr-2.jpg" data-size="900x1350"><img src="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-2.jpg" alt="Salone del Mobile 2020" /></a>
                    </div>
                    <div>
                        <a href="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-hr-3.jpg" data-size="900x1350"><img src="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-3.jpg" alt="Salone del Mobile 2020" /></a>
                    </div>
                    <div>
                        <a href="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-hr-4.jpg" data-size="900x1352"><img src="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-4.jpg" alt="Salone del Mobile 2020" /></a>
                    </div>
                    <div>
                        <a href="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-hr-5.jpg" data-size="900x1350"><img src="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-5.jpg" alt="Salone del Mobile 2020" /></a>
                    </div>
                    <div>
                        <a href="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-hr-6.jpg" data-size="900x522"><img src="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-6.jpg" alt="Salone del Mobile 2020" /></a>
                    </div>
                    <div>
                        <a href="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-hr-7.jpg" data-size="900x1342"><img src="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-7.jpg" alt="Salone del Mobile 2020" /></a>
                    </div>
                    <div>
                        <a href="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-hr-8.jpg" data-size="900x600"><img src="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-8.jpg" alt="Salone del Mobile 2020" /></a>
                    </div>
                    <div>
                        <a href="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-hr-9.jpg" data-size="900x735"><img src="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-9.jpg" alt="Salone del Mobile 2020" /></a>
                    </div>
                    <div>
                        <a href="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-hr-10.jpg" data-size="900x638"><img src="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-10.jpg" alt="Salone del Mobile 2020" /></a>
                    </div>
                    <div>
                        <a href="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-hr-11.jpg" data-size="900x1254"><img src="/img/events/virtual-tradeshow/gallery/circu-magical-furniture-11.jpg" alt="Salone del Mobile 2020" /></a>
                    </div>
                </div> 
            </div>

            <!-- <div class="col-12 slideToggle text-center">
                <a class="py-2 px-5" href="#" id="launch-gallery"> PHOTO GALLERY &nbsp; <i class="fas fa-chevron-down"></i> </a>
            </div> -->
    
        </div>

        <div class="row">
            <div class="col-12 parallax my-3" style="z-index:1;">
                <video width="100%" height="auto" onloadeddata="this.play();" poster="poster.png" playsinline loop muted>
                    <source src="/img/events/virtual-tradeshow/virtual-tradeshow.mp4" type="video/mp4" />
                    <p>Your browser does not support the video tag or the file format of this video.</p>
                </video>
            </div>
        </div>

        <div class="row main_area area_products">
            <div class="col-12 text-center pt-4 pb-2 mb-3">
                <h5> MAGICAL WORLD NEWS</h5>
            </div>

            <div class="col-12 col-lg-4">
                <a href="https://www.circu.net/blog/lifestyle/best-new-pieces-renew-kids-bedroom/" target="_blank">
                    <img src="/img/events/virtual-tradeshow/articles/best-new-pieces-renew-kids-bedroom.jpg" alt="" class="img-fluid">
                    <p><b>THE BEST NEW PIECES TO RENEW YOUR KIDS BEDROOM</b></p>
                    <p>2020 came with the introduction of awesome new pieces in Circu’s collection that add more magic to the collection and fill some gaps that have been high-demanding. </p>
                </a>
                <a class="btn btn--primary-green mb-1" href="https://www.circu.net/blog/lifestyle/best-new-pieces-renew-kids-bedroom/" target="_blank"><span>DISCOVER MORE <i class="fas fa-caret-right"></i></span></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="https://www.circu.net/trends/" target="_blank">
                    <img src="/img/events/virtual-tradeshow/articles/trends-and-ideas.jpg" alt="" class="img-fluid">
                    <p><b>TREND MOODBOARDS FOR KID'S INTERIOR DESIGN</b></p>
                    <p>We curate the most relevant shifts across Interiors, Fashion, Art and Design. Know here all about the future trends in kid's interior decor and be inspired with our moodboards.</p>
                </a>
                <a class="btn btn--primary-green mb-1" href="https://www.circu.net/trends/" target="_blank"><span>DISCOVER MORE <i class="fas fa-caret-right"></i></span></a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="https://www.circu.net/blog/interior-design/iconic-pieces-perfect-kids-interior-design-projects/" target="_blank">
                    <img src="/img/events/virtual-tradeshow/articles/iconic-pieces-perfect-kids-interior-design-projects.jpg" alt="" class="img-fluid">
                    <p><b>ICONIC PIECES PERFECT FOR KIDS INTERIOR DESIGN</b></p>
                    <p>Circu’s Magical Collection is filled with incredible, one of a kind design pieces which add magic to any design project. Can you guess which ones are we talking about?</p>
                </a>
                <a class="btn btn--primary-green mb-1" href="https://www.circu.net/blog/interior-design/iconic-pieces-perfect-kids-interior-design-projects/" target="_blank"><span>DISCOVER MORE <i class="fas fa-caret-right"></i></span></a>
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
    <!-- Some spacing 😉 -->
    <div class="spacer"></div>

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">
            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <!--  Controls are self-explanatory. Order can be changed. -->
                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('head-includes')

<title>Virtual Tradeshow 2020 | Circu Magical Furniture</title>
<meta name="description" content="circu magical furniture" />
<meta name="author" content="circu">
<meta name="keywords" content="Virtual Tradeshow" />
<link REL="SHORTCUT ICON" HREF="https://circu.net/favicon-circu-magical-furniture.jpg">
<meta property="og:image" content="https://www.circu.net/img/events/virtual-tradeshow/virtual-tour-2020.jpg" />
<link rel="stylesheet" type="text/css" href="https://www.trendesignbook.com/css/photoswipe.css">
<link rel="stylesheet" href="https://www.trendesignbook.com/css/photoswipe-skin.css">
<link rel="stylesheet" type="text/css" href="/css/slick.css"/>
<style>
    .pswp { z-index: 99999; }
    .pswp__caption__center {text-align: center;}
    figure {
        display: inline-block;
        width: 25%;
        /*float: left;*/
        margin: 0;
        position: relative;
        overflow: hidden;
    }
    figure img { width: 100%;  }
</style>
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
    <script type="text/javascript" src="/js/slick.min.js"></script>
    <script src="https://www.trendesignbook.com/js/photoswipe.min.js"></script> 
    <script src="https://www.trendesignbook.com/js/photoswipe-ui-default.min.js"></script>
    <script>
        
        $(document).ready(slickit());

        $(window).resize(function(){
            slickit();
        });

        function slickit(){
          $('.gallery').slick({
                arrows:true,
                nextArrow: '<span class="lnr lnr-chevron-right" style="font-size:20px;position: absolute;top: 50%;right: 20px;z-index: 99;cursor:pointer;"></span>',
                prevArrow: '<span class="lnr lnr-chevron-left" style="font-size:20px;position: absolute;top: 50%;left: 20px;z-index: 99;cursor:pointer;"></span>',
                dots: true,
                infinite: true,
                slidesToShow:  4,
                slidesToScroll: 1,
                variableWidth: false
                //centerMode:true
          });
        };

        var initPhotoSwipeFromDOM = function(gallerySelector) {

            // parse slide data (url, title, size ...) from DOM elements 
            // (children of gallerySelector)
            var parseThumbnailElements = function(el) {
                var thumbElements = el.childNodes,
                    numNodes = thumbElements.length,
                    items = [],
                    figureEl,
                    linkEl,
                    size,
                    item;

                for(var i = 0; i < numNodes; i++) {

                    figureEl = thumbElements[i]; // <figure> element

                    // include only element nodes 
                    if(figureEl.nodeType !== 1) {
                        continue;
                    }

                    linkEl = figureEl.children[0]; // <a> element

                    size = linkEl.getAttribute('data-size').split('x');

                    // create slide object
                    item = {
                        src: linkEl.getAttribute('href'),
                        w: parseInt(size[0], 10),
                        h: parseInt(size[1], 10)
                    };

                    if(figureEl.children.length > 1) {
                        // <figcaption> content
                        item.title = figureEl.children[1].innerHTML; 
                    }

                    if(linkEl.children.length > 0) {
                        // <img> thumbnail element, retrieving thumbnail url
                        item.msrc = linkEl.children[0].getAttribute('src');
                    } 

                    item.el = figureEl; // save link to element for getThumbBoundsFn
                    items.push(item);
                }

                return items;
            };

            // find nearest parent element
            var closest = function closest(el, fn) {
                return el && ( fn(el) ? el : closest(el.parentNode, fn) );
            };

            // triggers when user clicks on thumbnail
            var onThumbnailsClick = function(e) {
                e = e || window.event;
                e.preventDefault ? e.preventDefault() : e.returnValue = false;

                var eTarget = e.target || e.srcElement;

                // find root element of slide
                var clickedListItem = closest(eTarget, function(el) {
                    return (el.tagName && el.tagName.toUpperCase() === 'DIV');
                });

                if(!clickedListItem) {
                    return;
                }

                // find index of clicked item by looping through all child nodes
                // alternatively, you may define index via data- attribute
                var clickedGallery = clickedListItem.parentNode,
                    childNodes = clickedListItem.parentNode.childNodes,
                    numChildNodes = childNodes.length,
                    nodeIndex = 0,
                    index;

                for (var i = 0; i < numChildNodes; i++) {
                    if(childNodes[i].nodeType !== 1) { 
                        continue; 
                    }

                    if(childNodes[i] === clickedListItem) {
                        index = nodeIndex;
                        break;
                    }
                    nodeIndex++;
                }

                if(index >= 0) {
                    // open PhotoSwipe if valid index found
                    openPhotoSwipe( index, clickedGallery );
                }
                return false;
            };

            // parse picture index and gallery index from URL (#&pid=1&gid=2)
            var photoswipeParseHash = function() {
                var hash = window.location.hash.substring(1),
                params = {};

                if(hash.length < 5) {
                    return params;
                }

                var vars = hash.split('&');
                for (var i = 0; i < vars.length; i++) {
                    if(!vars[i]) {
                        continue;
                    }
                    var pair = vars[i].split('=');  
                    if(pair.length < 2) {
                        continue;
                    }           
                    params[pair[0]] = pair[1];
                }

                if(params.gid) {
                    params.gid = parseInt(params.gid, 10);
                }

                return params;
            };

            var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
                var pswpElement = document.querySelectorAll('.pswp')[0],
                    gallery,
                    options,
                    items;

                items = parseThumbnailElements(galleryElement);

                // define options (if needed)
                options = {

                    // define gallery index (for URL)
                    galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                    getThumbBoundsFn: function(index) {
                        // See Options -> getThumbBoundsFn section of documentation for more info
                        var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                            pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                            rect = thumbnail.getBoundingClientRect(); 

                        return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                    }

                };

                // PhotoSwipe opened from URL
                if(fromURL) {
                    if(options.galleryPIDs) {
                        // parse real index when custom PIDs are used 
                        // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                        for(var j = 0; j < items.length; j++) {
                            if(items[j].pid == index) {
                                options.index = j;
                                break;
                            }
                        }
                    } else {
                        // in URL indexes start from 1
                        options.index = parseInt(index, 10) - 1;
                    }
                } else {
                    options.index = parseInt(index, 10);
                }

                // exit if index not found
                if( isNaN(options.index) ) {
                    return;
                }

                if(disableAnimation) {
                    options.showAnimationDuration = 0;
                }

                // Pass data to PhotoSwipe and initialize it
                gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();
            };

            // loop through all gallery elements and bind events
            var galleryElements = document.querySelectorAll( gallerySelector );

            for(var i = 0, l = galleryElements.length; i < l; i++) {
                galleryElements[i].setAttribute('data-pswp-uid', i+1);
                galleryElements[i].onclick = onThumbnailsClick;
            }

            // Parse URL and open gallery if it contains #&pid=3&gid=1
            var hashData = photoswipeParseHash();
            if(hashData.pid && hashData.gid) {
                openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
            }
        };

        // execute above function
        initPhotoSwipeFromDOM('.my-gallery');

        // document.getElementById('launch-gallery').onclick = initPhotoSwipeFromDOM('.my-gallery');

        // $('#launch-gallery').click(function(evt){
        //   evt.preventDefault(); // prevent regular click action
        //   initPhotoSwipeFromDOM().openPhotoSwipe(0, '.my-gallery');
        // });

    </script>
@endsection