<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UserController extends Controller
{
    //Listado de usuarios
    public function listar(){
        $data['users']= Usuario::paginate(3);

        return view ('usuarios.listar',$data);
    }
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
    //Eliminar Usuarios
    public function delete($id){
        
        Usuario::destroy ($id);

        return back()->with('UsuarioEliminado','Usuario eliminado');
    }
    //formulario para editar usuarios

    public function editform ($id){
        $usuario = Usuario::findOrFail($id);

        return view ('usuarios.editform', compact('usuario'));
    }
    //edicion de usuarios
    public function edit (Request $request, $id){
        $datosUsuario=request()->except((['_token','_method']));
        Usuario::where ('id','=',$id)->update($datosUsuario);

        return back()->with('UsuarioModificado','Usuario Modificado');

    }
}
