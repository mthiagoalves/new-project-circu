@php session_start(); @endphp
<div class="jquery-modal blocker current modal-height" style="background-color: rgba(0,0,0,0.65) !important;">
    <div id="modal-deals" class="modal">


        <script>
            var tracker = getUrl();
        </script>

        <body>
            <form method="post" class="form-popup form-parsley" action="{{ route('process.entrance-deals') }}">

                <div class="row">

                    <div class="form-popup-header col-12">
                        <h1 style="font-size:20px">WE PREPARED SOMETHING MAGICAL JUST FOR YOU!</h1>
                        <p class="text-center mb-3">Sign up to receive Circu new exclusive offers and profit<br>from the very best deall on our next purchase.</p>
                    </div>

                    {{ csrf_field() }}

                    <input type="hidden" name="more_info" value="DEALS - Receive New Exlusive Offers" />
                    <input type="hidden" name="origin" class="origin" />
                    <input type="hidden" name="referrer" class="referrer" />
                    <input type="hidden" name="lead_path" class="lead_path" />
                    <input type="text" name="interested" class="interested" />

                    <div class="col-sm-12">
                        <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                            <span class="txt-request">Email:*</span>
                            <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
                        </div>
                    </div>

                    <div class="col-12 mb-3"><input type="checkbox" name="virtual_meeting" value="yes" id="virtual_meeting"><label for="virtual_meeting" class="label_left"></label>
                        <span class="blue">I have read and accept your <a href="" target="" style="font-weight: bold;">PRIVACY POLICY*</a></span></div>
                    <div class="col-12">
                        <h4 style="font-size: 11px !important;margin-bottom:3px !important;">*The promotional discounts are valid for professionals only.</h4>
                        <h4 style="font-size: 11px !important;">**All promotional campaigns are to be used separately and cannot be combined.</h4>
                    </div>
                    <div class="col-12">
                        <button type="submit" onclick="ga('send','event','Get Price','Request Price','Product-getprice');" id="modal-entrance-deals" class="btn-request-piece btn-prevent-multiple"><i class="spinner-visible fas fa-spinner fas-spin"></i> GET MY OFFER</button>
                    </div>

                </div>

            </form>
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
            </script>

        </body>

        <a href="https://www.circu.net" class="close-modal close-modal-homepage" onclick="removeCookie()">Close</a>
    </div>
</div>