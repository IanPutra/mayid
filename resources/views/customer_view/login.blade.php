@extends('/customer_view.template')

@section('main-content')
<div class="about pt-5">
    <div class="container">
       <div class="row d_flex">
          <div class="col-md-5">
             <div class="titlepage">
                <h2>Login</h2>
                <p>Don't have an account? <a href="/customer_view/signUp.blade.php" class="">click here!</a></p>
             </div>
          </div>
          <div class="col-md-7">
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
       </div>
    </div>
</div>
@endsection