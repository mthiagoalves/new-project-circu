@extends('layouts.master-backoffice')
@section('meta')
<title>Backoffice - New Project</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
@section('head-includes')

<style>
    p {
        font-family: 'RalewayMedium', sans-serif;
    }
    form span {
        margin: 0;
        color: #777;
        line-height: 22px;
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 1px;
        text-transform: uppercase;
        float: initial;
    }


</style>
@endsection
@section('main-content')

<div class="container-fluid">
    <div class="row m-0">
        <div class="col-12">
            <div class="col-12 my-3">
                <h3 class="mb-2 text-uppercase" style="color: #89bab6;font-size:2rem !important;text-align:center"><b>Editing SEO: {{$meta_data->page_name}}</b></h3>
            </div>

            <div class="col-md-10 offset-md-1">
                <form action="/update/seo/{{$meta_data->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" value="{!! $meta_data->meta_title !!}" id="meta_title" name="meta_title" placeholder="Insert title to project" onblur="showSlug()" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="meta">Meta Description:</label>
                        <textarea name="meta_description" id="meta_description" cols="30" rows="4" maxlength="300" placeholder="Insert the meta description to project">{!! $meta_data->meta_description !!}</textarea>
                        <div class="d-flex justify-content-end align-items-center">
                            <span id="charCounter1" style="text-transform:lowercase;">300</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="key_words">Key Words:</label>
                        <textarea name="key_words" id="key_words" cols="30" rows="4" maxlength="300" placeholder="Insert the key words to project">{!! $meta_data->key_words !!}</textarea>
                        <div class="d-flex justify-content-end align-items-center">
                            <span id="charCounter2" style="text-transform:lowercase;">300</span>
                        </div>
                    </div>
                    <div class="col-12 p-0 m-auto d-flex justify-content-between">
                        <a class="btn-primary btn" href="{{url()->previous()}}" style="border-radius: 0.50rem;padding: 10px 24px;"> < BACK </a>
                        <button class="btn bg-gradient-success" type="submit">SAVE</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.ckeditor.com/4.20.2/full-all/ckeditor.js"></script>

<script>

var charLimit = 300;
$('#maxCharLimit').html(charLimit);

//initialize Char Counter
$('#charCounter1').html(300);
$('#charCounter2').html(300);

$('#meta_description').on('keyup', function () {
    var currentCharCount = $(this).val().length;
    // update counter
    $('#charCounter1').html(`${charLimit - currentCharCount}, chars left`);
});

$('#key_words').on('keyup', function () {
    var currentCharCount = $(this).val().length;
    // update counter
    $('#charCounter2').html(`${charLimit - currentCharCount}, chars left`);
});

  $(".select-product").select2({
      closeOnSelect : false,
      maximumSelectionLength: 4,
      placeholder : "Select 4 products",
      allowHtml: true,
      allowClear: true,
      tags: true,
      search: true,
    });



    CKEDITOR.replace( 'description', {
        filebrowserUploadUrl: "{{route('image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    function showSlug() {
        const title = document.getElementById('title').value;
    
        const str = title.replace(/ /g, "-").toLowerCase();
    
        document.getElementById('slug-text').innerHTML = `https://circu.net/inspirations/${str}`;

        document.getElementById('slug').value = str;
    }

    function checkedBox(caller) {
        var checks = document.querySelectorAll('#is_active');   
        console.log(checks) 
        for(let i = 0; i < checks.length; i++) {
        checks[i].checked = checks[i] == caller;   
        }
    }

</script>

@endsection
@section('footer-includes')

@endsection

