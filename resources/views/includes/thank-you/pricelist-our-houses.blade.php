@extends('layouts.master') @section('main-content')

<div class="container-fluid">

    <div class="row">

        <div class="col-12 text-center align-self-center py-5">

            <h4 class="text-uppercase mb-4 pt-2" style="color: #8bb9b6 !important;">Thank you for your interest!</h4>

            <p class="col-12 font-weight-bold mr-2 ml-2 mb-4" style="color: #666666 !important;line-height: 25px;">
                Our team will enter in contact with you as soon as possible with more details about<br> this first series of our magical kid's bedrooms and playgrounds ideas and the featured products.<br> If you are in a worry please contact us at <br>                <a href="mailto:info@ciru.net" style="text-decoration:none !important; color: #8bb9b6 !important;">info@ciru.net</a> or call <a href="tel:+351 914 929 073" style="text-decoration:none !important; color: #8bb9b6 !important;">+351 914 929 073</a>
            </p>

            <p class="col-12 font-weight-bold mr-2 ml-2 mb-4" style="color: #8bb9b6 !important;">
                <a href="https://api.whatsapp.com/send?phone=351911780428&amp;text=Hello, I'm interested in knowing more about Circu. Can you help me?" target="_blank" style="text-decoration:none !important; color: #8bb9b6 !important;font-size: 15px;">If you have an urgent matter, please contact throughout <i style="font-size: 20px;" class="fab fa-whatsapp"></i></a>
            </p>

            <p class="col-12 font-weight-bold mr-2 ml-2 mb-4" style="color: #8bb9b6 !important;">
                <a href="{{ URL::previous() }}" style="text-decoration:none !important; color: #8bb9b6 !important;font-size: 15px;"><i class="fas fa-caret-left"></i> <span style="color: #8bb9b6 !important;font-size: 15px; border-bottom:1px solid #8bb9b6;">GO BACK</span></i></a>
            </p>

            <p class="col-12 font-weight-bold mr-2 ml-2 mb-4" style="color: #8bb9b6 !important;font-size: 18px;">
                Meanwhile get inspired to create your room!
            </p>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 p-0">
                    <div class="col-12 col-md-6 float-left pb-3 pb-md-0">
                        <div class="col-12 pb-2">
                            <a href="https://www.circu.net/ebook/catalogue-circu-magical-furniture">
                                <img class="img-fluid" src="/img/our-houses/thank-you/ty-catalogue.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 float-left">
                        <div class="col-12 pb-2">
                            <a href="https://www.circu.net/request-pricelist">
                                <img class="img-fluid" src="/img/our-houses/thank-you/ty-ebook.jpg">
                            </a>
                        </div>

                    </div>
                </div>
            </div>



            <div class="col-12 social_actions pb-5">
                <h5 class="mt-5 mb-2" style="color: #8bb9b6 !important;">In every story there is a chapter, don't miss ours!</h5>
                <a href="https://instagram.com/circu_magical_furniture/" target="_blank">
                    <i style="color: #8bb9b6 !important;" class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/circu-magicalfurniture/" target="_blank">
                    <i style="color: #8bb9b6 !important;" class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://www.pinterest.com/circudesign/" target="_blank">
                    <i style="color: #8bb9b6 !important;" class="fab fa-pinterest-p"></i>
                </a>
                <a href="https://www.facebook.com/circumagicalfurniture/" target="_blank">
                    <i style="color: #8bb9b6 !important;" class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/circu_magical" target="_blank">
                    <i style="color: #8bb9b6 !important;" class="fab fa-twitter"></i>
                </a>
                <a href="https://www.youtube.com/channel/UC2_hoG6aHFGnqF9SVTkhwxA" target="_blank">
                    <i style="color: #8bb9b6 !important;" class="fab fa-youtube"></i>
                </a>
            </div>


        </div>

    </div>

</div>

<div class="container-fluid no-gutters pt-4 pb-4">

    <div class="col-12 max-width-site container">

        <div class="row">

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 my-1">
                <a href="https://www.circu.net/products" onclick="ga('send','event','Banner','View Now','Thankyoupage-bestsellers');"><img src="/img/thank-you/allproducts.jpg" class="img-fluid d-block mx-auto"></a>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 my-1">
                <a href="https://www.circu.net/blog/" onclick="ga('send','event','Banner','Read More','Thankyoupage-CircuBlog');"><img src="/img/thank-you/blog.jpg" class="img-fluid d-block mx-auto"></a>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 my-1">
                <a href="https://www.circu.net/download-inspirations-catalogue" onclick="ga('send','event','Banner','Free Download','Thankyoupage-InspirationBook');"><img src="/img/thank-you/insp-book.jpg" class="img-fluid d-block mx-auto"></a>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 my-1">
                <a href="https://www.circu.net/download-catalogue" onclick="ga('send','event','Banner','Free Download','Thankyoupage-Catalogue');"><img src="/img/thank-you/catalogue.jpg" class="img-fluid d-block mx-auto"></a>
            </div>

        </div>

    </div>

</div>


@endsection @section('meta')
<title>Circu Magical Furniture - Luxury brand for children</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="All Products Circu Magical Furniture - Luxury brand for children" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="http://www.circu.net/products" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" /> @endsection