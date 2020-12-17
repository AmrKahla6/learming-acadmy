<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Admin;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function doLogin(Request $request)
    {
        $data = $request->validate([
            'email'    => 'required|email|max:191',
            'password' => 'required|string'
        ]);

        // $new_pass = bcrypt($data['password']);

        if(!auth()->guard('admin')->attempt(['email' => $data['email'] , 'password' => $data['password']]))
        {
            // dd($data);
            return Redirect::back()->withErrors(['Try With Correct Email and Password!!']);
        }
            return redirect(route('admin.home'));
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect(route('admin.login'));
    }
}
