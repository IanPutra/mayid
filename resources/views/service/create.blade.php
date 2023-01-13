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
                        <h6>Add service</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-6">
                            <form action="{{ url('/dashboard/service') }}" method="post">
                                @csrf
                                {{-- kolom nama --}}
                                <label class="mt-2" for="nameid">Customer Id</label>
                                <input type="text" name="nameid" id="nameid" class="form-control @error('nameid') is-invalid @enderror" placeholder="customer id" >
                                @error('nameid')
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
                                <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="description" >
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom price --}}
                                <label class="mt-2" for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="price" >
                                @error('price')
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