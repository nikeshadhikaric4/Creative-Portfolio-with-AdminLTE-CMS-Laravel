<!DOCTYPE html>
<html lang="en">
  @include('website.frontend.layouts.head')
  <body>

    @include('website.frontend.layouts.sidebar')
    <div id="colorlib-page">
      @include('website.frontend.layouts.header')
      <section class="ftco-fixed clearfix">
      	<div class="image js-fullheight float-left">

            @foreach ($data['photographySlider'] as $slide )


      		<div class="home-slider owl-carousel js-fullheight">
              <div class="slider-item js-fullheight" style="background-image: url({{asset('images/' . $slide->image)}});">
		          <div class="overlay"></div>
		          <div class="container">
		            <div class="row slider-text align-items-end" data-scrollax-parent="true">
		              <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		              	<p class="cat"><span>{{$slide->title}}</span></p>
		                <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$slide->description}}</h1>
		              </div>
		            </div>
		          </div>
		        </div>



            </div>
            @endforeach


      	</div>
      	<div class="page-container-no-gutters float-right">
      		<div class="row no-gutters">

                @foreach ($data['photographypictures'] as $photos )

                @endforeach
      			<div class="col-md-6 blog-entry-3 ftco-animate">
      				<a href="blog-single.html" class="blog-img d-flex justify-content-center align-items-end" style="background-image: url({{asset('images/' . $photos->image )}});">
	      				<div class="text p-4">
	      					<span>{{$photos->title}}</span>
	      					<h3>{{$photos->description}}</h3>
	      				</div>
	      			</a>
                  </div>



      		</div>
      		<div class="row mt-5">
	          <div class="col text-center">
	            <div class="block-27">
	              <ul>
	                <li><a href="#">&lt;</a></li>
	                <li class="active"><span>1</span></li>
	                <li><a href="#">2</a></li>
	                <li><a href="#">3</a></li>
	                <li><a href="#">4</a></li>
	                <li><a href="#">5</a></li>
	                <li><a href="#">&gt;</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
      	</div><!-- end: page-container-->
      </section>

		  <!-- loader -->
		  <div id="ftco-loader" class="show fullscreen">
		  	<svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
		  </div>

  	</div>


  @include('website.frontend.layouts.foot')
  </body>
</html>
