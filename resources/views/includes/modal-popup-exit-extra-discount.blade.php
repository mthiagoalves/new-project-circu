<div class="col-12 text-center myPopupExitExtraDiscount" id="myPopupExitExtraDiscount">
    <div class="popup-content">
        <button type="button" class="close" onclick='hidePop()'>
            <span aria-hidden="true" onclick='hidePop()'>&times;</span>
        </button>
        <a href="https://www.circu.net/products?utm_source=website&utm_medium=exitpopup&utm_content=circu-1stordercampaign&utm_campaign=product">
            <img src="/img/popup-exit/popup-exit-extra-discount.jpg" class="img-fluid" id="exit-popup-image"> </a>
    </div>
</div>

<style>
    .myPopupExitExtraDiscount {
        position: fixed;
        z-index: 91111;
        width: 100%;
        display: none;
        justify-content: center;
        align-items: center;
        height: 100%;
        background: #000000a1;
        top: 0;
    }

    .myPopupExitExtraDiscount.active {
        visibility: visible;
        display: flex;
    }

    .popup-content {
        margin-top: -15px;
    }

    .popup-content button.close {
        color: #fff;
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        font-size: 23px;
        margin-right: 0px;
        margin-bottom: 15px;
        float: right;
        top: 5%;
        right: 5%;
        background: transparent;
        border: 0;
    }
</style>