<!doctype html>
<html lang="en" >

<head>
  <!-- Required meta tags -->
  @include('template.section.head')
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
      <header class="top-header">        
        @include('template.section.navbar')
      </header>
       <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          @include('template.section.sidebar')
       </aside>
       <!--end sidebar -->

       <!--start content-->
        <main class="page-content">
           @yield('content')   
            
        </main>
       <!--end page main-->

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

      

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="{{url('public')}}/assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="{{url('public')}}/assets/js/jquery.min.js"></script>
  <script src="{{url('public')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="{{url('public')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="{{url('public')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="{{url('public')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="{{url('public')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="{{url('public')}}/assets/js/pace.min.js"></script>

  <script src="{{url('public')}}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
   <script src="{{url('public')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="{{url('public')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="{{url('public')}}/assets/js/table-datatable.js"></script>
  
  {{-- <script src="{{url('public')}}/assets/js/data-widgets.js"></script> --}}

  <!--app-->
  <script src="{{url('public')}}/assets/js/app.js"></script>
  <script src="{{url('public')}}/sweetalert2/dist/sweetalert2.min.js"> </script>
  {{-- <script src="{{url('public')}}/assets/js/index.js"></script> --}}

  <script>
    new PerfectScrollbar(".best-product")
 </script>

 @yield('script')



  

</html>

  
  

