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
                            <form action="{{ url('/dashboard/service/update-progress') }}" method="post">
                                @csrf
                                <input type="hidden" name="serviceId" value="{{ $data->service_id }}">
                                <input type="hidden" name="adminId" value="2">

                                {{-- kolom Progress --}}
                                <label class="mt-2" for="progress">Progress</label>
                                <select name="progress" id="progress" class="form-select @error('progress') is-invalid @enderror">
                                    <option value="">Select progress</option>
                                    <option value="ON GOING">ON GOING</option>
                                    <option value="FINISHED">FINISHED</option>
                                </select>
                                @error('progress')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                <!-- kolom detail -->
                                <label for="detail">Detail</label>
                                <input type="text" name="detail" id="detail" class="form-control @error('detail') is-invalid @enderror">
                                @error('detail')
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