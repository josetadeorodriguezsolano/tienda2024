<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function vistaLogin()
    {
        // $user = new User();
        // $user->name = "admin";
        // $user->email = 'administrador@tienda.test';
        // $user->password = Hash::make('123');
        // $user->save();
        return view('login');
    }

    public function login(Request $request)
    {
        $usuario = User::where('email',$request->correo)->get()->first();
        if ($usuario &&
            Hash::check($request->password,$usuario->password))
        {
            Session::put('user',$usuario);
            return redirect('/productos/formAlta');
        }
        Session::flash("error","Correo o passowrd incorrectos");
        return back()->with('error', 'Correo o passowrd incorrectos');
    }
}
