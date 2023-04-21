@php session_start(); @endphp
<html>
<style>
    .modal{
        padding: 15px 0px 0px 0px !important;
    }
    @media only screen and (min-width: 1799px){
        .modal {
            width: 50%;
        }
    }
    
    .modal span {
        color: inherit !important;
        line-height: inherit !important;
        letter-spacing: inherit !important;
        float: none !important;
        font-size: inherit !important;
    }
    .modal .div-form-sample h1 {
        color: #8bb9b6;
        font-size: 1.3rem;
        letter-spacing: 2px;
        font-weight: 700;
        padding: 0 5px 0 5px;
        margin: 18px 0 0 0;
        text-align: center;
    }
    .modal .div-form-sample .input-block {
        margin: 0 0 16px !important;
        width: 100%;
    }
    .modal .div-form-sample span {
        font-size: 12px !important;
    }
    .modal .div-form-sample button[type=submit] {
        width: 100%;
        font-size: 12px;
        letter-spacing: 2px;
        font-weight: 700;
        padding: 6px 0 5px 0;
        margin: 0px 0px 10px 0px;
        background-color: #8cbab7;
    }
    .title-related-products {
        font-family: 'RalewayMedium', sans-serif;
        text-transform: uppercase;
        font-size: 0.9rem;
        margin: 0px;
        padding: 0px 0px 5px 0px;
        letter-spacing: 1px;
        color: #9fbfbc !important;
        font-weight: normal;
        cursor: auto !important;
    }
    .title-modal-get-info-samples{
        font-family: 'RalewayMedium', sans-serif;
        text-transform: uppercase;
        font-size: 1.3rem;
        margin: 0px;
        padding: 0px 0px 2px 0px;
        letter-spacing: 1px;
        color: #9fbfbc !important;
        font-weight: bold;
        cursor: auto !important;
    }
    .subtitle-modal-get-info-samples{
        font-family: 'RalewayMedium', sans-serif;
        text-transform: uppercase;
        font-size: 1.1rem;
        margin: 0px;
        padding: 0px 0px 5px 0px;
        letter-spacing: 1px;
        color: #9fbfbc !important;
        font-weight: normal;
        cursor: auto !important;
    }
    @media(max-width:992px){
        .title-modal-get-info-samples {
            font-family: 'RalewayMedium', sans-serif;
            text-transform: uppercase;
            font-size: 1.2rem;
            margin: 0px;
            padding: 0px 0px 0px 0px;
            letter-spacing: 1px;
            color: #9fbfbc !important;
            font-weight: bold;
            cursor: auto !important;
        }
        .subtitle-modal-get-info-samples {
            font-family: 'RalewayMedium', sans-serif;
            text-transform: uppercase;
            font-size: 0.9rem;
            margin: 0px;
            padding: 0px 0px 5px 0px;
            letter-spacing: 1px;
            color: #9fbfbc !important;
            font-weight: normal;
            cursor: auto !important;
        }
    }

    .product-box {
        padding: 0.09rem;
        margin: 0;
    }

    .product_thumb {
        width: 100%;
        background-color: #F7F7F7;
        margin: 0;
        float: left;
        text-align: center;
    }

    .product--title {
        font-family: 'Raleway', sans-serif;
        text-align: center;
        color: #666666 !important;
        font-size: 0.73rem;
    }

    .product--title .name {
        font-weight: bold;
        text-transform: uppercase;
    }

    .product--title .sub_category {
        text-transform: lowercase;
    }

    .clearfix {
        content: "";
        display: table;
        /* float: none; */
        clear: both;
    }

    .product-box--content {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        visibility: hidden;
        display: block;
        width: 100%;
        height: 100%;
        background-color: #FFFFFF;
        z-index: 3;
        padding: 12px;
        -webkit-transition: all 100ms ease 0ms;
        -o-transition: all 100ms ease 0ms;
        transition: all 100ms ease 0ms;
    }

    .product-box--share {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 12px;
    }

    .slideToggle a,
    .slideToggle a:hover {
        font-size: 11px;
        letter-spacing: 1px;
        padding: 5px 20px 4px;
        margin: 12px auto 0px;
        z-index: 2;
        background-color: #98b9b5;
        color: #FFFFFF;
        border: 1px solid #98b9b5;
        display: inline-block;
    }

    .product-box:hover .product-box--hover,
    .product-box:hover .product-box--content {
        visibility: visible;
        -webkit-box-shadow: 0px 0px 22px 0px rgb(0 0 0 / 30%);
        -moz-box-shadow: 0px 0px 22px 0px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 0px 22px 0px rgb(0 0 0 / 30%);
    }

    .product-box--share {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 12px;
    }

    .btn-green-underline-buy-now, .btn-green-underline-buy-now:hover {
        font-size: 12px;
        letter-spacing: 1px;
        padding: 5px 35px 4px;
        margin: 12px auto 0px;
        z-index: 2;
        background-color: #98b9b5;
        color: #FFFFFF;
        border: 1px solid #98b9b5;
        display: inline-block; 
        cursor: pointer;
    }
    a:not([href]):not([tabindex]),a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
        color: #FFFFFF;
        text-decoration: none;
    }
