@php session_start(); @endphp
<html>

<head>
    <script>
        var tracker = getUrl();
    </script>
</head>
<style>
    @media only screen and (min-width: 1799px) {
        .modal {
            width: 30%;
        }
    }


    .modal {
        background-color: transparent !important;
        padding: 0 !important;
        -webkit-box-shadow: 0 0 5px #fff;
        -moz-box-shadow: 0 0 5px #fff;
        -o-box-shadow: 0 0 5px #fff;
        -ms-box-shadow: 0 0 5px #fff;
        box-shadow: 0 0 5px #fff;
    }

    .close-modal {
        display: none !important;
    }
</style>

<body>


    <form method="post" class="form-popup form-parsley" action="{{ route('process.search') }}">

        <div class="row m-0">
            {{ csrf_field() }}

            <input type="hidden" name="origin" class="origin" />
            <input type="hidden" name="referrer" class="referrer" />
            <input type="hidden" name="lead_path" class="lead_path" />
            <input type="text" name="interested" class="interested" />

            <div class="col-10 p-0 py-2" style="background-color: white;">
                <input type="text" style="border: none !important;border-radius: 0 !important;" name="term" class="form-control term" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="SEARCH..." />
            </div>

            <div class="col-2 p-0 py-2" style="background-color: #8cbab7;">
                <button type="submit" onclick="ga('send','event','Get Price','Request Price','Product-getprice');" id="request-price-tag" class="btn-request-piece btn-prevent-multiple m-0 p-0"><img style="width: 16.5px;float: none !important;margin-top: -3px;filter: invert(100%);" src="/img/header/loupe.svg" /></button>
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

</html>