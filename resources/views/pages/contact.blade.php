@extends('layout')

@section('content')

            <!-- Hero Section -->
            <div class="bg-img-hero text-center mb-5 mb-lg-8" style="background-image: url(img/1920x400/img3.jpg);">
                <div class="container space-top-xl-3 py-6 py-xl-0">
                    <div class="row justify-content-center py-xl-4">
                        <!-- Info -->
                        <div class="py-xl-10 py-5">
                            <h1 class="font-size-40 font-size-xs-30 text-white font-weight-bold mb-0">Contact Us</h1>
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb breadcrumb-no-gutter justify-content-center mb-0">
                                <li class="breadcrumb-item font-size-14"> <a class="text-white" href="https://transvelo.github.io/mytravel-html/html/home/index.html">Home</a> </li>
                                <li class="breadcrumb-item custom-breadcrumb-item font-size-14 text-white active" aria-current="page">Contact Us</li>
                              </ol>
                            </nav>
                        </div>
                        <!-- End Info -->
                    </div>
                </div>
            </div>
           
            <div class="border-bottom border-color-8 pb-6 pb-lg-9 mb-6 mb-lg-8">
                <div class="container mb-10">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto my-3">
                        <h2 class="section-title text-black font-size-30 font-weight-bold mb-5 pb-xl-1">Sends us a Message</h2>
                    </div>
                    <div class="comment-section max-width-810 mx-auto">
                        <form class="js-validate" novalidate="novalidate">
                            <div class="row">
                                <!-- Input -->
                                <div class="col-sm-6 mb-5">
                                    <div class="js-form-message">
                                        <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success">
                                    </div>
                                </div>
                                <!-- End Input -->

                                <!-- Input -->
                                <div class="col-sm-6 mb-5">
                                    <div class="js-form-message">
                                        <input type="email" class="form-control" name="email" placeholder="Email" aria-label="jackwayley@gmail.com" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                    </div>
                                </div>
                                <!-- End Input -->
                                <div class="col-sm-12 mb-5">
                                    <div class="js-form-message">
                                        <div class="input-group">
                                            <textarea class="form-control" rows="6" cols="77" name="text" placeholder="Message" aria-label="Hi there, I would like to ..." required="" data-msg="Please enter a reason." data-error-class="u-has-error" data-success-class="u-has-success"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input -->
                                <div class="col d-flex justify-content-lg-start">
                                    <button type="submit" class="btn rounded-xs bg-blue-dark-1 text-white height-51 width-190 transition-3d-hover">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835253576489!2d144.95372995111143!3d-37.817327679652266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1581584770980!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
 @endsection