</style>
<head>
    <script>
        var tracker = getUrl();
    </script>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="row m-0 pb-4">
            <div class="col-12 col-md-5 p-0">
                <div class="row m-0 align-items-center h-100">
                    <div class="col-12 p-0 ">
                        <div class="row m-0">
                            <div class="col-12 p-0">
                                <div class="row m-0 justify-content-center">
                                    <div class="col-6 col-md-12">
                                        <img src="/img/icons/finishes-new/thumbnail/{{$finish[0]->slug}}.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-0 text-center d-none d-md-block">
                                <p class="title-modal-get-info-samples">{{$finish[0]->key_words}}
                                </p>
                                <p class="subtitle-modal-get-info-samples">
                                        {{ str_replace('-', ' ', $finish[0]->slug) }}
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-12 col-md-7 p-0">
                <div class="row m-0 pt-2">
                    <div class="col-12 p-0 pr-4 pl-4 pl-md-0 div-form-sample">
                        <form method="post" class="form-popup form-parsley" action="{{ route('process.sample-info', $finish[0]->slug) }}">

                                <div class="row">

                                    <div class="form-popup-header col-12 text-center">
                                        <p class="title-modal-get-info-samples py-0 py-md-3">REQUEST INFO</p>
                                        <p class="subtitle-modal-get-info-samples d-block d-md-none">{{ str_replace('-', ' ', $finish[0]->slug) }}</p>
                                    </div>

                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_name" value="{{ str_replace('-', ' ', $finish[0]->slug) }}" />
                                    <input type="hidden" name="origin" class="origin" />
                                    <input type="hidden" name="referrer" class="referrer" />
                                    <input type="hidden" name="lead_path" class="lead_path" />
                                    <input type="text" name="interested" class="interested" />

                                    <div class="col-sm-6">
                                        <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <span class="txt-request">First Name:*</span>
                                            <input type="text" name="first_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <span class="txt-request">Last Name:*</span>
                                            <input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <span class="txt-request">Email:*</span>
                                            <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }}">
                                            <span class="txt-request">Country:*</span>
                                            <select name="country" class="custom-select country country-price" data-parsley-required="true" value="{{ old('country') }}">
                                                @include('includes.options-country')
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="input-block {{ $errors->has('city') ? 'has-error' : '' }}">
                                            <span class="txt-request">City:*</span>
                                            <input type="text" name="city" class="form-control city" data-parsley-required="true" value="{{ old('city') }}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <div class="input-block {{ $errors->has('state') ? 'has-error' : '' }} d-none state-price">
                                            <span class="txt-request">State:*</span>
                                            <select name="state" class="custom-select state" data-parsley-required="true" value="{{ old('state') }}">
                                                @include('includes.options-state')
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 p-0 formvisible" style="display: none;">
                                        <div class="row m-0">
                                            <div class="col-sm-12">
                                                <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
                                                    <span class="txt-request">Phone:*</span>
                                                    <input type="text" name="phone" class="form-control phone" data-parsley-required="true" value="{{ old('phone') }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
                                                    <span class="txt-request">Occupation:*</span>
                                                    <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
                                                        @include('includes.options-occupation')
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
                                                    <span class="txt-request">Company:*</span>
                                                    <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }}">
                                                    <span class="txt-request">How did your hear about us?*</span>
                                                    <select name="hear_about" class="custom-select hear_about" data-parsley-required="true" value="{{ old('hear_about') }}">
                                                        @include('includes.options-hear-about')
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3"><input type="checkbox" name="virtual_meeting" value="yes" id="virtual_meeting"><label for="virtual_meeting" class="label_left"></label><span class="blue">BOOK A MEETING WITH OUR MAGICAL TEAM</span></div>

                                    <div class="col-12">
                                        <button type="submit" onclick="ga('send','event','Get Price','Request Price','Product-getprice');" id="request-price-tag" class="btn-request-piece btn-prevent-multiple"><i class="spinner-visible fas fa-spinner fas-spin"></i> GET INFO</button>
                                    </div>

                                </div>

                            </form>
                    </div>
                </div>
            </div>
            @if($related_samples_products->count() < 4)
            @else
            <div class="col-12 text-center d-none d-lg-block">
                <p class="title-related-products">related products</p>
            </div>
                @foreach ($related_samples_products as $related)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box d-none d-lg-block" >
                    <div class="product_thumb py-4 px-0" >
                        <img src="/img/products/thumbnails/{{$related->product->slug}}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">

                        <div class="product--title">
                            <span class="name">{{$related->product->name}}</span>
                            <span class="sub_category">{{$related->product->sub_category->sub_category_languages[0]->name}}</span>
                        </div>
                        <div class="col-12 clearfix position-relative mt-1 p-0">
                            <div class="slideToggle">
                                <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/products/{{$related->product->slug}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                            </div>
                        </div>
                        <div class="product-box--content px-0">
                            <div>
                                @if(file_exists('img/products/'.$related->product->slug.'/finishes/'.$related->product->slug.'-circu-magical-furniture-'.$finish[0]->slug.'.png'))
                                    <img src="/img/products/{{$related->product->slug}}/finishes/{{$related->product->slug}}-circu-magical-furniture-{{$finish[0]->slug}}.png" alt="">
                                @else
                                   <img src="/img/products/thumbnails/{{$related->product->slug}}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
                                @endif
                            </div>
                            <div class="col-12 clearfix position-relative mt-4 p-0">
                                <div class="slideToggle">
                                    <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/products/{{$related->product->slug}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
    

    <script type="text/javascript">
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
        $('.form-popup input[name="email"]').on('change', function() {
            $('.formvisible').css('display', 'block');
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

        
    </script>

</body>

</html>