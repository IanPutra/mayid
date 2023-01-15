<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Sold;
// tambahkan ke semua controller
use Illuminate\Support\Facades\Session;

class CustomerView extends Controller
{
    public function index()
    {
        return view('customer_view.index');
    }

    public function product()
    {
        $data = Product::all();
        return view('customer_view.newproduct', compact('data'));
    }

    public function productbuy($id)
    {
        if(!Session::get('login') || Session::get('loginrole') !== 'customer') {
            return redirect('/login');
        }
            $data = Customer::get();
            $data = Product::find($id);
            // $id2 = Auth::user()->id_user;
            // $dataUser = User::where('id_user', '=', $id2)->first();
            return view('customer_view.product-buy', compact('data'));
        
    }



    public function about()
    {
        return view('customer_view.about');
    }

    public function cart()
    {
        return view('customer_view.cart');
    }
    
    public function services()
    {
        return view('customer_view.services');
    }

    public function login()
    {
        return view('customer_view.login');
    }   

    public function signUp()
    {
        return view('customer_view.signup');
    }

    public function buy(Request $request)
    {
        $request->validate([
            'productId' => 'required',
            'paymentMethod' => 'required|not_in:0'
        ]);

        $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $int = '1234567890';

        //generate
        $paycode = '';
        do {
            $generate = '';
            for ($i = 0; $i < 3; $i++) {
            $generate .= $char[rand(0, 26 - 1)];
            }
            for ($i = 3; $i < 16; $i++) {
                $generate .= $int[rand(0, 10 - 1)];
            }
            $paycode = $generate;
        } while (Payment::where('payment_code','=',$paycode)->count() > 0); // cek udh ada yang payment codenya gini ga

        // tambah payment
        $paymentData = [
            'method' => $request->paymentMethod,
            'payment_code' => $paycode,
            'time' => new DateTime(),
            'payment_verification' => 'PENDING'
        ];

        $payment = Payment::create($paymentData);


        // tambah data sold
        $soldData = [
            'payment_id' => $payment->payment_id,
            'product_id' => $request->productId,
            'customer_id' => Session::get('loginid'),
            'status' => 'PENDING'
        ];

        $sold = Sold::create($soldData);

        return redirect('/product');
    }
}
