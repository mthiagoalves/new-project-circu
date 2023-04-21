@extends('layouts.master')

@section('main-content')

<div class="container-fluid">

    <div class="row">

        <div class="col-12 text-center align-self-center py-5" style="background-color:#e2eced;">

            <h4 class="text-uppercase mb-4 pt-5">THANK YOU FOR YOUR DOWNLOAD</h4>

            <p class="col-12 font-italic font-weight-bold mr-2 ml-2 mb-5">
                Welcome to Circu's Magical World.<br>
                If you need anything else, please contact us.
            </p>

            <a class="btn-border-green col-lg-2 col-md-4 col-sm-3 col-xs-1" href="{{ URL::previous() }}" role="button"></i><i class="fas fa-chevron-left"></i> RETURN</a>

            <a class="btn-border-blue col-lg-2 col-md-4 col-sm-3 col-xs-1" href="https://www.circu.net/docs/stocklist-circu-magical-furniture.pdf" target="_blank" role="button"><b>STOCKLIST</a>

            <div class="col-12 social_actions pb-5">
                <h5 class="mt-5 mb-2">Follow us</h5>
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

@endsection

@section('meta')
<title>Circu Magical Furniture - Luxury brand for children</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="All Products Circu Magical Furniture - Luxury brand for children" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="http://www.circu.net/products" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection