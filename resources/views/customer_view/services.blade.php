@extends('/customer_view.template')

@section('main-content')
      <!-- end header inner -->
      <!-- end header -->
      <!-- laptop1 -->
      <div class="laptop1 pt-5">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="laptop1_img">
                     <figure><img src="{{ url('/cus_asset/images/leptop.jpg') }}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>laptop</h2>
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end laptop1 -->
      <!--  footer -->
@endsection
