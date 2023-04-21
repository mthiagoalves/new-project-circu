@extends('layouts.master-backoffice')
@section('meta')
<title>Backoffice - Login</title>
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
<meta property="og:image" content="http://www.circu.net/images/logo-circu-magical-furniture.png"/>

<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
@endsection
@section('head-includes')
<style>
    p {
        font-family: 'RalewayMedium', sans-serif;
    }

</style>
@endsection
@section('main-content')
<div class="container max-width-site pt-5">

    <div class="row page_contact_form justify-content-center">

  
        <div class="hidden-xs col-12 col-md-6">

          <div class="col-12 my-3">
                <h3 class="mb-2 text-uppercase" style="color: #89bab6;font-size:2rem !important;text-align:center"><b>Backoffice Circu</b></h3>
            </div>
            
            <div class="col-12 my-3">
                <h4 class="mb-2 text-uppercase" style="color: #89bab6;font-size:1.2rem !important;"><b>Sign In</b></h4>
            </div>

            <form method="POST" class="form_press_login form-parsley col-12" action="{{ route('process.backoffice-login') }}" data-validate="parsley">
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
                        <button type="submit" onclick="ga('send','event','Press Login','Request Access','PRESSarea-requestacess');" name="btn_login" class="btn-get-price py-2" style="font-size: 11.5px;">LOGIN</button>
                    </div>
                </div>
            </form>

        </div>

    </div>



</div><!-- container-->


@endsection
@section('footer-includes')
<script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>
<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
  $(window).on("load", function() {
	 var $grid = $('.grid').isotope({
	   itemSelector: '.grid-item',
	   percentPosition: true,
	   masonry: {
	     columnWidth: '.grid-sizer'
	   }
	 });
	
	 $('.filter-trigger').click(function(e) {
	   $('.filters').find('.active-filter').removeClass('active-filter');
	   $(this).addClass("active-filter");
	   e.preventDefault();
	   var category = $(this).data('category');
	   setTimeout(function() {
	     $grid.isotope({
	       filter: '.' + category
	     });
	   }, 200);
	 });
	
	 $('.isotope-reset').click(function() {
	   $grid.isotope({
	     filter: '*'
	   });
	 });
	});
  $(document).on("click", '[data-toggle="collapse"] .newButton', function() {
	    if ($(this).hasClass('clicked')) {
	        $(this).removeClass('clicked');
	        $(this).html('SHOW MORE >');
	    } else {
	        $(this).addClass('clicked');
	        $(this).html('< SHOW LESS ');
	    }
	});

	$(".collapse").on('shown.bs.collapse', function() {
	    var $grid = $('.grid').isotope({
	        itemSelector: '.element-item',
	        percentPosition: true,
	        masonry: {
	            // use element for option
	            columnWidth: '.element-item2'
	        }
	    });
	});
	$(".collapse").on('hidden.bs.collapse', function() {
	    var $grid = $('.grid').isotope({
	        itemSelector: '.element-item',
	        percentPosition: true,
	        masonry: {
	            // use element for option
	            columnWidth: '.element-item2'
	        }
	    });
	});
    $('.owl-main').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: false,
        autoplay: true,
        fluidSpeed: 3000,
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
        nav: true,
        navText: ["<i class='fas fa-chevron-left arrow-banners'></i>", "<i class='fas fa-chevron-right arrow-banners'></i>"],
        autoplay: false,
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

