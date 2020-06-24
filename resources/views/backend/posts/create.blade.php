@extends('backendtemplate')

@section('content')

<!-- Begin Page Content -->
	<div class="container-fluid">
	  <!-- Page Heading -->
	  	<h1 class="h3 mb-4 text-gray-800">
	  		<i class="fas fa-tag pr-3"></i> 
	  		Posts
	  	</h1>

		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<div class="row">
					<div class="col-10">
						<h4 class="m-0 font-weight-bold text-primary"> 
			            	Create New Posts
			            </h4>
					</div>

					<div class="col-2">
						<a href="{{ route('posts.index') }}" class="btn btn-outline-primary btn-block float-right"> 
		            		<i class="fa fa-backward pr-2"></i>	Go Back 
		            	</a>
					</div>
				</div>

	        </div>
	        <div class="card-body">
	        	@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				 @endif
				
	            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
	            	@csrf
					
					<div class="form-group row">
						<label for="name" class="col-sm-1 col-form-label"></label>
						<div class="col-sm-10">
							<select name="category" id="Category" class="form-control">
								<option value="">Select Category</option>
								@foreach($categories as $row)
								<option value="{{$row->id}}">{{$row->name}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="title" class="col-sm-1 col-form-label"></label>
						<div class="col-sm-10">
							<input type="text" placeholder="Post Title" name="title" class="form-control" id="title">
						</div>
					</div>
					

					<div class="form-group row">
						<label for="body" class="col-sm-1 col-form-label"></label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" placeholder="Post" name="body" id="body"></textarea>
						</div>
					</div> 
									
					<div class="form-group row">
						<div class="col-sm-5"></div>
					    <div class="col-sm-5">
					      <button type="submit" class="btn btn-primary">
					      	<i class="fa fa-save"></i> Post
					      </button>
					    </div>
					</div>

				</form>
				

	        </div>
		</div>

	</div>
<!-- /.container-fluid -->

@endsection