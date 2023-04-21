@php session_start(); @endphp
<html>

<head>
    <script>
        var tracker = getUrl();
    </script>
</head>

<body>

    <div class="col-12 p-0">

        <div class="row m-0 p-0">

            <div class="form-popup-header col-12">
                <h1>CLICK TO DISCOVER MORE</h1>
            </div>

            <div class="col-12 col-md-6 p-2" style="cursor:pointer;">
                <a class="submit-form" data-house="boy">
                    <img src="/img/our-houses/pop-up/boy-room.jpg" class="img-fluid" style="width: 100%;">
                    <div class="text-hover text-center position-absolute" style="bottom: 6%;top: unset;">
                    <div class="btn-video grow">START VIRTUAL TOUR</div>
                </div>
                </a>
            </div>
            <div class="col-12 col-md-6 p-2" style="cursor:pointer;">
                <a class="submit-form" data-house="girl">
                    <img src="/img/our-houses/pop-up/girl-room.jpg" class="img-fluid" style="width: 100%;">
                    <div class="text-hover text-center position-absolute" style="bottom: 6%;top: unset;">
                    <div class="btn-video grow">START VIRTUAL TOUR</div>
                </div>
                </a>
            </div>
            <div class="col-12 col-md-6 p-2" style="cursor:pointer;">
                <a class="submit-form" data-house="covet">
                    <img src="/img/our-houses/pop-up/kids-room.jpg" class="img-fluid" style="width: 100%;">
                    <div class="text-hover text-center position-absolute" style="bottom: 6%;top: unset;">
                    <div class="btn-video grow">EXPLORE NOW</div>
                </div>
                </a>
            </div>
            <div class="col-12 col-md-6 p-2">
                <img src="/img/our-houses/pop-up/play-room.jpg" class="img-fluid" style="width: 100%;">
                <div class="text-hover text-center position-absolute" style="bottom: 6%;top: unset;">
                    <div class="btn-video-playroom grow">SOON PLAYROOM</div>
                </div>
            </div>

        </div>

    </div>

</body>
<script>
    $('.submit-form').click(function(){
        $('#form-acess-rooms [name="more_info"]').val($(this).attr('data-house'));
        $('#form-acess-rooms').submit();

    });
    </script>
</html>