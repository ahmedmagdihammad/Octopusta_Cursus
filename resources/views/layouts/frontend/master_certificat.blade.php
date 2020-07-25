<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Start Head -->
    @include('layouts.frontend.head')
    <!-- End Head -->
</head> 
<body>
	<!-- Header Start -->
	@include('layouts.frontend.header_certificat')
    <!-- Header End -->
    
    <!-- Body Start -->
    <div class="wrapper _bg4586 _new89">
        
        <!-- Start Content -->
        @yield('content')
        <!-- End Content -->

        <!-- Start Footer -->
        @include('layouts.frontend.Footer')
        <!-- End Footer -->

	</div>
	<!-- Body End -->

    <!-- Satrt Foot -->
    @include('layouts.frontend.foot')
    <!-- End Foot -->
	
</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/certification_center.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 12:56:18 GMT -->
</html>