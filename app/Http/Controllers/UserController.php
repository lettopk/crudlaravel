<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UserController extends Controller
{
    //Formulario Usuarios
    public function userform(){
        return view ('Usuarios.userform');
    }

    //Guardar Usuarios
      public function save(Request $request){

        $validator = $this->validate($request,[
            'nombre'=> 'required|String|max:255',
            'email' => 'required|String|max:255|email|unique:usuarios'
        ]);

        $userdata = request()->except('_token');
        Usuario::insert($userdata);

        return back()->with('usuarioGuardado','Usuario Guardado');
    }
}
