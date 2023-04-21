@extends('layouts.master-backoffice')
@section('meta')
<title>Backoffice - New Project</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
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
                <h3 class="mb-2 text-uppercase" style="color: #89bab6;font-size:2rem !important;text-align:center"><b>Create a new project</b></h3>
            </div>

            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row m-0">
                        <div class="form-group col-6 pl-0 pr-2">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" value="{{ old('title') }}" id="title" name="title" placeholder="Insert title to project" onblur="showSlug()" required>
                        </div>
                        <div class="form-group col-6 pr-0 pl-2">
                            <label for="sub_title">Sub Title:</label>
                            <input type="sub_title" class="form-control" value="{{ old('sub_title') }}" id="sub_title" name="sub_title" placeholder="Insert sub title to project">
                        </div>
                    </div>
                    <p id="slug-text">https://circu.net/inspirations/</p>
                    <div class="form-group d-none">
                        <label for="slug">Slug:</label>
                        <input type="text" class="form-control" value="{{ old('slug') }}" id="slug" name="slug" placeholder="Insert the slug to project. Ex: project-circu-magical-furniture">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="description" rows="15" placeholder="Insert your project content">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control" value="{{ old('date', date('Y-m-d')) }}" id="published_at" name="published_at" required>
                    </div>
                    <div class="form-group row m-0">
                        <label for="is_active" class="p-0">Category:</label>
                            @foreach($project_type as $category)
                                <div class="form-group col-4 d-flex">
                                    <input type="checkbox" name="category[]" id="category" value="{{$category->name}} {{ old('category[]') }}" style="display:block;width:15px">
                                    <p class="ml-3 mb-0">{{$category->name}} </p>
                                </div>
                            @endforeach
                    </div>
                    <div class="form-group">
                        <label for="products">Select products:</label>
                        <select class="select-product" required multiple="multiple" name="products[]" id="products" data-live-search="true" data-maximum-selection-length="4">
                            @foreach ($products as $product)
                                <option value="{{$product->id}}">
                                    {{$product->name}} {{$product->sub_category->sub_category_languages[0]->name}}
                                </option>
                            @endforeach
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="meta">Meta Description:</label>
                        <textarea name="meta_description" id="meta_description" cols="30" rows="2" maxlength="200" placeholder="Insert the meta description to project">{{ old('meta_description') }}</textarea>
                        <div class="d-flex justify-content-end align-items-center">
                            <span id="charCounter1" style="text-transform:lowercase;">200</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="key_words">Key Words:</label>
                        <textarea name="key_words" id="key_words" cols="30" rows="2" maxlength="200" placeholder="Insert the key words to project">{{ old('key_words') }}</textarea>
                        <div class="d-flex justify-content-end align-items-center">
                            <span id="charCounter2" style="text-transform:lowercase;"></span>
                        </div>
                    </div>
                    <div class="form-group row m-0">
                        <label for="is_active" class="p-0">Project is actived?</label>
                        <div class="form-group col-4 d-flex">
                            <input type="checkbox" name="is_active" id="is_active" onclick="checkedBox(this)" value="1" style="display:block;width:15px" checked>
                            <p class="ml-3 mb-0">Yes</p>
                        </div>
                        <div class="form-group col-4 d-flex">
                            <input type="checkbox" name="is_active" id="is_active" onclick="checkedBox(this)" value="0" style="display:block;width:15px">
                            <p class="ml-3 mb-0">No</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row m-0">
                            <div class="col-8 p-0">
                                <label for="image">Thumbnail image: *please insert a image with dimensions: 850x950</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                            </div>
                            <div class="col-4 px-4">
                                <img src="" alt="" class="preview-img" style="max-width: 89px; max-height: 100px">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image">Banner image: *please insert a image with dimensions: 500x600 or 1200x600</label>
                        <input type="file" class="form-control" id="banner" name="banner[]" accept="image/*" multiple required>
                    </div>
                    <div class="col-12 p-0 m-auto d-flex justify-content-between">
                        <a class="btn-primary btn" href="{{url()->previous()}}" style="border-radius: 0.50rem; padding: 10px 24px"> < BACK </a>
                        <button class="btn bg-gradient-success btn-ajax" type="submit">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- <script src="https://cdn.ckeditor.com/4.20.2/full-all/ckeditor.js"></script> --}}

<script src="https://cdn.tiny.cloud/1/my9ztv3a3drx46ktolxf8hdqvfrd28mzr2tolcfv2vdwy24u/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>

$(document).one("click", ".btn-ajax", function () {

$('form').submit(function(event) {
    event.preventDefault();

    var slug = $('input[name="slug"]').val();
    var category = $(this).find("#category").val();
    var meta_description = $(this).find('input[name="meta_description"]').val();
    var key_words = $(this).find('input[name="key_words"]').val();
    var published_at = $(this).find('#published_at').val();
    var is_active = $(this).find("#is_active").val();

    console.log(slug, category, meta_description, key_words, is_active)

    $.ajax({
    url: "{{ route('process-create-new-project') }}",
    type: 'POST', 
    data:{
         "slug":slug,
         "category": category,
         "meta_description": meta_description,
         "key_words": key_words,
         "published_at": published_at,
         "is_active": is_active,
         '_token':'{{ csrf_token() }}'
    },
    success: function(data) {
        console.log(data);
    },
    error: function(error, data) {
        console.log(data);
    }
});

});

});

tinymce.init({
  selector: 'textarea#description',
  plugins: 'code anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
  toolbar: 'undo redo | code | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | styleselect | bold italic | alignleft aligncenter alignright alignjustify |align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',

  image_title: true,
  automatic_uploads: true,
  images_upload_url: '{{route("image-upload1")}}',
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: (cb, value, meta) => {
    const input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    input.addEventListener('change', (e) => {
      const file = e.target.files[0];

      const reader = new FileReader();
      reader.addEventListener('load', () => {
        const id = file.name;
        const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        const base64 = reader.result.split(',')[1];
        const blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        cb(blobInfo.blobUri(), { title: file.name });
      });
      reader.readAsDataURL(file);
    });

    input.click();
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
});


$(function() {
    $('#image').change(function (){
        const file = $(this)[0].files[0]
        const fileReader = new FileReader()
        fileReader.onloadend = function(){
            $('.preview-img').attr('src', fileReader.result)
        }
        fileReader.readAsDataURL(file)
    })
});

var charLimit = 200;
$('#maxCharLimit').html(charLimit);

//initialize Char Counter
$('#charCounter1').html(200);
$('#charCounter2').html(200);

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



    // CKEDITOR.replace( 'description', {
    //     filebrowserUploadUrl: "{{route('image-upload', ['_token' => csrf_token() ])}}",
    //     filebrowserUploadMethod: 'form'
    // });

    function showSlug() {
        const title = document.getElementById('title').value;
    
        const str = title.replace(/[\u0300-\u036f]/g, '').replace(/([^\w]+|\s+)/g, '-').replace(/\-\-+/g, '-').replace(/(^-+|-+$)/, '').toLowerCase();
    
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

