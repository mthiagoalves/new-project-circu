<div class="container-fluid print-d-none">
    <div class="row footer footer-nav py-2">
        <div class="col-12">
            <div class="row">
                <div class="col-6 col-sm-3 d-flex flex-column py-3">
                    <img src="/img/box.svg" srcset="/img/box.svg" width="26" height="26" class="img-fluid" onclick='window.location.href="https://www.circu.net/about"' style="cursor:pointer;">
                    <div class="text-center">
                        <a href="{{route('about')}}">
                            <div class="small">100%</div>Handmade
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-3 d-flex flex-column py-3">
                    <img src="/img/color-scheme.svg" srcset="/img/color-scheme.svg" width="26" height="26" class="img-fluid" onclick='window.location.href="https://www.circu.net/contact"' style="cursor:pointer;">
                    <div class="text-center">
                        <a href="{{route('contact')}}">
                            <div class="small">Bespoke &</div>Custom Products
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-3 d-flex flex-column py-3">
                    <img src="/img/file.svg" srcset="/img/file.svg" width="26" height="26" class="img-fluid" onclick='window.location.href="https://www.circu.net/stocklist"' style="cursor:pointer;">
                    <div class="text-center">
                        <a href="{{route('stocklist')}}">
                            <div class="small">Ready to Ship &</div> Stocklist
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-3 d-flex flex-column py-3">
                    <img src="/img/fast-time.svg" srcset="/img/fast-time.svg" width="26" height="26" class="img-fluid" onclick='window.location.href="https://www.circu.net/stocklist"' style="cursor:pointer;">
                    <div class="text-center">
                        <a href="{{route('stocklist')}}">
                            <div class="small">Short</div> Lead Time
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer.to-inspire')
    @include('includes.footer.sister-brands2')
    <div class="row footer footer-inner print-d-none">
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
                        <li><a href="{{ route('finishes') }}">Finishes</a></li>
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
                        <li class="pt-4"><a class="talk-with-us" style="font-weight: bold; cursor:pointer;"><span class="talk-with-us" style="float: left;">TALK WITH A DESIGNER</span><img class="talk-with-us" style="width: 20px;margin: 1px 6px;filter: invert(100%);" src="/img/conversation.svg"></a></li>
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
                        <input type="text" name="interested" class="interested" />
                        {{ csrf_field() }}
                        <div class="col-12 col-sm-3">
                            <div class="title text-center">Join Now</div>
                            <div class="text text-center">Sign up for Circu emails and receive all the latest news</div>
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

        <div class="col-12 col-lg-6 covet-branding mt-2 d-none d-lg-block py-4" style="display:flex;align-items: center;justify-content: flex-end;">
            <a href="https://covetgroup.com/?utm_source=website&utm_medium=partnersfooter&utm_content=circu-lifestyle&utm_campaign=brandawareness" target="_blank" style="display: flex;align-items: flex-end;justify-content: flex-end;">
                <img src="/img/icons/partners/logo-covet-group-w.png" class="center-block img-fluid">
                <span class="mx-3 text-sm-9" style="color:#FFFFFF;font-size:12px;letter-spacing: 1px;align-self: center;">TO INSPIRE ELEVATING DESIGN AND CRAFTSMANSHIP</span>
            </a>
        </div>
        <div class="col-12 col-lg-6 covet-branding mt-2 d-none d-lg-block py-4" style="display:flex;align-items: center;">
            <a href="https://www.trendesignbook.com/?utm_source=website&utm_medium=partnersfooter&utm_content=circu-lifestyle&utm_campaign=brandawareness" target="_blank" style="display: flex;align-items: flex-end;">
                <img src="/img/icons/partners/logo-trendbook.png" class="center-block img-fluid">
                <span class="mx-3 text-sm-9" style="color:#FFFFFF;font-size:12px;letter-spacing: 1px;align-self: center;">FORECASTING THE FUTURE OF DESIGN</span>
            </a>
        </div>

        <div class="col-12 pt-4 text-center d-lg-none" style="display:flex;align-items: center;justify-content: center;">
            <a href="https://covetgroup.com/?utm_source=website&utm_medium=partnersfooter&utm_content=circu-lifestyle&utm_campaign=brandawareness" target="_blank">
                <img src="/img/icons/partners/logo-covet-group-w.png" class="d-block img-fluid">
            </a>
        </div>
        <div class="col-12 pt-2 text-center d-lg-none">
            <a href="https://covetgroup.com/?utm_source=website&utm_medium=partnersfooter&utm_content=circu-lifestyle&utm_campaign=brandawareness" target="_blank">
                <span class="mx-3" style="color:#FFFFFF;font-size:12px;letter-spacing: 1px;">TO INSPIRE ELEVATING DESIGN AND CRAFTSMANSHIP</span>
            </a>
        </div>

        <div class="col-12 pt-4 text-center d-lg-none" style="display:flex;align-items: center;justify-content: center;">
            <a href="https://www.trendesignbook.com/?utm_source=website&utm_medium=partnersfooter&utm_content=circu-lifestyle&utm_campaign=brandawareness" target="_blank">
                <img src="/img/icons/partners/logo-trendbook.png" class="d-block img-fluid">
            </a>
        </div>
        <div class="col-12 pt-2 text-center d-lg-none pb-4">
            <a href="https://www.trendesignbook.com/?utm_source=website&utm_medium=partnersfooter&utm_content=circu-lifestyle&utm_campaign=brandawareness" target="_blank">
                <span class="mx-3" style="color:#FFFFFF;font-size:12px;letter-spacing: 1px;">FORECASTING THE FUTURE OF DESIGN</span>
            </a>
        </div>

    </div>

    <!-- <aside id="sticky-social" class="a2a_kit a2a_default_style d-none d-md-block" style="display: block;">
    <ul class="sticky-bar-social">
      <li><a class="a2a_button_pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
      <li><a class="a2a_button_twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
      <li><a href="https://instagram.com/circu_magical_furniture/" target="_blank"><i class="fab fa-instagram"></i></a></li>
      <li><a class="a2a_button_facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
      <li><a class="a2a_button_facebook_messenger" target="_blank"><i class="fab fa-facebook-messenger"></i></a></li>
      <li><a class="a2a_button_whatsapp"><i class="fab fa-whatsapp"></i></a></li>
    </ul>
  </aside> -->

    <aside id="sticky-social" class="a2a_kit a2a_default_style d-none d-md-block" style="display: block;">
        <ul class="sticky-bar-social">
            <li><a href="https://instagram.com/circu_magical_furniture/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.pinterest.pt/circumagicalfurniture/" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
            <li><a href="https://www.tiktok.com/@circu_magical_furniture" target="_blank"><i><svg style="width: 12.5px;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="tiktok" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-tiktok fa-w-14">
                            <path fill="currentColor" d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" class=""></path>
                        </svg></i></a></li>
            <li><a href="https://www.facebook.com/circumagicalfurniture/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/circu_magical" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/company/circu-magicalfurniture/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a class="a2a_button_facebook_messenger" target="_blank"><i class="fab fa-facebook-messenger"></i></a></li>
            <li><a rel="modal:open" href="{{ route('modal-we-chat') }}" class="modal-cursor-disable"><i style="font-size: 18px;" class="fab fa-lg fa-weixin"></i></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=351911780428&text=Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies"><i class="fab fa-whatsapp"></i></a></li>
        </ul>
    </aside>

