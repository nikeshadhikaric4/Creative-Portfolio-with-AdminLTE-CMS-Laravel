<!DOCTYPE html>
<html lang="en">
  @include('website.frontend.layouts.head')
  <body>

   @include('website.frontend.layouts.sidebar')

    <div id="colorlib-page">
      @include('website.frontend.layouts.header')

      <section class="ftco-fixed clearfix">
      	<div class="image js-fullheight float-left">
              @foreach ($data['contactpageSlider'] as $items )

              @endforeach

      		<div class="home-slider owl-carousel js-fullheight">
		        <div class="slider-item js-fullheight" style="background-image: url({{asset('images/'. $items->image)}});">
		          <div class="overlay"></div>
		          <div class="container">
		            <div class="row slider-text align-items-end" data-scrollax-parent="true">
		              <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		              	<p class="breadcrumbs"><span><a href="index.html">{{$items->title}}</a></span> <span>Contact</span></p>
		                <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$items->description}}</h1>
		              </div>
		            </div>
		          </div>
		        </div>
              </div>

      	</div><!-- end:image -->
      	<div class="page-container contact-section float-right">
      		<div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Contact Information</h2>
            </div>
            @foreach ( $data['contact'] as $contact )

            @endforeach
            <div class="w-100"></div>
            <div class="col-md-3">
              <p><span>Address:</span> {{$contact->address}}</p>
            </div>
            <div class="col-md-3">
              <p><span>Phone:</span> <a href="tel://1234567920">{{$contact->phone}}</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Email:</span> <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Website</span> <a href="#">{{$contact->website}}</a></p>
            </div>
          </div>
          <div class="row block-9">
            <div class="col-md-12 mb-5">
              <form action="#">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
              </form>

            </div>
            <div class="col-md-12" id="map"></div>
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
