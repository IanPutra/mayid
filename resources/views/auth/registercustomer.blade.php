@extends('/template')

@section('page-title', 'LOGIN')

@section('form')
<h1 class="my-4">Login<br>Customer</h1>
@if(session()->has('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Opps..</strong> {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <i class="fas fa-times"></i>
    </button>
</div>
@endif

<form action="{{ url('/register') }}" method="post">
    @csrf
    {{-- kolom username --}}
    <label class="mt-2" for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Customer name" value="{{ @old('username') }}">
    @error('username')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

    @csrf
    {{-- kolom e-mail --}}
    <label class="mt-2" for="e_mail">E-mail</label>
    <input type="e_mail" name="e_mail" id="e_mail" class="form-control @error('e_mail') is-invalid @enderror" placeholder="Customer e-mail" value="{{ @old('e_mail') }}">
    @error('e_mail')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

    @csrf
    {{-- kolom tanggal --}}
    <label class="mt-2" for="dateof_birth">Date of Birth</label>
    <input type="date" name="dateof_birth" id="dateof_birth" class="form-control @error('dateof_birth') is-invalid @enderror" placeholder="Customer Date of Birth" value="{{ @old('dateof_birth') }}">
    @error('dateof_birth')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

    {{-- kolom gender --}}
    <label class="mt-2" for="gender">Gender</label>
    <select name="gender" id="gender" class="form-select @error('gender') is-invalid @enderror">
        <option value="">Select gender</option>
        <option value="M">Male</option>
        <option value="F">Female</option>
    </select>
    @error('gender')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

    {{-- kolom password --}}
    <div class="row">
        <div class="col-lg-6">
            <label for="password" class="mt-4">Password</label>
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-lg-6">
            <label for="passwordConfirm" class="mt-4">Password Confirm</label>
            <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control @error('passwordConfirm') is-invalid @enderror">
            @error('passwordConfirm')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    {{-- tombol add data --}}
    <button class="btn btn-success mt-4">Add data</button>
</form>

@endsection