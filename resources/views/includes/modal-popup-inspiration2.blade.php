<style>
    .button-discover-more-popup {
        color: #3a2d24;
        background: white;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 0.5px;
        padding: 0.5rem 1rem;
        border: none;
        line-height: 1;
        font-size: 0.75rem;
    }

    .blocker {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media only screen and (min-width: 992px) and (max-width: 1450px) {
        .popupinspiration2 {
            width: 70% !important;
            top: 40% !important;
        }
    }

    @media only screen and (min-width: 1450px) and (max-width: 1650px) {
        .popupinspiration2 {
            width: 65% !important;
            top: 30% !important;
        }
    }

    @media only screen and (min-width: 1650px) {
        .popupinspiration2 {
            width: 55% !important;
            top: 18% !important;
        }
    }

    @media only screen and (min-width: 1350px) {

        .product--title .name,
        .product--title .sub_category {
            font-size: 0.73rem !important;
        }
    }

    @media only screen and (max-width:1350px) {

        .product--title .name,
        .product--title .sub_category {
            font-size: 0.70rem !important;
        }
    }


    #popupinspiration2 a.close-modal {
        position: absolute;
        top: 5px;
        right: 6px !important;
        display: block;
        width: 12px;
        height: 12px;
        text-indent: -9999px;
        background: url(/img/icons/forms/close-icon2.png) no-repeat 0 0 !important;
    }

    #popupinspiration2 .slide-popup22 .arrow::after,
    #popupinspiration2 .slide-popup2222 .arrow::after {
        content: " ";
        width: 2px;
        background: #959092;
        height: 18px;
        position: absolute;
        top: -10px;
        transform: rotate(-60deg);
        right: -9px;
        transition: width 250ms ease
    }

    #popupinspiration2 .slide-popup22 .arrow::before,
    #popupinspiration2 .slide-popup2222 .arrow::before {
        content: " ";
        width: 2px;
        background: #959092;
        height: 18px;
        position: absolute;
        top: -10px;
        transform: rotate(60deg);
        left: -9px;
        transition: width 250ms ease
    }

    #popupinspiration2 .arrow-left {
        transform: rotate(-90deg);
    }

    #popupinspiration2 .arrow-right {
        transform: rotate(90deg);
    }

    #popupinspiration2 .swiper-button-next:hover .arrow::after,
    #popupinspiration2 .swiper-button-prev:hover .arrow::after,
    #popupinspiration2 .swiper-button-next:hover .arrow::before,
    #popupinspiration2 .swiper-button-prev:hover .arrow::before {
        width: 2px;
    }

    #popupinspiration2 .slide-popup22 .swiper-button-next,
    #popupinspiration2 .slide-popup2222 .swiper-button-next {
        right: 0px !important;
        left: auto;
    }

    #popupinspiration2 .slide-popup22 .swiper-button-prev,
    #popupinspiration2 .slide-popup2222 .swiper-button-prev {
        left: 0px !important;
        right: auto;
    }

    #popupinspiration2 .slide-popup22 .swiper-button-prev,
    #popupinspiration2 .slide-popup2222 .swiper-button-prev {
        color: white;
        height: 45px;
    }

    #popupinspiration2 .slide-popup22 .swiper-button-next,
    #popupinspiration2 .slide-popup2222 .swiper-button-next {
        color: white;
        height: 45px;
    }

    #popupinspiration2 .slide-popup22 .swiper-button-next:after,
    #popupinspiration2 .slide-popup22 .swiper-button-prev:after,
    #popupinspiration2 .slide-popup22 .swiper-button-prev:after,
    #popupinspiration2 .slide-popup22 .swiper-button-next:after,
    #popupinspiration2 .slide-popup2222 .swiper-button-next:after,
    #popupinspiration2 .slide-popup2222 .swiper-button-prev:after,
    #popupinspiration2 .slide-popup2222 .swiper-button-prev:after,
    #popupinspiration2 .slide-popup2222 .swiper-button-next:after {
        content: '' !important;
    }

    #popupinspiration2 .slide-popup22 .swiper-button-prev,
    #popupinspiration2 .slide-popup22 .swiper-button-next,
    #popupinspiration2 .slide-popup2222 .swiper-button-prev,
    #popupinspiration2 .slide-popup2222 .swiper-button-next {
        background-image: none !important;
    }

    #popupinspiration2 .titles1 .titles {
        color: #9ec1bd;
        text-transform: uppercase;
        font-size: 15px;
        line-height: 1.2;
        font-weight: 600;
        letter-spacing: 1px;
    }

    #popupinspiration2 .titles2 .titles {
        color: #9ec1bd;
        text-transform: uppercase;
        font-size: 14px;
        line-height: 1.2;
        font-weight: 600;
        letter-spacing: 1px;
    }

    #popupinspiration2 .title-ebook {
        text-transform: uppercase;
        line-height: 1.2;
        font-weight: 600;
        letter-spacing: 1px;
        margin: 0px 0px 7px 0px;
        font-size: 0.73rem !important;
        font-family: 'Raleway', sans-serif;
        text-align: center;
        color: #666666;
    }

    @media (min-width:900px) and (max-width:1750px) {
        #popupinspiration2 .title-ebook {
            text-transform: uppercase;
            line-height: 1.2;
            font-weight: 600;
            letter-spacing: 1px;
            margin: 0px 0px 7px 0px;
            font-size: 0.73rem !important;
            font-family: 'Raleway', sans-serif;
            text-align: center;
            color: #666666;
        }
    }

    #popupinspiration2 .div-right {
        height: 100%;
        bottom: 0;
        position: absolute;
        text-align: center;
    }

    #popupinspiration2 .div-right .title {
        font-size: 11px;
        color: #fff;
        font-weight: bold;
        margin-bottom: 0.4rem;
    }

    #popupinspiration2 .div-right .subtitle {
        font-size: 10px;
        color: #fff;
        font-weight: lighter;
        margin-bottom: 1rem;
    }

    #popupinspiration2 .btnDownload {
        font-size: 11px;
        letter-spacing: 1px;
        color: #fff;
        background-color: #9ec1bd;
        border: 1px solid #9ec1bd !important;
        padding: 5px 20px 4px;
        margin: 12px auto 0;
    }

    #popupinspiration2 .div-center-main {
        position: absolute;
        bottom: 6%;
        text-align: center;
    }

    #popupinspiration2 .div-center-main .title-main {
        color: #fff;
        font-weight: bold;
        margin-bottom: 0.4rem;
        font-size: 16px;
        line-height: 20px;
    }

    #popupinspiration2 .div-center-main .subtitle-main {
        color: #fff;
        font-weight: lighter;
        margin-bottom: 1.4rem;
        font-size: 12px;
    }

    #popupinspiration2 .div-center-main .btn-main {
        color: #a1beba;
        background-color: #fff;
        border: 1px solid #fff;
        padding: 6px 18px;
        font-size: 12px;
        letter-spacing: 1px;
        font-weight: 600;
    }

    #popupinspiration2 .div-center-slide-s .title {
        font-size: 12px;
        color: #a0a0a0;
        font-weight: bold;
        margin: 0;
        padding-top: .5rem !important;
    }

    #popupinspiration2 .div-center-slide-s .subtitle {
        font-size: 10px;
        color: #fff;
        font-weight: lighter;
        margin-bottom: 1rem;
    }

    #popupinspiration2 .div-center-slide-s .btnDownload {
        font-size: 10px;
        color: #fff;
        border: 1px solid #fff;
        font-weight: lighter;
        padding: 8px 17px;
    }

    @media (max-width:1555px) and (min-width: 1400px) {
        #popupinspiration2 .div-right {
            width: 240px;
        }
    }

    @media (max-width:1400px) and (min-width: 1200px) {
        #popupinspiration2 .div-right {
            width: 200px;
        }
    }

    #popupinspiration2 .modal-content {
        width: 100% !important;
    }

    #popupinspiration2 .img-size-pop {
        width: 75%;
        margin: 0 auto;
        padding-bottom: .2rem !important;
        padding-top: .5rem !important;
    }

    #popupinspiration2 a.close-modal {
        position: absolute;
        top: 8px;
        right: 6px !important;
        display: block;
        width: 12px;
        height: 12px;
        text-indent: -9999px;
        background: url(/img/popup/close-icon2.png) no-repeat 0 0 !important;
    }

    .product--title .sub_category {
        text-transform: lowercase !important;
    }

    .popupinspiration2 .col-small {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 28.76%;
        flex: 0 0 28.76%;
        max-width: 28.76%;
    }

    .popupinspiration2 .col-large {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 42.48%;
        flex: 0 0 42.48%;
        max-width: 42.48%;
    }
