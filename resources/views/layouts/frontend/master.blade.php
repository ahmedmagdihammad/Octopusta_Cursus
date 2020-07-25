<!DOCTYPE html>
<html lang="en">
<head>	
    <!-- Start Head -->
    @include('layouts.frontend.head')
    <!-- End Head -->
</head>

<body>
	<!-- Header Start -->
	@include('layouts.frontend.header')
    <!-- Header End -->
    
	<!-- Left Sidemenue Start -->
	@include('layouts.frontend.sidemenu')
    <!-- Left Sidemenue End -->
    
    <div class="wrapper">
        <!-- Body Start -->
        @yield('content')
        <!-- Body End -->
    
        <!-- Start Footer -->
        @include('layouts.frontend.footer')
        <!-- End Footer -->
    </div>
    
    <!-- Start Foot -->
    @include('layouts.frontend.foot')
    <!-- End Foot -->
	
</body>
</html>