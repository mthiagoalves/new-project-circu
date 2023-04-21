<div class="container-fluid mt-3">
  <div class="row footer footer-nav mb-3">
    <div class="col-12">
      <div class="row">
        <div class="col-6 col-sm-3 d-flex flex-column py-3">
          <img src="/img/icons/ft-handmade.png" class="img-fluid">
          <div class="text-center">
            <div class="small">100%</div>Handmade
          </div>
        </div>
        <div class="col-6 col-sm-3 d-flex flex-column py-3">
          <img src="/img/icons/ft-custom.png" class="img-fluid">
          <div class="text-center">
            <div class="small">Bespoke &</div>Custom Products
          </div>
        </div>
        <div class="col-6 col-sm-3 d-flex flex-column py-3">
          <img src="/img/icons/ft-stock.png" class="img-fluid">
          <div class="text-center">
            <div class="small">Ready to Ship &</div> Stocklist
          </div>
        </div>
        <div class="col-6 col-sm-3 d-flex flex-column py-3">
          <img src="/img/icons/ft-lead-time.png" class="img-fluid">
          <div class="text-center">
            <div class="small">Short</div> Lead Time
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('includes.footer.curated-collections')
  @include('includes.footer.sister-brands2')
  @include('includes.footer.to-inspire')
  <div class="row footer footer-inner">
    <div class="col-12">
      <div class="row">
        <div class="col-12 col-md-3 text-center text-md-left d-flex flex-column pt-5 pt-md-5 pb-md-4 ft-col">
          <h4>THE BRAND</h4>
          <ul>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li><a href="{{ asset('/docs/terms-conditions-circu-magical-furniture.pdf') }}" target="_blank">Terms & Conditions</a></li>
            <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-3 text-center text-md-left d-flex flex-column pt-4 pt-md-5 pb-md-4 ft-col">
          <h4>PRODUCTS</h4>
          <ul>
            <li><a href="{{ route('category', ['category' => 'beds']) }}">Beds</a></li>
            <li><a href="{{ route('category', ['category' => 'seating']) }}">Seating</a></li>
            <li><a href="{{ route('category', ['category' => 'lighting']) }}">Lighting</a></li>
            <li><a href="{{ route('category', ['category' => 'storage']) }}">Storage</a></li>
            <li><a href="{{ route('category', ['category' => 'play-learn']) }}">Play & Learn</a></li>
            <li><a href="{{ route('category', ['category' => 'mirrors']) }}">Mirrors</a></li>
            <li><a href="{{ route('category', ['category' => 'rugs']) }}">Rugs</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-3 text-center text-md-left d-flex flex-column pt-4 pt-md-5 pb-md-4 ft-col">
          <h4>COLLECTIONS</h4>
          <ul>
            <li><a href="{{ route('collection', ['collection' => 'magical-collection']) }}">Magical Furniture</a></li>
            <li><a href="{{ route('collection', ['collection' => 'fantasy-air-collection']) }}">Fantasy Air</a></li>
            <li><a href="{{ route('collection', ['collection' => 'sky-collection']) }}">Sky</a></li>
            <li><a href="{{ route('collection', ['collection' => 'illusion-collection']) }}">Illusion</a></li>
            <li><a href="{{ route('collection', ['collection' => 'animal-stools-collection']) }}">Animal Stools</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-3 text-center text-md-left d-flex flex-column pt-4 pb-5 pt-md-5 pb-md-4 ft-col">
          <h4>SERVICES</h4>
          <ul>
            <li><a href="{{ route('press') }}">Press</a></li>
            <li><a href="/blog" target="_blank">Blog</a></li>
            <li><a href="/inspirations" target="_blank">Inspiration & Ideas</a></li>
            <li><a href="{{ route('press') }}">Social Media</a></li>
            <li><a href="{{ route('press') }}">Media & Downloads</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="row footer footer-inner footer-subscribe py-4">
    <div class="col-12 col-md-10 offset-md-1 text-center">
      <div class="row">
        <form class="col-12 form_footer_subscribe form-parsley" action="{{ route('process.subscribe-footer') }}" method="post" name="form_footer_subscribe">
          <div class="row">
            <input type="hidden" name="origin" class="origin" />
            <input type="hidden" name="referrer" class="referrer" />
            <input type="hidden" name="lead_path" class="lead_path" />
            {{ csrf_field() }}
            <div class="col-12 col-sm-3">
              <div class="title text-center">Join Now</div>
              <div class="text text-center">Sign up for Circu emails and get 5% off</div>
            </div>
            <div class="col-12 col-sm-3 pt-3">
              <input type="email" name="email" placeholder="Enter email address" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change">
            </div>
            <div class="col-12 col-sm-3 pt-3">
              <select name="country" data-parsley-required="true">
                <option selected="true" disabled="disabled">Select Country</option>
                @include('includes.options-country')
              </select>
            </div>
            <div class="col-12 col-sm-3 pt-1 pt-sm-3">
              <button type="submit" name="button">SUBSCRIBE NOW</button>
            </div>

            @if(isset($_POST['form_footer_subscribe']))
            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
              {{Session::get('message')}}
            </div>
            @endif
            @if(isset($errors))@include('includes.errors')@endif
            @endif

          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- end row -->

