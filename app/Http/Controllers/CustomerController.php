<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
// tambahkan ke semua controller
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
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
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
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
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        // validasi
        $request->validate([
            'username' => 'required',
            'e_mail' => 'required',
            'dateof_birth' => 'required',
            'gender' => 'required|not_in:0',
            'address' => 'required',
            'password' => 'required',
        ]);

        // masukkan data ke array
        $data = [
            'username' => $request->username,
            'e_mail' => $request->e_mail,
            'dateof_birth' => $request->dateof_birth,
            'gender' => $request->gender,
            'address' => $request->address,
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
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        return redirect('/dashboard/customer');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        $data = Customer::find($customer)->first();
        return view('customer.edit',['customer'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $customer)
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        $data = Customer::find($customer)->first();

        // validasi data
        $request->validate([
            'username' => 'required',
            'e_mail' => 'required',
            'dateof_birth' => 'required',
            'gender' => 'required|not_in:0',
            'address' => 'required',
            'password' => 'required',
        ]);

        // update data
        $data->username = $request->username;
        $data->e_mail = $request->e_mail;
        $data->dateof_birth = $request->dateof_birth;
        $data->gender = $request->gender;
        $data->address = $request->address;
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
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        $data = Customer::find($customer)->first();

        $data->delete();
        return redirect('/dashboard/customer')->with('status','Data '.$data->username.' has been removed');
    }
}
