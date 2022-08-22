@extends('layout')

@section('content')
            <!-- Hero Section -->
            <div class="bg-img-hero text-center mb-1" style="background-image: url(img/1920x400/img3.jpg);">
                <div class="container space-top-xl-3 py-6 py-xl-0">
                    <div class="row justify-content-center py-xl-4">
                        <!-- Info -->
                        <div class="py-xl-10 py-5">
                            <h1 class="font-size-40 font-size-xs-30 text-white font-weight-bold mb-0">About Us</h1>
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb breadcrumb-no-gutter justify-content-center mb-0">
                                <li class="breadcrumb-item font-size-14"> <a class="text-white" href="https://transvelo.github.io/mytravel-html/html/home/index.html">Home</a> </li>
                                <li class="breadcrumb-item custom-breadcrumb-item font-size-14 text-white active" aria-current="page">About</li>
                              </ol>
                            </nav>
                        </div>
                        <!-- End Info -->
                    </div>
                </div>
            </div>
            <!-- End Hero Section -->
            <!-- Slider -->
            <div class="slider border-bottom border-color-3">
                <div class="container space-1">
                    <div class="w-md-80 w-lg-70 text-center mx-md-auto mb-5 mt-3">
                        <h2 class="section-title text-black font-size-xs-28 font-weight-bold mb-0">We’re truely dedicated to make your travel experience as much simple and fun as possible!</h2>
                     </div>
                     <section class="w-lg-80 mx-auto mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="font-size-21 font-weight-bold text-center text-md-left ">Our Story</h2>
                                <p class="text-gray-1">Bringing you a modern, comfortable, and connected travel experience is one of our highest priorities and that’s why we continuously try to improve your experience when you book anything with us.</p>
                            </div><!-- /.col -->

                            <div class="col-md-6">
                                <h2 class="font-size-21 font-weight-bold text-center text-md-left ">Our mission</h2>
                                <p class="text-gray-1">We really appreciate and welcome any of suggstions you might have for us, so feel free drop us line anytime.Air conditioning, heating, desk, alarm clock, iPod docking station can be found in selected guestrooms.</p>
                            </div><!-- /.col -->

                        </div><!-- ./row -->
                    </section>
                    <div class="js-slick-carousel u-slick pb-2"
                         data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                         data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-9"
                         data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-9"
                         data-pagi-classes="text-center u-slick__pagination mt-5">
                        <div class="js-slide bg-img-hero-center rounded-xs" style="background-image: url(img/slider/img1.jpg);">
                            <div class="space-5">
                            </div>
                        </div>
                        <div class="js-slide bg-img-hero-center rounded-xs" style="background-image: url(img/slider/img2.jpg);">
                            <div class="space-5">
                            </div>
                        </div>
                        <div class="js-slide bg-img-hero-center rounded-xs" style="background-image: url(img/slider/img3.jpg);">
                            <div class="space-5">
                            </div>
                        </div>
                        <div class="js-slide bg-img-hero-center rounded-xs" style="background-image: url(img/slider/img4.jpg);">
                            <div class="space-5">
                            </div>
                        </div>
                        <div class="js-slide bg-img-hero-center rounded-xs" style="background-image: url(img/slider/img5.html);">
                            <div class="space-5">
                            </div>
                        </div>
                    </div>
                 </div>
             </div>
            <!-- End Slider -->
            <!-- Features Section -->
            <div class="container text-center space-1">
                <!-- Title -->
                <div class="w-md-80 w-lg-50 text-center mx-md-auto pb-1">
                    <h2 class="section-title text-black font-size-30 font-weight-bold">Why Choose</h2>
                </div>
                <!-- End Title -->
                <!-- Features -->
                <div class="mb-8">
                    <div class="row">
                        <!-- Icon Block -->
                        <div class="col-md-4">
                            <i class="flaticon-price text-primary font-size-80 mb-3"></i>
                            <h5 class="font-size-17 text-dark font-weight-bold mb-2"><a href="#">Competitive Pricing</a></h5>
                            <p class="text-gray-1 px-xl-2 px-uw-7">With 500+ suppliers and the purchasing power of 300 million members, mytravel.com can save you more!</p>
                        </div>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <div class="col-md-4">
                            <i class="flaticon-medal text-primary font-size-80 mb-3"></i>
                            <h5 class="font-size-17 text-dark font-weight-bold mb-2"><a href="#">Award-Winning Service</a></h5>
                            <p class="text-gray-1 px-xl-2 px-uw-7">Travel worry-free knowing that we're here if you needus, 24 hours a day</p>
                        </div>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <div class="col-md-4">
                            <i class="flaticon-global-1 text-primary font-size-80 mb-3"></i>
                            <h5 class="font-size-17 text-dark font-weight-bold mb-2"><a href="#">Worldwide Coverage</a></h5>
                            <p class="text-gray-1 px-xl-2 px-uw-7">Over 1,200,000 hotels in more than 200 countries and regions & flights to over 5,000 cities</p>
                        </div>
                        <!-- End Icon Block -->
                    </div>
                </div>
                <!-- End Features -->
            </div>
            <!-- End Features Section -->
            <!--Banner-->
            <div class="gradient-overlay-half-bg-grayish-blue bg-img-hero space-3 space-top-lg-4 space-bottom-lg-3" style="background-image: url(img/1920x500/img5.jpg);">
                <div class="text-center mt-xl-2">
                    <h5 class="text-white font-size-41 font-weight-bold mb-2">Travelling Highlights</h5>
                    <h6 class="text-white font-size-21 font-weight-bold mb-3 mb-lg-5 opacity-7">Your New Travelling Idea</h6>
                    <!-- Fancybox -->
                    <a class="js-fancybox d-inline-block u-media-player" href="javascript:;"
                    data-src="//vimeo.com/167434033" data-speed="700" data-animate-in="zoomIn" data-animate-out="zoomOut" data-caption="MyTravel - Responsive Website Template">
                        <span class="u-media-player__icon u-media-player__icon--lg bg-transparent text-white">
                            <span class="flaticon-multimedia font-size-60 u-media-player__icon-inner"></span>
                        </span>
                    </a>
                    <!-- End Fancybox -->
                </div>
            </div>
            <!--End Banner-->
          
      

@endsection