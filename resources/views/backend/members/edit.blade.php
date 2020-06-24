@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
    <!-- <h2>Show with form / old value</h2><br> -->
    <div class="row py-3">
      <div class="col-md-12">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div> 
        @endif

        <div class="row">
			<div class="col-10">
				<h4 class="m-0 font-weight-bold text-primary"> 
	            	Edit Member
	            </h4>
			</div>

			<div class="col-2">
				<a href="{{ route('members.index') }}" class="btn btn-outline-primary btn-block float-right"> 
            		<i class="fa fa-backward pr-2"></i>	Go Back 
            	</a>
			</div>
		</div>
		<br>
        <form method="post" action="{{route('members.update',$member->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group row">
            <label for="memberName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="memberName" name="memberName" value="{{$member->user->name}}">
            </div>
          </div>

          <div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="email" name="email" class="form-control" id="email" value="{{$member->user->email}}">
				</div>
		  </div>

		  <div class="form-group row">
            <label for="inputLogo" class="col-sm-2 col-form-label">Avatar</label>
            <div class="col-sm-10">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" href="#old">old</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" role="tab" href="#new">new</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="old" role="tabpanel">
                  <img src="{{asset($member->avatar)}}" class="img-fliud w-25" alt="oldimage">
                <input type="hidden" name="oldlogo" value="{{$member->avatar}}">
                </div>
                <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="profile-tab">
                  <input type="file" class="form-control-file" id="inputLogo" name="avatar">
                </div>
              </div> 
            </div>
          </div>

		  <div class="form-group row">
				<label class="col-sm-2 col-form-label">
					Gender:</label>
				<div class="col-sm-10">
					<input type="radio" name="gender" value="Male" 
          {{ $member->gender == 'Male'? 'checked':''}}>Male
					<input type="radio" name="gender" value="Female"
          {{$member->gender == 'Female' ? 'checked':''}}>Female<br>
				</div>
		 </div>

		 <div class="form-group row">
			<label for="address" class="col-sm-2 col-form-label">Address</label>
			<div class="col-sm-10">
				<textarea type="text" class="form-control" value="" name="address" id="address">{{$member->address}}</textarea>
			</div>
		</div>                         

          <div class="form-group row">
            <div class="col-sm-6">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection