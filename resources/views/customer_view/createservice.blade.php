@extends('/customer_view.template')

@section('main-content')
<section class="mb-4 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h1>New service</h1>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-auto">
                            <form action="{{ url('/dashboard/service') }}" method="post">
                                
                                {{-- kolom device --}}
                                <label class="mt-2" for="device">Device Name</label>
                                <input type='text' textarea name="device" class="form-control @error('device') is-invalid @enderror" id="device" placeholder="device""></input>
                                @error('device')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom deskripsi --}}
                                <label class="mt-2" for="description">Description</label>
                                <textarea name="description" class="form-control @error('type') is-invalid @enderror" id="description" rows="3" placeholder="Product description" value="@old('description')"></textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom payment --}}
                                <label class="mt-2" for="payment">Payment</label>
                                <select name="payment" id="payment" class="custom-select d-block w-100 @error('payment') is-invalid @enderror">
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