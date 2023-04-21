@extends('layouts.master-backoffice')
@section('meta')
<title>Editing Project - {{$project->projects_languages[0]->title}}</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">

@endsection
@section('head-includes')

<style>
    p {
        font-family: 'RalewayMedium', sans-serif;
    }

</style>
@endsection
@section('main-content')

<div class="container-fluid">
    <div class="row m-0">
        <div class="col-12">
            <div class="col-12 my-3">
                <h3 class="mb-2 text-uppercase" style="color: #89bab6;font-size:2rem !important;text-align:center"><b>Editing project - {{$project->projects_languages[0]->title}}</b></h3>
            </div>

            <div class="col-md-12">
                <form action="/dashboard/projects/update/{{$project->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row m-0">
                        <div class="form-group col-6 pl-0 pr-2">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$project->projects_languages[0]->title}}" placeholder="Insert title to project" onblur="showSlug()">
                        </div>
                        <div class="form-group col-6 pr-0 pl-2">
                            <label for="sub_title">Sub Title:</label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$project->projects_languages[0]->sub_title}}" placeholder="Insert sub title to project">
                        </div>
                    </div>
                    <p id="slug-text">https://circu.net/room-by-room/{{$project->slug}}</p>
                    <div class="form-group d-none">
                        <label for="slug">Slug:</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{$project->slug}}" placeholder="Insert the slug to project. Ex: project-circu-magical-furniture">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="description" rows="30" placeholder="Insert your project content">{{$project->projects_languages[0]->description}}</textarea>
                    </div>
                    <div class="form-group">
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
                    <div class="form-group row m-0">
                        <label for="is_active" class="p-0">Project is actived?</label>
                        <div class="form-group col-4 d-flex">
                            <input type="checkbox" name="is_active" id="is_active" onclick="checkedBox(this)" {{$project->is_active == 1 ? "checked='checked'" : ""}} value="1" style="display:block;width:15px">
                            <p class="ml-3 mb-0">Yes</p>
                        </div>
                        <div class="form-group col-4 d-flex">
                            <input type="checkbox" name="is_active" id="is_active" onclick="checkedBox(this)" value="0" {{$project->is_active == 0 ? "checked='checked'" : ""}} style="display:block;width:15px">
                            <p class="ml-3 mb-0">No</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image">Thumbnail image: *please insert a image with dimensions: 850x950</label>
                        <input type="file" class="form-control" id="date" name="image">
                    </div>
                    <div class="form-group">
                        <label for="image">Banner image: *please insert a image with dimensions: 500X600 OR 1200X600</label>
                        <input type="file" class="form-control" id="banner" name="banner[]" multiple>
                    </div>
                    <p style="color: #d31c1c;">*If you modify the title of the project, please, upload all images again!</p>
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
<script type="text/javascript">

    CKEDITOR.replace( 'description', {
        filebrowserUploadUrl: "{{route('image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
    });

    function checkedBox(caller) {
     var checks = document.querySelectorAll('#is_active');   
     console.log(checks) 
     for(let i = 0; i < checks.length; i++) {
       checks[i].checked = checks[i] == caller;   
     }
   }
   
   function showSlug() {
        const title = document.getElementById('title').value;
    
        const str = title.replace(/[\u0300-\u036f]/g, '').replace(/([^\w]+|\s+)/g, '-').replace(/\-\-+/g, '-').replace(/(^-+|-+$)/, '').toLowerCase();
    
        document.getElementById('slug-text').innerHTML = `https://circu.net/inspirations/${str}`;

        document.getElementById('slug').value = str;
    }
</script>

@endsection
@section('footer-includes')



@endsection

