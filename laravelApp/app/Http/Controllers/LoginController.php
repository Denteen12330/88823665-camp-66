<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\error;

class LoginController extends Controller
{
    //
    function index()
    {
        return view('login');
    }
    function login(Request $req)
    {
        $user = User::where('email', $req->email)->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            session(['error' => 'Your email or password is incorrect']);
            return view('login', ['email' => $req->email]);
            return redirect('login');
        }
        session()->forget('error');
        session(['user' => $user]);
        return redirect('dashboard');
    }
}
