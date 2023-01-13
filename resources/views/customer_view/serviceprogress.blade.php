@extends('/customer_view.template')

@section('main-content')
@section('main-content')
<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Detail Service</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h1><b>{{ $service->device_name }}</b></h1>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <h4>Progress:</h4>
                                <ul>
                                    @foreach($progress as $prog)
                                    <li>
                                        <strong class="text-primary" >{{ $prog->time }} {{ $loop->iteration === 1 ? '(current)' : '' }}</strong>
                                        <br>{{ $prog->detail }}
                                        <br><span class="text-sm">by : admin id {{ $prog->admin_id }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection