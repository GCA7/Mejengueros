<?php

namespace App\Http\Controllers;
use Crypt;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class UserController extends Controller
{
    public function registrar(Request $request)
    {
    	$user = new User;
        $user->name = $request->input('nombre');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = Crypt::encrypt($request->input('pass'));
        $user->save();
        return redirect('index');
    }
}
