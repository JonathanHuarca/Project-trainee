<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Carbon\Carbon;

class UserController extends Controller
{

    //Listado de usuarios
    public function list(){
      
        $data['users'] = User::paginate(5);
        
        return view('usuarios.list', $data);
    }

    //Formulario de usuarios
    public function userform(){
        return view('usuarios.userform');
    }

    //Guardar usuario
    public function save(Request $request){

        $request->validate([
            'name' => ['required'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:8']
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'date'=>$request->date
        ]);


        return back()->with('usuarioGuardado','Usuario guardado');
    }

    //Eliminar usuarios
    public function delete($id){
        User::destroy($id);

        return back()->with('usuarioEliminado','Usuario eliminado');
    }

    //Formulario para editar usuarios
    public function editform($id){
        $usuario = User::findOrFail($id);

        return view('usuarios.editform', compact('usuario'));
    }

    //Edición de usuarios
    public function edit(Request $request, $id){
    
        User::where('id', '=', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'date'=>$request->date
        ]);
        return back()->with('usuarioModificado','Usuario modificado');
    }
}
