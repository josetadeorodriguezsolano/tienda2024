<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function vistalogin(){
        return view('login');
    }

    public function login(Request $request){
        $usuario = User::where('email',$request->email)->get()->first();
        if($usuario && Hash::check($request->password,$usuario->password))
        {
            Session::put('user',$usuario);
            return redirect('/productos/formAlta');
        }
        return back()->with('error','Correo o contraseña incorrecta');
    }
}
