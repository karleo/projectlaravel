<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Karleo Z | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('html/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('html/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('html/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('html/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('html/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('html/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('html/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('html/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('html/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('html/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('html/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('html/plugins/sweetalert2/sweetalert2.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('html/plugins/toastr/toastr.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('html/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('html/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('html/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">       
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>  

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('html/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Project Sample</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('html/dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Leomar Ortigas</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
           
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('courier.index')}}" class="nav-link {{ request()->routeIs('courier.index') ? 'active' : ''}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Courier
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('employee.index')}}" class="nav-link {{ request()->routeIs('employee.index') ? 'active' : ''}} ">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Employee
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('customer.index')}}" class="nav-link {{ request()->routeIs('customer.index') ? 'active' : ''}}">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Customer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->routeIs('status.index') ? 'active' : ''}}">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Maintenance
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('status.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('country.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Country</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('city.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>City</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('package.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Package Type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('shipmode.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shipping Mode</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('ccompany.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Courier Company</p>
                </a>
              </li>
            </ul>
          </li> 
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 <a href="https://www.kenkyle.com" target="_new">Karleo Z</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
     Powered By: <b> karleo </b> ver.0.0.1 
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('html/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('html/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('html/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('html/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('html/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
{{-- <script src="{{asset('html/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('html/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
<!-- jQuery Knob Chart -->
<script src="{{asset('html/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('html/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('html/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('html/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('html/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('html/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('html/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('html/dist/js/demo.js')}}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ asset('html/dist/js/pages/dashboard.js')}}"></script> --}}
 
<!-- bs-custom-file-input -->
<script src="{{asset('html/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
 <!-- DataTables  & Plugins -->
<script src="{{asset('html/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('html/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('html/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('html/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('html/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('html/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('html/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('html/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('html/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('html/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('html/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('html/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
 
<!-- Select2 -->
<script src="{{asset('html/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

 
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


<script type="text/javascript">
$(document).ready(function(){
     $('#customer').change(function(){
      var id = $(this).val(); 
      var _token = $('input[name="_token"]').val();   
      $.ajax({
        url: "{{ route('customer.details') }}",
        method: 'GET',
        dataType: 'JSON',
        data:{id:id, _token:_token},      
        success:function(data){ 
          $('#address').val(data[0].address);
          $('#email').val(data[0].email);
          $('#contact').val(data[0].contact);
          $('#zipcode').val(data[0].zipcode);    
          $('#city').val(data[0].city_id);    
          $('#country').val(data[0].country_id);    
         console.log(data); 
        }
      })
     });

     $('#ccustomer').change(function(){
      var id = $(this).val(); 
      var _token = $('input[name="_token"]').val();   
      $.ajax({
        url: "{{ route('customer.details') }}",
        method: 'GET',
        dataType: 'JSON',
        data:{id:id, _token:_token},      
        success:function(data){ 
          $('#caddress').val(data[0].address);
          $('#cemail').val(data[0].email);
          $('#ccontact').val(data[0].contact);
          $('#czipcode').val(data[0].zipcode);       
          $('#ccity').val(data[0].city_id);    
          $('#ccountry').val(data[0].country_id);    
        }
      })
     });

  });   
</script>

<!-- -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#ocountry').change(function(){
      var id = $(this).val();
      var _token = $('input[name="_token"]').val();   
      $.ajax({
        url: "{{ route('city.get_city') }}",
        method: 'POST',
        dataType: 'JSON',
        data:{id:id, _token:_token},      
        success:function(result){ 
          $('#city').html(result);
        }
      })
    });

    $('#dcountry').change(function(){
      var id = $(this).val();
      var _token = $('input[name="_token"]').val();   
      $.ajax({  
        url: "{{ route('city.get_city') }}",
        method: 'POST',
        dataType: 'JSON',
        data:{id:id, _token:_token},      
        success:function(result){ 
          $('#dcity').html(result);
        }
      })
    });


  });   
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  });
</script>

@yield('js_script')

</body>
</html>
