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
                        <h6>Add customer</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-6">
                            <form action="{{ url('/dashboard/customer') }}" method="post">
                                @csrf
                                {{-- kolom username --}}
                                <label class="mt-2" for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Customer name" >
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                @csrf
                                {{-- kolom e-mail --}}
                                <label class="mt-2" for="e-mail">E-mail</label>
                                <input type="e-mail" name="e-mail" id="e-mail" class="form-control @error('e-mail') is-invalid @enderror" placeholder="Customer e-mail" >
                                @error('e-mail')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                @csrf
                                {{-- kolom tanggal --}}
                                <label class="mt-2" for="dateof_birth">Date of Birth</label>
                                <input type="date" name="dateof_birth" id="dateof_birth" class="form-control @error('dateof_birth') is-invalid @enderror" placeholder="Customer Date of Birth" >
                                @error('dateof_birth')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom gender --}}
                                <label class="mt-2" for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-select @error('gender') is-invalid @enderror">
                                    <option value="">Select type</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                                @error('gender')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom password --}}
                                <label class="mt-2" for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="password">
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