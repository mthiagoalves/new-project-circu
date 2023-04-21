@extends('layouts.master-backoffice')
@section('meta')
<title>Backoffice</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
@endsection
@section('head-includes')
<style>
	p {
	font-family: 'RalewayMedium', sans-serif;
	}

	.zoom-div{
		transition: 0.2s;
	}
	.zoom-div:hover{
		transform: scale(1.03);
	}
</style>
@endsection
@section('main-content')
<div class="container-fluid p-0">
	<div class="row m-0 justify-content-center">
		<div class="col-12">
			<div class="col-12 my-3">
				<h3 class="mb-2 text-uppercase" style="color: #89bab6;font-size:2rem !important;text-align:center"><b>Backoffice Circu</b></h3>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid py-4">
	<div class="row">
		<div class="col-lg-4 col-sm-4 zoom-div">
			<div class="card mb-2">
				<div class="card-header p-3 pt-2">
					<div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
						<i style="color:#fff;opacity:1;" class="fa fa-book" aria-hidden="true"></i>
					</div>
					<div class="text-end pt-1">
						<a href="/dashboard/all-inspirations" >
							<p class="text-sm mb-0 text-capitalize">Inspirations</p>
							<h4 class="mb-0">{{count($projects)}}</h4>
						</a>
					</div>
				</div>
				<hr class="dark horizontal my-0">
				<div class="card-footer p-3">
					<p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-sm-4 zoom-div">
			<div class="card mb-2">
				<div class="card-header p-3 pt-2">
					<div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
						<i style="font-size: 24px;color:#fff;opacity:1;" class="fa fa-product-hunt" aria-hidden="true"></i>
					</div>
					<div class="text-end pt-1">
						<a href="/dashboard/products">
							<p class="text-sm mb-0 text-capitalize">Products</p>
							<h4 class="mb-0">{{count($products)}}</h4>
						</a>
					</div>
				</div>
				<hr class="dark horizontal my-0">
				<div class="card-footer p-3">
					<p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-sm-4 zoom-div">
			<div class="card mb-2">
				<div class="card-header p-3 pt-2">
					<div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
						<i class="material-icons opacity-10">store</i>
					</div>
					<div class="text-end pt-1">
						<a href="/dashboard/stocklist">
							<p class="text-sm mb-0 text-capitalize">Products In Stock</p>
							<h4 class="mb-0">{{count($stocklist)}}</h4>
						</a>
					</div>
				</div>
				<hr class="dark horizontal my-0">
				<div class="card-footer p-3">
					<p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('footer-includes')
@endsection