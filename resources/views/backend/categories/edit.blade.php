@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	  <!-- Page Heading -->
	  	<h1 class="h3 mb-4 text-gray-800">
	  		<i class="fas fa-tag pr-3"></i> 
	  		Category
	  	</h1>

		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<div class="row">
					<div class="col-10">
						<h4 class="m-0 font-weight-bold text-primary"> 
			              Update Category
			            </h4>
					</div>

					<div class="col-2">
						<a href="{{ route('categories.index') }}" class="btn btn-outline-primary btn-block float-right"> 
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
				
	            <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
	            	@csrf
	            	@method('PUT')
					<div class="form-group row">
						<label for="categoryTitle" class="col-sm-2 col-form-label"> Name </label>
				    	
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="categoryTitle" value="{{$category->name}}" name="catName">
				    	</div>
					</div>	


					<div class="form-group row">
						<div class="col-sm-2"></div>
					    <div class="col-sm-10">
					      <button type="submit" class="btn btn-primary">
					      	<i class="fas fa-upload"></i> Update
					      </button>
					    </div>
					</div>

				</form>
				

	        </div>
		</div>

	</div>

@endsection