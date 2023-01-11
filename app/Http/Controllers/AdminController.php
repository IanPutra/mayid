<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\StoreadminRequest;
use App\Http\Requests\UpdateadminRequest;
// tambahkan ke semua controller
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
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
        $data = Admin::get();
        return view('admin.newadmin',['data'=>$data]);
    }

    public function dashboard()
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        return view('dashboard');
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
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        // kiri sesuai input name
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'umur' => 'required',
            'password' => 'required',
            'gender' => 'required|not_in:0',
            'department' => 'required|not_in:0'
        ]);

        // kiri sesuai database ~ kanan sesuai input name
        $data = [
            'username' => $request->name,
            'e_mail' => $request->email,
            'dateof_birth' => $request->umur,
            'password'=> $request->password,
            'gender' => $request->gender,
            'department' => $request->department,
        ];

        Admin::create($data);

        return redirect('/dashboard/admin')->with('status','New data has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        } 
        return redirect('/dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($admin)
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        $data = Admin::find($admin);
        return view('admin.edit',['admin'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateadminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $admin)
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        $data = Admin::find($admin);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'umur' => 'required',
            'password' => 'required',
            'gender' => 'required|not_in:0',
            'department' => 'required|not_in:0'
        ]);

        $data->username = $request->name;
        $data->e_mail = $request->email;
        $data->dateof_birth = $request->umur;
        $data->password = $request->password;
        $data->gender = $request->gender;
        $data->department = $request->department;

        $data->save();

        return redirect('/dashboard/admin')->with('status','Data '.$request->username.' has been added');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($admin)
    {
        // copy ini ke semua controller kecuali Auth dan CostumerView
        if(!Session::get('login') || Session::get('loginrole') !== 'admin') {
            return redirect('/login/admin');
        }
        $data = Admin::find($admin);

        $data->delete();
        return redirect('/dashboard/admin')->with('status','Data '.$data->username.' has been removed');
    }
}
