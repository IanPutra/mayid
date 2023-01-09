<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CustomerView extends Controller
{
    public function index()
    {
        return view('customer_view.index');
    }

    public function product()
    {
        $data = Product::all();
        return view('customer_view.product', compact('data'));
    }

    public function productbuy($id)
    {
        $data = Product::find($id);
        // $id2 = Auth::user()->id_user;
        // $dataUser = User::where('id_user', '=', $id2)->first();
        return view('customer_view.product-buy', compact('data'));
    }



    public function about()
    {
        return view('customer_view.about');
    }
    


}
