<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="img/logo/logo.png" rel="icon">
        <title>RuangAdmin - Form Basics</title>
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/ruang-admin.min.css')}}" rel="stylesheet">
      </head>
      <body id="page-top">
        <div id="wrapper">
          <!-- Sidebar -->
          @include('include.sidebar')
          <!-- Sidebar -->
          <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
              <!-- TopBar -->
              @include('include.nav')
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
                  <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
                </span>
              </div>
            </div>
          </footer>
          <!-- Footer -->
        </div>
      </div>
    
      <!-- Scroll to top -->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
    
      <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
      <script src="{{asset('js/ruang-admin.min.js')}}"></script>
      <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
      <script src="{{asset('js/demo/chart-area-demo.js')}}"></script> 
    </body>
</html>