</div><!-- end row -->

@include('includes.pop-ups.modal-popup-inspiration2') 
@include('includes.pop-ups.popup-entrance-new-products')
<script>
    function deferLoadingScript(url, callback) {
        var loadScript = function() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.src = url;

            if (typeof callback === 'function') {
                s.onload = s.onreadystatechange = function(event) {
                    event = event || window.event;
                    if (event.type === 'load' || (/loaded|complete/.test(s.readyState))) {
                        s.onload = s.onreadystatechange = null;
                        callback();
                    }
                };
            }

            document.body.appendChild(s);
        };

        if (window.addEventListener) {
            window.addEventListener('load', loadScript, false);
        } else {
            window.attachEvent('onload', loadScript);
        }
    }
</script>

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script> -->
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/js.cookie.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script type="text/javascript" src="/js/jquery.modal.js"></script>
<script type="text/javascript" src="/js/parsley.min.js"></script>
<script type="text/javascript" src="/js/addtoany.js"></script>
<script type="text/javascript" src="/js/functions.js"></script>

<!-- <script>
  $(document).one("mouseleave", function(e) {
    if (e.pageY - $(window).scrollTop() <= 1 && Cookies.get('our-magical-rooms') == null && window.location.href != 'https://www.circu.net/our-magical-rooms' && window.location.href != 'https://www.circu.net/test') {
      setTimeout(function() {
        $('#myPopupExitOurMagicalRooms').css('display', 'flex');
      }, 200);
      var date = new Date();
      var minutes = 20;
      date.setTime(date.getTime() + (minutes * 60 * 1000));
      Cookies.set('our-magical-rooms', '1', {
        expires: date
      });
    }
  });
  $(".close, .myPopupExitOurMagicalRooms").on("click", function() {
    $(".myPopupExitOurMagicalRooms, .popup-content").css('display', 'none');
  });
