<?php

namespace App\Http\Controllers;

use App\Models\Sold;
use App\Models\Payment;
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
        return view('sold.create');
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
            'product'=>'required',
            'price' => 'required',
            'status' => 'required|not_in:0',
            
        ]);

        // variabel buat ambil jam skrg
        $now = now()->format('Y-m-d H:i:s');

        // data dimasukin ke payment
        $datapayment = [
            'method' => 'input',
            'time' => $now,
            'payment_verification' => 'PAID',
            'time_verif'=> $now
        ];

        // store data payment
        $payment = Payment::create($datapayment);

        $data = [
            'sold_id'=> $request->sold_id,
            'payment_id'=> $request->payment_id,
            'product_id'=> $request->product,
            'customer_id'=> $request->customer_id,
            'price' => $request->price,
            'status' => $request->status,
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
}
