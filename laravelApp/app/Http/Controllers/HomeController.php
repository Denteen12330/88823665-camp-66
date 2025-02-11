<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //function __construct()
    //{
    //    $user = session()->get('user');
    //    if(!isset($user)){
    //        redirect('/login')->send();
    //    }
    //}
    function index()
    {
        return view('dashboard');
    }
    function error404()
    {
        return view('errors.404');
    }
    function error500()
    {
        return view('errors.500');
    }
}
