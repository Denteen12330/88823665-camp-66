<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class MyController extends Controller
{
    function myFunction(Request $req)
    {
        return view('multable');
    }

    function assign(Request $req)
    {
        $number = $req->typeNumber;
        return view('multable', ['number'=>$number]);
    }
}
abstract class Controller
{
    //
}
