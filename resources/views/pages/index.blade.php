@extends('layout')

@section('content')

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content">
            <!-- ========== HERO ========== -->
            <div class="hero-block hero-v1 bg-img-hero-bottom gradient-overlay-half-black-gradient text-center z-index-2" style="background-image: url(img/1920x800/img1.jpg);">
                <div class="container space-2 space-top-xl-9">
                    
                    <div class="mb-lg-n16">
                        <!-- Nav Classic -->
                        <ul class="nav tab-nav-rounded flex-nowrap pb-2 pb-md-4 tab-nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link font-weight-medium pl-md-5 pl-3" id="pills-one-example2-tab" data-toggle="pill" href="#pills-one-example2" role="tab" aria-controls="pills-one-example2" aria-selected="true">
                                    <div class="d-flex flex-column flex-md-row  position-relative text-white align-items-center">
                                        <figure class="ie-height-40 d-md-block mr-md-3">
                                            <i class="icon flaticon-hotel font-size-3"></i>
                                        </figure>
                                        <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">Hotel</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-medium" id="pills-two-example2-tab" data-toggle="pill" href="#pills-two-example2" role="tab" aria-controls="pills-two-example2" aria-selected="true">
                                    <div class="d-flex flex-column flex-md-row  position-relative text-white align-items-center">
                                        <figure class="ie-height-40 d-md-block mr-md-3">
                                            <i class="icon flaticon-global-1 font-size-3"></i>
                                        </figure>
                                        <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">Tours</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-medium" id="pills-three-example2-tab" data-toggle="pill" href="#pills-three-example2" role="tab" aria-controls="pills-three-example2" aria-selected="true">
                                    <div class="d-flex flex-column flex-md-row  position-relative text-white align-items-center">
                                        <figure class=" ie-height-40  d-md-block mr-md-3">
                                            <i class="icon flaticon-climbing font-size-3"></i>
                                        </figure>
                                        <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">Activity</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-medium" id="pills-four-example2-tab" data-toggle="pill" href="#pills-four-example2" role="tab" aria-controls="pills-four-example2" aria-selected="true">
                                    <div class="d-flex flex-column flex-md-row  position-relative text-white align-items-center">
                                        <figure class="ie-height-40 d-md-block mr-md-3">
                                            <i class="icon flaticon-home font-size-3"></i>
                                        </figure>
                                        <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">Rental</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-medium" id="pills-five-example2-tab" data-toggle="pill" href="#pills-five-example2" role="tab" aria-controls="pills-five-example2" aria-selected="true">
                                    <div class="d-flex flex-column flex-md-row  position-relative text-white align-items-center">
                                        <figure class="ie-height-40 d-md-block mr-md-3">
                                            <i class="icon flaticon-sedan font-size-3"></i>
                                        </figure>
                                        <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">Car</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-medium" id="pills-six-example2-tab" data-toggle="pill" href="#pills-six-example2" role="tab" aria-controls="pills-six-example2" aria-selected="true">
                                    <div class="d-flex flex-column flex-md-row  position-relative text-white align-items-center">
                                        <figure class="ie-height-40 d-md-block mr-md-3">
                                            <i class="icon flaticon-yatch font-size-3"></i>
                                        </figure>
                                        <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">Yacht</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-medium active " id="pills-seven-example2-tab" data-toggle="pill" href="#pills-seven-example2" role="tab" aria-controls="pills-seven-example2" aria-selected="true">
                                    <div class="d-flex flex-column flex-md-row  position-relative  text-white align-items-center">
                                        <figure class="ie-height-40 d-md-block mr-md-3">
                                            <i class="icon flaticon-aeroplane font-size-3"></i>
                                        </figure>
                                        <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">Flights</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- End Nav Classic -->
                        <div class="tab-content hero-tab-pane">
                            <div class="tab-pane fade" id="pills-one-example2" role="tabpanel" aria-labelledby="pills-one-example2-tab">
                                <!-- Search Jobs Form -->
                                <div class="card border-0 tab-shadow">
                                    <div class="card-body">
                                        <form class="js-validate">
                                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3 align-items-end">
                                            <div class="col-sm-12 col-lg-3dot6 col-xl-3gdot5 mb-4 mb-lg-0">
                                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                                <!-- Select -->
                                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                                    data-style=""
                                                    data-live-search="true"
                                                    data-searchbox-classes="input-group-sm">
                                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">London, United Kingdom</span>
                                                        </span>'>
                                                        London, United Kingdom
                                                    </option>
                                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">New York, United States</span>
                                                        </span>'>
                                                        New York, United States
                                                    </option>
                                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">New South Wales, Australia</span>
                                                        </span>'>
                                                        New South Wales, Australia
                                                    </option>
                                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">Istanbul, Turkey</span>
                                                        </span>'>
                                                        Istanbul, Turkey
                                                    </option>
                                                    <option class="" value="project4" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                                        </span>'>
                                                        Reykjavík, Iceland
                                                    </option>
                                                </select>
                                                <!-- End Select -->
                                            </div>

                                            <div class="col-sm-12 col-lg-3dot7 col-xl-3gdot5 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                                <div class="border-bottom border-width-2 border-color-1">
                                                    <div id="datepickerWrapperFromOne" class="u-datepicker input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="d-flex align-items-center mr-2">
                                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                            </span>
                                                        </div>
                                                         <input class="js-range-datepicker font-size-16 shadow-none font-weight-medium form-control hero-form bg-transparent  border-0" type="date"
                                                             data-rp-wrapper="#datepickerWrapperFromOne"
                                                             data-rp-type="range"
                                                             data-rp-date-format="M d / Y"
                                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                    </div>
                                                     <!-- End Datepicker -->
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-xl-3 mb-4 mb-lg-0 dropdown-custom">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                                <a id="basicDropdownClickInvoker" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                                    aria-controls="basicDropdownClick"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-unfold-event="click"
                                                    data-unfold-target="#basicDropdownClick"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-duration="300"
                                                    data-unfold-delay="300"
                                                    data-unfold-hide-on-scroll="true"
                                                    data-unfold-animation-in="slideInUp"
                                                    data-unfold-animation-out="fadeOut">
                                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                                </a>
                                                <div id="basicDropdownClick" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker">
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 text-right py-1 pr-5">
                                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-xl-2 align-self-lg-end text-md-right">
                                                <button type="submit" class="btn btn-primary w-100 border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass font-size-20 mr-2"></i>Search</button>
                                            </div>
                                          </div>
                                          <!-- End Checkbox -->
                                        </form>
                                    </div>
                                </div>
                                <!-- End Search Jobs Form -->
                            </div>
                            <div class="tab-pane fade" id="pills-two-example2" role="tabpanel" aria-labelledby="pills-two-example2-tab">
                                <!-- Search Jobs Form -->
                                <div class="card border-0 tab-shadow">
                                    <div class="card-body">
                                        <form class="js-validate">
                                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3 align-items-end">
                                            <div class="col-sm-12 col-lg-3dot6 col-xl-3gdot5 mb-4 mb-lg-0 ">
                                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                                <!-- Select -->
                                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                                    data-style=""
                                                    data-live-search="true"
                                                    data-searchbox-classes="input-group-sm">
                                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">London, United Kingdom</span>
                                                        </span>'>
                                                        London, United Kingdom
                                                    </option>
                                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">New York, United States</span>
                                                        </span>'>
                                                        New York, United States
                                                    </option>
                                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">New South Wales, Australia</span>
                                                        </span>'>
                                                        New South Wales, Australia
                                                    </option>
                                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">Istanbul, Turkey</span>
                                                        </span>'>
                                                        Istanbul, Turkey
                                                    </option>
                                                    <option class="" value="project4" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                                        </span>'>
                                                        Reykjavík, Iceland
                                                    </option>
                                                </select>
                                                <!-- End Select -->
                                            </div>

                                            <div class="col-sm-12 col-lg-3dot7 col-xl-3gdot5 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                                <div class="border-bottom border-width-2 border-color-1">
                                                    <div id="datepickerWrapperFromTwo" class="u-datepicker input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="d-flex align-items-center mr-2">
                                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                            </span>
                                                        </div>
                                                         <input class="js-range-datepicker font-size-16 shadow-none font-weight-medium form-control hero-form bg-transparent  border-0" type="date"
                                                             data-rp-wrapper="#datepickerWrapperFromTwo"
                                                             data-rp-type="range"
                                                             data-rp-date-format="M d / Y"
                                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                    </div>
                                                     <!-- End Datepicker -->
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-xl-3 mb-4 mb-lg-0 dropdown-custom">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                                <a id="basicDropdownClickInvoker2" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                                    aria-controls="basicDropdownClick2"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-unfold-event="click"
                                                    data-unfold-target="#basicDropdownClick2"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-duration="300"
                                                    data-unfold-delay="300"
                                                    data-unfold-hide-on-scroll="true"
                                                    data-unfold-animation-in="slideInUp"
                                                    data-unfold-animation-out="fadeOut">
                                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                                </a>
                                                <div id="basicDropdownClick2" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker2">
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 text-right py-1 pr-5">
                                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-xl-2 align-self-lg-end text-md-right">
                                                <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass font-size-20 mr-2"></i>Search</button>
                                            </div>
                                          </div>
                                          <!-- End Checkbox -->
                                        </form>
                                    </div>
                                </div>
                                <!-- End Search Jobs Form -->
                            </div>
                            <div class="tab-pane fade" id="pills-three-example2" role="tabpanel" aria-labelledby="pills-three-example2-tab">
                                <!-- Search Jobs Form -->
                                <div class="card border-0 tab-shadow">
                                    <div class="card-body">
                                        <form class="js-validate">
                                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3 align-items-end">
                                            <div class="col-sm-12 col-lg-3dot6 col-xl-3gdot5 mb-4 mb-lg-0 ">
                                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                                <!-- Select -->
                                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                                    data-style=""
                                                    data-live-search="true"
                                                    data-searchbox-classes="input-group-sm">
                                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">London, United Kingdom</span>
                                                        </span>'>
                                                        London, United Kingdom
                                                    </option>
                                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">New York, United States</span>
                                                        </span>'>
                                                        New York, United States
                                                    </option>
                                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">New South Wales, Australia</span>
                                                        </span>'>
                                                        New South Wales, Australia
                                                    </option>
                                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">Istanbul, Turkey</span>
                                                        </span>'>
                                                        Istanbul, Turkey
                                                    </option>
                                                    <option class="" value="project4" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                                        </span>'>
                                                        Reykjavík, Iceland
                                                    </option>
                                                </select>
                                                <!-- End Select -->
                                            </div>

                                            <div class="col-sm-12 col-lg-3dot7 col-xl-3gdot5 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                                <div class="border-bottom border-width-2 border-color-1">
                                                    <div id="datepickerWrapperFromThree" class="u-datepicker input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="d-flex align-items-center mr-2">
                                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                            </span>
                                                        </div>
                                                         <input class="js-range-datepicker font-size-16 shadow-none font-weight-medium form-control hero-form bg-transparent  border-0" type="date"
                                                             data-rp-wrapper="#datepickerWrapperFromThree"
                                                             data-rp-type="range"
                                                             data-rp-date-format="M d / Y"
                                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                    </div>
                                                     <!-- End Datepicker -->
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-xl-3 mb-4 mb-lg-0 dropdown-custom">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                                <a id="basicDropdownClickInvoker3" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                                    aria-controls="basicDropdownClick3"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-unfold-event="click"
                                                    data-unfold-target="#basicDropdownClick3"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-duration="300"
                                                    data-unfold-delay="300"
                                                    data-unfold-hide-on-scroll="true"
                                                    data-unfold-animation-in="slideInUp"
                                                    data-unfold-animation-out="fadeOut">
                                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                                </a>
                                                <div id="basicDropdownClick3" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker3">
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 text-right py-1 pr-5">
                                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-xl-2 align-self-lg-end text-md-right">
                                                <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass font-size-20 mr-2"></i>Search</button>
                                            </div>
                                          </div>
                                          <!-- End Checkbox -->
                                        </form>
                                    </div>
                                </div>
                                <!-- End Search Jobs Form -->
                            </div>
                            <div class="tab-pane fade" id="pills-four-example2" role="tabpanel" aria-labelledby="pills-four-example2-tab">
                                <!-- Search Jobs Form -->
                                <div class="card border-0 tab-shadow">
                                    <div class="card-body">
                                        <form class="js-validate">
                                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3 align-items-end">
                                            <div class="col-sm-12 col-lg-3dot6 col-xl-3gdot5 mb-4 mb-lg-0 ">
                                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                                <!-- Select -->
                                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                                    data-style=""
                                                    data-live-search="true"
                                                    data-searchbox-classes="input-group-sm">
                                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">London, United Kingdom</span>
                                                        </span>'>
                                                        London, United Kingdom
                                                    </option>
                                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">New York, United States</span>
                                                        </span>'>
                                                        New York, United States
                                                    </option>
                                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">New South Wales, Australia</span>
                                                        </span>'>
                                                        New South Wales, Australia
                                                    </option>
                                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">Istanbul, Turkey</span>
                                                        </span>'>
                                                        Istanbul, Turkey
                                                    </option>
                                                    <option class="" value="project4" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                                        </span>'>
                                                        Reykjavík, Iceland
                                                    </option>
                                                </select>
                                                <!-- End Select -->
                                            </div>

                                            <div class="col-sm-12 col-lg-3dot7 col-xl-3gdot5 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                                <div class="border-bottom border-width-2 border-color-1">
                                                    <div id="datepickerWrapperFromfour" class="u-datepicker input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="d-flex align-items-center mr-2">
                                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                            </span>
                                                        </div>
                                                         <input class="js-range-datepicker font-size-16 shadow-none font-weight-medium form-control hero-form bg-transparent  border-0" type="date"
                                                             data-rp-wrapper="#datepickerWrapperFromfour"
                                                             data-rp-type="range"
                                                             data-rp-date-format="M d / Y"
                                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                    </div>
                                                     <!-- End Datepicker -->
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-xl-3 mb-4 mb-lg-0 dropdown-custom">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                                <a id="basicDropdownClickInvoker4" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                                    aria-controls="basicDropdownClick4"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-unfold-event="click"
                                                    data-unfold-target="#basicDropdownClick4"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-duration="300"
                                                    data-unfold-delay="300"
                                                    data-unfold-hide-on-scroll="true"
                                                    data-unfold-animation-in="slideInUp"
                                                    data-unfold-animation-out="fadeOut">
                                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                                </a>
                                                <div id="basicDropdownClick4" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker4">
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 text-right py-1 pr-5">
                                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-xl-2 align-self-lg-end text-md-right">
                                                <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass font-size-20 mr-2"></i>Search</button>
                                            </div>
                                          </div>
                                          <!-- End Checkbox -->
                                        </form>
                                    </div>
                                </div>
                                <!-- End Search Jobs Form -->
                            </div>
                            <div class="tab-pane fade" id="pills-five-example2" role="tabpanel" aria-labelledby="pills-five-example2-tab">
                                <!-- Search Jobs Form -->
                                <div class="card border-0 tab-shadow">
                                    <div class="card-body">
                                        <form class="js-validate">
                                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3 align-items-end">
                                            <div class="col-sm-12 col-lg-3dot6 col-xl-3gdot5 mb-4 mb-lg-0 ">
                                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                                <!-- Select -->
                                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                                    data-style=""
                                                    data-live-search="true"
                                                    data-searchbox-classes="input-group-sm">
                                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">London, United Kingdom</span>
                                                        </span>'>
                                                        London, United Kingdom
                                                    </option>
                                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">New York, United States</span>
                                                        </span>'>
                                                        New York, United States
                                                    </option>
                                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">New South Wales, Australia</span>
                                                        </span>'>
                                                        New South Wales, Australia
                                                    </option>
                                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">Istanbul, Turkey</span>
                                                        </span>'>
                                                        Istanbul, Turkey
                                                    </option>
                                                    <option class="" value="project4" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                                        </span>'>
                                                        Reykjavík, Iceland
                                                    </option>
                                                </select>
                                                <!-- End Select -->
                                            </div>

                                            <div class="col-sm-12 col-lg-3dot7 col-xl-3gdot5 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                                <div class="border-bottom border-width-2 border-color-1">
                                                    <div id="datepickerWrapperFromFive" class="u-datepicker input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="d-flex align-items-center mr-2">
                                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                            </span>
                                                        </div>
                                                         <input class="js-range-datepicker font-size-16 shadow-none font-weight-medium form-control hero-form bg-transparent  border-0" type="date"
                                                             data-rp-wrapper="#datepickerWrapperFromFive"
                                                             data-rp-type="range"
                                                             data-rp-date-format="M d / Y"
                                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                    </div>
                                                     <!-- End Datepicker -->
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-xl-3 mb-4 mb-lg-0 dropdown-custom">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                                <a id="basicDropdownClickInvoker5" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                                    aria-controls="basicDropdownClick5"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-unfold-event="click"
                                                    data-unfold-target="#basicDropdownClick5"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-duration="300"
                                                    data-unfold-delay="300"
                                                    data-unfold-hide-on-scroll="true"
                                                    data-unfold-animation-in="slideInUp"
                                                    data-unfold-animation-out="fadeOut">
                                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                                </a>
                                                <div id="basicDropdownClick5" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker5">
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 text-right py-1 pr-5">
                                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-xl-2 align-self-lg-end text-md-right">
                                                <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass font-size-20 mr-2"></i>Search</button>
                                            </div>
                                          </div>
                                          <!-- End Checkbox -->
                                        </form>
                                    </div>
                                </div>
                                <!-- End Search Jobs Form -->
                            </div>
                            <div class="tab-pane fade" id="pills-six-example2" role="tabpanel" aria-labelledby="pills-six-example2-tab">
                                <!-- Search Jobs Form -->
                                <div class="card border-0 tab-shadow">
                                    <div class="card-body">
                                        <form class="js-validate">
                                          <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3 align-items-end">
                                            <div class="col-sm-12 col-lg-3dot6 col-xl-3gdot5 mb-4 mb-lg-0 ">
                                                <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Destination or Hotel Name</span>
                                                <!-- Select -->
                                                <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold" title="Where are you going?"
                                                    data-style=""
                                                    data-live-search="true"
                                                    data-searchbox-classes="input-group-sm">
                                                    <option class="border-bottom border-color-1" value="project1" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">London, United Kingdom</span>
                                                        </span>'>
                                                        London, United Kingdom
                                                    </option>
                                                    <option class="border-bottom border-color-1" value="project2" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">New York, United States</span>
                                                        </span>'>
                                                        New York, United States
                                                    </option>
                                                    <option  class="border-bottom border-color-1" value="project3" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">New South Wales, Australia</span>
                                                        </span>'>
                                                        New South Wales, Australia
                                                    </option>
                                                    <option class="border-bottom border-color-1" value="project4" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">Istanbul, Turkey</span>
                                                        </span>'>
                                                        Istanbul, Turkey
                                                    </option>
                                                    <option class="" value="project4" data-content='
                                                        <span class="d-flex align-items-center">
                                                            <span class="font-size-16">Reykjavík, Iceland</span>
                                                        </span>'>
                                                        Reykjavík, Iceland
                                                    </option>
                                                </select>
                                                <!-- End Select -->
                                            </div>

                                            <div class="col-sm-12 col-lg-3dot7 col-xl-3gdot5 mb-4 mb-lg-0 ">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Check In - Out</span>
                                                <div class="border-bottom border-width-2 border-color-1">
                                                    <div id="datepickerWrapperFromSix" class="u-datepicker input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="d-flex align-items-center mr-2">
                                                              <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                            </span>
                                                        </div>
                                                         <input class="js-range-datepicker font-size-16 shadow-none font-weight-medium form-control hero-form bg-transparent  border-0" type="date"
                                                             data-rp-wrapper="#datepickerWrapperFromSix"
                                                             data-rp-type="range"
                                                             data-rp-date-format="M d / Y"
                                                             data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                    </div>
                                                     <!-- End Datepicker -->
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-xl-3 mb-4 mb-lg-0 dropdown-custom">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Rooms and Guests</span>
                                                <a id="basicDropdownClickInvoker6" class="dropdown-nav-link dropdown-toggle d-flex pt-3 pb-2" href="javascript:;" role="button"
                                                    aria-controls="basicDropdownClick6"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-unfold-event="click"
                                                    data-unfold-target="#basicDropdownClick6"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-duration="300"
                                                    data-unfold-delay="300"
                                                    data-unfold-hide-on-scroll="true"
                                                    data-unfold-animation-in="slideInUp"
                                                    data-unfold-animation-out="fadeOut">
                                                    <i class="flaticon-plus d-flex align-items-center mr-3 font-size-18 text-primary font-weight-semi-bold"></i>
                                                    <span class="text-black font-size-16 font-weight-semi-bold">2 Rooms - 3 Guests</span>
                                                </a>
                                                <div id="basicDropdownClick6" class="dropdown-menu dropdown-unfold col-11 m-0" aria-labelledby="basicDropdownClickInvoker6">
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Rooms</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3 mb-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Adults</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 py-2 px-3">
                                                        <div class="js-quantity mx-3 row align-items-center justify-content-between">
                                                            <span class="d-block font-size-16 text-secondary font-weight-medium">Child</span>
                                                            <div class="d-flex">
                                                                <a class="js-minus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                                </a>
                                                                <input class="js-result form-control h-auto border-0 rounded p-0 max-width-6 text-center" type="text" value="1">
                                                                <a class="js-plus btn btn-icon btn-medium btn-outline-secondary rounded-circle" href="javascript:;">
                                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 text-right py-1 pr-5">
                                                        <a class="text-primary font-weight-semi-bold font-size-16" href="#">Done</a>
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>

                                            <div class="col-sm-12 col-xl-2 align-self-lg-end text-md-right">
                                                <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass font-size-20 mr-2"></i>Search</button>
                                            </div>
                                          </div>
                                          <!-- End Checkbox -->
                                        </form>
                                    </div>
                                </div>
                                <!-- End Search Jobs Form -->
                            </div>
                            <div class="tab-pane fade active show" id="pills-seven-example2" role="tabpanel" aria-labelledby="pills-seven-example2-tab">
                                <!-- Search Jobs Form -->
                                <div class="card border-0 tab-shadow">
                                    <div class="card-body">
                                        <ul class="nav tab-nav tab-nav-inner flex-nowrap pb-4 px-lg-3 px-2 pb-xl-0" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link font-weight-medium active" id="pills-eight-example2-tab" data-toggle="pill" href="#pills-eight-example2" role="tab" aria-controls="pills-eight-example2" aria-selected="true">
                                                    <div class="d-flex flex-column flex-md-row  position-relative text-black align-items-center">
                                                        <span class="tabtext mt-2 mt-md-0 font-size-12 font-weight-semi-bold">ROUND-TRIP</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link font-weight-medium" id="pills-nine-example2-tab" data-toggle="pill" href="#pills-nine-example2" role="tab" aria-controls="pills-nine-example2" aria-selected="true">
                                                    <div class="d-flex flex-column flex-md-row  position-relative text-black align-items-center">
                                                        <span class="tabtext mt-2 mt-md-0 font-size-12 font-weight-semi-bold">ONE-WAY</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link font-weight-medium" id="pills-ten-example2-tab" data-toggle="pill" href="#pills-ten-example2" role="tab" aria-controls="pills-ten-example2" aria-selected="true">
                                                    <div class="d-flex flex-column flex-md-row  position-relative text-black align-items-center">
                                                        <span class="tabtext mt-2 mt-md-0 font-size-12 font-weight-semi-bold">MULTI-CITY</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content hero-tab-pane">
                                            <div class="tab-pane fade pt-xl-4 active show" id="pills-eight-example2" role="tabpanel" aria-labelledby="pills-eight-example2-tab">
                                                <form class="js-validate">
                                                  <div class="row nav-select d-block d-lg-flex mb-lg-2 px-lg-3 px-2">
                                                    <div class="col-sm-12 col-lg-2dot3 mb-4 mb-lg-0 ">
                                                        <!-- Input -->
                                                        <span class="d-block text-gray-1 text-left font-weight-normal mb-0">From where</span>
                                                        <div class="js-focus-state">
                                                            <div class="input-group border-bottom border-width-2 border-color-1">
                                                                <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                              <input type="text" class="form-control font-size-lg-16 shadow-none hero-form font-weight-bold border-0 pl-0" placeholder="city or airport" aria-label="Keyword or title">
                                                            </div>
                                                        </div>
                                                        <!-- End Input -->
                                                    </div>
                                                    <div class="col-sm-12 col-lg-2dot3 mb-4 mb-lg-0 ">
                                                        <!-- Input -->
                                                        <span class="d-block text-gray-1 text-left font-weight-normal mb-0">To where</span>
                                                        <div class="js-focus-state">
                                                            <div class="input-group border-bottom border-width-2 border-color-1">
                                                                <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                              <input type="text" class="form-control font-size-lg-16 shadow-none hero-form font-weight-bold border-0 pl-0" placeholder="city or airport" aria-label="Keyword or title">
                                                            </div>
                                                        </div>
                                                        <!-- End Input -->
                                                    </div>
        
                                                    <div class="col-sm-12 col-lg-3 mb-4 mb-lg-0 ">
                                                        <!-- Input -->
                                                        <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Depart-Return</span>
                                                        <div class="border-bottom border-width-2 border-color-1">
                                                            <div id="datepickerWrapperFromOne" class="u-datepicker input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="d-flex align-items-center mr-2">
                                                                      <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                                    </span>
                                                                </div>
                                                                 <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                                                     data-rp-wrapper="#datepickerWrapperFromOne"
                                                                     data-rp-type="range"
                                                                     data-rp-date-format="M d / Y"
                                                                     data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                            </div>
                                                             <!-- End Datepicker -->
                                                        </div>
                                                        <!-- End Input -->
                                                    </div>
        
                                                    <div class="col-sm-12 col-lg-2dot4 text-left mb-4 mb-lg-0">
                                                        <!-- Input -->
                                                        <span class="d-block text-gray-1 font-weight-normal mb-0">Travelers</span>
                                                        <div class="js-focus-state">
                                                            <div class="d-flex border-bottom border-width-2 border-color-1">
                                                                <i class="flaticon-backpack d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                                <select class="js-select selectpicker dropdown-select">
                                                                    <option value="2 Rooms - 3 Guests" selected>1 Adult - Ecconomy</option>
                                                                    <option value="2 Rooms - 3 Guests">3 Adults - Ecconomy</option>
                                                                    <option value="2 Rooms - 3 Guests">2 Adults - Business</option>
                                                                    <option value="2 Rooms - 3 Guests">4 Adults - Business</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- End Input -->
                                                    </div>
        
                                                    <div class="col-sm-12 col-lg-1dot8 text-left align-self-lg-end">
                                                        <button type="submit" class="btn btn-primary text-white border-radius-2 font-weight-bold btn-md mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                                                    </div>
                                                  </div>
                                                  <!-- End Checkbox -->
                                                </form>
                                            </div>
                                            <div class="tab-pane fade pt-xl-4" id="pills-nine-example2" role="tabpanel" aria-labelledby="pills-nine-example2-tab">
                                                <form class="js-validate">
                                                  <div class="row nav-select d-block d-lg-flex mb-lg-2 px-lg-3 px-2">
                                                    <div class="col-sm-12 col-lg-3dot7 mb-4 mb-lg-0 ">
                                                        <!-- Input -->
                                                        <span class="d-block text-gray-1 text-left font-weight-normal mb-0">From where</span>
                                                        <div class="js-focus-state">
                                                            <div class="input-group border-bottom border-width-2 border-color-1">
                                                                <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                              <input type="text" class="form-control font-size-lg-16 shadow-none hero-form font-weight-bold border-0 pl-0" placeholder="city or airport" aria-label="Keyword or title">
                                                            </div>
                                                        </div>
                                                        <!-- End Input -->
                                                    </div>
                                                    <div class="col-sm-12 col-lg-3dot6 mb-4 mb-lg-0 ">
                                                        <!-- Input -->
                                                        <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Depart</span>
                                                        <div class="border-bottom border-width-2 border-color-1">
                                                            <div id="datepickerWrapperFromtwo" class="u-datepicker input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="d-flex align-items-center mr-2">
                                                                      <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                                    </span>
                                                                </div>
                                                                 <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                                                     data-rp-wrapper="#datepickerWrapperFromtwo"
                                                                     data-rp-type="range"
                                                                     data-rp-date-format="M d / Y"
                                                                     data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                            </div>
                                                             <!-- End Datepicker -->
                                                        </div>
                                                        <!-- End Input -->
                                                    </div>
        
                                                    <div class="col-sm-12 col-lg-2dot8 text-left mb-4 mb-lg-0">
                                                        <!-- Input -->
                                                        <span class="d-block text-gray-1 font-weight-normal mb-0">Travelers</span>
                                                        <div class="js-focus-state">
                                                            <div class="d-flex border-bottom border-width-2 border-color-1">
                                                                <i class="flaticon-backpack d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                                <select class="js-select selectpicker dropdown-select">
                                                                    <option value="2 Rooms - 3 Guests" selected>1 Adult - Ecconomy</option>
                                                                    <option value="2 Rooms - 3 Guests">3 Adults - Ecconomy</option>
                                                                    <option value="2 Rooms - 3 Guests">2 Adults - Business</option>
                                                                    <option value="2 Rooms - 3 Guests">4 Adults - Business</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- End Input -->
                                                    </div>
        
                                                    <div class="col-sm-12 col-lg-1dot8 text-left align-self-lg-end">
                                                        <button type="submit" class="btn btn-primary text-white border-radius-2 font-weight-bold btn-md mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass mr-2"></i>Search</button>
                                                    </div>
                                                  </div>
                                                  <!-- End Checkbox -->
                                                </form>
                                            </div>
                                            <div class="tab-pane fade pt-xl-4" id="pills-ten-example2" role="tabpanel" aria-labelledby="pills-ten-example2-tab">
                                                <form class="js-validate">
                                                  <div class="row nav-select d-block d-lg-flex mb-lg-2 px-lg-3 px-2">
                                                    <div class="col-sm-12 col-lg-3dot7 mb-4 mb-lg-0 ">
                                                        <!-- Input -->
                                                        <span class="d-block text-gray-1 text-left font-weight-normal mb-0">From where</span>
                                                        <div class="js-focus-state">
                                                            <div class="input-group border-bottom border-width-2 border-color-1">
                                                                <i class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                              <input type="text" class="form-control font-size-lg-16 shadow-none hero-form font-weight-bold border-0 pl-0" placeholder="city or airport" aria-label="Keyword or title">
                                                            </div>
                                                        </div>
                                                        <!-- End Input -->
                                                    </div>
                                                    <div class="col-sm-12 col-lg-3dot6 mb-4 mb-lg-0 ">
                                                        <!-- Input -->
                                                        <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Depart</span>
                                                        <div class="border-bottom border-width-2 border-color-1">
                                                            <div id="datepickerWrapperFromthree" class="u-datepicker input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="d-flex align-items-center mr-2">
                                                                      <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                                    </span>
                                                                </div>
                                                                 <input class="js-range-datepicker font-size-lg-16 shadow-none font-weight-bold form-control hero-form bg-transparent  border-0" type="date"
                                                                     data-rp-wrapper="#datepickerWrapperFromthree"
                                                                     data-rp-type="range"
                                                                     data-rp-date-format="M d / Y"
                                                                     data-rp-default-date='["Jul 7 / 2020", "Aug 25 / 2020"]'>
                                                            </div>
                                                             <!-- End Datepicker -->
                                                        </div>
                                                        <!-- End Input -->
                                                    </div>
        
                                                    <div class="col-sm-12 col-lg-2dot8 text-left mb-4 mb-lg-0">
                                                        <!-- Input -->
                                                        <span class="d-block text-gray-1 font-weight-normal mb-0">Travelers</span>
                                                        <div class="js-focus-state">
                                                            <div class="d-flex border-bottom border-width-2 border-color-1">
                                                                <i class="flaticon-backpack d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                                <select class="js-select selectpicker dropdown-select">
                                                                    <option value="2 Rooms - 3 Guests" selected>1 Adult - Ecconomy</option>
                                                                    <option value="2 Rooms - 3 Guests">3 Adults - Ecconomy</option>
                                                                    <option value="2 Rooms - 3 Guests">2 Adults - Business</option>
                                                                    <option value="2 Rooms - 3 Guests">4 Adults - Business</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- End Input -->
                                                    </div>
        
                                                    <div class="col-sm-12 col-lg-1dot8 text-left align-self-lg-end">
                                                        <button type="submit" class="btn btn-primary text-white border-radius-2 font-weight-bold btn-md mb-xl-0 mb-lg-1 transition-3d-hover"><i class="flaticon-magnifying-glass font-size-20 mr-2"></i>Search</button>
                                                    </div>
                                                  </div>
                                                  <!-- End Checkbox -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- End Search Jobs Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== END HERO ========== -->

            <!-- Destinantion v1 -->
            <div class="destinantion-block destinantion-v1 border-bottom border-color-8">
                <div class="container space-bottom-1 space-top-lg-3">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mt-4">
                        <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">Top Destination</h2>
                    </div>
                    <div class="row mb-1">
                        <!-- Card Block -->
                        <div class="col-md-6 mb-3 mb-md-4">
                            <div class="min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url(img/630x350/img1.jpg);">
                                <div class="w-100 d-flex justify-content-between mb-2">
                                    <div class="position-relative">
                                        <a href="https://transvelo.github.io/mytravel-html/html/others/destination.html" class="destination text-white font-weight-bold font-size-21 pb-3 mb-3 text-lh-1 d-block">United Kingdom</a>

                                        <!-- Dropdown List -->
                                        <div class="destination-dropdown v1">
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-list.html">30 Hotel</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/tour/tour-list.html">48 Tour</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/activities/activities-list.html">46 Activity</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-list.html">32 Yacht</a>
                                        </div>
                                        <!-- End Dropdown List -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-6 mb-3 mb-md-4">
                                <div class="min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url(img/630x350/img2.jpg);">
                                    <header class="w-100 d-flex justify-content-between mb-2">
                                        <div class="position-relative">
                                            <a href="https://transvelo.github.io/mytravel-html/html/others/destination.html" class="destination text-white font-weight-bold font-size-21 pb-3 mb-3 text-lh-1 d-block">Turkey</a>

                                            <!-- Dropdown List -->
                                            <div class="destination-dropdown v1">
                                                <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-list.html">30 Hotel</a>
                                                <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/tour/tour-list.html">48 Tour</a>
                                                <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/activities/activities-list.html">46 Activity</a>
                                                <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-list.html">32 Yacht</a>
                                            </div>
                                        <!-- End Dropdown List -->


                                        </div>
                                    </header>
                                </div>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-6 col-xl-3 mb-3 mb-md-4">
                            <div class="min-height-350 gradient-overlay-half-bg-gradient rounded-border p-5 bg-img-hero transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url(img/300x350/img1.jpg);">
                                <header class="w-100 d-flex justify-content-between mb-2">
                                    <div class="position-relative">
                                        <a href="https://transvelo.github.io/mytravel-html/html/others/destination.html" class="destination text-white font-weight-bold font-size-21 pb-3 mb-3 text-lh-1 d-block">United States</a>

                                        <!-- Dropdown List -->
                                        <div class="destination-dropdown v1">
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-list.html">30 Hotel</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/tour/tour-list.html">48 Tour</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/activities/activities-list.html">46 Activity</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-list.html">32 Yacht</a>
                                        </div>
                                        <!-- End Dropdown List -->


                                    </div>
                                </header>
                            </div>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-6 col-xl-3 mb-3 mb-md-4">
                            <div class="min-height-350 gradient-overlay-half-bg-gradient rounded-border p-5 bg-img-hero transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url(img/300x350/img3.jpg);">
                                <header class="w-100 d-flex justify-content-between mb-2">
                                    <div class="position-relative">
                                        <a href="https://transvelo.github.io/mytravel-html/html/others/destination.html" class="destination text-white font-weight-bold font-size-21 pb-3 mb-3 text-lh-1 d-block">Ukraine</a>

                                        <!-- Dropdown List -->
                                        <div class="destination-dropdown v1">
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-list.html">30 Hotel</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/tour/tour-list.html">48 Tour</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/activities/activities-list.html">46 Activity</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-list.html">32 Yacht</a>
                                        </div>
                                        <!-- End Dropdown List -->


                                    </div>
                                </header>
                            </div>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-6 col-xl-3 mb-3 mb-md-4">
                            <div class="min-height-350 gradient-overlay-half-bg-gradient rounded-border p-5 bg-img-hero transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url(img/300x350/img2.jpg);">
                                <header class="w-100 d-flex justify-content-between mb-2">
                                    <div class="position-relative">
                                        <a href="https://transvelo.github.io/mytravel-html/html/others/destination.html" class="destination text-white font-weight-bold font-size-21 pb-3 mb-3 text-lh-1 d-block">France</a>

                                        <!-- Dropdown List -->
                                        <div class="destination-dropdown v1">
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-list.html">30 Hotel</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/tour/tour-list.html">48 Tour</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/activities/activities-list.html">46 Activity</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-list.html">32 Yacht</a>
                                        </div>
                                        <!-- End Dropdown List -->

                                    </div>
                                </header>
                            </div>
                        </div>
                        <!-- End Card Block -->

                        <!-- Card Block -->
                        <div class="col-md-6 col-xl-3 mb-3 mb-md-4">
                            <div class="min-height-350 gradient-overlay-half-bg-gradient rounded-border p-5 bg-img-hero transition-3d-hover shadow-hover-2 border-0 dropdown" style="background-image: url(img/300x350/img4.jpg);">
                                <header class="w-100 d-flex justify-content-between mb-2">
                                    <div class="position-relative">
                                        <a href="https://transvelo.github.io/mytravel-html/html/others/destination.html" class="destination text-white font-weight-bold font-size-21 pb-3 mb-3 text-lh-1 d-block">India</a>

                                        <!-- Dropdown List -->
                                        <div class="destination-dropdown v1">
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-list.html">30 Hotel</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/tour/tour-list.html">48 Tour</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/activities/activities-list.html">46 Activity</a>
                                            <a class="dropdown-item" href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-list.html">32 Yacht</a>
                                        </div>
                                        <!-- End Dropdown List -->


                                    </div>
                                </header>
                            </div>
                        </div>
                        <!-- End Card Block -->
                    </div>
                </div>
            </div>
            <!-- End Destinantion v1 -->

            <!-- Tabs v1 -->
            <div class="tabs-block tab-v1">
                <div class="container space-1">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto my-3">
                        <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">Trending</h2>
                    </div>
                    <!-- Nav Classic -->
                    <ul class="nav tab-nav-pill flex-nowrap pb-4 pb-lg-5 tab-nav justify-content-lg-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link font-weight-medium active" id="pills-one-example-t1-tab" data-toggle="pill" href="#pills-one-example-t1" role="tab" aria-controls="pills-one-example-t1" aria-selected="true">
                                <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                    <span class="tabtext font-weight-semi-bold">Tour</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-medium" id="pills-two-example-t1-tab" data-toggle="pill" href="#pills-two-example-t1" role="tab" aria-controls="pills-two-example-t1" aria-selected="true">
                                <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                    <span class="tabtext font-weight-semi-bold">Hotel</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-medium" id="pills-three-example-t1-tab" data-toggle="pill" href="#pills-three-example-t1" role="tab" aria-controls="pills-three-example-t1" aria-selected="true">
                                <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                    <span class="tabtext font-weight-semi-bold">Activity</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-medium" id="pills-four-example-t1-tab" data-toggle="pill" href="#pills-four-example-t1" role="tab" aria-controls="pills-four-example-t1" aria-selected="true">
                                <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                    <span class="tabtext font-weight-semi-bold">Rental</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-medium" id="pills-five-example-t1-tab" data-toggle="pill" href="#pills-five-example-t1" role="tab" aria-controls="pills-five-example-t1" aria-selected="true">
                                <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                    <span class="tabtext font-weight-semi-bold">Car</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-medium" id="pills-six-example-t1-tab" data-toggle="pill" href="#pills-six-example-t1" role="tab" aria-controls="pills-six-example-t1" aria-selected="true">
                                <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                    <span class="tabtext font-weight-semi-bold">Yatch</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-medium" id="pills-seven-example-t1-tab" data-toggle="pill" href="#pills-seven-example-t1" role="tab" aria-controls="pills-seven-example-t1" aria-selected="true">
                                <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                    <span class="tabtext font-weight-semi-bold">Flights</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- End Nav Classic -->
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="pills-one-example-t1" role="tabpanel" aria-labelledby="pills-one-example-t1-tab">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img1.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="px-3 pb-2">
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="card-title font-size-17 font-weight-bold mb-0 text-dark">Stonehenge, Windsor Castle,<br>and Bath from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1 text-primary">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img2.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Bosphorus Strait and Black Sea Half-Day Cruise from Istanbul</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img3.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">NYC One World Observatory Skip-the-Line Ticket</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img4.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Small-Group Blue Mountains Day Trip from Sydney with River Cruise</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img5.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="px-3 pb-2">
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Windsor Castle, Stonehenge, and Oxford Day Trip from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img6.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Snaefellsnes Peninsula Classic Day Tour from Reykjavik</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img7.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Giverny and Versailles Small Group Day Trip</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img8.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/tour/tour-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Two Hour Walking Tour of Manhattan</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-two-example-t1" role="tabpanel" aria-labelledby="pills-two-example-t1-tab">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img2.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Bosphorus Strait and Black Sea Half-Day Cruise from Istanbul</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img5.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Windsor Castle, Stonehenge, and Oxford Day Trip from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img1.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="card-title font-size-17 font-weight-bold mb-0 text-dark">Stonehenge, Windsor Castle,<br>and Bath from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1 text-primary">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img4.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Small-Group Blue Mountains Day Trip from Sydney with River Cruise</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img8.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Two Hour Walking Tour of Manhattan</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img3.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">NYC One World Observatory Skip-the-Line Ticket</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img6.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Snaefellsnes Peninsula Classic Day Tour from Reykjavik</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img7.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/hotels/hotel-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Giverny and Versailles Small Group Day Trip</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-three-example-t1" role="tabpanel" aria-labelledby="pills-three-example-t1-tab">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img7.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Giverny and Versailles Small Group Day Trip</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img3.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">NYC One World Observatory Skip-the-Line Ticket</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img5.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Windsor Castle, Stonehenge, and Oxford Day Trip from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img8.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Two Hour Walking Tour of Manhattan</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img1.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="card-title font-size-17 font-weight-bold mb-0 text-dark">Stonehenge, Windsor Castle,<br>and Bath from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1 text-primary">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img2.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Bosphorus Strait and Black Sea Half-Day Cruise from Istanbul</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img4.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Small-Group Blue Mountains Day Trip from Sydney with River Cruise</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img6.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/activities/activities-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Snaefellsnes Peninsula Classic Day Tour from Reykjavik</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-four-example-t1" role="tabpanel" aria-labelledby="pills-four-example-t1-tab">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img5.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Windsor Castle, Stonehenge, and Oxford Day Trip from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img8.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Two Hour Walking Tour of Manhattan</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img2.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Bosphorus Strait and Black Sea Half-Day Cruise from Istanbul</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img1.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="card-title font-size-17 font-weight-bold mb-0 text-dark">Stonehenge, Windsor Castle,<br>and Bath from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1 text-primary">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img4.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Small-Group Blue Mountains Day Trip from Sydney with River Cruise</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img3.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">NYC One World Observatory Skip-the-Line Ticket</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img6.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Snaefellsnes Peninsula Classic Day Tour from Reykjavik</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img7.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/rental/rental-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Giverny and Versailles Small Group Day Trip</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-five-example-t1" role="tabpanel" aria-labelledby="pills-five-example-t1-tab">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img4.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Small-Group Blue Mountains Day Trip from Sydney with River Cruise</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img2.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Bosphorus Strait and Black Sea Half-Day Cruise from Istanbul</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img3.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">NYC One World Observatory Skip-the-Line Ticket</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img1.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="card-title font-size-17 font-weight-bold mb-0 text-dark">Stonehenge, Windsor Castle,<br>and Bath from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1 text-primary">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img7.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Giverny and Versailles Small Group Day Trip</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img8.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Two Hour Walking Tour of Manhattan</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img5.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Windsor Castle, Stonehenge, and Oxford Day Trip from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img6.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/cars/cars-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Snaefellsnes Peninsula Classic Day Tour from Reykjavik</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-six-example-t1" role="tabpanel" aria-labelledby="pills-six-example-t1-tab">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img8.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Two Hour Walking Tour of Manhattan</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img1.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="card-title font-size-17 font-weight-bold mb-0 text-dark">Stonehenge, Windsor Castle,<br>and Bath from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1 text-primary">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img2.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Bosphorus Strait and Black Sea Half-Day Cruise from Istanbul</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img5.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Windsor Castle, Stonehenge, and Oxford Day Trip from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img7.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Giverny and Versailles Small Group Day Trip</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img4.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Small-Group Blue Mountains Day Trip from Sydney with River Cruise</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img6.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">Snaefellsnes Peninsula Classic Day Tour from Reykjavik</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img3.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/yacht/yacht-single-v1.html" class="card-title text-dark font-size-17 font-weight-bold">NYC One World Observatory Skip-the-Line Ticket</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-seven-example-t1" role="tabpanel" aria-labelledby="pills-seven-example-t1-tab">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img1.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Greater London, United Kingdom
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="card-title font-size-17 font-weight-bold mb-0 text-dark">Stonehenge, Windsor Castle,<br>and Bath from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1 text-primary">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img2.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="card-title text-dark font-size-17 font-weight-bold">Bosphorus Strait and Black Sea Half-Day Cruise from Istanbul</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img5.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-primary px-4 py-2 font-size-14 font-weight-normal">Featured</span>
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£350.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="card-title text-dark font-size-17 font-weight-bold">Windsor Castle, Stonehenge, and Oxford Day Trip from London</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img4.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="card-title text-dark font-size-17 font-weight-bold">Small-Group Blue Mountains Day Trip from Sydney with River Cruise</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img3.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="card-title text-dark font-size-17 font-weight-bold">NYC One World Observatory Skip-the-Line Ticket</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img8.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                  <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                  </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Culturals Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£550.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="card-title text-dark font-size-17 font-weight-bold">Two Hour Walking Tour of Manhattan</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img6.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 left-0 pt-5 pl-3">
                                                <span class="badge badge-pill bg-white text-danger px-3 ml-3 py-2 font-size-14 font-weight-normal">%25</span>
                                            </div>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                                <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                    <span class="flaticon-valentine-heart"></span>
                                                </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                    <div class="px-3 pb-2">
                                                        <span class="text-white font-weight-normal font-size-14">Multi-day Tours</span>
                                                        <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£899.00</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="card-title text-dark font-size-17 font-weight-bold">Snaefellsnes Peninsula Classic Day Tour from Reykjavik</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4 pb-1">
                                    <div class="card mb-1 transition-3d-hover shadow-hover-2 tab-card h-100">
                                        <div class="position-relative mb-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block gradient-overlay-half-bg-gradient-v5">
                                                <img class="card-img-top" src="img/300x230/img7.jpg" alt="img">
                                            </a>
                                            <div class="position-absolute top-0 right-0 pt-5 pr-3">
                                              <button type="button" class="btn btn-sm btn-icon text-white rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save for later">
                                                <span class="flaticon-valentine-heart"></span>
                                              </button>
                                            </div>
                                            <div class="position-absolute bottom-0 left-0 right-0">
                                                <div class="justify-content-between align-items-center">
                                                  <div class="px-3 pb-2">
                                                    <span class="text-white font-weight-normal font-size-14">Attraction Tickets</span>
                                                    <h2 class="h5 text-white mb-0 font-weight-bold"><small class="mr-2">From</small>£590.00</h2>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-4 py-2">
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="d-block">
                                                <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                    <i class="icon flaticon-pin-1 mr-2 font-size-15"></i> Istanbul, Turkey
                                                </div>
                                            </a>
                                            <a href="https://transvelo.github.io/mytravel-html/html/flights/flights-list.html" class="card-title text-dark font-size-17 font-weight-bold">Giverny and Versailles Small Group Day Trip</a>
                                            <div class="my-2">
                                                <div class="d-inline-flex align-items-center font-size-17 text-lh-1">
                                                    <div class="green-lighter mr-2">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                    </div>
                                                    <span class="text-secondary font-size-14 mt-1">48 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mb-1 d-flex align-items-center font-size-14 text-gray-1">
                                                <i class="icon flaticon-clock-circular-outline mr-2 font-size-14"></i> 3 hours 45 minutes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tabs v1 -->

            <!-- Banner v1-->
            <div class="banner-block banner-v1 bg-img-hero space-3" style="background-image: url(img/1920x500/img1.jpg);">
                <div class="max-width-650 mx-auto text-center mt-xl-5 mb-xl-2 px-3 px-md-0">
                    <h6 class="text-white font-size-40 font-weight-bold mb-1">Travel Tips</h6>
                    <p class="text-white font-size-18 font-weight-normal mb-4 pb-1 px-md-3 px-lg-0">Northern Ireland’s is now contingent. Britain is getting a divorce Northern Ireland is being offered a trial separation for Britain there is a one</p>
                    <a class="btn btn-outline-white border-width-2 rounded-xs min-width-200 font-weight-normal transition-3d-hover" href="https://transvelo.github.io/mytravel-html/html/blog/blog-list.html">Get Inspired</a>
                </div>
            </div>
            <!-- End Banner v1-->

            <!-- Icon Block v1 -->
            <div class="icon-block-center icon-center-v1 border-bottom border-color-8">
                <div class="container text-center space-1">
                    <!-- Title -->
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto pb-1 mt-3">
                        <h2 class="section-title text-black font-size-30 font-weight-bold">Why Choose</h2>
                    </div>
                    <!-- End Title -->

                    <!-- Features -->
                    <div class="mb-2">
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
            </div>
            <!-- End Icon Block v1 -->

            <!-- Deal Carousel v1 -->
            <div class="deals-carousel-block deals-carousel-v1 border-bottom border-color-8">
                <div class="container space-1">
                    <h2 class="section-title text-center mb-5 mt-3">Today's Top Deals</h2>
                    <div class="js-slick-carousel u-slick u-slick--gutters-3" data-slides-show="3" data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-classic--v2 u-slick__arrow-centered--y rounded-circle" data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-xl-n8" data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-xl-n8"
                    data-pagi-classes="d-lg-none text-center u-slick__pagination mt-4" data-responsive='[ { "breakpoint": 1025, "settings": { "slidesToShow": 3 } }, { "breakpoint": 992, "settings": { "slidesToShow": 2 } }, { "breakpoint": 768, "settings": { "slidesToShow": 1 } }, { "breakpoint": 554, "settings": { "slidesToShow": 1 } } ]'>
                        <div class="js-slide mb-4">
                            <a class="d-block rounded-xs overflow-hidden mb-3" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                <img class="img-fluid w-100" src="img/410x300/img1.jpg" alt="Image-Description">
                            </a>
                            <h6 class="font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1 text-gray-6">
                                <a href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">Earning Asiana Club Miles Just Got Easier!</a>
                            </h6>
                            <a class="text-gray-1" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                <span>Book Hotels and Earn Asiana Club Miles!</span>
                            </a>
                        </div>
                        <div class="js-slide mb-4">
                            <a class="d-block rounded-xs overflow-hidden mb-3" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                <img class="img-fluid w-100" src="img/410x300/img2.jpg" alt="Image-Description">
                            </a>
                            <h6 class="font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1 text-gray-6">
                                <a href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">Save big on hotels!</a>
                            </h6>
                            <a class="text-gray-1" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                <span>Book and save with Trip.com on your next stay</span>
                            </a>
                        </div>
                        <div class="js-slide mb-4">
                            <a class="d-block rounded-xs overflow-hidden mb-3" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                <img class="img-fluid w-100" src="img/410x300/img3.jpg" alt="Image-Description">
                            </a>
                            <h6 class="font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1 text-gray-6">
                                <a href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">Experience Europe Your Way</a>
                            </h6>
                            <a class="text-gray-1" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                <span>With up to 30% Off, experience Europe your way!</span>
                            </a>
                        </div>
                        <div class="js-slide mb-4">
                            <a class="d-block rounded-xs overflow-hidden mb-3" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                <img class="img-fluid w-100" src="img/410x300/img1.jpg" alt="Image-Description">
                            </a>
                            <h6 class="font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1 text-gray-6">
                                <a href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">Earning Asiana Club Miles Just Got Easier!</a>
                            </h6>
                            <a class="text-gray-1" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                <span>Book Hotels and Earn Asiana Club Miles!</span>
                            </a>
                        </div>
                        <div class="js-slide mb-4">
                            <a class="d-block rounded-xs overflow-hidden mb-3" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                <img class="img-fluid w-100" src="img/410x300/img2.jpg" alt="Image-Description">
                            </a>
                            <h6 class="font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1 text-gray-6">
                                <a href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">Save big on hotels!</a>
                            </h6>
                            <a class="text-gray-1" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                <span>Book and save with Trip.com on your next stay</span>
                            </a>
                        </div>

                        <div class="js-slide mb-4">
                            <a class="d-block rounded-xs overflow-hidden mb-3" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                <img class="img-fluid w-100" src="img/410x300/img3.jpg" alt="Image-Description">
                            </a>
                            <h6 class="font-size-17 pt-xl-1 font-weight-bold font-weight-bold mb-1 text-gray-6">
                                <a href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">Experience Europe Your Way</a>
                            </h6>
                            <a class="text-gray-1" href="https://transvelo.github.io/mytravel-html/html/blog/blog-single.html">
                                <span>With up to 30% Off, experience Europe your way!</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Deal Carousel v1 -->
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

<script>
    alert("It is from here");
</script>
@endsection