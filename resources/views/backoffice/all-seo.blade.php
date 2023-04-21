@extends('layouts.master-backoffice')
@section('meta')
<title>Backoffice - SEO</title>
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
    table {
        table-layout:fixed;
    }

    table td {
        overflow:hidden;
    }

    .table-white-spaces{
        white-space: normal;
    }


</style>
@endsection
@section('main-content')

<div class="container-fluid">
    <div class="row m-0">
        <div class="col-12">
            <div class="col-12 my-3">
                <h3 class="mb-2 text-uppercase" style="color: #89bab6;font-size:2rem !important;text-align:center"><b>ALL SEO</b></h3>
            </div>

            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col" width="100">Id</th>
                        <th scope="col" width="200">Page</th>
                        <th scope="col" width="500">Meta Title</th>
                        <th scope="col" width="100">Update</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($meta_data as $meta)
                        <tr>
                            <th class="pl-4">{{$meta->id}}</th>
                            <td><a href="/edit/seo/{!! $meta->id !!}">{{$meta->page_name}}</a></td>
                            <td>{{$meta->meta_title}}</td>
                            <td class="pl-5"><a href="/edit/seo/{!! $meta->id !!}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

<script>

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

</script>

@endsection
@section('footer-includes')

@endsection

