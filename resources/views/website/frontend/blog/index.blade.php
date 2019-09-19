<!DOCTYPE html>
<html lang="en">
  @include('website.frontend.layouts.head')
  <body>

    @include('website.frontend.layouts.sidebar')

    <div id="colorlib-page">
      @include('website.frontend.layouts.header')

      <section class="ftco-fixed clearfix">
      	<div class="image js-fullheight float-left">

            @foreach ($data['blogslider'] as $blogslider )

            @endforeach
      		<div class="home-slider owl-carousel js-fullheight">
		        <div class="slider-item js-fullheight" style="background-image: url({{asset('images/' . $blogslider->image)}});">
		          <div class="overlay"></div>
		          <div class="container">
		            <div class="row slider-text align-items-end" data-scrollax-parent="true">
		              <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                      <p class="breadcrumbs"><span><a href="index.html">{{$blogslider->title}}</a></span> <span></span></p>
                      <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$blogslider->description}}</h1>
		              </div>
		            </div>
		          </div>
                </div>
              </div>



      	</div><!-- end:image -->

      	<div class="page-container float-right">
      		<div class="row">
                  @foreach ($data['blogpage'] as $blogpage )

                  @endforeach
            <div class="col-md-12">
              <h2 class="mb-3">{{$blogpage->title}}</h2>
              <p>{{$blogpage->description}}</p>
              <p>
                <img src="{{asset('images/' . $blogpage->image)}}" alt="" class="img-fluid">
              </p>

              <div class="about-author d-flex pt-5">
                {{-- <div class="bio align-self-md-center mr-4">
                  <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                </div> --}}
                <div class="desc align-self-md-center">
                  <h3><!-- update auther user--></h3>
                  <p><!--auther des --></p>
                </div>
              </div>



            </div> <!-- .col-md-12 -->
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