</script> -->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    $(window).on('load', function() {
        $(document).on("mouseleave", function(e) {
            if (e.pageY - $(window).scrollTop() <= 1 && $.cookie('exit') == null) {
                console.log('saida');
                setTimeout(function() {
                    if ($('#popup-entrance-new-products').hasClass("popup-active")) {
                        console.log('saida');
                    } else {
                        $('#popupinspiration2').modal('show');
                        $('#popupinspiration2').addClass("popup-active");

                        var date = new Date();
                        var minutes = 10;
                        date.setTime(date.getTime() + (minutes * 60 * 1000));
                        $.cookie('exit', '1', {
                            expires: date
                        });
                    }
                    var slidepopup222 = new Swiper('.slide-popup22 .swiper-container', {
                        slidesPerView: 3,
                        loop: true,
                        navigation: {
                            nextEl: '.slide-popup22 .swiper-button-next',
                            prevEl: '.slide-popup22 .swiper-button-prev',
                        },
                        breakpoints: {
                            // when window width is >= 320px
                            320: {
                                slidesPerView: 1,
                                spaceBetween: 0
                            },
                            // when window width is >= 640px
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 4
                            },
                            992: {
                                slidesPerView: 3,
                                spaceBetween: 4
                            }
                        }
                    });

                    var slidepopup2222 = new Swiper('.slide-popup2222 .swiper-container', {
                        slidesPerView: 4,
                        loop: true,
                        navigation: {
                            nextEl: '.slide-popup2222 .swiper-button-next',
                            prevEl: '.slide-popup2222 .swiper-button-prev',
                        },
                        breakpoints: {
                            // when window width is >= 320px
                            320: {
                                slidesPerView: 1,
                                spaceBetween: 0
                            },
                            // when window width is >= 640px
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 4
                            },
                            992: {
                                slidesPerView: 3,
                                spaceBetween: 4
                            },
                            1300: {
                                slidesPerView: 4,
                                spaceBetween: 4
                            }
                        }
                    });

                }, 400);

            }
        });
    });
</script>
<script language='javascript'>
    $(window).on('load', function() {
        if ($(window).width() > 992) {
            if ($.cookie('entrance') == null && window.location.href == 'https://www.circu.net/' || window
                .location.href == 'https://www.circu.net/our-magical-rooms') {
                console.log($('#popup-entrance-new-products').attr('class'));
                setTimeout(function() {
                    if ($('#popupinspiration2').hasClass("popup-active")) {
                        console.log('entrada1');
                    } else {
                        console.log('entrada2');
                        $('#popup-entrance-new-products').modal('show');
                        $('#popup-entrance-new-products').addClass("popup-active");

                        var date = new Date();
                        var minutes = 30;
                        date.setTime(date.getTime() + (minutes * 60 * 1000));
                        $.cookie('entrance', '1', {
                            expires: date
                        });
                    }
                }, 15000);
            }
        }
    });

    $('#popupinspiration2').on('modal:close', function() {
        $('#popupinspiration2').removeClass("popup-active");
        if ($.cookie('entrance') == null && window.location.href == 'https://www.circu.net/' || window.location
            .href == 'https://www.circu.net/our-magical-rooms') {
            console.log($('#popup-entrance-new-products').attr('class'));
            setTimeout(function() {
                $('#popup-entrance-new-products').modal('show');
                $('#popup-entrance-new-products').addClass("popup-active");
                var date = new Date();
                var minutes = 30;
                date.setTime(date.getTime() + (minutes * 60 * 1000));
                $.cookie('entrance', '1', {
                    expires: date
                });
            }, 15000);
        }
    });

    $('#popup-entrance-new-products').on('modal:close', function() {
        $('#popup-entrance-new-products').removeClass("popup-active");
    });
</script>
<script>
    $(window).load(function() {
        $("a").removeClass("modal-cursor-disable");
    });
</script>
<!-- @if(json_decode($geo) != null)
<script type="text/javascript">
  var country = "php echo json_decode($geo)->geoplugin_countryName; ?>";
  console.log(country);
  if (((country == "Canada") || (country == "United States")) && Cookies.get('exit_popup') != null) {
    setTimeout(function() {
      $("#myPopupExitUSA").addClass("active");
    }, 200);
  } else if ((country == "France") && Cookies.get('exit_popup') != null) {
    setTimeout(function() {
      $("#myPopupExitFrance").addClass("active");
    }, 200);
  } else if (Cookies.get('exit_popup') == null) {
    $(document).one("mouseleave", function(e) {
      if (e.pageY - $(window).scrollTop() <= 1) {
        setTimeout(function() {
          $("#myPopupExit").addClass("active");
        }, 200);
        var date = new Date();
        var minutes = 20;
        date.setTime(date.getTime() + (minutes * 60 * 1000));
        Cookies.set('exit_popup', '1', {
          expires: date
        });
      }
    });
  }
  $(".close, .myPopupExit").on("click", function() {
    $(".myPopupExit, .popup-content").removeClass("active");
  });
</script>
@endif -->

