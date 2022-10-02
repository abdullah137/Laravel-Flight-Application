 <!-- JS Global Compulsory -->
 <script src="vendor/jquery/dist/jquery.min.js"></script>
 <script src="vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
 <script src="vendor/popper.js/dist/umd/popper.min.js"></script>
 <script src="vendor/bootstrap/bootstrap.min.js"></script>

 <!-- JS Implementing Plugins -->
 <script src="vendor/hs-megamenu/src/hs.megamenu.js"></script>
 <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
 <script src="vendor/flatpickr/dist/flatpickr.min.js"></script>
 <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
 <script src="vendor/slick-carousel/slick/slick.js"></script>
 <script src="vendor/svg-injector/dist/svg-injector.min.js"></script>
 <script src="vendor/appear.js"></script>

 <!-- JS MyTravel -->
 <script src="js/hs.core.js"></script>
 <script src="js/components/hs.header.js"></script>
 <script src="js/components/hs.unfold.js"></script>
 <script src="js/components/hs.validation.js"></script>
 <script src="js/components/hs.show-animation.js"></script>
 <script src="js/components/hs.range-datepicker.js"></script>
 <script src="js/components/hs.selectpicker.js"></script>
 <script src="js/components/hs.go-to.js"></script>
 <script src="js/components/hs.slick-carousel.js"></script>
 <script src="js/components/hs.quantity-counter.js"></script>
 <script>
   $(function() {
        $("#flightSubmit").click(function() {

            // getting all inputs needed
            var firstName = $("input[name=\"flight_firstName\"]").val();
            var lastName = $("input[name=\"flight_lastName\"]").val();
            var email = $("input[name=\"flight_email\"]").val();
            var password = $("input[name=\"flight_password\"]").val();
            
            if(firstName == "" || firstName == null || lastName == "" || lastName == null
            || email == "" || email == null || password == "" || password == null) {
                $("#response").html(`
                <div class="col-md-12 mb-4">
                    <div class="alert alert-danger alert-simple alert-inline">
                        
                            Sorry, Please fill in the required fields
                                <button type="button" class="btn btn-link btn-close">
                                    <i class="d-icon-times"></i>
                                </button>
                    </div>
                </div>    
                `); 
            } else  {
                $.ajax({
                    type: "POST",
                    data: {
                    firstName: firstName,
                    lastName: lastName,
                    email: email,
                    password: password,
                },
                url: "",
                beforeSend: function() {

                },
                success: function(data) {
                    console.log(data);

                }
                    });
            }
        });
   });
</script>
 <!-- JS Plugins Init. -->
 <script>
     $(window).on('load', function () {
         // initialization of HSMegaMenu component
         $('.js-mega-menu').HSMegaMenu({
             event: 'hover',
             pageContainer: $('.container'),
             breakpoint: 1199.98,
             hideTimeOut: 0
         });

         // Page preloader
         setTimeout(function() {
           $('#jsPreloader').fadeOut(500)
         }, 800);
     });

     $(document).on('ready', function () {
         // initialization of header
         $.HSCore.components.HSHeader.init($('#header'));

         // initialization of unfold component
         $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

         // initialization of show animations
         $.HSCore.components.HSShowAnimation.init('.js-animation-link');

         // initialization of datepicker
         $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

         // initialization of select
         $.HSCore.components.HSSelectPicker.init('.js-select');

         // initialization of quantity counter
         $.HSCore.components.HSQantityCounter.init('.js-quantity');

         // initialization of slick carousel
         $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

         // initialization of go to
         $.HSCore.components.HSGoTo.init('.js-go-to');
     });
 </script>