@extends('layouts.master-backoffice')
@section('meta')
<title>Editing: {{$product->name}}</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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

    .text-label{
        font-size: 0.875rem;
        font-weight: 400;
        margin-bottom: 0.5rem;
        color: #7b809a;
        margin-left: 0.25rem;
        text-transform: uppercase;
    }

</style>
@endsection
@section('main-content')

<div class="container-fluid">
    <div class="row m-0">
        <div class="col-12">
            <div class="col-12 my-3">
                <h3 class="mb-2 text-uppercase" style="color: #89bab6;font-size:2rem !important;text-align:center"><b>Editing: {{$product->name}}</b></h3>
            </div>

            <div class="col-md-12">
                <div class="form-group row m-0 justify-content-between">
                    <div class="col-4 p-0 text-center">
                        <form method="POST">
                            @csrf
                            <label for="stock">In Stock?</label>
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="hidden" name="stocklist" value="0">
                                @if($product_option != null && $product_option->quantity != 0)
                                    <button type="submit" class="btn btn-stock bg-gradient-primary"><i class="fa fa-check" aria-hidden="true"></i></button>
                                @else
                                    <button type="submit" class="btn btn-stock bg-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                                @endif
                        </form>
                    </div>
                    <div class="col-4 p-0 text-center">
                        <form method="POST">
                            @csrf
                            <label for="is_active">Is Actived?</label>
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="hidden" name="is_active" value="{{$product->is_active}}">
                            @if($product->is_active != null && $product->is_active != 0)
                                <button type="submit" class="btn btn-active bg-gradient-primary"><i class="fa fa-check" aria-hidden="true"></i></button>
                            @else
                                <button type="submit" class="btn btn-active bg-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                            @endif
                        </form>
                    </div>
                    <div class="col-4 p-0 text-center">
                        <form method="POST">
                            @csrf
                            <label for="is_active">Is New?</label>
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="hidden" name="is_new" value="{{$product->is_new}}">
                            @if($product->is_new != null && $product->is_new != 0)
                                <button type="submit" class="btn btn-new bg-gradient-primary"><i class="fa fa-check" aria-hidden="true"></i></button>
                            @else
                                <button type="submit" class="btn btn-new bg-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                            @endif
                        </form>
                    </div>
                </div>
                
                <form action="/dashboard/product/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="row m-0">
                        <div class="form-group col-6 pl-0 pr-2">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" placeholder="Insert title to project">
                        </div>
                        <div class="form-group col-6 pr-0 pl-2">
                            <label for="category">Select Category:</label>
                            <select class="form-select form-select-sm" aria-label="Select a Category" required name="category" id="category" data-live-search="true">
                                <option value="">Select a Category</option>
                                @foreach ($sub_category as $category)
                                    <option value="{{$category->slug}}">
                                       {{$category->sub_category_languages[0]->name}}
                                    </option>
                                @endforeach
                              </select>
                        </div>
                    </div>
                    <p id="slug-text">https://www.circu.net/products/{{$product->slug}}</p>
                    <div class="form-group d-none">
                        <label for="slug">Slug:</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{$product->slug}}" placeholder="Insert the slug to project. Ex: project-circu-magical-furniture">
                    </div>
                    <p class="text-label">Description:</p>
                    <div class="form-group">
                        <textarea name="description" id="description" rows="30" placeholder="Insert your project content">{!!$product_languages->description!!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Small Description:</label>
                        <input type="text" class="form-control" id="description_small" name="description_small" value="{!!$product_languages->description_small!!}" placeholder="Insert a small description">
                    </div>
                    <div class="form-group row m-0">
                        <div class="form-group col-6 pl-0 pr-2">
                            <label for="title_inspirational">Title Inspirations:</label>
                            <input type="text" class="form-control" id="title_inspirational" name="title_inspirational" value="{{$product_languages->title_inspirational}}" placeholder="Insert title to project" onblur="showSlug()">
                        </div>
                        <div class="form-group col-6 pr-0 pl-2">
                            <label for="phrase_inspirational">Phrase Inspirational:</label>
                            <input type="text" class="form-control" id="phrase_inspirational" name="phrase_inspirational" value="{{$product_languages->phrase_inspirational}}" placeholder="Insert title to project" onblur="showSlug()">
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="form-group col-6 pl-0 pr-2">
                            <label for="products">Select products matches: <i class="fa fa-question-circle" aria-hidden="true"></i></label>
                            <select class="select-product-matches" required multiple="multiple" name="product_matches[]" id="product_matches[]" data-live-search="true" data-maximum-selection-length="4">
                                @foreach($all_products as $products)
                                    <option value="{{$products->id}}">
                                        {{$products->name}} {{$products->sub_category->sub_category_languages[0]->name}}
                                    </option>
                                @endforeach
                              </select>
                        </div>
                        <div class="form-group col-6 pr-0 pl-2">
                            <label for="products">Select similar products: <i class="fa fa-question-circle" aria-hidden="true"></i></label>
                            <select class="select-product-similar" required multiple="multiple" name="product_similar[]" id="product_similar" data-live-search="true" data-maximum-selection-length="4">
                                @foreach($all_products as $products)
                                    <option value="{{$products->id}}">
                                        {{$products->name}} {{$products->sub_category->sub_category_languages[0]->name}}
                                    </option>
                                @endforeach
                              </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="text-label">Prices:</p>
                        <div class="row m-0">
                            <div class="col-3 pl-0 pr-2">
                                <label for="euro">Euros:</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Insert price in euros">
                            </div>
                            <div class="col-3 pr-0 pl-2">
                                <label for="euro">Dollars:</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Insert price in dollars">
                            </div>
                            <div class="col-6 pr-0 pl-2">
                                <label for="euro">External link shop:</label>
                                <input type="text" class="form-control" id="external_shop_url" name="external_shop_url" placeholder="Insert link shop covet house, if exist">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="published_at">Date:</label>
                        <input type="date" class="form-control" id="published_at" value="{{$project->published_at}}" name="published_at">
                    </div>
                    
                    <div class="form-group">
                        <label for="meta">Meta Description:</label>
                        <textarea name="meta_description" id="meta_description" cols="30" rows="2" maxlength="160" placeholder="Insert the meta description to project">{{$project->meta_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="key_words">Key Words</label>
                        <textarea name="key_words" id="key_words" cols="30" rows="2" maxlength="160" placeholder="Insert the key words to project">{{$project->key_words}}</textarea>
                    </div>

                    <div class="form-group row m-0">
                        @foreach($project_type as $category)
                            <div class="form-group col-4 d-flex">
                                <input type="checkbox" name="category[]" id="category" value="{{$category->name}}" style="display:block;width:15px">
                                <p class="ml-3 mb-0">{{$category->name}} </p>
                            </div>
                        @endforeach
                    </div>
   
                    <div class="form-group">
                        <label for="image">Thumbnail image: *please insert a image with dimensions: 850x950</label>
                        <input type="file" class="form-control" id="date" name="image">
                    </div>
                    <div class="form-group">
                        <label for="image">Banner image: *please insert a image with dimensions: 850x950</label>
                        <input type="file" class="form-control" id="banner" name="banner[]" multiple>
                    </div> --}}
                    <div class="col-12 p-0 m-auto d-flex justify-content-between">
                        <a class="btn-primary btn" href="{{url()->previous()}}" style="border-radius: 0.50rem;padding: 10px 24px;"> < BACK </a>
                        <button class="btn bg-gradient-success" type="submit">SAVE</button>
                    </div> 
                </form>
                
                
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.ckeditor.com/4.20.2/basic/ckeditor.js"></script>
<script type="text/javascript">


    CKEDITOR.replace( 'description', {
    });

    function checkedBox(caller) {
     var checks = document.querySelectorAll('#inputCheckBox');   
     console.log(checks) 

   }

   $(".select-product-matches").select2({
      closeOnSelect : false,
      maximumSelectionLength: 4,
      placeholder : "Select 4 products",
      allowHtml: true,
      allowClear: true,
      tags: true,
      search: true,
    });

   $(".select-product-similar").select2({
      closeOnSelect : false,
      maximumSelectionLength: 4,
      placeholder : "Select 4 products",
      allowHtml: true,
      allowClear: true,
      tags: true,
      search: true,
    });

   $(document).ready(function(){

        $('.btn-stock').click(function(e){
            e.preventDefault();

            if($(this).hasClass('bg-gradient-primary')){
                $(this).removeClass('bg-gradient-primary');
                $(this).addClass('bg-danger');
                $(this).html('<i class="fa fa-times" aria-hidden="true"></i>');
                $(this).prev('input[name="stocklist"]').attr('value','0');
            }else {
                $(this).addClass('bg-gradient-primary');
                $(this).html('<i class="fa fa-check" aria-hidden="true"></i>');
                $(this).prev('input[name="stocklist"]').attr('value','1');
            }

            $.ajax({
                url: '{{route("backoffice-update-stocklist")}}',
                type: 'POST',
                dataType: 'json',
                headers: {
                        'X-CSRF-TOKEN': $(this).parent().children('input[name="_token"]').val()
                    },
                data: {
                    _token: $(this).parent().children('input[name="_token"]').val(),
                    product_id: $(this).parent().children('input[name="product_id"]').val(),
                    stock: $(this).parent().children('input[name="stocklist"]').val(),
                },	
                success: function(response,data){
                   if($('input[name="stocklist"]').val() == 1){
                    console.log(response)
                    alert('Product updated! In Stock.')
                   } else {
                    console.log(response)
                    alert('Product updated! Out Stock.')
                   }
                    
                },
                error: function(response){
                    console.log(response)
                }
            })
        });

        $('.btn-active').click(function(e){
            e.preventDefault();

            if($(this).hasClass('bg-gradient-primary')){
                $(this).removeClass('bg-gradient-primary');
                $(this).addClass('bg-danger');
                $(this).html('<i class="fa fa-times" aria-hidden="true"></i>');
                $(this).prev('input[name="is_active"]').attr('value','0');
            }else {
                $(this).addClass('bg-gradient-primary');
                $(this).html('<i class="fa fa-check" aria-hidden="true"></i>');
                $(this).prev('input[name="is_active"]').attr('value','1');
            }

            $.ajax({
                url: '{{route("backoffice-update-active")}}',
                type: 'POST',
                dataType: 'json',
                headers: {
                        'X-CSRF-TOKEN': $(this).parent().children('input[name="_token"]').val()
                    },
                data: {
                    _token: $(this).parent().children('input[name="_token"]').val(),
                    product_id: $(this).parent().children('input[name="product_id"]').val(),
                    is_active: $(this).parent().children('input[name="is_active"]').val(),
                },	
                success: function(response,data){
                   console.log(response, data) 
                },
                error: function(response){
                    console.log(response, data)
                }
            })
        });

        

        function removeSpaces(s) {
            return s.normalize('NFD')
                .replace(/[\u0300-\u036f]/g, "")
                .toLowerCase()
                .replace(/[- ]+/g, "-");
        }

        $('#name').change(function(){
            let slug = $('#name').val();
            let slugTrim = removeSpaces(slug);
            $('#slug-text').html(`https://www.circu.net/products/${slugTrim}`);
            $('#category').change(function(){
                let slugCategory = $('#category').val();
                let slugCategoryTrim = removeSpaces(slugCategory);
                $('#slug-text').html(`https://www.circu.net/products/${slugTrim}-${slugCategory}`);
            });
        })

       
});

  
</script>

@endsection
@section('footer-includes')




@endsection

