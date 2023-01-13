<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Payment;
use App\Models\Progress;
use Illuminate\Http\Request;
// tambahkan ke semua controller
use Illuminate\Support\Facades\Session;

class CustomerViewService extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // copy ini ke semua controller customerview
        if(!Session::get('login') || Session::get('loginrole') !== 'customer') {
            return redirect('/login/customer');
        }
        $data = Service::where('customer_id','=',Session::get('loginid'))->get();
        return view('customer_view.bookservice',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // copy ini ke semua controller CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'customer') {
            return redirect('/login/customer');
        }
        $data = Service::where('customer_id','=',Session::get('loginid'))->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // copy ini ke semua controller CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'customer') {
            return redirect('/login/customer');
        }

        $request->validate([
            'nameid' => 'required',
            'payment' => 'required|not_in:0',
            'device' => 'required',
        ]);

        // variabel buat ambil jam skrg
        $now = now()->format('Y-m-d H:i:s');

        // data dimasukin ke payment
        $datapayment = [
            'method' => $request->payment,
            'time' => $now,
            'payment_verification' => 'PENDING',
        ];

        // store data payment
        $payment = Payment::create($datapayment);

        // data buat di store ke service
        $data = [
            'customer_id' => $request->nameid,
            'payment_id' => $payment->payment_id,
            'device_name' => $request->device,
            'service_start_time' => $now,
            'service_status' => 'ACCEPTED',
            'price' => 0,
        ];

        Service::create($data);

        return redirect('/customer_view/bookservice')->with('status','New data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        // copy ini ke semua controller CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'customer') {
            return redirect('/login/customer');
        }
        return view('bookservice.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
