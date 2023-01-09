<!-- extend dr template -->
@extends('../dashboard-template')

<!-- buat page-titel -->
@section('page-title','Dashboard')

<!-- navigasi -->
@section('breadcrumb')
<li class="breadcrumb-item text-sm"><a href="" class="opacity-5 text-dark">Dashboard</a></li>
<li class="breadcrumb-item text-sm text-dark active">Home</li>
@endsection

<!-- isinya -->
@section('main-content')
<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Add Sold Product</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-6">
                            <form action="{{ url('/dashboard/sold') }}" method="post">
                                @csrf

                                {{-- kolom nama customer --}}
                                <label class="mt-2" for="customer">Customer</label>
                                <select name="customer" id="customer" class="form-select">
                                    <option value="">Select customer</option>
                                    @foreach($customers as $customer)
                                    <option value="{{ $customer->customer_id }}">{{ $customer->username }}</option>
                                    @endforeach
                                </select>
                                @error('customer')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom nama product --}}
                                <label class="mt-2" for="product">Product</label>
                                <select name="product" id="product" class="form-select">
                                    <option value="">Select product</option>
                                    @foreach($products as $product)
                                    <option value="{{ $product->product_id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                                @error('product')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom payment --}}
                                <label class="mt-2" for="payment">Payment</label>
                                <select name="payment" id="payment" class="form-select @error('payment') is-invalid @enderror">
                                    <option value="">Select type</option>
                                    <option value="QRIS">QRIS</option>
                                    <option value="BCA">BCA</option>
                                    <option value="Mandiri">Mandiri</option>
                                </select>
                                @error('payment')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- tombol add data --}}
                                <button class="btn btn-success mt-4">Add data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection