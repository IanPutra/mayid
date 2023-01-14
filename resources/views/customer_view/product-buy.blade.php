@extends('/customer_view.template')

@section('main-content')
      <!-- end header inner -->
      <!-- end header -->
      <!-- products -->
      <section class="barber-profile pt-5 mb-5">
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
                    <span class="text-muted">Rp {{ number_format($data->price,0,",",".") }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (IDR)</span>
                    <h3><b>Rp {{ number_format($data->price,0,",",".") }}</b></h3>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <div class="card">
                <div class="row">
                    <?php        
                    $image = url('/assets/product-image/');
                    $url = $image.'/'.$data->image; 
                    ?>
                    <div class="col-md-5 card-head" style="background-image: url('{{$url}}');background-position-y: 50%;">
                        <div class="h-100">

                        </div>
                    </div>
                    <div class="col-md-7 card-body">
                        <div class="h-100">
                            <div class="row">
                                <div class="col-12">
                                    <h1><b>{{ $data->name }}</b></h1>
                                    <span class="badge bg-primary">{{ $data->type }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span>Price</span>
                                    <h3><b>Rp {{ number_format($data->price,0,",",".") }}</b></h3>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="card-12 bg-light">
                                    {{$data->description}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <form action="" method="post">
                                        <div class="input-group">
                                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="paymentMethod">
                                                <option selected>Choose...</option>
                                                <option value="1">QRIS</option>
                                                <option value="2">BCA</option>
                                                <option value="3">MANDIRI</option>
                                            </select>
                                            <input class="btn btn-outline-secondary mb-0" type="submit" value="BUY">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
      <!-- end products -->
      <!--  footer -->
@endsection
