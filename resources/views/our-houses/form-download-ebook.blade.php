<form method="post" class="form-popup form-parsley form-download-ebook" action="{{ route('process.our-houses-ebook') }}">

    <div class="row m-0 p-0 justify-content-center">

        {{ csrf_field() }}


        <input type="hidden" name="origin" class="origin" />
        <input type="hidden" name="referrer" class="referrer" />
        <input type="hidden" name="lead_path" class="lead_path" />
        <input type="text" name="interested" class="interested" />
        <input type="hidden" name="prod-type" value="Ebook" />
        <input type="hidden" name="product_slug" value="inside-every-child-dream-bedroom" />
        <input type="hidden" name="product_name" value="Ebook Our Houses" />

        <div class="col-12 col-md-10 p-0 pb-2 pb-md-0">
            <div class="input-block m-0 mb-md-4 {{ $errors->has('email') ? 'has-error' : '' }}">
                <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" placeholder="Email" />
            </div>
        </div>



        <div class="col-12 col-md-10 px-0 pt-0 pb-3">
            <div class="row m-0 p-0">
                <label class="p-0 input-costum">
                    <input type="checkbox" id="masdsle" name="checkMeeting" value="virtual tour meeting">
                    <span class="checkmark"></span>
                </label>
                <div class="col-11  p-0 pl-1 pl-md-0 text-left">
                    <label for="msdale" style="color: #fff !important;font-size:11px;">Have Read And Accept Your <a href="https://circu.net/privacy-policy" target="_blank" style="color:white;font-weight:bold;border-bottom: 0.7px solid white;">Privacy Policy*</a></label>
                </div>
            </div>
        </div>

        <div class="col-12 text-center p-0 pb-3 pb-md-0 pl-md-3">
            <button type="submit" id="request-price-tag" class="btn-free-download">FREE DOWNLOAD</button>
        </div>

    </div>

</form>
<script src="/js/parsley.min.js"></script>
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