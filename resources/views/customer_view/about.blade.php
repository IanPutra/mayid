@extends('/customer_view.template')

@section('main-content')
      <!-- end header inner -->
      <!-- end header -->
      <!-- about section -->
      <div class="about pt-5">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p>Web ini resmi dibuat oleh PT. MAYID yang akan dikembangkan sebagai tempat service Computer dan Laptop. Garansi terpercaya bisa anda dapatkan hanya dengan tidak merusak segel yang telah diberikan kepada customer. Bila ditemukan segel yang rusak tidak menjadi tanggung jawab kami.</p>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
               <div class="col-md-5">
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