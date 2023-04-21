@extends('layouts.master-backoffice')
@section('meta')
<title>Backoffice - Products</title>
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
	.img-card{
	    background: #F7F7F7;
	}
	.product-title{
        font-family: 'Raleway', sans-serif;
        text-align: center;
        color: #666666;
        font-size: 0.74rem;
	}
    .product-box {
        padding: 0.09rem;
        margin: 0;
    }
    .product-title .sub_category {
        text-transform: lowercase !important;
    }
    .product-title .name {
        font-weight: bold;
        text-transform: uppercase;  
    }
    .in-stock{
        top: 15px;
        right: 15px;
        color: #ffffff;
        background: #53dd91;
        font-size: 10px;
        border-radius: 0.5rem;
    }
    .in-new{
        top: 40px;
        right: 15px;
        color: #ffffff;
        background: #507d9d;
        font-size: 10px;
        border-radius: 0.5rem;
    }
</style>
@endsection
@section('main-content')
<div class="container-fluid">
	<div class="row m-0">
		<div class="col-12">
			<div class="col-12 my-3">
				<h3 class="mb-2 text-uppercase" style="color: #89bab6;font-size:2rem !important;text-align:center"><b>ALL PRODUCTS</b></h3>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row m-0">
		@foreach($products as $product)
        @if($search)
            <div class="col-6 col-sm-6 col-md-4 p-1 col-lg-3 product-box">
                <div class="product_thumb py-4 px-3 border">
                    @if (file_exists('./img/products/thumbnails/' . $product->slug . '-circu-magical-furniture.png'))
                        <a href="/dashboard/product/edit/{{$product->id}}">
                            <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid w-100"> 
                        </a>
                    @else
                        <a href="/dashboard/product/edit/{{$product->id}}">
                            <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid w-100"> 
                        </a> 
                    @endif
                    <div class="product-title">
                        <span class="name">{{ $product->name }}</span>
                            <br>
                        <span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
                    </div>
                    <div class="col-12 clearfix position-relative mt-1 p-0">
                        <div class="slideToggle">
                            <a class="btn-green-underline mt-0" href="/dashboard/product/edit/{{$product->id}}"><span><b>EDIT <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>				
                    @php
                        foreach ($stocklist as $stock) {
                            if($product->id == $stock) {
                                echo '<div class="col-3 position-absolute mt-1 p-0 in-stock">
                                        <div class="slideToggle">
                                            <span><b>IN STOCK</b></span>
                                        </div>
                                    </div>	';
                            }
                        }
                    @endphp		
                    <div class="col-3 position-absolute mt-1 p-0 in-new">
                        <div class="slideToggle">
                            <span><b>IN STOCK</b></span>
                        </div>
                    </div>		
                </div>
            </div>
        @else
            <div class="col-6 col-sm-6 col-md-4 p-1 col-lg-3 product-box">
                <div class="product_thumb py-4 px-3 border">
                    @if (file_exists('./img/products/thumbnails/' . $product->slug . '-circu-magical-furniture.png'))
                        <a href="/dashboard/product/edit/{{$product->id}}">
                            <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid w-100"> 
                        </a>
                    @else
                        <a href="/dashboard/product/edit/{{$product->id}}">
                            <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid w-100"> 
                        </a>
                    @endif
                    <div class="product-title">
                        <span class="name">{{ $product->name }}</span>
                        <br>
                        <span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
                    </div>
                    <div class="col-12 clearfix position-relative mt-1 p-0">
                        <div class="slideToggle">
                            <a class="btn-green-underline mt-0" href="/dashboard/product/edit/{{$product->id}}"><span><b>EDIT <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>	
                   
                    @php
                        foreach ($stocklist as $stock) {
                            if($product->id == $stock) {
                                echo '<div class="col-3 position-absolute mt-1 p-0 in-stock">
                                        <div class="slideToggle">
                                            <span><b>IN STOCK</b></span>
                                        </div>
                                    </div>	';
                            }
                        }
                    @endphp	
                    @if($product->is_new)
                        <div class="col-3 position-absolute mt-1 p-0 in-new">
                            <div class="slideToggle">
                                <span><b>NEW</b></span>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif
		@endforeach
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