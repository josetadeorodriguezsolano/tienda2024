<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function vistaLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $usuario = User::where('email', $request->email)->get()->first();

        if($usuario && Hash::check($request->password, $usuario->password)){
            Session::put('usuario', $usuario);
            return redirect('principal')
        }else{
            return "Usuario o contraseña incorrectos";
        }



        $usuario = $request->usuario;
        $password = $request->password;
        if ($usuario == "admin" && $password == "1234") {
            return "Bienvenido";
        } else {
            return "Usuario o contraseña incorrectos";
        }
    }
}
