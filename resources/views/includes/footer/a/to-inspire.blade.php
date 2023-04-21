<style>
    @media(min-width: 1200px) {
        .col-20 {
            -webkit-box-flex: 0;
            flex: 0 0 20%;
            max-width: 20%;
        }

        .col-20 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

    }

    .product-box {
        padding: 0.09rem;
        margin: 0;
    }

    .text-title-inspiraitons p {
        font-family: 'Raleway', sans-serif;
        text-align: center;
        color: #666666;
        font-size: 0.70rem;
        line-height: 15px;
        text-transform: uppercase;
    }

    .btn-green-underline {
        font-size: 12px;
        letter-spacing: 1px;
        padding: 5px 20px 4px;
        margin: 12px auto 0px;
        z-index: 2;
        background-color: #98b9b5;
        color: #FFFFFF;
        border: 1px solid #98b9b5;
        display: inline-block;
    }

    .btn-green-underline:hover {
        font-size: 12px;
        letter-spacing: 1px;
        padding: 5px 20px 4px;
        margin: 12px auto 0px;
        z-index: 2;
        background-color: #98b9b5;
        color: #FFFFFF;
        border: 1px solid #98b9b5;
        display: inline-block;
    }

    .form-ebooks-email {
        width: 75%;
        height: 30px !important;
        font-size: 12px !important;
        letter-spacing: 1px;
        margin-bottom: 0px;
        padding: 0 0.75em !important;
        color: #98b9b5;
        background-color: #ffffff;
        border-top: 1px solid #666666 !important;
        border-right: 1px solid #666666 !important;
        border-left: 1px solid #666666 !important;
        border-bottom: 1px solid #666666 !important;
        border-radius: 0;
        background: none !important;
    }

    .form-ebooks-email::placeholder {
        color: #666666;
    }

    .form-ebooks-email:focus-visible {
        outline-color: #98b9b5;
        outline-style: inset;
    }

    .modal-cursor-disable-footer {
        pointer-events: none;
        cursor: default;
    }

    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active,
    select:-webkit-autofill,
    select:-webkit-autofill:hover,
    select:-webkit-autofill:focus,
    textarea:-webkit-autofill,
    textarea:-webkit-autofill:hover,
    textarea:-webkit-autofill:focus {
        transition: background-color 5000s ease-in-out 0s !important;
    }

    .owl-next i, .owl-prev i{
        bottom: 75%;
    }
</style>
<div class="row print-d-none">
    <div class="col-12 text-center pt-4 pb-2">
        <h5> LET'S GET INSPIRED </h5>
    </div>
