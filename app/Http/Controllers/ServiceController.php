<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Payment;
use App\Models\Progress;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::get();
        return view('service.newservice',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameid' => 'required',
            'payment' => 'required|not_in:0',
            'device' => 'required',
            'price' => 'required'
        ]);

        // variabel buat ambil jam skrg
        $now = now()->format('Y-m-d H:i:s');

        // data dimasukin ke payment
        $datapayment = [
            'method' => $request->payment,
            'time' => $now,
            'payment_verification' => 'PENDING',
        ];

        // store data
        $payment = Payment::create($datapayment);

        // data buat di store ke service
        $data = [
            'customer_id' => $request->nameid,
            'payment_id' => $payment->payment_id,
            'device_name' => $request->device,
            'service_start_time' => $now,
            'service_status' => 'ACCEPTED',
            'price' => $request->price,
        ];

        Service::create($data);

        return redirect('/dashboard/service')->with('status','New data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($service)
    {
        $data = Service::find($service)->first();
        return view('service.edit',['service'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $service)
    {
        $data = Service::find($service);

        $request->validate([
            'device' => 'required',
            'price' => 'required',
        ]);

        $data->device_name = $request->device;
        $data->price = $request->price;

        $data->save();

        return redirect('/dashboard/service')->with('status','Data '.$request->name.' has been added');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($service)
    {
        $data = Service::find($service);

        $data->delete();
    
        return redirect('/dashboard/service')->with('status','Data '.$data->name.' has been removed');
    }

    // ini sama kaya edit()
    public function editprogress($id)
    {
        $data = Service::find($id);

        return view('service.updateprogress',['data'=>$data]);
    }

    public function detailprogress($id)
    {
        $service = Service::find($id);
        $progress = Progress::where('service_id','=',$id)->orderBy('time','DESC')->get();
        return view('service.detailprogress',['progress'=>$progress,'service'=>$service]);
    }

    // ini sama kaya update
    public function updateprogress(Request $request)
    {
        $id = $request->serviceId;

        // variabel buat ambil jam skrg
        $now = now()->format('Y-m-d H:i:s');

        // validasi input
        $request->validate([
            'serviceId' => 'required',
            'progress' => 'required|not_in:0',
            'adminId' => 'required',
            'detail' => 'required'
        ]);

        // kalo progress yang dipilih finish
        if($request->progress === 'FINISHED')
        {
            // update jadi finished
            $service = Service::find($id);
            $service->service_status = 'FINISHED';
            $service->service_end_time = $now;
            $service->save();
        // kalo bukan finished yang dipilih
        } else {
            // update jadi on going
            $service = Service::find($id);
            $service->service_status = 'ON GOING';
            $service->service_end_time = NULL;
            $service->save();

            // sambil nabah ke tabel progress
            $progress = [
                'service_id' => $request->serviceId,
                'admin_id' => 2,
                'time' => $now,
                'detail' => $request->detail
            ];

            // store ke progress
            Progress::create($progress);
        }

        return redirect('dashboard/service');
    }

    // picked up
    public function pickup(Request $request)
    {
        // variabel buat ambil jam skrg
        $now = now()->format('Y-m-d H:i:s');

        $id = $request->serviceId;

        // update data picked up
        $data = Service::find($id);
        $data->device_pickup_time = $now;
        $data->save();

        // set paymen menjadi PAID dan tambah verifikasi waktu
        $payment = Payment::find($data->payment_id);
        $payment->payment_verification = 'PAID';
        $payment->time_verification = $now;
        $payment->save();

        return redirect('dashboard/service');
    }
}
