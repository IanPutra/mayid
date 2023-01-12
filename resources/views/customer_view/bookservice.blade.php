@extends('/customer_view.template')

@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="titlepage">
                    <h1><b>Form for Your Device Reparation</b></h1>
                </div>
                <div class="col-md-8 py-2">
                    <form action="#" method="post">
                            @csrf
                            {{-- kolom nama --}}
                            <label class="mt-1" for="nameid"><h2>Customer Id</h2></label>
                            <input type="text" name="nameid" id="nameid" class="form-control @error('nameid') is-invalid @enderror" placeholder="name id" >
                            @error('nameid')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                            {{-- kolom payment --}}
                            <label class="mt-1" for="payment"><h2>Payment</h2></label>
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
                            <p>
                                
                            </p>
                            {{-- kolom device --}}
                            <label class="mt-1" for="device"><h2>Device Name</h2></label>
                            <input type='text' textarea name="device" class="form-control @error('device') is-invalid @enderror" id="device" placeholder="device""></input>
                            @error('device')
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
@endsection