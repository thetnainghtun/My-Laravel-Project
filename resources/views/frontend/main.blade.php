@extends('frontendtemplate')

@section('content')
<div class="container mt-1 pt-1">
	<div class="row">

		<div class="col-md-6">
			<a type="button" style="text-align: center;" onclick="" href="{{route('newpost')}}"  data-toggle="tooltip" data-placement="top" title="Add Content" class="btn btn-primary"><i class="fa fa-plus-circle"></i>New Post</a>
		</div>

		<!-- <div class="col-md-6">
			<form class="form-inline">
				<div class="md-form my-0 col-md-6">
					<input class="form-control" type="text" placeholder="Search" aria-label="Search" >
				</div>
			</form>
		</div> -->		
	</div>

	<div class="row mt-0 pt-3">
		<div class="col-md-9">
			<!-- Section: Blog v.3 -->
			<section class="pb-3 text-center text-lg-left">

				<!-- Grid row -->
				<div class="row" id="pst">
					
					<!-- Grid column -->

					<!-- Grid column -->
					
					@foreach($posts as $row)
					<div class="col-lg-10 ml-xl-4 mb-4" style=" padding: 20px 50px; border-radius: 10px; background-color: #e0e0e0;" >
						
						<!-- Grid row -->
						<div class="row">				

							<!-- Grid column -->
							<div class="col-xl-2 col-md-4  text-sm-center text-md-right text-lg-left">
								<p class="text-primary font-large font-weight-bold mb-1 spacing">
									
									<strong>{{$row->category->name}}</strong>
									
								</p>
							</div>
							<!-- Grid column -->

							<!-- Grid column -->
							<div class="col-xl-5 col-md-4 text-sm-center text-md-right">
								<p class="font-small text">
									<em >{{\Carbon\Carbon::parse( $row->created_at)->diffForHumans()}}</em>
								</p>         
							</div>
							<!-- Grid column -->

							<!-- Grid column -->
							<div class="col-xl-5 col-md-4 text-sm-center text-md-right">
								<p class=" text-primary font-large font-weight-bold mb-1 spacing">{{$row->user->name}}</p>        
							</div>
							<!-- Grid column -->
							

						</div>
						<!-- Grid row -->

						<h4 class="mb-3 text-dark mt-0">
							<strong>
								<a>{{$row->title}}</a>
							</strong>
						</h4>
						<p class="text-dark">{!!$row->body!!}
						</p>

						<!-- Deep-orange posts-->
						<a href="{{route('detailpost',$row->id)}}" class="btn btn-deep-orange btn-rounded btn-sm float-right  text-white font-weight-bold mr-5" style="font-family: 'Frank Ruhl Libre', serif; font-size: 13px;">Read more</a>
						

						<!-- <div id="showcomment"></div> -->


					</div>	
					@endforeach	

					
					<!-- Grid column -->

					</div>
					{{ $posts->links() }}		


				<!-- Grid row -->

				<hr>
				<!-- Grid row -->


			</section>
			<!-- Section: Blog v.3 -->

			<!-- Pagination dark grey -->
			<nav class="mb-5 pb-2">
				<ul class="pagination pg-darkgrey flex-center">
					<!-- Arrow left -->
					<li class="page-item">
						<a class="page-link grey-text" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">Previous</span>
						</a>
					</li>

					<!-- Numbers -->
					<li class="page-item active">
						<a class="page-link">1</a>
					</li>
					<li class="page-item">
						<a class="page-link grey-text">2</a>
					</li>
					<li class="page-item">
						<a class="page-link grey-text">3</a>
					</li>
					<li class="page-item">
						<a class="page-link grey-text">4</a>
					</li>
					<li class="page-item">
						<a class="page-link grey-text">5</a>
					</li>

					<!-- Arrow right -->
					<li class="page-item">
						<a class="page-link grey-text" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Next</span>
						</a>
					</li>
				</ul>
			</nav>
			<!-- Pagination dark grey -->
		</div>

		<div class="col-md-3  px-4 mt-1 blue-grey lighten-5">
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
						<a href="{{route('categoryfilter',$row->id)}}" class="category" data-category = "{{$row->id}}">
							<label class="form-check-label" for="color-1">{{$row->name}}</label>
						</a>

					</fieldset>
					@endforeach

				</div>
				<!-- Card content -->

			</div>
			<!-- Card -->	
		</div>
	</div>



</div>



@endsection

<!-- @section('script')
<script type="text/javascript">

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$(document).ready(function(){
		$('.category').click(function(){
			var id = $(this).data('category');
			alert(id);
			var html="";
			$.post('/category_data',{id:id},function(res){
				$.each(res,function(i,v){
					html+=`<div>



							</div>`;

</script> -->
