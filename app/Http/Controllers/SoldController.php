<?php

namespace App\Http\Controllers;

use App\Models\Sold;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSoldRequest;
use App\Http\Requests\UpdateSoldRequest;

class SoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sold::get();
        return view('sold.newsold',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::get();
        $products = Product::Get();
        return view('sold.create',['customers'=>$customers,'products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSoldRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer'=>'required|exists:customer,customer_id',
            'product' => 'required|exists:product,product_id',
            'payment' => 'required|not_in:0'
        ]);

        // variabel buat ambil jam skrg
        $now = now()->format('Y-m-d H:i:s');

        // data dimasukin ke payment
        $datapayment = [
            'method' => $request->payment,
            'time' => $now,
            'payment_verification' => 'PAID',
            'time_verification'=> $now
        ];

        // store data payment
        $payment = Payment::create($datapayment);

        $data = [
            'payment_id'=> $payment->payment_id,
            'product_id'=> $request->product,
            'customer_id'=> $request->customer,
            'status' => 'PENDING',
        ];

        Sold::create($data);

        return redirect('/dashboard/sold')->with('status','New data has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sold  $sold
     * @return \Illuminate\Http\Response
     */
    public function show(Sold $sold)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sold  $sold
     * @return \Illuminate\Http\Response
     */
    public function edit(Sold $sold)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSoldRequest  $request
     * @param  \App\Models\Sold  $sold
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSoldRequest $request, Sold $sold)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sold  $sold
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sold $sold)
    {
        //
    }

    public function deliver(Request $request)
    {
        // variabel buat ambil jam skrg
        $now = now()->format('Y-m-d H:i:s');

        $sold = Sold::find($request->soldId);
        $sold->status = 'DELIVERED';
        $sold->time_deliver = $now;
        $sold->save();

        return redirect('/dashboard/sold')->with('status','Product has been delivered!');
    }
}
