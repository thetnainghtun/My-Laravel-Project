@extends('frontendtemplate')

@section('content')
<div class="container">

		<div class="card-header py-3 text-left mb-4">
			<div class="row">
				<div class="col-md-12">
					<h4 class="m-0 font-weight-bold text-center text-primary"> 
						Hello New User, Welcome to Discussion Corner. Share Your Ideas
					</h4>
				</div>
			</div>
		</div>


	<div class="row">	

		<div class="col-md-8">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data" class="border border-light grey lighten-3">
				@csrf

				<div class="form-group row">
					<label for="memberName" class="col-sm-2 col-form-label text-center"> Name </label>

					<div class="col-sm-9">
						<input type="text" class="form-control mt-3" id="memberName" placeholder="Enter your Name" name="memberName">
					</div>
				</div>

				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label text-center">Email</label>
					<div class="col-sm-9">
						<input type="email" placeholder="example@gmail.com" name="email" class="form-control" id="email">
					</div>
				</div>
				<div class="form-group row">
					<label for="password" class="col-sm-2 col-form-label text-center">Password</label>
					<div class="col-sm-9">
						<input type="password" placeholder="password" name="password" class="form-control" id="password">
					</div>
				</div>

				<div class="form-group row">
					<label for="avatar" class="col-sm-2 col-form-label text-center">Avatar</label>
					<div class="col-sm-9">
						<input type="file" class="file-control" name="avatar" id="avatar">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label text-center">
					Gender:</label>
					<div class="col-sm-9">
						<input type="radio" name="gender" value="Male">Male
						<input type="radio" name="gender" value="Female">Female<br>
					</div>
				</div>

				<div class="form-group row">
					<label for="address" class="col-sm-2 col-form-label text-center">Address</label>
					<div class="col-sm-9">
						<textarea type="text" class="form-control" placeholder="Address" name="address" id="address"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2"></div>
					<div class="col-sm-10">
						<button type="submit" class="btn btn-info" style="font-family: 'Frank Ruhl Libre', serif;">
							<i class="fa fa-save"></i> Register
						</button>
					</div>
				</div>

			</form>
		</div>

		<div class="col-md-4">
		 <img src="image/img11.jpg" class="rounded float-left"
		alt="human" width="350px;" height="430px;" > 
		</div>

	</div>
</div>


@endsection