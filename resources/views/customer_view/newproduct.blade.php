{{-- tetep --}}
@extends('customer_view.template')


@section('main-content')
<section id="events" class="py-5">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 py-3 text-center">
                <h1><b>Our Product</b></h1>
            </div>
        </div>
        <div class="row">
            @foreach ($data as $item)
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="{{ url('/product-buy/'.$item->product_id) }}">
                    <div class="row">
                        <div class="col-12 text-start">
                            <div>
                                <?php
                                
                                $image = url('/assets/img/curved-images/curved'. rand(0,14) .'.jpg');


                                ?>
                                <div class="page-header min-height-300 border-radius-xl w-100" style="background-image: url({{ $image }});background-position-y: 50%;">
                                    
                                </div>
                                <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                                    <div class="row gx-4">
                                        <div class="col-auto">
                                            <div class="avatar avatar-xl position-relative">
                                                <img src="{{ url('/assets/img/bruce-mars.jpg') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" width="10%">
                                            </div>
                                        </div>
                                        <div class="col-auto my-auto">
                                            <div class="h-100">
                                                <h5 class="mb-1">
                                                    {{ $item->name }}
                                                </h5>
                                                <p class="mb-0 font-weight-bold text-sm">
                                                    {{ 'Rp'.' '.$item->price }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection