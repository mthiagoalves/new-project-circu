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
      width: 70% !important;
    }
  }

  #popupxmas a.close-modal {
    position: absolute;
    top: 5px;
    right: 6px !important;
    display: block;
    width: 12px;
    height: 12px;
    text-indent: -9999px;
    background: url(/img/icons/forms/close-icon2.png) no-repeat 0 0 !important;
    filter: invert(1);
  }


  #popupxmas .titles1 p {
    color: #fff;
    text-transform: uppercase;
    font-size: 15px;
    line-height: 1.2;
    font-weight: 600;
    letter-spacing: 1px;
  }

  #popupxmas .titles2 p {
    color: #9ec1bd;
    text-transform: uppercase;
    font-size: 14px;
    line-height: 1.2;
    font-weight: 600;
    letter-spacing: 1px;
  }

  #popupxmas p {
    color: #a0a0a0;
    text-transform: uppercase;
    font-size: 12px;
    line-height: 1.2;
    font-weight: 600;
    letter-spacing: 1px;
    margin: 0px 0px 7px 0px;
  }

  @media (min-width:900px) and (max-width:1750px) {
    #popupxmas p {
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

  #popupxmas .div-right {
    height: 100%;
    bottom: 0;
    position: absolute;
    text-align: center;
  }

  #popupxmas .div-right .title {
    font-size: 11px;
    color: #fff;
    font-weight: bold;
    margin-bottom: 0.4rem;
  }

  #popupxmas .div-right .subtitle {
    font-size: 10px;
    color: #fff;
    font-weight: lighter;
    margin-bottom: 1rem;
  }

  #popupxmas .btnDownload {
    font-size: 11px;
    color: #fff;
    background-color: #9ec1bd;
    border: 1px solid #9ec1bd !important;
    font-weight: 600;
    padding: 8px 17px;
    margin: 0px 0px 7px 0px;
  }

  #popupxmas .div-center-main {
    position: absolute;
    bottom: 6%;
    text-align: center;
  }

  #popupxmas .div-center-main .title-main {
    color: #fff;
    font-weight: bold;
    margin-bottom: 0.4rem;
    font-size: 16px;
    line-height: 20px;
  }

  #popupxmas .div-center-main .subtitle-main {
    color: #fff;
    font-weight: lighter;
    margin-bottom: 1.4rem;
    font-size: 12px;
  }

  #popupxmas .div-center-main .btn-main {
    color: #a1beba;
    background-color: #fff;
    border: 1px solid #fff;
    padding: 6px 18px;
    font-size: 12px;
    letter-spacing: 1px;
    font-weight: 600;
  }

  #popupxmas .div-center-slide-s .title {
    font-size: 12px;
    color: #a0a0a0;
    font-weight: bold;
    margin: 0;
    padding-top: .5rem !important;
  }

  #popupxmas .div-center-slide-s .subtitle {
    font-size: 10px;
    color: #fff;
    font-weight: lighter;
    margin-bottom: 1rem;
  }

  #popupxmas .div-center-slide-s .btnDownload {
    font-size: 10px;
    color: #fff;
    border: 1px solid #fff;
    font-weight: lighter;
    padding: 8px 17px;
  }

  @media (max-width:1555px) and (min-width: 1400px) {
    #popupxmas .div-right {
      width: 240px;
    }
  }

  @media (max-width:1400px) and (min-width: 1200px) {
    #popupxmas .div-right {
      width: 200px;
    }
  }

  #popupxmas .modal-content {
    width: 100% !important;
  }

  #popupxmas .img-size-pop {
    width: 75%;
    margin: 0 auto;
    padding-bottom: .5rem !important;
    padding-top: .5rem !important;
  }

  #popupxmas a.close-modal {
    position: absolute;
    top: 8px;
    right: 6px !important;
    display: block;
    width: 12px;
    height: 12px;
    text-indent: -9999px;
    background: url(/img/popup/close-icon2.png) no-repeat 0 0 !important;
  }


  #popupxmas .modal-body {
    background-image: url('/img/popup-exit/background-xmas2.jpg');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
  }

  /* title graphic */
  .title {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .title img {
    width: 90%;
    height: auto;
  }

  /* mobile first grid layout */

  .grid-1 {
    display: grid;
    width: 90%;
    max-width: 900px;
    margin-top: 1%;
    margin-right: auto;
    margin-bottom: 3%;
    margin-left: auto;

    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: auto;
    grid-gap: 10px;
  }

  /* media query */
  @media only screen and (min-width: 500px) {

    .grid-1 {
      grid-template-columns: repeat(6, 1fr);
      grid-template-areas: "d1    d2    d3    d4      d5      d6"
        "d7    d8    d9    d10     d11     d12"
        "d13   d14   d15   d16     d17     d18"
        "d19   d20   d21   d22     d23     d24";
    }

  }


  /* individual items */
  .title {
    grid-area: t;
  }

  .day-1 {
    grid-area: d1;
  }

  .day-1 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-2 {
    grid-area: d2;
  }

  .day-2 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount.jpg);
  }

  .day-3 {
    grid-area: d3;
  }

  .day-3 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-4 {
    grid-area: d4;
  }

  .day-4 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-5 {
    grid-area: d5;
  }

  .day-5 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-6 {
    grid-area: d6;
  }

  .day-6 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-7 {
    grid-area: d7;
  }

  .day-7 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-8 {
    grid-area: d8;
  }

  .day-8 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-9 {
    grid-area: d9;
  }

  .day-9 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-10 {
    grid-area: d10;
  }

  .day-10 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-11 {
    grid-area: d11;
  }

  .day-11 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-12 {
    grid-area: d12;
  }

  .day-12 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-13 {
    grid-area: d13;
  }

  .day-13 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-14 {
    grid-area: d14;
  }

  .day-14 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-15 {
    grid-area: d15;
  }

  .day-15 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-16 {
    grid-area: d16;
  }

  .day-16 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-17 {
    grid-area: d17;
  }

  .day-17 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-18 {
    grid-area: d18;
  }

  .day-18 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-19 {
    grid-area: d19;
  }

  .day-19 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-20 {
    grid-area: d20;
  }

  .day-20 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-21 {
    grid-area: d21;
  }

  .day-21 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-22 {
    grid-area: d22;
  }

  .day-22 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-23 {
    grid-area: d23;
  }

  .day-23 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }

  .day-24 {
    grid-area: d24;
  }

  .day-24 .back {
    background-image: url(https://www.circu.net/img/popup-exit/xmas-discount-2x.jpg);
  }


  /* door styles */

  .grid-1 input {
    display: none;
  }

  label {
    perspective: 1000px;
    transform-style: preserve-3d;
    cursor: pointer;

    display: flex;
    min-height: 100%;
    width: 100%;
    height: 120px;
  }

  .door {
    width: 100%;
    transform-style: preserve-3d;
    transition: all 300ms;
    border: 2px dashed transparent;
    border-radius: 10px;
    border-color: #fff;
  }

  .door div {
    position: absolute;
    height: 100%;
    width: 100%;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    border-radius: 6px;

    display: flex;
    align-items: center;
    justify-content: center;

    /* typography */
    color: #fff;
    font-size: 2em;
    font-weight: bold;
    text-shadow: 1px 1px #704e36;
  }

  .door .back {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    transform: rotateY(180deg);
    overflow: hidden;
  }

  label:hover .door {
    border-color: #fff;
  }

  :checked+.door {
    transform: rotateY(180deg);
  }
</style>
<div class="modal modal-popup" id="popupxmas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="    padding: 0px;
    border-radius: 0px;
    max-width: none;
    display: none;
    left: auto;
    top: auto;">
  <div class="modal-dialog modal-lg" style="margin:0; max-width:100% !important;" aria-hidden="true">
    <div class="modal-content" style="border:none;" aria-hidden="true">
      <div class="modal-body p-0" aria-hidden="true">
        <div class="col-12 p-0">
          <div class="col-12 p-0 pt-4 text-center titles1">
            <p class="m-0" style="font-size: 20px;text-shadow: 1px 1px #704e36;font-weight: bold;">Exclusive Partnership with.. Santa Claus!</p>
            <p class="m-0" style="font-size: 16px;text-shadow: 1px 1px #704e36;font-weight: normal;">You pick a day, we give you a magical present</p>
          </div>
          <section class='grid-1'>

            <div class='day-1 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>1</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-2 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>2</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-3 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>3</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-4 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>4</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-5 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>5</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-6 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>6</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-7 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>7</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-8 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>8</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-9 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>9</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-10 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>10</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-11 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>11</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-12 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>12</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-13 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>13</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-14 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>14</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-15 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>15</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-16 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>16</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-17 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>17</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-18 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>18</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-19 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>19</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-20 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>20</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-21 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>21</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-22 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>22</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-23 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>23</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
            <div class='day-24 boxs-gifts'>
              <label>
                <input type='checkbox'>
                <div class='door'>
                  <div class='front'>24</div>
                  <div class='back'>
                    <a rel="modal:open" href="{{route('modal-discount-xmas')}}">
                      <img class="img-fluid col-12 p-0" src="/img/popup-exit/xmas-discount-2x.jpg">
                    </a>
                  </div>
                </div>
                </input>
              </label>
            </div>
          </section>
        </div>

      </div>
    </div>
  </div>
  <a href="#close-modal" rel="modal:close" class="close-modal ">Close</a>
</div>