<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="x-ua-compatible" content="ie=edge">

     <title>@yield('title')</title>
     <link rel="icon" type="image/png" href="{{ asset('/assets/images/settings/'. $sitesetting->company_logo) }}"/>
     <!-- Font Awesome Icons -->
     <link rel="stylesheet" href="{{ asset('assets/admin') }}/plugins/fontawesome-free/css/all.min.css">
     <!-- overlayScrollbars -->
     <link rel="stylesheet" href="{{ asset('assets/admin') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{ asset('assets/admin') }}/dist/css/adminlte.min.css">
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
     <!-- Google Font: Source Sans Pro -->
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
     <!-- Other package css -->
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
     <!-- custom css -->
     <link rel="stylesheet" href="{{ asset('assets/admin') }}/dist/css/admin.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
     <div class="wrapper">
          <!-- Navbar -->
          @include('admin.layouts.header')
          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
          @include('admin.layouts.sidebar')

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
               @yield('content')
          </div>
          <!-- /.content-wrapper -->

          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
               <!-- Control sidebar content goes here -->
          </aside>
          <!-- /.control-sidebar -->

          <!-- Main Footer -->
          @include('admin.layouts.footer')
     </div>
     <!-- ./wrapper -->

     <!-- REQUIRED SCRIPTS -->
     <!-- jQuery -->
     <script src="{{ asset('assets/admin') }}/plugins/jquery/jquery.min.js"></script>
     <!-- Bootstrap -->
     <script src="{{ asset('assets/admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- overlayScrollbars -->
     <script src="{{ asset('assets/admin') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
     <!-- AdminLTE App -->
     <script src="{{ asset('assets/admin') }}/dist/js/adminlte.js"></script>
     <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

     <!-- OPTIONAL SCRIPTS -->
     <script src="{{ asset('assets/admin') }}/dist/js/demo.js"></script>

     <!-- PAGE PLUGINS -->
     <!-- jQuery Mapael -->
     <script src="{{ asset('assets/admin') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
     <script src="{{ asset('assets/admin') }}/plugins/raphael/raphael.min.js"></script>
     <script src="{{ asset('assets/admin') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
     <script src="{{ asset('assets/admin') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
     <!-- ChartJS -->
     <script src="{{ asset('assets/admin') }}/plugins/chart.js/Chart.min.js"></script>

     <!-- PAGE SCRIPTS -->
     <script src="{{ asset('assets/admin') }}/dist/js/pages/dashboard2.js"></script>

     <!-- Other plugins -->
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
     <script>
     $(document).ready(function() {
          $('#datatable').DataTable();
     });
     </script>
     <script>
     $(document).ready(function() {
          $('#summernote').summernote();
          $('#summernote2').summernote();
     });
     </script>
     <script>
     // Display a success toast, with a title
     @if(Session::has('success'))    
          toastr.success("{{ Session::get('success') }}",'Success')  
     @endif
     // Display a Warning toast, with a title
     @if(Session::has('warning'))    
          toastr.warning("{{ Session::get('warning') }}",'Warning')  
     @endif
     // Display a Error toast, with a title
     @if(Session::has('error'))    
           toastr.error("{{ Session::get('error') }}",'Error')  
     @endif
     </script>
</body>

</html>