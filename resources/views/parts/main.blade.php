<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ValorTracker') }}</title>
    <meta name="robots" content="noindex,nofollow">
    @vite('resources/css/app.css')
    @vite('resources/css/style.min.css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</head>
<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
      <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin6">
          <nav class="navbar top-navbar navbar-expand-md navbar-light">
              <div class="navbar-header" data-logobg="skin6">
                  <!-- ============================================================== -->
                  <!-- Logo -->
                  <!-- ============================================================== -->
                  <a class="navbar-brand" href="{{ route('dashboard') }}">
                      <!-- Logo icon -->
                      {{-- <b class="logo-icon">
                          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                          <!-- Dark Logo icon -->
                          <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                          <!-- Light Logo icon -->
                          <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                      </b> --}}
                      <!--End Logo icon -->
                      <!-- Logo text -->
                      <span class="logo-text">
                          ValorTracker
                      </span>
                  </a>
                  <!-- ============================================================== -->
                  <!-- End Logo -->
                  <!-- ============================================================== -->
                  <!-- This is for the sidebar toggle which is visible on mobile only -->
                  <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                          class="ti-menu ti-close"></i></a>
              </div>
              <!-- ============================================================== -->
              <!-- End Logo -->
              <!-- ============================================================== -->
              <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                  <!-- ============================================================== -->
                  <!-- toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav float-start me-auto">
                      <!-- ============================================================== -->
                      <!-- Search -->
                      <!-- ============================================================== -->
                      <li class="nav-item search-box"> <a class="nav-link"><span class="font-16">{{ $playerdata->acct->game_name }}#{{ $playerdata->acct->tag_line }}</span></a>

                      </li>
                  </ul>
                  <!-- ============================================================== -->
                  <!-- Right side toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav float-end">
                      <!-- ============================================================== -->
                      <!-- User profile and search -->
                      <!-- ============================================================== -->
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="https://media.valorant-api.com/playercards/ca15070b-4ed8-4a4f-f1e7-aea812fd8fef/smallart.png" alt="user" class="rounded-circle" width="31">
                          </a>
                          <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                              {{-- <a class="dropdown-item waves-effect waves-dark" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                  My Profile</a>
                              <a class="dropdown-item waves-effect waves-dark" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                  My Balance</a> --}}
                              <a class="dropdown-item waves-effect waves-dark" href="{{ route('logout') }}"><i class="ti-shift-left m-r-5 m-l-5"></i>
                                  Logout</a>
                          </ul>
                      </li>
                      <!-- ============================================================== -->
                      <!-- User profile and search -->
                      <!-- ============================================================== -->
                  </ul>
              </div>
          </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
          <!-- Sidebar scroll-->
          <div class="scroll-sidebar">
              <!-- Sidebar navigation-->
              <nav class="sidebar-nav">
                  <ul id="sidebarnav">
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('dashboard') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                  class="hide-menu">Dashboard</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('store') }}" aria-expanded="false"><i
                                  class="mdi mdi-store"></i><span class="hide-menu">Store</span></a></li>
                      {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="table-basic.html" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                  class="hide-menu">Table</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="icon-material.html" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                  class="hide-menu">Icon</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="starter-kit.html" aria-expanded="false"><i class="mdi mdi-file"></i><span
                                  class="hide-menu">Blank</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="error-404.html" aria-expanded="false"><i class="mdi mdi-alert-outline"></i><span
                                  class="hide-menu">404</span></a></li> --}}
                  </ul>

              </nav>
              <!-- End Sidebar navigation -->
          </div>
          <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        @yield('content')
          <!-- ============================================================== -->
          <!-- footer -->
          <!-- ============================================================== -->
          <footer class="footer text-center">
              Developed by <a
                  href="https://www.thinesjs.com">ThinesJs</a>.
          </footer>
          <!-- ============================================================== -->
          <!-- End footer -->
          <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  {{-- JS --}}
  @vite('resources/js/app.js')
  @vite('resources/js/sidebarmenu.js')
  @vite('resources/js/waves.js')
  @vite('resources/js/app-style-switcher.js')
  @vite('resources/js/custom.min.js')
  @vite('resources/js/feather.min.js')
  @vite('resources/js/sparkline.js')
  @vite('resources/js/perfect-scrollbar.jquery.min.js')
</body>
</html>