{{-- @include('includes.modal-p-exit') --}}

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/js/parsley.min.js"></script>
<script type="text/javascript" src="/js/sweetalert.min.js"></script>
<script type="text/javascript" src="/js/bootstrap-4.0.min.js"></script>
<script type="text/javascript" src="/js/jquery.modal.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/functions.js"></script>

<script type="text/javascript">
  // $(".origin").val(tracker.url_origin);
  // $(".referrer").val(tracker.referrer);
  // $(".lead_path").val(tracker.flow);


  $('.form-parsley').on('submit', function (e) {
    if (!($(this).parsley().isValid())) {
      e.preventDefault();
    } else {
      if ($('.form-parsley').length > 0) {
        $(this).parsley().validate();
      }
    }
  });

  // $('.form-parsley').on('submit', function() {
  //     $(this).parsley().validate();
  // });


  $(window).load(function () {
    var elementPosition = $('#menu-fixed').offset();

    var elementHeightOffset = $('#intro').height();

    $(window).scroll(function () {
      if ($(window).scrollTop() > elementHeightOffset) {
        $('#menu-fixed').css('position', 'fixed').css('top', '26px').css('z-index', '10050');
        $('#main-slide').css('margin-top', '100px');

      } else {
        $('#menu-fixed').css('position', 'relative').css('top', '0px');
        $('#main-slide').css('margin-top', '0');
      }
    });
  });


  $('#collections').click(function () {
    document.getElementById('dropdown-menu-media-room').style.display = 'none';
    $('#dropdown-menu-collections').slideToggle({
      direction: "down"
    }, 1000);
    $(this).toggleClass('open');
  });

  $('#media-room').click(function () {
    document.getElementById('dropdown-menu-collections').style.display = 'none';
    $('#dropdown-menu-media-room').slideToggle({
      direction: "down"
    }, 1000);
    $(this).toggleClass('open');
  });


  $('#dropdown-menu-collections .drop-close').click(function () {
    $('#dropdown-menu-collections').slideToggle({
      direction: "down"
    }, 1000);
  });
  $('#dropdown-menu-media-room .drop-close').click(function () {
    $('#dropdown-menu-media-room').slideToggle({
      direction: "down"
    }, 1000);
  });
</script>
<script>
  $('.owl-footerbooks').owlCarousel({
     margin: 0,
     lazyLoad: false,
     dots: false,
     nav: true,
     navText: ["<i class='fas fa-chevron-left p-0 pl-2 arrow-banners'></i>", "<i class='fas fa-chevron-right p-0 pr-2 arrow-banners'></i>"],
     autoplay: false,
     fluidSpeed: 1500,
     responsive: {
       0: {
         items: 1,
         loop: true,
         nav: true
       },
       738: {
         items: 3,
         loop: true,
         nav: true
       },
       1200: {
         items: 4,
         loop: true,
         nav: true
       },
       1400: {
          items: 5,
          loop: true,
          touchDrag  : true,
          mouseDrag  : true,
          nav: true
        }
     }
   });
 </script>
