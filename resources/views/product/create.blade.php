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
                        <h6>Add product</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-6">
                            <form action="{{ url('/dashboard/product') }}" method="post">
                                @csrf
                                {{-- kolom nama --}}
                                <label class="mt-2" for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Product name" >
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom type --}}
                                <label class="mt-2" for="type">Type</label>
                                <select name="type" id="type" class="form-select @error('type') is-invalid @enderror">
                                    <option value="">Select type</option>
                                    <option value="Laptop">Laptop</option>
                                    <option value="PC">Personal Computer</option>
                                </select>
                                @error('type')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom desc --}}
                                <label class="mt-2" for="description">Description</label>
                                <textarea name="description" class="form-control @error('type') is-invalid @enderror" id="description" rows="3" placeholder="Product description" value="@old('description')"></textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom harga --}}
                                <label class="mt-2" for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Price" value="@old('price')">
                                @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                {{-- kolom amount --}}
                                <label class="mt-2" for="amount">Amount</label>
                                <input type="number" name="amount" id="amount" class="form-control @error('amount') is-invalid @enderror" placeholder="amount" value="@old('amount')">
                                @error('amount')
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