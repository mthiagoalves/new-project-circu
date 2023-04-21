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

    @media only screen and (min-width: 992px) {
        .modal-popup {
            width: 48% !important;
        }
    }

    #popupinspiration a.close-modal {
        position: absolute;
        top: 5px;
        right: 6px !important;
        display: block;
        width: 12px;
        height: 12px;
        text-indent: -9999px;
        background: url(/img/icons/forms/close-icon2.png) no-repeat 0 0 !important;
    }

    #popupinspiration .slide-popup22 .arrow::after {
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

    #popupinspiration .slide-popup22 .arrow::before {
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

    #popupinspiration .arrow-left {
        transform: rotate(-90deg);
    }

    #popupinspiration .arrow-right {
        transform: rotate(90deg);
    }

    #popupinspiration .swiper-button-next:hover .arrow::after,
    #popupinspiration .swiper-button-prev:hover .arrow::after,
    #popupinspiration .swiper-button-next:hover .arrow::before,
    #popupinspiration .swiper-button-prev:hover .arrow::before {
        width: 2px;
    }

    #popupinspiration .slide-popup22 .swiper-button-next {
        right: 0px !important;
        left: auto;
    }

    #popupinspiration .slide-popup22 .swiper-button-prev {
        left: 0px !important;
        right: auto;
    }

    #popupinspiration .slide-popup22 .swiper-button-prev {
        color: white;
        height: 45px;
    }

    #popupinspiration .slide-popup22 .swiper-button-next {
        color: white;
        height: 45px;
    }

    #popupinspiration .slide-popup22 .swiper-button-next:after,
    #popupinspiration .slide-popup22 .swiper-button-prev:after,
    #popupinspiration .slide-popup22 .swiper-button-prev:after,
    #popupinspiration .slide-popup22 .swiper-button-next:after {
        content: '' !important;
    }

    #popupinspiration .slide-popup22 .swiper-button-prev,
    #popupinspiration .slide-popup22 .swiper-button-next {
        background-image: none !important;
    }

    #popupinspiration .titles1 p {
        color: #9ec1bd;
        text-transform: uppercase;
        font-size: 15px;
        line-height: 1.2;
        font-weight: 600;
        letter-spacing: 1px;
    }

    #popupinspiration .titles2 p {
        color: #9ec1bd;
        text-transform: uppercase;
        font-size: 14px;
        line-height: 1.2;
        font-weight: 600;
        letter-spacing: 1px;
    }

    #popupinspiration p {
        color: #a0a0a0;
        text-transform: uppercase;
        font-size: 12px;
        line-height: 1.2;
        font-weight: 600;
        letter-spacing: 1px;
        margin: 0px 0px 7px 0px;
    }

    @media (min-width:900px) and (max-width:1750px) {
        #popupinspiration p {
            color: #a0a0a0;
            text-transform: uppercase;
            font-size: 12px;
            line-height: 1.2;
            font-weight: 600;
            letter-spacing: 1px;
            margin: 0px 0px 7px 0px;
            height: 27px;
        }
    }

    #popupinspiration .div-right {
        height: 100%;
        bottom: 0;
        position: absolute;
        text-align: center;
    }

    #popupinspiration .div-right .title {
        font-size: 11px;
        color: #fff;
        font-weight: bold;
        margin-bottom: 0.4rem;
    }

    #popupinspiration .div-right .subtitle {
        font-size: 10px;
        color: #fff;
        font-weight: lighter;
        margin-bottom: 1rem;
    }

    #popupinspiration .btnDownload {
        font-size: 11px;
        color: #fff;
        background-color: #9ec1bd;
        border: 1px solid #9ec1bd !important;
        font-weight: 600;
        padding: 8px 17px;
        margin: 0px 0px 7px 0px;
    }

    #popupinspiration .div-center-main {
        position: absolute;
        bottom: 6%;
        text-align: center;
    }

    #popupinspiration .div-center-main .title-main {
        color: #fff;
        font-weight: bold;
        margin-bottom: 0.4rem;
        font-size: 16px;
        line-height: 20px;
    }

    #popupinspiration .div-center-main .subtitle-main {
        color: #fff;
        font-weight: lighter;
        margin-bottom: 1.4rem;
        font-size: 12px;
    }

    #popupinspiration .div-center-main .btn-main {
        color: #a1beba;
        background-color: #fff;
        border: 1px solid #fff;
        padding: 6px 18px;
        font-size: 12px;
        letter-spacing: 1px;
        font-weight: 600;
    }

    #popupinspiration .div-center-slide-s .title {
        font-size: 12px;
        color: #a0a0a0;
        font-weight: bold;
        margin: 0;
        padding-top: .5rem !important;
    }

    #popupinspiration .div-center-slide-s .subtitle {
        font-size: 10px;
        color: #fff;
        font-weight: lighter;
        margin-bottom: 1rem;
    }

    #popupinspiration .div-center-slide-s .btnDownload {
        font-size: 10px;
        color: #fff;
        border: 1px solid #fff;
        font-weight: lighter;
        padding: 8px 17px;
    }

    @media (max-width:1555px) and (min-width: 1400px) {
        #popupinspiration .div-right {
            width: 240px;
        }
    }

    @media (max-width:1400px) and (min-width: 1200px) {
        #popupinspiration .div-right {
            width: 200px;
        }
    }

    #popupinspiration .modal-content {
        width: 100% !important;
    }

    #popupinspiration .img-size-pop {
        width: 75%;
        margin: 0 auto;
        padding-bottom: .5rem !important;
        padding-top: .5rem !important;
    }

    #popupinspiration a.close-modal {
        position: absolute;
        top: 8px;
        right: 6px !important;
        display: block;
        width: 12px;
        height: 12px;
        text-indent: -9999px;
        background: url(/img/popup/close-icon2.png) no-repeat 0 0 !important;
    }
