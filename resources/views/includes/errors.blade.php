@if(count($errors))
	<div class="form-group float-left clearfix">
		<alert class="alert alert-danger" role="alert">
			<span onclick="this.parentElement.style.display='none'"
                    class="position-absolute" style="right:10px; cursor:pointer;"> <i class="fas fa-times"></i> </span>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</alert>
	</div>
@endif