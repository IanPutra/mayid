@extends('/customer_view.template')

@section('main-content')
      <!-- end header inner -->
      <!-- end header -->
      <!-- laptop1 -->
      <div class="laptop1 pt-5">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="laptopservice">
                     <figure><img src="{{ url('/cus_asset/images/leptop.jpg') }}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>laptop</h2>
                     <p>Do not be worry, we are here to fix your laptops!</p>
                     <a class="read_more" href="{{ url('/bookservice') }}">Fix it now!</a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>PC</h2>
                     <p>Lot of problems attacks your PC? Do not be worry we are here to help you!</p>
                     <a class="read_more" href="{{ url('/bookservice') }}">Fix it now!</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="laptop1_img">
                     <figure><img src="{{ url('/cus_asset/images/pct.png') }}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end laptop1 -->
      <!--  footer -->
@endsection
