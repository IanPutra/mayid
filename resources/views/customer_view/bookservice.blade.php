@extends('/customer_view.template')

@section('main-content')
<link href="{{ url('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ url('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
<link href="{{ url('assets/css/nucleo-svg.css" rel="stylesheet') }}" />
    <div class="container">
        <div class="row">
            <div class="col-md-7 py-5">
                <div class="titlepage">
                    <h1><b>Form for Your Device Reparation</b></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <form action="#" method="post">
                                @csrf
                                {{-- kolom nama --}}
                                <label class="mt-2 mb-" for="nameid">Customer Id</label>
                                <input type="text" name="nameid" id="nameid" class="form-control @error('nameid') is-invalid @enderror" placeholder="name id" >
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

                                {{-- tombol add data --}}
                                <button class="btn btn-success mt-4">Add data</button>
                            </form>
            </div>
        </div>
    </div>
@endsection