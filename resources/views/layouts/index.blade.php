<!DOCTYPE html>
<html class="no-js" lang="en">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
  <head>

    <meta charset="utf-8">
    {{-- ChartScript --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Keuangan Pondok Pesantren Tahfidz Preneur YBM PLN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css') }}" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800') }}">
    <!-- orion icons-->
    <link rel="stylesheet" href="{{ asset('css/orionicons.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png?3') }}">
        <script src="{{ asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
        <script src="{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
        <script src="js/jquery-2.2.0.min.js" charset="utf-8"></script>
 <!-- Bootstrap CSS
		============================================ -->

        <!-- Bootstrap CSS
            ============================================ -->


        <!-- x-editor CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('table/css/editor/select2.css') }}">
        <link rel="stylesheet" href="{{ asset('table/css/editor/datetimepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('table/css/editor/bootstrap-editable.css') }}">
        <link rel="stylesheet" href="{{ asset('table/css/editor/x-editor-style.css') }}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('table/css/data-table/bootstrap-table.css') }}">
        <link rel="stylesheet" href="{{ asset('table/css/data-table/bootstrap-editable.css') }}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('table/style.css') }}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('table/css/responsive.css') }}">
        <!-- modernizr JS
            ============================================ -->
        <script src="{{ asset('table/js/vendor/modernizr-2.8.3.min.js') }}"></script>
  </head>
  <style>
  .line{
    position: absolute;
width: 2000px;
height: 2px;
left: 3px;
top: 40px;

background: #337ab7;
mix-blend-mode: normal;
border: 5px solid #337ab7;
}</style>
  <body>
      <!-- header/navbar -->
    <header class="header">
        @include('layouts.topbar')

      <!-- sidebar/wrapper -->
    <div class="d-flex align-items-stretch">
        @include('layouts.sidebar')

    <!-- Content  -->
 <div class="page-holder w-100 bg-black align-items-stretch d-flex flex-wrap">

@yield('content')

<!-- end of main content -->
<footer class="footer bg-dark shadow align-self-end py-3 px-xl-5 w-100">
@include('layouts.footer')
</footer>

</div>

</div>
</header>
<!-- tabel -->
  <!-- jquery
		============================================ -->
        <script src="{{ asset('table/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{ asset('table/js/bootstrap.min.js') }}"></script>

        <!-- data table JS
            ============================================ -->
        <script src="{{ asset('table/js/data-table/bootstrap-table.js') }}"></script>
        <script src="{{ asset('table/js/data-table/tableExport.js') }}"></script>
        <script src="{{ asset('table/js/data-table/data-table-active.js') }}"></script>
        <script src="{{ asset('table/js/data-table/bootstrap-table-editable.js') }}"></script>
        <script src="{{ asset('table/js/data-table/bootstrap-editable.js') }}"></script>
        <script src="{{ asset('table/js/data-table/bootstrap-table-resizable.js') }}"></script>
        <script src="{{ asset('table/js/data-table/colResizable-1.5.source.js') }}"></script>
        <script src="{{ asset('table/js/data-table/bootstrap-table-export.js') }}"></script>
        <!--  editable JS
            ============================================ -->
        <script src="{{ asset('table/js/editable/jquery.mockjax.js') }}"></script>
        <script src="{{ asset('table/js/editable/mock-active.js') }}"></script>
        <script src="{{ asset('table/js/editable/select2.js') }}"></script>
        <script src="{{ asset('table/js/editable/moment.min.js') }}"></script>
        <script src="{{ asset('table/js/editable/bootstrap-datetimepicker.js') }}"></script>
        <script src="{{ asset('table/js/editable/bootstrap-editable.js') }}"></script>
        <script src="{{ asset('table/js/editable/xediable-active.js') }}"></script>




   <!-- JavaScript files-->
   <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
   <script src="{{ asset('vendor/popper.js/umd/popper.min.js') }}"> </script>
   <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.js') }}"> </script>

   <script src="{{ asset('https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js') }}"></script>
    <script src="js/jquery-2.2.0.min.js" charset="utf-8"></script>
   <script src="{{ asset('js/front.js') }}"></script>
   @yield('puter')



 </body>
</html>
