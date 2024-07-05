<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)

    {


        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to('home');
        }
        Alert::error('Ups', 'Mohon periksa email dan password anda!!');
        return back();
    }
    public function register(Request $request)
    {
        return view('register');
    }
    public function actionRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);




        User::create($request->all());
        toast('Your Post as been submited!', 'success');
        return redirect()->to('register')->with('success', 'Register Berhasil');
    }
}