</div>
<div class="row print-d-none footer-slide pb-3">
    <div class="col-12 owl-footerbooks owl-carousel owl-slide owl-theme p-0 position-relative">
        <div class="item col-12 product-box text-center validatemail1">
            <div class="col-12 p-0 text-title-inspiraitons pt-3" style="background-color: #f7f7f7;">
                <p class="m-0"><b>CATALOGUE</b><br> CIRCU</p>
            </div>
            <div class="col-12 p-0 py-3" style="background-color: #f7f7f7;">
                <a href="https://www.circu.net/download-catalogue?utm_origem=blog&utm_meio=partnersfooter-toinspire&utm_conteudo=Circu-brandcatalog&utm_campanha=catalogue" target="_blank">
                    <img src="/img/footer/circu-catalogue.png" alt="Catalogue Circu" class="img-fluid">
                </a>
            </div>
            <div class="col-12 p-0 py-2 email-input" style="background-color: #f7f7f7;">
                <input type="email" name="email" class="form-ebooks-email mb-2 emailebook1" placeholder="EMAIL*" autocomplete="off" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }" />
                <p class="d-none" style="position: absolute;display: block;font-size: 9px;color: #352820;font-weight: 600;right: 40px;top: 10px;z-index: 9;background: 0 0;text-transform: uppercase;">email incorrect</p>
            </div>
            <div class="col-12 p-0 pb-3" style="background-color: #f7f7f7;">
                <a rel="modal:open" href="{{route('modal-ebooks-catalogues', ['ebook' => 'catalogue-circu-magical-furniture'])}}" class="btn-green-underline mt-0 modal-cursor-disable-footer"><span><b>DOWNLOAD NOW</b></span></a>
            </div>
        </div>
        <div class="item col-12 product-box text-center validatemail2">
            <div class="col-12 p-0 text-title-inspiraitons pt-3" style="background-color: #f7f7f7;">
                <p class="m-0"><b>ULTIMATE COLLECTOR SEATING</b><br>COVET HOUSE</p>
            </div>
            <div class="col-12 p-0 py-3" style="background-color: #f7f7f7;">
                <a href="https://www.covethouse.eu/inspirations/covet-house-seating/?utm_source=website&utm_medium=partnersfooter-toinspire-cc&utm_content=circu-seating-catalogue-cvt&utm_campaign=catalogue" target="_blank">
                    <img src="/img/footer/ultimate-collector-seating-footer.png" alt="Seating Catalogue Covet House" class="img-fluid">
                </a>
            </div>
            <div class="col-12 p-0 py-2 email-input" style="background-color: #f7f7f7;">
                <input type="email" name="email" class="form-ebooks-email mb-2 emailebook2" placeholder="EMAIL*" autocomplete="off" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }" />
                <p class="d-none" style="position: absolute;display: block;font-size: 9px;color: #352820;font-weight: 600;right: 40px;top: 10px;z-index: 9;background: 0 0;text-transform: uppercase;">email incorrect</p>
            </div>
            <div class="col-12 p-0 pb-3" style="background-color: #f7f7f7;">
                <a rel="modal:open" href="{{route('modal-ebooks-catalogues', ['ebook' => 'ultimate-collector-seating'])}}" class="btn-green-underline mt-0 modal-cursor-disable-footer"><span><b>DOWNLOAD NOW</b></span></a>
            </div>
        </div>
        <div class="item col-12 product-box text-center validatemail3">
            <div class="col-12 p-0 text-title-inspiraitons pt-3" style="background-color: #f7f7f7;">
                <p class="m-0"><b>PRICELIST SHOWROOM</b><br>CIRCU</p>
            </div>
            <div class="col-12 p-0 py-3" style="background-color: #f7f7f7;">
                <a href="https://www.circu.net/circu-new-showroom?utm_origem=website&utm_meio=partnersfooter-toinspire&utm_conteudo=circu-newshowroom&utm_campanha=showroom" target="_blank">
                    <img src="/img/footer/footer-inspired-pricelist-showroom.png" alt="Pricelist Showroom Circu" class="img-fluid">
                </a>
            </div>
            <div class="col-12 p-0 py-2 email-input" style="background-color: #f7f7f7;">
                <input type="email" name="email" class="form-ebooks-email mb-2 emailebook3" placeholder="EMAIL*" autocomplete="off" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }" />
                <p class="d-none" style="position: absolute;display: block;font-size: 9px;color: #352820;font-weight: 600;right: 40px;top: 10px;z-index: 9;background: 0 0;text-transform: uppercase;">email incorrect</p>
            </div>
            <div class="col-12 p-0 pb-3" style="background-color: #f7f7f7;">
                <a rel="modal:open" href="{{route('modal-ebooks-catalogues', ['ebook' => 'new-products-2023'])}}" class="btn-green-underline mt-0 modal-cursor-disable-footer"><span><b>DOWNLOAD NOW</b></span></a>
            </div>
        </div>        
        <div class="item col-12 product-box text-center validatemail4">
            <div class="col-12 p-0 text-title-inspiraitons pt-3" style="background-color: #f7f7f7;">
                <p class="m-0"><b>NEW PRODUCTS</b><br>COVET COLLECTION</p>
            </div>
            <div class="col-12 p-0 py-3" style="background-color: #f7f7f7;">
                <a href="https://covetcollection.eu/new-products-ebooks/?utm_source=website&utm_medium=partnersfooter-toinspire-cc&utm_content=new-products-23&utm_campaign=newproducts" target="_blank">
                    <img src="/img/footer/new-products-cvcl-footer.png" alt="New Products Covet Collection" class="img-fluid">
                </a>
            </div>
            <div class="col-12 p-0 py-2 email-input" style="background-color: #f7f7f7;">
                <input type="email" name="email" class="form-ebooks-email mb-2 emailebook4" placeholder="EMAIL*" autocomplete="off" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }" />
                <p class="d-none" style="position: absolute;display: block;font-size: 9px;color: #352820;font-weight: 600;right: 40px;top: 10px;z-index: 9;background: 0 0;text-transform: uppercase;">email incorrect</p>
            </div>
            <div class="col-12 p-0 pb-3" style="background-color: #f7f7f7;">
                <a rel="modal:open" href="{{route('modal-ebooks-catalogues', ['ebook' => 'new-products-covet-collection'])}}" class="btn-green-underline mt-0 modal-cursor-disable-footer"><span><b>DOWNLOAD NOW</b></span></a>
            </div>
        </div>
        <div class="item col-12 product-box text-center validatemail5">
            <div class="col-12 p-0 text-title-inspiraitons pt-3" style="background-color: #f7f7f7;">
                <p class="m-0"><b>PRICELIST SHOWROOM</b><br>CAFFE LATTE</p>
            </div>
            <div class="col-12 p-0 py-3" style="background-color: #f7f7f7;">
                <a href="https://www.caffelattehome.com/showroom-caffe-latte?utm_source=website&utm_medium=partnersfooter-toinspire-cl&utm_content=circu-caffelatte-showroom&utm_campaign=showroom" target="_blank">
                    <img src="/img/footer/pricelist-showroom-caffe-latte-footer.png" alt="Pricelist Showroom Caffe Latte" class="img-fluid">
                </a>
            </div>
            <div class="col-12 p-0 py-2 email-input" style="background-color: #f7f7f7;">
                <input type="email" name="email" class="form-ebooks-email mb-2 emailebook5" placeholder="EMAIL*" autocomplete="off" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }" />
                <p class="d-none" style="position: absolute;display: block;font-size: 9px;color: #352820;font-weight: 600;right: 40px;top: 10px;z-index: 9;background: 0 0;text-transform: uppercase;">email incorrect</p>
            </div>
            <div class="col-12 p-0 pb-3" style="background-color: #f7f7f7;">
                <a rel="modal:open" href="{{route('modal-ebooks-catalogues', ['ebook' => 'pricelist-showroom-caffe-latte'])}}" class="btn-green-underline mt-0 modal-cursor-disable-footer"><span><b>DOWNLOAD NOW</b></span></a>
            </div>
        </div>
        <!-- <div class="item col-12 product-box text-center validatemail6">
            <div class="col-12 p-0 text-title-inspiraitons pt-3" style="background-color: #f7f7f7;">
                <p class="m-0"><b>NEW PRODUCTS</b><br>CAFFE LATTE</p>
            </div>
            <div class="col-12 p-0 py-3" style="background-color: #f7f7f7;">
                <a href="https://www.caffelattehome.com/ebooks/new-products-ebook?utm_source=website&utm_medium=partnersfooter-toinspire-cl&utm_content=circu-newproducts-23&utm_campaign=newproducts" target="_blank">
                    <img src="/img/footer/new-products-cl-footer.png" alt="Neww Products Caffe Latte" class="img-fluid">
                </a>
            </div>
            <div class="col-12 p-0 py-2 email-input" style="background-color: #f7f7f7;">
                <input type="email" name="email" class="form-ebooks-email mb-2 emailebook6" placeholder="EMAIL*" autocomplete="off" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }" />
                <p class="d-none" style="position: absolute;display: block;font-size: 9px;color: #352820;font-weight: 600;right: 40px;top: 10px;z-index: 9;background: 0 0;text-transform: uppercase;">email incorrect</p>
            </div>
            <div class="col-12 p-0 pb-3" style="background-color: #f7f7f7;">
                <a rel="modal:open" href="{{route('modal-ebooks-catalogues', ['ebook' => 'new-products-caffe-latte'])}}" class="btn-green-underline mt-0 modal-cursor-disable-footer"><span><b>DOWNLOAD NOW</b></span></a>
            </div>
        </div> -->
        <div class="item col-12 product-box text-center validatemail7">
            <div class="col-12 p-0 text-title-inspiraitons pt-3" style="background-color: #f7f7f7;">
                <p class="m-0"><b>STOCKLIST ANNUAL SALE</b><br>CIRCU</p>
            </div>
            <div class="col-12 p-0 py-3" style="background-color: #f7f7f7;">
                <a href="https://www.circu.net/stocklist?utm_origem=website&utm_meio=partnersfooter-toinspire&utm_conteudo=circu-annual-sale-22&utm_campanha=annualsales" target="_blank">
                    <img src="/img/footer/stocklist-annual-sale-footer.png" alt="Stocklist Annual Sale Circu" class="img-fluid">
                </a>
            </div>
            <div class="col-12 p-0 py-2 email-input" style="background-color: #f7f7f7;">
                <input type="email" name="email" class="form-ebooks-email mb-2 emailebook7" placeholder="EMAIL*" autocomplete="off" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }" />
                <p class="d-none" style="position: absolute;display: block;font-size: 9px;color: #352820;font-weight: 600;right: 40px;top: 10px;z-index: 9;background: 0 0;text-transform: uppercase;">email incorrect</p>
            </div>
            <div class="col-12 p-0 pb-3" style="background-color: #f7f7f7;">
                <a rel="modal:open" href="{{route('modal-ebooks-catalogues', ['ebook' => 'stocklist-annual-sale'])}}" class="btn-green-underline mt-0 modal-cursor-disable-footer"><span><b>DOWNLOAD NOW</b></span></a>
            </div>
        </div>
        <div class="item col-12 product-box text-center validatemail8">
            <div class="col-12 p-0 text-title-inspiraitons pt-3" style="background-color: #f7f7f7;">
                <p class="m-0"><b>MAGAZINE 23ND EDITION</b><br>COVETED</p>
            </div>
            <div class="col-12 p-0 py-3" style="background-color: #f7f7f7;">
                <a href="https://www.covetedition.com/coveted-edition-magazine-twenty-three-edition/?utm_source=website&utm_medium=partnersfooter-toinspire&utm_content=circu-coveted23&utm_campaign=covetedition23" target="_blank">
                    <img src="/img/footer/coveted-magazine-23nd-edition.png" alt="Magazine 23nd edition Coveted" class="img-fluid">
                </a>
            </div>
            <div class="col-12 p-0 py-2 email-input" style="background-color: #f7f7f7;">
                <input type="email" name="email" class="form-ebooks-email mb-2 emailebook8" placeholder="EMAIL*" autocomplete="off" />
                <p class="d-none" style="position: absolute;display: block;font-size: 9px;color: #352820;font-weight: 600;right: 40px;top: 10px;z-index: 9;background: 0 0;text-transform: uppercase;">email incorrect</p>
            </div>
            <div class="col-12 p-0 pb-3" style="background-color: #f7f7f7;">
                <a rel="modal:open" href="{{route('modal-ebooks-catalogues', ['ebook' => 'coveted-magazine-22nd-edition'])}}" class="btn-green-underline mt-0 modal-cursor-disable-footer"><span><b>DOWNLOAD NOW</b></span></a>
            </div>
        </div>
        <div class="item col-12 product-box text-center validatemail9">
            <div class="col-12 p-0 text-title-inspiraitons pt-3" style="background-color: #f7f7f7;">
                <p class="m-0"><b>CATALOGUE</b><br> BOCA DO LOBO</p>
            </div>
            <div class="col-12 p-0 py-3" style="background-color: #f7f7f7;">
                <a href="https://www.bocadolobo.com/en/landing-page/download-catalogue?utm_source=website&utm_medium=partnersfooter-toinspire-cc&utm_content=bocadolobo-catalogue&utm_campaign=catalogue" target="_blank">
                    <img src="/img/footer/bl-catalogue.png" alt="Catalogue Boca do Lobo" class="img-fluid">
                </a>
            </div>
            <div class="col-12 p-0 py-2 email-input" style="background-color: #f7f7f7;">
                <input type="email" name="email" class="form-ebooks-email mb-2 emailebook9" placeholder="EMAIL*" autocomplete="off" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }" />
                <p class="d-none" style="position: absolute;display: block;font-size: 9px;color: #352820;font-weight: 600;right: 40px;top: 10px;z-index: 9;background: 0 0;text-transform: uppercase;">email incorrect</p>
            </div>
            <div class="col-12 p-0 pb-3" style="background-color: #f7f7f7;">
                <a rel="modal:open" href="{{route('modal-ebooks-catalogues', ['ebook' => 'catalogue-boca-do-lobo'])}}" class="btn-green-underline mt-0 modal-cursor-disable-footer"><span><b>DOWNLOAD NOW</b></span></a>
            </div>
        </div>
    </div>
</div>