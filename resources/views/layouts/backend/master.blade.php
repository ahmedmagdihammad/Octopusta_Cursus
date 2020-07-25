<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <!-- Start Head -->
    @include('layouts.backend.head')
    <!-- End Head -->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Start Header -->
        @include('layouts.backend.header')
      <!-- End Header -->
      
      <!-- Start Sidemenue -->
        @include('layouts.backend.sidemenue')
      <!-- End Sidemenue -->

      <div class="content-wrapper">
      <section class="content-header">
        <h1>
          @yield('title')
          <!-- <small>Control panel</small> -->
        </h1>
        <ol class="breadcrumb">
          @yield('namepage')
          <li class="active">Dashboard</li>
        </ol>
      </section>
        <!-- Start Content -->
          @yield('content')
        <!-- End Content -->
      </div><!-- /.content-wrapper -->

      <!-- Start Footer -->
        @include('layouts.backend.footer')
      <!-- End Footer -->
      
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- Start Foot -->
    @include('layouts.backend.foot')
    <!-- End Foot -->
    
  </body>
</html>
