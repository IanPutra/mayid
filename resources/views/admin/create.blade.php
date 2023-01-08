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
                        <h6>Add Admin</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-6">
                            <form action="{{ url('/dashboard/admin') }}" method="post">
                                @csrf
                                {{-- kolom nama --}}
                                <label class="mt-2" for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Username" >
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom email --}}
                                <label class="mt-2" for="description">E-mail</label>
                                <input type="email" name="email" id="name" class="form-control @error('email') is-invalid @enderror" placeholder="email" >
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom umur --}}
                                <label class="mt-2" for="price">Date of birth</label>
                                <input type="date" name="umur" id="umur" class="form-control @error('umur') is-invalid @enderror" placeholder="Date of birth" value="@old('Date of birth')">
                                @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom gender --}}
                                <label class="mt-2" for="type">Gender</label>
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

                                {{-- kolom department --}}
                                <label class="mt-2" for="type">Department</label>
                                <select name="department" id="department" class="form-select @error('department') is-invalid @enderror">
                                    <option value="">Select type</option>
                                    <option value="Binus">Bina Nusantara</option>
                                    <option value="Non-Binus">Non-Bina Nusantara</option>
                                </select>
                                @error('department')
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