<script type="text/javascript">
    function init() {
        var imgDefer = document.getElementsByTagName('img');
        var vidDefer = document.getElementsByTagName('iframe');
        for (var i = 0; i < imgDefer.length; i++) {
            if (imgDefer[i].getAttribute('data-src')) {
                imgDefer[i].setAttribute('srcset', imgDefer[i].getAttribute('data-src'));
            }
        }
        for (var i = 0; i < vidDefer.length; i++) {
            if (vidDefer[i].getAttribute('data-src')) {
                vidDefer[i].setAttribute('src', vidDefer[i].getAttribute('data-src'));
            }
        }
    }
    window.onload = init;



    $(".origin").val(tracker.url_origin);
    $(".referrer").val(tracker.referrer);
    $(".lead_path").val(tracker.flow);

    $(".form-parsley").on('submit', function(e) {
        var form = $(this);
        form.parsley().validate();
        if (!form.parsley().isValid()) {
            e.preventDefault();
        } else {
            $('.btn-prevent-multiple').attr('disabled', 'true');
            $('.spinner-visible').show();
        }
    });


    // $(window).load(function() {
    //   var elementPosition = $('#menu-fixed').offset();
    //   var elementHeightOffset = $('#intro').height();
    //   $(window).scroll(function() {
    //     if ($(window).scrollTop() > elementHeightOffset) {
    //       $('#menu-fixed').css('position', 'fixed').css('top', '26px').css('z-index', '10050');
    //       $('#main-slide').css('margin-top', '100px');

    //     } else {
    //       $('#menu-fixed').css('position', 'relative').css('top', '0px');
    //       $('#main-slide').css('margin-top', '0');
    //     }
    //   });
    // });
    $(window).load(function() {
        var elementPosition = $('#menu-fixed').offset();
        var elementHeightOffset = $('#intro').height();
        console.log($('#menu-fixed').height());
        $(window).scroll(function() {
            if ($(window).scrollTop() > $('#menu_top').height()) {
                $('#menu-fixed').css('position', 'fixed').css('top', '0').css('z-index', '10050');
                $('#main-slide').css('margin-top', $('#menu-fixed').height());
                $('#body').css('margin-top', $('#menu-fixed').height());
                $('#menu_top').css('bottom', '0').css('z-index', '1050').css('top', 'unset');
            } else {
                $('#menu_top').css('bottom', 'unset').css('z-index', '0').css('top', '0');
                $('#menu-fixed').css('position', 'relative').css('top', '0px');
                $('#main-slide').css('margin-top', '0');
                $('#body').css('margin-top', '0');
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

<!-- Facebook Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1768005533515286'); // Insert your pixel ID here.
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1768005533515286&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->

<!--Start of Live Chat Script -->
<script type="text/javascript">
    (function() {
        var se = document.createElement('script');
        se.type = 'text/javascript';
        se.async = true;
        se.src = 'https://storage.googleapis.com/code.snapengage.com/js/c7a6d9b8-e41d-4c71-ab3d-5e858175c67d.js';
        var done = false;
        se.onload = se.onreadystatechange = function() {
            if (!done && (!this.readyState || this.readyState === 'loaded' || this.readyState === 'complete')) {
                done = true;
                /* Place your SnapEngage JS API code below */
                /* SnapEngage.allowChatSound(true); Example JS API: Enable sounds for Visitors. */
            }
        };
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(se, s);
    })();
</script>
<!--End of Live Chat Script-->

<!-- Código do Google para tag de remarketing CC -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 858942285;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;

    /* ]]> */
</script>
<!-- <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"> -->
<script>
    deferLoadingScript('//www.googleadservices.com/pagead/conversion.js');
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/858942285/?guid=ON&amp;script=0" />
    </div>
</noscript>
<style>
    iframe[name='google_conversion_frame'] {
        height: 0 !important;
        width: 0 !important;
        line-height: 0 !important;
        font-size: 0 !important;
        margin-top: -13px;
        float: left;
    }
</style>

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
<script>
    $(".country-ebook").change(function() {
        var selected_option = $(this).val();
        if (selected_option === 'United States') {
            $('.state-ebook').removeClass('d-none').children().attr('data-parsley-required', 'true');
        }
        if (selected_option != 'United States') {
            $('.state-ebook').addClass('d-none').children().attr('data-parsley-required', 'false');
        }
    });
    $(".country-price").change(function() {
        var selected_option = $(this).val();
        if (selected_option === 'United States') {
            $('.state-price').removeClass('d-none').children().attr('data-parsley-required', 'true');
        }
        if (selected_option != 'United States') {
            $('.state-price').addClass('d-none').children().attr('data-parsley-required', 'false');
        }
    });
    $('.talk-with-us').click(function() {
        SnapEngage.startLink();
    });
</script>
<!-- /END Google Code for Remarketing Tag -->

@section('footer-includes')
@show