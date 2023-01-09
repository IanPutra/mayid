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
        </div>
    </div>
</div>
</section>
      <!-- end products -->
      <!--  footer -->
@endsection
