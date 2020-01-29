<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | @yield('title','Dashboard')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  {{-- plugin css for data table  --}}
  <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
  {{-- admin custom css --}}
  <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
  {{-- overide admin css --}}
  <link rel="stylesheet" href="{{asset('css/admin/admin_overide_style.css')}}">
  {{-- my css --}}
  <link rel="stylesheet" href="{{asset('css/admin/admin_custom.css')}}">
  {{-- icon --}}
  <link rel="shortcut icon" type="image/png" size="16x16" href="{{asset('images/shop_online.png')}}" />
  {{-- font awesome --}}
  {{-- <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" /> --}}
</head>

<body>
  <div class="container-scroller">
    {{-- navbar  --}}
    {{-- navbar  --}}
    @include('backend.partsials.nav')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      {{-- left side bar --}}
      {{-- left side bar --}}
      @include('backend.partsials.left_sidebar')

        @yield('content')
        @stack('css')

    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}"></script>
  <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/datatables.min.js') }}"></script>

  <script>
    $(document).ready(function() {
    $('#dataTable').DataTable();
} );
  </script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="js/maps.js"></script>
  <!-- End custom js for this page-->
</body>

</html>