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
        .myPopupAniversary {
            width: 33% !important;
        }
    }

    #myPopupAniversary a.close-modal {
        position: absolute;
        top: 5px;
        right: 6px !important;
        display: block;
        width: 12px;
        height: 12px;
        text-indent: -9999px;
        background: url(/img/icons/forms/close-icon2.png) no-repeat 0 0 !important;
    }

    #myPopupAniversary .slide-popup22 .arrow::after {
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

    #myPopupAniversary .slide-popup22 .arrow::before {
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

    #myPopupAniversary .arrow-left {
        transform: rotate(-90deg);
    }

    #myPopupAniversary .arrow-right {
        transform: rotate(90deg);
    }

    #myPopupAniversary .swiper-button-next:hover .arrow::after,
    #myPopupAniversary .swiper-button-prev:hover .arrow::after,
    #myPopupAniversary .swiper-button-next:hover .arrow::before,
    #myPopupAniversary .swiper-button-prev:hover .arrow::before {
        width: 2px;
    }

    #myPopupAniversary .slide-popup22 .swiper-button-next {
        right: 0px !important;
        left: auto;
    }

    #myPopupAniversary .slide-popup22 .swiper-button-prev {
        left: 0px !important;
        right: auto;
    }

    #myPopupAniversary .slide-popup22 .swiper-button-prev {
        color: white;
        height: 45px;
    }

    #myPopupAniversary .slide-popup22 .swiper-button-next {
        color: white;
        height: 45px;
    }

    #myPopupAniversary .slide-popup22 .swiper-button-next:after,
    #myPopupAniversary .slide-popup22 .swiper-button-prev:after,
    #myPopupAniversary .slide-popup22 .swiper-button-prev:after,
    #myPopupAniversary .slide-popup22 .swiper-button-next:after {
        content: '' !important;
    }

    #myPopupAniversary .slide-popup22 .swiper-button-prev,
    #myPopupAniversary .slide-popup22 .swiper-button-next {
        background-image: none !important;
    }

    #myPopupAniversary .titles1 p {
        color: #9ec1bd;
        text-transform: uppercase;
        font-size: 15px;
        line-height: 1.2;
        font-weight: 600;
        letter-spacing: 1px;
    }

    #myPopupAniversary .titles2 p {
        color: #bfbfbf;
        text-transform: uppercase;
        font-size: 9.3px;
        line-height: 1.5;
        font-weight: 600;
        letter-spacing: 0.1px;
    }

    #myPopupAniversary p {
        color: #a0a0a0;
        text-transform: uppercase;
        font-size: 12px;
        line-height: 1.2;
        font-weight: 600;
        letter-spacing: 1px;
        margin: 0px 0px 7px 0px;
    }

    #myPopupAniversary .div-right {
        height: 100%;
        bottom: 0;
        position: absolute;
        text-align: center;
    }

    #myPopupAniversary .div-right .title {
        font-size: 11px;
        color: #fff;
        font-weight: bold;
        margin-bottom: 0.4rem;
    }

    #myPopupAniversary .div-right .subtitle {
        font-size: 10px;
        color: #fff;
        font-weight: lighter;
        margin-bottom: 1rem;
    }

    #myPopupAniversary .btnDownload {
        font-size: 11px;
        color: #fff;
        background-color: #9ec1bd;
        border: 1px solid #9ec1bd !important;
        font-weight: 600;
        padding: 8px 17px;
        margin: 0px 0px 7px 0px;
    }

    #myPopupAniversary .div-center-main {
        position: absolute;
        bottom: 6%;
        text-align: center;
    }

    #myPopupAniversary .div-center-main .title-main {
        color: #fff;
        font-weight: bold;
        margin-bottom: 0.4rem;
        font-size: 16px;
        line-height: 20px;
    }

    #myPopupAniversary .div-center-main .subtitle-main {
        color: #fff;
        font-weight: lighter;
        margin-bottom: 1.4rem;
        font-size: 12px;
    }

    #myPopupAniversary .div-center-main .btn-main {
        color: #a1beba;
        background-color: #fff;
        border: 1px solid #fff;
        padding: 6px 18px;
        font-size: 12px;
        letter-spacing: 1px;
        font-weight: 600;
    }

    #myPopupAniversary .div-center-slide-s .title {
        font-size: 12px;
        color: #a0a0a0;
        font-weight: bold;
        margin: 0;
        padding-top: .5rem !important;
    }

    #myPopupAniversary .div-center-slide-s .subtitle {
        font-size: 10px;
        color: #fff;
        font-weight: lighter;
        margin-bottom: 1rem;
    }

    #myPopupAniversary .div-center-slide-s .btnDownload {
        font-size: 10px;
        color: #fff;
        border: 1px solid #fff;
        font-weight: lighter;
        padding: 8px 17px;
    }

    @media (max-width:1555px) and (min-width: 1400px) {
        #myPopupAniversary .div-right {
            width: 240px;
        }
    }

    @media (max-width:1400px) and (min-width: 1200px) {
        #myPopupAniversary .div-right {
            width: 200px;
        }
    }

    #myPopupAniversary .modal-content {
        width: 100% !important;
    }

    #myPopupAniversary .img-size-pop {
        width: 75%;
        margin: 0 auto;
        padding-bottom: .5rem !important;
        padding-top: .5rem !important;
    }

    #myPopupAniversary a.close-modal {
        position: absolute;
        top: 8px;
        right: 6px !important;
        display: block;
        width: 12px;
        height: 12px;
        text-indent: -9999px;
        background: url(/img/popup/close-icon2.png) no-repeat 0 0 !important;
    }

    #myPopupAniversary ul.parsley-errors-list {
        margin: 0 !important;
    }

    .myPopupAniversary {
        box-shadow: none !important;
        -webkit-box-shadow: none !important;
        background: transparent !important;
    }

    .myPopupAniversary .close-modal {
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

    .myPopupAniversary input,
    .myPopupAniversary select {
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
<div class="modal myPopupAniversary" id="myPopupAniversary" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="    padding: 0px;
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
                        <div class="">
                            <img width="400" height="400" class="imagetospin" src="/img/popup/aniversary-discount/popup-discount-back.png" />
                            <img width="400" height="400" class="imagetospin2" src="/img/popup/aniversary-discount/popup-discount-front.png" />
                        </div>

                    </div>
                    <div class="col-12 p-0 pt-4 ">
                        <form method="post" class="form-popup form-parsley form-discount-anniversary" id="form-arniversary" action="{{ route('process.discountanniversary') }}">

                            <div class="row m-0 justify-content-center">

                                {{ csrf_field() }}

                                <input type="hidden" name="more_info" value="Subscribe" />
                                <input type="hidden" name="origin" class="origin" />
                                <input type="hidden" name="referrer" class="referrer" />
                                <input type="hidden" name="lead_path" class="lead_path" />
                                <input type="text" name="interested" class="interested" />

                                <div class="col-10 p-0">
                                    <div class="row m-0">
                                        <div class="col-8 p-0">
                                            <div class="input-block m-0 {{ $errors->has('email') ? 'has-error' : '' }}">
                                                <input type="email" name="email" placeholder="EMAIL*" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
                                            </div>
                                        </div>
                                        <div class="col-4 pr-0">
                                            <select name="country" class="custom-select country country-price" data-parsley-required="true" value="{{ old('country') }}">
                                                @include('includes.options-country')
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-10 p-0">
                                    <button style="margin:0 !important;margin-top: 8px !important;padding: 6px 0 5px 0 !important;" id="request-price-tag" class="btn-request-piece btn-prevent-multiple btn-anniversary spin-this-shit"><i class="spinner-visible fas fa-spinner fas-spin"></i>START</button>
                                </div>

                                <div class="col-10 p-0 py-2 titles2">
                                    <p class="m-0">*Once you win this coupon you can use it until the end of the year.</p>
                                    <p class="m-0">*By inserting your email you are accepting our <a href="https://circu.net/docs/terms-conditions-circu-magical-furniture.pdf" target="_blank">Terms&Conditions</a>.</p>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <a href="#close-modal" rel="modal:close" style="filter: invert;" class="close-modal ">Close</a>
</div>