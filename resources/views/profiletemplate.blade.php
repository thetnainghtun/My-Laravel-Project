<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Profile</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('profile/css/bootstrap.min.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('profile/css/mdb.min.css')}}">

  <!-- Your custom styles (optional) -->
  <style>
    .card.card-cascade .view.gradient-card-header {
            padding: 1.1rem 1rem;
        }

        .card.card-cascade .view {
            box-shadow: 0 5px 12px 0 rgba(0, 0, 0, 0.2), 0 2px 8px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body class="fixed-sn white-skin">


  <!-- Main layout -->
  <div class="container-fluid" id="oldprofile">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                <h5 class="mb-0 font-weight-bold">Profile</h5>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-img-top card-body-cascade text-center mb-4">
                <img src="{{asset($user->member->avatar)}}" width="300px;" alt="User Photo" class="z-depth-1 mb-3 mx-auto" />

                <p class="text-muted"><small>Profile Detail</small></p>

                <div class="form-group row">
                  <label for="memberName" class="offset-3 col-lg-2 col-form-label">Name:</label>
                  <div class="col-lg-4">
                  <p class="">{{$user->name}}</p>                    
                  </div>
                </div>

                <div class="form-group row">
                  <label for="memberName" class="offset-3 col-lg-2 col-form-label">Email:</label>
                  <div class="col-lg-4">                                      
                    <p class="">{{$user->email}}</p>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="memberName" class="offset-3 col-lg-2 col-form-label">Address:</label>
                  <div class="col-lg-4">                                      
                    <p class="">{{$user->member->address}}</p>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="memberName" class="offset-3 col-lg-2 col-form-label">Gender:</label>
                  <div class="col-lg-4">                                      
                    <p class="">{{$user->member->gender}}</p>
                  </div>
                </div>

                <div class="row flex-center">
                  <a href="{{route('main',Auth::user()->id)}}">
                  <button class="btn btn-success btn-rounded btn-sm" id=""class="text-decoration-none text-white">Back</button></a>

                  <button class="btn btn-info w-25 btn-rounded btn-sm" id="editButton">Edit</button><br>
                  
                <form method="POST" action="{{route('members.destroy',Auth::user()->id)}}"
                   onsubmit="return confirm('Are you sure?')" class="float-left">
                  @csrf
                  @method('DELETE')
                  <button type="submit "class="btn btn-danger btn-rounded btn-sm">
                    Delete
                  </button>
                </form>
                </div>
              </div>
              <!-- Card content -->

      </div>
      </div>
    </div>

  </div>
  <!-- Main layout -->
  <div id="editProfile">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card card-cascade narrower">

                <!-- Card image -->
                <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                  <h5 class="mb-0 font-weight-bold">Edit Account</h5>
                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">

                  <!-- Edit Form -->
                  <form method="post" action="{{route('members.update',Auth::user()->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- First row -->
                    <div class="row">
                      
                        <div class="col-md-12">
                          <label for="inputLogo" class="col-sm-2 col-form-label">Avatar</label>
                            <div class="md-form mb-0">
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
                                    <img src="{{asset($user->member->avatar)}}" class="img-fliud w-50" alt="oldimage">
                                  <input type="hidden" name="oldlogo" value="{{$user->member->avatar}}">
                                  </div>
                                  <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="profile-tab">
                                    <input type="file" class="form-control-file" id="inputLogo" name="avatar">
                                  </div>
                                </div> 
                              </div>
                          </div>
                        </div>
                    </div>

                    <div class="row">

                      <!-- First column -->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="form2" class="form-control validate" value="{{$user->name}}" name="memberName">
                          <label for="form2" data-error="wrong" data-success="right">Name</label>
                        </div>
                      </div>
                      <!-- Second column -->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="form2" class="form-control validate" value="{{$user->email}}" name="email">
                          <label for="form2" data-error="wrong" data-success="right">Email</label>
                        </div>
                      </div>
                    </div>
                    <!-- First row -->

                   
                   <div class="form-group row">
                     <label class="col-sm-2 col-form-label">
                       Gender:
                     </label>
                     <select name="gender">
                       <option value="{{ $user->member->gender == 'Male'? 'checked':''}}">
                        
                         Male
                       </option>
                       <option value="{{ $user->member->gender == 'Female'? 'checked':''}}">
                        Female</option>
                     </select>
                     <!-- <div >
                       <input type="radio" name="gender">
                       <label>Male</label>
                     </div> -->
                   </div>

                 
                    <!-- Second row -->

                    <!-- Third row -->
                    <div class="row">

                      <!-- First column -->
                      <div class="col-md-12">
                        <div class="md-form mb-0">
                          <textarea type="text" id="form78" class="md-textarea form-control" rows="3" name="address">{{$user->member->address}}</textarea>
                          <label for="form78">Address</label>
                        </div>
                      </div>
                    </div>
                    <!-- Third row -->

                    <!-- Fourth row -->
                    <div class="row">
                      <div class="col-md-6 text-center my-4">                 
                        <button class="btn btn-danger btn-rounded"><a href="{{route('members.show',Auth::user()->id)}}" class="text-decoration-none text-white">Cancel</a></button>
                      </div>
                      <div class="col-md-6 text-center my-4">
                        <input type="submit" value="Update" class="btn btn-success btn-rounded">
                      </div>
                    </div>
                    
                    <!-- Fourth row -->

                  </form>
                  <!-- Edit Form -->

                </div>
                <!-- Card content -->

              </div>
        </div>
      </div>
      
    </div>
  </div>
  
  

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="{{ asset('profile/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('profile/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('profile/js/bootstrap.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('profile/js/mdb.min.js')}}"></script>
  <!-- Custom scripts -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

  </script>

  <script type="text/javascript">
    $(document).ready(function(){

      $("#editProfile").hide();

      $("#editButton").click(function(){

        $("#editProfile").show(1000);
        $("#oldprofile").hide(1000);
      });
    });
  </script>
</body>

</html>
