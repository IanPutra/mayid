<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>PRODUCT ON MAY ID</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
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
   </head>
   <!-- body -->
   <body class="main-layout inner_posituong">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ url('/cus_asset/images/loading.gif') }}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.blade.html"><img src="{{ url('/cus_asset/images/logo.png') }}" alt="#" /></a>
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
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/customer') }}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/about') }}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/services') }}">Services</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{ url('/product') }}">Product</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#">Login</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- products -->
      <section class="barber-profile mt-5 mb-5">
  <div class="container">
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div class="d-block me-auto">
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">{{ $data->name }}</small>
                    </div>
                    <span class="text-muted">Rp {{ $data->price }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (IDR)</span>
                    <strong>Rp {{ $data->price }}</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form action="/product-insert" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate="">
              @csrf
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="pemesanan_id_cust" class="form-label">ID Customer</label>
                    <select class="form-select" aria-label="Default select example" name="pemesanan_id_cust">
                      <option value="{{ $dataCustomer->customer_id }}" selected>{{ $dataCustomer->customer_id }}</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="pemesanan_id_barber" class="form-label">ID Barber</label>
                    <select class="form-select" name="pemesanan_id_barber" aria-label="Default select example">
                      <option value="{{ $dataBarber->barber_id }}" selected>{{ $dataBarber->barber_id }}</option>
                    </select>
                  </div>
                    <div class="col-md-6 mb-3">
                      <label for="fname" class="form-label">First Name</label>
                      <input type="text" class="form-control" name="fname" value="{{ $dataCustomer->fname }}" id="fname" required>
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lname" class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="lname" value="{{ $dataCustomer->lname }}" id="fname" required>
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <select class="form-select" name="email" aria-label="Default select example">
                    <option value="{{ $dataUser->email }}" selected>{{ $dataUser->email }}</option>
                  </select>                      
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" name="address" class="form-control" id="alamat" value="{{ $dataCustomer->descriptionCustomer->address }}" required>                       
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">No Handphone</label>
                  <input type="tel" name="phone" class="form-control" value="{{ $dataCustomer->descriptionCustomer->phone }}" id="phone" required>
                </div>
                <hr class="mb-4">
                <h4 class="mb-3">Manual Transfer</h4>
                <div class="d-block my-3">
                  <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <img src="/assets/img/clients/mandiri (1).png" height="50" width="93" alt="">
                        <h6 class="my-1">PT DBarbershop (Admin Rama)</h6>
                        <h6 class="my-1 ">1330011586</h6>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <img src="/assets/img/clients/bca (1).png" height="50" width="93" alt="">
                        <h6 class="my-1">PT DBarbershop (Admin Rama)</h6>
                        <h6 class="my-1 ">1330011586</h6>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <img src="/assets/img/clients/bri (1).png" height="50" width="93" alt="">
                        <h6 class="my-2">PT DBarbershop (Admin Rama)</h6>
                        <h6 class="my-0">1330011586</h6>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <img src="/assets/img/clients/bni (1).png" height="50" width="93" alt="">
                        <h6 class="my-2">PT DBarbershop (Admin Rama)</h6>
                        <h6 class="my-0">1330011586</h6>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                          <h6 class="my-2">Upload your invoice</h6>
                          <input type="file" class="form-control" required aria-label="file example" name="invoice" required>
                          <div class="invalid-feedback">Example invalid form file feedback</div>
                      </div>
                    </li>
                  </ul>
                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Submit payment
                </button>
            </form>
        </div>
    </div>
</div>
</section>
      <!-- end products -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <img class="logo1" src="{{ url('/cus_asset/images/logo1.png') }}" alt="#"/>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>About Us</h3>
                     <ul class="about_us">
                        <li>dolor sit amet, consectetur<br> magna aliqua. Ut enim ad <br>minim veniam, <br> quisdotempor incididunt r</li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact Us</h3>
                     <ul class="conta">
                        <li>dolor sit amet,<br> consectetur <br>magna aliqua.<br> quisdotempor <br>incididunt ut e </li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ url('/cus_asset/js/jquery.min.js') }}"></script>
      <script src="{{ url('/cus_asset/js/popper.min.js') }}"></script>
      <script src="{{ url('/cus_asset/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ url('/cus_asset/js/jquery-3.0.0.min.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ url('/cus_asset/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ url('/cus_asset/js/custom.js') }}"></script>
   </body>
</html>

