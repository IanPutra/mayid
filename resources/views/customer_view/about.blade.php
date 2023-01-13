@extends('/customer_view.template')

@section('main-content')
      <!-- end header inner -->
      <!-- end header -->
      <!-- about section -->
      <div class="about pt-5">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p>This website is officially made by PT. MAYID which will be developed as a place to service computers and laptops. You can get a reliable guarantee only by not breaking the seal that has been given to the customer. If a damaged seal is found, we are not responsible.</p>
                     <a class="read_more" class="nav-link" href="{{ url('/product') }}">Check Product</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img text-center mx-auto test_box">
                     <i><img src="{{ url('/cus_asset/images/pcsetup.png') }}"  width="400dp" style="border-radius:200px;"/></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end about section -->
      <!--  footer -->
@endsection