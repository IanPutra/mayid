<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::get();

        return view('customer.index',['customer'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // validasi
        $request->validate([
            'username' => 'required',
            'e_mail' => 'required',
            'dateof_birth' => 'required',
            'gender' => 'required|not_in:0',
            'password' => 'required',
        ]);

        // masukkan data ke array
        $data = [
            'username' => $request->username,
            'e_mail' => $request->e_mail,
            'dateof_birth' => $request->dateof_birth,
            'gender' => $request->gender,
            'password' => $request->password,
        ];

        // parameter
        Customer::create($data);

        // balik ke cust page
        return redirect('/dashboard/customer')->with ('status','New data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $data = Product::find($customer)->first();
        return view('customer.edit',['customer'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $data = Product::find($customer)->first();

        // validasi data
        $request->validate([
            'username' => 'required',
            'e_mail' => 'required',
            'dateof_birth' => 'required',
            'gender' => 'required|not_in:0',
            'password' => 'required',
        ]);

        // update data
        $data->username = $request->username;
        $data->e_mail = $request->e_mail;
        $data->dateof_birth = $data->dateof_birth;
        $data->gender = $request->gender;
        $data->password = $request->password;

        // save data yang telah diupdate
        $data->save();

        // mengarahkan kembali menuju halaman product
        return redirect('/dashboard/customer')->with('status','Data '.$request->username.' has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $data = Customer::find($customer)->first();

        $data->delete();
        return redirect('/dashboard/customer')->with('status','Data '.$data->username.' has been removed');
    }
}
