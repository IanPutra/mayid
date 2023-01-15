@extends('/customer_view.template')

@section('main-content')
<section class="mb-4 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                    <div class="row">
                            <div class="col-lg-auto">
                                <h1>Service Table</h1>
                            </div>
                            <div class="col-lg-auto ms-12">
                                <a href="{{ url('/servicenow') }}" class="btn btn-success">Service Now</a>
                            </div>
                        </div>
                    </div>
                <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Device name</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Service start</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Service status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Service end</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Device pick up</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Check Progress</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $datas)
                            <tr>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">{{$datas->device_name}}</span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">{{$datas->deskripsi}}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{$datas->service_start_time}}</span>
                                </td>
                                <td class="align-middle text-center">
                                <span class="badge badge-sm bg-gradient-success">{{$datas->service_status}}</span>
                                </td>
                                <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$datas->service_end_time}}</span>
                                </td>
                                <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$datas->device_pickup_time}}</span>
                                </td>
                                <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$datas->price}}</span>
                                </td>
                                <td class="align-middle text-center d-flex">
                                    <a href="{{ url('/progressdetail/'.$datas->service_id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="detail-progress">
                                        <i class="btn">Progress</i>
                                    <!-- cek kalo udh ada waktu pick up dan pick up time masih kosong maka tampilin tombolnya -->
                                    @if($datas->service_end_time !== NULL && $datas->device_pickup_time === NULL )
                                    <form action="{{ url('dashboard/service/pickup') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="serviceId" value="{{ $datas->service_id }}">          
                                        <button class="btn btn-success ms-2 btn-sm" onclick="return confirm('Confirm pick up {{ $datas->name }} ?');"><i class="fas fa-handshake">Pick up</i></button>
                                    </form>
                                    @endif
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