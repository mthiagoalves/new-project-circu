@extends('layouts.master')

@section('main-content')

@include('includes.menu-visual')

<div class="container max-width-site pt-3">

    <div class="row page_contact_form">

        <div class="hidden-xs col-12 col-md-6 owl-main owl-carousel owl-slide owl-theme">
            <div class="item">
                <a href="{{ route('press-release', ['slug' => 'dreamhouse-adventures-bedroom']) }}"><img src="/img/slides/press/press-release-2022-dreamhouse-adventures-bedroom.jpg" class="cd-dot img-fluid"></a>
            </div>
            <div class="item">
                <a href="{{ route('press-release', ['slug' => 'press-release-2019-february-cloud-room-collection']) }}"><img src="/img/slides/press/press-release-2019-february-cloud-room-collection.jpg" class="cd-dot img-fluid"></a>
            </div>
            <div class="item">
                <a href="{{ route('press-release', ['slug' => 'press-release-2018-september-power-of-craftsmanship']) }}"><img src="/img/slides/press/press-release-2018-september-power-of-craftsmanship.jpg" class="cd-dot img-fluid"></a>
            </div>
            <div class="item">
                <a href="{{ route('press-release', ['slug' => 'press-release-2018-july-interview-with-ceo']) }}"><img src="/img/slides/press/press-release-2018-july-interview-with-ceo.jpg" class="cd-dot img-fluid"></a>
            </div>
        </div>

        <div class="hidden-xs col-12 col-md-6">
            <div class="col-12 mb-3">
                <h6 class="my-1"><i><b>Welcome to</b></i></h6>
                <h4 class="mb-2"><b>Circu Magical Furniture</b></h4>
                <p class="mt-0">Welcome to a world full of magic and fantasy, where your dreams turn into reality! Register for a Circu Press Account today, for access to a dedicated product and exclusive content download area featuring: </p>
                <p>Contact our Press PR <a href="mailto:press@circu.net">press@circu.net</a></p>
            </div>

            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                <p><span onclick="this.parentElement.style.display='none'" class="position-absolute" style="right:10px; cursor:pointer;"> <i class="fas fa-times"></i> </span>
                    {{Session::get('message')}}
                </p>
            </div>
            @endif

            @if($errors->any())
            <div class="form-group clearfix">
                <alert class="alert alert-danger float-left px-5 py-2" role="alert">
                    <span onclick="this.parentElement.style.display='none'" class="position-absolute" style="right:10px; cursor:pointer;"> <i class="fas fa-times"></i> </span>
                    <p class="m-0">
                        @foreach($errors->all() as $error)
                        {{ $error }}</br>
                        @endforeach
                    </p>
                </alert>
            </div>
            @endif

            <form method="POST" action="{{ route('process.press-register') }}" class="form_press_request form-parsley col-12" data-validate="parsley">

                <div class="row">

                    {{ csrf_field() }}
                    <input type="hidden" name="origin" class="origin" />
                    <input type="hidden" name="referrer" class="referrer" />
                    <input type="hidden" name="lead_path" class="lead_path" />

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                            <span class="txt-request">Name*</span>
                            <input type="text" class="form-control field-input" name="name" data-parsley-required="true" data-parsley-trigger="change">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                            <span class="txt-request">Email*</span>
                            <input type="email" class="form-control field-input" name="email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('specialty') ? 'has-error' : '' }}">
                            <span class="txt-request">Occupation*</span>
                            <select class="custom-select field-select" name="specialty" data-parsley-required="true">
                                <option></option>
                                <option value="Magazine">Magazine</option>
                                <option value="Newspaper">Newspaper</option>
                                <option value="Blog">Blog</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
                            <span class="txt-request">Company Name*</span>
                            <input type="text" class="form-control field-input" name="company" data-parsley-required="true" data-parsley-trigger="change">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }}">
                            <span class="txt-request">Country*</span>
                            <select class="custom-select field-select" name="country" data-parsley-required="true">
                                @include('includes.options-country')
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('city') ? 'has-error' : '' }}">
                            <span class="txt-request">City*</span>
                            <input type="text" class="form-control field-input" name="city" data-parsley-required="true" data-parsley-trigger="change">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <span class="txt-request">Phone</span>
                            <input type="text" class="form-control field-input" name="phone">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('website') ? 'has-error' : '' }}">
                            <span class="txt-request">Website</span>
                            <input type="text" class="form-control field-input" name="website">
                        </div>
                    </div>

                    <div class="col-12">

                        <div class="option_right col-12">
                            <div class="row">
                                <div class="col-12 nopadding"><input type="checkbox" checked="checked" name="accept_terms" value="yes" id="accept_terms" data-parsley-multiple="accept_terms"><label for="accept_terms" class="label_left"></label><span class="blue">I HAVE READ AND ACCEPT YOUR PRIVACY POLICY*</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" onclick="ga('send','event','Press Login','Request Access','PRESSarea-requestacess');" id="request-password-tag" name="btn_request" class="btn-border-green grow py-2">REQUEST ACCESS</button>
                    </div>
                </div>

            </form>

            <div class="col-12 my-3">
                <h4 class="mb-2"><b>Sign In</b></h4>
            </div>

            <form method="POST" class="form_press_login form-parsley col-12" action="{{ route('process.press-login') }}" data-validate="parsley">
                <div class="row">
                    <input type="hidden" name="origin" class="origin" />
                    <input type="hidden" name="referrer" class="referrer" />
                    <input type="hidden" name="lead_path" class="lead_path" />
                    {{ csrf_field() }}
                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                            <span class="txt-request">Email*</span>
                            <input type="email" class="form-control field-input" name="email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('password') ? 'has-error' : '' }}">
                            <span class="txt-request">Password*</span>
                            <input type="password" class="form-control field-input" name="password" data-parsley-required="true" data-parsley-trigger="change">
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" onclick="ga('send','event','Press Login','Request Access','PRESSarea-requestacess');" name="btn_login" class="btn-border-green grow py-2">LOGIN</button>
                    </div>
                </div>
            </form>

        </div>

    </div>

    <div class="row">

        <div class="col-12 text-center pt-5 pb-2">
            <h5 class="title_highlight border_b_grey mb-4"> PRESS RELEASES </h5>
        </div>

        @foreach($pressreleases as $pressrelease)

        <div class="col-6 col-sm-3">
            <div class="product_thumb">
                <p class="press-title_release m-0" style="height:44px;">{!! $pressrelease->article_languages[0]->title !!}</p>
                <a href="{{ route('press-release', ['name' => $pressrelease->slug]) }}">
                    <img src="/img/press/press-release/{{ $pressrelease->slug }}.jpg" class="img-fluid"></a>
                <div class="slideToggle">
                    <a class="btn-get-price" rel="modal:open" href="{{ route('modal-press-release', ['name' => $pressrelease->slug]) }}"><span><b>DOWNLOAD </b> PRESS RELEASE &gt;</span> </a>
                </div>
            </div>
        </div>

        @endforeach

        <div class="clearfix visible-xs visible-sm visible-md visible-lg"></div>

    </div>

    <div class="row">

        <div class="col-sm-6">
            <div class="col-12 text-center pt-5 pb-2 nopadding">
                <h5 class="title_highlight border_b_grey mb-4"> PRESS KIT </h5>
                <a href="{{ asset('/docs/presskit-circu-magical-furniture.pdf') }}" target="_blank">
                    <img src="/img/press/presskit-circu-magical-furniture.jpg" class="img-responsive">
                </a>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="col-12 text-center pt-5 pb-2 nopadding">
                <h5 class="title_highlight border_b_grey mb-4"> CIRCU LIVE </h5>
                <img src="/img/press/video-circu-magical-furniture.jpg" class="img-responsive videoplayer" data-video="http://www.youtube.com/embed/mlo0jc3tvUM?autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0">
            </div>
        </div>

    </div>

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
                        <a href="{{ route('press-clipping', ['name' => $clipping->slug]) }}">
                            <img src="/img/press/clipping/covers/{{ $clipping->slug }}_s.jpg" border="0" alt="" onmouseover="this.src='/img/press/clipping/covers/{{ $clipping->slug }}_s.jpg'" onmouseout="this.src='/img/press/clipping/covers/{{ $clipping->slug }}_s.jpg'" class="img-responsive">
                            <div class="product-caption">{!! $clipping->article_languages[0]->title !!} </div>
                        </a>
                    </div>
                </div>

                @if($i % 6 == 0)
                <div class="clearfix visible-sm visible-md visible-lg"></div>

                @endif


                <?php $i++ ?>

                @endforeach

            </div>

        </div><!--  end col-12 -->

    </div> <!-- end row -->