</style>
<div class="modal modal-popup popupinspiration2" id="popupinspiration2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="    padding: 0px;
    border-radius: 0px;
    max-width: none;
    display: none;
    left: auto;
    top: auto;">
    <div class="modal-dialog modal-lg" style="margin:0; max-width:100% !important;" aria-hidden="true">
        <div class="modal-content" style="border:none;" aria-hidden="true">
            <div class="modal-body p-0" aria-hidden="true">
                <div class="col-12 p-0" style="background-color: #fff;">
                    <div class="col-12 p-0 py-2 text-center titles1">
                        <p class="m-0 titles">MAGICAL KIDS ROOM IDEAS</p>
                    </div>
                    <div class="row m-0 position-relative">
                        <div class="col-small p-0">
                            <div class="col-12 p-0" style="padding: 0px 3px 4px 0px !important;">
                                <a href="https://www.circu.net/projects/an-outer-space-mission/?utm_origem=website&amp;utm_meio=exitpopup-toinspire&amp;utm_conteudo=circu-our-house&amp;utm_campanha=roombyroom">
                                    <img src="/img/popup/to-inspire/new/1.jpg" srcset="/img/popup/to-inspire/new/1-2x.jpg 2x" class="img-fluid" style="width: 100%;">
                                </a>
                            </div>
                        </div>
                        <div class="col-large p-0">
                            <div class="col-12 p-0" style="padding: 0px 3px 4px 0px !important;">
                                <a href="https://www.circu.net/projects/dreamhouse-adventures-bedroom/?utm_origem=website&amp;utm_meio=exitpopup-toinspire&amp;utm_conteudo=circu-our-house&amp;utm_campanha=roombyroom">
                                    <img src="/img/popup/to-inspire/new/4.jpg" srcset="/img/popup/to-inspire/new/2-2x.jpg 2x" class="img-fluid" style="width: 100%;">
                                </a>
                            </div>
                        </div>
                        <div class="col-small p-0">
                            <div class="col-12 p-0" style="padding: 0px 0px 4px 3px !important;">
                                <a href="https://www.circu.net/inspirations/uncategorized/bunny-shaped-bed-your-kids-room-needs-is-our-mr-bunny-bed/?utm_origem=website&amp;utm_meio=exitpopup-toinspire&amp;utm_conteudo=circu-our-house&amp;utm_campanha=roombyroom">
                                    <img src="/img/popup/to-inspire/new/3.jpg" srcset="/img/popup/to-inspire/new/3-2x.jpg 2x" class="img-fluid" style="width: 100%;">
                                </a>
                            </div>

                        </div>
                        <div class="col-12 div-center-main" style="bottom: 5%;z-index: 1;"><a href="https://www.circu.net/inspirations/?utm_origem=website&amp;utm_meio=exitpopup-toinspire&amp;utm_conteudo=circu-our-house&amp;utm_campanha=roombyroom">
                                <!-- <p class="title-main">INSIDE EVERY CHILD'S DREAM BEDROOM</p> -->
                            </a><a href="https://www.circu.net/inspirations/?utm_origem=website&amp;utm_meio=exitpopup-toinspire&amp;utm_conteudo=circu-our-house&amp;utm_campanha=roombyroom" target="_blank" class="btn-main">SEE ALL ROOMS</a>
                        </div>
                    </div>
                    <div class="col-12 p-0 slide-popup2222 pt-3">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <div class="position-absolute" style="top: 2%;right: 2%;width: 20%;">
                                            <img src="/img/icons/product-new.png">
                                        </div>
                                        <img src="/img/products/thumbnails/magical-market-playroom-circu-magical-furniture.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-0 px-0">
                                                <div class="col-12 product--title px-0">
                                                    <span class="name m-0 " style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Magical Market</sp>
                                                        <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Playground</span>
                                                </div>
                                            </div>
                                            <div class="col-12 pb-3">
                                                <a href="https://www.circu.net/products/magical-market-playroom/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-magical-market-playroom&utm_campanha=product" target="_blank" class="btnDownload">
                                                    GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="position-absolute" style="top: 2%;right: 2%;width: 20%;">
                                            <img src="/img/icons/product-new.png">
                                        </div>
                                        <img src="/img/products/thumbnails/magical-market-playroom-circu-magical-furniture.png" class="img-fluid" class="img-fluid d-block d-lg-none img-size-pop">>
                                        <div class="col-12 pb-0  px-0">
                                            <div class="col-12 product--title px-0">
                                                <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Magical Market</span>
                                                <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Playground</span>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/products/magical-market-playroom/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-magical-market-playroom&utm_campanha=product" target="_blank" class="btnDownload">
                                                GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <div class="position-absolute" style="top: 2%;right: 2%;width: 20%;">
                                            <img src="/img/icons/product-new.png">
                                        </div>
                                        <img src="/img/products/thumbnails/bubble-gum-gym-circu-magical-furniture.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-0 px-0">
                                                <div class="col-12 product--title px-0">
                                                    <span class="name m-0 " style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Bubble Gum</sp>
                                                        <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Gym</span>
                                                </div>
                                            </div>
                                            <div class="col-12 pb-3">
                                                <a href="https://www.circu.net/products/bubble-gum-gym/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-bubble-gum-gym&utm_campanha=product" target="_blank" class="btnDownload">
                                                    GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="position-absolute" style="top: 2%;right: 2%;width: 20%;">
                                            <img src="/img/icons/product-new.png">
                                        </div>
                                        <img src="/img/products/thumbnails/bubble-gum-gym-circu-magical-furniture.png" class="img-fluid" class="img-fluid d-block d-lg-none img-size-pop">>
                                        <div class="col-12 pb-0  px-0">
                                            <div class="col-12 product--title px-0">
                                                <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Bubble Gum</span>
                                                <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Gym</span>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/products/bubble-gum-gym/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-bubble-gum-gym&utm_campanha=product" target="_blank" class="btnDownload">
                                                GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <div class="position-absolute" style="top: 2%;right: 2%;width: 20%;">
                                            <img src="/img/icons/product-new.png">
                                        </div>
                                        <img src="/img/products/thumbnails/mr-bunny-bed-circu-magical-furniture.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-0 px-0">
                                                <div class="col-12 product--title px-0">
                                                    <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Mr. Bunny</span>
                                                    <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Bed</span>
                                                </div>
                                            </div>
                                            <div class="col-12 pb-3">
                                                <a href="https://www.circu.net/products/mr-bunny-bed/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-mr-bunny-bed&utm_campanha=product" target="_blank" class="btnDownload">
                                                    GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="position-absolute" style="top: 2%;right: 2%;width: 20%;">
                                            <img src="/img/icons/product-new.png">
                                        </div>
                                        <img src="/img/products/thumbnails/mr-bunny-bed-circu-magical-furniture.png" class="img-fluid d-block d-lg-none img-size-pop">
                                        <div class="col-12 pb-0 px-0">
                                            <div class="col-12 product--title px-0">
                                                <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Mr. Bunny</span>
                                                <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Bed</span>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/products/mr-bunny-bed/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-mr-bunny-bed&utm_campanha=product" target="_blank" class="btnDownload">
                                                GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/products/thumbnails/cloud-lamp-big-circu-magical-furniture.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-0 px-0">
                                                <div class="col-12 product--title px-0">
                                                    <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Cloud Lamp Big</span>
                                                    <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Suspension Lamp</span>
                                                </div>
                                            </div>
                                            <div class="col-12 pb-3">
                                                <a href="https://www.circu.net/products/cloud-lamp-big/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-cloud-lamp-big&utm_campanha=product" target="_blank" class="btnDownload">
                                                    GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <img src="/img/products/thumbnails/cloud-lamp-big-circu-magical-furniture.png" class="img-fluid d-block d-lg-none img-size-pop">
                                        <div class="col-12 pb-0 px-0">
                                            <div class="col-12 product--title px-0">
                                                <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Cloud Lamp</span>
                                                <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Suspension Lamp</span>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/products/cloud-lamp-big/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-cloud-lamp-big&utm_campanha=product" target="_blank" class="btnDownload">
                                                GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <div class="position-absolute" style="top: 2%;right: 2%;width: 20%;">
                                            <img src="/img/icons/product-new.png">
                                        </div>
                                        <img src="/img/products/thumbnails/mogli-playhouse-circu-magical-furniture.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-0 px-0">
                                                <div class="col-12 product--title px-0">
                                                    <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Mogli Playhouse</span>
                                                    <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Bed / Gym</span>
                                                </div>
                                            </div>
                                            <div class="col-12 pb-3">
                                                <a href="https://www.circu.net/products/mogli-playhouse/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-dream-desk&utm_campanha=product" target="_blank" class="btnDownload">
                                                    GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="position-absolute" style="top: 2%;right: 2%;width: 20%;">
                                            <img src="/img/icons/product-new.png">
                                        </div>
                                        <img src="/img/products/thumbnails/mogli-playhouse-circu-magical-furniture.png" class="img-fluid d-block d-lg-none img-size-pop">
                                        <div class="col-12 pb-0 px-0">
                                            <div class="col-12 product--title px-0">
                                                <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Mogli Playhouse</span>
                                                <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Bed / Gym</span>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/products/mogli-playhouse/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-dream-desk&utm_campanha=product" target="_blank" class="btnDownload">
                                                GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/products/thumbnails/dream-desk-circu-magical-furniture.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-0 px-0">
                                                <div class="col-12 product--title px-0">
                                                    <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Dream Desk</span>
                                                    <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Desk</span>
                                                </div>
                                            </div>
                                            <div class="col-12 pb-3">
                                                <a href="https://www.circu.net/products/dream-desk/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-dream-desk&utm_campanha=product" target="_blank" class="btnDownload">
                                                    GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <img src="/img/products/thumbnails/dream-desk-circu-magical-furniture.png" class="img-fluid d-block d-lg-none img-size-pop">
                                        <div class="col-12 pb-0 px-0">
                                            <div class="col-12 product--title px-0">
                                                <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Dream Desk</span>
                                                <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Desk</span>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/products/dream-desk/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-dream-desk&utm_campanha=product" target="_blank" class="btnDownload">
                                                GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/products/thumbnails/magical-mirror-circu-magical-furniture.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-0 px-0">
                                                <div class="col-12 product--title px-0">
                                                    <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Magical Mirror</span>
                                                    <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Mirror</span>
                                                </div>
                                            </div>
                                            <div class="col-12 pb-3">
                                                <a href="https://www.circu.net/products/magical-mirror/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-magical-mirror&utm_campanha=product" target="_blank" class="btnDownload">
                                                    GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <img src="/img/products/thumbnails/magical-mirror-circu-magical-furniture.png" class="img-fluid d-block d-lg-none img-size-pop">
                                        <div class="col-12 pb-0 px-0">
                                            <div class="col-12 product--title px-0">
                                                <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Magical Mirror</span>
                                                <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Mirror</span>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/products/magical-mirror/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-magical-mirror&utm_campanha=product" target="_blank" class="btnDownload">
                                                GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/products/thumbnails/little-cloud-nightstand-circu-magical-furniture.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-0 px-0">
                                                <div class="col-12 product--title px-0">
                                                    <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Little Cloud</span>
                                                    <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Nightstand</span>
                                                </div>
                                            </div>
                                            <div class="col-12 pb-3">
                                                <a href="https://www.circu.net/products/little-cloud-nightstand/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-little-cloud-nightstand&utm_campanha=product" target="_blank" class="btnDownload">
                                                    GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <img src="/img/products/thumbnails/little-cloud-nightstand-circu-magical-furniture.png" class="img-fluid d-block d-lg-none img-size-pop">
                                        <div class="col-12 pb-0 px-0">
                                            <div class="col-12 product--title px-0">
                                                <span class="name m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;font-weight: 600 !important;text-transform: uppercase;">Little Cloud</span>
                                                <span class="sub_category m-0" style="float: none !important;font-family: 'Raleway', sans-serif;text-align: center;color: #666666;">Nightstand</span>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/products/little-cloud-nightstand/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-little-cloud-nightstand&utm_campanha=product" target="_blank" class="btnDownload">
                                                GET <b>PRICE</b> <i class="fas fa-caret-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next">
                                <i class="arrow arrow-right"></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="arrow arrow-left"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0 pt-3 pb-2 text-center titles2">
                        <p class="m-0 titles">JUST RELEASED!</p>
                    </div>
                    <div class="col-12 p-0 slide-popup22">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/popup/new-products-2022.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-3">
                                                <p class="title-ebook">NEW PRODUCTS 2022<br>&nbsp;</p>
                                                <a href="https://www.circu.net/ebook/new-products-2022/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-catalogue-new-products-2022&utm_campanha=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="col-12 text-center ">
                                            <p class="title-ebook">NEW PRODUCTS 2022<br>&nbsp;</p>
                                        </div>
                                        <img src="/img/popup/new-products-2022.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/ebook/new-products-2022/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-catalogue-new-products-2022&utm_campanha=ebook" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/popup/catalogue-annual-sales.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-3">
                                                <p class="title-ebook">ANNUAL SALES<br>&nbsp;</p>
                                                <a href="https://www.circu.net/ebook/catalogue-annual-sales/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-catalogue-annual-sales&utm_campanha=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="col-12 text-center ">
                                            <p class="title-ebook">ANNUAL SALES<br>&nbsp;</p>
                                        </div>
                                        <img src="/img/popup/catalogue-annual-sales-m.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/ebook/catalogue-annual-sales/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-catalogue-annual-sales&utm_campanha=ebook" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/popup/100-luxury-kids-rooms.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-3">
                                                <p class="title-ebook">100 LUXURY KIDS ROOMS<br>&nbsp;</p>
                                                <a href="https://www.circu.net/ebook/100-luxury-kids-rooms?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-inspirationbookcc&utm_campanha=100luxurykidsroom" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="col-12 text-center ">
                                            <p class="title-ebook">100 LUXURY KIDS ROOMS<br>&nbsp;</p>
                                        </div>
                                        <img src="/img/popup/100-luxury-kids-rooms.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/ebook/100-luxury-kids-rooms?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-inspirationbookcc&utm_campanha=100luxurykidsroom" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/popup/catalogue.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-3">
                                                <p class="title-ebook">CIRCU CATALOGUE<br>&nbsp;</p>
                                                <a href="https://www.circu.net/ebook/catalogue-circu-magical-furniture/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-catalogue-circu-magical-furniture&utm_campanha=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="col-12 text-center ">
                                            <p class="title-ebook">CIRCU CATALOGUE<br>&nbsp;</p>
                                        </div>
                                        <img src="/img/popup/catalogue-m.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/ebook/catalogue-circu-magical-furniture/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-catalogue-circu-magical-furniture&utm_campanha=ebook" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/popup/new-ebook-rooms.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-3">
                                                <p class="title-ebook">MAGICAL KIDS BEDROOMS<br>AND PLAYGROUND IDEAS</p>
                                                <a href="https://www.circu.net/ebook/magical-kids-bedrooms-playground-ideas?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-magical-kids-bedrooms-ebook&utm_campanha=ourmagicalrooms" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="col-12 text-center ">
                                            <p class="title-ebook">MAGICAL KIDS BEDROOMS<br>AND PLAYGROUND IDEAS</p>
                                        </div>
                                        <img src="/img/popup/new-ebook-rooms-m.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/ebook/magical-kids-bedrooms-playground-ideas?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-magical-kids-bedrooms-ebook&utm_campanha=ourmagicalrooms" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/popup/ebook.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-3">
                                                <p class="title-ebook">BEST 20 KID'S<br>INTERIOR DESIGNERS</p>
                                                <a href="https://www.circu.net/ebook/best-kids-interior-designers/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-ebook-best-kids-interior-designers&utm_campanha=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="col-12 text-center ">
                                            <p class="title-ebook">BEST 20 KID'S<br>INTERIOR DESIGNERS</p>
                                        </div>
                                        <img src="/img/popup/ebook-m.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/ebook/best-kids-interior-designers/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-ebook-best-kids-interior-designers&utm_campanha=ebook" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/popup/trendbook.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-3">
                                                <p class="title-ebook">TRENDBOOK FORECAST<br>2022/2023</p>
                                                <a href="https://www.trendesignbook.com/trendbook/trend-book-2022-23/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-trend-book-2022-2023&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="col-12 text-center ">
                                            <p class="title-ebook">TRENDBOOK FORECAST<br>2022/2023</p>
                                        </div>
                                        <img src="/img/popup/trendbook-m.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.trendesignbook.com/trendbook/trend-book-2022-23/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-trend-book-2022-2023&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/footer/new-products-caffe-latte.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-3">
                                                <p class="title-ebook">NEW PRODUCTS<br>CAFFE LATTE</p>
                                                <a href="https://www.caffelattehome.com/ebooks/new-products-ebook/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-new-products-caffe-latte&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="col-12 text-center ">
                                            <p class="title-ebook">NEW PRODUCTS<br>CAFFE LATTE</p>
                                        </div>
                                        <img src="/img/footer/new-products-caffe-latte.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.caffelattehome.com/ebooks/new-products-ebook/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-new-products-caffe-latte&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/footer/new-products-covet-house.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-3">
                                                <p class="title-ebook">NEW PRODUCTS<br>COVET HOUSE</p>
                                                <a href="https://www.covethouse.eu/inspirations/new-products/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-new-products-covet-house&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="col-12 text-center ">
                                            <p class="title-ebook">NEW PRODUCTS<br>COVET HOUSE</p>
                                        </div>
                                        <img src="/img/footer/new-products-covet-house.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.covethouse.eu/inspirations/new-products/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-new-products-covet-house&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/footer/new-products-covet-lighting.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-3">
                                                <p class="title-ebook">NEW PRODUCTS<br>COVET LIGHTING</p>
                                                <a href="https://covetlighting.com/new-products-ebook/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-new-products-covet-lighting&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="col-12 text-center ">
                                            <p class="title-ebook">NEW PRODUCTS<br>COVET LIGHTING</p>
                                        </div>
                                        <img src="/img/footer/new-products-covet-lighting.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://covetlighting.com/new-products-ebook/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-new-products-covet-lighting&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/footer/new-products-covet-collection.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-3">
                                                <p class="title-ebook">NEW PRODUCTS<br>COVET COLLECTION</p>
                                                <a href="https://covetcollection.eu/new-products-ebooks/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-new-products-covet-collection&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="col-12 text-center ">
                                            <p class="title-ebook">NEW PRODUCTS<br>COVET COLLECTION</p>
                                        </div>
                                        <img src="/img/footer/new-products-covet-collection.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://covetcollection.eu/new-products-ebooks/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-new-products-covet-collection&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f6f6f6;">
                                        <img src="/img/footer/multimillion-dollar-homes.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f6f6f6;">
                                            <div class="col-12 pb-3">
                                                <p class="title-ebook">OUR LUXURY HOUSES<br>&nbsp;</p>
                                                <a href="https://www.ourluxuryhouses.com/catalogues-and-books/multimillion-dollar-homes?utm_source=website&utm_medium=exitpopup&utm_content=covethouse-ebook-luxury-houses&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f6f6f6;">
                                        <div class="col-12 text-center ">
                                            <p class="title-ebook">OUR LUXURY HOUSES<br>&nbsp;</p>
                                        </div>
                                        <img src="/img/footer/multimillion-dollar-homes.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.ourluxuryhouses.com/catalogues-and-books/multimillion-dollar-homes?utm_source=website&utm_medium=exitpopup&utm_content=covethouse-ebook-luxury-houses&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next">
                                <i class="arrow arrow-right"></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="arrow arrow-left"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
</div>