<script>
$(document).ready(function() {
  $('.emailebook1').change(function() {
  var hasError = false;
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

  var emailaddressVal = $(".emailebook1").val();
  if (emailaddressVal == '') {
      hasError = true;
  } else if (!emailReg.test(emailaddressVal)) {
      hasError = true;
  }

  if (hasError == true) {
      $('.validatemail1 .email-input p').removeClass('d-none');
      $('.validatemail1 .btn-green-underline').addClass('modal-cursor-disable-footer');
  }
  if (hasError == false) {
      $('.validatemail1 .email-input p').addClass('d-none');
      $('.validatemail1 .btn-green-underline').removeClass('modal-cursor-disable-footer');
  }
});
$('.emailebook2').change(function() {
  var hasError = false;
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

  var emailaddressVal = $(".emailebook2").val();
  if (emailaddressVal == '') {
      hasError = true;
  } else if (!emailReg.test(emailaddressVal)) {
      hasError = true;
  }

  if (hasError == true) {
      $('.validatemail2 .email-input p').removeClass('d-none');
      $('.validatemail2 .btn-green-underline').addClass('modal-cursor-disable-footer');
  }
  if (hasError == false) {
      $('.validatemail2 .email-input p').addClass('d-none');
      $('.validatemail2 .btn-green-underline').removeClass('modal-cursor-disable-footer');
  }
});
$('.emailebook3').change(function() {
  var hasError = false;
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

  var emailaddressVal = $(".emailebook3").val();
  if (emailaddressVal == '') {
      hasError = true;
  } else if (!emailReg.test(emailaddressVal)) {
      hasError = true;
  }

  if (hasError == true) {
      $('.validatemail3 .email-input p').removeClass('d-none');
      $('.validatemail3 .btn-green-underline').addClass('modal-cursor-disable-footer');
  }
  if (hasError == false) {
      $('.validatemail3 .email-input p').addClass('d-none');
      $('.validatemail3 .btn-green-underline').removeClass('modal-cursor-disable-footer');
  }
});
$('.emailebook4').change(function() {
  var hasError = false;
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

  var emailaddressVal = $(".emailebook4").val();
  console.log(emailaddressVal);
  if (emailaddressVal == '') {
      hasError = true;
  } else if (!emailReg.test(emailaddressVal)) {
      hasError = true;
  }

  if (hasError == true) {
      $('.validatemail4 .email-input p').removeClass('d-none');
      $('.validatemail4 .btn-green-underline').addClass('modal-cursor-disable-footer');
  }
  if (hasError == false) {
      $('.validatemail4 .email-input p').addClass('d-none');
      $('.validatemail4 .btn-green-underline').removeClass('modal-cursor-disable-footer');
  }
});
$('.emailebook5').change(function() {
  var hasError = false;
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

  var emailaddressVal = $(".emailebook5").val();
  if (emailaddressVal == '') {
      hasError = true;
  } else if (!emailReg.test(emailaddressVal)) {
      hasError = true;
  }

  if (hasError == true) {
      $('.validatemail5 .email-input p').removeClass('d-none');
      $('.validatemail5 .btn-green-underline').addClass('modal-cursor-disable-footer');
  }
  if (hasError == false) {
      $('.validatemail5 .email-input p').addClass('d-none');
      $('.validatemail5 .btn-green-underline').removeClass('modal-cursor-disable-footer');
  }
});

});
</script>
<script type="text/javascript">
  $('.owl-novelties-ft').owlCarousel({
    loop: true,
    margin: 10,
    lazyLoad: false,
    dots: true,
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

@section('footer-includes')
@show