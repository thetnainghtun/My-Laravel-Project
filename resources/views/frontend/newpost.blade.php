@extends('frontendtemplate')

@section('content')

<div class="container">
  <section class="my-3">
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

        <!-- Grid column -->
        <form action="{{route('posts.store')}}" method="POST">
          @csrf
          <div class="col-md-10">

            <div class="mbF-4">            

              <div class="md-form">
                <select name="category" id="Category" class="form-control">
                  <option value="">Select Category</option>
                  @foreach($categories as $row)
                  <option value="{{$row->id}}">{{$row->name}}</option>
                  @endforeach
                </select>
              </div>              
            </div>

            <!-- Post title -->
            <div class="card mb-4 post-title-panel">
              <div class="card-body">
                <div class="md-form mt-1 mb-0">
                  <!-- <label class="form-check-label" for="form1" class=""></label> -->
                  <input type="text" name="title" placeholder="Title" id="form1" class="form-control">
                  
                </div>
              </div>
            </div>


            <div>
              <textarea id="summernote" name="body" class="col-lg-12"></textarea>     
            </div>          
            
            <div style="margin-top: -50px;">
            <button class="btn btn-primary" type="submit" style="font-family: 'Frank Ruhl Libre', serif; float: left;">Publish
            </button>
            <button class="btn btn-primary" style="font-family: 'Frank Ruhl Libre', serif;float: right;"><a href="{{route('main')}}" class="text-decoration-none text-white">Cancel</a></button>
            </div>

          </div>

          </form>         

      </div>

      <div class="col-md-4">
        <!-- Card -->
        <div class="card card-cascade narrower">

          <!-- Card image -->
          <div class="view view-cascade gradient-card-header blue-gradient">
            <h4 class="font-weight-500 mb-0">Categories</h4>
          </div>
          <!-- Card image -->

          <!-- Card content -->
          <div class="card-body card-body-cascade">
            @foreach($categories as $row)
            <fieldset class="form-check mb-4">

              <!-- <input class="form-check-input" type="checkbox" id="color-1"> -->

              <label class="form-check-label" for="color-1">{{$row->name}}</label>


            </fieldset>
            @endforeach

          </div>
          <!-- Card content -->

        </div>
        <!-- Card --> 
      </div>
    </div>
  </section>
</div>

<script>
    $('#summernote').summernote({
      placeholder: 'Content',
      tabsize: 2,
      height: 100
    });
</script>

@endsection