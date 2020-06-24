@extends('frontendtemplate')

@section('content')

<div class="container my-5">
	<div class="col-lg-8 ml-xl-4 mb-4">

		<div class="row">
			<div class="col-lg-12 ml-xl-4" style=" padding: 50px; border-radius: 10px; background-color: #e0e0e0;" >

				<!-- Grid row -->
				<div class="row">				

					<!-- Grid column -->
					<div class="col-xl-2 col-md-4  text-sm-center text-md-right text-lg-left">
						<p class="text-primary font-large font-weight-bold mb-1 spacing">
							<a>
								<strong>{{$post->category->name}} </strong>
							</a>
						</p>
					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-xl-5 col-md-4 text-sm-center text-md-right">
						<p class="font-small text">
							<em >{{\Carbon\Carbon::parse( $post->created_at)->diffForHumans() }}</em>
						</p>         
					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-xl-5 col-md-4 text-sm-center text-md-right">
						<p class=" text-primary font-large font-weight-bold mb-1 spacing">{{$post->user->name}}</p>        
					</div>
					<!-- Grid column -->
				</div>
				<!-- Grid row -->

				<h4 class="mb-3 text-dark mt-0">
					<strong>
						<a>{{$post->title}}</a>
					</strong>
				</h4>
				<p class="text-dark">{!!$post->body!!}
				</p>

				<!-- Deep-orange -->


				<button type="button" class="btn btn-primary btn-rounded btn-sm float-right" style="font-family: 'Frank Ruhl Libre', serif; font-size: 13px;" id="{{$post->id}}">Comment</button>

				<!-- <div id="showcomment"></div> -->

				<!-- Comment  -->
				<section>
					<div id="cmd">
						<div id="fb-root" ></div>
						<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>

						<!-- <script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&appId196637688228440";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script> -->


						<div class="fb-comments" fb-xfbml-state="rendered" data-href="http://localhost:8000/detailpost" data-width="" data-numposts="5"></div>

						<!-- <script> setInterval(function(){console.log('done');FB.XFBML.parse(document.getElementById('fb-root'))}, 250)</script> -->
					</div>
				</section>
				<!-- End Comment --> 

			</div>
		</div>	
	</div>
</div>



@endsection