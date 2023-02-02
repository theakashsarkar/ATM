<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.auth');
    }

    public function login(Request $request)
    {
        $isValidUser = Auth::attempt($request->mobile_number, $request->password);
        if ($isValidUser == 1)
        {
            Session::put('isLoggedIn', true);
            return 'Logged In';
        }
        Session::put('isLoggedIn', false);
        return 'Invalid User';
    }
    
}
