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
        .popup-entrance-new-products {
            width: 33% !important;
        }
    }

    #popup-entrance-new-products .slide-popup22 .arrow::after {
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

    #popup-entrance-new-products .slide-popup22 .arrow::before {
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

    #popup-entrance-new-products .arrow-left {
        transform: rotate(-90deg);
    }

    #popup-entrance-new-products .arrow-right {
        transform: rotate(90deg);
    }

    #popup-entrance-new-products .swiper-button-next:hover .arrow::after,
    #popup-entrance-new-products .swiper-button-prev:hover .arrow::after,
    #popup-entrance-new-products .swiper-button-next:hover .arrow::before,
    #popup-entrance-new-products .swiper-button-prev:hover .arrow::before {
        width: 2px;
    }

    #popup-entrance-new-products .slide-popup22 .swiper-button-next {
        right: 0px !important;
        left: auto;
    }

    #popup-entrance-new-products .slide-popup22 .swiper-button-prev {
        left: 0px !important;
        right: auto;
    }

    #popup-entrance-new-products .slide-popup22 .swiper-button-prev {
        color: white;
        height: 45px;
    }

    #popup-entrance-new-products .slide-popup22 .swiper-button-next {
        color: white;
        height: 45px;
    }

    #popup-entrance-new-products .slide-popup22 .swiper-button-next:after,
    #popup-entrance-new-products .slide-popup22 .swiper-button-prev:after,
    #popup-entrance-new-products .slide-popup22 .swiper-button-prev:after,
    #popup-entrance-new-products .slide-popup22 .swiper-button-next:after {
        content: '' !important;
    }

    #popup-entrance-new-products .slide-popup22 .swiper-button-prev,
    #popup-entrance-new-products .slide-popup22 .swiper-button-next {
        background-image: none !important;
    }

    #popup-entrance-new-products .titles1 p {
        color: #9ec1bd;
        text-transform: uppercase;
        font-size: 15px;
        line-height: 1.2;
        font-weight: 600;
        letter-spacing: 1px;
    }

    #popup-entrance-new-products .titles2 p {
        color: #bfbfbf;
        text-transform: uppercase;
        font-size: 9.3px;
        line-height: 1.5;
        font-weight: 600;
        letter-spacing: 0.1px;
    }

    #popup-entrance-new-products p {
        color: #a0a0a0;
        text-transform: uppercase;
        font-size: 12px;
        line-height: 1.2;
        font-weight: 600;
        letter-spacing: 1px;
        margin: 0px 0px 7px 0px;
    }

    #popup-entrance-new-products .div-right {
        height: 100%;
        bottom: 0;
        position: absolute;
        text-align: center;
    }

    #popup-entrance-new-products .div-right .title {
        font-size: 11px;
        color: #fff;
        font-weight: bold;
        margin-bottom: 0.4rem;
    }

    #popup-entrance-new-products .div-right .subtitle {
        font-size: 10px;
        color: #fff;
        font-weight: lighter;
        margin-bottom: 1rem;
    }

    #popup-entrance-new-products .btnDownload {
        font-size: 11px;
        color: #fff;
        background-color: #9ec1bd;
        border: 1px solid #9ec1bd !important;
        font-weight: 600;
        padding: 8px 17px;
        margin: 0px 0px 7px 0px;
    }

    #popup-entrance-new-products .div-center-main {
        position: absolute;
        bottom: 6%;
        text-align: center;
    }

    #popup-entrance-new-products .div-center-main .title-main {
        color: #fff;
        font-weight: bold;
        margin-bottom: 0.4rem;
        font-size: 16px;
        line-height: 20px;
    }

    #popup-entrance-new-products .div-center-main .subtitle-main {
        color: #fff;
        font-weight: lighter;
        margin-bottom: 1.4rem;
        font-size: 12px;
    }

    #popup-entrance-new-products .div-center-main .btn-main {
        color: #a1beba;
        background-color: #fff;
        border: 1px solid #fff;
        padding: 6px 18px;
        font-size: 12px;
        letter-spacing: 1px;
        font-weight: 600;
    }

    #popup-entrance-new-products .div-center-slide-s .title {
        font-size: 12px;
        color: #a0a0a0;
        font-weight: bold;
        margin: 0;
        padding-top: .5rem !important;
    }

    #popup-entrance-new-products .div-center-slide-s .subtitle {
        font-size: 10px;
        color: #fff;
        font-weight: lighter;
        margin-bottom: 1rem;
    }

    #popup-entrance-new-products .div-center-slide-s .btnDownload {
        font-size: 10px;
        color: #fff;
        border: 1px solid #fff;
        font-weight: lighter;
        padding: 8px 17px;
    }

    @media (max-width:1555px) and (min-width: 1400px) {
        #popup-entrance-new-products .div-right {
            width: 240px;
        }
    }

    @media (max-width:1400px) and (min-width: 1200px) {
        #popup-entrance-new-products .div-right {
            width: 200px;
        }
    }

    #popup-entrance-new-products .modal-content {
        width: 100% !important;
    }

    #popup-entrance-new-products .img-size-pop {
        width: 75%;
        margin: 0 auto;
        padding-bottom: .5rem !important;
        padding-top: .5rem !important;
    }

    #popup-entrance-new-products a.close-modal {
        position: absolute;
        top: 22px;
        right: 6px !important;
        display: block;
        width: 12px;
        height: 12px;
        text-indent: -9999px;
        background: url(/img/popup/close-icon2.png) no-repeat 0 0 !important;
    }

    #popup-entrance-new-products ul.parsley-errors-list {
        margin: 0 !important;
    }

    .popup-entrance-new-products {
        box-shadow: none !important;
        -webkit-box-shadow: none !important;
        background: transparent !important;
    }

    .popup-entrance-new-products .close-modal {
        filter: invert(1);
    }

    .spinit {
        -webkit-transform: rotate(705deg) !important;
        -webkit-transition: -webkit-transform 2s ease-out;
    }

    .imagetospin {
        -webkit-transform: rotate(60deg);
    }

    .imagetospin2 {
        position: absolute;
        left: 50%;
        transform: translate(-50%, 0);
    }

    .spin-this-shit span {
        background-color: #9ec1be;
        color: white;
        padding: 5px 55px;
        cursor: pointer;
    }

    .popup-entrance-new-products input,
    .popup-entrance-new-products select {
        width: 100%;
        height: 28px;
        font-size: 11px;
        letter-spacing: 1px;
        margin-bottom: 0;
        padding: 0 .75rem !important;
        background: none !important;
        color: #7d858c;
        background-color: #fff !important;
        border-radius: 0;
        border: 1px solid #fff;
        text-transform: uppercase;
    }

    .form-discount-anniversary .btn-anniversary {
        width: 100%;
        font-size: 13px;
        letter-spacing: 3px;
        font-weight: 700;
        background-color: #8cbab7;
    }
</style>
<div class="modal popup-entrance-new-products" id="popup-entrance-new-products" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding: 0px;
    border-radius: 0px;
    max-width: none;
    display: none;
    left: auto;
    top: auto;">
    <div class="modal-dialog modal-lg" style="margin:0; max-width:100% !important;background-color: transparent !important;" aria-hidden="true">
        <div class="modal-content" style="border:none;background-color: transparent !important;" aria-hidden="true">
            <div class="modal-body p-0" aria-hidden="true">
                <div class="col-12 p-0" style="background-color: transparent !important;">
                    <!-- <div class="col-12 p-0 py-2 text-center titles1">
                        <p class="m-0" style="font-size: 19px !important;">5th Aniversary</p>
                        <p class="m-0" style="font-weight: lighter !important; font-size: 13px;">A hand full of deals</p>
                    </div> -->
                    <div class="col-12 p-0 pt-3 text-center">
                        <a href="https://www.circu.net/circu-new-showroom?utm_origem=website&utm_meio=popup&utm_conteudo=circu-newshowroom&utm_campanha=showroom">
                            <img class="img-fluid" src="/img/popup/new-products/banner-popup-antrance-new-showroom.jpg" alt="New Products 2023 Circu" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>