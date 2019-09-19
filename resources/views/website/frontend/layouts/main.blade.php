<!DOCTYPE html>
<html lang="en">
  @include('website.frontend.layouts.head')
  <body>

   @include('website.frontend.layouts.sidebar')

    <div id="colorlib-page">
     @include('website.frontend.layouts.header')
        <!--Home Slider Section-->
      <section class="ftco-fixed clearfix">
      	<div class="image js-fullheight float-left">
      		<div class="home-slider owl-carousel js-fullheight">


                  @foreach ($data['homeslider'] as $homeslider )
                  <div class="slider-item js-fullheight" style="background-image: url({{asset('images/' . $homeslider->image)}});">
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


		        {{-- <div class="slider-item js-fullheight" style="background-image: url({{asset('website/frontend/images/bg_2.jpg')}});">
		          <div class="overlay"></div>
		          <div class="container">
		            <div class="row slider-text align-items-end" data-scrollax-parent="true">
		              <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		              	<p class="cat"><span>Model</span></p>
		                <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Canadian Girl make your world go round</h1>
		              </div>
		            </div>
		          </div>
		        </div> --}}
		      </div>
      	</div>
      	<div class="page-container float-right">

      		<div class="row">
                    @foreach ($data['homeblog'] as $items)


      		<div class="blog-entry ftco-animate">
                <a href="blog-single.html" class="blog-image">
                <img src="{{asset('images/' . $items->image)}}" class="img-fluid" alt="">
                </a>
                <div class="text py-4">
                  <div class="meta">
                    <div><a href="#">July 29, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">{{$items->title}}</a></h3>
                  <p>{{Str::limit($items->description, $limit=100, $end = '...')}}</p>
                </div>
              </div>
              @endforeach


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
