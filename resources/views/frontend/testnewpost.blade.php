@extends('frontendtemplate')

@section('content')
<!-- Main layout -->
<main>

  <div class="container">

    <!-- Section: Create Page -->
    <section class="my-5">

      <!-- Grid row -->
      <div class="row">

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
          <div class="col-lg-8">

            <div class="mb-4">            
              
              <div class="col-sm-10">
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
                  <input type="text" name="title" id="form1" class="form-control">
                  <label class="form-check-label" for="form1" class=""></label>
                </div>
              </div>
            </div>


            <div>
              <textarea id="summernote" name="body"></textarea>     
            </div>          

            <button class="btn btn-primary" type="submit" style="float: left;">Publish</button>
            <button class="btn btn-primary" style="float: right;"><a href="{{route('main')}}" class="text-decoration-none text-white">Cancel</a></button>
          </div>
        </form> 

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Create Page -->

</div>

</main>
<!-- Main layout -->


<script>
    $('#summernote').summernote({
      placeholder: 'Hello Bootstrap 4',
      tabsize: 2,
      height: 100
    });
</script>



@endsection
