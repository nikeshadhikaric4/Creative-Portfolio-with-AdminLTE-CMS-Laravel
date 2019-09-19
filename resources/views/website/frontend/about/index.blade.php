<!DOCTYPE html>
<html lang="en">
  @include('website.frontend.layouts.head')
  <body>

    @include('website.frontend.layouts.sidebar')

    <div id="colorlib-page">
      @include('website.frontend.layouts.header')

      <section class="ftco-fixed clearfix">
      	<div class="image js-fullheight float-left">
              @foreach ($data['aboutpageslider'] as $item)



      		<div class="home-slider owl-carousel js-fullheight">
		        <div class="slider-item js-fullheight" style="background-image: url({{asset('images/'. $item->image)}});">
		          <div class="overlay"></div>
		          <div class="container">
		            <div class="row slider-text align-items-end" data-scrollax-parent="true">
		              <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		              	<p class="breadcrumbs"><span><a href="index.html">{{$item->title}}</a></span> <span></span></p>
                      <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$item->description}}</h1>
		              </div>
		            </div>
		          </div>
		        </div>
              </div>
              @endforeach

      	</div><!-- end:image -->
      	<div class="page-container float-right">
              @foreach ($data['about'] as $about )

              @endforeach
      		<div class="row about-section">
      			<div class="col-md-6 ftco-animate">
      				<img src="{{asset('images/' . $about->image )}}" class="img-fluid" alt="">
      			</div>
      			<div class="col-md-6 ftco-animate">
      				<h2 class="mb-4">{{$about->title}}</h2>
                  <p>{{$about->description}}</p>
      			</div>
      			<div class="col-md-12 mt-5 ftco-animate">
      				<p></p>
      				<h3 class="mb-4 mt-5">Follow us here</h3>
      				<ul class="ftco-footer-social list-unstyled">
                      <li class="ftco-animate"><a href="{{$about->twitter_link}}"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="{{$about->fb_link}}"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="{{$about->insta_link}}"><span class="icon-instagram"></span></a></li>
              </ul>
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
