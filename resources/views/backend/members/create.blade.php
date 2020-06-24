@extends('backendtemplate')

@section('content')

<!-- Begin Page Content -->
	<div class="container-fluid">
	  <!-- Page Heading -->
	  	<h1 class="h3 mb-4 text-gray-800">
	  		<i class="fas fa-tag pr-3"></i> 
	  		Members
	  	</h1>

		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<div class="row">
					<div class="col-10">
						<h4 class="m-0 font-weight-bold text-primary"> 
			            	Create New Member
			            </h4>
					</div>

					<div class="col-2">
						<a href="{{ route('members.index') }}" class="btn btn-outline-primary btn-block float-right"> 
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
				
	            <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
	            	@csrf

					<div class="form-group row">
						<label for="memberName" class="col-sm-2 col-form-label"> Name </label>
				    	
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="memberName" placeholder="Enter Name" name="memberName">
				    	</div>
					</div>

					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<input type="email" placeholder="example@gmail.com" name="email" class="form-control" id="email">
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" placeholder="password" name="password" class="form-control" id="password">
						</div>
					</div>

					<div class="form-group row">
						<label for="avatar" class="col-sm-2 col-form-label">Avatar</label>
						<div class="col-sm-10">
							<input type="file" class="file-control" name="avatar" id="avatar">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">
							Gender:</label>
						<div class="col-sm-10">
							<input type="radio" name="gender" value="Male">Male
							<input type="radio" name="gender" value="Female">Female<br>
						</div>
					</div>

					<div class="form-group row">
						<label for="address" class="col-sm-2 col-form-label">Address</label>
						<div class="col-sm-10">
							<textarea type="text" class="form-control" placeholder="Address" name="address" id="address"></textarea>
						</div>
					</div>
									
					<div class="form-group row">
						<div class="col-sm-2"></div>
					    <div class="col-sm-10">
					      <button type="submit" class="btn btn-primary">
					      	<i class="fa fa-save"></i> Register
					      </button>
					    </div>
					</div>

				</form>
				

	        </div>
		</div>

	</div>
<!-- /.container-fluid -->

@endsection