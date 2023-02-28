<?php

namespace App\Http\Controllers;
use App\Models\UsersModel;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function userRegister(Request $request){
        request()->validate([
            'name' => ['required'],
            'email' => ['required'],
            'profession' => ['required'],

        ]);

        $users = new UsersModel();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->profession = $request->profession;
        $users->save();

        return redirect('profession');
    }
}
