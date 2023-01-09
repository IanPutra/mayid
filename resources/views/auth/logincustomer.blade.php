@extends('/template')

@section('page-title', 'LOGIN')

@section('form')
<a href="/" class="btn btn-outline-primary">Back to home</a>

<h1>Sign up<br>Customer</h1>
@if(session()->has('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Opps..</strong> {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <i class="fas fa-times"></i>
    </button>
</div>
@endif

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Yeay..</strong> {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <i class="fas fa-times"></i>
    </button>
</div>
@endif

<form action="{{ url('/login') }}" method="post">

    @csrf

    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

    <label for="password" class="mt-4">Password</label>
    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
    @error('password')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

    <button type="submit" class="btn btn-success mt-4">Login</button>

    <br>
    <span class="mt-4">Want to get your account? <a href="/register">Sign up here!</a></span>
    <br>
    <span class="mt-4">You are an admin? <a href="/login/admin">Sign in here!</a></span>
</form>
@endsection