</div><!-- container-->

<!-- <div class="container max-width-site">

        <div class="row"><div class="col-12 text-center mt-5 mb-3">
         <a href="{{ route('catalogue') }}"><img src="/img/download-catalogue-circu-magical-furniture.jpg" class="d-none d-md-block"><img src="/img/download-catalogue-circu-magical-furniture-mobile.jpg" class="d-block d-md-none"></a>
         </div>
        </div>

    </div> -->
<!-- container-->

@endsection

@section('head-includes')
<style>
    p {
        font-family: 'RalewayMedium', sans-serif;
    }

    .product-caption {
        font-size: 0.7rem !important;
    }

    .btn-view-more a {
        font-size: 0.70rem;
        letter-spacing: 1px;
        font-weight: 600;
        width: 80%;
    }

    .input-block {
        margin: 0px 0px 10px;
    }

    @media(max-width: 550px){
        h4{
            text-align: initial;
        font-size: 22px;
        }
    }
</style>
@endsection

@section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $('.owl-main').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: false,
        autoplay: true,
        fluidSpeed: 1500,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });
    $('.owl-novelties').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: false,
        autoplay: true,
        fluidSpeed: 1500,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });
</script>
@endsection

@section('meta')
<title>Press - Circu Magical Furniture</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="Press - Circu Magical Furniture" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="http://www.circu.net/press/" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="http://www.circu.net/images/logo-circu-magical-furniture.png" />
@endsection