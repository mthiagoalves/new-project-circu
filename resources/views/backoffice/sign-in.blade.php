@extends('layouts.master-backoffice-login')
@section('meta')
<title>Backoffice - Login</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
@endsection
@section('head-includes')
@endsection
@section('main-content')
<div class="page-header align-items-start min-vh-100" style="background-image: url('/img/backoffice/backgroung-backoffice-login.jpg');">
	<span class="mask bg-gradient-dark opacity-6"></span>
	<div class="container my-auto">
		<div class="row">
			<div class="col-lg-4 col-md-8 col-12 mx-auto">
				<div class="card z-index-0 fadeIn3 fadeInBottom">
					<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
						<div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Backoffice Circu</h4>
                            <div class="row mt-3">
                               <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign In</h4>
                            </div>
                          </div>
					</div>
					<div class="card-body">
						<form role="form" class="text-start" method="POST" action="{{ route('process.backoffice-login') }}" data-validate="parsley">
                            @csrf
							<div class="input-group input-group-outline my-3 {{ $errors->has('email') ? 'has-error' : '' }}">
								
								<input type="email" placeholder="EMAIL" class="form-control" name="email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change">
							</div>
							<div class="input-group input-group-outline mb-3 {{ $errors->has('password') ? 'has-error' : '' }}">
								
								<input type="password" placeholder="PASSWORD" class="form-control" name="password" data-parsley-required="true" data-parsley-trigger="change">
							</div>
							<div class="form-check form-switch d-flex align-items-center mb-3">
								<input class="form-check-input" type="checkbox" style="display:block !important" id="rememberMe" checked>
								<label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
							</div>
							<div class="text-center">
								<button type="submit" onclick="ga('send','event','Backoffice Login','Request Access','Backoffice-requestAcess');" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('footer-includes')
<script type="text/javascript"></script>
@endsection