<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    function myfunction(Request $req, $varl=""){
        $data['value_id'] = $varl;
        $data['myinput'] = $req->input('myinput');
        return view('myview', $data);
    }
    function assign(Request $req)
    {
        $number = $req->input('typeNumber');
        return view('Laravelform',compact('number'));
    }
    function func(){
        return view('Laravelform');
    }
}