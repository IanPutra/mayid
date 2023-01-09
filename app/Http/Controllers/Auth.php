<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class Auth extends Controller
{
    public function index()
    {
        if(Session::get('login')) {
            if(Session::get('loginrole') === 'customer') {
                return redirect('/');
            } else {
                return redirect('/dashboard');
            }
        }
        return view('auth.logincustomer');
    }

    public function admin()
    {
        if(Session::get('login')) {
            if(Session::get('loginrole') === 'customer') {
                return redirect('/');
            } else {
                return redirect('/dashboard');
            }
        }
        return view('auth.loginadmin');
    }

    public function loginCustomer(Request $request)
    {
        if(Session::get('login')) {
            if(Session::get('loginrole') === 'customer') {
                return redirect('/');
            } else {
                return redirect('/dashboard');
            }
        }
        $request->validate([
            'email' => 'required|exists:customer,e_mail',
            'password' => 'required'
        ]);

        $account = Customer::where('e_mail','=',$request->email)->first();

        // cek password
        if($account->password === $request->password)
        {
            Session::put('login',true);
            Session::put('loginid',$account->customer_id);
            Session::put('loginname',$account->username);
            Session::put('loginrole','customer');

            return redirect('/');
        } else {
            return redirect('/login')->with('status','Wrong password');
        }
    }

    public function loginAdmin(Request $request)
    {
        if(Session::get('login')) {
            if(Session::get('loginrole') === 'customer') {
                return redirect('/');
            } else {
                return redirect('/dashboard');
            }
        }

        $request->validate([
            'email' => 'required|exists:admin,e_mail',
            'password' => 'required'
        ]);

        $account = Admin::where('e_mail','=',$request->email)->first();

        // cek password
        if($account->password === $request->password)
        {
            Session::put('login',true);
            Session::put('loginid',$account->admin_id);
            Session::put('loginname',$account->username);
            Session::put('loginrole','admin');

            return redirect('/dashboard');
        } else {
            return redirect('/login/admin')->with('status','Wrong password');
        }
        return redirect('/dashboard');
    }

    public function signupcustomer()
    {
        if(Session::get('login')) {
            if(Session::get('loginrole') === 'customer') {
                return redirect('/');
            } else {
                return redirect('/dashboard');
            }
        }
        return view('auth.registercustomer');
    }

    public function registercustomer(Request $request)
    {
        if(Session::get('login')) {
            if(Session::get('loginrole') === 'customer') {
                return redirect('/');
            } else {
                return redirect('/dashboard');
            }
        }
        // validasi
        $request->validate([
            'username' => 'required',
            'e_mail' => 'required',
            'dateof_birth' => 'required',
            'gender' => 'required|not_in:0',
            'password' => 'required',
            'passwordConfirm' => 'required|same:password',
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
        return redirect('/login')->with ('success','You can use your account now');
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }
}
