<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create()
    {
        return view('front.auth.signup');
    }

    public function store(Request $request)
    {
        // dd("fdsf");
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'password'=>'required|min:8',
        //     'confirmPassword'=>'required|same:password|min:8',
        // ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if($user->save()){
            Auth::login($user);
            Session::flash('message', 'Form Submit Successfully!'); 
            return redirect(route('auth.register'));
        }
    }
}
