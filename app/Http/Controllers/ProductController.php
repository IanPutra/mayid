<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
// tambahkan ke semua controller
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
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
        $data = Product::get();
        return view('product.index',['products'=>$data]);
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
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        // validasi data
        $request->validate([
            'name' => 'required',
            'type' => 'required|not_in:0',
            'description' => 'required',
            'price' => 'required|gt:0',
            'amount' => 'required|gt:0',
        ]);

        // memasukkan data dari form ke variabel array
        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price,
            'amount' => $request->amount
        ];

        // create data menggunakan parameter $data
        Product::create($data);

        // mengarahkan kembali menuju halaman product
        return redirect('/dashboard/product')->with('status','New data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        return redirect('/dashboard/payment');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        $data = Product::find($product);
        return view('product.edit',['product'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        $data = Product::find($product);

        // validasi data
        $request->validate([
            'name' => 'required',
            'type' => 'required|not_in:0',
            'description' => 'required',
            'price' => 'required|gt:0',
            'amount' => 'required|gt:0'
        ]);

        // update data
        $data->name = $request->name;
        $data->type = $request->type;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->amount = $request->amount;

        // save data yang telah diupdate
        $data->save();

        // mengarahkan kembali menuju halaman product
        return redirect('/dashboard/product')->with('status','Data '.$request->name.' has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        $data = Product::find($product);

        $data->delete();
        return redirect('/dashboard/product')->with('status','Data '.$data->name.' has been removed');
    }
}
