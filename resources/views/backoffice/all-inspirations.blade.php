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
	.btn-green-update{
	background-color: #89bab6;
	color: #fff;
	border: 1px solid #89bab6;
	padding: 5px 10px;
	}
	.btn-red-delete{
	background-color: #ff7489;
	color: #fff;
	border: 1px solid #ff7489;
	padding: 5px 10px;
	}
	.modal button[type=submit] {
	width: 100%;
	font-size: 13px;
	letter-spacing: 0px;
	font-weight: 700;
	padding: 10px 24px;
	margin: 4px 4px 16px 4px;
	background-color: #e91e63;
	border-color: #e91e63;
	box-shadow: 0 14px 26px -12px rgb(233 30 99 / 40%), 0 4px 23px 0 rgb(233 30 99 / 15%), 0 8px 10px -5px rgb(233 30 99 / 20%);
	}
</style>
@endsection
@section('main-content')
<!-- container-->
<div class="container-fluid">
	<div class="row m-0">
		<div class="col-12">
			@if($search)
			<div class="col-12 my-3">
				<h4 class="mb-2 text-uppercase" style="color: #89bab6;font-size:2rem !important;text-align:center;"><b>Search for {{$search}}</b></h4>
			</div>
			<div class="col-12 clearfix position-relative text-center mb-3 mt-1 p-0">
				<div class="slideToggle">
					<a class="bg-gradient-info mt-0" style="border-radius: .5rem" href="/dashboard/new-project"><span><b>NEW INSPIRATION <i class="fas fa-caret-right"></i></b></span></a>
				</div>
			</div>	
			@else
			<div class="col-12 my-3">
				<h4 class="mb-2 text-uppercase" style="color: #89bab6;font-size:2rem !important;text-align:center;"><b>All Inspirations</b></h4>
			</div>
			<div class="col-12 clearfix position-relative text-center mb-3 mt-1 p-0">
				<div class="slideToggle">
					<a class="bg-gradient-info mt-0" style="border-radius: .5rem" href="/dashboard/new-project"><span><b>NEW INSPIRATION <i class="fas fa-caret-right"></i></b></span></a>
				</div>
			</div>	
			@endif
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row m-0">
		<div class="col-12 p-0">
			<div class="row m-0">
				@foreach($projects as $project)
				    @if($search)
                        <div class="col-6 col-md-3 py-2 m-0">
                            <a href="/inspirations/{{$project->projects->slug}}" target="_blank">
                                <img src="/img/inspirations/thumbnails/{{$project->projects->slug}}/{{$project->projects->slug}}-thumbnail.jpg" alt="" class="img-fluid">
                                <p>{{$project->title}}</p>
                            </a>
                            <div class="col-12 p-0 justify-content-between d-flex m-auto">
                                <a href="/dashboard/projects/edit/{{$project->id}}" style="border-radius: .5rem" class="btn bg-gradient-success">Update</a>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDelete">Delete</button>
                            </div>
                        </div>
                    @else
                        <div class="col-6 col-md-3 py-1">
                            <a href="/inspirations/{{$project->slug}}" target="_blank">
                                <img src="/img/inspirations/thumbnails/{{$project->slug}}/{{$project->slug}}-thumbnail.jpg" alt="" class="img-fluid">
                                <p>{{$project->projects_languages[0]->title}}</p>
                            </a>
                            <div class="col-12 p-0 justify-content-between d-flex m-auto">
                                <a href="/dashboard/projects/edit/{{$project->id}}" class="btn bg-gradient-success" style="border-radius: .5rem">Update</a>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDelete">Delete</button>
                            </div>
                        </div>
                    @endif
					<!-- Modal -->
						<div class="modal fade modal-center" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="modalDeleteLabel">Do you really want to delete this project?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-footer justify-content-around">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Not</button>
										<form action="/dashboard/projects/{{$project->id}}" method="POST">
											@csrf
											@method('DELETE')
												<button type="submit" class="btn btn-primary">Yes</button>
										</form>
									</div>
								</div>
							</div>
						</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('#modalDelete').on('shown.bs.modal', function () {
	    $('#myInput').trigger('focus')
	});
</script>
@endsection
@section('footer-includes')
@endsection