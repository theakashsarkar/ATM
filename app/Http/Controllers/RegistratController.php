<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistratController extends Controller
{
    public static $store;
    public function index()
    {
        return view('Auth.register');
    }
    public function store(Request $request)
    {
        self::$store['Number'] = $request->mobile_number;
        self::$store['password'] = $request->password;
        return redirect()->route('user.login');
    }
}
