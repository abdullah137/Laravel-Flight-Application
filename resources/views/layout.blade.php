<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

@include("partials.head")

<body>

@include("partials.header")

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content">
            @yield('content')
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        @include("partials.footer")

    

        <!-- Go to Top -->
        <a class="js-go-to u-go-to-modern" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
            <span class="flaticon-arrow u-go-to-modern__inner"></span>
        </a>
        <!-- End Go to Top -->

       @include("partials.script")
    </body>

<!-- Mirrored from transvelo.github.io/mytravel-html/html/home/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 17:19:53 GMT -->
</html>
