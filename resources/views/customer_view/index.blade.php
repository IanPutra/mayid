@extends('/customer_view.template')

@section('main-content')
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators pt-4 mb-0">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Services</h1>
                                 <p>Customer trust is part of our responsibility. MAYID Computer & Laptop Services is a trusted website for you to find out the symptoms of illness from your Computer & Laptop.</p>
                                 <a href="{{ url('/product') }}">Buy Now</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <img src="{{ url('/cus_asset/images/chair.png') }}" class="img rounded">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Services</h1>  
                                 <p>If you need a spare part, you can buy it right away or maybe you want to upgrade your PC, you can order it right away and also buy it by pre-order.</p>
                                 <a href="{{ url('/product') }}">Buy Now </a> 
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{{ url('/cus_asset/images/chair.png') }}" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Services</h1>
                                 <p>Having problems with your laptop or computer? immediately visit the service to find out what happened to your laptop or computer. </p>
                                 <a href="{{ url('/services') }}">Service now </a> 
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{{ url('/cus_asset/images/chair.png') }}" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- three_box -->
      <div class="three_box">
         <div class="container">
            <div class="row my-5">
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="{{ url('/cus_asset/images/PCset.png') }}" alt="#" width="250px"/></i>
                     <h3>PC</h3>
                     <p>CPU is an important component of your computer. Immediately build your CPU set through us quickly and reliably.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="{{ url('/cus_asset/images/Macbook.png') }}" alt="#" width="1000px"/></i>
                     <h3>Laptop</h3>
                     <p>Feeling less fast with your laptop's performance? Maybe the service will really help you in finding diseases in your laptop.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="{{ url('/cus_asset/images/sparepart.png') }}" alt="#" width="250px"/></i>
                     <h3>Spare Part</h3>
                     <p>Performance when playing less tight? it's time to upgrade your VGA to the latest model so you can feel the gaming sensation smoothly.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      

      <!-- teams -->
      <div class="customer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Teams</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                           <li data-target="#myCarousel" data-slide-to="1"></li>
                           <li data-target="#myCarousel" data-slide-to="2"></li>
                           <li data-target="#myCarousel" data-slide-to="3"></li>
                           <li data-target="#myCarousel" data-slide-to="4"></li>
                           <li data-target="#myCarousel" data-slide-to="5"></li>
                        </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-9 mx-auto">
                                       <div class="test_box text-center mx-auto">
                                          <i><img src="{{ url('/cus_asset/images/MAYID.png') }}" width="200dp" style="border-radius:150px;"></i>
                                          <h4 class="text-center">Great To see us</h4>
                                          <p>Here are the people who developed this website to become a website that will help you find spare parts and diseases on your computer & laptop.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12 ">
                                       <div class="test_box text-center mx-auto">
                                          <i><img src="{{ url('/cus_asset/images/ian.png') }}" alt="#" width="200dp" style="border-radius:150px;"/></i>
                                          <h4 class="text-center">Ian Putra Ismaya</h4>
                                          <p class="text-center"> Full Stack Developer</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="test_box text-center mx-auto">
                                          <i><img src="{{ url('/cus_asset/images/adriel.png') }}" alt="#" width="200dp" style="border-radius:150px;"/></i>
                                          <h4 class="text-center">Adriel Stefanus Anderson</h4>
                                          <p class="text-center">UI/UX</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12 ">
                                       <div class="test_box text-center mx-auto">
                                          <i><img src="{{ url('/cus_asset/images/diego.png') }}" alt="#" width="200dp" style="border-radius:150px;"/></i>
                                          <h4 class="text-center">Diego Armando</h4>
                                          <p class="text-center">Front End Developer</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="test_box text-center mx-auto">
                                          <i><img src="{{ url('/cus_asset/images/weisang.png') }}" alt="#" width="200dp" style="border-radius:150px;"></i>
                                          <h4 class="text-center">Marcel Weisang</h4>
                                          <p class="text-center">UI/UX</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="test_box text-center mx-auto">
                                          <i><img src="{{ url('/cus_asset/images/yosef.png') }}" width="200dp" style="border-radius:150px;"></i>
                                          <h4 class="text-center">Yosef Adventinus Agi Supriyanto</h4>
                                          <p class="text-center">Full Stack Developer</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end customer -->
      <!--  footer -->
@endsection