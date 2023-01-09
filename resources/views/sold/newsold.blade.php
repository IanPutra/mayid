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
                    <div class="row">
                            <div class="col-lg-auto">
                                <h6>Sold Table</h6>
                            </div>
                            <div class="col-lg-auto ms-auto">
                                <a href="{{ url('/dashboard/sold/create') }}" class="btn btn-success">Add Sold Product</a>
                            </div>
                        </div>
                    </div>
                <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Sold id</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Payment id</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product id</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer id</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $datas)
                            <tr>
                                <td class="text-center">
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$datas->payment_id}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$datas->product_id}}</p>  
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">{{$datas->customer_id}}</span>
                                </td>
                                <td class="align-middle text-center">
                                <span class="badge badge-sm bg-gradient-{{$datas->status == 'DELIVERED' ? 'success' : 'warning'}}">{{$datas->status}}</span>
                                </td>
                                <td class="align-middle text-center d-flex">
                                            <a href="{{ url('/dashboard/sold/'.$datas->sold_id.'/edit') }}" class="btn btn-primary btn-sm ms-2" data-toggle="tooltip" data-original-title="Edit Admin">
                                                <i class="fas fa-pencil"></i>
                                            </a>
                                            <!-- cek kalo statusnya masih pending baru tambil tombol untuk deliver -->
                                            @if($datas->status === 'PENDING')
                                            <form action="{{ url('dashboard/sold/deliver') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="soldId" value="{{ $datas->sold_id }}">
                                                <button class="btn btn-success ms-2 btn-sm" onclick="return confirm('Confirm deliver?');"><i class="fas fa-handshake"></i></button>
                                            </form>
                                            @endif

                                            <form action="{{ url('dashboard/sold/'.$datas->sold_id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger ms-2 btn-sm" onclick="return confirm('Are you sure you want to delete product {{ $datas->name }} ?');"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection