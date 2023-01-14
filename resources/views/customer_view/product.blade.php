@extends('/customer_view.template')

@section('main-content')
      <!-- end header inner -->
      <!-- end header -->
      <!-- products -->

      <!-- <div  class="products">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="our_products">
                     <div class="row">
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{ url('/cus_asset/images/product1.png') }}" alt="#"/></figure>
                              <h3>Computer</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{ url('/cus_asset/images/product2.png') }}" alt="#"/></figure>
                              <h3>Laptop</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{ url('/cus_asset/images/product3.png') }}" alt="#"/></figure>
                              <h3>Tablet</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{ url('/cus_asset/images/product4.png') }}" alt="#"/></figure>
                              <h3>Speakers</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{ url('/cus_asset/images/product5.png') }}" alt="#"/></figure>
                              <h3>internet</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{ url('/cus_asset/images/product6.png') }}" alt="#"/></figure>
                              <h3>Hardisk</h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="{{ url('/cus_asset/images/product7.png') }}" alt="#"/></figure>
                              <h3>Rams</h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="{{ url('/cus_asset/images/product8.png') }}" alt="#"/></figure>
                              <h3>Bettery</h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="{{ url('/cus_asset/images/product9.png') }}" alt="#"/></figure>
                              <h3>Drive</h3>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">See More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <section class="products text-center pt-5">
        <div class="container">
            <h1>Our Products</h1>
            <p>Beberapa produk yang ada di toko kami</p>
            <div class="row row-cols-auto d-flex justify-content-center">
                @foreach ($data as $item)               
                        <div class="col mb-3 d-flex align-items-stretch">
                            <div class="card jarak d-block mx-auto " style="width: 18rem;">
                                <div class="card-body">
                                <h3 class="card-title"><b>{{ $item->name }}</b></h3>
                                <img>{{ $item->image }}</img>
                                <p class="card-text">Tipe: {{ $item->type }}</p>                   
                                <p class="card-text">Deskripsi: {{ $item->description }}</p>   
                                <p class="card-text">Harga: {{ $item->price }}</p> 
                                <p class="card-text">Jumlah stok:{{ $item->amount }}</p>          
                                <a href="/product-buy/{{ $item->product_id }}" class="btn btn-primary">Buy</a>
                              </div>
                            </div>                          
                        </div>
                @endforeach
            </div>
        </div>    
    </section>
      <!-- end products -->
      <!--  footer -->
@endsection