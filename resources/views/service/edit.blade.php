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
                        <h6>Edit Service</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-6">
                        <form action="{{ url('/dashboard/service/'.$service->service_id) }}" method="post">
                                @csrf
                                @method('PATCH')
                                {{-- kolom nama --}}

                                {{-- kolom device --}}
                                <label class="mt-2" for="device">Device Name</label>
                                <input type='text' name="device" class="form-control @error('device') is-invalid @enderror" id="device" placeholder="device" value="{{ $service->device_name }}">
                                @error('device')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom price --}}
                                <label class="mt-2" for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="price" value="{{ $service->price }}">
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