<!DOCTYPE html>
<html lang="en">
    @include('website.frontend.layouts.head')

  <body>

    @include('website.frontend.layouts.sidebar')

    <div id="colorlib-page">
        @include('website.frontend.layouts.header')


      <section class="ftco-fixed clearfix">
      	<div class="image js-fullheight float-left">


      		<div class="home-slider owl-carousel js-fullheight">

                    @foreach ($data['styleslider'] as $homeslider )
              <div class="slider-item js-fullheight" style="background-image: url({{asset('images/'.$homeslider->image)}});">
		          <div class="overlay"></div>
		          <div class="container">
		            <div class="row slider-text align-items-end" data-scrollax-parent="true">
		              <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		              	<p class="cat"><span>{{$homeslider->title}}</span></p>
		                <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$homeslider->description}}</h1>
		              </div>
		            </div>
		          </div>
                </div>
                @endforeach


		      </div>
      	</div>

      	<div class="page-container float-right">
      		<div class="row">
      			<div class="col-md-12">

                        @foreach ( $data['fashionCategory'] as $vc )
	      			<div class="blog-entry-2 ftco-animate">



	      				<a href="{{$vc->video_link}}" class="blog-img popup-vimeo d-flex justify-content-center align-items-center" style="background-image: url(images/image_1.jpg);">
	      					<div class="icon d-flex justify-content-center align-items-center">
	      						<span class="icon-play"></span>
	      					</div>
	      				</a>
	      				<div class="d-flex">
		      				<div class="meta pt-4">
	                  <p>
	                  	<span><!-- user name--></span>
	                  	<span><a href="#"><!-- date--></a></span>
	                  	<span><a href="#"><!-- category--></a></span>
	                  	<span><a href="#"><!-- cmments--></a></span>
	                  </p>
	                </div>
		      				<div class="text p-5">
                              <h3 class="mb-4">{{$vc->title}}</h3>
                              <p>{{$vc->description}}</p>
		      					<p class="mt-5"><a href="blog-single.html" class="btn btn-primary">Read more</a></p>
		      				</div>
                          </div>

                      </div>
                      @endforeach

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