</style>
<div class="modal modal-popup" id="popupinspiration" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="    padding: 0px;
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
                        <p class="m-0">MAGICAL KIDS ROOM IDEAS</p>
                    </div>
                    <div class="col-12 p-0">
                        <a href="https://www.circu.net/our-magical-rooms/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-our-house&utm_campanha=roombyroom">
                            <img src="/img/popup/blossom-faritale-banner.jpg" alt="New Products Pop Up Caffe Latte Home" class="img-fluid d-none d-lg-block" style="height: auto;width: 100%;">
                            <img src="/img/popup/blossom-faritale-banner-m.jpg" alt="New Products Pop Up Caffe Latte Home" class="img-fluid d-block d-lg-none" style="height: auto;width: 100%;">
                            <!-- <a href="https://www.caffelattehome.com/floor-samples?utm_source=website&utm_medium=exitpopup&utm_content=caffelatte-pop-up-floor-samples-w40&utm_campaign=floorsamples"> -->
                            <div class="col-12 div-center-main" style="bottom: 6%;">
                                <!-- <p class="title-main">INSIDE EVERY CHILD'S DREAM BEDROOM</p> -->
                                <a href="https://www.circu.net/our-magical-rooms/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-our-house&utm_campanha=roombyroom" target="_blank" class="btn-main">SEE ALL ROOMS</a>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 p-0 py-2 text-center titles2">
                        <p class="m-0">JUST RELEASED!</p>
                    </div>
                    <div class="col-12 p-0 slide-popup22">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f0f0f0;">
                                        <img src="/img/popup/new-products.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f0f0f0;">
                                            <div class="col-12 pb-3">
                                                <p class="title">NEW PRODUCTS 2021<br>&nbsp;</p>
                                                <a href="https://www.circu.net/ebook/new-pieces-2021/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-ebook-new-products-2021&utm_campanha=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f0f0f0;">
                                        <div class="col-12 text-center ">
                                            <p class="title">NEW PRODUCTS 2021<br>&nbsp;</p>
                                        </div>
                                        <img src="/img/popup/new-products-m.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.circu.net/ebook/new-pieces-2021/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-ebook-new-products-2021&utm_campanha=ebook" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f0f0f0;">
                                        <img src="/img/popup/catalogue.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f0f0f0;">
                                            <div class="col-12 pb-3">
                                                <p class="title">CIRCU CATALOGUE<br>&nbsp;</p>
                                                <a href="https://www.circu.net/ebook/catalogue-circu-magical-furniture/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-catalogue-circu-magical-furniture&utm_campanha=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f0f0f0;">
                                        <div class="col-12 text-center ">
                                            <p class="title">CIRCU CATALOGUE<br>&nbsp;</p>
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
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f0f0f0;">
                                        <img src="/img/popup/new-ebook-rooms.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f0f0f0;">
                                            <div class="col-12 pb-3">
                                                <p class="title">MAGICAL KIDS BEDROOMS<br>AND PLAYGROUND IDEAS</p>
                                                <a href="https://www.circu.net/ebook/magical-kids-bedrooms-playground-ideas?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-magical-kids-bedrooms-ebook&utm_campanha=ourmagicalrooms" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f0f0f0;">
                                        <div class="col-12 text-center ">
                                            <p class="title">MAGICAL KIDS BEDROOMS<br>AND PLAYGROUND IDEAS</p>
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
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f0f0f0;">
                                        <img src="/img/popup/inspiration.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f0f0f0;">
                                            <div class="col-12 pb-3">
                                                <p class="title">BOOK INSPIRATIONS<br>&nbsp;</p>
                                                <a href="https://www.covethouse.eu/inspirations/book-inspirations-circu/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-book-inspirations-circu&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f0f0f0;">
                                        <div class="col-12 text-center ">
                                            <p class="title">BOOK INSPIRATIONS<br>&nbsp;</p>
                                        </div>
                                        <img src="/img/popup/inspiration-m.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.covethouse.eu/inspirations/book-inspirations-circu/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-book-inspirations-circu&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                DOWNLOAD NOW
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f0f0f0;">
                                        <img src="/img/popup/ebook.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f0f0f0;">
                                            <div class="col-12 pb-3">
                                                <p class="title">BEST 20 KID'S<br>INTERIOR DESIGNERS</p>
                                                <a href="https://www.circu.net/ebook/best-kids-interior-designers/?utm_origem=website&utm_meio=exitpopup-toinspire&utm_conteudo=circu-ebook-best-kids-interior-designers&utm_campanha=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f0f0f0;">
                                        <div class="col-12 text-center ">
                                            <p class="title">BEST 20 KID'S<br>INTERIOR DESIGNERS</p>
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
                                    <div class="col-12 p-0 d-none d-lg-block" style="background-color: #f0f0f0;">
                                        <img src="/img/popup/trendbook.png" class="img-fluid d-none d-lg-block img-size-pop">
                                        <div class="text-center" style="background-color: #f0f0f0;">
                                            <div class="col-12 pb-3">
                                                <p class="title">TRENDBOOK FORECAST<br>2022/2023</p>
                                                <a href="https://www.trendesignbook.com/trendbook/trend-book-2022-23/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-trend-book-2022-2023&utm_campaign=ebook" target="_blank" class="btnDownload">
                                                    DOWNLOAD NOW
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 p-0 d-block d-lg-none div-center-slide-s pb-3" style="background-color: #f0f0f0;">
                                        <div class="col-12 text-center ">
                                            <p class="title">TRENDBOOK FORECAST<br>2021</p>
                                        </div>
                                        <img src="/img/popup/trendbook-m.png" class="img-fluid">
                                        <div class="col-12 text-center">
                                            <a href="https://www.trendesignbook.com/trendbook/trend-book-2022-23/?utm_source=website&utm_medium=exitpopup-toinspire&utm_content=circu-trend-book-2022-2023&utm_campaign=ebook" target="_blank" class="btnDownload">
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