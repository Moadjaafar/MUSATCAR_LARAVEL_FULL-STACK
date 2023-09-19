<!doctype html>
<html lang="en" class="semi-dark">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{asset('Dahsboard/assets/css/pace.min.css')}}" rel="stylesheet" />
  <script src="{{asset('Dahsboard/assets/js/pace.min.js')}}"></script>
  <link rel="icon" type="image/png" href="{{asset('Dahsboard/assets/images/icons/logo.png')}}">

  <!--plugins-->
  <link href="{{asset('Dahsboard/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  {{-- <link href="{{asset('Dahsboard/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" /> --}}
  <link href="{{asset('Dahsboard/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{asset('Dahsboard/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Dahsboard/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('Dahsboard/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('Dahsboard/assets/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!--Theme Styles-->
  <link href="{{asset('Dahsboard/assets/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('Dahsboard/assets/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{asset('Dahsboard/assets/css/header-colors.css')}}" rel="stylesheet" />
  @livewireStyles

  <title>Admin Dahsboard</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <img src="{{asset('Dahsboard/assets/images/logo-icon-2.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
          <h4 class="logo-text">MUSAT CAR</h4>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
        <li>
          <a href="{{ route('Admin.Dashboard')}}">
            <div class="parent-icon">
              <ion-icon name="home-outline"></ion-icon>
            </div>
            <div class="menu-title">Dahsboard</div>
          </a>
        </li>

        <li class="menu-label">CARS</li>
        <li>
          <a href="{{ route('Admin.Add_Car')}}">
            <div class="parent-icon">
              <img src="{{asset('Dahsboard/assets/images/icons/sedan.png')}}" alt="">
            </div>
            <div class="menu-title">Add Car</div>
          </a>
        </li>
        <li>
          <a href="{{ route('Admin.All_Cars')}}">
            <div class="parent-icon">
              <img src="{{asset('Dahsboard/assets/images/icons/sedan.png')}}" alt="">
            </div>
            <div class="menu-title">List Of Cars</div>
          </a>
        </li>


        <li class="menu-label">CARS MARKE</li>
        <li>
          <a href="{{ route('Admin.Add_Category')}}">
            <div class="parent-icon">
              <img src="{{asset('Dahsboard/assets/images/icons/steering-wheel.png')}}" alt="">
            </div>
            <div class="menu-title">Add Marke</div>
          </a>
        </li>
        <li>
          <a href="{{ route('Admin.All_Categorys')}}">
            <div class="parent-icon">
              <img src="{{asset('Dahsboard/assets/images/icons/steering-wheel.png')}}" alt="">
            </div>
            <div class="menu-title">List Of Marke's</div>
          </a>
        </li>
        <li class="menu-label">BOOKINGS</li>
        <li>
          <a href="{{ route('Admin.Orders')}}">
            <div class="parent-icon">
              <img src="{{asset('Dahsboard/assets/images/icons/booking.png')}}" alt="">
            </div>
            <div class="menu-title">All Orders</div>
          </a>
        </li>
        <li>
          <a href="{{ route('All_confrmd_Booking')}}">
            <div class="parent-icon">
              <img src="{{asset('Dahsboard/assets/images/icons/booking.png')}}" alt="">
            </div>
            <div class="menu-title">Confirmed Orders</div>
          </a>
        </li>
        <li>
          <a href="{{ route('All_cancld_Booking')}}">
            <div class="parent-icon">
              <img src="{{asset('Dahsboard/assets/images/icons/booking.png')}}" alt="">
            </div>
            <div class="menu-title">Canceled Orders</div>
          </a>
        </li>
      </ul>
      <!--end navigation-->
    </aside>
    <!--end sidebar -->

    <!--start top header-->
    <header class="top-header">
      <nav class="navbar navbar-expand gap-3">
        <div class="toggle-icon">
          <ion-icon name="menu-outline"></ion-icon>
        </div>
       
        <form class="searchbar">
          <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
            <ion-icon name="search-outline"></ion-icon>
          </div>
          <input class="form-control" type="text" placeholder="Search for anything">
          <div class="position-absolute top-50 translate-middle-y search-close-icon">
            <ion-icon name="close-outline"></ion-icon>
          </div>
        </form>
        <div class="top-navbar-right ms-auto">

          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
              <a class="nav-link mobile-search-button" href="javascript:;">
                <div class="">
                  <ion-icon name="search-outline"></ion-icon>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link dark-mode-icon" href="javascript:;">
                <div class="mode-icon">
                  <ion-icon name="moon-outline"></ion-icon>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown dropdown-large dropdown-apps">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                <div class="">
                  <ion-icon name="apps-outline"></ion-icon>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                <div class="row row-cols-3 g-3 p-3">
                  <div class="col text-center">
                    <a href="{{ route('Admin.All_Cars')}}">
                      <div class="app-box mx-auto bg-gradient-purple text-white">
                        <img src="{{asset('Dahsboard/assets/images/icons/carsm.png')}}" alt="">
                      </div>
                      <div class="app-title">Cars</div>
                    </a>
                  </div>
                  <div class="col text-center">
                    <a href="{{ route('Admin.All_Categorys')}}">
                      <div class="app-box mx-auto bg-gradient-info text-white">
                        <img src="{{asset('Dahsboard/assets/images/icons/sm2.png')}}" alt="">
                      </div>
                      <div class="app-title">Marks</div>
                    </a>
                  </div>
                  <div class="col text-center">
                    <a href="{{ route('Admin.Orders')}}">
                      <div class="app-box mx-auto bg-gradient-success text-white">
                        <img src="{{asset('Dahsboard/assets/images/icons/sm3.png')}}" alt="">
                      </div>
                      <div class="app-title">Bookings</div>
                    </a>
                  </div>
                  
                </div>
              </div>
            </li>
            
            <li class="nav-item dropdown dropdown-user-setting">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                <div class="user-setting">
                  <img src="{{asset('Dahsboard/assets/images/avatars/06.png')}}" class="user-img" alt="">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex flex-row align-items-center gap-2">
                      <img src="{{asset('Dahsboard/assets/images/avatars/06.png')}}" alt="" class="rounded-circle" width="54" height="54">
                      <div class="">
                        <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                        <small class="mb-0 dropdown-user-designation text-secondary">UI Developer</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                
                <li>
                  <a class="dropdown-item" href="{{route('LogOut')}}">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <ion-icon name="log-out-outline"></ion-icon>
                      </div>
                      <div class="ms-3"><span>Logout</span></div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

          </ul>

        </div>
      </nav>
    </header>
    <!--end top header-->


    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Dahsboard</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->

        <div class="content-wrapper">
          @yield('content')
        </div>
 
        <!--end row-->



        
      </div>
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->


    <!--start footer-->
    
    <!--end footer-->


    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top">
      <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <div class="switcher-body">
      <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <ion-icon name="color-palette-outline" class="me-0"></ion-icon>
      </button>
      <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
        tabindex="-1" id="offcanvasScrolling">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <h6 class="mb-0">Theme Variation</h6>
          <hr>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
            <label class="form-check-label" for="LightTheme">Light</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
            <label class="form-check-label" for="DarkTheme">Dark</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" value="option3">
            <label class="form-check-label" for="SemiDark">Semi Dark</label>
          </div>
          <hr />
          <h6 class="mb-0">Header Colors</h6>
          <hr />
          <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
              <div class="col">
                <div class="indigator headercolor1" id="headercolor1"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor2" id="headercolor2"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor3" id="headercolor3"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor4" id="headercolor4"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor5" id="headercolor5"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor6" id="headercolor6"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor7" id="headercolor7"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor8" id="headercolor8"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--end switcher-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

  </div>
  <!--end wrapper-->

  <!-- JS Files-->
  <script src="{{asset('Dahsboard/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('Dahsboard/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('Dahsboard/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{asset('Dahsboard/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <!--plugins-->
  <script src="{{asset('Dahsboard/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  {{-- <script src="{{asset('Dahsboard/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script> --}}
  <script src="{{asset('Dahsboard/assets/plugins/easyPieChart/jquery.easypiechart.js')}}"></script>
  <script src="{{asset('Dahsboard/assets/plugins/chartjs/chart.min.js')}}"></script>
  <script src="{{asset('Dahsboard/assets/js/index.js')}}"></script>
  <!-- Main JS-->
  <script src="{{asset('Dahsboard/assets/js/main.js')}}"></script>
  @livewireScripts


</body>

</html>