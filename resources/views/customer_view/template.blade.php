

<!DOCTYPE blade.php>
<blade.php lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>MAY ID</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link id="pagestyle" href="{{ url('assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ url('/cus_asset/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ url('/cus_asset/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ url('/cus_asset/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ url('/cus_asset/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ url('/cus_asset/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
         .navbar {
            box-shadow: none;
         }
      </style>
       {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
       <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
       <title>Bootstrap Example</title>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ url('/cus_asset/images/loading.gif') }}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header {{ !Request::is('/') ? 'bg-primary' : '' }}">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="{{ url('/') }}"><img src="{{ url('/cus_asset/images/MAYID.png') }}" alt="#" width="100dp" style="border-radius:50px;"/></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ url('/') }}">Home</a>
                              </li>
                              <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ url('/about') }}">About</a>
                              </li>
                              <li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ url('/services') }}">Services</a>
                              </li>
                              <li class="nav-item {{ Request::is('product') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ url('/product') }}">Product</a>
                              </li>
                              <li class="nav-item {{ Request::is('cart') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ url('/cart') }}">Cart</a>
                              </li>
                              @if(Session::get('login'))
                              <li class="nav-item {{ Request::is('logout') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                              </li>
                              @else
                              <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ url('/login') }}">Login</a>
                              </li>
                              @endif
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      @if(!Request::is('/'))
         echo '<div class="container my-5"><div class="row my-5"></div></div>';
      @endif
      @yield('main-content');
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ url('assets/js/soft-ui-dashboard.min.js?v=1.0.7') }}"></script>
      <script src="{{ url('/cus_asset/js/jquery.min.js') }}"></script>
      <script src="{{ url('/cus_asset/js/popper.min.js') }}"></script>
      <script src="{{ url('/cus_asset/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ url('/cus_asset/js/jquery-3.0.0.min.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ url('/cus_asset/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ url('/cus_asset/js/custom.js') }}"></script>
   </body>
</blade.php>

