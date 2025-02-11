<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index()
    {
        $users = User::all();
        $data['users'] = $users;
        return view('user', ['users' => $users]);
    }
    function edit($id)
    {
    $user = User::find($id);
    $data['user'] = $user;
    return view('edit', $data);
    }
    function edit_action(Request $req)
    {
        //print_r($req->input());
        $muser = User::find ($req -> id);
        $muser -> name = $req->name;
        $muser -> email = $req->email;
        $muser -> password = $req->password;
        $muser -> save();
        return redirect('/user');
    }
    function delete(Request $req)
    {
    $muser = User::find($req->id);
    $muser -> delete();
    return redirect('/user');
    }
}
